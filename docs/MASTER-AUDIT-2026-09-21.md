# Mango Engineers Master Audit — 2026-09-21

## Audit scope

This document records the first supervisor audit of the Mango Engineers repository and live website before major content or architecture changes.

Repository audited: `satnamkhowal/mangoengineers.com`
Benchmark inspected: `satnamkhowal/forsk-coding-school`
Live website checked: https://mangoengineers.com

## Verified current business positioning

Current public evidence positions Mango Engineers primarily as an IT / technology training institute in Jaipur, not as an industrial engineering-services company.

Verified live content includes active course pages for:
- DevOps
- AWS Cloud
- Kubernetes
- Docker
- Google Cloud
- Artificial Intelligence / Machine Learning
- MEAN / full-stack development
- Software testing / QA
- Other programming and digital-skills training

Because the requested future architecture mentions industrial and engineering services, no such service pages should be created until those services are verified from real company material. This prevents fabrication, keyword cannibalization and a potentially destructive positioning change.

## Existing architecture worth preserving

Recent repository work has already:
- centralized shared PHP head/header/footer
- introduced `includes/site-config.php`
- introduced `includes/page-config.php`
- introduced `includes/legacy-renderer.php`
- moved page bodies into `pages/*.php`
- preserved legacy root `.html` URLs through `.htaccess`
- added per-page canonical metadata and JSON-LD schema
- added a PHP architecture validation workflow

This structure should be retained and extended rather than rewritten.

## High-risk findings

### 1. Theme/demo content is still visible in page bodies

The repository still contains substantial untouched EduBlink demo text and components. Examples found on the homepage include:
- "Get 2500+ Best Online Courses From EduBlink"
- "3020 Online Courses"
- "6000 Members"
- "29+ Wonderful Awards"
- generic Lorem Ipsum copy
- generic categories unrelated to Mango Engineers
- demo YouTube links
- template instructor and course data

These conflict with the project rule not to invent statistics, awards, reviews or claims.

### 2. Fake / placeholder people and credentials

Theme pages include generic instructor/team identities and demo coaching copy. These must not be published as Mango Engineers staff or testimonials unless verified.

### 3. Navigation and information architecture are training-centric

The shared header currently exposes:
- Home
- Courses
- About
- Events
- Blog
- FAQ
- Contact

That matches the current public training business better than the proposed industrial-services structure. A services/industries hierarchy should only replace this after verified business direction is supplied.

### 4. Footer contains training-specific positioning

The shared footer describes Mango Engineers as programming/software/technology training in Jaipur and links to instructors/events/gallery.

### 5. Multiple asset roots

Both `assets/` and misspelled `assests/` exist. The latter includes a large duplicate-style training image library and JPG/WebP variants. Do not rename or delete yet because live references must first be mapped.

### 6. Sitemap and robots files are not present at repository root

No root `sitemap.xml` or `robots.txt` was found during this audit. They should be added only after the canonical/indexable URL set is finalized.

### 7. Legacy URL preservation is currently handled correctly in principle

`.htaccess` keeps root `.html` URLs stable by routing to matching PHP files. Two known placeholders redirect:
- `blog.html` → `blog-standard.html`
- `index-one.html` → `index.html`

Do not break indexed URLs while cleaning content.

## SEO observations

Strengths:
- centralized title/description config
- canonical tags
- robots directives
- Open Graph/Twitter metadata
- JSON-LD graph
- noindex handling for many theme variants

Weaknesses:
- metadata currently optimizes a training site, not an industrial engineering-services site
- many page bodies do not match their metadata
- generic template pages create thin/duplicate-content risk
- active live WordPress-style URLs and repository legacy `.html` URLs represent two different URL systems that must be reconciled before deployment
- blog content contains generic/template articles and categories
- no verified keyword map or cannibalization matrix exists in the repository

## Live-site observations

The current live site publicly presents Mango Engineers as an IT training institute in Jaipur and currently exposes modern WordPress-style URLs such as `/courses/.../` and article slugs.

