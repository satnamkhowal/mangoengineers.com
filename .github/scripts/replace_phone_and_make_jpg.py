from __future__ import annotations

import re
from pathlib import Path

import numpy as np
import pytesseract
from PIL import Image, ImageDraw, ImageFont, ImageOps
from pytesseract import Output

SOURCE = Path("assests/Mango engineers images")
JPG_DIR = SOURCE / "jpg"
OLD = "7231968183"
NEW = "+91 9649695189"
VALID_EXTS = {".webp", ".png", ".jpg", ".jpeg"}

FONT_CANDIDATES = [
    "/usr/share/fonts/truetype/dejavu/DejaVuSans-Bold.ttf",
    "/usr/share/fonts/truetype/liberation2/LiberationSans-Bold.ttf",
    "/usr/share/fonts/truetype/dejavu/DejaVuSans.ttf",
]


def only_digits(s: str) -> str:
    return re.sub(r"\D", "", s or "")


def union_box(boxes):
    xs = [b[0] for b in boxes]
    ys = [b[1] for b in boxes]
    x2s = [b[0] + b[2] for b in boxes]
    y2s = [b[1] + b[3] for b in boxes]
    return (min(xs), min(ys), max(x2s) - min(xs), max(y2s) - min(ys))


def find_number_bbox(img: Image.Image):
    scale = 2
    enlarged = img.resize((img.width * scale, img.height * scale), Image.Resampling.LANCZOS)

    variants = [
        ("rgb", enlarged.convert("RGB")),
        ("gray", ImageOps.autocontrast(enlarged.convert("L")).convert("RGB")),
    ]

    gray = ImageOps.autocontrast(enlarged.convert("L"))
    arr = np.array(gray)
    thresh = np.where(arr > 165, 255, 0).astype(np.uint8)
    variants.append(("threshold", Image.fromarray(thresh).convert("RGB")))

    configs = [
        "--oem 3 --psm 11 -c tessedit_char_whitelist=0123456789+-",
        "--oem 3 --psm 6 -c tessedit_char_whitelist=0123456789+-",
        "--oem 3 --psm 12 -c tessedit_char_whitelist=0123456789+-",
    ]

    for _, variant in variants:
        for config in configs:
            data = pytesseract.image_to_data(variant, output_type=Output.DICT, config=config)
            n = len(data.get("text", []))

            # Direct token match.
            for i in range(n):
                d = only_digits(data["text"][i])
                if OLD in d:
                    x, y, w, h = data["left"][i], data["top"][i], data["width"][i], data["height"][i]
                    return tuple(int(round(v / scale)) for v in (x, y, w, h))

            # Reconstruct OCR lines to handle spaces / split phone numbers.
            lines = {}
            for i in range(n):
                d = only_digits(data["text"][i])
                if not d:
                    continue
                key = (
                    data["page_num"][i],
                    data["block_num"][i],
                    data["par_num"][i],
                    data["line_num"][i],
                )
                lines.setdefault(key, []).append(
                    {
                        "digits": d,
                        "box": (data["left"][i], data["top"][i], data["width"][i], data["height"][i]),
                        "word": data["word_num"][i],
                    }
                )

            for tokens in lines.values():
                tokens.sort(key=lambda t: t["word"])
                joined = "".join(t["digits"] for t in tokens)
                start = joined.find(OLD)
                if start < 0:
                    continue
                end = start + len(OLD)
                pos = 0
                chosen = []
                for t in tokens:
                    next_pos = pos + len(t["digits"])
                    if next_pos > start and pos < end:
                        chosen.append(t["box"])
                    pos = next_pos
                if chosen:
                    x, y, w, h = union_box(chosen)
                    x, y, w, h = tuple(int(round(v / scale)) for v in (x, y, w, h))
                    # OCR can occasionally merge unrelated numeric fragments on the same line.
                    # The phone number area on these course cards is much narrower, so clamp
                    # suspiciously wide boxes before painting over the footer.
                    max_reasonable_w = int(img.width / scale * 0.22)
                    if w > max_reasonable_w:
                        w = max_reasonable_w
                    return (x, y, w, h)

    return None


