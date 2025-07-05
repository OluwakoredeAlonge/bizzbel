<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview - Bizzbel Data Intelligence</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Montserrat:wght@700&display=stylesheet" rel="stylesheet">
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
            --muted-text: #6C757D;
        }

        [data-theme="dark"] {
            --primary-color: #66B2FF;
            --secondary-color: #00C4B4;
            --background-color: #121212;
            --text-color: #E0E0E0;
            --white: #1E1E1E;
            --accent-color: #FFCA28;
            --card-bg: #252525;
            --shadow-color: rgba(255, 255, 255, 0.15);
            --muted-text: #A0A0A0;
        }

        [data-theme="dark"] h1,
        [data-theme="dark"] h2,
        [data-theme="dark"] h3 {
            color: var(--muted-text);
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: var(--text-color);
            background-color: var(--background-color);
            line-height: 1.6;
            min-height: 100vh;
            margin: 0;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        h1, h2, h3 {
            font-family: 'Montserrat', sans-serif;
            color: var(--primary-color);
        }

        .sidebar {
            background-color: var(--card-bg);
            box-shadow: 0 4px 15px var(--shadow-color);
            height: 100vh;
            position: fixed;
            width: 250px;
            top: 0;
            left: 0;
            z-index: 1000;
            transition: transform 0.3s ease;
        }

        .sidebar img {
            width: 150px;
            margin: 1rem auto;
            display: block;
        }

        .sidebar .nav-link {
            color: var(--text-color);
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            transition: background-color 0.3s, color 0.3s;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: var(--background-color);
            color: var(--accent-color);
        }

        .sidebar .nav-link i {
            margin-right: 0.5rem;
        }

        .sidebar .close-sidebar {
            display: none;
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 1.5rem;
            color: var(--text-color);
            background: none;
            border: none;
            cursor: pointer;
            transition: color 0.3s;
        }

        .sidebar .close-sidebar:hover {
            color: var(--accent-color);
        }

        .content {
            margin-left: 250px;
            padding: 2rem;
            transition: margin-left 0.3s ease;
        }

        .card {
            background-color: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 4px 15px var(--shadow-color);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px var(--shadow-color);
        }

        .card-body {
            padding: 1rem;
        }

        .card-title {
            font-size: 1.2rem;
        }

        .card-text {
            font-size: 0.9rem;
        }

        .card-text.text-muted {
            color: var(--muted-text) !important;
        }

        .btn-primary {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: #008B5B;
            border-color: #008B5B;
            transform: scale(1.05);
        }

        .card-icon {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 0.75rem;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-250px);
                width: 200px;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .sidebar .close-sidebar {
                display: block;
            }

            .content {
                margin-left: 0;
            }

            .sidebar img {
                width: 120px;
            }
        }

        @media (max-width: 576px) {
            .content {
                padding: 1rem;
            }

            .card {
                padding: 0.75rem;
            }

            .card-title {
                font-size: 1rem;
            }

            .card-icon {
                font-size: 1.2rem;
            }

            .sidebar .nav-link {
                font-size: 0.7rem;
            }
        }
    </style>
