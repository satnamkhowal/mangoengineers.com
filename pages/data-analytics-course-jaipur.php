<?php
$course = [
    'slug' => 'data-analytics-course-jaipur',
    'short_name' => 'Data Analytics',
    'h1' => 'Data Analytics Course in Jaipur',
    'eyebrow' => 'Excel + SQL + Python + Power BI',
    'headline' => 'Build Practical Data Analytics Skills for Reporting and Decision-Making',
    'summary' => 'Learn a complete analytics workflow covering spreadsheets, SQL, Python and Power BI. The track is designed for students, freshers and working professionals who want to analyse data, build dashboards and present business insights clearly.',
    'image' => 'assests/Mango%20engineers%20images/power-bi-course-jaipur-mango-engineers.webp',
    'highlights' => [
        ['End-to-End Analytics', 'Move from raw data and spreadsheets to SQL querying, Python analysis and dashboard reporting.'],
        ['Practical Reporting', 'Work with real-world style datasets, cleaning, summaries, KPIs and visual reporting.'],
        ['Tool Stack', 'Use Excel/Advanced Excel, SQL, Python and Power BI in one connected learning path.'],
        ['Career Preparation', 'Build project work suitable for portfolio discussion and entry-level analytics interviews.'],
    ],
    'who_for' => [
        'Students and freshers targeting entry-level data analytics roles.',
        'Working professionals who want stronger reporting and dashboard skills.',
        'Learners from non-programming backgrounds who want a structured analytics path.',
        'Business, commerce, engineering and computer-science learners working with data.',
    ],
    'outcomes' => [
        'Clean and analyse data in Excel and Advanced Excel.',
        'Write SQL queries to extract, filter, join and aggregate data.',
        'Use Python for data manipulation and basic analysis.',
        'Build interactive Power BI dashboards and KPI reports.',
        'Explain findings using clear business-focused visualisation and reporting.',
    ],
    'syllabus' => [
        ['title' => 'Excel & Advanced Excel', 'items' => ['Formulas and functions', 'Lookup functions', 'Data cleaning', 'Pivot tables and charts', 'Conditional logic', 'Reporting and dashboard foundations']],
        ['title' => 'SQL for Analytics', 'items' => ['SELECT and filtering', 'Sorting and grouping', 'Joins', 'Subqueries', 'Aggregate functions', 'Analytical querying practice']],
        ['title' => 'Python for Data Analysis', 'items' => ['Python foundations', 'Data structures', 'Data handling workflow', 'Pandas-style analysis concepts', 'Cleaning and transformation', 'Basic visual analysis']],
        ['title' => 'Power BI', 'items' => ['Data import', 'Power Query concepts', 'Data modelling', 'DAX foundations', 'Visuals and KPIs', 'Interactive dashboards and reporting']],
    ],
    'projects' => ['Excel business reporting project', 'SQL analytics case study', 'Python data-cleaning/analysis project', 'Power BI dashboard capstone'],
    'career_roles' => ['Data Analyst', 'MIS / Reporting Analyst', 'Business Intelligence Analyst pathway', 'Junior Analytics Associate', 'Power BI Analyst pathway'],
    'fees' => [['Python', '₹7,500'], ['SQL', '₹7,000'], ['Excel + Advanced Excel', '₹7,000'], ['Power BI', '₹10,000'], ['Complete Analytics Track', '₹31,500']],
    'faq' => [
        ['What is included in the ₹31,500 Data Analytics track?', 'The approved structure combines Python ₹7,500, SQL ₹7,000, Excel/Advanced Excel ₹7,000 and Power BI ₹10,000.'],
        ['Do I need coding experience?', 'No. The track can begin with spreadsheet and SQL foundations before progressing into Python-based analysis.'],
        ['Is Power BI included?', 'Yes. Power BI is part of the complete analytics path and is also available as a focused module.'],
        ['Will I build projects?', 'Yes. The path includes reporting, querying, analysis and dashboard-oriented practical work.'],
        ['Is placement guaranteed?', 'No. Mango Engineers can provide career preparation and placement assistance, but employment is not guaranteed.'],
    ],
    'related' => [['Power BI', 'power-bi-course-jaipur.html'], ['SQL', 'sql-course-jaipur.html'], ['Excel & Advanced Excel', 'excel-advanced-excel-course-jaipur.html'], ['Python Programming', 'python-course-jaipur.html']],
];
require __DIR__ . '/../includes/course-page.php';
