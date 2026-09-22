<?php
declare(strict_types=1);
$site = mango_site();

$navigation = [
    [
        'label' => 'About Us',
        'href' => 'about-one.html',
        'children' => [
            ['label' => 'About Institute', 'href' => 'about-one.html'],
            ['label' => 'Mission & Vision', 'href' => 'about-one.html#mission-vision'],
            ['label' => 'Why Choose Mango Engineers', 'href' => 'about-one.html#why-choose-mango-engineers'],
            ['label' => 'Our Trainers', 'href' => 'team-one.html'],
            ['label' => 'Success Stories', 'href' => 'about-one.html#testimonials'],
            ['label' => 'Testimonials', 'href' => 'about-one.html#testimonials'],
            ['label' => 'Placement Partners', 'href' => 'course-one.html#career-programs'],
            ['label' => 'Gallery', 'href' => 'gallery-grid.html'],
            ['label' => 'FAQs', 'href' => 'faq.html'],
        ],
    ],
    [
        'label' => 'Courses',
        'href' => 'course-one.html',
        'mega' => true,
        'children' => [
            [
                'label' => 'Programming Languages',
                'href' => 'course-one.html#programming',
                'group' => true,
                'children' => [
                    ['label' => 'Python Programming', 'href' => 'course-one.html#programming'],
                    ['label' => 'Java Programming', 'href' => 'course-one.html#programming'],
                    ['label' => 'C Programming', 'href' => 'course-one.html#programming'],
                    ['label' => 'C++ Programming', 'href' => 'course-one.html#programming'],
                    ['label' => 'JavaScript', 'href' => 'course-one.html#programming'],
                    ['label' => 'PHP', 'href' => 'course-one.html#programming'],
                    ['label' => 'C#', 'href' => 'course-one.html#programming'],
                ],
            ],
            [
                'label' => 'Full Stack Development',
                'href' => 'course-one.html#full-stack',
                'group' => true,
                'children' => [
                    ['label' => 'MERN Stack', 'href' => 'course-one.html#full-stack'],
                    ['label' => 'MEAN Stack', 'href' => 'course-one.html#full-stack'],
                    ['label' => 'Java Full Stack', 'href' => 'course-one.html#full-stack'],
                    ['label' => 'Python Full Stack', 'href' => 'course-one.html#full-stack'],
                    ['label' => 'ASP.NET Full Stack', 'href' => 'course-one.html#full-stack'],
                    ['label' => 'React.js', 'href' => 'course-one.html#full-stack'],
                    ['label' => 'Angular', 'href' => 'course-one.html#full-stack'],
                    ['label' => 'Node.js', 'href' => 'course-one.html#full-stack'],
                    ['label' => 'Next.js', 'href' => 'course-one.html#full-stack'],
                ],
            ],
            [
                'label' => 'Java Courses',
                'href' => 'course-one.html#programming',
                'group' => true,
                'children' => [
                    ['label' => 'Core Java (J2SE)', 'href' => 'course-one.html#programming'],
                    ['label' => 'Advanced Java', 'href' => 'course-one.html#programming'],
                    ['label' => 'JDBC', 'href' => 'course-one.html#programming'],
                    ['label' => 'Servlets & JSP', 'href' => 'course-one.html#programming'],
                    ['label' => 'Spring Framework', 'href' => 'course-one.html#programming'],
                    ['label' => 'Spring Boot', 'href' => 'course-one.html#programming'],
                    ['label' => 'Spring MVC', 'href' => 'course-one.html#programming'],
                    ['label' => 'Hibernate', 'href' => 'course-one.html#programming'],
                    ['label' => 'JPA', 'href' => 'course-one.html#programming'],
                    ['label' => 'Java Microservices', 'href' => 'course-one.html#programming'],
                    ['label' => 'Java REST API', 'href' => 'course-one.html#programming'],
                    ['label' => 'Java Design Patterns', 'href' => 'course-one.html#programming'],
                    ['label' => 'Java Multithreading', 'href' => 'course-one.html#programming'],
                    ['label' => 'Java Testing', 'href' => 'course-one.html#programming'],
                    ['label' => 'Helidon', 'href' => 'course-one.html#programming'],
                    ['label' => 'Big Data with Java', 'href' => 'course-one.html#programming'],
                    ['label' => 'Hadoop', 'href' => 'course-one.html#programming'],
                    ['label' => 'Kafka with Java', 'href' => 'course-one.html#programming'],
                    ['label' => 'Java Interview Preparation', 'href' => 'course-one.html#programming'],
                ],
            ],
            [
                'label' => 'Data Science & AI',
                'href' => 'course-one.html#data-ai',
                'group' => true,
                'children' => [
                    ['label' => 'Data Analytics', 'href' => 'course-one.html#data-ai'],
                    ['label' => 'Business Analytics', 'href' => 'course-one.html#data-ai'],
                    ['label' => 'Data Science', 'href' => 'course-one.html#data-ai'],
                    ['label' => 'Machine Learning', 'href' => 'course-one.html#data-ai'],
                    ['label' => 'Artificial Intelligence', 'href' => 'course-one.html#data-ai'],
                    ['label' => 'Generative AI', 'href' => 'course-one.html#data-ai'],
                    ['label' => 'Power BI', 'href' => 'course-one.html#data-ai'],
                ],
            ],
            [
                'label' => 'Cloud Computing',
                'href' => 'course-one.html#cloud-devops',
                'group' => true,
                'children' => [
                    ['label' => 'AWS', 'href' => 'course-one.html#cloud-devops'],
                    ['label' => 'Microsoft Azure', 'href' => 'course-one.html#cloud-devops'],
                    ['label' => 'Google Cloud', 'href' => 'course-one.html#cloud-devops'],
                    ['label' => 'DevOps', 'href' => 'course-one.html#cloud-devops'],
                    ['label' => 'Docker', 'href' => 'course-one.html#cloud-devops'],
                    ['label' => 'Kubernetes', 'href' => 'course-one.html#cloud-devops'],
                ],
            ],
            [
                'label' => 'Cyber Security',
                'href' => 'course-one.html#security-design-marketing',
                'group' => true,
                'children' => [
                    ['label' => 'Ethical Hacking', 'href' => 'course-one.html#security-design-marketing'],
                    ['label' => 'CEH', 'href' => 'course-one.html#security-design-marketing'],
                    ['label' => 'SOC Analyst', 'href' => 'course-one.html#security-design-marketing'],
                    ['label' => 'Penetration Testing', 'href' => 'course-one.html#security-design-marketing'],
                    ['label' => 'Network Security', 'href' => 'course-one.html#security-design-marketing'],
                ],
            ],
            [
                'label' => 'Software Testing',
                'href' => 'course-one.html#security-design-marketing',
                'group' => true,
                'children' => [
                    ['label' => 'Manual Testing', 'href' => 'course-one.html#security-design-marketing'],
                    ['label' => 'Automation Testing', 'href' => 'course-one.html#security-design-marketing'],
                    ['label' => 'Selenium', 'href' => 'course-one.html#security-design-marketing'],
                    ['label' => 'API Testing', 'href' => 'course-one.html#security-design-marketing'],
                    ['label' => 'Playwright', 'href' => 'course-one.html#security-design-marketing'],
                ],
            ],
            [
                'label' => 'Digital Marketing',
                'href' => 'course-one.html#security-design-marketing',
                'group' => true,
                'children' => [
                    ['label' => 'SEO', 'href' => 'course-one.html#security-design-marketing'],
                    ['label' => 'Google Ads', 'href' => 'course-one.html#security-design-marketing'],
                    ['label' => 'Social Media Marketing', 'href' => 'course-one.html#security-design-marketing'],
                    ['label' => 'Content Marketing', 'href' => 'course-one.html#security-design-marketing'],
                    ['label' => 'Email Marketing', 'href' => 'course-one.html#security-design-marketing'],
                ],
            ],
            [
                'label' => 'UI / UX Designing',
                'href' => 'course-one.html#security-design-marketing',
                'group' => true,
                'children' => [
                    ['label' => 'UI/UX Design', 'href' => 'course-one.html#security-design-marketing'],
                    ['label' => 'Figma', 'href' => 'course-one.html#security-design-marketing'],
                    ['label' => 'Graphic Design', 'href' => 'course-one.html#security-design-marketing'],
                ],
            ],
            [
                'label' => 'Mobile App Development',
                'href' => 'course-one.html#full-stack',
                'group' => true,
                'children' => [
                    ['label' => 'Android', 'href' => 'course-one.html#full-stack'],
                    ['label' => 'Kotlin', 'href' => 'course-one.html#full-stack'],
                    ['label' => 'Flutter', 'href' => 'course-one.html#full-stack'],
                    ['label' => 'React Native', 'href' => 'course-one.html#full-stack'],
                    ['label' => 'iOS', 'href' => 'course-one.html#full-stack'],
                ],
            ],
            [
                'label' => 'Networking',
                'href' => 'course-one.html#cloud-devops',
                'group' => true,
                'children' => [
                    ['label' => 'CCNA', 'href' => 'course-one.html#cloud-devops'],
                    ['label' => 'CCNP', 'href' => 'course-one.html#cloud-devops'],
                    ['label' => 'Linux', 'href' => 'course-one.html#cloud-devops'],
                    ['label' => 'Windows Server', 'href' => 'course-one.html#cloud-devops'],
                ],
            ],
            [
                'label' => 'Others',
                'href' => 'course-one.html',
                'group' => true,
                'children' => [
                    ['label' => 'Advanced Excel', 'href' => 'course-one.html'],
                    ['label' => 'SQL', 'href' => 'course-one.html'],
                    ['label' => 'Personality Development', 'href' => 'course-one.html'],
                    ['label' => 'AI Productivity Tools', 'href' => 'course-one.html#data-ai'],
                ],
            ],
        ],
    ],
    [
        'label' => 'Diploma Programs',
        'href' => 'course-one.html#career-programs',
        'children' => [
            ['label' => 'Diploma in Full Stack Development', 'href' => 'course-one.html#career-programs'],
            ['label' => 'Diploma in Data Science & AI', 'href' => 'course-one.html#career-programs'],
            ['label' => 'Diploma in Python Programming', 'href' => 'course-one.html#career-programs'],
            ['label' => 'Diploma in Java Programming', 'href' => 'course-one.html#career-programs'],
            ['label' => 'Diploma in Digital Marketing', 'href' => 'course-one.html#career-programs'],
            ['label' => 'Diploma in Cyber Security', 'href' => 'course-one.html#career-programs'],
            ['label' => 'Diploma in Cloud Computing', 'href' => 'course-one.html#career-programs'],
            ['label' => 'Diploma in Data Analytics', 'href' => 'course-one.html#career-programs'],
        ],
    ],
    [
        'label' => 'Internship Programs',
        'href' => 'course-one.html#internships',
        'children' => [
            ['label' => 'Summer Internship', 'href' => 'course-one.html#internships'],
            ['label' => 'Winter Internship', 'href' => 'course-one.html#internships'],
            ['label' => 'Industrial Training', 'href' => 'course-one.html#internships'],
            ['label' => 'Live Projects', 'href' => 'course-one.html#internships'],
            ['label' => 'Final Year Projects', 'href' => 'course-one.html#internships'],
        ],
    ],
    [
        'label' => 'College Admissions',
        'href' => 'contact-us.html',
        'children' => [
            ['label' => 'Admissions Overview', 'href' => 'contact-us.html'],
            ['label' => 'BCA Admission', 'href' => 'contact-us.html'],
            ['label' => 'MCA Admission', 'href' => 'contact-us.html'],
            ['label' => 'B.Tech Admission', 'href' => 'contact-us.html'],
            ['label' => 'BBA Admission', 'href' => 'contact-us.html'],
        ],
    ],
    [
        'label' => 'Placements',
        'href' => 'course-one.html#career-programs',
        'children' => [
            ['label' => 'Placement Assistance', 'href' => 'course-one.html#career-programs'],
            ['label' => 'Hiring Partners', 'href' => 'about-one.html#placement-partners'],
            ['label' => 'Student Placements', 'href' => 'about-one.html#testimonials'],
            ['label' => 'Placement Process', 'href' => 'course-one.html#career-programs'],
        ],
    ],
    [
        'label' => 'Resources',
        'href' => 'blog-standard.html',
        'children' => [
            ['label' => 'Corporate Training', 'href' => 'contact-us.html'],
            ['label' => 'Blog', 'href' => 'blog-standard.html'],
            ['label' => 'Interview Questions', 'href' => 'blog-standard.html'],
            ['label' => 'Career Guides', 'href' => 'blog-standard.html'],
            ['label' => 'Free Tutorials', 'href' => '/tutorial/'],
            ['label' => 'Events & Webinars', 'href' => 'event-grid.html'],
        ],
    ],
    [
        'label' => 'Contact',
        'href' => 'contact-us.html',
        'children' => [
            ['label' => 'Enroll Now', 'href' => 'contact-us.html'],
            ['label' => 'All Branches', 'href' => 'contact-us.html'],
            ['label' => 'General Enquiry', 'href' => 'contact-us.html'],
            ['label' => 'Support', 'href' => 'contact-us.html'],
        ],
    ],
];