</head>
<body data-theme="light">
    <div class="d-flex">
        <!-- Sidebar -->
        <?php require_once('partials/sidebar.php'); ?>
        <!-- Main Content -->
        <div class="content flex-grow-1">
            <!-- Toggle Sidebar Button for Mobile -->
            <button class="btn btn-primary d-md-none mb-3" id="toggle-sidebar"><i class="fas fa-bars"></i> Menu</button>
            <!-- Overview Section -->
            <div class="section">
                <h1 class="display-5 fw-bold mb-4">Admin Overview</h1>
                <div class="row g-4">
                    <!-- Add Service Card -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-cogs card-icon"></i>
                                <h3 class="card-title mb-2">Add Service</h3>
                                <p class="card-text text-muted">Create a new service offering for Bizzbel Data Intelligence.</p>
                                <a href="service.php" class="btn btn-primary btn-sm"><i class="fas fa-plus me-2"></i>Go to Add Service</a>
                            </div>
                        </div>
                    </div>
                    <!-- Manage Services Card -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-list card-icon"></i>
                                <h3 class="card-title mb-2">Manage Services</h3>
                                <p class="card-text text-muted">Edit or delete existing services offered by Bizzbel.</p>
                                <a href="manage-services.php" class="btn btn-primary btn-sm"><i class="fas fa-list me-2"></i>Go to Manage Services</a>
                            </div>
                        </div>
                    </div>
                    <!-- Manage Registrations Card -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-user-plus card-icon"></i>
                                <h3 class="card-title mb-2">Manage Registrations</h3>
                                <p class="card-text text-muted">View and manage user registrations for services.</p>
                                <a href="manage-registrations.php" class="btn btn-primary btn-sm"><i class="fas fa-user-plus me-2"></i>Go to Manage Registrations</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add Client Card -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-users card-icon"></i>
                                <h3 class="card-title mb-2">Add Client</h3>
                                <p class="card-text text-muted">Add a new client to the Bizzbel portfolio.</p>
                                <a href="client.php" class="btn btn-primary btn-sm"><i class="fas fa-plus me-2"></i>Go to Add Client</a>
                            </div>
                        </div>
                    </div>
                    <!-- Manage Testimonials Card -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-quote-left card-icon"></i>
                                <h3 class="card-title mb-2">Manage Testimonials</h3>
                                <p class="card-text text-muted">Review and update client testimonials for the website.</p>
                                <a href="testimonial.php" class="btn btn-primary btn-sm"><i class="fas fa-quote-left me-2"></i>Go to Manage Testimonials</a>
                            </div>
                        </div>
                    </div>
                    <!-- Manage Contact Inquiries Card -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope card-icon"></i>
                                <h3 class="card-title mb-2">Manage Contact Inquiries</h3>
                                <p class="card-text text-muted">Respond to or manage inquiries from the contact form.</p>
                                <a href="contact.php" class="btn btn-primary btn-sm"><i class="fas fa-envelope me-2"></i>Go to Manage Contact Inquiries</a>
                            </div>
                        </div>
                    </div>
                    <!-- Manage Team & Impact Card -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-users-cog card-icon"></i>
                                <h3 class="card-title mb-2">Manage Team & Impact</h3>
                                <p class="card-text text-muted">Update team member details and impact statistics.</p>
                                <a href="team.php" class="btn btn-primary btn-sm"><i class="fas fa-users-cog me-2"></i>Go to Manage Team & Impact</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add Admin Card -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-user-shield card-icon"></i>
                                <h3 class="card-title mb-2">Add Admin</h3>
                                <p class="card-text text-muted">Add a new admin to the Bizzbel admin panel.</p>
                                <a href="add-admin.html" class="btn btn-primary btn-sm"><i class="fas fa-user-plus me-2"></i>Go to Add Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // Theme toggle functionality
            const themeToggle = $('#theme-toggle');
            const body = $('body');
            const setTheme = (theme) => {
                body.attr('data-theme', theme);
                localStorage.setItem('theme', theme);
                const icon = theme === 'dark' ? 'fa-moon' : 'fa-sun';
                themeToggle.find('i').removeClass('fa-sun fa-moon').addClass(icon);
            };

            const savedTheme = localStorage.getItem('theme') || 'light';
            setTheme(savedTheme);

            themeToggle.on('click', (e) => {
                e.preventDefault();
                const currentTheme = body.attr('data-theme');
                setTheme(currentTheme === 'light' ? 'dark' : 'light');
            });

            // Sidebar toggle for mobile
            const toggleSidebar = $('#toggle-sidebar');
            const closeSidebar = $('.close-sidebar');
            const sidebar = $('.sidebar');
            toggleSidebar.on('click', () => {
                sidebar.toggleClass('active');
            });
            closeSidebar.on('click', () => {
                sidebar.removeClass('active');
            });
        });
    </script>
</body>
</html>