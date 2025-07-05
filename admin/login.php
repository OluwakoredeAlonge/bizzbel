<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Log in to your Bizzbel Data Intelligence admin account.">
    <meta name="keywords" content="Bizzbel Data Intelligence, Admin Login, admin access">
    <title>Admin Login - Bizzbel Data Intelligence</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            --warning-color: #dc3545;
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
            --warning-color: #f5365c;
        }

        html,
        body {
            overflow-x: hidden;
            min-height: 100vh;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: var(--text-color);
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            line-height: 1.6;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        [data-theme="dark"] body {
            background: var(--background-color);
        }

        h2 {
            font-family: 'Montserrat', sans-serif;
            color: var(--text-color);
        }

        [data-theme="dark"] h2 {
            color: var(--text-color);
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 0 auto;
        }

        .form-container {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px var(--shadow-color);
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        [data-theme="dark"] .form-container {
            background: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px var(--shadow-color);
        }

        .form-container h2 {
            font-size: 2.2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            position: relative;
        }

        .form-container input {
            padding: 1.2rem 3rem 1.2rem 1.2rem;
            border: 1px solid var(--text-color);
            border-radius: 8px;
            background-color: var(--white);
            color: var(--text-color);
            font-size: 1.1rem;
            width: 100%;
            box-sizing: border-box;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        .form-container input:focus {
            outline: none;
            border-color: var(--accent-color);
            background-color: var(--white);
        }

        [data-theme="dark"] .form-container input {
            background-color: #3A3A3A;
            border-color: var(--text-color);
        }

        [data-theme="dark"] .form-container input:focus {
            background-color: #4A4A4A;
            border-color: var(--accent-color);
        }

        .form-container button {
            background: var(--primary-color);
            color: var(--white);
            padding: 1.2rem;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background 0.4s, transform 0.4s, box-shadow 0.4s;
        }

        .form-container button:hover {
            background: var(--accent-color);
            color: var(--text-color);
            transform: scale(1.03);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        [data-theme="dark"] .form-container button:hover {
            box-shadow: 0 4px 20px rgba(255, 255, 255, 0.2);
        }

        .form-message {
            margin-top: 1rem;
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
            display: none;
        }

        .form-message.success {
            background-color: var(--primary-color);
            color: var(--white);
        }

        .form-message.error {
            background-color: var(--warning-color);
            color: var(--white);
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--text-color);
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .password-toggle:hover {
            color: var(--accent-color);
        }

        [data-theme="dark"] .password-toggle {
            color: var(--text-color);
        }

        .theme-toggle {
            position: fixed;
            top: 1.5rem;
            right: 1.5rem;
            color: var(--white);
            background: rgba(0, 0, 0, 0.3);
            padding: 0.8rem;
            border-radius: 50%;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background 0.3s, color 0.3s;
            z-index: 1000;
        }

        .theme-toggle:hover {
            background: var(--accent-color);
            color: var(--text-color);
        }

        [data-theme="dark"] .theme-toggle {
            color: var(--text-color);
            background: rgba(255, 255, 255, 0.2);
        }

        .form-footer {
            margin-top: 1.5rem;
            font-size: 1rem;
            text-align: center;
        }

        .form-footer a {
            color: var(--primary-color);
            text-decoration: underline;
            transition: color 0.3s;
        }

        .form-footer a:hover {
            color: var(--accent-color);
        }

        @media (max-width: 576px) {
            .container {
                width: 95%;
            }

            .form-container {
                padding: 2rem;
            }

            .form-container h2 {
                font-size: 1.8rem;
                margin-bottom: 1.5rem;
            }

            .form-container input {
                font-size: 1rem;
                padding: 1rem 2.5rem 1rem 1rem;
            }

            .form-container button {
                font-size: 1.1rem;
                padding: 1rem;
            }

            .password-toggle {
                font-size: 1.1rem;
                right: 10px;
            }

            .theme-toggle {
                top: 1rem;
                right: 1rem;
                font-size: 1rem;
                padding: 0.6rem;
            }

            .form-footer {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body data-theme="light">
    <span class="theme-toggle" id="theme-toggle"><i class="fas fa-sun"></i></span>
    <div class="container">
        <div class="form-container">
            <h2>Admin Login</h2>
            <form id="login-form" action="login.html" method="POST">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" required aria-label="Email Address">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Password" required aria-label="Password">
                    <i class="fas fa-eye password-toggle" id="password-toggle"></i>
                </div>
                <input type="text" name="honeypot" style="display: none;" aria-hidden="true">
                <button type="submit">Log In</button>
            </form>
            <div class="form-message" id="form-message"></div>
            <div class="form-footer">
                Don't have an account? <a href="register.html">Register</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

        // Password visibility toggle
        const passwordInput = document.getElementById('password');
        const passwordToggle = document.getElementById('password-toggle');

        passwordToggle.addEventListener('click', () => {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            passwordToggle.classList.toggle('fa-eye');
            passwordToggle.classList.toggle('fa-eye-slash');
        });

        // Form validation and submission
        const loginForm = document.getElementById('login-form');
        const formMessage = document.getElementById('form-message');

        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(loginForm);
            const honeypot = formData.get('honeypot');

            if (honeypot !== '') {
                // Bot detected, ignore submission
                return;
            }

            const email = formData.get('email');
            const password = formData.get('password');

            // Client-side validation
            if (!email || !password) {
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

            // Placeholder for backend submission
            fetch('login.html', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                // Simulate server response
                return {
                    status: 'success',
                    message: 'Login successful! Redirecting to admin dashboard...'
                };
            })
            .then(data => {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: data.message,
                    timer: 3000,
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = 'admin-dashboard.html'; // Replace with actual dashboard URL
                });
                loginForm.reset();
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'An error occurred. Please try again later.',
                    timer: 3000,
                    showConfirmButton: false
                });
            });
        });
    </script>
</body>
</html>