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


### ME-LEAD-001 integration update

The contact/lead implementation is now integrated on `main`:
- `f3dd17161e6fdb13d2441e12f0e31b12895fc8a4` — verified contact email integration.
- `a3176a6142182f54ac2facb4ffaa63b6b9cc39e5` — validated Mango Engineers enquiry form integration.
- `4a0e8fee05f71ebc159e68c91ef8bfd1c213b941` — hardened local PHP lead handler integration.
- `33a70b9fa9bbfac5a6096ad7b0f3df170cfd741a` — self-contained consent wording and sensitive-data warning.

Verification:
- `includes/site-config.php`, `pages/contact-us.php` and `mail.php` on current main exactly match the final worker branch snapshots.
- PHP Architecture Check passed on the final worker implementation branch before integration.
- PR #10 and PR #13 were closed as superseded/already-integrated; they must not be merged later.

State:
- Code: IMPLEMENTED + MERGED on main.
- Deployment: not verified.
- Lead delivery: not verified.
- Task remains REVIEW until an authorized synthetic enquiry reaches the configured inbox on the deployed host.

## 2026-09-22 — Integration cycle: B004/B005, lead form, demo cleanup and production smoke test

Reviewed/integrated state:
- B004 is integrated on main at c781c68dd2cd5d2a97cf7ecc3d02240f1aec0e85; PHP architecture check passed.
- B005 is integrated on main at 631edf3dbfeb67861bbafaafb32068fb0a019789; six course page bodies were checked against the worker branch and referenced images exist.
- ME-LEAD-001 code is integrated on main, including central contact email, validated contact form, local PHP mail handler and the self-contained consent follow-up at 33a70b9fa9bbfac5a6096ad7b0f3df170cfd741a.
- About page demo/testimonial/counter/instructor content was removed in repository commit aaff04e31430d9f3dcfd419076d461de2faf2886.
- Duplicate PRs #9, #13 and #14 were closed after their scopes were already represented on current main.

Production smoke test:
- Homepage responds with the newer Mango Engineers homepage.
- course-one.html returns HTTP 500.
- contact-us.html returns HTTP 500.
- java-course-jaipur.html returns HTTP 500.
- about-one.html still serves the old EduBlink/Lorem Ipsum/testimonial/instructor content, so the repository About cleanup is not deployed.
- Repository PHP architecture checks are passing.
- No production deployment workflow/config was found under .github/workflows.

Decision:
Production is not LIVE VERIFIED. ME-PROD-500-001 and ME-DEPLOY-001 are P0 blockers. Do not mark the lead system or new course pages live until the production host is synchronised and smoke-tested.


## 2026-09-22 — SEO competitor research cycle 001

Scope:
- verified Mango Engineers business positioning against repository truth before research
- analyzed Java, Java Full Stack, Full Stack Development, React, Node.js, Data Analytics, Power BI, DevOps and AWS/Linux support paths
- reviewed current SERP/live evidence and representative competitors: Forsk Coding School, Training Jaipur, DAAC, GRRAS, IIHT Jaipur and Samyak

Key findings:
- current verified positioning remains technology/programming training in Jaipur; industrial automation/PLC service pages are not supported by repository truth
- strongest commercial course intents already have repository pages, so this cycle recommends improvement rather than duplicate page creation
- live WordPress URLs and repository .html/PHP URLs require the separately claimed ME-SEO-URL-001 migration matrix
- current live search evidence includes semantically wrong legacy course slugs, including Node.js content on /courses/email-marketing-course-jaipur-2/
- live Java Full Stack output shows legacy title contamination referring to another academy
- local NAP is inconsistent across repository/live history: repository branch config, current Shyam Nagar live output and legacy Mansarovar course details do not agree
- DevOps competitors expose deeper tool/lab progression; Mango should strengthen the existing page rather than generate thin tool pages

Research artifacts are on the SEO research branch/PR:
- docs/seo-research/competitor-matrix.md
- docs/seo-research/keyword-clusters.csv
- docs/seo-research/content-gaps.md
- docs/seo-research/local-seo-opportunities.md
- docs/seo-research/internal-link-plan.md
- docs/seo-research/seo-roadmap.md

Implementation tasks queued on main:
- ME-SEO-COURSE-001
- ME-SEO-DATA-001
- ME-SEO-DEVOPS-001
- ME-LOCAL-NAP-001
- ME-SEO-CONTENT-001

Coordination:
- ME-SEO-URL-001 is already IN_PROGRESS under worker-ai-seo-url-01; this research worker did not overwrite or claim it.
- no production code or deployment change was made in this cycle.


