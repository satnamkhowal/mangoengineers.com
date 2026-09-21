<?php
declare(strict_types=1);
$site = mango_site();
?>
<header class="edu-header header-style-7 no-topbar">
    <div id="edu-sticky-placeholder"></div>
    <div class="header-mainmenu">
        <div class="container-fluid">
            <div class="header-navbar">
                <div class="header-brand">
                    <div class="logo">
                        <a href="index.html" aria-label="Mango Engineers home">
                            <img class="logo-light" src="assets/images/logo/logo-dark.png" alt="Mango Engineers">
                            <img class="logo-dark" src="assets/images/logo/logo-white.png" alt="Mango Engineers">
                        </a>
                    </div>
                </div>

                <div class="header-mainnav">
                    <nav class="mainmenu-nav" aria-label="Primary navigation">
                        <ul class="mainmenu">
                            <li><a href="index.html">Home</a></li>
                            <li class="has-droupdown">
                                <a href="course-one.html">Courses</a>
                                <ul class="submenu">
                                    <li><a href="course-one.html#programming">Programming</a></li>
                                    <li><a href="course-one.html#full-stack">Full Stack</a></li>
                                    <li><a href="course-one.html#data-ai">Data & AI</a></li>
                                    <li><a href="course-one.html#cloud-devops">Cloud & DevOps</a></li>
                                    <li><a href="course-one.html#security-design-marketing">Cyber, Design & Marketing</a></li>
                                    <li><a href="course-one.html#career-programs">Career Programs</a></li>
                                    <li><a href="course-one.html#internships">Internships</a></li>
                                </ul>
                            </li>
                            <li><a href="about-one.html">About</a></li>
                            <li><a href="event-grid.html">Events</a></li>
                            <li><a href="blog-standard.html">Blog</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="header-right">
                    <ul class="header-action">
                        <li class="header-btn">
                            <a href="contact-us.html" class="edu-btn btn-medium">Free Counselling <i class="icon-4"></i></a>
                        </li>
                        <li class="mobile-menu-bar d-block d-xl-none">
                            <button class="hamberger-button" aria-label="Open menu"><i class="icon-54"></i></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="header-top">
                <div class="logo">
                    <a href="index.html" aria-label="Mango Engineers home">
                        <img class="logo-light" src="assets/images/logo/logo-dark.png" alt="Mango Engineers">
                        <img class="logo-dark" src="assets/images/logo/logo-white.png" alt="Mango Engineers">
                    </a>
                </div>
                <div class="close-menu">
                    <button class="close-button" aria-label="Close menu"><i class="icon-73"></i></button>
                </div>
            </div>
            <ul class="mainmenu">
                <li><a href="index.html">Home</a></li>
                <li class="has-droupdown">
                    <a href="course-one.html">Courses</a>
                    <ul class="submenu">
                        <li><a href="course-one.html#programming">Programming</a></li>
                        <li><a href="course-one.html#full-stack">Full Stack</a></li>
                        <li><a href="course-one.html#data-ai">Data & AI</a></li>
                        <li><a href="course-one.html#cloud-devops">Cloud & DevOps</a></li>
                        <li><a href="course-one.html#career-programs">Career Programs</a></li>
                        <li><a href="course-one.html#internships">Internships</a></li>
                    </ul>
                </li>
                <li><a href="about-one.html">About</a></li>
                <li><a href="event-grid.html">Events</a></li>
                <li><a href="blog-standard.html">Blog</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact-us.html">Contact</a></li>
            </ul>
            <div class="mt--30">
                <a href="tel:<?= mango_e($site['phone_href']) ?>" class="edu-btn btn-medium">Call <?= mango_e($site['phone_display']) ?></a>
            </div>
        </div>
    </div>
</header>
