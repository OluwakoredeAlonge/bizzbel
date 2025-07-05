<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bizzbel Data Intelligence</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Montserrat:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            --card-bg: #FFFFFF;
            --shadow-color: rgba(0, 0, 0, 0.1);
            --overlay-bg: rgba(0, 0, 0, 0.5);
            --hero-text: #FFFFFF;
        }

        [data-theme="dark"] {
            --primary-color: #4A90E2;
            --secondary-color: #00C4B4;
            --background-color: #121212;
            --text-color: #E0E0E0;
            --white: #1E1E1E;
            --accent-color: #FFCA28;
            --card-bg: #252525;
            --shadow-color: rgba(255, 255, 255, 0.15);
            --overlay-bg: rgba(0, 0, 0, 0.7);
            --hero-text: #F5F5F5;
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
        h3 {
            font-family: 'Montserrat', sans-serif;
            color: var(--primary-color);
        }

        .container {
            width: 90%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .testimonials .container {
            max-width: 1000px;
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
            /* color: var(--accent-color); */
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

        .hero-banner {
            position: relative;
            height: 600px;
            background: url('assets/banner.png') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--hero-text);
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
            padding: 0 20px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            color: var(--hero-text);
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.3rem;
            color: var(--hero-text);
            margin-bottom: 2rem;
        }

        .hero-content .btn {
            font-size: 1.2rem;
            padding: 1rem 2rem;
        }

        .service-highlights {
            position: relative;
            z-index: 3;
            margin-top: -100px;
        }

        .highlight-cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .highlight-card {
            background-color: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 4px 15px var(--shadow-color);
            text-align: center;
            padding: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .highlight-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px var(--shadow-color);
        }

        .highlight-card i {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .highlight-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .highlight-card p {
            font-size: 0.9rem;
            color: var(--text-color);
        }

        .main-content {
            padding: 4rem 0;
            text-align: center;
        }

        .main-card {
            background-color: var(--card-bg);
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px var(--shadow-color);
            margin-bottom: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .main-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px var(--shadow-color);
        }

        .main-card h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .main-card p {
            max-width: 800px;
            margin: 0 auto 2rem;
            font-size: 1.1rem;
            color: var(--text-color);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .stat-item.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .stat-item i {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .stat-item h3 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .stat-item p {
            color: var(--text-color);
        }

        .btn {
            background-color: var(--secondary-color);
            color: var(--white);
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            display: inline-block;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn:hover {
            background-color: #008B5B;
            transform: scale(1.05);
        }

        .btn-download {
            background-color: var(--primary-color);
            margin-left: 1rem;
        }

        .btn-download:hover {
            background-color: #002244;
        }

        .services {
            padding: 4rem 0;
            background-color: var(--card-bg);
        }

        .services h2 {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2.5rem;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            padding: 20px 0;
        }

        .category-card {
            position: relative;
            height: 200px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px var(--shadow-color);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            color: white;
        }

        .category-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px var(--shadow-color);
        }

        .category-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .category-card:hover img {
            transform: scale(1.1);
        }

        .category-title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            color: white;
            z-index: 1;
        }

        .download-section {
            text-align: center;
            margin-top: 3rem;
        }

        .consultancy {
            padding: 4rem 0;
            background-color: var(--background-color);
            text-align: center;
        }

        .consultancy h2 {
            margin-bottom: 1rem;
            font-size: 2.5rem;
        }

        .consultancy p {
            max-width: 800px;
            margin: 0 auto 2rem;
            color: var(--text-color);
        }

        .clients {
            padding: 4rem 0;
            text-align: center;
            background-color: var(--card-bg);
        }

        .clients h2 {
            margin-bottom: 2rem;
            font-size: 2.5rem;
        }

        .clients-carousel .carousel-item img {
            max-width: 100%;
            filter: grayscale(100%);
            transition: filter 0.3s, transform 0.3s;
        }

        .clients-carousel .carousel-item img:hover {
            filter: grayscale(0%);
            transform: scale(1.1);
        }

        .testimonials {
            padding: 4rem 0;
            background-color: var(--card-bg);
            text-align: center;
        }

        .testimonials h2 {
            margin-bottom: 2rem;
            font-size: 2.5rem;
        }

        .testimonial-carousel {
            position: relative;
            overflow: hidden;
        }

        .carousel-item .testimonial {
            padding: 2rem;
            background-color: var(--background-color);
            border-radius: 10px;
            box-shadow: 0 4px 10px var(--shadow-color);
        }

        .carousel-item p {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: var(--text-color);
        }

        .carousel-item cite {
            font-style: italic;
            color: var(--primary-color);
        }

        .carousel-indicators {
            bottom: -50px;
            margin-bottom: 0;
            padding: 0;
            list-style: none;
        }

        .carousel-indicators [data-bs-target] {
            background-color: var(--primary-color);
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 6px;
            border: none;
            text-indent: -9999px;
            overflow: hidden;
        }

        .carousel-indicators .active {
            background-color: var(--secondary-color);
        }

        .footer {
            position: relative;
            background-color: var(--primary-color);
            color: var(--white);
            padding: 0.5rem 0;
            text-align: center;
            transition: background-color 0.3s ease, color 0.3s ease;
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
            background-color: var(--primary-color);
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
            background-color: var(--secondary-color);
            color: var(--white);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background-color 0.3s, transform 0.3s;
        }

        .newsletter-form button:hover {
            background-color: #008B5B;
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

        @media (max-width: 1200px) {
            .categories-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .highlight-cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .navbar {
                background-color: var(--primary-color);
            }

            .navbar-brand img {
                width: 100px;
            }

            .categories-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .highlight-cards {
                grid-template-columns: 1fr;
                margin-top: 20px;
            }

            .service-highlights {
                margin-top: 0;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }

            .hero-banner {
                height: 400px;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-detailed .container {
                grid-template-columns: repeat(2, 1fr);
            }

            .newsletter-form {
                flex-direction: column;
                align-items: flex-start;
            }

            .newsletter-form input[type="email"] {
                width: 100%;
            }
        }

        @media (max-width: 600px) {
            .category-card {
                height: 150px;
            }

            .category-title {
                font-size: 1.2rem;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .hero-content .btn {
                font-size: 1rem;
                padding: 0.75rem 1.5rem;
            }

            .main-card {
                padding: 2rem;
            }

            .main-card h1 {
                font-size: 1.8rem;
            }

            .main-card p {
                font-size: 1rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .stat-item h3 {
                font-size: 1.5rem;
            }

            .stat-item i {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .category-card {
                height: 250px;
                width: auto;
            }

            .category-title {
                font-size: 1.2rem;
            }

            .navbar {
                background-color: var(--primary-color);
                padding: 0.5rem 0;
                /* Reduce navbar padding to minimize overlap */
            }

            .navbar-brand img {
                width: 80px;
            }

            .offcanvas-title img {
                width: 100px;
            }

            .categories-grid {
                grid-template-columns: 1fr;
            }

            .hero-banner {
                height: 400px;
                display: flex;
                align-items: center;
                /* Ensure vertical centering */
            }

            .hero-content {
                padding: 4.5rem 1rem 1rem;
                /* Increase top padding to clear navbar */
                max-width: 90%;
                /* Prevent text clipping */
                text-align: center;
            }

            .hero-content h1 {
                font-size: 1.8rem;
                /* Slightly smaller than 2rem for better fit */
                line-height: 1.2;
                /* Improve readability */
                margin-bottom: 0.8rem;
            }

            .hero-content p {
                font-size: 0.9rem;
                /* Adjust for smaller screens */
            }

            .hero-content .btn {
                font-size: 0.9rem;
                padding: 0.6rem 1.2rem;
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
                <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarOffcanvas"
                    aria-labelledby="navbarOffcanvasLabel">
                    <div class="offcanvas-header">
                        <a class="offcanvas-title" id="navbarOffcanvasLabel" href="index.php"><img
                                src="assets/logo.webp" alt="Bizzbel Data Intelligence Logo"></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-home"></i>
                                    Home</a></li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#training" id="trainingDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-chalkboard-teacher"></i> Training
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="trainingDropdown">
                                    <li><a class="dropdown-item" href="#">Instructor-led Programmes</a></li>
                                    <li><a class="dropdown-item" href="#">International Study-Tours</a></li>
                                    <li><a class="dropdown-item" href="#">Custom Training</a></li>
                                </ul>
                            </li> -->
                            <li class="nav-item"><a class="nav-link" href="aboutus.php"><i
                                        class="fas fa-info-circle"></i>
                                    About</a></li>
                            <li class="nav-item"><a class="nav-link" href="program.php"><i
                                        class="fas fa-graduation-cap"></i>
                                    Programs</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i>
                                    Contact</a></li>
                            <li class="nav-item"><span class="theme-toggle nav-link" id="theme-toggle"><i
                                        class="fas fa-sun"></i> Theme</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Citadel for Growth and Development</h1>
            <p>Transform your organization with cutting-edge training and strategic consultancy solutions tailored for
                success.</p>
            <a href="aboutus.php" class="btn btn-primary">Learn More</a>
        </div>
    </section>
    <section class="service-highlights">
        <div class="highlight-cards">
            <div class="highlight-card">
                <i class="fas fa-chalkboard-teacher"></i>
                <h3>Instructor-led Learning Programmes</h3>
                <p>Expert-led, interactive sessions designed for immediate skill enhancement and practical application.
                </p>
            </div>
            <div class="highlight-card">
                <i class="fas fa-globe"></i>
                <h3>International Study-Tour Programmes</h3>
                <p>Global learning experiences connecting you with industry leaders and best practices.</p>
            </div>
            <div class="highlight-card">
                <i class="fas fa-cogs"></i>
                <h3>Custom Training Programmes</h3>
                <p>Tailored solutions to meet your organization's unique goals and challenges.</p>
            </div>
            <div class="highlight-card">
                <i class="fas fa-chart-line"></i>
                <h3>Data-Driven Consulting</h3>
                <p>Actionable insights through advanced analytics to drive strategic success.</p>
            </div>
        </div>
    </section>
    <section class="main-content">
        <div class="container">
            <div class="main-card">
                <h1>Empowering Growth Through Knowledge and Strategy</h1>
                <p>Bizzbel Data Intelligence is a leading African firm dedicated to equipping organizations and
                    individuals with transformative knowledge, skills, and strategies. Our global partnerships and
                    innovative approaches ensure sustainable growth, inclusion, and impactful change.</p>
                <div class="stats-grid">
                    <div class="stat-item">
                        <i class="fas fa-users"></i>
                        <h3>15,000+</h3>
                        <p>Participants Trained</p>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-graduation-cap"></i>
                        <h3>32</h3>
                        <p>Years of Talent Development</p>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-globe"></i>
                        <h3>25</h3>
                        <p>Countries Reached</p>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-chart-line"></i>
                        <h3>82%</h3>
                        <p>Satisfaction Rate</p>
                    </div>
                </div>
                <a href="aboutus.php#whyus" class="btn btn-primary">Discover Our Impact</a>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <h2>Our Transformative Services</h2>
            <input type="text" class="form-control mb-3" placeholder="Search services..." id="service-search"
                aria-label="Search services">
            <div class="categories-grid">
                <a href="/services/instructor-led-learning" class="category-card">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="International Study-Tour Programmes">
                    <div class="category-title">Instructor-led Learning Programmes</div>
                </a>
                <a href="/services/international-study-tours" class="category-card">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="International Study-Tour Programmes">
                    <div class="category-title">International Study-Tour Programmes</div>
                </a>
                <a href="/services/custom-training" class="category-card">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="International Study-Tour Programmes">
                    <div class="category-title">Custom Training Programmes</div>
                </a>
                <a href="/services/data-driven-consulting" class="category-card">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="International Study-Tour Programmes">
                    <div class="category-title">Data-Driven Consulting</div>
                </a>
                <a href="/services/organizational-development" class="category-card">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="International Study-Tour Programmes">
                    <div class="category-title">Organizational Development Consulting</div>
                </a>
                <a href="/services/talent-management" class="category-card">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="Talent Management Solutions">
                    <div class="category-title">Talent Management Solutions</div>
                </a>
                <a href="/services/change-management" class="category-card">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="International Study-Tour Programmes">
                    <div class="category-title">Change Management Training</div>
                </a>
                <a href="/services/innovation-workshops" class="category-card">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="International Study-Tour Programmes">
                    <div class="category-title">Innovation Workshops</div>
                </a>
                <a href="/services/leadership-development" class="category-card">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="International Study-Tour Programmes">
                    <div class="category-title">Leadership Development</div>
                </a>
                <a href="/services/digital-transformation" class="category-card">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="Digital Transformation">
                    <div class="category-title">Digital Transformation</div>
                </a>
            </div>
            <div class="download-section">
                <a href="#" class="btn btn-download">Download Training Schedule (3MB)</a>
            </div>
        </div>
    </section>
    <section class="consultancy">
        <div class="container">
            <h2>Empowering Business Transformation</h2>
            <p>Our expert consultants deliver data-driven strategies and innovative solutions to address complex
                challenges, fostering sustainable growth and organizational excellence across diverse industries.</p>
            <a href="#" class="btn btn-primary">Explore Transformation Solutions</a>
        </div>
    </section>
    <section class="clients">
        <div class="container">
            <h2>Trusted by Global Leaders</h2>
            <div id="clientsCarousel" class="carousel slide clients-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/CSDALogo.png" alt="World Bank Logo">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/IBSLogo.png" alt="African Development Bank Logo">
                    </div>
                    <!-- <div class="carousel-item">
                        <img src="assets/NG-Cares.jpg"
                            alt="Government of Nigeria Logo">
                    </div> -->
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/300x150?text=UNDP" alt="UNDP Logo">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/300x150?text=Global+Corp" alt="Global Corp Logo">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/300x150?text=Tech+Innovations"
                            alt="Tech Innovations Logo">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#clientsCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#clientsCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="container">
            <h2>Voices of Success</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial">
                            <p>"Bizzbel's training revolutionized our approach to strategic planning, delivering
                                measurable outcomes."</p>
                            <cite>– Dr. Amina Bello, CEO, Zenith Solutions</cite>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial">
                            <p>"The international study-tour was a game-changer, connecting us with global best
                                practices."</p>
                            <cite>– James Okoye, HR Director, Apex Corp</cite>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial">
                            <p>"Their custom programmes perfectly aligned with our unique needs, driving real impact."
                            </p>
                            <cite>– Sarah Mwangi, Consultant, Horizon Group</cite>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>
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
    <script>
        // Theme toggle functionality
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

        // Stats animation
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statItems = document.querySelectorAll('.stat-item');
                    statItems.forEach((item, index) => {
                        setTimeout(() => {
                            item.classList.add('animate');
                        }, index * 200);
                    });
                    statsObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });
        statsObserver.observe(document.querySelector('.main-card'));

        // Footer toggle
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

        // Search functionality for Transformative Services
        const searchInput = document.getElementById('service-search');
        const categoryCards = document.querySelectorAll('.category-card');

        searchInput.addEventListener('input', () => {
            const searchTerm = searchInput.value.toLowerCase().trim();
            categoryCards.forEach(card => {
                const title = card.querySelector('.category-title').textContent.toLowerCase();
                if (title.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>