def sample_background(img: Image.Image, box):
    x, y, w, h = box
    pad = max(4, int(h * 0.25))
    x0 = max(0, x - pad)
    y0 = max(0, y - pad)
    x1 = min(img.width, x + w + pad)
    y1 = min(img.height, y + h + pad)

    a = np.array(img.convert("RGB"))
    samples = []
    if y0 < y:
        samples.append(a[y0:y, x0:x1])
    if y + h < y1:
        samples.append(a[y + h:y1, x0:x1])
    if x0 < x:
        samples.append(a[y0:y1, x0:x])
    if x + w < x1:
        samples.append(a[y0:y1, x + w:x1])

    samples = [s.reshape(-1, 3) for s in samples if s.size]
    if not samples:
        return (255, 255, 255)

    pixels = np.concatenate(samples, axis=0)
    med = np.median(pixels, axis=0)
    return tuple(int(v) for v in med)


def choose_text_color(bg):
    lum = 0.2126 * bg[0] + 0.7152 * bg[1] + 0.0722 * bg[2]
    return (20, 20, 20) if lum > 150 else (255, 255, 255)


def load_font(size: int):
    for path in FONT_CANDIDATES:
        if Path(path).exists():
            return ImageFont.truetype(path, size=size)
    return ImageFont.load_default()


def replace_phone(img: Image.Image, bbox):
    img = img.convert("RGB")
    draw = ImageDraw.Draw(img)

    x, y, w, h = bbox
    extra_w = int(w * 0.42)
    pad_x = max(5, int(h * 0.22))
    pad_y = max(3, int(h * 0.14))

    x0 = max(0, x - pad_x)
    y0 = max(0, y - pad_y)
    x1 = min(img.width, x + w + extra_w + pad_x)
    y1 = min(img.height, y + h + pad_y)

    bg = sample_background(img, (x0, y0, x1 - x0, y1 - y0))
    draw.rectangle((x0, y0, x1, y1), fill=bg)

    target_h = max(12, int(h * 0.95))
    font_size = max(10, int(target_h * 1.15))
    max_w = max(20, x1 - x0 - 2 * pad_x)
    max_h = max(12, y1 - y0 - 2 * pad_y)

    while font_size > 8:
        font = load_font(font_size)
        tb = draw.textbbox((0, 0), NEW, font=font)
        tw, th = tb[2] - tb[0], tb[3] - tb[1]
        if tw <= max_w and th <= max_h:
            break
        font_size -= 1
    else:
        font = load_font(8)
        tb = draw.textbbox((0, 0), NEW, font=font)
        tw, th = tb[2] - tb[0], tb[3] - tb[1]

    tx = x0 + pad_x
    ty = y0 + max(0, ((y1 - y0) - th) // 2) - tb[1]
    draw.text((tx, ty), NEW, font=font, fill=choose_text_color(bg))
    return img


def save_in_original_format(img: Image.Image, path: Path):
    ext = path.suffix.lower()
    if ext == ".webp":
        img.save(path, "WEBP", quality=96, method=6)
    elif ext == ".png":
        img.save(path, "PNG", optimize=True)
    else:
        img.save(path, "JPEG", quality=96, subsampling=0, optimize=True)


def main():
    JPG_DIR.mkdir(parents=True, exist_ok=True)
    files = sorted(
        p for p in SOURCE.iterdir()
        if p.is_file() and p.suffix.lower() in VALID_EXTS
    )

    matched = []
    unmatched = []

    for path in files:
        with Image.open(path) as im:
            img = im.convert("RGB")

        bbox = find_number_bbox(img)
        if bbox:
            edited = replace_phone(img, bbox)
            save_in_original_format(edited, path)
            matched.append(path.name)
            out = edited
            print(f"MATCHED: {path.name} bbox={bbox}")
        else:
            unmatched.append(path.name)
            out = img
            print(f"NO_PHONE_MATCH: {path.name}")

        jpg_path = JPG_DIR / f"{path.stem}.jpg"
        out.save(jpg_path, "JPEG", quality=96, subsampling=0, optimize=True)

    report = [
        f"Source images: {len(files)}",
        f"Phone replaced: {len(matched)}",
        f"No phone match: {len(unmatched)}",
        "",
        "Matched files:",
        *matched,
        "",
        "No-match files:",
        *unmatched,
    ]
    (SOURCE / "phone-replacement-report.txt").write_text("\n".join(report), encoding="utf-8")

    print("\n".join(report[:3]))


if __name__ == "__main__":
    main()
