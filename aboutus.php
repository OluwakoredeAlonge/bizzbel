<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Learn about Bizzbel Data Intelligence, a leading African firm dedicated to transformative training and data-driven consultancy for sustainable growth.">
    <meta name="keywords"
        content="Bizzbel Data Intelligence, About Us, consultancy, training, Africa, data-driven solutions">
    <title>About Us - Bizzbel Data Intelligence</title>
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

        .hero-banner {
            position: relative;
            height: 600px;
            background: url('assets/banner.png') no-repeat center center/cover;
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
            padding: 2rem;
            min-height: 250px;
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

        .section {
            padding: 5rem 0;
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease forwards;
            animation-delay: 0.2s;
        }

        .section h2 {
            font-size: 2.8rem;
            margin-bottom: 2.5rem;
        }

        .story,
        .values,
        .team,
        .why-us {
            background: linear-gradient(145deg, var(--card-bg), var(--white));
            padding: 3.5rem;
            border-radius: 12px;
            box-shadow: 0 6px 20px var(--shadow-color);
            margin-bottom: 3rem;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        [data-theme="dark"] .story,
        [data-theme="dark"] .values,
        [data-theme="dark"] .team,
        [data-theme="dark"] .why-us {
            background: linear-gradient(145deg, var(--card-bg), #2E2E2E);
        }

        .story:hover,
        .values:hover,
        .team:hover,
        .why-us:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px var(--shadow-color);
        }

        .story p {
            max-width: 800px;
            margin: 0 auto 1.5rem;
            font-size: 1.1rem;
            color: var(--text-color);
        }

        .story h3 {
            font-size: 2rem;
            margin: 2rem 0 1rem;
            color: var(--primary-color);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2.5rem;
        }

        .value-card {
            padding: 2rem;
            background: var(--white);
            border-radius: 10px;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        [data-theme="dark"] .value-card {
            background: #2E2E2E;
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px var(--shadow-color);
        }

        .value-card i {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
        }

        .values-grid h3 {
            font-size: 1.7rem;
            margin-bottom: 0.75rem;
        }

        .value-card p {
            font-size: 1rem;
            color: var(--text-color);
        }

        .why-us-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2.5rem;
            margin-bottom: 3rem;
        }

        .why-us-item {
            padding: 2rem;
            background: var(--white);
            border-radius: 10px;
            transition: transform 0.4s ease, box-shadow 0.4s ease, opacity 0.5s ease;
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
        }

        .why-us-item.animate {
            opacity: 1;
            transform: translateY(0);
        }

        [data-theme="dark"] .why-us-item {
            background: #2E2E2E;
        }

        .why-us-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px var(--shadow-color);
        }

        .why-us-item i {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
        }

        .why-us-item h3 {
            font-size: 1.7rem;
            margin-bottom: 0.75rem;
        }

        .why-us-item p {
            font-size: 1rem;
            color: var(--text-color);
        }

        .impact {
            margin-top: 3rem;
        }

        .impact h3 {
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
        }

        .impact-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2.5rem;
        }

        .impact-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .impact-item.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .impact-item i {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
        }

        .impact-item h3 {
            font-size: 2.2rem;
            margin-bottom: 0.75rem;
        }

        .impact-item p {
            font-size: 1rem;
            color: var(--text-color);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2.5rem;
        }

        .team-member {
            padding: 2rem;
            background: var(--white);
            border-radius: 10px;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        [data-theme="dark"] .team-member {
            background: #2E2E2E;
        }

        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px var(--shadow-color);
        }

        .team-member img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            display: block;
        }

        .team-member h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .team-member p {
            font-size: 1rem;
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

        .cta-section {
            padding: 4rem 0;
            background: linear-gradient(135deg, var(--background-color), var(--white));
            text-align: center;
        }

        [data-theme="dark"] .cta-section {
            background: linear-gradient(135deg, var(--background-color), #2E2E2E);
        }

        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .cta-section p {
            max-width: 700px;
            margin: 0 auto 2rem;
            font-size: 1.2rem;
            color: var(--text-color);
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
            background: linear-gradient(90deg, var(--secondary-color), #00C4B4);
            color: var(--white);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background 0.3s, transform 0.3s;
        }

        .newsletter-form a:hover {
            background: linear-gradient(90deg, #008B5B, #00A86B);
            transform: scale(1.05);
        }

        .newsletter-form .unsubscribe-btn {
            background: none;
            color: red;
            text-decoration: underline;
            padding: 0.6rem 0;
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

        @media (max-width: 768px) {
            .navbar {
                background-color: var(--primary-color);
            }

            .navbar-brand img {
                width: 100px;
            }

            .hero-banner {
                height: 400px;
            }

            .hero-content {
                padding: 1.5rem;
                min-height: 200px;
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
                font-size: 2.2rem;
            }

            .story,
            .values,
            .team,
            .why-us {
                padding: 2.5rem;
            }

            /* Specific styles for Why Us section */
            .why-us-grid {
                display: grid;
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .why-us-item {
                display: block;
                opacity: 1;
                transform: translateY(0);
                padding: 1.5rem;
                background: var(--white);
                border-radius: 8px;
                text-align: center;
                transition: transform 0.4s ease, box-shadow 0.4s ease;
            }

            [data-theme="dark"] .why-us-item {
                background: #2E2E2E;
            }

            .why-us-item h3 {
                font-size: 1.4rem;
                margin-bottom: 0.5rem;
            }

            .why-us-item p {
                font-size: 0.9rem;
            }

            .why-us-item i {
                font-size: 2.5rem;
                margin-bottom: 1rem;
            }

            .why-us-item.animate {
                opacity: 1;
                transform: translateY(0);
            }

            /* Specific styles for Values section */
            .values-grid {
                display: grid;
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .value-card {
                display: block;
                padding: 1.5rem;
                background: var(--white);
                border-radius: 8px;
                text-align: center;
                transition: transform 0.4s ease, box-shadow 0.4s ease;
            }

            [data-theme="dark"] .value-card {
                background: #2E2E2E;
            }

            .value-card h3 {
                font-size: 1.4rem;
                margin-bottom: 0.5rem;
            }

            .value-card p {
                font-size: 0.9rem;
            }

            .value-card i {
                font-size: 2.5rem;
                margin-bottom: 1rem;
            }

            .team-grid,
            .impact-grid {
                grid-template-columns: 1fr;
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

        @media (max-width: 576px) {
            .navbar-brand img {
                width: 80px;
            }

            .offcanvas-title img {
                width: 100px;
            }

            .hero-content {
                padding: 1rem;
                min-height: 180px;
            }

            .hero-content h1 {
                font-size: 1.5rem;
                line-height: 1.3;
            }

            .hero-content p {
                font-size: 0.85rem;
                line-height: 1.4;
            }

            .impact-grid {
                grid-template-columns: 1fr;
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

            .story p {
                font-size: 1rem;
            }

            .value-card h3,
            .team-member h3 {
                font-size: 1.4rem;
            }

            .impact-item h3 {
                font-size: 1.8rem;
            }

            .impact-item i {
                font-size: 2.5rem;
            }

            .team-member img {
                width: 150px;
                height: 150px;
            }

            .why-us-item h3 {
                font-size: 1.4rem;
            }

            .why-us-item i {
                font-size: 2.5rem;
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
            <h1>Empowering Africa's Future Through Knowledge and Strategy</h1>
            <p>Discover how Bizzbel Data Intelligence drives transformative growth with innovative training and
                consultancy.</p>
        </div>
    </section>
    <section class="section story" id="story">
        <div class="container">
            <h2>Our Story</h2>
            <p>Founded in 1993, Bizzbel Data Intelligence emerged to bridge the knowledge gap in African organizations,
                equipping them with the skills and strategies needed to thrive in a global economy. Our mission is to
                empower organizations and individuals with cutting-edge training and data-driven consultancy for
                sustainable growth.</p>
            <p>With a vision to be Africa’s premier partner in fostering innovation, inclusion, and competitiveness,
                we’ve grown to serve over 25 countries, partnering with global leaders to deliver impactful solutions.
            </p>
            <h3>Our Approach</h3>
            <p>At Bizzbel, we combine global best practices with localized expertise to deliver tailored solutions. Our
                process begins with a thorough assessment of your needs, followed by designing customized training or
                consultancy programs. We deliver with precision and evaluate outcomes to ensure lasting impact.</p>
            <p>Our data-driven approach, backed by advanced analytics and global partnerships, sets us apart in
                fostering sustainable growth and organizational excellence.</p>
        </div>
    </section>
    <section class="section values">
        <div class="container">
            <h2>Our Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Innovation</h3>
                    <p>We leverage cutting-edge technologies and methodologies to deliver transformative solutions.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Integrity</h3>
                    <p>We uphold honesty and transparency in every partnership and project we undertake.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-users"></i>
                    <h3>Inclusion</h3>
                    <p>We champion diversity and ensure our solutions empower all communities.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-star"></i>
                    <h3>Excellence</h3>
                    <p>We strive for the highest standards in training and consultancy delivery.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section why-us" id="whyus">
        <div class="container">
            <h2>Why Choose Us</h2>
            <p>At Bizzbel Data Intelligence, we stand out through our commitment to innovation, integrity, and
                excellence. Our unique blend of global expertise and local insights allows us to deliver tailored
                solutions that drive real results. Here’s why organizations across Africa choose us:</p>
            <div class="why-us-grid">
                <div class="why-us-item">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h3>Customized Training and Consultancy</h3>
                    <p>Tailored programs to meet your specific organizational needs.</p>
                </div>
                <div class="why-us-item">
                    <i class="fas fa-chart-bar"></i>
                    <h3>Data-Driven Solutions</h3>
                    <p>Leveraging advanced analytics to deliver actionable insights.</p>
                </div>
                <div class="why-us-item">
                    <i class="fas fa-globe-africa"></i>
                    <h3>Global Expertise, Local Impact</h3>
                    <p>Combining international best practices with deep understanding of African markets.</p>
                </div>
                <div class="why-us-item">
                    <i class="fas fa-check-circle"></i>
                    <h3>Proven Success</h3>
                    <p>Over 30 years of empowering organizations across Africa.</p>
                </div>
            </div>
            <div class="impact">
                <h3>Our Impact</h3>
                <div class="impact-grid">
                    <div class="impact-item">
                        <i class="fas fa-users"></i>
                        <h3>15,000+</h3>
                        <p>Participants Trained</p>
                    </div>
                    <div class="impact-item">
                        <i class="fas fa-graduation-cap"></i>
                        <h3>32</h3>
                        <p>Years of Talent Development</p>
                    </div>
                    <div class="impact-item">
                        <i class="fas fa-globe"></i>
                        <h3>25</h3>
                        <p>Countries Reached</p>
                    </div>
                    <div class="impact-item">
                        <i class="fas fa-chart-line"></i>
                        <h3>82%</h3>
                        <p>Satisfaction Rate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section team">
        <div class="container">
            <h2>Our Team</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="Dr. Amina Bello">
                    <h3>Dr. Amina Bello</h3>
                    <p>CEO & Founder</p>
                    <p>With over 20 years of experience in strategic consultancy, Dr. Bello leads Bizzbel with a passion
                        for transformative growth.</p>
                </div>
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="James Okoye">
                    <h3>James Okoye</h3>
                    <p>Head of Training</p>
                    <p>James designs innovative training programs, drawing on his expertise in global education trends.
                    </p>
                </div>
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="Sarah Mwangi">
                    <h3>Sarah Mwangi</h3>
                    <p>Chief Consultant</p>
                    <p>Sarah drives data-driven solutions, helping clients achieve measurable results across industries.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Transform Your Organization?</h2>
            <p>Contact us today to explore how Bizzbel Data Intelligence can empower your team with innovative training
                and strategic consultancy.</p>
            <a href="contact.html" class="btn btn-primary">Get in Touch</a>
        </div>
    </section>
    <?php require_once('partials/footer.php'); ?>
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

        // Impact animation
        const impactObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const impactItems = document.querySelectorAll('.impact-item');
                    impactItems.forEach((item, index) => {
                        setTimeout(() => {
                            item.classList.add('animate');
                        }, index * 200);
                    });
                    impactObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });
        impactObserver.observe(document.querySelector('.impact'));

        // Why Us animation
        const whyUsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const whyUsItems = document.querySelectorAll('.why-us-item');
                    whyUsItems.forEach((item, index) => {
                        setTimeout(() => {
                            item.classList.add('animate');
                        }, index * 200);
                    });
                    whyUsObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });
        whyUsObserver.observe(document.querySelector('.why-us'));

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
    </script>
</body>

</html>