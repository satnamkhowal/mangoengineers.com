# Mango Engineers SEO Roadmap — Cycle 001

Research date: 2026-09-22
Branch: seo/research-cycle-001

## Status

### Services analyzed
- Java Programming
- Java Full Stack
- Full Stack Development
- React.js
- Node.js
- Data Analytics
- Power BI
- DevOps
- AWS / Linux supporting path

### Competitors analyzed
- Forsk Coding School
- Training Jaipur
- DAAC
- GRRAS
- IIHT Jaipur
- Samyak

## Highest-value gaps

1. **P0/P1: URL migration/canonical truth**
   Live WordPress course URLs do not match repository public URL architecture. Some current live courses are on unrelated legacy slugs (for example Node.js on an email-marketing slug). Complete ME-SEO-URL-001 before deployment.

2. **P0/P1: NAP and business-proof consistency**
   Repository branch addresses and current live/legacy addresses conflict. Verify current locations before local SEO expansion. Continue removal of fake/demo claims through ME-DEMO-CLEAN-001.

3. **P1: Improve existing commercial pages instead of adding duplicates**
   Existing course pages already cover the strongest transactional intents. Add decision support: prerequisites, track comparison, verified duration/mode, project deliverables and better contextual links.

4. **P1: Strengthen DevOps technical depth**
   Existing page should explain lab progression and deliverables more concretely; competitor SERPs contain deeper tool-specific curricula.

5. **P2: Publish four resource pieces that route users into commercial clusters**
   Java vs Node.js, Data Analytics roadmap, DevOps roadmap, React vs Full Stack.

## Existing pages to improve

- java-course-jaipur.html
  - problem: strong baseline but limited “which Java path should I take?” decision support
  - fix: prerequisites, verified duration/batch details, backend vs full-stack route, contextual links

- java-full-stack-course-jaipur.html
  - problem: live page includes legacy/title contamination and deployment URL mismatch
  - fix: preserve repository intent, resolve old live URL/canonical, add stack sequence and capstone deliverable

- full-stack-development-course-jaipur.html
  - problem: risk of overlapping Java/MERN/Python full-stack pages
  - fix: make it a clear generic decision/pillar page and state the default current stack

- react-js-course-jaipur.html
  - problem: live page is dated 2025 and contains legacy contact details
  - fix: migrate to verified content/contacts; add prerequisites and standalone-vs-complete-track explanation

- node-js-course-jaipur.html
  - problem: current live Node page is indexed on unrelated email-marketing URL
  - fix: explicit old→new redirect/canonical mapping; do not create another Node page

- data-analytics-course-jaipur.html
  - problem: live content has unverified counters/reviews and blends into Data Science/ML
  - fix: use repository’s Excel+SQL+Python+Power BI positioning; separate analytics vs data science

- devops-course-jaipur.html
  - problem: competitor depth is stronger
  - fix: add verified labs, pipeline/container/orchestration/cloud deliverables and troubleshooting outcomes

- aws-course-jaipur.html
  - problem: needs stronger connection to Linux/DevOps decision journey
  - fix: prerequisite and related-path guidance

## New pages justified

None in this cycle before canonical/NAP verification.

Potential future pages after verification:
- one real branch page per active branch
- four decision-support resources listed in content-gaps.md

## Pages not recommended

- keyword-variation duplicates for course/training/classes
- mass Jaipur-neighborhood pages
- separate thin pages for every tool in a stack
- “best institute” superiority pages without objective evidence

## Technical SEO issues

- no root sitemap.xml on repository main
- no root robots.txt on repository main
- sitemap/robots are correctly blocked behind canonical URL decision
- live→repository URL migration matrix unresolved
- some live course slugs are semantically wrong
- live content contains outdated/template metadata and proof claims
- branch/contact NAP is inconsistent across repository and live historical pages
- current repository `.htaccess` only preserves repository legacy `.html`→PHP routing; it does not yet map current WordPress live paths

## Priority implementation sequence

### P0/P1
1. Claim and complete ME-SEO-URL-001.
2. Verify current NAP/branches and feed confirmed values to lead/contact/shared-config owner.
3. Continue ME-DEMO-CLEAN-001 on live-equivalent high-traffic pages.

### P1
4. Improve Full Stack / Java / Node decision architecture without changing URLs until migration plan is approved.
5. Improve Data Analytics page separation from Data Science.
6. Improve DevOps/AWS decision and lab-depth content.

### P2
7. Run ME-SEO-LINK-001 and implement contextual link fixes through integration queue.
8. Create sitemap/robots only after canonical set is approved.
9. Publish the four high-intent resource pieces after commercial URLs are stable.

## Implementation tasks proposed by this research cycle

- ME-SEO-COURSE-001 — Full Stack/Java/Node intent and decision-support improvements
- ME-SEO-DATA-001 — Data Analytics vs Data Science separation + analytics cluster linking
- ME-SEO-DEVOPS-001 — DevOps/AWS depth and cluster linking
- ME-LOCAL-NAP-001 — Verify active Jaipur locations and resolve NAP truth before local pages
- ME-SEO-CONTENT-001 — Four supporting decision/roadmap resources after canonical migration

See docs/task-board.csv for ownership/status and acceptance criteria summaries.