if (!function_exists('mango_render_navigation_items')) {
    function mango_render_navigation_items(array $items, int $depth = 0): void
    {
        foreach ($items as $item) {
            $children = $item['children'] ?? [];
            $hasChildren = is_array($children) && $children !== [];
            $classes = [];

            if ($hasChildren) {
                $classes[] = 'has-droupdown';
            }

            if (!empty($item['mega'])) {
                $classes[] = 'courses-mega';
            }

            if (!empty($item['group'])) {
                $classes[] = 'mega-group';
            }

            $classAttribute = $classes ? ' class="' . implode(' ', $classes) . '"' : '';
            $label = htmlspecialchars((string) $item['label'], ENT_QUOTES, 'UTF-8');
            $href = htmlspecialchars((string) $item['href'], ENT_QUOTES, 'UTF-8');

            echo '<li' . $classAttribute . '><a href="' . $href . '">' . $label . '</a>';

            if ($hasChildren) {
                $submenuClass = 'submenu';

                if (!empty($item['mega'])) {
                    $submenuClass .= ' mango-mega-menu';
                }

                echo '<ul class="' . $submenuClass . '">';
                mango_render_navigation_items($children, $depth + 1);
                echo '</ul>';
            }

            echo '</li>';
        }
    }
}
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
                        <ul class="mainmenu mango-primary-menu">
                            <?php mango_render_navigation_items($navigation); ?>
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

            <ul class="mainmenu mango-mobile-menu">
                <?php mango_render_navigation_items($navigation); ?>
            </ul>

            <div class="mt--30 mango-mobile-call">
                <a href="tel:<?= mango_e($site['phone_href']) ?>" class="edu-btn btn-medium">Call <?= mango_e($site['phone_display']) ?></a>
            </div>
        </div>
    </div>
</header>
