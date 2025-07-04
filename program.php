<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Explore Bizzbel Data Intelligence's Instructor-led Learning Programmes, designed for practical skill enhancement and professional growth.">
    <meta name="keywords"
        content="Bizzbel Data Intelligence, Instructor-led Learning, training, professional development, Africa">
    <title>Instructor-led Learning Programmes - Bizzbel Data Intelligence</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Montserrat:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUh1gPqP5K0/4H0kB1O7M1gA6W2fD7xO8X8X9X9X9X9X9=="
        crossorigin="anonymous"> -->
        <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
<link rel="icon" type="image/png" href="assets/favicon/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="assets/favicon/favicon-32x32.png" sizes="32x32">
<link rel="apple-touch-icon" href="assets/favicon/apple-touch-icon.png" sizes="180x180">
    <style>
        :root {
            --primary-color: #003087;
            --secondary-color: #00A86B;
            --background-color: #F5F7FA;
            --text-color: #333333;
            --white: #FFFFFF;
            --accent-color: #FFD700;
            --overlay-bg: rgba(0, 0, 0, 0.5);
            --hero-text: #FFFFFF;
            --shadow-color: rgba(0, 0, 0, 0.2);
        }

        [data-theme="dark"] {
            --primary-color: #4A90E2;
            --secondary-color: #00C4B4;
            --background-color: #121212;
            --text-color: #E0E0E0;
            --white: #1E1E1E;
            --accent-color: #FFCA28;
            --overlay-bg: rgba(0, 0, 0, 0.7);
            --hero-text: #F5F5F5;
            --shadow-color: rgba(255, 255, 255, 0.2);
        }

        html,
        body {
            overflow-x: hidden;
            height: 100%;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: var(--text-color);
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, var(--background-color), #E6ECF4);
            line-height: 1.6;
        }

        [data-theme="dark"] body {
            background: linear-gradient(135deg, var(--background-color), #2E2E2E);
        }

        h1,
        h2,
        h3,
        h5 {
            font-family: 'Montserrat', sans-serif;
            color: var(--primary-color);
        }

        .container {
            width: 90%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .hero-banner {
            position: relative;
            height: 600px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--hero-text);
            margin-bottom: 3rem;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--overlay-bg);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 3rem 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-content h1 {
            font-size: 3rem;
            color: var(--hero-text);
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 1.2rem;
            color: var(--hero-text);
            margin-bottom: 2rem;
            line-height: 1.4;
        }

        .navbar {
            background-color: transparent;
            padding: 1rem 0;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .navbar-brand img {
            width: 150px;
            height: auto;
            display: block;
        }

        .navbar a {
            color: var(--white);
            transition: color 0.3s;
        }

        .navbar a:hover {
            color: var(--accent-color);
        }

        .theme-toggle {
            color: var(--primary-color);
            font-size: 1.1rem;
            cursor: pointer;
            transition: color 0.3s;
            padding: 0.75rem;
            display: block;
        }

        .theme-toggle:hover {
            color: var(--accent-color);
        }

        .offcanvas {
            background-color: var(--white);
        }

        .offcanvas-body {
            text-align: left;
        }

        .offcanvas-title img {
            width: 120px;
            height: auto;
            display: block;
        }

        .offcanvas a {
            color: var(--primary-color);
            font-size: 1.1rem;
            padding: 0.75rem;
            text-align: left;
        }

        .offcanvas a:hover {
            color: var(--accent-color);
        }

        .offcanvas .dropdown-menu {
            background-color: var(--white);
        }

        .offcanvas .dropdown-item {
            color: var(--primary-color);
            text-align: left;
        }

        .offcanvas .dropdown-item:hover {
            background-color: var(--background-color);
            color: var(--accent-color);
        }

        .offcanvas .btn-close {
            filter: invert(0%) sepia(100%) saturate(7500%) hue-rotate(210deg) brightness(var(--primary-color)) contrast(100%);
            opacity: 1;
            font-size: 1rem;
            padding: 0.5rem;
        }

        .offcanvas .btn-close:hover {
            filter: invert(0%) sepia(100%) saturate(7500%) hue-rotate(50deg) brightness(var(--accent-color)) contrast(100%);
        }

        .section {
            padding: 5rem 0;
            text-align: center;
        }

        .section h2 {
            font-size: 2.8rem;
            margin-bottom: 2.5rem;
        }

        .content-section {
            padding: 2rem 0;
            text-align: left;
        }

        .content-section ul {
            list-style: none;
            padding: 0;
            text-align: left;
            margin: 1.5rem 0 0;
        }

        .content-section li {
            font-size: 1.1rem;
            color: var(--text-color);
            margin-bottom: 0.75rem;
            position: relative;
            padding-left: 1.5rem;
        }

        .content-section li::before {
            content: '•';
            color: var(--secondary-color);
            position: absolute;
            left: 0;
            font-size: 1.2rem;
        }

        .cta-section {
            padding: 3rem 0;
            background: linear-gradient(135deg, var(--background-color), var(--white));
            text-align: center;
        }

        [data-theme="dark"] .cta-section {
            background: linear-gradient(135deg, var(--background-color), #2E2E2E);
        }

        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .cta-section p {
            max-width: 600px;
            margin: 0 auto 1.5rem;
            font-size: 1.2rem;
            color: var(--text-color);
        }

        .btn {
            background: linear-gradient(90deg, var(--secondary-color), #00C4B4);
            color: var(--white);
            padding: 0.8rem 2rem;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            display: inline-block;
            transition: background 0.4s, transform 0.4s, box-shadow 0.4s;
        }

        .btn:hover {
            background: linear-gradient(90deg, #008B5B, #00A86B);
            transform: scale(1.05);
            box-shadow: 0 4px 15px var(--shadow-color);
        }

        .modal-content {
            background-color: var(--white);
            color: var(--text-color);
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 20px var(--shadow-color);
        }

        [data-theme="dark"] .modal-content {
            background-color: var(--white);
            color: var(--text-color);
        }

        .modal-header {
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            color: var(--hero-text);
            border-bottom: none;
            padding: 1.5rem;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .modal-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.75rem;
            font-weight: 700;
        }

        .modal-body {
            padding: 2rem;
        }

        .modal-body form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .modal-body .form-group {
            margin-bottom: 0;
        }

        .modal-body label {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            display: block;
        }

        .modal-body .form-control,
        .modal-body .form-select {
            padding: 0.75rem;
            border-radius: 8px;
            border: 1px solid var(--background-color);
            background-color: #f8f9fa;
            color: var(--text-color);
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        [data-theme="dark"] .modal-body .form-control,
        [data-theme="dark"] .modal-body .form-select {
            background-color: #2A2A2A;
            border-color: #3A3A3A;
            color: var(--text-color);
        }

        .modal-body .form-control:focus,
        .modal-body .form-select:focus {
            outline: none;
            border-color: var(--secondary-color);
            box-shadow: 0 0 5px rgba(0, 168, 107, 0.5);
        }

        .modal-body .form-control::placeholder {
            color: #6c757d;
            opacity: 0.7;
        }

        [data-theme="dark"] .modal-body .form-control::placeholder {
            color: #adb5bd;
        }

        .modal-footer {
            border-top: none;
            padding: 1.5rem;
            background-color: var(--white);
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        [data-theme="dark"] .modal-footer {
            background-color: var(--white);
        }

        .modal-footer .btn-secondary {
            background: var(--background-color);
            color: var(--text-color);
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
        }

        .modal-footer .btn-secondary:hover {
            background: var(--primary-color);
            color: var(--white);
            transform: scale(1.05);
        }

        .modal-footer .btn-primary {
            background: linear-gradient(90deg, var(--secondary-color), #00C4B4);
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
        }

        .modal-footer .btn-primary:hover {
            background: linear-gradient(90deg, #008B5B, #00A86B);
            transform: scale(1.05);
            box-shadow: 0 4px 15px var(--shadow-color);
        }

        .footer {
            position: relative;
            background: linear-gradient(90deg, var(--primary-color), #0044B4);
            color: var(--white);
            padding: 0.5rem 0;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .footer-simple {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .footer-simple p {
            margin: 0;
            font-size: 0.9rem;
            color: var(--white);
        }

        .footer-simple a {
            color: var(--white);
            text-decoration: underline;
            cursor: pointer;
            transition: color 0.3s;
        }

        .footer-simple a:hover {
            color: var(--accent-color);
        }

        .footer-detailed {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(90deg, var(--primary-color), #0044B4);
            padding: 1.5rem;
            box-shadow: 0 -2px 10px var(--shadow-color);
            z-index: 1000;
            overflow-y: auto;
            max-height: 80vh;
            transition: background-color 0.3s ease;
        }

        .footer-detailed .container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            text-align: left;
        }

        .footer-detailed h4 {
            color: var(--white);
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .footer-detailed ul {
            list-style: none;
            padding: 0;
        }

        .footer-detailed a {
            color: var(--white);
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            transition: color 0.3s;
        }

        .footer-detailed a:hover {
            color: var(--accent-color);
        }

        .footer-detailed .social {
            display: flex;
            gap: 1rem;
        }

        .footer-detailed .social a {
            font-size: 1.5rem;
            color: var(--white);
            transition: color 0.3s;
        }

        .footer-detailed .social a:hover {
            color: var(--accent-color);
        }

        .newsletter-form {
            margin-top: 1rem;
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .newsletter-form input[type="email"] {
            padding: 0.6rem;
            border-radius: 5px;
            border: none;
            width: 100%;
            font-size: 0.9rem;
            background-color: #f0f0f0;
            color: var(--text-color);
            transition: background-color 0.3s ease;
        }

        [data-theme="dark"] .newsletter-form input[type="email"] {
            background-color: #3A3A3A;
            color: var(--text-color);
        }

        .newsletter-form button {
            padding: 0.6rem 1.2rem;
            background: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background 0.3s, transform 0.3s;
        }

        .newsletter-form button:hover {
            background: var(--accent-color);
            color: var(--text-color);
            transform: scale(1.05);
        }

        .newsletter-form .unsubscribe-btn {
            background: none;
            color: var(--accent-color);
            text-decoration: underline;
            padding: 0.6rem 0;
        }

        .newsletter-form .unsubscribe-btn:hover {
            color: #E6C200;
            transform: none;
        }

        .close-btn {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
            z-index: 1001;
            transition: color 0.3s;
        }

        .close-btn:hover {
            color: var(--accent-color);
        }

        @media (min-width: 992px) {
            .content-section {
                padding: 2rem 0;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                background-color: var(--primary-color);
                position: fixed;
            }

            .navbar-brand img {
                width: 100px;
            }

            .hero-banner {
                height: 500px;
            }

            .hero-content {
                padding: 4rem 1.5rem 1.5rem;
                min-height: 300px;
            }

            .hero-content h1 {
                font-size: 1.8rem;
                line-height: 1.3;
            }

            .hero-content p {
                font-size: 0.9rem;
                line-height: 1.4;
            }

            .section {
                padding: 3rem 0;
            }

            .section h2 {
                font-size: 1.5rem;
            }

            .content-section {
                padding: 1.5rem 0;
            }

            .modal-dialog {
                margin: 1rem;
            }

            .modal-body .form-control,
            .modal-body .form-select {
                font-size: 0.9rem;
            }

            .footer-detailed .container {
                grid-template-columns: repeat(2, 1fr);
            }

            .newsletter-form {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand img {
                width: 80px;
            }

            .offcanvas-title img {
                width: 100px;
            }

            .hero-banner {
                height: 600px;
            }

            .hero-content {
                padding: 5rem 1rem 1rem;
                min-height: 400px;
            }

            .hero-content h1 {
                font-size: 1.5rem;
                line-height: 1.3;
            }

            .hero-content p {
                font-size: 0.85rem;
                line-height: 1.4;
            }

            .hero-overlay {
                background: var(--overlay-bg);
                opacity: 0.6;
            }

            .section {
                padding: 2rem 0;
            }

            .section h2 {
                font-size: 1.2rem;
            }

            .content-section {
                padding: 1rem 0;
            }

            .content-section li {
                font-size: 1rem;
            }

            .modal-dialog {
                margin: 0.5rem;
            }

            .modal-body .form-control,
            .modal-body .form-select {
                font-size: 0.85rem;
            }

            .modal-header {
                padding: 1rem;
            }

            .modal-body {
                padding: 1.5rem;
            }

            .modal-footer {
                padding: 1rem;
            }

            .footer-detailed .container {
                grid-template-columns: 1fr;
            }

            .footer-simple {
                flex-direction: column;
                gap: 0.5rem;
                align-items: center;
            }

            .footer-simple p,
            .footer-simple a {
                width: 100%;
                text-align: center;
                margin: 0;
            }
        }
    </style>
</head>

<body data-theme="light">
    <section class="hero-banner">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="assets/logo.webp"
                        alt="Bizzbel Data Intelligence Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
             <?php require_once('partials/navbar.php') ?>
            </div>
        </nav>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Instructor-led Learning Programmes</h1>
            <p>Our Instructor-led Learning Programmes are crafted to deliver hands-on experience and practical skills
                that participants can immediately apply in their professional roles. These sessions, guided by industry
                experts, offer a comprehensive curriculum tailored to address the evolving needs of professionals across
                various industries. Whether you're looking to upskill, pivot your career, or enhance your expertise,
                this programme provides a dynamic and engaging learning environment.</p>
        </div>
    </section>

    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-6 mb-4">
                <section class="section content-section" data-aos="fade-up">
                    <h2>Why You Should Attend</h2>
                    <p>Participating in our training programmes offers a range of advantages to support your
                        professional development:</p>
                    <ul>
                        <li>Learn directly from seasoned instructors with deep industry knowledge and practical
                            experience.</li>
                        <li>Engage in interactive, hands-on sessions that foster active learning and skill application.
                        </li>
                        <li>Build valuable connections with peers and industry professionals during collaborative
                            activities.</li>
                        <li>Receive tailored feedback and insights to refine your skills and boost your confidence.</li>
                    </ul>
                </section>
            </div>
            <div class="col-lg-6 mb-4">
                <section class="section content-section" data-aos="fade-up" data-aos-delay="100">
                    <h2>What You'll Learn</h2>
                    <p>This programme equips you with essential skills and knowledge, including:</p>
                    <ul>
                        <li>Advanced methods for analyzing and interpreting data to drive informed decisions.</li>
                        <li>Proven strategies to lead teams effectively and manage complex projects with confidence.
                        </li>
                        <li>Best practices for planning, executing, and delivering successful projects on time.</li>
                        <li>Creative techniques to tackle challenges and make strategic, impactful decisions.</li>
                    </ul>
                </section>
            </div>
            <div class="col-lg-6 mb-4">
                <section class="section content-section" data-aos="fade-up" data-aos-delay="200">
                    <h2>Who Should Attend</h2>
                    <p>This programme is ideal for a diverse range of professionals, such as:</p>
                    <ul>
                        <li>Mid-level managers eager to sharpen their leadership abilities and advance their careers.
                        </li>
                        <li>HR professionals focused on developing innovative talent management strategies.</li>
                        <li>Data analysts seeking to transform data into actionable business insights.</li>
                        <li>Entrepreneurs and business owners aiming to grow and optimize their operations.</li>
                    </ul>
                </section>
            </div>
        </div>
    </div>

    <section class="cta-section" data-aos="fade-up" data-aos-delay="400">
        <div class="container">
            <h2>Ready to Elevate Your Skills?</h2>
            <p>Contact us today to register for our Instructor-led Learning Programmes and take the next step toward
                professional excellence.</p>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#registerModal"
                aria-label="Register for Instructor-led Learning Programmes">Register Now</button>
        </div>
    </section>

    <!-- Registration Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register for a Programme</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="registrationForm">
                        <div class="form-group">
                            <label for="fullName">Full Name <span style="color: #dc3545;">*</span></label>
                            <input type="text" class="form-control" id="fullName" name="fullName" required
                                placeholder="Enter your full name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address <span style="color: #dc3545;">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required
                                placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number <span style="color: #dc3545;">*</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone" required
                                placeholder="Enter your phone number">
                        </div>
                        <div class="form-group">
                            <label for="jobTitle">Job Title</label>
                            <input type="text" class="form-control" id="jobTitle" name="jobTitle"
                                placeholder="Enter your job title">
                        </div>
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input type="text" class="form-control" id="company" name="company"
                                placeholder="Enter your company name">
                        </div>
                        <div class="form-group">
                            <label for="service">Service <span style="color: #dc3545;">*</span></label>
                            <input type="text" class="form-control" id="service" name="service" readonly>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="registrationForm" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-simple container">
            <p>© Bizzbel Data Intelligence 2025. | All Rights Reserved</p>
            <a href="#" id="support-link">Support & Resources</a>
        </div>
        <div class="footer-detailed" id="footer-detailed">
            <button class="close-btn" id="close-footer"><i class="fas fa-times"></i></button>
            <div class="container">
                <div>
                    <h4>Contact Us</h4>
                    <p>123 Innovation Hub, Lagos, Nigeria</p>
                    <p>Phone: +234 123 456 7890</p>
                    <p>Email: info@bizzbel.com</p>
                </div>
                <div>
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Case Studies</a></li>
                        <li><a href="#">Whitepapers</a></li>
                        <li><a href="#">Webinars</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Consultancy</a></li>
                        <li><a href="#">Training Programmes</a></li>
                        <li><a href="#">Study-Tours</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Follow Us</h4>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="newsletter-form">
                        <input type="email" placeholder="Enter your email">
                        <button>Subscribe</button>
                        <button class="unsubscribe-btn">Unsubscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous"></script>
    <script>
        AOS.init({
            duration: 600,
            easing: 'ease-out',
            once: true
        });

        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;

        const setTheme = (theme) => {
            body.setAttribute('data-theme', theme);
            localStorage.setItem('theme', theme);
            const icon = theme === 'dark' ? 'fa-moon' : 'fa-sun';
            themeToggle.querySelector('i').classList.remove('fa-sun', 'fa-moon');
            themeToggle.querySelector('i').classList.add(icon);
        };

        const savedTheme = localStorage.getItem('theme') || 'light';
        setTheme(savedTheme);

        themeToggle.addEventListener('click', () => {
            const currentTheme = body.getAttribute('data-theme');
            setTheme(currentTheme === 'light' ? 'dark' : 'light');
        });

        const supportLink = document.getElementById('support-link');
        const footerDetailed = document.getElementById('footer-detailed');
        const closeFooter = document.getElementById('close-footer');
        supportLink.addEventListener('click', (e) => {
            e.preventDefault();
            footerDetailed.style.display = 'block';
        });
        closeFooter.addEventListener('click', () => {
            footerDetailed.style.display = 'none';
        });

        // Handle form submission
        document.getElementById('registrationForm').addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            const data = {
                fullName: formData.get('fullName'),
                email: formData.get('email'),
                phone: formData.get('phone'),
                jobTitle: formData.get('jobTitle'),
                company: formData.get('company'),
                service: formData.get('service')
            };
            console.log('Registration Data:', data);
            alert('Registration submitted successfully! Check console for details.');
            e.target.reset();
            bootstrap.Modal.getInstance(document.getElementById('registerModal')).hide();
        });
    </script>
</body>

</html>