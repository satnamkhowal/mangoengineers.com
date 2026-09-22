# Mango Engineers Tutorial Library Research — 2026-09-22

## Goal

Build a scalable tutorial section under /tutorial/ that supports learning intent without duplicating the commercial course-page intent already present on Mango Engineers.

## Indian tutorial / learning sites reviewed

### GeeksforGeeks
Observed patterns:
- Large topic clusters organized by technology and CS subject.
- Tutorial -> practice -> projects/interview preparation progression.
- Strong cross-linking between languages, DSA, web, data, DevOps and tools.
- Free tutorials remain distinct from paid course pages.

References:
- https://www.geeksforgeeks.org/
- https://www.geeksforgeeks.org/nation-skill-up/
- https://www.geeksforgeeks.org/tutorials/programming-language-tutorials/

### TutorialsPoint
Observed patterns:
- Large category-first tutorial library.
- Beginner-friendly sequential tutorials.
- Code examples and browser coding tools.
- Broad coverage across programming, databases, web, mobile, DevOps, machine learning and software quality.

References:
- https://www.tutorialspoint.com/tutorialslibrary.htm
- https://www.tutorialspoint.com/

### Scaler Topics
Observed patterns:
- Technology landing pages contain modules, lessons and challenges.
- Each tutorial states audience, prerequisites and outcomes.
- Free learning content links naturally to deeper paid programs without making the tutorial page itself a sales page.

References:
- https://www.scaler.com/topics/
- https://www.scaler.com/topics/python/
- https://www.scaler.com/topics/java/
- https://www.scaler.com/topics/devops-tutorial/

### StudyTonight
Observed patterns:
- Beginner-first learning positioning.
- Interactive practice/exercises and programs.
- Tutorial, compiler/test and Q&A/community layers support the same learning topic.

References:
- https://www.studytonight.com/tools/
- https://www.studytonight.com/java-programs

### PrepInsta
Observed patterns:
- Practice and interview intent are explicit.
- DSA and programming content is grouped around problems, placement preparation and company-specific workflows.
- Useful model for a later Mango Engineers Practice / Interview Questions layer, separate from core tutorials.

References:
- https://prepinsta.com/
- https://prepinsta.com/data-structures/

## Official technical references used as quality baseline

- Python tutorial: https://docs.python.org/3/tutorial/
- Java learning path: https://dev.java/learn/
- JavaScript Guide: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide
- PostgreSQL tutorial: https://www.postgresql.org/docs/current/tutorial.html

## Architecture decision

Mango Engineers tutorial URLs:

- /tutorial/ — tutorial hub
- /tutorial/{technology}/ — technology tutorial track
- /tutorial/{technology}/{chapter}/ — chapter / lesson

Implementation uses a local /tutorial/.htaccess router so the public URLs remain clean while the content stays centralized.

## SEO intent rules

1. Tutorial pages answer informational learning queries; commercial course pages continue to answer local training / enrollment queries.
2. Each tutorial links to the relevant commercial course page only as a secondary CTA.
3. Do not create indexable placeholder pages. A tutorial joins the published set only after it has original explanations, code/examples and practice tasks.
4. Chapter titles target one learning concept rather than commercial keywords such as course in Jaipur.
5. Later batches should add contextual internal links between related tutorials, for example Python -> SQL -> Data Analytics and Linux -> Git -> Docker -> DevOps.
6. No scraped or copied tutorial text. Competitor research is used only to identify information architecture and useful learning features.

## Batch B001

Published first:
- Python
- Java
- JavaScript
- SQL
- Linux

Each B001 track has:
- dedicated tutorial landing page
- six ordered chapters
- original concept explanation
- runnable/readable example
- practice tasks
- key takeaways
- previous/next lesson navigation
- related Mango Engineers commercial-course CTA

## Future expansion

The hub maps the remaining current course catalogue topics as a build roadmap. Future batches should prioritize:
1. React / Node / Full Stack cluster
2. Data Analytics / Excel / Power BI / Data Science cluster
3. DevOps / Docker / Kubernetes / AWS / Azure cluster
4. Spring Boot / Hibernate / REST / Microservices cluster
5. Cyber Security / Networking cluster
6. Mobile App Development cluster
7. Testing / UI-UX / Digital Marketing clusters
