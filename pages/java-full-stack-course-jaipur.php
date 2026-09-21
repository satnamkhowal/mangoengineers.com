<?php
$course = [
    'slug' => 'java-full-stack-course-jaipur',
    'short_name' => 'Java Full Stack',
    'h1' => 'Java Full Stack Course in Jaipur',
    'eyebrow' => 'Frontend + Java Backend + Spring Boot',
    'headline' => 'Build End-to-End Web Applications With Java Full Stack',
    'summary' => 'Combine the approved frontend learning track with Java backend development. The pathway covers frontend foundations, modern JavaScript/React-oriented development, Core and Advanced Java, persistence, Spring Boot, REST APIs and full stack project integration.',
    'image' => 'assests/Mango%20engineers%20images/java-full-stack-course-jaipur-mango-engineers.webp',
    'highlights' => [
        ['Frontend Track', 'HTML, CSS, frameworks, JavaScript, advanced JavaScript and React-oriented development.'],
        ['Java Backend', 'Core Java, Advanced Java, JDBC, persistence, Spring and Spring Boot.'],
        ['API Integration', 'Connect a modern frontend to Java REST-style backend services.'],
        ['Capstone Project', 'Build an end-to-end application that demonstrates both frontend and backend skills.'],
    ],
    'who_for' => ['Students and freshers targeting Java full stack roles', 'Java learners adding frontend skills', 'Frontend learners adding Java backend skills', 'BCA/BTech/MCA and other software-development learners'],
    'outcomes' => ['Build responsive frontend interfaces', 'Use modern JavaScript and React-oriented concepts', 'Develop Java/Spring Boot backend services', 'Work with SQL/persistence concepts', 'Create and consume REST APIs', 'Build a complete full stack project'],
    'syllabus' => [
        ['title' => 'Frontend', 'items' => ['HTML5', 'CSS3', 'Bootstrap/Tailwind foundations', 'Core JavaScript', 'Advanced JavaScript / ES6+', 'React-oriented frontend development']],
        ['title' => 'Core & Advanced Java', 'items' => ['OOP', 'Collections', 'Exceptions', 'Generics', 'File handling', 'Multithreading concepts', 'Modern Java features']],
        ['title' => 'Java Backend', 'items' => ['JDBC', 'Servlet/JSP foundations', 'JPA/Hibernate', 'Spring Core', 'Spring MVC', 'Spring Boot', 'REST APIs']],
        ['title' => 'Full Stack Integration', 'items' => ['Frontend/backend contracts', 'Authentication concepts', 'Database integration', 'Validation/error handling', 'Capstone architecture', 'Deployment foundations']],
    ],
    'projects' => ['Frontend project', 'Java/JDBC mini-project', 'Spring Boot REST API', 'Full stack capstone with frontend + Java backend'],
    'career_roles' => ['Java Full Stack Developer pathway', 'Java Backend Developer', 'Frontend Developer pathway', 'Junior Software Developer'],
    'fees' => [['Frontend Track', '₹20,000'], ['Java Backend Track', '₹22,500'], ['Complete Java Full Stack', '₹42,500']],
    'faq' => [
        ['How is the ₹42,500 Java Full Stack fee calculated?', 'It combines the approved frontend track fee of ₹20,000 with the approved complete Java backend fee of ₹22,500.'],
        ['Does Java Full Stack include Spring Boot?', 'Yes. The approved Java backend pathway includes Spring Boot and Hibernate in the advanced backend stage.'],
        ['Does it include React?', 'The supplied frontend track includes React-oriented learning along with web design and advanced JavaScript.'],
        ['Can a beginner join?', 'Yes, if the batch starts from frontend and Core Java foundations. Prior coding knowledge is helpful but not mandatory for a beginner batch.'],
    ],
    'related' => [['Java Programming', 'java-course-jaipur.html'], ['React.js', 'react-js-course-jaipur.html'], ['Full Stack Development', 'full-stack-development-course-jaipur.html'], ['Node.js', 'node-js-course-jaipur.html']],
];
require __DIR__ . '/../includes/course-page.php';
