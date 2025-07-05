<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Contact Inquiries - Bizzbel Data Intelligence</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Montserrat:wght@700&display=stylesheet" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
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
            --primary-color: #4A90E2;
            --secondary-color: #00C4B4;
            --background-color: #121212;
            --text-color: #E0E0E0;
            --white: #1E1E1E;
            --accent-color: #FFCA28;
            --card-bg: #252525;
            --shadow-color: rgba(255, 255, 255, 0.15);
            --muted-text: #A0A0A0;
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

        .card-text.text-muted {
            color: var(--muted-text) !important;
        }

        .card-title.fs-4 {
            color: var(--text-color) !important;
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

        .form-select {
            background-color: var(--background-color);
            border-color: var(--shadow-color);
            color: var(--text-color);
        }

        [data-theme="dark"] .form-select {
            background-color: #3A3A3A;
            border-color: #4A4A4A;
            color: var(--text-color);
        }

        .form-select:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 5px rgba(0, 168, 107, 0.5);
        }

        .form-label {
            color: var(--primary-color);
            font-weight: 600;
        }

        .table-hover tbody tr {
            transition: background-color 0.2s ease;
        }

        .table-light {
            background-color: var(--card-bg) !important;
        }

        .modal-content {
            background-color: var(--card-bg);
            border-radius: 12px;
        }

        .modal-header {
            background-color: var(--primary-color);
            color: var(--white);
            border-bottom: none;
        }

        .modal-footer {
            border-top: none;
        }

        .toast-container {
            z-index: 9999;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .contact-details p {
            margin: 0;
            font-size: 0.95rem;
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
                padding: 1rem;
            }

            .card h3 {
                font-size: 1.2rem;
            }

            .form-select {
                font-size: 0.9rem;
            }

            .contact-details p {
                font-size: 0.9rem;
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
            <!-- Contact Inquiries Section -->
            <div class="section">
                <h1 class="display-5 fw-bold mb-4">Manage Contact Inquiries</h1>
                <!-- Summary Card -->
                <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text text-muted">Total Inquiries</p>
                                <p class="card-title fs-4 fw-bold">8</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="inquiriesTable" class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th class="p-3">Name</th>
                                        <th class="p-3">Contact Details</th>
                                        <th class="p-3">Subject</th>
                                        <th class="p-3">Message Preview</th>
                                        <th class="p-3">Submitted At</th>
                                        <th class="p-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-3">Alice Brown</td>
                                        <td class="p-3">
                                            <div class="contact-details">
                                                <p><i class="fas fa-envelope me-2"></i>alice@example.com</p>
                                                <p><i class="fas fa-phone me-2"></i>+234 901 234 5678</p>
                                            </div>
                                        </td>
                                        <td class="p-3">Training Inquiry</td>
                                        <td class="p-3">Interested in your data analytics...</td>
                                        <td class="p-3">2025-07-04</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm view-btn" data-id="1" data-content="Interested in your data analytics training program." title="View Full"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3">Bob Wilson</td>
                                        <td class="p-3">
                                            <div class="contact-details">
                                                <p><i class="fas fa-envelope me-2"></i>bob@example.com</p>
                                                <p><i class="fas fa-phone me-2"></i>+234 912 345 6789</p>
                                            </div>
                                        </td>
                                        <td class="p-3">Consultancy Request</td>
                                        <td class="p-3">Need consultancy for business...</td>
                                        <td class="p-3">2025-07-03</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm view-btn" data-id="2" data-content="Need consultancy for business intelligence solutions." title="View Full"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3">Carol Lee</td>
                                        <td class="p-3">
                                            <div class="contact-details">
                                                <p><i class="fas fa-envelope me-2"></i>carol@example.com</p>
                                                <p><i class="fas fa-phone me-2"></i>+234 923 456 7890</p>
                                            </div>
                                        </td>
                                        <td class="p-3">General Inquiry</td>
                                        <td class="p-3">Questions about your services...</td>
                                        <td class="p-3">2025-07-02</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm view-btn" data-id="3" data-content="Questions about your services and pricing." title="View Full"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- View Content Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel"><i class="fas fa-envelope me-2"></i>Inquiry Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="viewContent" class="text-muted"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="copyBtn"><i class="fas fa-copy me-2"></i>Copy to Clipboard</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times me-2"></i>Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
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

        themeToggle.addEventListener('click', (e) => {
            e.preventDefault();
            const currentTheme = body.getAttribute('data-theme');
            setTheme(currentTheme === 'light' ? 'dark' : 'light');
        });

        // Sidebar toggle for mobile
        const toggleSidebar = document.getElementById('toggle-sidebar');
        const closeSidebar = document.querySelector('.close-sidebar');
        const sidebar = document.querySelector('.sidebar');
        toggleSidebar.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });
        closeSidebar.addEventListener('click', () => {
            sidebar.classList.remove('active');
        });

        // DataTable initialization
        $(document).ready(function() {
            const table = $('#inquiriesTable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                pageLength: 10,
                columnDefs: [{ orderable: false, targets: 5 }],
                dom: '<"mb-3"f>rt<"d-flex justify-content-between"lp>',
            });

            // View button functionality
            $('.view-btn').on('click', function() {
                const content = $(this).data('content');
                $('#viewContent').text(content);
                $('#viewModal').modal('show');
            });

            // Copy to clipboard
            $('#copyBtn').on('click', function() {
                const content = $('#viewContent').text();
                navigator.clipboard.writeText(content).then(() => {
                    $(this).html('<i class="fas fa-check me-2"></i>Copied!');
                    setTimeout(() => {
                        $(this).html('<i class="fas fa-copy me-2"></i>Copy to Clipboard');
                    }, 2000);
                });
            });
        });
    </script>
</body>
</html>