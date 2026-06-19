-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2026 at 03:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digicoders_gorakhpur`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `content` longtext NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` text DEFAULT NULL,
  `seo_keywords` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `category`, `featured_image`, `content`, `seo_title`, `seo_description`, `seo_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 'How to Start a Career in Web Development in 2026', 'how-to-start-web-development-career', 'Career Advice', 'assets/images/blogs/web-dev-career.webp', 'The tech landscape is shifting rapidly in 2026. Developers who understand both frontend and backend concepts are highly favored. Learn how to map your path from HTML/CSS, through JavaScript frameworks like React, to server systems like Node.js and PHP. Focus on building real-world projects and maintaining a clean GitHub repository to show proof of work.', 'How to Start a Web Development Career in 2026 | DigiCoders', 'A comprehensive guide on starting your web development career in 2026. Discover key skills, frameworks, and job-hunting tips.', 'web development career, learn coding, full stack developer path, get hired in tech', 'published', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(2, 'Why Laravel Remains the Go-To PHP Framework in 2026', 'why-laravel-remains-top-php-framework', 'Web Development', 'assets/images/blogs/laravel-top.webp', 'With the release of Laravel 12, PHP has solidified its space in modern web architecture. Offering streamlined routing, database migrations, advanced queue managers, and built-in assets compilation via Vite, Laravel provides a complete ecosystem for building enterprise products. In this article, we explain why startups and corporations choose Laravel for fast, scalable application development.', 'Why Laravel 12 is the Best PHP Framework for startups in 2026', 'Explore the new features of Laravel 12 and learn why it remains the top choice for secure, modern PHP development.', 'Laravel 12, PHP frameworks, web development, secure code architecture', 'published', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(3, 'Unlocking the Power of Generative AI in Web Applications', 'generative-ai-in-web-applications', 'Artificial Intelligence', 'assets/images/blogs/ai-web.webp', 'Integrating Large Language Models (LLMs) into websites has become easier than ever. Developers can use APIs from OpenAI, Google DeepMind, and Hugging Face to build semantic searches, chatbots, and automatic content editors. This post details how to write a simple Node.js and Python middleware to query LLMs and present output dynamically on your website.', 'How to Integrate Generative AI into your Web App | DigiCoders', 'A guide for developers to integrate Generative AI features and LLMs into their responsive web applications.', 'generative AI web, OpenAI integration, LLM middleware, python AI', 'published', '2026-06-18 01:18:59', '2026-06-18 01:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `course` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `fees` int(11) NOT NULL,
  `syllabus` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`syllabus`)),
  `projects` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`projects`)),
  `certification` text DEFAULT NULL,
  `placement` text DEFAULT NULL,
  `faq` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`faq`)),
  `reviews` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`reviews`)),
  `image` varchar(255) DEFAULT NULL,
  `is_popular` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `slug`, `duration`, `eligibility`, `fees`, `syllabus`, `projects`, `certification`, `placement`, `faq`, `reviews`, `image`, `is_popular`, `created_at`, `updated_at`) VALUES
(1, 'PHP Web Development Training', 'php-training-gorakhpur', '2 Months', 'BCA, MCA, B.Tech, Diploma, CS/IT Students', 6500, '[{\"title\":\"Core PHP Basics\",\"topics\":[\"HTML5 & CSS3 Essentials\",\"Bootstrap 5 Responsive Grid\",\"PHP Basics, Variables & Operators\",\"Conditional Statements & Loops\"]},{\"title\":\"Advanced PHP Programming\",\"topics\":[\"PHP Arrays & Functions\",\"Form Handling & Validation\",\"File Uploading & Session Management\",\"Cookie Handling\"]},{\"title\":\"MySQL Database Management\",\"topics\":[\"MySQL Introduction & Setup\",\"SQL Queries (SELECT, INSERT, UPDATE, DELETE)\",\"Database Joins & Subqueries\",\"Database Connectivity in PHP (PDO)\"]},{\"title\":\"Security & OOP PHP\",\"topics\":[\"Object-Oriented Programming (Classes, Objects, Inheritance)\",\"SQL Injection & XSS Protection\",\"Dynamic Website Administration Panel\"]}]', '[\"Dynamic Blog & News Portal\",\"College Management System with Admin Panel\"]', 'ISO 9001:2015 certified training completion certificate with verification URL.', '100% placement support, resume optimization, and mock interview drills.', '[{\"question\":\"Are there any prerequisites for this PHP course?\",\"answer\":\"Basic computer familiarity. Logic and coding concepts will be taught from scratch.\"},{\"question\":\"Do I get to work on a real project?\",\"answer\":\"Yes, you will develop a complete Dynamic Portal with an Admin Panel from scratch and host it live.\"}]', '[{\"student\":\"Amit Verma\",\"rating\":5,\"text\":\"The best training institute for learning web development. Highly recommend!\"},{\"student\":\"Sneha Shahi\",\"rating\":5,\"text\":\"Loved the hands-on database sessions. The mentors explained PDO queries clearly.\"}]', 'assets/images/courses/php.webp', 0, '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(2, 'Laravel Framework Training', 'laravel-training-gorakhpur', '2 Months', 'Prior basic knowledge of PHP & OOP', 7500, '[{\"title\":\"Laravel Fundamentals\",\"topics\":[\"Composer & Project Installation\",\"MVC Architecture Architecture\",\"Routing, Views & Controllers\",\"Blade Template Engine\"]},{\"title\":\"Database Operations\",\"topics\":[\"Migrations & Schema Builder\",\"Eloquent ORM Model Relationships\",\"Query Builder & Database Seeding\",\"Faker Library Integration\"]},{\"title\":\"Advanced Concepts\",\"topics\":[\"Form Validation & Middleware\",\"Authentication & Authorization Guard\",\"Session Handling & Email System\",\"File Uploads & Storage System\"]},{\"title\":\"API & Deployment\",\"topics\":[\"RESTful API Resources & Authentication\",\"Vite Asset Compilation\",\"GitHub Version Control\",\"Hosting on Shared\\/Cloud Server\"]}]', '[\"Multi-vendor E-Commerce Platform\",\"Real-time Service Desk System\"]', 'Professional Laravel Developer Certificate including verification of live capstone project.', 'Placement assistance with regional IT firms and remote startup networks.', '[{\"question\":\"Is PHP knowledge necessary before starting Laravel?\",\"answer\":\"Yes, a fundamental understanding of Object-Oriented PHP is highly recommended.\"},{\"question\":\"What type of deployment is covered?\",\"answer\":\"We cover both standard cPanel deployments and modern cloud hostings.\"}]', '[{\"student\":\"Rahul Vishwakarma\",\"rating\":5,\"text\":\"Very structured course. The model relationships part solved all my database design doubts.\"},{\"student\":\"Kajal Pandey\",\"rating\":5,\"text\":\"Outstanding training. The instructor helped me host my portfolio Laravel project online.\"}]', 'assets/images/courses/laravel.webp', 1, '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(3, 'MERN Stack Web Development', 'mern-stack-training-gorakhpur', '3 Months', 'B.Tech, BCA, MCA, BSC-IT, Tech Seekers', 9500, '[{\"title\":\"Modern JavaScript (ES6+)\",\"topics\":[\"Variables (let\\/const) & Arrow Functions\",\"Promises & Async\\/Await\",\"Array Methods (map, filter, reduce)\",\"Destructuring & Modules\"]},{\"title\":\"React.js Frontend Framework\",\"topics\":[\"Components, Props & State\",\"React Hooks (useState, useEffect, useContext)\",\"React Router DOM Navigation\",\"Redux Toolkit State Management\"]},{\"title\":\"Node.js & Express Backend\",\"topics\":[\"Node.js Runtime & NPM Packages\",\"Express Server & Routing\",\"Rest API Design & JSON Middleware\",\"JWT Token Authentication\"]},{\"title\":\"MongoDB Database & Integration\",\"topics\":[\"NoSQL Core Principles & Atlas Setup\",\"Mongoose Schema Validation\",\"CRUD Operations & Aggregate Queries\",\"Full-stack Hosting (Render\\/Vercel)\"]}]', '[\"Collaborative Task Board App\",\"Digital Marketplace with Payment Gateway\"]', 'MERN Stack Engineer Certification and GitHub Capstone Portfolio validation.', 'Priority referral to Tier-1 software engineering roles and remote development teams.', '[{\"question\":\"What software do I need installed?\",\"answer\":\"Just Node.js and VS Code. We guide you through the initial workspace setups.\"},{\"question\":\"Is this course suitable for beginners?\",\"answer\":\"Yes, we start from absolute JavaScript fundamentals before jumping into React and Node.js.\"}]', '[{\"student\":\"Saurabh Srivastava\",\"rating\":5,\"text\":\"MERN Stack is highly demanded. The training here was completely practical with live coding.\"},{\"student\":\"Priya Gupta\",\"rating\":5,\"text\":\"Learned React state management and JWT authentication which helped me clear interviews easily.\"}]', 'assets/images/courses/mern.webp', 1, '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(4, 'Python & Django Industrial Training', 'python-training-gorakhpur', '2 Months', 'Basic knowledge of programming logic', 7000, '[{\"title\":\"Python Essentials\",\"topics\":[\"Syntax, Data Types & Variables\",\"List, Tuple, Set & Dictionary\",\"Control Flows, Functions & Modules\",\"Object-Oriented Python\"]},{\"title\":\"Database & Web Basics\",\"topics\":[\"File Input\\/Output\",\"SQLite & MySQL Connection\",\"HTML\\/CSS integration\",\"CGI and WSGI basics\"]},{\"title\":\"Django Web Framework\",\"topics\":[\"MVT (Model-View-Template) Architecture\",\"Django Admin Dashboard & Models\",\"URL Routing & Form Handling\",\"Django Rest Framework APIs\"]},{\"title\":\"Hosting & Testing\",\"topics\":[\"Unit Testing in Python\",\"Deployment to PythonAnywhere\",\"Git & Environment Variables\"]}]', '[\"AI Chatbot Agent\",\"Interactive School Portal\"]', 'Python Development Certification with verification.', 'Mentorship and placement support for entry-level Python developer roles.', '[{\"question\":\"Can I choose Data Science topics in this course?\",\"answer\":\"Yes, we customize elective modules for Data Science basics (Pandas, NumPy) upon student request.\"}]', '[{\"student\":\"Vikas Kushwaha\",\"rating\":5,\"text\":\"Very detailed explanation of OOPs. The Django projects were high quality.\"}]', 'assets/images/courses/python.webp', 0, '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(5, 'Java Enterprise Architecture (J2EE)', 'java-training-gorakhpur', '3 Months', 'Students or professionals seeking core backend careers', 8500, '[{\"title\":\"Core Java\",\"topics\":[\"JDK, JRE & JVM Architecture\",\"Classes, Objects, Inheritance\",\"Polymorphism & Abstraction\",\"Interfaces & Packages\"]},{\"title\":\"Advanced Concepts\",\"topics\":[\"Exception Handling & Multithreading\",\"Java Collections Framework\",\"File I\\/O Streams\",\"JDBC Database Connections\"]},{\"title\":\"Servlets & JSP\",\"topics\":[\"Servlet Lifecycle & Filters\",\"Session Tracking & Request Dispatcher\",\"JSP Tag Libraries & MVC Patterns\",\"Tomcat Server Deployments\"]},{\"title\":\"Spring Boot Basics\",\"topics\":[\"Dependency Injection & IoC\",\"Spring MVC & REST APIs\",\"Spring Data JPA & Hibernate\",\"Maven Build Tool\"]}]', '[\"Online Banking Application\",\"Corporate HR Portal\"]', 'Java Enterprise Application Developer Certificate.', 'Referrals to MNCs, enterprise consultants, and major banking software providers.', '[{\"question\":\"Is Spring Boot included?\",\"answer\":\"Yes, our 3-month module covers Hibernate and Spring Boot API development.\"}]', '[{\"student\":\"Anjali Maurya\",\"rating\":5,\"text\":\"A wonderful training center. Learned complex multithreading concepts with ease.\"}]', 'assets/images/courses/java.webp', 0, '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(6, 'Flutter Hybrid Mobile App Development', 'flutter-training-gorakhpur', '2 Months', 'B.Tech, BCA, MCA, Diploma students', 8000, '[{\"title\":\"Dart Programming Language\",\"topics\":[\"Dart Syntax & Core Libraries\",\"Functions, Classes & Interfaces\",\"Asynchronous Dart (Future\\/Stream)\",\"Null Safety Features\"]},{\"title\":\"Flutter Framework Basics\",\"topics\":[\"Flutter SDK & Android Studio Setup\",\"Stateless vs Stateful Widgets\",\"Material Design Layouts\",\"Asset & Font Management\"]},{\"title\":\"State & API Integration\",\"topics\":[\"Provider\\/Bloc State Management\",\"HTTP Requests & JSON Parsing\",\"SharedPreferences Local Cache\",\"Firebase Authentication & Database\"]},{\"title\":\"Publishing & Release\",\"topics\":[\"Android Build & APK Signing\",\"iOS Build setup\",\"Play Store Publishing Guidelines\"]}]', '[\"Real-time Chat Application\",\"Food Delivery Application\"]', 'Mobile Application Engineer Certification.', 'Placement support in app development agencies and product startups.', '[{\"question\":\"Do I need a Mac to learn Flutter?\",\"answer\":\"No, a Windows PC is sufficient for learning and developing Android apps. Mac is only required for iOS deployment.\"}]', '[{\"student\":\"Rohan Singh\",\"rating\":5,\"text\":\"Best Flutter institute. Developed 2 solid apps and launched them on the Play Store.\"}]', 'assets/images/courses/flutter.webp', 0, '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(7, 'Artificial Intelligence & Machine Learning', 'ai-training-gorakhpur', '3 Months', 'Strong analytical mindset, basic programming knowledge', 12000, '[{\"title\":\"Math & Python Basics\",\"topics\":[\"Linear Algebra & Calculus Foundations\",\"Statistics & Probability\",\"NumPy Arrays & Pandas DataFrames\",\"Matplotlib Data Visualization\"]},{\"title\":\"Supervised Machine Learning\",\"topics\":[\"Linear & Logistic Regression\",\"Decision Trees & Random Forests\",\"Support Vector Machines (SVM)\",\"Model Evaluation Metrics (Scikit-Learn)\"]},{\"title\":\"Deep Learning & Neural Networks\",\"topics\":[\"Perceptrons & Feedforward Networks\",\"TensorFlow & Keras API Basics\",\"Convolutional Neural Networks (CNNs)\",\"Recurrent Neural Networks (RNN\\/LSTM)\"]},{\"title\":\"Generative AI & LLMs\",\"topics\":[\"Introduction to Transformers\",\"Hugging Face Hub & LLM Tuning\",\"OpenAI API Integrations\",\"Streamlit App Deployments\"]}]', '[\"Image Recognition & Classification System\",\"Semantic Search Engine & Content Summarizer\"]', 'AI/ML Specialist Certification with Capstone Project endorsement.', 'Direct referral opportunities to research labs, analytics teams, and tech startups.', '[{\"question\":\"Is advanced mathematics a must?\",\"answer\":\"Basic knowledge of matrix multiplication and calculus is helpful, but we cover the core concepts in the class.\"}]', '[{\"student\":\"Deepak Yadav\",\"rating\":5,\"text\":\"Outstanding course. Building a model and deploying it as a web app using Streamlit was a game changer for my resume.\"}]', 'assets/images/courses/ai.webp', 1, '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(8, 'Advanced Digital Marketing Course', 'digital-marketing-training-gorakhpur', '2 Months', 'Any Graduate / Undergraduate / Entrepreneur', 5000, '[{\"title\":\"SEO (Search Engine Optimization)\",\"topics\":[\"On-Page SEO (Meta tags, Headings, Interlinks)\",\"Off-Page SEO (Link building, guest posts)\",\"Technical SEO (Page speed, sitemaps, robots)\",\"Google Search Console & Analytics Setup\"]},{\"title\":\"Social Media Marketing\",\"topics\":[\"Facebook Page & Ads Manager\",\"Instagram Growth & Reel Strategy\",\"LinkedIn Professional Networking\",\"Canva Graphics Design Foundations\"]},{\"title\":\"Search Engine Marketing\",\"topics\":[\"Google Ads (Search, Display, Video)\",\"Keyword Planner & Bid Strategies\",\"Remarketing campaigns\",\"Conversion API tracking\"]},{\"title\":\"Email & Content Marketing\",\"topics\":[\"Lead Generation funnels\",\"Mailchimp campaign setups\",\"Blogging for Organic Traffic\",\"Affiliate Marketing overview\"]}]', '[\"Live Blogging & SEO Campaign\",\"Complete E-Commerce Ads Strategy\"]', 'Certified Digital Marketing Professional with Google Ads Certifications support.', 'Job opportunities in corporate marketing departments and local advertising agencies.', '[{\"question\":\"Are Google certification exams covered?\",\"answer\":\"Yes, we prepare you for Google Ads and Google Analytics certifications, which are free to take.\"}]', '[{\"student\":\"Neha Mishra\",\"rating\":5,\"text\":\"The digital marketing course is highly interactive. The Google Ads practicals were top-notch.\"}]', 'assets/images/courses/digital-marketing.webp', 0, '2026-06-18 01:18:59', '2026-06-18 01:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'general',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Where is DigiCoders Technologies located in Gorakhpur?', 'We are located inside the Main Building, Buddha Institute of Technology, CL-1, Sector-7, GIDA, Gorakhpur, UP - 273209.', 'general', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(2, 'What is the duration of industrial training programs?', 'Our training programs range from 2 months to 6 months depending on the course selection (e.g. PHP/Laravel is 2 months, MERN Stack is 3-6 months). We offer both Summer and Winter training formats.', 'general', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(3, 'Does the institute provide placement assistance?', 'Yes, we provide 100% placement assistance, resume preparation assistance, and organize on-campus/off-campus hiring drives with our 500+ recruitment partners.', 'general', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(4, 'Do students get an opportunity to work on live projects?', 'Absolutely. Every training program requires the completion of at least one major live-project, which is hosted online and comes with a verification URL printed on the certificate.', 'general', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(5, 'Is there any eligibility criteria for enrolling in the training?', 'We accept students from B.Tech, BCA, MCA, BSC-CS, Diploma, and even candidates from non-CS streams who wish to make a transition into the software development industry.', 'general', '2026-06-18 01:19:00', '2026-06-18 01:19:00'),
(6, 'What is DigiCoders Technologies Pvt. Ltd.?', 'DigiCoders Technologies Pvt. Ltd. is a professional IT Training and Internship company in Gorakhpur that provides practical training programs for Diploma (CS/IT), B.Tech (Computer Science/IT), BCA, MCA, and other technical students. We focus on live projects, industry-oriented learning, internship certification, and placement assistance.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(7, 'Which students can join DigiCoders training programs?', 'Students pursuing Diploma in Computer Science or Information Technology, B.Tech (CS/IT), BCA, MCA, B.Sc IT, and fresh graduates can join our training programs. Beginners as well as students with basic programming knowledge are welcome.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(8, 'What types of training programs do you offer?', 'We provide Summer Training, Winter Training, Industrial Training, Apprenticeship Training, Internship Programs, Full Stack Development Training, Web Development Training, Python Training, Java Training, PHP Laravel Training, Data Science, AI, and Digital Marketing courses.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(9, 'What is Summer Training?', 'Summer Training is a practical learning program conducted during summer vacations. Students work on live projects, improve technical skills, and gain industry experience that helps them prepare for placements and future careers.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(10, 'What is Winter Training?', 'Winter Training is designed for students who want to utilize their winter break to enhance programming, development, and software engineering skills through practical sessions and real-world projects.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(11, 'What is Industrial Training?', 'Industrial Training provides students with real software development experience by working on live industry projects under experienced mentors. It helps bridge the gap between academic knowledge and professional requirements.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(12, 'What is Apprenticeship Training?', 'Apprenticeship Training is an advanced practical program where students gain hands-on experience by working on real client-based projects while learning industry standards, teamwork, and software development practices.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(13, 'Do you provide Internship Certificates?', 'Yes. After successfully completing the training or internship program and fulfilling the project requirements, students receive an Internship/Training Completion Certificate from DigiCoders Technologies Pvt. Ltd.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(14, 'Which programming languages and technologies are taught?', 'We provide training in PHP, Laravel, Java, Python, C, C++, HTML, CSS, JavaScript, Bootstrap, React, MySQL, Android Development, Full Stack Development, Data Science, AI, and Digital Marketing.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(15, 'Are live projects included in the training?', 'Yes. Students work on live projects such as E-Commerce Websites, College Management Systems, Hospital Management Systems, Attendance Systems, Portfolio Websites, and other real-world applications.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(16, 'Is the training suitable for beginners?', 'Yes. Our programs start from basic concepts and gradually move to advanced topics, making them suitable for beginners as well as students who want to improve their existing skills.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(17, 'Do you provide placement assistance?', 'Yes. DigiCoders provides placement assistance including resume preparation, technical interview guidance, aptitude preparation, mock interviews, and career counseling to help students start their IT careers.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(18, 'Why should students choose DigiCoders Technologies Pvt. Ltd.?', 'Students choose DigiCoders because of practical training, experienced trainers, live projects, updated industry curriculum, internship certification, career guidance, and a supportive learning environment focused on real skill development.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(19, 'What is the duration of the training programs?', 'Training duration depends on the selected program. Students can choose short-term and long-term options such as 30 Days, 45 Days, 60 Days, 3 Months, or 6 Months according to their academic requirements and career goals.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(20, 'Do you provide project guidance for college students?', 'Yes. We help Diploma, B.Tech, BCA, and MCA students build academic and major projects using modern technologies while explaining the complete development process and documentation.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(21, 'Will students receive practical coding experience?', 'Absolutely. Every student writes code, builds projects, debugs applications, works with databases, and develops complete software solutions to gain confidence in real development environments.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(22, 'Can final-year students join internship programs?', 'Yes. Final-year Diploma, B.Tech, BCA, and MCA students can join our internship programs to improve technical skills, build professional projects, and prepare for campus placements and job opportunities.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(23, 'What career opportunities are available after completing the training?', 'After completing the training, students can apply for roles such as Web Developer, PHP Developer, Laravel Developer, Java Developer, Python Developer, Full Stack Developer, Software Engineer, Android Developer, Data Analyst, and Digital Marketing Executive.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(24, 'How can students enroll in DigiCoders training programs?', 'Students can enroll by filling out the online registration form, contacting our admission team, visiting our training center, or connecting through phone, email, or WhatsApp for complete course information and admission guidance.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07'),
(25, 'Does DigiCoders provide both online and offline training?', 'Yes. DigiCoders Technologies Pvt. Ltd. offers both classroom and online training programs, allowing students from Gorakhpur and other cities to learn from experienced trainers with access to practical sessions, live projects, and mentorship.', 'general', '2026-06-19 00:15:07', '2026-06-19 00:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'campus',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Interactive Coding Classroom Session', 'assets/gallery/digicoders-gorakhpur-classroom-cs-it-training.jpeg', 'training', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(2, 'Students Working on Capstone Projects', 'assets/gallery/digicoders-gorakhpur-industrial-training-center.jpeg', 'training', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(3, 'One-on-One Mentorship and Debugging', 'assets/gallery/best-it-training-institute-gorakhpur-digicoders.jpeg', 'training', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(4, 'Hiring Drive in Campus with Corporate Recruiters', 'assets/gallery/digicoders-gorakhpur-placement.jpeg', 'placement', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(5, 'Placed Students Celebrating Offer Letters', 'assets/gallery/digicoders-gorakhpur-placement.jpeg', 'placement', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(6, 'Annual Certificate and Award Distribution Ceremony', 'assets/gallery/digicoders-gorakhpur-placement.jpeg', 'placement', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(7, 'Collaborative Brainstorming in Meeting Room', 'assets/gallery/digicoders-gorakhpur-hr-department-office.jpeg', 'campus', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(8, 'Modern IT Labs and Startup Workspace Environment', 'assets/gallery/digicoders-gorakhpur-office-front-view.jpeg', 'campus', '2026-06-18 01:18:59', '2026-06-18 01:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_06_13_140711_create_courses_table', 1),
(5, '2026_06_13_140720_create_blogs_table', 1),
(6, '2026_06_13_140741_create_galleries_table', 1),
(7, '2026_06_13_140758_create_testimonials_table', 1),
(8, '2026_06_13_140802_create_faqs_table', 1),
(9, '2026_06_13_140804_create_contacts_table', 1),
(10, '2026_06_13_140805_create_seos_table', 1),
(11, '2026_06_13_140816_create_settings_table', 1),
(12, '2026_06_15_101655_add_category_fields_to_courses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `twitter_card` varchar(255) NOT NULL DEFAULT 'summary_large_image',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `page_name`, `meta_title`, `meta_description`, `meta_keywords`, `og_image`, `twitter_card`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Best IT Training Institute & Software Development Company in Gorakhpur', 'DigiCoders Technologies is the leading IT Training Institute in Gorakhpur offering 100% practical industrial training & placements in PHP, Laravel, MERN, Python, Java, Flutter & AI.', 'Best IT Training Institute in Gorakhpur, Software Development Company Gorakhpur, Industrial Training Gorakhpur, PHP Training Gorakhpur, Laravel Training Gorakhpur, MERN Stack Training Gorakhpur, Python Training Gorakhpur, Java Training Gorakhpur, Flutter Training Gorakhpur, AI Training Gorakhpur, Internship in Gorakhpur', 'assets/images/seo/home-og.webp', 'summary_large_image', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(2, 'courses', 'Industry Ready Professional IT Courses in Gorakhpur - DigiCoders', 'Browse our premium training programs in Software Development, Mobile Apps, and AI. Get certified with live projects and 100% placement assistance.', 'IT Courses Gorakhpur, Web development training, coding classes Gorakhpur, programming institute Gorakhpur', 'assets/images/seo/courses-og.webp', 'summary_large_image', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(3, 'blogs', 'DigiCoders Tech Blog - Latest Trends in IT & Coding Career Advice', 'Read our latest insights, tutorials, and career tips in web development, python programming, MERN stack, and artificial intelligence.', 'IT blog Gorakhpur, learn programming tips, web development tutorials, tech insights', 'assets/images/seo/blogs-og.webp', 'summary_large_image', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(4, 'contact', 'Contact DigiCoders Technologies - Gorakhpur office', 'Get in touch with DigiCoders Technologies for web development services, project internships, or admission inquiries in Gorakhpur.', 'contact IT company Gorakhpur, DigiCoders contact number, IT training admission', 'assets/images/seo/contact-og.webp', 'summary_large_image', '2026-06-18 01:18:59', '2026-06-18 01:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('75dpJkxkRfsS10Xsdx9f80uxw2PaNccaCBZUX7n3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRVhmbkk2N3lCYUlaS2wxc2k1SUlaTzAyRE1uNWd1SWFYbkp3TktrNSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1781865208),
('mirC2de7arJgMKKhNLe1FIVlpVVMH2Slo9OXA4HJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU0FrR2Z2eUhVNXlBRDExUXVlc2FRak1IWEdDYjh2Z28wRzhaWjJKOCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1781876427);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'DigiCoders Technologies Pvt. Ltd.', '2026-06-18 01:18:58', '2026-06-18 01:18:58'),
(2, 'site_title', 'DigiCoders Technologies | Best IT Training & Software Development Company in Gorakhpur', '2026-06-18 01:18:58', '2026-06-18 01:18:58'),
(3, 'contact_phone', '9801017529', '2026-06-18 01:18:58', '2026-06-18 01:18:58'),
(4, 'contact_email', 'digicoderstech@gmail.com', '2026-06-18 01:18:58', '2026-06-18 01:18:58'),
(5, 'contact_address', 'INSIDE MAIN BUILDING, BUDDHA INSTITUTE OF TECHNOLOGY, CL-1, SECTOR-7, GIDA, GORAKHPUR, UP, 273209', '2026-06-18 01:18:58', '2026-06-18 01:18:58'),
(6, 'google_map_embed', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d920.1529853579708!2d83.27073567806144!3d26.739402731532582!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399147380139859b%3A0x708768ccb2c065c9!2sBuddha%20Institute%20of%20Technology%20%2C%20Gorakhpur!5e1!3m2!1sen!2sin!4v1781422836320!5m2!1sen!2sin', '2026-06-18 01:18:58', '2026-06-18 01:18:58'),
(7, 'facebook_url', 'https://www.facebook.com/DigiCodersTech/', '2026-06-18 01:18:58', '2026-06-18 01:18:58'),
(8, 'instagram_url', 'https://www.instagram.com/digicoderstech', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(9, 'linkedin_url', 'https://www.linkedin.com/company/digicoders', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(10, 'youtube_url', 'https://www.youtube.com/@digicoders', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(11, 'whatsapp_url', 'https://www.whatsapp.com/channel/0029VaDTIxW5EjxzOyubYT3l', '2026-06-18 01:18:59', '2026-06-18 01:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `review_text` text NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 5,
  `student_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `student_name`, `course_name`, `company_name`, `review_text`, `rating`, `student_image`, `created_at`, `updated_at`) VALUES
