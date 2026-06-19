<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Seo;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed Admin User
        User::create([
            'name' => 'Admin DigiCoders',
            'email' => 'admin@digicoders.com',
            'password' => Hash::make('Password123!'),
        ]);

        // 2. Seed Settings
        $settings = [
            'site_name' => 'DigiCoders Technologies Pvt. Ltd.',
            'site_title' => 'DigiCoders Technologies | Best IT Training & Software Development Company in Gorakhpur',
            'contact_phone' => '9801017529',
            'contact_email' => 'digicoderstech@gmail.com',
            'contact_address' => 'INSIDE MAIN BUILDING, BUDDHA INSTITUTE OF TECHNOLOGY, CL-1, SECTOR-7, GIDA, GORAKHPUR, UP, 273209',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d920.1529853579708!2d83.27073567806144!3d26.739402731532582!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399147380139859b%3A0x708768ccb2c065c9!2sBuddha%20Institute%20of%20Technology%20%2C%20Gorakhpur!5e1!3m2!1sen!2sin!4v1781422836320!5m2!1sen!2sin',
            'facebook_url' => 'https://www.facebook.com/DigiCodersTech/',
            'instagram_url' => 'https://www.instagram.com/digicoderstech',
            'linkedin_url' => 'https://www.linkedin.com/company/digicoders',
            'youtube_url' => 'https://www.youtube.com/@digicoders',
            'whatsapp_url' => 'https://www.whatsapp.com/channel/0029VaDTIxW5EjxzOyubYT3l',
        ];

        foreach ($settings as $key => $value) {
            Setting::create(['key' => $key, 'value' => $value]);
        }

        // 3. Seed SEOs for Pages
        Seo::create([
            'page_name' => 'home',
            'meta_title' => 'Best IT Training Institute & Software Development Company in Gorakhpur',
            'meta_description' => 'DigiCoders Technologies is the leading IT Training Institute in Gorakhpur offering 100% practical industrial training & placements in PHP, Laravel, MERN, Python, Java, Flutter & AI.',
            'meta_keywords' => 'Best IT Training Institute in Gorakhpur, Software Development Company Gorakhpur, Industrial Training Gorakhpur, PHP Training Gorakhpur, Laravel Training Gorakhpur, MERN Stack Training Gorakhpur, Python Training Gorakhpur, Java Training Gorakhpur, Flutter Training Gorakhpur, AI Training Gorakhpur, Internship in Gorakhpur',
            'og_image' => 'assets/images/seo/home-og.webp',
        ]);

        Seo::create([
            'page_name' => 'courses',
            'meta_title' => 'Industry Ready Professional IT Courses in Gorakhpur - DigiCoders',
            'meta_description' => 'Browse our premium training programs in Software Development, Mobile Apps, and AI. Get certified with live projects and 100% placement assistance.',
            'meta_keywords' => 'IT Courses Gorakhpur, Web development training, coding classes Gorakhpur, programming institute Gorakhpur',
            'og_image' => 'assets/images/seo/courses-og.webp',
        ]);

        Seo::create([
            'page_name' => 'blogs',
            'meta_title' => 'DigiCoders Tech Blog - Latest Trends in IT & Coding Career Advice',
            'meta_description' => 'Read our latest insights, tutorials, and career tips in web development, python programming, MERN stack, and artificial intelligence.',
            'meta_keywords' => 'IT blog Gorakhpur, learn programming tips, web development tutorials, tech insights',
            'og_image' => 'assets/images/seo/blogs-og.webp',
        ]);

        Seo::create([
            'page_name' => 'contact',
            'meta_title' => 'Contact DigiCoders Technologies - Gorakhpur office',
            'meta_description' => 'Get in touch with DigiCoders Technologies for web development services, project internships, or admission inquiries in Gorakhpur.',
            'meta_keywords' => 'contact IT company Gorakhpur, DigiCoders contact number, IT training admission',
            'og_image' => 'assets/images/seo/contact-og.webp',
        ]);

        // 4. Seed Courses
        $coursesList = [
            [
                'name' => 'PHP Web Development Training',
                'slug' => 'php-training-gorakhpur',
                'duration' => '2 Months',
                'eligibility' => 'BCA, MCA, B.Tech, Diploma, CS/IT Students',
                'fees' => 6500,
                'is_popular' => false,
                'image' => 'assets/images/courses/php.webp',
                'syllabus' => [
                    ['title' => 'Core PHP Basics', 'topics' => ['HTML5 & CSS3 Essentials', 'Bootstrap 5 Responsive Grid', 'PHP Basics, Variables & Operators', 'Conditional Statements & Loops']],
                    ['title' => 'Advanced PHP Programming', 'topics' => ['PHP Arrays & Functions', 'Form Handling & Validation', 'File Uploading & Session Management', 'Cookie Handling']],
                    ['title' => 'MySQL Database Management', 'topics' => ['MySQL Introduction & Setup', 'SQL Queries (SELECT, INSERT, UPDATE, DELETE)', 'Database Joins & Subqueries', 'Database Connectivity in PHP (PDO)']],
                    ['title' => 'Security & OOP PHP', 'topics' => ['Object-Oriented Programming (Classes, Objects, Inheritance)', 'SQL Injection & XSS Protection', 'Dynamic Website Administration Panel']],
                ],
                'projects' => [
                    'Dynamic Blog & News Portal',
                    'College Management System with Admin Panel',
                ],
                'certification' => 'ISO 9001:2015 certified training completion certificate with verification URL.',
                'placement' => '100% placement support, resume optimization, and mock interview drills.',
                'faq' => [
                    ['question' => 'Are there any prerequisites for this PHP course?', 'answer' => 'Basic computer familiarity. Logic and coding concepts will be taught from scratch.'],
                    ['question' => 'Do I get to work on a real project?', 'answer' => 'Yes, you will develop a complete Dynamic Portal with an Admin Panel from scratch and host it live.'],
                ],
                'reviews' => [
                    ['student' => 'Amit Verma', 'rating' => 5, 'text' => 'The best training institute for learning web development. Highly recommend!'],
                    ['student' => 'Sneha Shahi', 'rating' => 5, 'text' => 'Loved the hands-on database sessions. The mentors explained PDO queries clearly.'],
                ],
            ],
            [
                'name' => 'Laravel Framework Training',
                'slug' => 'laravel-training-gorakhpur',
                'duration' => '2 Months',
                'eligibility' => 'Prior basic knowledge of PHP & OOP',
                'fees' => 7500,
                'is_popular' => true,
                'image' => 'assets/images/courses/laravel.webp',
                'syllabus' => [
                    ['title' => 'Laravel Fundamentals', 'topics' => ['Composer & Project Installation', 'MVC Architecture Architecture', 'Routing, Views & Controllers', 'Blade Template Engine']],
                    ['title' => 'Database Operations', 'topics' => ['Migrations & Schema Builder', 'Eloquent ORM Model Relationships', 'Query Builder & Database Seeding', 'Faker Library Integration']],
                    ['title' => 'Advanced Concepts', 'topics' => ['Form Validation & Middleware', 'Authentication & Authorization Guard', 'Session Handling & Email System', 'File Uploads & Storage System']],
                    ['title' => 'API & Deployment', 'topics' => ['RESTful API Resources & Authentication', 'Vite Asset Compilation', 'GitHub Version Control', 'Hosting on Shared/Cloud Server']],
                ],
                'projects' => [
                    'Multi-vendor E-Commerce Platform',
                    'Real-time Service Desk System',
                ],
                'certification' => 'Professional Laravel Developer Certificate including verification of live capstone project.',
                'placement' => 'Placement assistance with regional IT firms and remote startup networks.',
                'faq' => [
                    ['question' => 'Is PHP knowledge necessary before starting Laravel?', 'answer' => 'Yes, a fundamental understanding of Object-Oriented PHP is highly recommended.'],
                    ['question' => 'What type of deployment is covered?', 'answer' => 'We cover both standard cPanel deployments and modern cloud hostings.'],
                ],
                'reviews' => [
                    ['student' => 'Rahul Vishwakarma', 'rating' => 5, 'text' => 'Very structured course. The model relationships part solved all my database design doubts.'],
                    ['student' => 'Kajal Pandey', 'rating' => 5, 'text' => 'Outstanding training. The instructor helped me host my portfolio Laravel project online.'],
                ],
            ],
            [
                'name' => 'MERN Stack Web Development',
                'slug' => 'mern-stack-training-gorakhpur',
                'duration' => '3 Months',
                'eligibility' => 'B.Tech, BCA, MCA, BSC-IT, Tech Seekers',
                'fees' => 9500,
                'is_popular' => true,
                'image' => 'assets/images/courses/mern.webp',
                'syllabus' => [
                    ['title' => 'Modern JavaScript (ES6+)', 'topics' => ['Variables (let/const) & Arrow Functions', 'Promises & Async/Await', 'Array Methods (map, filter, reduce)', 'Destructuring & Modules']],
                    ['title' => 'React.js Frontend Framework', 'topics' => ['Components, Props & State', 'React Hooks (useState, useEffect, useContext)', 'React Router DOM Navigation', 'Redux Toolkit State Management']],
                    ['title' => 'Node.js & Express Backend', 'topics' => ['Node.js Runtime & NPM Packages', 'Express Server & Routing', 'Rest API Design & JSON Middleware', 'JWT Token Authentication']],
                    ['title' => 'MongoDB Database & Integration', 'topics' => ['NoSQL Core Principles & Atlas Setup', 'Mongoose Schema Validation', 'CRUD Operations & Aggregate Queries', 'Full-stack Hosting (Render/Vercel)']],
                ],
                'projects' => [
                    'Collaborative Task Board App',
                    'Digital Marketplace with Payment Gateway',
                ],
                'certification' => 'MERN Stack Engineer Certification and GitHub Capstone Portfolio validation.',
                'placement' => 'Priority referral to Tier-1 software engineering roles and remote development teams.',
                'faq' => [
                    ['question' => 'What software do I need installed?', 'answer' => 'Just Node.js and VS Code. We guide you through the initial workspace setups.'],
                    ['question' => 'Is this course suitable for beginners?', 'answer' => 'Yes, we start from absolute JavaScript fundamentals before jumping into React and Node.js.'],
                ],
                'reviews' => [
                    ['student' => 'Saurabh Srivastava', 'rating' => 5, 'text' => 'MERN Stack is highly demanded. The training here was completely practical with live coding.'],
                    ['student' => 'Priya Gupta', 'rating' => 5, 'text' => 'Learned React state management and JWT authentication which helped me clear interviews easily.'],
                ],
            ],
            [
                'name' => 'Python & Django Industrial Training',
                'slug' => 'python-training-gorakhpur',
                'duration' => '2 Months',
                'eligibility' => 'Basic knowledge of programming logic',
                'fees' => 7000,
                'is_popular' => false,
                'image' => 'assets/images/courses/python.webp',
                'syllabus' => [
                    ['title' => 'Python Essentials', 'topics' => ['Syntax, Data Types & Variables', 'List, Tuple, Set & Dictionary', 'Control Flows, Functions & Modules', 'Object-Oriented Python']],
                    ['title' => 'Database & Web Basics', 'topics' => ['File Input/Output', 'SQLite & MySQL Connection', 'HTML/CSS integration', 'CGI and WSGI basics']],
                    ['title' => 'Django Web Framework', 'topics' => ['MVT (Model-View-Template) Architecture', 'Django Admin Dashboard & Models', 'URL Routing & Form Handling', 'Django Rest Framework APIs']],
                    ['title' => 'Hosting & Testing', 'topics' => ['Unit Testing in Python', 'Deployment to PythonAnywhere', 'Git & Environment Variables']],
                ],
                'projects' => [
                    'AI Chatbot Agent',
                    'Interactive School Portal',
                ],
                'certification' => 'Python Development Certification with verification.',
                'placement' => 'Mentorship and placement support for entry-level Python developer roles.',
                'faq' => [
                    ['question' => 'Can I choose Data Science topics in this course?', 'answer' => 'Yes, we customize elective modules for Data Science basics (Pandas, NumPy) upon student request.'],
                ],
                'reviews' => [
                    ['student' => 'Vikas Kushwaha', 'rating' => 5, 'text' => 'Very detailed explanation of OOPs. The Django projects were high quality.'],
                ],
            ],
            [
                'name' => 'Java Enterprise Architecture (J2EE)',
                'slug' => 'java-training-gorakhpur',
                'duration' => '3 Months',
                'eligibility' => 'Students or professionals seeking core backend careers',
                'fees' => 8500,
                'is_popular' => false,
                'image' => 'assets/images/courses/java.webp',
                'syllabus' => [
                    ['title' => 'Core Java', 'topics' => ['JDK, JRE & JVM Architecture', 'Classes, Objects, Inheritance', 'Polymorphism & Abstraction', 'Interfaces & Packages']],
                    ['title' => 'Advanced Concepts', 'topics' => ['Exception Handling & Multithreading', 'Java Collections Framework', 'File I/O Streams', 'JDBC Database Connections']],
                    ['title' => 'Servlets & JSP', 'topics' => ['Servlet Lifecycle & Filters', 'Session Tracking & Request Dispatcher', 'JSP Tag Libraries & MVC Patterns', 'Tomcat Server Deployments']],
                    ['title' => 'Spring Boot Basics', 'topics' => ['Dependency Injection & IoC', 'Spring MVC & REST APIs', 'Spring Data JPA & Hibernate', 'Maven Build Tool']],
                ],
                'projects' => [
                    'Online Banking Application',
                    'Corporate HR Portal',
                ],
                'certification' => 'Java Enterprise Application Developer Certificate.',
                'placement' => 'Referrals to MNCs, enterprise consultants, and major banking software providers.',
                'faq' => [
                    ['question' => 'Is Spring Boot included?', 'answer' => 'Yes, our 3-month module covers Hibernate and Spring Boot API development.'],
                ],
                'reviews' => [
                    ['student' => 'Anjali Maurya', 'rating' => 5, 'text' => 'A wonderful training center. Learned complex multithreading concepts with ease.'],
                ],
            ],
            [
                'name' => 'Flutter Hybrid Mobile App Development',
                'slug' => 'flutter-training-gorakhpur',
                'duration' => '2 Months',
                'eligibility' => 'B.Tech, BCA, MCA, Diploma students',
                'fees' => 8000,
                'is_popular' => false,
                'image' => 'assets/images/courses/flutter.webp',
                'syllabus' => [
                    ['title' => 'Dart Programming Language', 'topics' => ['Dart Syntax & Core Libraries', 'Functions, Classes & Interfaces', 'Asynchronous Dart (Future/Stream)', 'Null Safety Features']],
                    ['title' => 'Flutter Framework Basics', 'topics' => ['Flutter SDK & Android Studio Setup', 'Stateless vs Stateful Widgets', 'Material Design Layouts', 'Asset & Font Management']],
                    ['title' => 'State & API Integration', 'topics' => ['Provider/Bloc State Management', 'HTTP Requests & JSON Parsing', 'SharedPreferences Local Cache', 'Firebase Authentication & Database']],
                    ['title' => 'Publishing & Release', 'topics' => ['Android Build & APK Signing', 'iOS Build setup', 'Play Store Publishing Guidelines']],
                ],
                'projects' => [
                    'Real-time Chat Application',
                    'Food Delivery Application',
                ],
                'certification' => 'Mobile Application Engineer Certification.',
                'placement' => 'Placement support in app development agencies and product startups.',
                'faq' => [
                    ['question' => 'Do I need a Mac to learn Flutter?', 'answer' => 'No, a Windows PC is sufficient for learning and developing Android apps. Mac is only required for iOS deployment.'],
                ],
                'reviews' => [
                    ['student' => 'Rohan Singh', 'rating' => 5, 'text' => 'Best Flutter institute. Developed 2 solid apps and launched them on the Play Store.'],
                ],
            ],
            [
                'name' => 'Artificial Intelligence & Machine Learning',
                'slug' => 'ai-training-gorakhpur',
                'duration' => '3 Months',
                'eligibility' => 'Strong analytical mindset, basic programming knowledge',
                'fees' => 12000,
                'is_popular' => true,
                'image' => 'assets/images/courses/ai.webp',
                'syllabus' => [
                    ['title' => 'Math & Python Basics', 'topics' => ['Linear Algebra & Calculus Foundations', 'Statistics & Probability', 'NumPy Arrays & Pandas DataFrames', 'Matplotlib Data Visualization']],
                    ['title' => 'Supervised Machine Learning', 'topics' => ['Linear & Logistic Regression', 'Decision Trees & Random Forests', 'Support Vector Machines (SVM)', 'Model Evaluation Metrics (Scikit-Learn)']],
                    ['title' => 'Deep Learning & Neural Networks', 'topics' => ['Perceptrons & Feedforward Networks', 'TensorFlow & Keras API Basics', 'Convolutional Neural Networks (CNNs)', 'Recurrent Neural Networks (RNN/LSTM)']],
                    ['title' => 'Generative AI & LLMs', 'topics' => ['Introduction to Transformers', 'Hugging Face Hub & LLM Tuning', 'OpenAI API Integrations', 'Streamlit App Deployments']],
                ],
                'projects' => [
                    'Image Recognition & Classification System',
                    'Semantic Search Engine & Content Summarizer',
                ],
                'certification' => 'AI/ML Specialist Certification with Capstone Project endorsement.',
                'placement' => 'Direct referral opportunities to research labs, analytics teams, and tech startups.',
                'faq' => [
                    ['question' => 'Is advanced mathematics a must?', 'answer' => 'Basic knowledge of matrix multiplication and calculus is helpful, but we cover the core concepts in the class.'],
                ],
                'reviews' => [
                    ['student' => 'Deepak Yadav', 'rating' => 5, 'text' => 'Outstanding course. Building a model and deploying it as a web app using Streamlit was a game changer for my resume.'],
                ],
            ],
            [
                'name' => 'Advanced Digital Marketing Course',
                'slug' => 'digital-marketing-training-gorakhpur',
                'duration' => '2 Months',
                'eligibility' => 'Any Graduate / Undergraduate / Entrepreneur',
                'fees' => 5000,
                'is_popular' => false,
                'image' => 'assets/images/courses/digital-marketing.webp',
                'syllabus' => [
                    ['title' => 'SEO (Search Engine Optimization)', 'topics' => ['On-Page SEO (Meta tags, Headings, Interlinks)', 'Off-Page SEO (Link building, guest posts)', 'Technical SEO (Page speed, sitemaps, robots)', 'Google Search Console & Analytics Setup']],
                    ['title' => 'Social Media Marketing', 'topics' => ['Facebook Page & Ads Manager', 'Instagram Growth & Reel Strategy', 'LinkedIn Professional Networking', 'Canva Graphics Design Foundations']],
                    ['title' => 'Search Engine Marketing', 'topics' => ['Google Ads (Search, Display, Video)', 'Keyword Planner & Bid Strategies', 'Remarketing campaigns', 'Conversion API tracking']],
                    ['title' => 'Email & Content Marketing', 'topics' => ['Lead Generation funnels', 'Mailchimp campaign setups', 'Blogging for Organic Traffic', 'Affiliate Marketing overview']],
                ],
                'projects' => [
                    'Live Blogging & SEO Campaign',
                    'Complete E-Commerce Ads Strategy',
                ],
                'certification' => 'Certified Digital Marketing Professional with Google Ads Certifications support.',
                'placement' => 'Job opportunities in corporate marketing departments and local advertising agencies.',
                'faq' => [
                    ['question' => 'Are Google certification exams covered?', 'answer' => 'Yes, we prepare you for Google Ads and Google Analytics certifications, which are free to take.'],
                ],
                'reviews' => [
                    ['student' => 'Neha Mishra', 'rating' => 5, 'text' => 'The digital marketing course is highly interactive. The Google Ads practicals were top-notch.'],
                ],
            ],
        ];

        foreach ($coursesList as $courseData) {
            Course::create($courseData);
        }

        // 5. Seed Blogs
        Blog::create([
            'title' => 'How to Start a Career in Web Development in 2026',
            'slug' => 'how-to-start-web-development-career',
            'category' => 'Career Advice',
            'featured_image' => 'assets/images/blogs/web-dev-career.webp',
            'content' => 'The tech landscape is shifting rapidly in 2026. Developers who understand both frontend and backend concepts are highly favored. Learn how to map your path from HTML/CSS, through JavaScript frameworks like React, to server systems like Node.js and PHP. Focus on building real-world projects and maintaining a clean GitHub repository to show proof of work.',
            'seo_title' => 'How to Start a Web Development Career in 2026 | DigiCoders',
            'seo_description' => 'A comprehensive guide on starting your web development career in 2026. Discover key skills, frameworks, and job-hunting tips.',
            'seo_keywords' => 'web development career, learn coding, full stack developer path, get hired in tech',
            'status' => 'published',
        ]);

        Blog::create([
            'title' => 'Why Laravel Remains the Go-To PHP Framework in 2026',
            'slug' => 'why-laravel-remains-top-php-framework',
            'category' => 'Web Development',
            'featured_image' => 'assets/images/blogs/laravel-top.webp',
            'content' => 'With the release of Laravel 12, PHP has solidified its space in modern web architecture. Offering streamlined routing, database migrations, advanced queue managers, and built-in assets compilation via Vite, Laravel provides a complete ecosystem for building enterprise products. In this article, we explain why startups and corporations choose Laravel for fast, scalable application development.',
            'seo_title' => 'Why Laravel 12 is the Best PHP Framework for startups in 2026',
            'seo_description' => 'Explore the new features of Laravel 12 and learn why it remains the top choice for secure, modern PHP development.',
            'seo_keywords' => 'Laravel 12, PHP frameworks, web development, secure code architecture',
            'status' => 'published',
        ]);

        Blog::create([
            'title' => 'Unlocking the Power of Generative AI in Web Applications',
            'slug' => 'generative-ai-in-web-applications',
            'category' => 'Artificial Intelligence',
            'featured_image' => 'assets/images/blogs/ai-web.webp',
            'content' => 'Integrating Large Language Models (LLMs) into websites has become easier than ever. Developers can use APIs from OpenAI, Google DeepMind, and Hugging Face to build semantic searches, chatbots, and automatic content editors. This post details how to write a simple Node.js and Python middleware to query LLMs and present output dynamically on your website.',
            'seo_title' => 'How to Integrate Generative AI into your Web App | DigiCoders',
            'seo_description' => 'A guide for developers to integrate Generative AI features and LLMs into their responsive web applications.',
            'seo_keywords' => 'generative AI web, OpenAI integration, LLM middleware, python AI',
            'status' => 'published',
        ]);

        // 6. Seed Gallery
        $galleryItems = [
            ['title' => 'Interactive Coding Classroom Session', 'image' => 'assets/gallery/digicoders-gorakhpur-classroom-cs-it-training.jpeg', 'category' => 'training'],
            ['title' => 'Students Working on Capstone Projects', 'image' => 'assets/gallery/digicoders-gorakhpur-industrial-training-center.jpeg', 'category' => 'training'],
            ['title' => 'One-on-One Mentorship and Debugging', 'image' => 'assets/gallery/best-it-training-institute-gorakhpur-digicoders.jpeg', 'category' => 'training'],
            ['title' => 'Hiring Drive in Campus with Corporate Recruiters', 'image' => 'assets/gallery/digicoders-gorakhpur-placement.jpeg', 'category' => 'placement'],
            ['title' => 'Placed Students Celebrating Offer Letters', 'image' => 'assets/gallery/digicoders-gorakhpur-placement.jpeg', 'category' => 'placement'],
            ['title' => 'Annual Certificate and Award Distribution Ceremony', 'image' => 'assets/gallery/digicoders-gorakhpur-placement.jpeg', 'category' => 'placement'],
            ['title' => 'Collaborative Brainstorming in Meeting Room', 'image' => 'assets/gallery/digicoders-gorakhpur-hr-department-office.jpeg', 'category' => 'campus'],
            ['title' => 'Modern IT Labs and Startup Workspace Environment', 'image' => 'assets/gallery/digicoders-gorakhpur-office-front-view.jpeg', 'category' => 'campus'],
        ];

        foreach ($galleryItems as $item) {
            Gallery::create($item);
        }

        // 7. Seed Testimonials
        $testimonialsList = [
            [
                'student_name' => 'Aditya Sharma',
                'course_name' => 'MERN Stack Web Development',
                'company_name' => 'Wipro Technologies',
                'review_text' => 'DigiCoders Technologies changed my career path completely. The practical labs, mock interviews, and constant guidance from my mentors helped me land a Full Stack Developer role at Wipro.',
                'rating' => 5,
                'student_image' => 'assets/images/testimonials/aditya.webp',
            ],
            [
                'student_name' => 'Shweta Singh',
                'course_name' => 'Laravel Framework Training',
                'company_name' => 'TCS',
                'review_text' => 'The Laravel course is exceptionally comprehensive. I worked on a live billing project which gave me enough confidence to crack my technical interview at TCS.',
                'rating' => 5,
                'student_image' => 'assets/images/testimonials/shweta.webp',
            ],
            [
                'student_name' => 'Ravi Gupta',
                'course_name' => 'PHP Web Development',
                'company_name' => 'Webkul Software',
                'review_text' => 'Learning PDO connection and building a custom admin panel from scratch gave me solid coding skills. The placement drive organized at the campus was my gateway to Webkul.',
                'rating' => 5,
                'student_image' => 'assets/images/testimonials/ravi.webp',
            ],
            [
                'student_name' => 'Kriti Verma',
                'course_name' => 'Flutter App Development',
                'company_name' => 'Tech Mahindra',
                'review_text' => 'The mentors here focus heavily on UI animations and Firebase integrations. I successfully launched my food app on the Play Store, which made my resume stand out.',
                'rating' => 5,
                'student_image' => 'assets/images/testimonials/kriti.webp',
            ],
        ];

        foreach ($testimonialsList as $t) {
            Testimonial::create($t);
        }

        // 8. Seed FAQs
        $faqsList = [
            [
                'question' => 'Where is DigiCoders Technologies located in Gorakhpur?',
                'answer' => 'We are located inside the Main Building, Buddha Institute of Technology, CL-1, Sector-7, GIDA, Gorakhpur, UP - 273209.',
                'category' => 'general',
            ],
            [
                'question' => 'What is the duration of industrial training programs?',
                'answer' => 'Our training programs range from 2 months to 6 months depending on the course selection (e.g. PHP/Laravel is 2 months, MERN Stack is 3-6 months). We offer both Summer and Winter training formats.',
                'category' => 'general',
            ],
            [
                'question' => 'Does the institute provide placement assistance?',
                'answer' => 'Yes, we provide 100% placement assistance, resume preparation assistance, and organize on-campus/off-campus hiring drives with our 500+ recruitment partners.',
                'category' => 'general',
            ],
            [
                'question' => 'Do students get an opportunity to work on live projects?',
                'answer' => 'Absolutely. Every training program requires the completion of at least one major live-project, which is hosted online and comes with a verification URL printed on the certificate.',
                'category' => 'general',
            ],
            [
                'question' => 'Is there any eligibility criteria for enrolling in the training?',
                'answer' => 'We accept students from B.Tech, BCA, MCA, BSC-CS, Diploma, and even candidates from non-CS streams who wish to make a transition into the software development industry.',
                'category' => 'general',
            ],
        ];

        foreach ($faqsList as $faq) {
            Faq::create($faq);
        }
    }
}