Before switching repository deployment onto the live domain, create a URL migration matrix:
1. current live URL
2. intended canonical URL
3. status (keep / merge / redirect / retire)
4. target redirect
5. indexation rule
6. internal-link replacement

Do not replace live course URLs with legacy theme `.html` URLs without explicit migration planning.

## Benchmark lessons from Forsk Coding School

Useful reusable discipline observed in the Forsk repository:
- explicit setup/readme documentation
- clear deployment notes
- lead-system documentation
- SEO change logs
- structured reusable architecture

Apply this operational discipline to Mango Engineers, but do not copy Forsk branding, course copy or irrelevant assets.

## Immediate remediation priority

P0 — prevent misinformation:
- remove EduBlink branding
- remove fake numeric counters and awards
- remove placeholder team members/testimonials
- remove Lorem Ipsum and demo coaching copy
- remove template prices/ratings/student counts unless verified

P1 — establish canonical business direction:
- treat the current verified business as technology training unless real industrial-service documentation proves otherwise
- build a verified offering inventory from live pages and company source material
- freeze creation of speculative industrial pages

P1 — reconcile deployment architecture:
- map current WordPress URLs against repository URLs
- preserve every indexed URL with 301 redirects where changed
- define canonical URL conventions

P1 — lead generation:
- audit contact form processing
- verify phone/email/address across live site and repository
- use one reusable enquiry component
- add service/course-context hidden fields only where supported by form backend

P2 — technical SEO:
- create robots.txt
- create XML sitemap from verified indexable URLs
- validate schema type against actual business entity
- audit orphan pages and internal links
- audit images, alt text, compression and duplicate files

## Proposed information architecture — current verified direction

Until industrial services are verified, the safer working hierarchy is:

- Home
- About
- Courses / Training
  - Programming
  - Full Stack Development
  - Data Science / AI / ML
  - Cloud / DevOps
  - Software Testing / QA
  - Digital Marketing / other verified categories
- Internship / Industrial Training / Projects (only where supported by real content)
- Blog / Learning Resources
- Careers (if real vacancies/internships are maintained)
- Contact

If Mango Engineers is intentionally being repositioned into a separate engineering-services business, that should be treated as a deliberate business migration with verified service source material and URL redirects, not inferred from the company name.

## Work log — Batch 1

### COMPLETED
- inspected repository root and recursive tree
- inspected recent commits and prior AI work
- inspected shared PHP architecture
- inspected metadata/schema implementation
- inspected header/footer/navigation
- inspected homepage and representative content pages
- checked live-site positioning and active course/article URLs
- compared repository discipline with Forsk Coding School
- identified misinformation/template-content risk
- identified URL-system mismatch risk

### FILES CHANGED
- `docs/MASTER-AUDIT-2026-09-21.md`

### NEW/UPDATED URLS
- none; no live URL changes made in this batch

### SEO IMPROVEMENTS
- no production SEO metadata changed yet
- canonical URL migration risk documented
- duplicate/thin/template-content risks documented
- indexation and sitemap priorities established

### TECHNICAL ISSUES
- duplicate/misspelled asset roots
- no root robots.txt found
- no root sitemap.xml found
- repository URL model differs from current live WordPress URL model
- demo/template content still present in many PHP page bodies
- content/metadata mismatch on multiple pages
- placeholder forms/pages require functional audit

### PENDING
- verified offering inventory
- complete form/backend audit
- live-to-repo URL migration matrix
- placeholder content cleanup
- keyword map and cannibalization map
- sitemap/robots generation
- internal-link audit
- image audit
- mobile/performance validation
- deployment verification

### NEXT 5 TASKS
1. inventory every repository page and classify keep/noindex/redirect/delete-candidate
2. inventory every currently indexed/live URL and build redirect/canonical matrix
3. audit all forms, actions, validation and lead destinations
4. remove or quarantine demonstrably fake EduBlink/demo claims while preserving layout
5. build a verified keyword + content-cluster map around the confirmed Mango Engineers business model
