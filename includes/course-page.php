<?php
declare(strict_types=1);

if (!isset($course) || !is_array($course)) {
    throw new RuntimeException('Course configuration is required.');
}

$site = mango_site();
?>
        <div class="edu-breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title">
                        <h1 class="title"><?= mango_e($course['h1']) ?></h1>
                    </div>
                    <ul class="edu-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item"><a href="course-one.html">Courses</a></li>
                        <li class="separator"><i class="icon-angle-right"></i></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= mango_e($course['short_name']) ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="edu-section-gap course-details-area">
            <div class="container">
                <div class="row row--30">
                    <div class="col-lg-8">
                        <div class="course-details-content course-details-3">
                            <div class="entry-content">
                                <span class="pre-title"><?= mango_e($course['eyebrow']) ?></span>
                                <h2 class="title"><?= mango_e($course['headline']) ?></h2>
                                <p class="mb--30"><?= mango_e($course['summary']) ?></p>

                                <div class="row g-4 mb--40">
                                    <?php foreach ($course['highlights'] as $highlight): ?>
                                    <div class="col-md-6">
                                        <div class="features-box features-style-7 h-100">
                                            <div class="content">
                                                <h5 class="title"><?= mango_e($highlight[0]) ?></h5>
                                                <p><?= mango_e($highlight[1]) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="course-overview">
                                    <h3 class="heading-title">Who This Course Is For</h3>
                                    <ul class="features-list">
                                        <?php foreach ($course['who_for'] as $item): ?>
                                        <li><?= mango_e($item) ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="course-overview mt--40">
                                    <h3 class="heading-title">What You Will Be Able to Do</h3>
                                    <ul class="features-list">
                                        <?php foreach ($course['outcomes'] as $item): ?>
                                        <li><?= mango_e($item) ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="course-curriculam mt--40">
                                    <h3 class="heading-title">Course Curriculum</h3>
                                    <?php foreach ($course['syllabus'] as $section): ?>
                                    <div class="course-lesson">
                                        <h5 class="title"><?= mango_e($section['title']) ?></h5>
                                        <ul>
                                            <?php foreach ($section['items'] as $item): ?>
                                            <li><?= mango_e($item) ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="course-overview mt--40">
                                    <h3 class="heading-title">Projects & Practical Work</h3>
                                    <p>Project difficulty is adjusted to the learner's level and batch progress. The goal is to turn concepts into demonstrable work rather than only complete theory modules.</p>
                                    <ul class="features-list">
                                        <?php foreach ($course['projects'] as $item): ?>
                                        <li><?= mango_e($item) ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="course-overview mt--40">
                                    <h3 class="heading-title">Career Preparation</h3>
                                    <p>Mango Engineers' learning process can include project review, portfolio/GitHub readiness, resume guidance, mock interview practice and placement assistance. Placement assistance is support, not a job guarantee.</p>
                                    <ul class="features-list">
                                        <?php foreach ($course['career_roles'] as $item): ?>
                                        <li><?= mango_e($item) ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="edu-faq-content mt--50">
                                    <h3 class="heading-title">Frequently Asked Questions</h3>
                                    <div class="faq-accordion" id="course-faq-<?= mango_e($course['slug']) ?>">
                                        <div class="accordion">
                                            <?php foreach ($course['faq'] as $index => $faq): ?>
                                            <?php $faqId = 'faq-' . $course['slug'] . '-' . ($index + 1); ?>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= mango_e($faqId) ?>">
                                                        <?= mango_e($faq[0]) ?>
                                                    </button>
                                                </h5>
                                                <div id="<?= mango_e($faqId) ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>" data-bs-parent="#course-faq-<?= mango_e($course['slug']) ?>">
                                                    <div class="accordion-body"><p><?= mango_e($faq[1]) ?></p></div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="course-overview mt--50">
                                    <h3 class="heading-title">Related Learning Paths</h3>
                                    <div class="row g-4">
                                        <?php foreach ($course['related'] as $related): ?>
                                        <div class="col-md-6">
                                            <a class="edu-btn btn-border w-100" href="<?= mango_e($related[1]) ?>"><?= mango_e($related[0]) ?></a>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="course-sidebar-3 sidebar-top-position">
                            <div class="edu-course-widget widget-course-summery">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <img src="<?= mango_e($course['image']) ?>" alt="<?= mango_e($course['h1']) ?>">
                                    </div>
                                    <div class="content">
                                        <h4 class="widget-title"><?= mango_e($course['short_name']) ?></h4>
                                        <ul class="course-item">
                                            <li><span class="label">Learning Mode</span><span class="value">Classroom / Online</span></li>
                                            <li><span class="label">Locations</span><span class="value">2 Jaipur Centres</span></li>
                                            <li><span class="label">Projects</span><span class="value">Included</span></li>
                                            <li><span class="label">Mentor Support</span><span class="value">Included</span></li>
                                        </ul>

                                        <div class="mt--30">
                                            <h5 class="title">Fee Structure</h5>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                    <?php foreach ($course['fees'] as $fee): ?>
                                                        <tr>
                                                            <td><?= mango_e($fee[0]) ?></td>
                                                            <td class="text-end"><strong><?= mango_e($fee[1]) ?></strong></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <small>Fees shown are the current approved structure supplied for Mango Engineers/Forsk parity. Confirm the active batch and inclusions before enrolment.</small>
                                        </div>

                                        <div class="read-more-btn mt--30">
                                            <a href="contact-us.html" class="edu-btn w-100">Book Free Counselling <i class="icon-4"></i></a>
                                        </div>
                                        <div class="read-more-btn mt--15">
                                            <a href="tel:<?= mango_e($site['phone_href']) ?>" class="edu-btn btn-border w-100">Call <?= mango_e($site['phone_display']) ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="edu-course-widget widget-course-summery mt--30">
                                <div class="inner">
                                    <div class="content">
                                        <h5 class="widget-title">Choose a Jaipur Branch</h5>
                                        <?php foreach ($site['branches'] as $branch): ?>
                                        <div class="mb--20">
                                            <strong><?= mango_e($branch['name']) ?></strong>
                                            <p><?= mango_e($branch['full_address']) ?></p>
                                            <a href="<?= mango_e($branch['map']) ?>" target="_blank" rel="noopener">Get directions</a>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="programming-wrapper edu-cta-banner-area cta-banner-10">
            <div class="container">
                <div class="edu-cta-banner">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="section-title section-left">
                                <span class="pre-title">Need the Right Roadmap?</span>
                                <h2 class="title">Discuss Your Background and Career Goal With Mango Engineers.</h2>
                            </div>
                        </div>
                        <div class="col-lg-5 text-lg-end">
                            <a href="contact-us.html" class="edu-btn btn-medium">Get Syllabus & Batch Details <i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
