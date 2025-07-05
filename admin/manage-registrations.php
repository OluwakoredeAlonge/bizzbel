<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Registrations - Bizzbel Data Intelligence</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Montserrat:wght@700&display=stylesheet" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous">
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

        .btn-secondary {
            background-color: #6C757D;
            border-color: #6C757D;
        }

        .btn-secondary:hover {
            background-color: #5A6268;
            border-color: #5A6268;
        }

        .form-control, .form-select {
            background-color: var(--background-color);
            border-color: var(--shadow-color);
            color: var(--text-color);
        }

        [data-theme="dark"] .form-control,
        [data-theme="dark"] .form-select {
            background-color: #3A3A3A;
            border-color: #4A4A4A;
            color: var(--text-color);
        }

        .form-control:focus, .form-select:focus {
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

        .truncate {
            max-width: 150px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
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

            .truncate {
                max-width: 100px;
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

            .form-control, .form-select {
                font-size: 0.9rem;
            }

            .truncate {
                max-width: 80px;
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
            <!-- Manage Registrations Section -->
            <div class="section">
                <h1 class="display-5 fw-bold mb-4">Manage Registrations</h1>
                <!-- Total Registrations Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Total Registrations</h3>
                        <p class="card-text text-muted">Total number of registrations: <span id="totalRegistrations">0</span></p>
                    </div>
                </div>
                <!-- Registrations Table -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="registrationsTable" class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th class="p-3">Full Name</th>
                                        <th class="p-3">Email</th>
                                        <th class="p-3">Phone</th>
                                        <th class="p-3">Job Title</th>
                                        <th class="p-3">Company</th>
                                        <th class="p-3">Service</th>
                                        <th class="p-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-3 truncate">John Doe</td>
                                        <td class="p-3 truncate">john.doe@example.com</td>
                                        <td class="p-3">+234 123 456 7890</td>
                                        <td class="p-3">Project Manager</td>
                                        <td class="p-3">Tech Solutions Ltd</td>
                                        <td class="p-3 truncate">Instructor-led Learning...</td>
                                        <td class="p-3">
                                            <button class="btn btn-primary btn-sm view-btn" 
                                                    data-id="1" 
                                                    data-fullname="John Doe" 
                                                    data-email="john.doe@example.com" 
                                                    data-phone="+234 123 456 7890" 
                                                    data-jobtitle="Project Manager" 
                                                    data-company="Tech Solutions Ltd" 
                                                    data-service="Instructor-led Learning Programmes" 
                                                    title="View"><i class="fas fa-eye"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 truncate">Jane Smith</td>
                                        <td class="p-3 truncate">jane.smith@company.org</td>
                                        <td class="p-3">+234 987 654 3210</td>
                                        <td class="p-3">HR Manager</td>
                                        <td class="p-3">Global Enterprises</td>
                                        <td class="p-3 truncate">International Study-Tour...</td>
                                        <td class="p-3">
                                            <button class="btn btn-primary btn-sm view-btn" 
                                                    data-id="2" 
                                                    data-fullname="Jane Smith" 
                                                    data-email="jane.smith@company.org" 
                                                    data-phone="+234 987 654 3210" 
                                                    data-jobtitle="HR Manager" 
                                                    data-company="Global Enterprises" 
                                                    data-service="International Study-Tour Programmes" 
                                                    title="View"><i class="fas fa-eye"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 truncate">Michael Brown</td>
                                        <td class="p-3 truncate">michael.brown@biz.com</td>
                                        <td class="p-3">+234 456 789 1234</td>
                                        <td class="p-3">Data Analyst</td>
                                        <td class="p-3">Data Insights Co</td>
                                        <td class="p-3 truncate">Data-Driven Consulting...</td>
                                        <td class="p-3">
                                            <button class="btn btn-primary btn-sm view-btn" 
                                                    data-id="3" 
                                                    data-fullname="Michael Brown" 
                                                    data-email="michael.brown@biz.com" 
                                                    data-phone="+234 456 789 1234" 
                                                    data-jobtitle="Data Analyst" 
                                                    data-company="Data Insights Co" 
                                                    data-service="Data-Driven Consulting" 
                                                    title="View"><i class="fas fa-eye"></i></button>
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

    <!-- View Registration Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel"><i class="fas fa-eye me-2"></i>View Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <p id="viewFullName" class="form-control-static"></p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <p id="viewEmail" class="form-control-static"></p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <p id="viewPhone" class="form-control-static"></p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Job Title</label>
                        <p id="viewJobTitle" class="form-control-static"></p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Company Name</label>
                        <p id="viewCompany" class="form-control-static"></p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Service</label>
                        <p id="viewService" class="form-control-static"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times me-2"></i>Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            // Truncate text function
            function truncateText(text, maxLength = 18) {
                if (text && text.length > maxLength) {
                    return text.substring(0, maxLength - 3) + '...';
                }
                return text || '';
            }

            // Initialize DataTable
            const table = $('#registrationsTable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                pageLength: 10,
                columnDefs: [{ orderable: false, targets: 6 }],
                dom: '<"mb-3"f>rt<"d-flex justify-content-between"lp>',
                initComplete: function() {
                    // Set initial total registrations count
                    $('#totalRegistrations').text(this.api().rows().count());
                    // Apply initial truncation
                    $('#registrationsTable tbody tr').each(function() {
                        $(this).find('td.truncate').each(function() {
                            const text = $(this).text();
                            $(this).data('full-text', text);
                            $(this).text(truncateText(text));
                        });
                    });
                },
                drawCallback: function() {
                    // Update total registrations count after filtering/pagination
                    $('#totalRegistrations').text(this.api().rows({ search: 'applied' }).count());
                    // Reapply truncation after table draw
                    $('#registrationsTable tbody tr').each(function() {
                        $(this).find('td.truncate').each(function() {
                            const text = $(this).data('full-text') || $(this).text();
                            $(this).data('full-text', text);
                            $(this).text(truncateText(text));
                        });
                    });
                }
            });

            // Populate view modal
            $(document).on('click', '.view-btn', function() {
                const fullName = $(this).data('fullname') || 'N/A';
                const email = $(this).data('email') || 'N/A';
                const phone = $(this).data('phone') || 'N/A';
                const jobTitle = $(this).data('jobtitle') || 'N/A';
                const company = $(this).data('company') || 'N/A';
                const service = $(this).data('service') || 'N/A';

                $('#viewFullName').text(fullName);
                $('#viewEmail').text(email);
                $('#viewPhone').text(phone);
                $('#viewJobTitle').text(jobTitle);
                $('#viewCompany').text(company);
                $('#viewService').text(service);
                $('#viewModal').modal('show');
            });

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