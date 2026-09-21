from pathlib import Path
import numpy as np
from PIL import Image, ImageDraw, ImageFont

ROOT = Path("assests/Mango engineers images")
JPG = ROOT / "jpg"
NEW = "+91 9649695189"

TARGETS = {
    "jdbc-course-jaipur-mango-engineers.webp": (46, 966, 264, 46),
    "spring-mvc-course-jaipur-mango-engineers.webp": (52, 972, 264, 44),
}

FONTS = [
    "/usr/share/fonts/truetype/dejavu/DejaVuSans-Bold.ttf",
    "/usr/share/fonts/truetype/liberation2/LiberationSans-Bold.ttf",
    "/usr/share/fonts/truetype/dejavu/DejaVuSans.ttf",
]

def font(size):
    for p in FONTS:
        if Path(p).exists():
            return ImageFont.truetype(p, size)
    return ImageFont.load_default()

def bg_color(img, box):
    x, y, w, h = box
    pad = max(4, int(h * 0.25))
    x0, y0 = max(0, x-pad), max(0, y-pad)
    x1, y1 = min(img.width, x+w+pad), min(img.height, y+h+pad)
    a = np.array(img.convert("RGB"))
    parts = []
    if y0 < y: parts.append(a[y0:y, x0:x1])
    if y+h < y1: parts.append(a[y+h:y1, x0:x1])
    if x0 < x: parts.append(a[y0:y1, x0:x])
    if x+w < x1: parts.append(a[y0:y1, x+w:x1])
    px = np.concatenate([p.reshape(-1,3) for p in parts if p.size], axis=0)
    med = np.median(px, axis=0) if len(px) else np.array([255,255,255])
    return tuple(int(v) for v in med)

def text_color(bg):
    lum = 0.2126*bg[0] + 0.7152*bg[1] + 0.0722*bg[2]
    return (20,20,20) if lum > 150 else (255,255,255)

def replace(img, bbox):
    img = img.convert("RGB")
    d = ImageDraw.Draw(img)
    x,y,w,h = bbox
    extra = int(w * 0.42)
    px = max(5, int(h*0.22))
    py = max(3, int(h*0.14))
    x0,y0 = max(0,x-px), max(0,y-py)
    x1,y1 = min(img.width,x+w+extra+px), min(img.height,y+h+py)
    bg = bg_color(img, (x0,y0,x1-x0,y1-y0))
    d.rectangle((x0,y0,x1,y1), fill=bg)
    fs = max(10, int(h*0.95*1.15))
    maxw = x1-x0-2*px
    maxh = y1-y0-2*py
    while fs > 8:
        f = font(fs)
        tb = d.textbbox((0,0), NEW, font=f)
        tw,th = tb[2]-tb[0], tb[3]-tb[1]
        if tw <= maxw and th <= maxh:
            break
        fs -= 1
    f = font(fs)
    tb = d.textbbox((0,0), NEW, font=f)
    th = tb[3]-tb[1]
    tx = x0 + px
    ty = y0 + max(0,((y1-y0)-th)//2) - tb[1]
    d.text((tx,ty), NEW, font=f, fill=text_color(bg))
    return img

JPG.mkdir(exist_ok=True)
for name, bbox in TARGETS.items():
    p = ROOT / name
    with Image.open(p) as im:
        out = replace(im, bbox)
    out.save(p, "WEBP", quality=96, method=6)
    out.save(JPG / (p.stem + ".jpg"), "JPEG", quality=96, subsampling=0, optimize=True)
    print("FIXED", name, bbox, flush=True)
