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
