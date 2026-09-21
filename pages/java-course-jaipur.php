<?php
$course = [
    'slug' => 'java-course-jaipur',
    'short_name' => 'Java Development',
    'h1' => 'Java Course in Jaipur',
    'eyebrow' => 'Core Java → Advanced Java → Spring Boot',
    'headline' => 'Build a Strong Java Backend Development Foundation',
    'summary' => 'Learn Java from programming fundamentals through database connectivity, enterprise concepts and the Spring ecosystem. The track is designed for learners who want practical backend development skills and a structured path toward Java full stack development.',
    'image' => 'assests/Mango%20engineers%20images/java-courses-jaipur-mango-engineers.webp',
    'highlights' => [
        ['Practical Coding', 'Concepts are reinforced with coding exercises, assignments and guided problem solving.'],
        ['Backend Path', 'Progress from Core Java into JDBC, persistence, Spring, Spring Boot and REST-oriented development.'],
        ['Project Work', 'Apply Java concepts in progressively larger backend and application projects.'],
        ['Career Preparation', 'Portfolio/GitHub readiness, resume guidance and interview practice can be included in the learning process.'],
    ],
    'who_for' => [
        'Beginners who want to start programming with Java.',
        'BCA, BSc, BTech, MCA and other students preparing for software development roles.',
        'Learners who know basic programming and want a backend development roadmap.',
        'Working professionals shifting toward Java/Spring development.',
    ],
    'outcomes' => [
        'Write structured Java programs using object-oriented programming principles.',
        'Work with collections, exceptions, file handling and common Java APIs.',
        'Connect Java applications to relational databases using JDBC.',
        'Understand persistence concepts with JPA/Hibernate.',
        'Build Spring and Spring Boot applications and REST-oriented backend services.',
        'Organise code for project, GitHub and interview discussion.',
    ],
    'syllabus' => [
        ['title' => 'Core Java Foundations', 'items' => ['Java setup and syntax', 'Variables, operators and control flow', 'Methods and arrays', 'Classes and objects', 'Inheritance, polymorphism, abstraction and encapsulation', 'Interfaces and packages']],
        ['title' => 'Advanced Java Concepts', 'items' => ['Exception handling', 'Collections framework', 'Generics', 'File handling', 'Multithreading concepts', 'Java 8+ language features and functional programming foundations']],
        ['title' => 'Database & Web Foundations', 'items' => ['SQL integration concepts', 'JDBC', 'Servlet/JSP foundations', 'MVC thinking', 'Session and request concepts']],
        ['title' => 'Persistence & Spring', 'items' => ['JPA concepts', 'Hibernate ORM', 'Spring core / dependency injection', 'Spring MVC', 'Spring Boot', 'REST API development', 'Introduction to microservices concepts']],
    ],
    'projects' => ['Console-based Java application', 'JDBC database application', 'Spring Boot CRUD/API project', 'Capstone backend project suited to the learner level'],
    'career_roles' => ['Java Developer', 'Backend Developer', 'Spring Boot Developer (with required project depth)', 'Junior Software Developer', 'Java Full Stack pathway'],
    'fees' => [['Core Java', '₹6,500'], ['Advanced Java', '₹8,000'], ['Spring Boot + Hibernate', '₹8,000'], ['Complete Backend Track', '₹22,500']],
    'faq' => [
        ['Can a beginner join the Java course?', 'Yes. The track can start from programming fundamentals and Core Java before progressing into advanced backend topics.'],
        ['Does the Java course include Spring Boot?', 'The complete backend pathway includes Spring ecosystem topics such as Spring, Spring Boot, persistence and REST-oriented backend development.'],
        ['Is ₹22,500 the complete Java backend fee?', 'The currently supplied structure totals ₹22,500 for Core Java, Advanced Java and the Spring Boot/Hibernate stage. Confirm the active batch inclusions before enrolment.'],
        ['Can I learn Java Full Stack after this?', 'Yes. The Java backend pathway can be combined with frontend development to form a Java Full Stack learning path.'],
        ['Is placement guaranteed?', 'No. Mango Engineers can provide placement assistance and career preparation, but employment outcomes depend on skill, projects, interviews and market conditions.'],
    ],
    'related' => [['Java Full Stack', 'course-one.html#full-stack'], ['Full Stack Development', 'full-stack-development-course-jaipur.html'], ['Python Programming', 'python-course-jaipur.html'], ['All Courses', 'course-one.html']],
];
require __DIR__ . '/../includes/course-page.php';