## 2026-09-22 — ME-TUTORIAL-001 tutorial library B001

Branch: `build/tutorial-library-b001`  
Status: REVIEW

Research completed before implementation:
- Reviewed GeeksforGeeks, TutorialsPoint, Scaler Topics, StudyTonight and PrepInsta for tutorial information architecture, progression, examples, practice and internal-link patterns.
- Cross-checked technical learning structure against official Python, Java, MDN JavaScript and PostgreSQL documentation.
- Recorded findings and SEO intent rules in `docs/tutorial-research-2026-09-22.md`.

Implemented:
- Added a physical `tutorial/` section without replacing existing blog or commercial course URLs.
- Added clean nested routing: `/tutorial/{technology}/` and `/tutorial/{technology}/{chapter}/`.
- Added tutorial-specific reusable template and CSS while reusing the existing Mango Engineers shared header/footer and theme assets.
- Added searchable tutorial hub with published tracks plus the expansion roadmap mapped from the current course catalogue.
- Added full first-batch tracks for Python, Java, JavaScript, SQL and Linux.
- Each track contains six original chapters with concept explanations, examples, practice tasks, key takeaways, previous/next navigation and a secondary link to the relevant Mango Engineers course page.
- Added TechArticle / CollectionPage / ItemList / Breadcrumb structured data for tutorial surfaces.
- Unfinished future topics remain a roadmap only; they are not emitted as indexable placeholder pages.

Coordination:
- Shared `includes/header.php` was not modified from this worker branch.
- Navigation change from Resources > Free Tutorials to `/tutorial/` is queued for coordinator integration.
- Production deployment/live verification is not claimed; existing deployment/runtime blockers remain separate.

QA notes:
- All new files were fetched back from the branch and checked for expected paths/content and merge-conflict markers.
- Tutorial helper/data PHP files were moved to `tutorial/template.php` and `tutorial/tutorials.php` so the existing `find -maxdepth 2` CI lint covers the complete tutorial PHP implementation.


### ME-TUTORIAL-001 integration update

Coordinator integration completed after PR #20 passed PHP Architecture Check.

- Tutorial B001 was squash-merged to `main` at `fcea96e4393c16571838174aeed9aa0fe74796f8`.
- Published repository tutorial foundation covers Python, Java, JavaScript, SQL and Linux, with six chapters per track.
- Shared Resources > Free Tutorials navigation now points to `/tutorial/`.
- Shared footer now links to the tutorial hub.
- Tutorial sitemap inclusion remains blocked on the approved canonical URL set from ME-SEO-URL-001.
- Production deployment/live rendering is still not claimed because ME-DEPLOY-001 / ME-PROD-500-001 remain separate blockers.

Status: B001 IMPLEMENTED + MERGED + NAVIGATION INTEGRATED in repository. Production LIVE VERIFIED: NO.

## 2026-09-23 — ME-ANALYTICS-001 Google site tools foundation

Branch: `ai/google-site-tools-20260923`  
PR: #22  
Status: REVIEW

Implemented:
- Added `includes/google-site-tools.php` as the single configuration/output layer for a verified GTM container, direct GA4 measurement ID, and Search Console HTML-tag verification token.
- Kept all Google IDs blank by default; the branch does not activate outbound Google tracking until verified IDs are supplied.
- Added `assets/js/google-site-tools.js` with GTM-preferred/direct-GA4 fallback loading so the same GA4 stream is not intentionally loaded twice by this integration.
- Added privacy-safe `phone_click`, `email_click`, `whatsapp_click`, `lead_submit`, and successful `generate_lead` events.
- Event tracking excludes submitted names, phone numbers, email addresses, messages, course selections and other form values.
- Hooked normal PHP pages through shared `includes/head.php` and tutorial pages through `tutorial/template.php`.
- Added `docs/GOOGLE-SITE-TOOLS.md` with activation, duplicate-tag prevention and verification steps.
- Added IQ-007 for coordinator review of shared hooks.

Verification:
- Branch is cleanly ahead of the main commit it was created from; no existing public URL/theme rewrite was introduced.
- PHP Architecture Check run #67 completed successfully on implementation head `075760e1c1003be7f63482a74adcc39857578c51`.
- Production deployment and live analytics collection are not claimed.

Next action:
- Coordinator reviews PR #22. After merge, add only verified Google IDs, deploy a coherent repository snapshot, then verify Search Console ownership plus GA4 Realtime/DebugView or GTM Preview before marking analytics LIVE VERIFIED.
