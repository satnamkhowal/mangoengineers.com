# Mango Engineers Work Log

Append-only record. Do not erase worker or integration history.

## 2026-09-22 — Master coordinator bootstrap

Coordinator reviewed current repository truth, recent commits, branches and open PR state.

Verified:
- main advanced through the B002 merge and B003 integration.
- B003 is merged on main at commit 3dc4d4dd61db6d6a5d04a44fe3e4b370f72bfbda.
- no open pull requests were present during this cycle.
- ai/fix-contact-lead-form is still IN_PROGRESS and must not be merged until its worker QA/status reaches REVIEW.
- build/mango-home-v1 and the two refactor branches are significantly behind main and touch shared files; they require semantic integration review, not wholesale merge.
- master audit notes robots/sitemap and live-to-repository URL migration remain unresolved.

Shared coordination files were bootstrapped on main so future workers can coordinate from repository state.

Checks performed:
- branch-vs-main compare for all visible worker branches
- B003 representative page/content/schema/link/image-path review
- shared PHP architecture and .htaccess review
- lead-form branch pre-review while still IN_PROGRESS

Production status was not assumed from repository merges.


## 2026-09-22 — Header logo sizing fix

User-reported issue: oversized Mango Engineers logo was expanding/disturbing the shared header.

Implemented on `main`:
- Added `assets/css/mango-overrides.css` with scoped responsive logo constraints for header-style-7.
- Desktop logo capped at 210px wide / 56px high.
- Tablet logo capped at 190px / 50px.
- Mobile header logo capped at 160px / 42px and popup logo at 175px / 42px.
- Loaded the override stylesheet after `assets/css/app.css` from `includes/head.php`.
- Existing vendor/theme CSS was left untouched.

Commits:
- `8ac90081874adbb432ed4386b85f8de0ccdb6148` — responsive header logo sizing override.
- `426987b32009813a45b8c6e22abf6bdc2269adb6` — load override stylesheet.

Status: IMPLEMENTED/MERGED on main. Production deployment/live verification not assumed.

## 2026-09-22 — Integration review: superseded branches and CI gate

Branches reviewed:
- build/mango-home-v1
- refactor/php-common-layout
- refactor/php-page-bodies

Decision:
- No wholesale merge for these branches.
- build/mango-home-v1 is substantially behind main; current main contains equivalent/newer homepage/header/catalogue work plus direct links to merged course pages.
- Common-layout refactor has core files already integrated; selected files such as .htaccess, footer, site-config and page.php are identical, while main head/header/page-config are newer.
- Page-body refactor is superseded by newer main page bodies and later demo/course cleanup.

Shared integration completed:
- PHP Architecture Check now runs on direct pushes to main.
- Commit: b832c2c31b92cacb1a23e8cd9efc975c8878a8d6
- A GitHub Actions run was triggered and was queued when checked.

No production deployment/live claim was made.

## 2026-09-22 — Cross-device responsive pass

Scope: shared responsive behavior for phone, iPhone, iPad/tablet, laptop and desktop widths while preserving the existing EduBlink/Mango Engineers theme.

Implemented:
- Expanded `assets/css/mango-overrides.css` as the single theme-safe responsive override layer; vendor/theme CSS remains untouched.
- Added overflow/media safeguards for long content, images, embeds, forms and content columns.
- Added laptop-specific header compaction for 1200–1399px so the logo, navigation and counselling CTA fit more reliably.
- Added tablet/iPad header sizing, 44px touch targets and a viewport-safe mobile navigation drawer.
- Added iPhone/mobile header and logo sizing down through compact <=374px widths.
- Reworked the programming homepage hero at <=991px to remove the desktop min-height dependency, improve heading scaling, stack/wrap CTAs and make feature items responsive.
- Reduced oversized feature-card padding at tablet/mobile widths.
- Tightened course card spacing on small phones.
- Added horizontally scrollable content tables, responsive embeds and 16px mobile form controls to avoid iOS input zoom.
- Added small-screen footer wrapping safeguards.

Representative repository checks:
- Shared stylesheet is loaded globally after `assets/css/app.css` from `includes/head.php`.
- Header selectors verified against `includes/header.php`.
- Homepage hero/course selectors verified against `pages/index.php`.
- Course, breadcrumb, content-grid and form structures cross-checked on representative page bodies.
- CSS brace validation: balanced (depth 0, no negative nesting).
- Responsive branch was rebuilt from the latest `main` after detecting concurrent repository changes; no parallel-worker commit was overwritten.

Implementation commit:
- `b8909d590debf4f4602065feee19916212c3f44f` — cross-device responsive override pass.

Status: IMPLEMENTED on `ai/responsive-all-devices-20260922-v2`; production deployment/live branch rendering is not assumed.



## 2026-09-22 — ME-LEAD-001 contact/enquiry repair

Worker: worker-ai-lead-01  
Implementation branch: `ai/fix-contact-lead-form-v3`  
PR: #13  
Status: REVIEW

Scope completed:
- Replaced EduBlink demo address, email, phone, social links and Melbourne map on the contact page.
- Reused centralized Mango Engineers phone, Jaipur branches, map links and social profiles.
- Added `info@mangoengineers.com` to site config for contact/lead use.
- Repointed the enquiry form from the external EduBlink demo endpoint to local `mail.php`.
- Added server-side validation for name, phone, optional email, course interest and explicit enquiry consent.
- Added honeypot handling, same-origin validation and a basic per-session submission throttle.
- Preserved the existing theme form classes and the JSON response shape expected by the existing AJAX form JavaScript.
- Added non-JavaScript success/error redirects and phone/email fallback messaging.
- No submitted lead data is stored in repository files or GitHub logs.
- Avoided linking the form to the current placeholder privacy-policy page; that page remains a separate demo-cleanup issue.

Code files in PR #13:
- `includes/site-config.php`
- `pages/contact-us.php`
- `mail.php`

Public URL affected:
- `contact-us.html` (preserved; no URL rename)

Checks:
- PHP Architecture Check passed during implementation QA.
- Demo external form endpoint, fake contact details and Melbourne map are absent from the replacement page.
- Handler success/error payloads remain compatible with the existing theme JavaScript.
- PR #10 was closed as stale after parallel main changes; PR #13 is the clean latest-main handoff.

Known issues / integration requirements:
- Production PHP `mail()` delivery cannot be verified from repository CI. After deployment, send one authorized synthetic test enquiry and verify inbox delivery.
- If the production host does not permit reliable PHP `mail()`, replace only the transport layer with the project's authenticated SMTP/host mail method.
- `pages/privacy-policy.php` is still template/Lorem Ipsum content and needs a separate verified-content cleanup task.
- Superseded branches `ai/fix-contact-lead-form` and `ai/fix-contact-lead-form-v2` must not be merged wholesale.

Next action:
- Coordinator reviews PR #13, merges if approved, then verifies deployed form delivery before marking the task DONE/LIVE VERIFIED.
