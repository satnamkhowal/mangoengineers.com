<?php
$course = [
    'slug' => 'power-bi-course-jaipur',
    'short_name' => 'Power BI',
    'h1' => 'Power BI Course in Jaipur',
    'eyebrow' => 'Dashboards • Data Modelling • BI Reporting',
    'headline' => 'Turn Data Into Interactive Dashboards and Business Insights',
    'summary' => 'Learn Power BI for data preparation, modelling, KPI reporting and interactive dashboards. The module is suitable for analytics learners and professionals who need to communicate business performance visually.',
    'image' => 'assests/Mango%20engineers%20images/power-bi-course-jaipur-mango-engineers.webp',
    'highlights' => [
        ['Dashboard Building', 'Create interactive reports with filters, KPIs and business visuals.'],
        ['Data Preparation', 'Understand import, transformation and Power Query-style workflow.'],
        ['Data Modelling', 'Build relationships and model data for consistent reporting.'],
        ['Analytics Integration', 'Use Power BI as part of a wider Excel + SQL + Python analytics workflow.'],
    ],
    'who_for' => ['Data analytics learners', 'MIS/reporting professionals', 'Business analysts', 'Professionals building dashboards and KPI reports'],
    'outcomes' => ['Import and transform data', 'Build relationships between datasets', 'Create useful measures and calculations', 'Design interactive dashboards', 'Present business KPIs clearly'],
    'syllabus' => [
        ['title' => 'Power BI Foundations', 'items' => ['Desktop interface', 'Data import', 'Common sources', 'Basic transformations']],
        ['title' => 'Power Query & Cleaning', 'items' => ['Cleaning workflow', 'Data types', 'Combining data', 'Transformation concepts']],
        ['title' => 'Data Modelling & DAX', 'items' => ['Relationships', 'Star-schema concepts', 'Calculated columns', 'Measures', 'DAX foundations']],
        ['title' => 'Dashboards & Reporting', 'items' => ['Charts', 'KPIs', 'Slicers and filters', 'Drill-down', 'Report layout', 'Dashboard project']],
    ],
    'projects' => ['Sales performance dashboard', 'Management KPI report', 'Interactive analytics capstone'],
    'career_roles' => ['Power BI Analyst', 'Data Analyst pathway', 'BI / Reporting Analyst pathway', 'MIS / Dashboard reporting roles'],
    'fees' => [['Power BI', '₹10,000']],
    'faq' => [
        ['What is the Power BI course fee?', 'The currently approved Power BI module fee is ₹10,000.'],
        ['Do I need Excel before Power BI?', 'Excel helps, but beginners can learn Power BI directly if they are comfortable working with structured data.'],
        ['Is Power BI included in Data Analytics?', 'Yes. Power BI is one of the four approved components in the full Data Analytics track.'],
        ['Will I make dashboards?', 'Yes. Dashboard and KPI reporting projects are a core part of the practical learning path.'],
    ],
    'related' => [['Data Analytics', 'data-analytics-course-jaipur.html'], ['Excel & Advanced Excel', 'excel-advanced-excel-course-jaipur.html'], ['SQL', 'sql-course-jaipur.html'], ['Python', 'python-course-jaipur.html']],
];
require __DIR__ . '/../includes/course-page.php';
