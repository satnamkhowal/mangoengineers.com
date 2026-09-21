# Mango Engineers Integration Queue

Shared/global changes are reviewed by the master coordinator. Workers should append requests instead of independently editing global components unless their assigned scope explicitly owns them.

## Active

### IQ-001 — Contact/lead system
Source: ai/fix-contact-lead-form-v2 / ME-LEAD-001
State: READY_FOR_REVIEW
PR: #10
Shared files: includes/site-config.php, mail.php, pages/contact-us.php
Worker QA: PHP Architecture Check passed on implementation head 80b91de4534084f0fdcd533bfe789615a47d5888. Demo contact data/external endpoint were removed; local validation, honeypot, consent, same-origin checks and non-JS fallback were added.
Coordinator note: review PR #10. After merge/deployment, verify the host can deliver PHP mail from the domain sender. Do not mark LIVE until an authorized test enquiry is received. The existing privacy-policy page remains template copy and should be handled separately under demo cleanup.

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
- B002 shared course metadata/catalogue integration — main commit 51777c616c17a8c64a2dd1c5bfbd386dd840cb69.
- B003 AI/data/cloud/DevOps metadata + catalogue integration — main commit 3dc4d4dd61db6d6a5d04a44fe3e4b370f72bfbda.

- build/mango-home-v1 review — closed without merge; current main is newer and preserves the useful intent.
- refactor/php-common-layout review — closed without merge; shared architecture already integrated or superseded.
- refactor/php-page-bodies review — closed without merge; main page bodies are newer.
- Main-push PHP architecture CI gate — commit b832c2c31b92cacb1a23e8cd9efc975c8878a8d6.
