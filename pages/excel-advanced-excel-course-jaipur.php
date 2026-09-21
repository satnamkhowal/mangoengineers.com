<?php
$course = [
    'slug' => 'excel-advanced-excel-course-jaipur',
    'short_name' => 'Excel & Advanced Excel',
    'h1' => 'Excel and Advanced Excel Course in Jaipur',
    'eyebrow' => 'Spreadsheets • Analysis • Reporting',
    'headline' => 'Build Strong Excel Skills for Business, MIS and Data Analytics',
    'summary' => 'Learn Excel from practical spreadsheet foundations through advanced formulas, lookups, pivot tables, cleaning and reporting. This module is also a core part of the Mango Engineers Data Analytics pathway.',
    'image' => 'assests/Mango%20engineers%20images/power-bi-course-jaipur-mango-engineers.webp',
    'highlights' => [
        ['Business Reporting', 'Create structured worksheets, summaries, reports and KPI-style outputs.'],
        ['Advanced Functions', 'Practice logical, lookup, text, date and conditional functions.'],
        ['Data Cleaning', 'Prepare messy data for reliable analysis and reporting.'],
        ['Analytics Foundation', 'Build the spreadsheet skills needed before SQL, Python and Power BI.'],
    ],
    'who_for' => ['Students and freshers', 'MIS and reporting professionals', 'Business/commerce learners', 'Data analytics beginners'],
    'outcomes' => ['Use formulas and functions confidently', 'Clean and organise spreadsheet data', 'Build pivot tables and charts', 'Create lookup-driven reports', 'Prepare data for further analytics and BI work'],
    'syllabus' => [
        ['title' => 'Excel Foundations', 'items' => ['Workbook and worksheet basics', 'Cell references', 'Formatting', 'Sorting and filtering', 'Basic formulas']],
        ['title' => 'Functions & Logic', 'items' => ['IF and conditional logic', 'SUMIFS/COUNTIFS', 'Text functions', 'Date functions', 'Lookup functions']],
        ['title' => 'Advanced Analysis', 'items' => ['Pivot tables', 'Pivot charts', 'Data validation', 'Conditional formatting', 'Cleaning and reconciliation workflows']],
        ['title' => 'Reporting', 'items' => ['Management reports', 'KPI summaries', 'Dashboard foundations', 'Practical business exercises']],
    ],
    'projects' => ['MIS reporting workbook', 'Sales/performance analysis workbook', 'Interactive Excel dashboard-style project'],
    'career_roles' => ['MIS Executive pathway', 'Reporting Analyst pathway', 'Data Analyst foundation', 'Operations reporting roles'],
    'fees' => [['Excel + Advanced Excel', '₹7,000']],
    'faq' => [
        ['What is the Excel and Advanced Excel fee?', 'The currently approved combined fee is ₹7,000.'],
        ['Is Advanced Excel included?', 'Yes. The approved module covers Excel and Advanced Excel together.'],
        ['Is Excel enough for a Data Analyst role?', 'Excel is an important foundation, but a stronger analytics path normally combines it with SQL, Power BI and Python.'],
        ['Is this part of the Data Analytics course?', 'Yes. Excel/Advanced Excel is one component of the complete analytics track.'],
    ],
    'related' => [['Data Analytics', 'data-analytics-course-jaipur.html'], ['SQL', 'sql-course-jaipur.html'], ['Power BI', 'power-bi-course-jaipur.html'], ['Python', 'python-course-jaipur.html']],
];
require __DIR__ . '/../includes/course-page.php';
