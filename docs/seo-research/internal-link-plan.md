# Mango Engineers Internal Link Plan — Cycle 001

Research date: 2026-09-22

## Goal

Use a small number of strong hub→course and course→adjacent-path links so users can move by learning goal without creating duplicate intent.

## Priority link graph

### Course catalogue hub
`course-one.html` should link prominently to:
- java-course-jaipur.html
- java-full-stack-course-jaipur.html
- full-stack-development-course-jaipur.html
- react-js-course-jaipur.html
- node-js-course-jaipur.html
- data-analytics-course-jaipur.html
- power-bi-course-jaipur.html
- devops-course-jaipur.html
- aws-course-jaipur.html
- linux-course-jaipur.html

Existing catalogue already links to many of these. The next audit should validate every target resolves and identify still-unlinked cards.

### Java cluster
**java-course-jaipur.html**
- Java Full Stack
- Full Stack Development
- React (optional frontend next step)
- course catalogue

**java-full-stack-course-jaipur.html**
- Java programming/back-end
- React
- generic Full Stack decision page
- Node.js as alternative backend path

Anchor guidance:
- “Java backend course”
- “Java Full Stack path”
- “React frontend module”
Avoid repeated exact-match anchors in every paragraph.

### JavaScript / Full Stack cluster
**full-stack-development-course-jaipur.html**
- React
- Node.js
- Java Full Stack as alternative
- course catalogue

**react-js-course-jaipur.html**
- Full Stack Development
- Node.js
- Java Full Stack
- catalogue

**node-js-course-jaipur.html**
- Full Stack Development
- React
- catalogue
- MERN/MEAN only where approved and stable URLs exist

### Data cluster
**data-analytics-course-jaipur.html**
- Excel & Advanced Excel
- SQL
- Python
- Power BI
- Data Science only as a clearly different advanced path

**power-bi-course-jaipur.html**
- Data Analytics complete track
- Excel
- SQL
- Python where useful

Recommended explanatory anchor:
“See the complete Excel + SQL + Python + Power BI analytics path.”

### Cloud / DevOps cluster
**devops-course-jaipur.html**
- Linux
- AWS
- Docker and Kubernetes pages where stable approved URLs exist
- course catalogue cloud/devops section

**aws-course-jaipur.html**
- DevOps
- Linux
- cloud/devops catalogue section

## Resource→commercial links to add after resource publishing

- Java vs Node.js guide → Java, Node.js, Full Stack
- Data Analytics roadmap → Data Analytics, Excel, SQL, Python, Power BI
- DevOps roadmap → DevOps, Linux, AWS, Docker, Kubernetes
- React vs Full Stack guide → React, Full Stack, Node.js

## Migration warning

Do not finalize internal-link URLs until ME-SEO-URL-001 decides whether production canonicals remain WordPress-style `/courses/.../` URLs or migrate to repository `.html` URLs.

Google recommends updating internal links as part of a URL move:
https://developers.google.com/search/docs/crawling-indexing/site-move-with-url-changes