(1, 'Aditya Sharma', 'MERN Stack Web Development', 'Wipro Technologies', 'DigiCoders Technologies changed my career path completely. The practical labs, mock interviews, and constant guidance from my mentors helped me land a Full Stack Developer role at Wipro.', 5, 'assets/images/testimonials/aditya.webp', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(2, 'Shweta Singh', 'Laravel Framework Training', 'TCS', 'The Laravel course is exceptionally comprehensive. I worked on a live billing project which gave me enough confidence to crack my technical interview at TCS.', 5, 'assets/images/testimonials/shweta.webp', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(3, 'Ravi Gupta', 'PHP Web Development', 'Webkul Software', 'Learning PDO connection and building a custom admin panel from scratch gave me solid coding skills. The placement drive organized at the campus was my gateway to Webkul.', 5, 'assets/images/testimonials/ravi.webp', '2026-06-18 01:18:59', '2026-06-18 01:18:59'),
(4, 'Kriti Verma', 'Flutter App Development', 'Tech Mahindra', 'The mentors here focus heavily on UI animations and Firebase integrations. I successfully launched my food app on the Play Store, which made my resume stand out.', 5, 'assets/images/testimonials/kriti.webp', '2026-06-18 01:18:59', '2026-06-18 01:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin DigiCoders', 'admin@digicoders.com', NULL, '$2y$12$GCCqV/TT9E4FbK68dNzzNusIdyhTqDPQ41hOWEaNzCE7mXWTXYvGC', NULL, '2026-06-18 01:18:58', '2026-06-18 01:18:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seos_page_name_unique` (`page_name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
