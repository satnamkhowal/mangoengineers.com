<?php
$course = [
    'slug' => 'react-js-course-jaipur',
    'short_name' => 'React.js',
    'h1' => 'React JS Course in Jaipur',
    'eyebrow' => 'Modern Frontend Development',
    'headline' => 'Build Interactive Frontend Applications With React',
    'summary' => 'Learn React.js as part of the Mango Engineers frontend and full stack pathway. This module builds on JavaScript fundamentals and focuses on component-based user interfaces, state, routing, API integration and project development.',
    'image' => 'assests/Mango%20engineers%20images/react-js-course-jaipur-mango-engineers.webp',
    'highlights' => [
        ['Component-Based UI', 'Learn how modern frontend applications are split into reusable components.'],
        ['API Integration', 'Consume backend APIs and render dynamic application data.'],
        ['State & Routing', 'Work with common application state and navigation patterns.'],
        ['Full Stack Ready', 'Use React as the frontend layer for Node.js, Java or Python backend paths.'],
    ],
    'who_for' => ['Learners with JavaScript fundamentals', 'Frontend developers moving to React', 'MERN/full stack learners', 'Students building modern web projects'],
    'outcomes' => ['Create reusable React components', 'Manage props and state', 'Handle forms and events', 'Use routing', 'Consume APIs', 'Build a multi-page frontend application'],
    'syllabus' => [
        ['title' => 'React Foundations', 'items' => ['Project setup', 'JSX', 'Components', 'Props', 'Events']],
        ['title' => 'Application State', 'items' => ['State concepts', 'Hooks foundations', 'Forms', 'Conditional rendering', 'Lists']],
        ['title' => 'Routing & APIs', 'items' => ['Client-side routing', 'API calls', 'Loading/error states', 'Reusable services concepts']],
        ['title' => 'Project Architecture', 'items' => ['Component organisation', 'Reusable UI', 'State patterns', 'Build and deployment foundations']],
    ],
    'projects' => ['Interactive React mini-app', 'API-driven dashboard/application', 'Frontend capstone suitable for full stack integration'],
    'career_roles' => ['Frontend Developer', 'React Developer pathway', 'MERN Stack pathway', 'Full Stack Developer pathway'],
    'fees' => [['Frontend Track incl. React', '₹20,000']],
    'faq' => [
        ['Is React included in the frontend track?', 'Yes. The approved frontend structure totals ₹20,000 and includes web design, advanced JavaScript and React-oriented learning.'],
        ['Do I need JavaScript first?', 'Yes. Core and advanced JavaScript fundamentals are strongly recommended before React.'],
        ['Can React be used with Java or Python backend?', 'Yes. React can consume APIs built with Node.js, Java/Spring Boot, Python and other backend stacks.'],
        ['Is there a separate React-only fee?', 'A separate standalone React fee has not been approved here, so this page shows the approved complete frontend-track fee rather than inventing a number.'],
    ],
    'related' => [['Full Stack Development', 'full-stack-development-course-jaipur.html'], ['Node.js', 'node-js-course-jaipur.html'], ['Java Full Stack', 'java-full-stack-course-jaipur.html'], ['All Courses', 'course-one.html']],
];
require __DIR__ . '/../includes/course-page.php';
