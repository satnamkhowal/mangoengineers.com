<?php $site = mango_site(); ?>
        <div class="edu-breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title"><h1 class="title">Technology Courses in Jaipur</h1></div>
                    <ul class="edu-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item active" aria-current="page">Courses</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="edu-section-gap edu-about-area about-style-4">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <div class="section-title section-left">
                            <span class="pre-title">Mango Engineers Course Catalogue</span>
                            <h2 class="title">Choose a Skill, Stack or Career Path</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Explore practical technology training for programming, full stack development, data, AI, cloud, DevOps, cyber security, design and digital marketing. Course mode and batch availability may vary by track.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="home-one-cta edu-cta-box bg-image">
                            <div class="inner">
                                <div class="content">
                                    <span class="subtitle">Need a recommendation?</span>
                                    <h3 class="title"><a href="contact-us.html">Book Course Counselling</a></h3>
                                    <p><a href="tel:<?= mango_e($site['phone_href']) ?>"><?= mango_e($site['phone_display']) ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $courseGroups = [
            'programming' => [
                'title' => 'Programming & Software Development',
                'description' => 'Build strong coding foundations and progress toward backend or full stack development.',
                'courses' => [
                    ['Java Programming', 'java-courses-jaipur-mango-engineers.webp', 'Core Java, advanced Java, JDBC, Servlets/JSP, Hibernate, Spring and Spring Boot pathway.'],
                    ['Python Programming', 'python-programming-course-jaipur-mango-engineers.webp', 'Python fundamentals, problem solving and a base for backend, automation, data and AI.'],
                    ['C Programming', 'c-programming-course-jaipur-mango-engineers.webp', 'Programming fundamentals, logic building and structured problem solving with C.'],
                    ['C++ Programming', 'c-plus-plus-course-jaipur-mango-engineers.webp', 'Object-oriented programming and strong programming foundations with C++.'],
                    ['JavaScript', 'javascript-course-jaipur-mango-engineers.webp', 'Modern JavaScript for interactive web development and frontend/full stack paths.'],
                    ['PHP Development', 'php-course-jaipur-mango-engineers.webp', 'Server-side web development foundations with PHP and database-driven applications.'],
                ],
            ],
            'full-stack' => [
                'title' => 'Full Stack Development',
                'description' => 'Frontend, backend, databases, APIs and project development in structured full stack paths.',
                'courses' => [
                    ['Full Stack Development', 'full-stack-development-course-jaipur-mango-engineers.webp', 'A broad web development path covering frontend, backend, APIs and databases.'],
                    ['Java Full Stack', 'java-full-stack-course-jaipur-mango-engineers.webp', 'Frontend foundations plus Java backend, Spring ecosystem, APIs and databases.'],
                    ['Python Full Stack', 'python-full-stack-course-jaipur-mango-engineers.webp', 'Frontend development paired with Python-based backend and database work.'],
                    ['MERN Stack', 'mern-stack-course-jaipur-mango-engineers.webp', 'MongoDB, Express, React and Node.js-oriented full stack development.'],
                    ['MEAN Stack', 'mean-stack-course-jaipur-mango-engineers.webp', 'MongoDB, Express, Angular and Node.js full stack development.'],
                    ['.NET Full Stack', 'dotnet-full-stack-course-jaipur-mango-engineers.webp', '.NET-oriented backend development with modern frontend and database skills.'],
                ],
            ],
            'data-ai' => [
                'title' => 'Data, Analytics & Artificial Intelligence',
                'description' => 'Develop analytical, data and AI capabilities from reporting foundations to advanced machine learning.',
                'courses' => [
                    ['Data Analytics', 'power-bi-course-jaipur-mango-engineers.webp', 'Analytics workflow covering spreadsheets, SQL, reporting and dashboard skills.'],
                    ['Power BI', 'power-bi-course-jaipur-mango-engineers.webp', 'Data modelling, reporting and interactive dashboard development with Power BI.'],
                    ['Data Science', 'data-science-course-jaipur-mango-engineers.webp', 'Python, data handling, analysis, statistics and machine learning foundations.'],
                    ['Machine Learning', 'machine-learning-course-jaipur-mango-engineers.webp', 'Supervised and unsupervised learning concepts with practical model workflows.'],
                    ['Artificial Intelligence', 'artificial-intelligence-course-jaipur-mango-engineers.webp', 'AI foundations and practical problem-solving pathways using modern tools.'],
                    ['Generative AI', 'generative-ai-course-jaipur-mango-engineers.webp', 'Modern GenAI concepts, prompting, application workflows and practical use cases.'],
                ],
            ],
            'cloud-devops' => [
                'title' => 'Cloud, Linux & DevOps',
                'description' => 'Build deployment, infrastructure and cloud skills used in modern engineering teams.',
                'courses' => [
                    ['Linux', 'linux-course-jaipur-mango-engineers.webp', 'Linux command line, administration foundations and practical server skills.'],
                    ['AWS Cloud', 'aws-course-jaipur-mango-engineers.webp', 'Cloud concepts and AWS-oriented infrastructure foundations.'],
                    ['Microsoft Azure', 'microsoft-azure-course-jaipur-mango-engineers.webp', 'Azure cloud services and infrastructure foundations.'],
                    ['DevOps', 'devops-course-jaipur-mango-engineers.webp', 'DevOps concepts, automation workflow, CI/CD thinking and deployment practices.'],
                    ['Docker', 'docker-course-jaipur-mango-engineers.webp', 'Container concepts and application packaging with Docker.'],
                    ['Kubernetes', 'kubernetes-course-jaipur-mango-engineers.webp', 'Container orchestration concepts and Kubernetes foundations.'],
                ],
            ],
            'security-design-marketing' => [
                'title' => 'Cyber Security, Design & Digital Growth',
                'description' => 'Specialised learning paths beyond core software engineering.',
                'courses' => [
                    ['Ethical Hacking', 'ethical-hacking-course-jaipur-mango-engineers.webp', 'Security foundations, ethical testing concepts and defensive awareness.'],
                    ['CEH Preparation', 'ceh-course-jaipur-mango-engineers.webp', 'Structured learning around ethical hacking concepts relevant to CEH preparation.'],
                    ['UI/UX Design', 'ui-ux-design-course-jaipur-mango-engineers.webp', 'User experience, interface design and product design workflow.'],
                    ['Figma', 'figma-course-jaipur-mango-engineers.webp', 'Interface design, prototyping and collaborative design workflow in Figma.'],
                    ['Graphic Design', 'graphic-design-course-jaipur-mango-engineers.webp', 'Visual communication and practical design foundations.'],
                    ['Digital Marketing', 'social-media-marketing-course-jaipur-mango-engineers.webp', 'SEO, social media, paid advertising and digital campaign foundations.'],
                ],
            ],
        ];
        ?>

        <?php foreach ($courseGroups as $groupId => $group): ?>
        <div class="edu-course-area section-gap-equal <?= $groupId === 'full-stack' || $groupId === 'cloud-devops' ? 'bg-lighten01' : '' ?>" id="<?= mango_e($groupId) ?>">
            <div class="container">
                <div class="section-title section-center">
                    <span class="pre-title">Course Family</span>
                    <h2 class="title"><?= mango_e($group['title']) ?></h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                    <p><?= mango_e($group['description']) ?></p>
                </div>
                <div class="row g-5">
                    <?php foreach ($group['courses'] as $course): ?>
                    <?php $slug = strtolower(trim(preg_replace('/[^a-z0-9]+/i', '-', $course[0]), '-')); ?>
                    <div class="col-xl-4 col-md-6" id="<?= mango_e($slug) ?>">
                        <div class="edu-course course-style-5 course-style-17 h-100">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="contact-us.html">
                                        <img src="assests/Mango%20engineers%20images/<?= mango_e($course[1]) ?>" alt="<?= mango_e($course[0]) ?> course in Jaipur">
                                    </a>
                                </div>
                                <div class="content">
                                    <span class="pre-title">Mango Engineers Jaipur</span>
                                    <h5 class="title"><?= mango_e($course[0]) ?></h5>
                                    <p><?= mango_e($course[2]) ?></p>
                                    <a href="contact-us.html" class="edu-btn btn-small">Get Syllabus & Fee</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="edu-section-gap edu-about-area about-style-4" id="career-programs">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7">
                        <div class="section-title section-left">
                            <span class="pre-title">Career Programs</span>
                            <h2 class="title">Need a Longer Software Engineering Roadmap?</h2>
                            <span class="shape-line"><i class="icon-19"></i></span>
                            <p>Mango Engineers is structuring longer learning pathways for students who want more than a short course — including software engineering, full stack and data-focused career programs.</p>
                        </div>
                        <ul class="features-list">
                            <li>Software engineering pathway after 10th</li>
                            <li>Software engineering pathway after 12th</li>
                            <li>Become a software engineer without relying only on a BCA/MCA route</li>
                            <li>Full Stack Development career program</li>
                            <li>Data Analytics / Data & AI career program</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-image-gallery">
                            <div class="main-img-1"><img src="assests/Mango%20engineers%20images/java-full-stack-course-jaipur-mango-engineers.webp" alt="Software engineering career program in Jaipur"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="edu-course-area section-gap-equal bg-lighten01" id="internships">
            <div class="container">
                <div class="section-title section-center">
                    <span class="pre-title">Internship Pathways</span>
                    <h2 class="title">Practice Beyond the Classroom</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                    <p>Applicable programs can include internship-oriented learning with guided tasks, practical work, project deliverables and career preparation. Confirm the exact duration and eligibility for your selected track.</p>
                </div>
                <div class="row g-5 justify-content-center">
                    <?php foreach ([['15-Day Foundation Internship','Foundation exposure and guided practical tasks.'],['45-Day Skill Builder Internship','Structured practical work with deeper assignments and project components.'],['60-Day Advanced Internship','Extended practical learning with project-focused deliverables.']] as $internship): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box features-style-7 h-100">
                            <div class="content">
                                <h5 class="title"><?= mango_e($internship[0]) ?></h5>
                                <p><?= mango_e($internship[1]) ?></p>
                                <a href="contact-us.html" class="edu-btn btn-small">Check Eligibility</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="home-one-cta-two cta-area-1 section-gap-equal">
            <div class="container">
                <div class="home-one-cta edu-cta-box bg-image">
                    <div class="inner">
                        <div class="content">
                            <span class="subtitle">Unsure which track fits your goal?</span>
                            <h3 class="title"><a href="contact-us.html">Get a Course Recommendation</a></h3>
                            <p>Choose classroom or online learning and confirm the most convenient Jaipur branch with the counselling team.</p>
                        </div>
                        <div class="content">
                            <span class="subtitle">Call</span>
                            <h3 class="title"><a href="tel:<?= mango_e($site['phone_href']) ?>"><?= mango_e($site['phone_display']) ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
