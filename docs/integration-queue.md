# Mango Engineers Integration Queue

Shared/global changes are reviewed by the master coordinator. Workers should append requests instead of independently editing global components unless their assigned scope explicitly owns them.

## Active

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
- ME-LEAD-001 contact/lead code integrated on main. Final contact consent adjustment: `33a70b9fa9bbfac5a6096ad7b0f3df170cfd741a`. Production mail delivery remains a deployment verification requirement; task stays REVIEW until an authorized synthetic enquiry is received.
- B002 shared course metadata/catalogue integration — main commit 51777c616c17a8c64a2dd1c5bfbd386dd840cb69.
- B003 AI/data/cloud/DevOps metadata + catalogue integration — main commit 3dc4d4dd61db6d6a5d04a44fe3e4b370f72bfbda.

- build/mango-home-v1 review — closed without merge; current main is newer and preserves the useful intent.
- refactor/php-common-layout review — closed without merge; shared architecture already integrated or superseded.
- refactor/php-page-bodies review — closed without merge; main page bodies are newer.
- Main-push PHP architecture CI gate — commit b832c2c31b92cacb1a23e8cd9efc975c8878a8d6.
