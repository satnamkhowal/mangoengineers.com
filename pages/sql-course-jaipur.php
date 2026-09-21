<?php
$course = [
    'slug' => 'sql-course-jaipur',
    'short_name' => 'SQL',
    'h1' => 'SQL Course in Jaipur',
    'eyebrow' => 'Database Querying for Analytics & Development',
    'headline' => 'Learn SQL to Work Confidently With Relational Data',
    'summary' => 'Build practical SQL skills for querying, filtering, joining, aggregating and reporting on relational data. SQL is a core skill for data analytics, backend development, reporting and business intelligence roles.',
    'image' => 'assests/Mango%20engineers%20images/data-science-course-jaipur-mango-engineers.webp',
    'highlights' => [
        ['Query Practice', 'Learn by writing and debugging SQL queries rather than only reading syntax.'],
        ['Analytics Ready', 'Cover joins, grouping and aggregation needed for reporting and analytics.'],
        ['Developer Friendly', 'Understand database concepts useful for backend and full stack applications.'],
        ['Project Work', 'Practice on structured datasets and realistic database exercises.'],
    ],
    'who_for' => ['Data analytics learners', 'Backend and full stack learners', 'Students preparing for SQL interviews', 'Professionals working with reports or databases'],
    'outcomes' => ['Write SELECT queries confidently', 'Use joins across related tables', 'Aggregate and group data', 'Use subqueries and filtering effectively', 'Understand relational database concepts and data modelling basics'],
    'syllabus' => [
        ['title' => 'SQL Foundations', 'items' => ['Relational database concepts', 'Tables and keys', 'SELECT', 'WHERE', 'ORDER BY', 'LIMIT and aliases']],
        ['title' => 'Data Analysis Queries', 'items' => ['Aggregate functions', 'GROUP BY', 'HAVING', 'CASE logic', 'Date/string functions']],
        ['title' => 'Working Across Tables', 'items' => ['INNER/LEFT/RIGHT joins', 'Self joins concepts', 'Subqueries', 'Set operations', 'Common query patterns']],
        ['title' => 'Practical Database Work', 'items' => ['CRUD concepts', 'Constraints', 'Indexes concepts', 'Views concepts', 'Query practice and interview exercises']],
    ],
    'projects' => ['Sales/reporting query case study', 'Multi-table analytics exercises', 'Database mini-project with reporting queries'],
    'career_roles' => ['Data Analyst pathway', 'Backend Developer pathway', 'BI / Reporting Analyst pathway', 'Database-oriented application roles'],
    'fees' => [['SQL', '₹7,000']],
    'faq' => [
        ['What is the SQL course fee?', 'The currently approved SQL module fee is ₹7,000.'],
        ['Is SQL useful for Data Analytics?', 'Yes. SQL is one of the core skills used to retrieve and analyse structured business data.'],
        ['Do I need programming knowledge?', 'No. SQL can be learned without prior programming experience.'],
        ['Is SQL included in the Data Analytics track?', 'Yes. SQL is one of the four approved components of the complete Data Analytics path.'],
    ],
    'related' => [['Data Analytics', 'data-analytics-course-jaipur.html'], ['Power BI', 'power-bi-course-jaipur.html'], ['Python', 'python-course-jaipur.html'], ['Full Stack Development', 'full-stack-development-course-jaipur.html']],
];
require __DIR__ . '/../includes/course-page.php';
