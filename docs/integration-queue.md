# Mango Engineers Integration Queue

Shared/global changes are reviewed by the master coordinator. Workers should append requests instead of independently editing global components unless their assigned scope explicitly owns them.

## Active

### IQ-007 — Google Analytics / Search Console foundation
Source: ME-ANALYTICS-001
State: REVIEW
Shared scope: `includes/head.php`; `tutorial/template.php`; global tracking loader
Goal: add a centralized, inert-by-default Google tracking foundation for GA4 or GTM, Search Console verification, and lead-intent events without duplicating tags or changing public URLs/theme markup.
Safety: do not invent GA4/GTM/Search Console IDs; configuration remains blank until verified IDs are supplied. Track only interaction metadata (event name/form id/link type), never submitted personal data.
Verification: PHP Architecture Check run #67 passed on implementation head `075760e1c1003be7f63482a74adcc39857578c51`.
Next action: coordinator reviews PR #22 shared hooks; after merge, insert verified Google IDs and deploy one coherent snapshot before live verification.

### IQ-005 — Production deployment/runtime drift
Source: ME-PROD-500-001 / ME-DEPLOY-001
State: BLOCKED
Shared scope: production deployment, PHP runtime, deployed file consistency
Observed live: homepage responds, but course-one.html, contact-us.html and java-course-jaipur.html return HTTP 500; About still serves pre-cleanup demo content.
Repository state: PHP architecture CI passes; no deployment workflow/config is present in .github/workflows.
Next action: inspect the authorized production host error log and deployed file set, deploy one coherent current-main snapshot, then verify HTTP 200 and rendered content before marking anything LIVE VERIFIED.


### IQ-003 — Canonical URL migration
Source: ME-SEO-URL-001
State: UNCLAIMED
Shared files: .htaccess, includes/page-config.php, internal links, future sitemap
Coordinator note: current live WordPress-style URLs and repository .html URLs must be mapped before production migration.

### IQ-004 — Robots and sitemap
Source: ME-SEO-ROBOTS-001
State: BLOCKED
Shared files: robots.txt, sitemap.xml
Dependency: IQ-003 approved canonical URL set.

## Completed
- ME-LEAD-001 contact/lead code integrated on main. Final contact consent adjustment: `33a70b9fa9bbfac5a6096ad7b0f3df170cfd741a`. Production verification is BLOCKED because contact-us.html currently returns HTTP 500; mail delivery must be tested only after the runtime/deployment issue is fixed.
- B002 shared course metadata/catalogue integration — main commit 51777c616c17a8c64a2dd1c5bfbd386dd840cb69.
- B003 AI/data/cloud/DevOps metadata + catalogue integration — main commit 3dc4d4dd61db6d6a5d04a44fe3e4b370f72bfbda.

- build/mango-home-v1 review — closed without merge; current main is newer and preserves the useful intent.
- refactor/php-common-layout review — closed without merge; shared architecture already integrated or superseded.
- refactor/php-page-bodies review — closed without merge; main page bodies are newer.
- Main-push PHP architecture CI gate — commit b832c2c31b92cacb1a23e8cd9efc975c8878a8d6.

- B004 course integration — main commit `c781c68dd2cd5d2a97cf7ecc3d02240f1aec0e85`; duplicate PR #9 closed.
- B005 course integration — main commit `631edf3dbfeb67861bbafaafb32068fb0a019789`; duplicate PR #14 closed.
- Lead-form duplicate PR #13 closed after reviewed code was already integrated on main.


### IQ-006 — Tutorial navigation and discovery integration
Source: ME-TUTORIAL-001
State: COMPLETED
Shared files: includes/header.php; includes/footer.php; future sitemap.xml; contextual links from relevant course/resource pages
Completed integration: Resources > Free Tutorials now points to `/tutorial/`, and the footer includes a Free Tutorials link. Tutorial hub/topic/chapter sitemap inclusion remains intentionally deferred until ME-SEO-URL-001 approves the canonical set; selective commercial-page contextual links can be added in later tutorial batches after that URL decision.
