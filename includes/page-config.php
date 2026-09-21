<?php
declare(strict_types=1);

function mango_page_definitions(): array
{
    return [
        '404' => ['name' => 'Page Not Found', 'description' => 'The requested Mango Engineers page could not be found. Use the main navigation to continue exploring courses, resources and contact information.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'about-one' => ['name' => 'About Mango Engineers', 'description' => 'Learn about Mango Engineers, our practical technology training approach, student-focused learning environment and presence in Jaipur.', 'schema_type' => 'AboutPage', 'robots' => 'index,follow'],
        'about-two' => ['name' => 'Mango Engineers Learning Approach', 'description' => 'Explore the teaching approach, practical learning model and skill-development focus used across Mango Engineers training programs.', 'schema_type' => 'AboutPage', 'robots' => 'noindex,follow'],
        'about-three' => ['name' => 'Why Learn with Mango Engineers', 'description' => 'Discover the learning environment, training philosophy and career-focused approach behind Mango Engineers technology programs in Jaipur.', 'schema_type' => 'AboutPage', 'robots' => 'noindex,follow'],
        'blog-details' => ['name' => 'Mango Engineers Article', 'description' => 'Read an in-depth Mango Engineers article covering technology learning, programming skills, career development and practical training insights.', 'schema_type' => 'WebPage', 'robots' => 'index,follow'],
        'blog-list' => ['name' => 'Mango Engineers Articles List', 'description' => 'Browse Mango Engineers articles on programming, software development, digital skills, training guidance and technology careers.', 'schema_type' => 'CollectionPage', 'robots' => 'noindex,follow'],
        'blog-masonry' => ['name' => 'Mango Engineers Learning Resources', 'description' => 'Explore Mango Engineers learning resources, technology articles and career-focused educational content in a visual article layout.', 'schema_type' => 'CollectionPage', 'robots' => 'noindex,follow'],
        'blog-standard' => ['name' => 'Technology Blog & Learning Resources', 'description' => 'Read Mango Engineers articles on programming, software development, technology courses, practical skills and career learning in Jaipur.', 'schema_type' => 'CollectionPage', 'robots' => 'index,follow'],
        'cart' => ['name' => 'Training Cart', 'description' => 'Review selected training items and course-related selections on Mango Engineers.', 'schema_type' => 'WebPage', 'robots' => 'noindex,nofollow'],
        'checkout' => ['name' => 'Training Checkout', 'description' => 'Complete training-related checkout details for Mango Engineers where applicable.', 'schema_type' => 'WebPage', 'robots' => 'noindex,nofollow'],
        'coming-soon' => ['name' => 'Coming Soon', 'description' => 'A new Mango Engineers learning resource or training experience is being prepared.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'contact-me' => ['name' => 'Contact a Mango Engineers Advisor', 'description' => 'Get in touch with Mango Engineers for course guidance, training enquiries and information about learning options in Jaipur.', 'schema_type' => 'ContactPage', 'robots' => 'noindex,follow'],
        'contact-us' => ['name' => 'Contact Mango Engineers Jaipur', 'description' => 'Contact Mango Engineers for course enquiries and training guidance at our Jaipur locations in Tonk Phatak and Shri Kishanpura.', 'schema_type' => 'ContactPage', 'robots' => 'index,follow'],
        'course-details' => ['name' => 'Technology Course Details', 'description' => 'Review Mango Engineers course information, learning structure, curriculum overview and training details for technology skill development.', 'schema_type' => 'ItemPage', 'robots' => 'index,follow', 'entity_type' => 'Course'],
        'course-details-2' => ['name' => 'Technology Course Details – Layout 2', 'description' => 'Explore a Mango Engineers course detail layout with curriculum, learning information and training highlights for technology programs.', 'schema_type' => 'ItemPage', 'robots' => 'noindex,follow', 'entity_type' => 'Course'],
        'course-details-3' => ['name' => 'Technology Course Details – Layout 3', 'description' => 'Explore course structure, learning modules and training information for Mango Engineers technology programs using this detail layout.', 'schema_type' => 'ItemPage', 'robots' => 'noindex,follow', 'entity_type' => 'Course'],
        'course-details-4' => ['name' => 'Technology Course Details – Layout 4', 'description' => 'View a Mango Engineers technology course detail presentation covering learning content, outcomes and program information.', 'schema_type' => 'ItemPage', 'robots' => 'noindex,follow', 'entity_type' => 'Course'],
        'course-details-5' => ['name' => 'Technology Course Details – Layout 5', 'description' => 'Review Mango Engineers training program information, course structure and learning highlights in this course detail format.', 'schema_type' => 'ItemPage', 'robots' => 'noindex,follow', 'entity_type' => 'Course'],
        'course-details-6' => ['name' => 'Technology Course Details – Layout 6', 'description' => 'Explore technology training details, curriculum information and learning highlights for Mango Engineers courses.', 'schema_type' => 'ItemPage', 'robots' => 'noindex,follow', 'entity_type' => 'Course'],
        'course-one' => ['name' => 'Technology Courses in Jaipur', 'description' => 'Explore Mango Engineers programming, software development and technology training courses designed for practical skill development in Jaipur.', 'schema_type' => 'CollectionPage', 'robots' => 'index,follow'],
        'course-two' => ['name' => 'Technology Course Catalogue – Layout 2', 'description' => 'Browse Mango Engineers technology and software training options using an alternative course catalogue layout.', 'schema_type' => 'CollectionPage', 'robots' => 'noindex,follow'],
        'course-three' => ['name' => 'Technology Course Catalogue – Layout 3', 'description' => 'Explore Mango Engineers programming and technology training options in this alternative course catalogue presentation.', 'schema_type' => 'CollectionPage', 'robots' => 'noindex,follow'],
        'course-four' => ['name' => 'Technology Course Catalogue – Layout 4', 'description' => 'Browse practical software and technology learning programs from Mango Engineers in this course catalogue layout.', 'schema_type' => 'CollectionPage', 'robots' => 'noindex,follow'],
        'course-five' => ['name' => 'Technology Course Catalogue – Layout 5', 'description' => 'Discover Mango Engineers technology training programs and practical learning options in this alternative catalogue format.', 'schema_type' => 'CollectionPage', 'robots' => 'noindex,follow'],
        'event-details' => ['name' => 'Mango Engineers Event Details', 'description' => 'View information about a Mango Engineers workshop, learning activity, training event or technology-focused student session.', 'schema_type' => 'ItemPage', 'robots' => 'index,follow'],
        'event-grid' => ['name' => 'Workshops & Events', 'description' => 'Explore Mango Engineers workshops, learning activities, technology events and student-focused training sessions in Jaipur.', 'schema_type' => 'CollectionPage', 'robots' => 'index,follow'],
        'event-list' => ['name' => 'Mango Engineers Events List', 'description' => 'Browse Mango Engineers workshops, technology sessions and learning activities in a detailed event list.', 'schema_type' => 'CollectionPage', 'robots' => 'noindex,follow'],
        'faq' => ['name' => 'Frequently Asked Questions', 'description' => 'Find answers to common questions about Mango Engineers courses, training, learning options, admissions and Jaipur locations.', 'schema_type' => 'FAQPage', 'robots' => 'index,follow'],
        'gallery-grid' => ['name' => 'Mango Engineers Gallery', 'description' => 'Explore Mango Engineers training, learning and student activity visuals from our Jaipur learning environment.', 'schema_type' => 'CollectionPage', 'robots' => 'index,follow'],
        'gallery-masonry' => ['name' => 'Mango Engineers Gallery – Masonry', 'description' => 'Browse Mango Engineers learning, training and student activity visuals in an alternative gallery layout.', 'schema_type' => 'CollectionPage', 'robots' => 'noindex,follow'],
        'index-2' => ['name' => 'Mango Engineers Education Homepage Variant', 'description' => 'Alternative Mango Engineers education homepage layout retained for theme component reuse and future page development.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-business-coach' => ['name' => 'Business Learning Page Variant', 'description' => 'Mango Engineers theme variant for business-learning and professional skills page components.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-digital-marketing' => ['name' => 'Digital Marketing Training Page', 'description' => 'Explore the Mango Engineers digital marketing training page structure for practical marketing, advertising and online growth skills.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-distant-learning' => ['name' => 'Remote Learning Page Variant', 'description' => 'Mango Engineers theme variant for remote and distance learning experiences, retained for reusable training components.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-gym-tranning' => ['name' => 'Training Theme Variant – Fitness', 'description' => 'Reusable Mango Engineers theme variant retained for layout and component reference.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-health-coach' => ['name' => 'Training Theme Variant – Health', 'description' => 'Reusable Mango Engineers theme variant retained for layout and component reference.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-kindergarten' => ['name' => 'Training Theme Variant – Early Learning', 'description' => 'Reusable Mango Engineers theme variant retained for layout and component reference.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-kitchen' => ['name' => 'Training Theme Variant – Kitchen', 'description' => 'Reusable Mango Engineers theme variant retained for layout and component reference.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-landing' => ['name' => 'Mango Engineers Landing Page Variant', 'description' => 'Reusable Mango Engineers landing-page theme variant for future campaigns and focused training experiences.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-language-academy' => ['name' => 'Language Learning Page Variant', 'description' => 'Reusable Mango Engineers theme variant retained for language-learning and educational layout components.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-modern-schooling' => ['name' => 'Modern Learning Page Variant', 'description' => 'Reusable Mango Engineers theme variant retained for modern education and training page components.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-motivation' => ['name' => 'Motivation Learning Page Variant', 'description' => 'Reusable Mango Engineers theme variant retained for coaching, motivation and learning page components.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-online-academy' => ['name' => 'Online Academy Page Variant', 'description' => 'Mango Engineers online academy theme variant featuring reusable course, instructor, FAQ, event and blog components.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-online-art' => ['name' => 'Creative Learning Page Variant', 'description' => 'Reusable Mango Engineers theme variant retained for creative and design learning page components.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-photography' => ['name' => 'Photography Learning Page Variant', 'description' => 'Reusable Mango Engineers theme variant retained for visual learning and portfolio-oriented page components.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-programming' => ['name' => 'Programming Training Page', 'description' => 'Explore Mango Engineers programming training page components for coding, software development and practical technology learning.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-quran-learning' => ['name' => 'Learning Theme Variant', 'description' => 'Reusable Mango Engineers education theme variant retained for layout and component reference.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-remote-training' => ['name' => 'Remote Training Page Variant', 'description' => 'Reusable Mango Engineers remote training theme variant for online learning and distributed training experiences.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-sales-coach' => ['name' => 'Sales Learning Page Variant', 'description' => 'Reusable Mango Engineers theme variant retained for sales, communication and professional learning page components.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-university' => ['name' => 'Institutional Learning Page Variant', 'description' => 'Reusable Mango Engineers university-style theme variant for institutional and academic page components.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index-yoga' => ['name' => 'Training Theme Variant – Wellness', 'description' => 'Reusable Mango Engineers theme variant retained for layout and component reference.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'index' => ['name' => 'Mango Engineers | Programming & Technology Training in Jaipur', 'description' => 'Mango Engineers provides practical programming, software development and technology training with learning centres in Jaipur.', 'schema_type' => 'WebPage', 'robots' => 'index,follow'],
        'my-account' => ['name' => 'Student Account', 'description' => 'Access account-related features for Mango Engineers where enabled.', 'schema_type' => 'WebPage', 'robots' => 'noindex,nofollow'],
        'pricing-table' => ['name' => 'Training Fees & Pricing Layout', 'description' => 'Review the Mango Engineers pricing-table layout for presenting course fees, training plans and program options.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'privacy-policy' => ['name' => 'Privacy Policy', 'description' => 'Read the Mango Engineers privacy policy covering website use, enquiries and handling of information submitted through the website.', 'schema_type' => 'WebPage', 'robots' => 'index,follow'],
        'product-details' => ['name' => 'Training Resource Details', 'description' => 'View details for a Mango Engineers training-related resource where applicable.', 'schema_type' => 'ItemPage', 'robots' => 'noindex,nofollow'],
        'purchase-guide' => ['name' => 'Course Enrolment Guide', 'description' => 'Review guidance for choosing and enrolling in Mango Engineers training programs and learning options.', 'schema_type' => 'WebPage', 'robots' => 'noindex,follow'],
        'shop' => ['name' => 'Training Resources', 'description' => 'Browse Mango Engineers training-related resources where applicable.', 'schema_type' => 'CollectionPage', 'robots' => 'noindex,nofollow'],
        'team-details' => ['name' => 'Instructor Profile', 'description' => 'Learn about a Mango Engineers instructor profile, teaching focus and practical training background.', 'schema_type' => 'ProfilePage', 'robots' => 'noindex,follow'],
        'team-one' => ['name' => 'Mango Engineers Instructors', 'description' => 'Meet Mango Engineers instructors and trainers supporting practical programming and technology learning.', 'schema_type' => 'CollectionPage', 'robots' => 'index,follow'],
        'team-two' => ['name' => 'Mango Engineers Instructors – Layout 2', 'description' => 'Explore Mango Engineers instructor and trainer profiles in an alternative team layout.', 'schema_type' => 'CollectionPage', 'robots' => 'noindex,follow'],
        'team-three' => ['name' => 'Mango Engineers Instructors – Layout 3', 'description' => 'Browse Mango Engineers instructor and trainer profiles in an alternative team presentation.', 'schema_type' => 'CollectionPage', 'robots' => 'noindex,follow'],
        'terms-condition' => ['name' => 'Terms & Conditions', 'description' => 'Read the terms and conditions governing use of the Mango Engineers website and related online information.', 'schema_type' => 'WebPage', 'robots' => 'index,follow'],
        'wishlist' => ['name' => 'Saved Training Items', 'description' => 'View training-related items saved for later where Mango Engineers account features are enabled.', 'schema_type' => 'WebPage', 'robots' => 'noindex,nofollow'],
        'java-course-jaipur' => ['name' => 'Java Course in Jaipur', 'description' => 'Learn Core Java, Advanced Java, JDBC, Hibernate, Spring and Spring Boot with practical projects, mentor support and career preparation at Mango Engineers Jaipur.', 'schema_type' => 'ItemPage', 'robots' => 'index,follow', 'entity_type' => 'Course'],
        'python-course-jaipur' => ['name' => 'Python Course in Jaipur', 'description' => 'Learn Python programming in Jaipur with practical coding, assignments and a foundation for backend development, automation, data analytics, data science and AI.', 'schema_type' => 'ItemPage', 'robots' => 'index,follow', 'entity_type' => 'Course'],
        'full-stack-development-course-jaipur' => ['name' => 'Full Stack Development Course in Jaipur', 'description' => 'Learn frontend development, advanced JavaScript, Node.js, APIs, SQL and NoSQL through practical full stack projects at Mango Engineers Jaipur.', 'schema_type' => 'ItemPage', 'robots' => 'index,follow', 'entity_type' => 'Course'],
        'data-analytics-course-jaipur' => ['name' => 'Data Analytics Course in Jaipur', 'description' => 'Learn Data Analytics in Jaipur with Excel, Advanced Excel, SQL, Python and Power BI through practical reporting, dashboard and analysis projects at Mango Engineers.', 'schema_type' => 'ItemPage', 'robots' => 'index,follow', 'entity_type' => 'Course'],
        'excel-advanced-excel-course-jaipur' => ['name' => 'Excel & Advanced Excel Course in Jaipur', 'description' => 'Learn Excel and Advanced Excel in Jaipur with formulas, data cleaning, lookup functions, pivot tables, charts and practical reporting workflows at Mango Engineers.', 'schema_type' => 'ItemPage', 'robots' => 'index,follow', 'entity_type' => 'Course'],
        'java-full-stack-course-jaipur' => ['name' => 'Java Full Stack Course in Jaipur', 'description' => 'Learn Java Full Stack development in Jaipur with frontend technologies, Core and Advanced Java, Spring Boot, Hibernate, databases, APIs and practical projects.', 'schema_type' => 'ItemPage', 'robots' => 'index,follow', 'entity_type' => 'Course'],
        'node-js-course-jaipur' => ['name' => 'Node.js Course in Jaipur', 'description' => 'Learn Node.js backend development in Jaipur with JavaScript, APIs, databases, server-side application development and practical full stack project integration.', 'schema_type' => 'ItemPage', 'robots' => 'index,follow', 'entity_type' => 'Course'],
        'power-bi-course-jaipur' => ['name' => 'Power BI Course in Jaipur', 'description' => 'Learn Power BI in Jaipur with data import, transformation, modelling, DAX foundations, KPI reporting and interactive dashboard projects at Mango Engineers.', 'schema_type' => 'ItemPage', 'robots' => 'index,follow', 'entity_type' => 'Course'],
        'react-js-course-jaipur' => ['name' => 'React JS Course in Jaipur', 'description' => 'Learn React JS in Jaipur with components, hooks, state, routing, API integration and practical frontend application development at Mango Engineers.', 'schema_type' => 'ItemPage', 'robots' => 'index,follow', 'entity_type' => 'Course'],
        'sql-course-jaipur' => ['name' => 'SQL Course in Jaipur', 'description' => 'Learn SQL in Jaipur with database fundamentals, querying, joins, grouping, subqueries and practical data-focused exercises for software and analytics pathways.', 'schema_type' => 'ItemPage', 'robots' => 'index,follow', 'entity_type' => 'Course'],
    ];
}

function mango_page_config(string $key): array
{
    $definitions = mango_page_definitions();
    if (!isset($definitions[$key])) {
        $key = '404';
    }

    $page = $definitions[$key];
    $page['key'] = $key;
    $page['title'] = $key === 'index'
        ? $page['name']
        : $page['name'] . ' | Mango Engineers Jaipur';
    $page['canonical'] = $key === 'index'
        ? MANGO_SITE_URL . '/'
        : MANGO_SITE_URL . '/' . $key . '.html';

    return $page;
}

function mango_page_schema(array $page): array
{
    $site = mango_site();

    $organization = [
        '@type' => 'EducationalOrganization',
        '@id' => MANGO_SITE_URL . '/#organization',
        'name' => MANGO_SITE_NAME,
        'url' => MANGO_SITE_URL . '/',
        'telephone' => MANGO_PHONE_DISPLAY,
        'sameAs' => array_values($site['social']),
        'location' => array_map(
            static fn(array $branch): array => [
                '@type' => 'Place',
                'name' => $branch['name'],
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => $branch['street'],
                    'addressLocality' => 'Jaipur',
                    'addressRegion' => 'Rajasthan',
                    'postalCode' => $branch['postal_code'],
                    'addressCountry' => 'IN',
                ],
                'hasMap' => $branch['map'],
            ],
            $site['branches']
        ),
    ];

    $website = [
        '@type' => 'WebSite',
        '@id' => MANGO_SITE_URL . '/#website',
        'url' => MANGO_SITE_URL . '/',
        'name' => MANGO_SITE_NAME,
        'publisher' => ['@id' => MANGO_SITE_URL . '/#organization'],
        'inLanguage' => 'en-IN',
    ];

    $webpage = [
        '@type' => $page['schema_type'],
        '@id' => $page['canonical'] . '#webpage',
        'url' => $page['canonical'],
        'name' => $page['name'],
        'description' => $page['description'],
        'isPartOf' => ['@id' => MANGO_SITE_URL . '/#website'],
        'about' => ['@id' => MANGO_SITE_URL . '/#organization'],
        'inLanguage' => 'en-IN',
    ];

    $breadcrumb = [
        '@type' => 'BreadcrumbList',
        '@id' => $page['canonical'] . '#breadcrumb',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => MANGO_SITE_URL . '/',
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => $page['name'],
                'item' => $page['canonical'],
            ],
        ],
    ];

    $graph = [$organization, $website, $webpage, $breadcrumb];

    if (($page['entity_type'] ?? null) === 'Course') {
        $graph[] = [
            '@type' => 'Course',
            '@id' => $page['canonical'] . '#course',
            'name' => $page['name'],
            'description' => $page['description'],
            'provider' => ['@id' => MANGO_SITE_URL . '/#organization'],
            'url' => $page['canonical'],
        ];
    }

    return [
        '@context' => 'https://schema.org',
        '@graph' => $graph,
    ];
}