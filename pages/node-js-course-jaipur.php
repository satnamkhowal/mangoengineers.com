<?php
$course = [
    'slug' => 'node-js-course-jaipur',
    'short_name' => 'Node.js',
    'h1' => 'Node JS Course in Jaipur',
    'eyebrow' => 'JavaScript Backend Development',
    'headline' => 'Build APIs and Server-Side Applications With Node.js',
    'summary' => 'Learn backend development with JavaScript using Node.js concepts, server-side application structure, APIs, validation, authentication concepts and database integration. The module can be combined with the frontend track for a complete Node.js full stack path.',
    'image' => 'assests/Mango%20engineers%20images/node-js-course-jaipur-mango-engineers.webp',
    'highlights' => [
        ['JavaScript Backend', 'Use JavaScript beyond the browser for server-side application development.'],
        ['API Development', 'Understand HTTP, routing, CRUD workflows and API design foundations.'],
        ['Database Integration', 'Connect backend applications to SQL/NoSQL data stores as appropriate.'],
        ['Full Stack Path', 'Combine Node.js with the approved frontend track for end-to-end web development.'],
    ],
    'who_for' => ['JavaScript learners', 'Frontend developers adding backend skills', 'MERN/MEAN learners', 'Students targeting Node.js or full stack roles'],
    'outcomes' => ['Understand Node.js runtime concepts', 'Build server-side application routes', 'Create CRUD APIs', 'Handle validation and errors', 'Work with database integration concepts', 'Connect frontend applications to backend APIs'],
    'syllabus' => [
        ['title' => 'Node.js Foundations', 'items' => ['Runtime concepts', 'Modules', 'npm ecosystem', 'Async programming concepts', 'Environment configuration']],
        ['title' => 'Backend Applications', 'items' => ['Server setup', 'Routing', 'Request/response lifecycle', 'Middleware concepts', 'Validation and errors']],
        ['title' => 'APIs & Data', 'items' => ['REST-style APIs', 'CRUD workflow', 'SQL/NoSQL integration concepts', 'Authentication concepts', 'JSON data']],
        ['title' => 'Project & Deployment Foundations', 'items' => ['Project structure', 'Security basics', 'Logging concepts', 'Configuration', 'Deployment workflow foundations']],
    ],
    'projects' => ['Node.js CRUD API', 'Authentication-oriented backend mini-project', 'Backend for a full stack capstone'],
    'career_roles' => ['Node.js Developer', 'Backend Developer', 'MERN/MEAN Stack pathway', 'Junior Full Stack Developer'],
    'fees' => [['Node.js Backend', '₹8,500'], ['Complete Node Full Stack', '₹28,500']],
    'faq' => [
        ['What is the Node.js course fee?', 'The approved Node.js backend module fee is ₹8,500.'],
        ['What is the complete Node full stack fee?', 'The approved frontend track is ₹20,000 and Node.js backend is ₹8,500, giving a combined ₹28,500 full stack structure.'],
        ['Are SQL and NoSQL included?', 'The supplied structure states SQL and NoSQL are complementary in the Node full stack track.'],
        ['Do I need JavaScript before Node.js?', 'Yes. Strong JavaScript fundamentals make Node.js learning much more effective.'],
    ],
    'related' => [['Full Stack Development', 'full-stack-development-course-jaipur.html'], ['React.js', 'react-js-course-jaipur.html'], ['Java Full Stack', 'java-full-stack-course-jaipur.html'], ['All Courses', 'course-one.html']],
];
require __DIR__ . '/../includes/course-page.php';
