<?php
declare(strict_types=1);

function mango_tutorial_tracks(): array
{
    return [
        'python' => [
            'title' => 'Python Tutorial',
            'category' => 'Programming',
            'level' => 'Beginner to Intermediate',
            'description' => 'Learn Python from syntax and control flow through functions, data structures, OOP, files, exceptions and practical problem solving.',
            'intro' => 'Python is a readable general-purpose language used in scripting, automation, web backends, data work and AI. This track starts from the language fundamentals and steadily moves toward reusable programs and problem solving.',
            'prerequisites' => ['Basic computer usage', 'No prior Python experience required', 'A current Python 3 installation or browser-based interpreter'],
            'outcomes' => ['Write and run Python programs', 'Use collections and functions confidently', 'Model problems with classes and objects', 'Handle files and exceptions', 'Build small command-line projects'],
            'course_url' => 'python-course-jaipur.html',
            'chapters' => [
                'getting-started' => [
                    'title' => 'Python Getting Started',
                    'summary' => 'Understand Python, run your first program, use the interpreter and learn the basic execution model.',
                    'explanation' => [
                        'Python source code is written in plain-text .py files and executed by the Python interpreter. For early practice, an interactive interpreter is useful because each statement can be tried immediately.',
                        'Start with a tiny program, then learn how indentation, comments and statements work. Python uses indentation as syntax, so consistent spacing is part of writing correct code.'
                    ],
                    'example' => "name = \"Mango Learner\"\nprint(\"Hello,\", name)\nprint(2 + 3)",
                    'practice' => ['Print your name and city.', 'Store two numbers and print their sum, difference and product.', 'Add a comment explaining each statement.'],
                    'takeaways' => ['Python code is commonly stored in .py files.', 'Indentation is meaningful.', 'The interpreter is useful for fast experiments.'],
                ],
                'variables-data-types' => [
                    'title' => 'Variables and Data Types',
                    'summary' => 'Work with numbers, strings, booleans, type conversion and simple expressions.',
                    'explanation' => [
                        'A variable is a name bound to a value. Python determines the value type at runtime, so you do not declare a fixed variable type before assignment.',
                        'Common built-in types include int, float, str and bool. Conversions such as int(), float() and str() are useful when input and calculations use different representations.'
                    ],
                    'example' => "age = 21\nprice = 499.50\ncourse = \"Python\"\nis_active = True\nprint(course, age, price, is_active)\nprint(int(\"25\") + 5)",
                    'practice' => ['Create variables for student name, age and fee.', 'Convert a numeric string to an integer and add 10.', 'Use type() to inspect at least four values.'],
                    'takeaways' => ['Names can be rebound to new values.', 'Built-in data types support different operations.', 'Convert input deliberately before calculations.'],
                ],
                'conditions-loops' => [
                    'title' => 'Conditions and Loops',
                    'summary' => 'Control program flow with if/elif/else, for loops, while loops, range, break and continue.',
                    'explanation' => [
                        'Conditional statements choose which block runs based on a boolean expression. Use if for the first condition, elif for alternatives and else for the fallback branch.',
                        'Loops repeat work. A for loop iterates over an iterable, while a while loop repeats until its condition becomes false. Keep loop conditions easy to reason about to avoid accidental infinite loops.'
                    ],
                    'example' => "score = 78\nif score >= 80:\n    print(\"Excellent\")\nelif score >= 60:\n    print(\"Good progress\")\nelse:\n    print(\"Keep practicing\")\n\nfor n in range(1, 6):\n    print(n)",
                    'practice' => ['Print even numbers from 1 to 50.', 'Write a grade classifier using if/elif/else.', 'Use a while loop to count down from 5.'],
                    'takeaways' => ['Conditions select a path.', 'for is ideal for iterable data.', 'while is useful when repetition depends on a condition.'],
                ],
                'collections' => [
                    'title' => 'Lists, Tuples, Sets and Dictionaries',
                    'summary' => 'Choose the right Python collection and perform common add, read, update, loop and membership operations.',
                    'explanation' => [
                        'Lists are ordered and mutable, tuples are ordered and immutable, sets store unique values, and dictionaries map keys to values. Selecting the correct collection makes code simpler and clearer.',
                        'Collections can be nested and iterated. Dictionary iteration is especially useful for structured records, while sets are useful for uniqueness and fast membership tests.'
                    ],
                    'example' => "skills = [\"Python\", \"SQL\", \"Git\"]\nstudent = {\"name\": \"Aman\", \"skills\": skills}\nunique = {\"Python\", \"SQL\", \"Python\"}\nprint(student[\"name\"])\nprint(unique)",
                    'practice' => ['Create a list of five technologies and append one more.', 'Build a dictionary for a course with title, duration and mode.', 'Remove duplicate values from a list using a set.'],
                    'takeaways' => ['Use lists for ordered mutable sequences.', 'Use dictionaries for key-value records.', 'Use sets when uniqueness matters.'],
                ],
                'functions-modules' => [
                    'title' => 'Functions and Modules',
                    'summary' => 'Create reusable functions, pass arguments, return values and organize code across modules.',
                    'explanation' => [
                        'Functions package a task behind a name. Parameters receive input and return statements send a result back to the caller. Small focused functions are easier to test and reuse.',
                        'Modules let you split code across files. Import only what you need and avoid hidden global dependencies when possible.'
                    ],
                    'example' => "def calculate_total(price, quantity=1):\n    return price * quantity\n\nprint(calculate_total(750, 2))\nprint(calculate_total(500))",
                    'practice' => ['Write a function that returns whether a number is even.', 'Write a function that returns the largest of three numbers.', 'Create a second .py file and import one function from it.'],
                    'takeaways' => ['Functions reduce duplication.', 'Return values are easier to compose than printing inside every function.', 'Modules organize growing programs.'],
                ],
                'oop-files-errors' => [
                    'title' => 'OOP, Files and Exceptions',
                    'summary' => 'Use classes, objects, file handling and exception handling to build more realistic Python programs.',
                    'explanation' => [
                        'A class defines data and behavior that belong together. Instances are objects created from that class. OOP is useful when a problem naturally contains entities with state and actions.',
                        'File handling persists data beyond one program run. Exceptions let you handle expected failures such as missing files or invalid user input without crashing the whole program.'
                    ],
                    'example' => "class Course:\n    def __init__(self, name):\n        self.name = name\n\n    def label(self):\n        return f\"Course: {self.name}\"\n\ncourse = Course(\"Python\")\nprint(course.label())",
                    'practice' => ['Create a Student class with name and course fields.', 'Write three lines to a text file and read them back.', 'Catch ValueError when converting invalid text to an integer.'],
                    'takeaways' => ['Classes group related state and behavior.', 'Use with open(...) for safe file handling.', 'Catch specific exceptions rather than hiding every error.'],
                ],
            ],
        ],
        'java' => [
            'title' => 'Java Tutorial',
            'category' => 'Programming',
            'level' => 'Beginner to Intermediate',
            'description' => 'Learn Java fundamentals, OOP, arrays, collections, exceptions and the core workflow from source code to JVM execution.',
            'intro' => 'Java is a statically typed language widely used for backend systems, enterprise applications and many large codebases. This track builds a strong Core Java foundation before frameworks such as Spring Boot.',
            'prerequisites' => ['Basic computer usage', 'A JDK installed or access to a Java playground', 'No previous Java project required'],
            'outcomes' => ['Compile and run Java programs', 'Use variables, control flow and methods', 'Apply OOP principles', 'Work with arrays and collections', 'Handle exceptions cleanly'],
            'course_url' => 'java-course-jaipur.html',
            'chapters' => [
                'getting-started' => [
                    'title' => 'Java Getting Started',
                    'summary' => 'Understand JDK, source files, compilation, bytecode and JVM execution.',
                    'explanation' => ['Java source is normally written in .java files. The compiler creates .class bytecode, which is then executed by the Java runtime.', 'For a public class, the filename conventionally matches the class name. Begin by learning the class and main method structure before adding more abstractions.'],
                    'example' => "public class HelloJava {\n    public static void main(String[] args) {\n        System.out.println(\"Hello, Java\");\n    }\n}",
                    'practice' => ['Create HelloJava.java and run it.', 'Print your name and one arithmetic expression.', 'Change the class name and observe the filename requirement.'],
                    'takeaways' => ['Java has a compile-and-run workflow.', 'main is a standard application entry point.', 'The JDK provides the tools used for development.'],
                ],
                'variables-types' => [
                    'title' => 'Variables, Types and Operators',
                    'summary' => 'Use primitive types, strings, variables, constants and common operators.',
                    'explanation' => ['Java variables have declared types. Primitive types such as int, double and boolean store simple values, while String is a class used for text.', 'Use final when a reference should not be reassigned after initialization. Operators cover arithmetic, comparison, boolean logic and assignment.'],
                    'example' => "int age = 21;\ndouble fee = 6500.0;\nString course = \"Core Java\";\nboolean active = true;\nSystem.out.println(course + \" - \" + age);",
                    'practice' => ['Declare variables for name, age, fee and admission status.', 'Calculate simple interest using double.', 'Use comparison operators to check whether a number is positive.'],
                    'takeaways' => ['Java is statically typed.', 'Choose types that match the data.', 'String is an object, not a primitive.'],
                ],
                'conditions-loops' => [
                    'title' => 'Conditions and Loops',
                    'summary' => 'Control program flow with if, switch, for, while and enhanced for loops.',
                    'explanation' => ['Use if/else when branching depends on boolean expressions. switch is useful when one value is matched against multiple discrete cases.', 'for loops are common when the number of iterations is known; while loops fit condition-driven repetition. The enhanced for loop is concise for arrays and collections.'],
                    'example' => "int score = 72;\nif (score >= 60) {\n    System.out.println(\"Pass\");\n} else {\n    System.out.println(\"Practice more\");\n}\nfor (int i = 1; i <= 5; i++) {\n    System.out.println(i);\n}",
                    'practice' => ['Print 1 to 20 with a for loop.', 'Create a grade classifier.', 'Use switch for a simple day-number menu.'],
                    'takeaways' => ['Branching handles decisions.', 'Loops handle repetition.', 'Keep loop boundaries explicit and test edge cases.'],
                ],
                'methods-arrays' => [
                    'title' => 'Methods and Arrays',
                    'summary' => 'Create reusable methods and store fixed-size sequences in arrays.',
                    'explanation' => ['Methods define reusable behavior. A method signature includes its name and parameter types, while its declared return type describes the result.', 'Arrays hold a fixed number of elements of one declared type. Indexes begin at zero, so valid indexes range from zero through length minus one.'],
                    'example' => "static int add(int a, int b) {\n    return a + b;\n}\n\nint[] marks = {72, 81, 65};\nSystem.out.println(add(marks[0], marks[1]));",
                    'practice' => ['Write a max(int a, int b) method.', 'Find the average of an integer array.', 'Reverse an array without using a collection.'],
                    'takeaways' => ['Methods improve reuse.', 'Arrays are fixed-size.', 'Check array bounds carefully.'],
                ],
                'oop' => [
                    'title' => 'Classes and Object-Oriented Programming',
                    'summary' => 'Learn classes, objects, constructors, encapsulation, inheritance and polymorphism.',
                    'explanation' => ['A class describes the state and behavior of objects. Constructors initialize new instances, while access modifiers help control which state is visible outside the class.', 'Inheritance can reuse behavior, but composition is often clearer when one object simply contains or collaborates with another. Polymorphism lets code depend on common contracts rather than concrete implementation details.'],
                    'example' => "class Student {\n    private String name;\n\n    Student(String name) {\n        this.name = name;\n    }\n\n    String getName() {\n        return name;\n    }\n}",
                    'practice' => ['Create a Course class with private fields.', 'Add a constructor and getters.', 'Create a subclass and override one method.'],
                    'takeaways' => ['Encapsulation protects object state.', 'Constructors initialize objects.', 'Use inheritance when there is a real is-a relationship.'],
                ],
                'collections-exceptions' => [
                    'title' => 'Collections and Exceptions',
                    'summary' => 'Use List, Set, Map and exception handling for practical Java programs.',
                    'explanation' => ['The collections framework provides reusable data structures. List preserves ordered elements, Set focuses on uniqueness and Map stores key-value pairs.', 'Exceptions separate normal logic from error handling. Catch exceptions you can meaningfully handle and avoid swallowing errors without action.'],
                    'example' => "List<String> skills = new ArrayList<>();\nskills.add(\"Java\");\nskills.add(\"SQL\");\nfor (String skill : skills) {\n    System.out.println(skill);\n}",
                    'practice' => ['Store five course names in an ArrayList.', 'Use a HashSet to remove duplicate strings.', 'Catch NumberFormatException when parsing invalid input.'],
                    'takeaways' => ['Collections cover common data-structure needs.', 'Generics provide type safety.', 'Exception handling should be specific and purposeful.'],
                ],
            ],
        ],
        'javascript' => [
            'title' => 'JavaScript Tutorial',
            'category' => 'Web Development',
            'level' => 'Beginner to Intermediate',
            'description' => 'Learn modern JavaScript fundamentals, functions, arrays, objects, DOM basics, asynchronous code and modules.',
            'intro' => 'JavaScript powers browser interactivity and is also widely used on servers through runtimes such as Node.js. This tutorial focuses on the core language first so frameworks become easier to understand.',
            'prerequisites' => ['Basic HTML is helpful for browser chapters', 'A modern browser with developer tools', 'No framework knowledge required'],
            'outcomes' => ['Write modern JavaScript syntax', 'Use functions, arrays and objects', 'Manipulate basic DOM elements', 'Understand promises and async/await', 'Organize code with modules'],
            'course_url' => 'full-stack-development-course-jaipur.html',
            'chapters' => [
                'getting-started' => [
                    'title' => 'JavaScript Getting Started',
                    'summary' => 'Run JavaScript in the browser console and inside a web page.',
                    'explanation' => ['JavaScript can run directly in modern browsers. For quick experiments, use the developer console; for page behavior, use a script element or external .js file.', 'Keep JavaScript separate from presentation where practical. Browser scripts can read and change the DOM after the relevant elements exist.'],
                    'example' => "const message = \"Hello JavaScript\";\nconsole.log(message);",
                    'practice' => ['Open the browser console and print your name.', 'Create an HTML file and load an external app.js file.', 'Use console.log for three different value types.'],
                    'takeaways' => ['The browser includes a JavaScript engine.', 'Developer tools are essential for debugging.', 'External scripts keep code maintainable.'],
                ],
                'variables-types' => [
                    'title' => 'Variables, Types and Operators',
                    'summary' => 'Use const, let, primitive values, objects, comparison and logical operators.',
                    'explanation' => ['Prefer const for bindings that are not reassigned and let when reassignment is necessary. Avoid introducing var in new code unless you are specifically learning its legacy function-scoping behavior.', 'JavaScript uses dynamic types. Strict equality with === avoids many coercion surprises and is usually a clearer default than loose equality.'],
                    'example' => "const course = \"JavaScript\";\nlet lessons = 6;\nconst active = true;\nconsole.log(course, lessons, active);\nconsole.log(lessons === 6);",
                    'practice' => ['Create const values for name and city.', 'Use let for a counter that changes.', 'Compare 5 and \"5\" with both == and === and explain the result.'],
                    'takeaways' => ['const and let are block-scoped.', 'Types belong to values.', 'Prefer strict equality for predictable comparisons.'],
                ],
                'functions-control-flow' => [
                    'title' => 'Functions and Control Flow',
                    'summary' => 'Write functions, arrow functions, conditions and loops.',
                    'explanation' => ['Functions are first-class values in JavaScript, so they can be stored, passed and returned. Arrow functions are concise but have different this behavior than traditional function declarations.', 'Control flow uses if, switch and loops. Array iteration helpers such as map, filter and forEach are often clearer for collection transformations.'],
                    'example' => "const square = (n) => n * n;\nfor (let i = 1; i <= 4; i += 1) {\n  console.log(square(i));\n}",
                    'practice' => ['Write a function that returns the larger of two numbers.', 'Use filter to keep even numbers from an array.', 'Use map to create an array of squares.'],
                    'takeaways' => ['Functions are reusable values.', 'Arrow functions are useful but not identical to function declarations.', 'Choose loops or array methods based on clarity.'],
                ],
                'arrays-objects' => [
                    'title' => 'Arrays and Objects',
                    'summary' => 'Model collections and structured records with arrays and objects.',
                    'explanation' => ['Arrays are ordered lists and provide methods for adding, finding, filtering and transforming items. Objects group named properties and methods.', 'Destructuring and spread syntax are common modern patterns for reading and copying data without verbose indexing.'],
                    'example' => "const student = { name: \"Asha\", skills: [\"HTML\", \"CSS\", \"JS\"] };\nconst { name, skills } = student;\nconsole.log(name, skills.join(\", \"));",
                    'practice' => ['Create an array of course objects.', 'Filter courses by category.', 'Use destructuring to read two properties.'],
                    'takeaways' => ['Arrays fit ordered collections.', 'Objects fit named records.', 'Use array methods to express transformations clearly.'],
                ],
                'dom-events' => [
                    'title' => 'DOM and Events',
                    'summary' => 'Select elements, update page content and respond to user events.',
                    'explanation' => ['The DOM represents an HTML document as objects. querySelector and related APIs locate elements so JavaScript can read or update them.', 'Events such as click, input and submit let code respond to user actions. Prefer addEventListener so behavior stays composable.'],
                    'example' => "const button = document.querySelector(\"#start\");\nbutton.addEventListener(\"click\", () => {\n  document.querySelector(\"#status\").textContent = \"Started\";\n});",
                    'practice' => ['Create a button that changes a heading.', 'Read text from an input field on submit.', 'Toggle a CSS class on click.'],
                    'takeaways' => ['The DOM is the browser representation of the document.', 'Events connect user actions to behavior.', 'Keep selectors and event logic easy to trace.'],
                ],
                'async-modules' => [
                    'title' => 'Promises, async/await and Modules',
                    'summary' => 'Handle asynchronous operations and split modern JavaScript into modules.',
                    'explanation' => ['Promises represent a value that may be available later. async/await provides a readable syntax for working with promise-based APIs while preserving asynchronous behavior.', 'ES modules use export and import to split code into explicit units. This encourages smaller files and clearer dependencies.'],
                    'example' => "async function loadData() {\n  const response = await fetch(\"/api/example\");\n  if (!response.ok) throw new Error(\"Request failed\");\n  return response.json();\n}",
                    'practice' => ['Wrap a timeout in a Promise.', 'Use try/catch around an awaited operation.', 'Export one function from a module and import it elsewhere.'],
                    'takeaways' => ['Promises model future results.', 'async/await improves readability but does not make operations synchronous.', 'Modules make dependencies explicit.'],
                ],
            ],
        ],
        'sql' => [
            'title' => 'SQL Tutorial',
            'category' => 'Data & Databases',
            'level' => 'Beginner to Intermediate',
            'description' => 'Learn relational database concepts and practical SQL: tables, CRUD, filtering, joins, aggregation, subqueries, transactions and window functions.',
            'intro' => 'SQL is the language used to define, query and modify data in relational databases. The core concepts transfer across systems, although individual database products may add their own syntax and features.',
            'prerequisites' => ['Basic computer usage', 'A relational database such as PostgreSQL, MySQL or SQLite for practice', 'No programming language required'],
            'outcomes' => ['Create and query relational tables', 'Filter and sort data', 'Join related tables', 'Aggregate and summarize records', 'Understand transactions and analytical queries'],
            'course_url' => 'sql-course-jaipur.html',
            'chapters' => [
                'relational-basics' => [
                    'title' => 'Relational Database Basics',
                    'summary' => 'Understand tables, rows, columns, primary keys, foreign keys and relationships.',
                    'explanation' => ['A relational database stores data in tables. Each row represents a record, columns describe attributes, and keys help identify or connect records.', 'Good table design avoids repeating the same facts unnecessarily. Primary keys uniquely identify rows, while foreign keys express relationships between tables.'],
                    'example' => "CREATE TABLE students (\n  student_id INTEGER PRIMARY KEY,\n  name VARCHAR(100) NOT NULL,\n  city VARCHAR(80)\n);",
                    'practice' => ['Design a courses table with a primary key.', 'Design an enrollments table that connects students and courses.', 'Identify which columns should be NOT NULL.'],
                    'takeaways' => ['Tables model entities or relationships.', 'Keys protect identity and relationships.', 'Schema design affects query clarity and data quality.'],
                ],
                'select-filter-sort' => [
                    'title' => 'SELECT, WHERE and ORDER BY',
                    'summary' => 'Read data with projection, filtering, sorting and limiting.',
                    'explanation' => ['SELECT chooses columns or expressions to return. WHERE filters rows before they reach later query stages, and ORDER BY controls result ordering.', 'Avoid SELECT * in production-facing queries when you only need a few columns because explicit selections communicate intent and reduce unnecessary data transfer.'],
                    'example' => "SELECT name, city\nFROM students\nWHERE city = 'Jaipur'\nORDER BY name ASC;",
                    'practice' => ['Select only two columns from a table.', 'Filter rows using comparison and AND/OR.', 'Return the five highest-priced courses.'],
                    'takeaways' => ['SELECT chooses output columns.', 'WHERE filters rows.', 'ORDER BY makes result ordering explicit.'],
                ],
                'insert-update-delete' => [
                    'title' => 'INSERT, UPDATE and DELETE',
                    'summary' => 'Create, modify and remove rows safely.',
                    'explanation' => ['INSERT adds rows, UPDATE changes existing rows and DELETE removes rows. Always verify your WHERE condition before a destructive update or delete.', 'Transactions are valuable when several changes must succeed or fail together. For important data, preview affected rows with a SELECT before running a broad modification.'],
                    'example' => "INSERT INTO students (student_id, name, city)\nVALUES (1, 'Riya', 'Jaipur');\n\nUPDATE students\nSET city = 'Ajmer'\nWHERE student_id = 1;",
                    'practice' => ['Insert three sample records.', 'Update one record using its primary key.', 'Write a delete statement that removes only one known test row.'],
                    'takeaways' => ['DML changes stored data.', 'A missing WHERE can affect every row.', 'Use transactions for grouped changes.'],
                ],
                'joins' => [
                    'title' => 'SQL Joins',
                    'summary' => 'Combine related tables with INNER JOIN and OUTER JOIN patterns.',
                    'explanation' => ['Joins combine rows based on a relationship condition. INNER JOIN keeps matching rows, while LEFT JOIN keeps every row from the left table and fills unmatched right-side columns with nulls.', 'Use explicit join conditions and qualify ambiguous column names with table aliases. This makes multi-table queries easier to review.'],
                    'example' => "SELECT s.name, c.title\nFROM enrollments e\nJOIN students s ON s.student_id = e.student_id\nJOIN courses c ON c.course_id = e.course_id;",
                    'practice' => ['Join students to enrollments.', 'Add the courses table to return course titles.', 'Use LEFT JOIN to show students even if they have no enrollment.'],
                    'takeaways' => ['Joins connect normalized data.', 'INNER and LEFT JOIN answer different questions.', 'Aliases keep multi-table SQL readable.'],
                ],
                'aggregation' => [
                    'title' => 'GROUP BY and Aggregate Functions',
                    'summary' => 'Summarize data with COUNT, SUM, AVG, MIN, MAX, GROUP BY and HAVING.',
                    'explanation' => ['Aggregate functions collapse many rows into summary values. GROUP BY creates one aggregate result per group, while HAVING filters those groups after aggregation.', 'Be precise about the level of detail you want. Adding extra grouping columns changes the meaning of the result.'],
                    'example' => "SELECT city, COUNT(*) AS student_count\nFROM students\nGROUP BY city\nHAVING COUNT(*) >= 2\nORDER BY student_count DESC;",
                    'practice' => ['Count students by city.', 'Find average fee by course category.', 'Use HAVING to keep only groups above a threshold.'],
                    'takeaways' => ['Aggregates summarize rows.', 'GROUP BY defines the grouping grain.', 'HAVING filters grouped results.'],
                ],
                'advanced-sql' => [
                    'title' => 'Subqueries, Transactions and Window Functions',
                    'summary' => 'Move beyond basic CRUD with reusable query patterns and analytical SQL.',
                    'explanation' => ['Subqueries can provide scalar values, sets or derived tables. Common table expressions can improve readability when a query has several logical steps.', 'Transactions group changes under ACID guarantees provided by the database. Window functions compute values across related rows without collapsing the result the way GROUP BY does.'],
                    'example' => "SELECT name, city,\n       ROW_NUMBER() OVER (PARTITION BY city ORDER BY name) AS city_row\nFROM students;",
                    'practice' => ['Write a subquery that finds rows above an average value.', 'Use BEGIN/ROLLBACK while testing an update.', 'Use ROW_NUMBER or RANK over a partition.'],
                    'takeaways' => ['Subqueries and CTEs structure complex logic.', 'Transactions protect multi-step changes.', 'Window functions enable analytical calculations while retaining detail rows.'],
                ],
            ],
        ],
        'linux' => [
            'title' => 'Linux Tutorial',
            'category' => 'Cloud & DevOps',
            'level' => 'Beginner to Intermediate',
            'description' => 'Learn Linux command-line fundamentals, files, permissions, processes, networking, package management, shell scripting and troubleshooting.',
            'intro' => 'Linux skills are foundational for servers, cloud platforms and DevOps. This track emphasizes command-line confidence, safe system navigation and practical troubleshooting rather than memorizing isolated commands.',
            'prerequisites' => ['Access to a Linux machine, VM, WSL or cloud shell', 'Basic computer usage', 'Administrator access is helpful for package-management practice'],
            'outcomes' => ['Navigate the filesystem', 'Manage files and permissions', 'Inspect processes and services', 'Use networking diagnostics', 'Write simple shell scripts'],
            'course_url' => 'linux-course-jaipur.html',
            'chapters' => [
                'shell-filesystem' => [
                    'title' => 'Shell and Filesystem Basics',
                    'summary' => 'Learn paths, pwd, ls, cd, mkdir, cp, mv, rm and safe filesystem navigation.',
                    'explanation' => ['Linux organizes files in a single directory tree rooted at /. Absolute paths start from /, while relative paths are interpreted from the current working directory.', 'Learn destructive commands carefully. Before rm or recursive operations, verify the current path and target with pwd and ls.'],
                    'example' => "pwd\nls -la\nmkdir -p ~/practice/linux\ncd ~/practice/linux\ntouch notes.txt\nls -l",
                    'practice' => ['Create a nested practice directory.', 'Copy and rename a text file.', 'Use ls options to display hidden files and details.'],
                    'takeaways' => ['Paths can be absolute or relative.', 'The shell operates on the current working directory.', 'Double-check destructive commands.'],
                ],
                'text-pipes' => [
                    'title' => 'Text Processing and Pipes',
                    'summary' => 'Use cat, less, head, tail, grep, cut, sort, uniq and pipelines.',
                    'explanation' => ['Unix-style tools are designed to do focused work and compose through pipes. A pipe sends standard output from one command to standard input of the next.', 'Text tools become much more powerful when combined. Start with readable pipelines and then optimize only when needed.'],
                    'example' => "printf \"java\\npython\\njava\\nsql\\n\" > skills.txt\nsort skills.txt | uniq -c\ngrep -i \"python\" skills.txt",
                    'practice' => ['Count duplicate lines in a file.', 'Search recursively for a word with grep.', 'Use head and tail on a log file.'],
                    'takeaways' => ['Pipes compose commands.', 'grep searches text.', 'sort and uniq are useful together for frequency work.'],
                ],
                'permissions-users' => [
                    'title' => 'Users, Groups and Permissions',
                    'summary' => 'Understand ownership, rwx permissions, chmod, chown and least-privilege habits.',
                    'explanation' => ['Linux permissions are defined for owner, group and others. Read, write and execute bits have different meanings depending on whether the target is a regular file or directory.', 'Avoid using broad permissions such as 777 as a default fix. Change only the permission or ownership needed for the task.'],
                    'example' => "ls -l notes.txt\nchmod u+rw,go-rwx notes.txt\nls -l notes.txt",
                    'practice' => ['Create a private file readable only by its owner.', 'Inspect your current groups.', 'Explain the difference between execute permission on a file and directory.'],
                    'takeaways' => ['Permissions follow owner/group/others scopes.', 'Least privilege is safer than broad access.', 'Ownership and mode are separate controls.'],
                ],
                'processes-services' => [
                    'title' => 'Processes and Services',
                    'summary' => 'Inspect running processes, signals, jobs, resource usage and service state.',
                    'explanation' => ['A process is a running program with an identifier. ps and top-like tools help inspect processes, while signals request actions such as termination or reload.', 'On many modern distributions, systemd manages long-running services. Check status and logs before restarting a failing service so you preserve useful diagnostic evidence.'],
                    'example' => "ps aux | head\nps -ef | grep ssh\n# On systemd-based distributions:\nsystemctl status ssh",
                    'practice' => ['Find your shell process ID.', 'Start a long-running command in the background and inspect it with jobs.', 'Check the status of an installed service.'],
                    'takeaways' => ['Processes have IDs and state.', 'Signals control processes.', 'Inspect service status and logs before changing things.'],
                ],
                'networking-packages' => [
                    'title' => 'Networking and Package Management',
                    'summary' => 'Use ip, ping, curl, ss and distribution package managers for practical system work.',
                    'explanation' => ['Networking diagnostics should move from local configuration to name resolution, reachability, ports and application responses. Tools such as ip, ss and curl each answer different layers of the problem.', 'Package commands vary by distribution. Debian-family systems commonly use apt, while Red Hat-family systems commonly use dnf.'],
                    'example' => "ip addr\nip route\nss -tulpn\ncurl -I https://example.com",
                    'practice' => ['Find your default route.', 'List listening TCP ports.', 'Fetch response headers from a website with curl.'],
                    'takeaways' => ['Use layered troubleshooting.', 'Listening ports do not guarantee the application is healthy.', 'Package managers depend on the distribution.'],
                ],
                'shell-scripting' => [
                    'title' => 'Bash Scripting and Troubleshooting',
                    'summary' => 'Automate repeatable tasks with variables, conditions, loops, exit codes and defensive scripting.',
                    'explanation' => ['Shell scripts are ideal for connecting command-line tools and automating system tasks. Quote variables unless you intentionally want word splitting or glob expansion.', 'Exit codes communicate success or failure. For operational scripts, validate inputs, handle errors deliberately and log enough context to diagnose failures.'],
                    'example' => "#!/usr/bin/env bash\nset -euo pipefail\nname=\"Mango Learner\"\nfor item in linux git docker; do\n  printf '%s: %s\\n' \"$name\" \"$item\"\ndone",
                    'practice' => ['Write a script that creates a dated backup directory.', 'Validate that one command-line argument is provided.', 'Loop over .log files and print their sizes.'],
                    'takeaways' => ['Quote variable expansions.', 'Check inputs and exit codes.', 'Keep automation repeatable and observable.'],
                ],
            ],
        ],
    ];
}

function mango_tutorial_planned_tracks(): array
{
    return [
        'C Programming','C++ Programming','C#','PHP','Core Java','Advanced Java','JDBC','Servlets & JSP','Spring Framework','Spring Boot','Spring MVC','Hibernate','JPA','Java Microservices','Java REST API','Java Design Patterns','Java Multithreading','Java Testing','React.js','Angular','Node.js','Next.js','MERN Stack','MEAN Stack','Java Full Stack','Python Full Stack','ASP.NET Full Stack','Data Analytics','Business Analytics','Data Science','Machine Learning','Artificial Intelligence','Generative AI','Power BI','Advanced Excel','AWS','Microsoft Azure','Google Cloud','DevOps','Docker','Kubernetes','Ethical Hacking','CEH','SOC Analyst','Penetration Testing','Network Security','Manual Testing','Automation Testing','Selenium','API Testing','Playwright','SEO','Google Ads','Social Media Marketing','Content Marketing','Email Marketing','UI/UX Design','Figma','Graphic Design','Android','Kotlin','Flutter','React Native','iOS','CCNA','CCNP','Windows Server','AI Productivity Tools'
    ];
}
