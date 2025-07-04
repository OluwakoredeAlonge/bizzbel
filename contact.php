<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Contact Bizzbel Data Intelligence for innovative training and data-driven consultancy services across Africa.">
    <meta name="keywords"
        content="Bizzbel Data Intelligence, Contact Us, consultancy, training, Africa, data-driven solutions">
    <title>Contact Us - Bizzbel Data Intelligence</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Montserrat:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"> -->
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="assets/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/favicon/apple-touch-icon.png" sizes="180x180">
    <style>
        :root {
            --primary-color: #003087;
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
            box-sizing: border-box;
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
        }

        .section h2 {
            font-size: 2.8rem;
            margin-bottom: 2.5rem;
        }

        .contact-section {
            background: linear-gradient(145deg, var(--card-bg), var(--white));
            padding: 3.5rem;
            border-radius: 12px;
            box-shadow: 0 6px 20px var(--shadow-color);
            margin-bottom: 3rem;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        [data-theme="dark"] .contact-section {
            background: linear-gradient(145deg, var(--card-bg), #2E2E2E);
        }

        .contact-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px var(--shadow-color);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
            min-height: 400px;
            box-sizing: border-box;
        }

        .contact-form-container,
        .contact-info-container {
            padding: 2rem;
            background: var(--white);
            border-radius: 10px;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            box-sizing: border-box;
        }

        [data-theme="dark"] .contact-form-container,
        [data-theme="dark"] .contact-info-container {
            background: #2E2E2E;
        }

        .contact-form-container:hover,
        .contact-info-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px var(--shadow-color);
        }

        .contact-form-container form {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        .contact-form-container input,
        .contact-form-container textarea {
            padding: 1rem;
            border: none;
            border-bottom: 2px solid var(--text-color);
            background-color: var(--background-color);
            color: var(--text-color);
            font-size: 1.1rem;
            width: 100%;
            box-sizing: border-box;
            transition: border-bottom-color 0.3s ease, background-color 0.3s ease;
        }

        .contact-form-container input:focus,
        .contact-form-container textarea:focus {
            outline: none;
            border-bottom-color: var(--accent-color);
            background-color: var(--white);
        }

        [data-theme="dark"] .contact-form-container input,
        [data-theme="dark"] .contact-form-container textarea {
            background-color: #3A3A3A;
            border-bottom-color: var(--text-color);
        }

        [data-theme="dark"] .contact-form-container input:focus,
        [data-theme="dark"] .contact-form-container textarea:focus {
            background-color: #4A4A4A;
            border-bottom-color: var(--accent-color);
        }

        .contact-form-container textarea {
            resize: vertical;
            min-height: 150px;
        }

        .contact-form-container button {
            background: var(--primary-color);
            color: var(--white);
            padding: 1rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.4s, transform 0.4s, box-shadow 0.4s;
        }

        .contact-form-container button:hover {
            background: var(--accent-color);
            color: var(--text-color);
            transform: scale(1.05);
            box-shadow: 0 4px 15px var(--shadow-color);
        }

        .form-message {
            margin-top: 1rem;
            padding: 1rem;
            border-radius: 5px;
            display: none;
        }

        .form-message.success {
            background-color: var(--primary-color);
            color: var(--white);
        }

        .form-message.error {
            background-color: #ff4d4d;
            color: var(--white);
        }

        .contact-info-container h3 {
            font-size: 1.7rem;
            margin-bottom: 1.5rem;
        }

        .contact-info-container p {
            font-size: 1rem;
            color: var(--text-color);
            margin-bottom: 1rem;
        }

        .contact-info-container .social {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            margin-top: 2rem;
        }

        .contact-info-container .social a {
            font-size: 2rem;
            color: var(--primary-color);
            transition: color 0.3s;
        }

        .contact-info-container .social a:hover {
            color: var(--accent-color);
        }

        .map-container {
            margin-top: 2rem;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px var(--shadow-color);
        }

        .map-container iframe {
            width: 100%;
            height: 300px;
            border: none;
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

            .contact-section {
                padding: 2rem;
                margin: 0;
                border-radius: 0;
                box-shadow: none;
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
                min-height: auto;
            }

            .contact-form-container,
            .contact-info-container {
                width: 100%;
                margin: 0 -1rem;
                padding: 2rem;
                border-radius: 0;
                box-shadow: 0 2px 8px var(--shadow-color);
                min-height: auto;
            }

            .contact-form-container form {
                gap: 1.2rem;
            }

            .contact-form-container input,
            .contact-form-container textarea {
                padding: 1rem;
                font-size: 1.1rem;
            }

            .contact-form-container button {
                padding: 1rem;
                font-size: 1.1rem;
            }

            .contact-info-container h3 {
                font-size: 1.6rem;
            }

            .contact-info-container p {
                font-size: 1.1rem;
            }

            .contact-info-container .social {
                gap: 1.8rem;
            }

            .contact-info-container .social a {
                font-size: 1.8rem;
            }

            .map-container iframe {
                height: 250px;
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

            .contact-section {
                padding: 1.5rem 0;
                margin: 0;
            }

            .contact-form-container,
            .contact-info-container {
                padding: 1.5rem;
                margin: 0 -0.5rem;
                box-shadow: 0 2px 6px var(--shadow-color);
            }

            .contact-form-container input,
            .contact-form-container textarea {
                font-size: 1rem;
            }

            .contact-form-container button {
                font-size: 1rem;
            }

            .contact-info-container h3 {
                font-size: 1.4rem;
            }

            .contact-info-container p {
                font-size: 1rem;
            }

            .contact-info-container .social a {
                font-size: 1.5rem;
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
            <h1>Get in Touch with Bizzbel Data Intelligence</h1>
            <p>We're here to help you unlock your organization's potential with tailored training and consultancy
                solutions.</p>
        </div>
    </section>
    <section class="section contact-section">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-grid">
                <div class="contact-form-container" data-aos="fade-up" data-aos-offset="100">
                    <form id="contact-form" action="contactus.html" method="POST">
                        <input type="text" name="name" placeholder="Your Name" required aria-label="Your Name">
                        <input type="email" name="email" placeholder="Your Email" required aria-label="Your Email">
                        <input type="tel" name="phone" placeholder="Your Phone" aria-label="Your Phone">
                        <input type="text" name="subject" placeholder="Subject" aria-label="Subject">
                        <textarea name="message" placeholder="Your Message" required
                            aria-label="Your Message"></textarea>
                        <input type="text" name="honeypot" style="display: none;" aria-hidden="true">
                        <button type="submit">Send Message</button>
                    </form>
                    <div class="form-message" id="form-message"></div>
                </div>
                <div class="contact-info-container" data-aos="fade-up" data-aos-offset="100" data-aos-delay="200">
                    <h3>Our Contact Details</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Innovation Hub, Lagos, Nigeria</p>
                    <p><i class="fas fa-phone"></i> +234 123 456 7890</p>
                    <p><i class="fas fa-envelope"></i> info@bizzbel.com</p>
                    <div class="social">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.952912260219!2d3.3752957!3d6.5274063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b2ae682ca7d%3A0x4b8b2a3b7b8b2b!2sLagos%2C%20Nigeria!5e0!3m2!1sen!2sng!4v16987654321!5m2!1sen!2sng"
                            allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <?php require_once('partials/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 600,
            easing: 'ease-out',
            once: true
        });

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

        // Form validation and submission
        const contactForm = document.getElementById('contact-form');
        const formMessage = document.getElementById('form-message');

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(contactForm);
            const honeypot = formData.get('honeypot');

            if (honeypot !== '') {
                // Bot detected, ignore submission
                return;
            }

            const name = formData.get('name');
            const email = formData.get('email');
            const subject = formData.get('subject');
            const message = formData.get('message');

            // Basic client-side validation
            if (!name || !email || !message) {
                formMessage.classList.add('error');
                formMessage.textContent = 'Please fill in all required fields.';
                formMessage.style.display = 'block';
                setTimeout(() => {
                    formMessage.style.display = 'none';
                    formMessage.classList.remove('error');
                }, 3000);
                return;
            }

            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                formMessage.classList.add('error');
                formMessage.textContent = 'Please enter a valid email address.';
                formMessage.style.display = 'block';
                setTimeout(() => {
                    formMessage.style.display = 'none';
                    formMessage.classList.remove('error');
                }, 3000);
                return;
            }

            // Submit form via fetch
            fetch('contactus.html', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    formMessage.classList.add(data.status);
                    formMessage.textContent = data.message;
                    formMessage.style.display = 'block';
                    if (data.status === 'success') {
                        contactForm.reset();
                    }
                    setTimeout(() => {
                        formMessage.style.display = 'none';
                        formMessage.classList.remove(data.status);
                    }, 3000);
                })
                .catch(error => {
                    formMessage.classList.add('error');
                    formMessage.textContent = 'An error occurred. Please try again later.';
                    formMessage.style.display = 'block';
                    setTimeout(() => {
                        formMessage.style.display = 'none';
                        formMessage.classList.remove('error');
                    }, 3000);
                });
        });
    </script>
</body>

</html>