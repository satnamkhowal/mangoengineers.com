# Mango Engineers Integration Queue

Shared/global changes are reviewed by the master coordinator. Workers should append requests instead of independently editing global components unless their assigned scope explicitly owns them.

## Active

### IQ-001 — Contact/lead system
Source: ai/fix-contact-lead-form / ME-LEAD-001
State: WAITING_FOR_REVIEW
Shared files: includes/site-config.php, mail.php, pages/contact-us.php
Coordinator note: branch is still IN_PROGRESS. Review form action, host mail transport, validation, success/error behavior and privacy handling before merge.

### IQ-002 — Homepage/header legacy branch
Source: build/mango-home-v1 / ME-HOME-001
State: INTEGRATION_REQUIRED
Shared files: includes/header.php, pages/index.php, pages/course-one.php
Coordinator note: branch is far behind main. Extract only unique still-useful content after semantic comparison; never merge whole files over current main.

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
