<?php $site = mango_site(); ?>

        <div class="edu-breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title">
                        <h1 class="title">About Mango Engineers</h1>
                    </div>
                    <ul class="edu-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="section-gap-large edu-about-area about-style-7">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title section-left">
                                <span class="pre-title">Technology Training in Jaipur</span>
                                <h2 class="title">Practical Learning for Programming, Software, Data, AI and Cloud Skills</h2>
                                <span class="shape-line"><i class="icon-19"></i></span>
                                <p>Mango Engineers is a technology training institute in Jaipur. The learning catalogue covers programming, full stack development, data and analytics, artificial intelligence, cloud and DevOps, along with related technology skill paths.</p>
                                <p>Training is organised around concept clarity, guided practice, assignments and project work. Course availability, batch timing and learning mode can vary by program, so learners should confirm the current batch before enrolment.</p>
                            </div>
                            <ul class="features-list">
                                <li>Programming and software-development foundations</li>
                                <li>Frontend, backend and full stack learning paths</li>
                                <li>Data analytics, Data Science, AI and Machine Learning pathways</li>
                                <li>Linux, AWS, cloud and DevOps foundations</li>
                            </ul>
                            <div class="mt--30">
                                <a href="course-one.html" class="edu-btn">Explore Courses <i class="icon-4"></i></a>
                                <a href="contact-us.html" class="edu-btn btn-border">Talk to an Advisor</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image-gallery">
                            <img class="main-img-1" src="assests/Mango%20engineers%20images/java-full-stack-course-jaipur-mango-engineers.webp" alt="Software development training at Mango Engineers Jaipur">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-choose-area-2 section-gap-large bg-lighten01">
            <div class="container">
                <div class="section-title section-center">
                    <span class="pre-title">Learning Approach</span>
                    <h2 class="title">Learn Concepts, Practise Skills and Build Projects</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                    <p>Mango Engineers focuses on structured skill development instead of unsupported placement or outcome guarantees.</p>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="why-choose-box features-box color-primary-style h-100">
                            <div class="icon"><i class="icon-45"></i></div>
                            <div class="content">
                                <h4 class="title">Guided Foundations</h4>
                                <p>Start with the concepts and tools required for the selected technology path, then progress into practical exercises.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="why-choose-box features-box color-secondary-style h-100">
                            <div class="icon"><i class="icon-46"></i></div>
                            <div class="content">
                                <h4 class="title">Hands-On Practice</h4>
                                <p>Assignments and guided implementation help learners turn theory into code, analysis, applications or deployment workflows.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="why-choose-box features-box color-extra08-style h-100">
                            <div class="icon"><i class="icon-47"></i></div>
                            <div class="content">
                                <h4 class="title">Project-Oriented Learning</h4>
                                <p>Applicable programs include project work whose depth depends on the course, learner level and current batch structure.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="edu-course-area section-gap-equal">
            <div class="container">
                <div class="section-title section-center">
                    <span class="pre-title">What You Can Learn</span>
                    <h2 class="title">Technology Learning Paths</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                </div>
                <div class="row g-5">
                    <?php foreach ([
                        ['Programming & Full Stack', 'C, C++, Java, Python, JavaScript, frontend, backend and full stack development pathways.', 'course-one.html#programming'],
                        ['Data, Analytics & AI', 'SQL, Excel, Power BI, Data Analytics, Data Science, Machine Learning, Artificial Intelligence and Generative AI.', 'course-one.html#data-ai'],
                        ['Cloud & DevOps', 'Linux, AWS and related cloud, container and DevOps learning foundations.', 'course-one.html#cloud-devops'],
                    ] as $path): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="features-box features-style-7 h-100">
                            <div class="content">
                                <h4 class="title"><?= mango_e($path[0]) ?></h4>
                                <p><?= mango_e($path[1]) ?></p>
                                <a href="<?= mango_e($path[2]) ?>" class="edu-btn btn-small btn-border">View Learning Path</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="edu-section-gap bg-lighten01">
            <div class="container">
                <div class="section-title section-center">
                    <span class="pre-title">Learn in Jaipur</span>
                    <h2 class="title">Mango Engineers Locations</h2>
                    <span class="shape-line"><i class="icon-19"></i></span>
                    <p>Contact the team before visiting to confirm the course, batch timing and learning location.</p>
                </div>
                <div class="row g-5 justify-content-center">
                    <?php foreach ($site['branches'] as $branch): ?>
                    <div class="col-lg-5 col-md-6">
                        <div class="features-box features-style-7 h-100">
                            <div class="content">
                                <h4 class="title"><?= mango_e($branch['name']) ?></h4>
                                <p><?= mango_e($branch['full_address']) ?></p>
                                <a href="<?= mango_e($branch['map']) ?>" class="edu-btn btn-small btn-border" target="_blank" rel="noopener">Get Directions</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <div class="home-one-cta-two cta-area-1 section-gap-equal">
            <div class="container">
                <div class="home-one-cta edu-cta-box bg-image">
                    <div class="inner">
                        <div class="content">
                            <span class="subtitle">Need a learning roadmap?</span>
                            <h3 class="title"><a href="contact-us.html">Discuss Your Goal With Mango Engineers</a></h3>
                            <p>Ask about the current syllabus, batch, fees, learning mode and suitable starting point for your background.</p>
                        </div>
                        <div class="content">
                            <span class="subtitle">Call</span>
                            <h3 class="title"><a href="tel:<?= mango_e($site['phone_href']) ?>"><?= mango_e($site['phone_display']) ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
