<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Testimonials - Bizzbel Data Intelligence</title>
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
            --overlay-bg: rgba(0, 0, 0, 0.5);
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
            --overlay-bg: rgba(0, 0, 0, 0.7);
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

        .btn-warning {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: var(--text-color);
        }

        .btn-warning:hover {
            background-color: #E6C200;
            border-color: #E6C200;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
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

        .badge.bg-success {
            background-color: var(--secondary-color) !important;
        }

        .badge.bg-warning {
            background-color: var(--accent-color) !important;
            color: var(--text-color) !important;
        }

        .badge.bg-danger {
            background-color: #dc3545 !important;
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

            .form-control, .form-select {
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
            <!-- Testimonials Section -->
            <div class="section">
                <h1 class="display-5 fw-bold mb-4">Manage Testimonials</h1>
                <!-- Summary Cards -->
                <div class="row row-cols-1 row-cols-md-4 g-4 mb-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text text-muted">Total Testimonials</p>
                                <p class="card-title fs-4 fw-bold">10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text text-muted">Pending Testimonials</p>
                                <p class="card-title fs-4 fw-bold text-warning">3</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text text-muted">Approved Testimonials</p>
                                <p class="card-title fs-4 fw-bold text-success">5</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text text-muted">Rejected Testimonials</p>
                                <p class="card-title fs-4 fw-bold text-danger">2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Filters -->
                <div class="d-flex justify-content-end mb-4">
                    <select class="form-select me-2" id="statusFilter" style="max-width: 150px;">
                        <option value="">Filter by Status</option>
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                    </select>
                    <select class="form-select" id="typeFilter" style="max-width: 150px;">
                        <option value="">Filter by Type</option>
                        <option value="jobseeker">Jobseeker</option>
                        <option value="school">School</option>
                    </select>
                </div>
                <!-- Table -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="testimonialsTable" class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th class="p-3">Author Name</th>
                                        <th class="p-3">Type</th>
                                        <th class="p-3">Content Preview</th>
                                        <th class="p-3">Status</th>
                                        <th class="p-3">Created At</th>
                                        <th class="p-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-3">John Doe</td>
                                        <td class="p-3">Jobseeker</td>
                                        <td class="p-3">Great experience with the platform...</td>
                                        <td class="p-3"><span class="badge bg-success"><i class="fas fa-check-circle me-1"></i> Approved</span></td>
                                        <td class="p-3">2025-07-01</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 view-btn" data-id="1" data-type="jobseeker" data-content="Great experience with the platform, highly recommend!" title="View Full"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-danger btn-sm me-2 reject-btn" data-id="1" data-type="jobseeker" title="Reject"><i class="fas fa-times"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="1" data-type="jobseeker" data-author="John Doe" title="Delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3">Jane Smith</td>
                                        <td class="p-3">School</td>
                                        <td class="p-3">The training was insightful...</td>
                                        <td class="p-3"><span class="badge bg-warning"><i class="fas fa-clock me-1"></i> Pending</span></td>
                                        <td class="p-3">2025-07-02</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 view-btn" data-id="2" data-type="school" data-content="The training was insightful and well-structured." title="View Full"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm me-2 approve-btn" data-id="2" data-type="school" title="Approve"><i class="fas fa-check"></i></button>
                                                <button class="btn btn-danger btn-sm me-2 reject-btn" data-id="2" data-type="school" title="Reject"><i class="fas fa-times"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="2" data-type="school" data-author="Jane Smith" title="Delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3">Alex Johnson</td>
                                        <td class="p-3">Jobseeker</td>
                                        <td class="p-3">Not satisfied with the service...</td>
                                        <td class="p-3"><span class="badge bg-danger"><i class="fas fa-times-circle me-1"></i> Rejected</span></td>
                                        <td class="p-3">2025-07-03</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 view-btn" data-id="3" data-type="jobseeker" data-content="Not satisfied with the service provided." title="View Full"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-success btn-sm me-2 approve-btn" data-id="3" data-type="jobseeker" title="Approve"><i class="fas fa-check"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="3" data-type="jobseeker" data-author="Alex Johnson" title="Delete"><i class="fas fa-trash"></i></button>
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
                    <h5 class="modal-title" id="viewModalLabel"><i class="fas fa-quote-left me-2"></i>Testimonial Content</h5>
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

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel"><i class="fas fa-trash me-2"></i>Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete the testimonial by "<span id="deleteAuthor"></span>"? This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times me-2"></i>Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn"><i class="fas fa-trash me-2"></i>Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Container -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="statusToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Notification</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
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
            const table = $('#testimonialsTable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                pageLength: 10,
                columnDefs: [{ orderable: false, targets: 5 }],
                dom: '<"mb-3"f>rt<"d-flex justify-content-between"lp>',
            });

            // Filter functionality
            $('#statusFilter').on('change', function() {
                const status = this.value;
                table.column(3).search(status ? '^' + status + '$' : '', true, false).draw();
            });

            $('#typeFilter').on('change', function() {
                const type = this.value;
                table.column(1).search(type ? '^' + type + '$' : '', true, false).draw();
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

            // Placeholder action buttons (requires backend for actual functionality)
            $('.approve-btn').on('click', function() {
                const id = $(this).data('id');
                const type = $(this).data('type');
                Swal.fire({
                    title: 'Approving Testimonial...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                setTimeout(() => {
                    Swal.close();
                    showToast('Testimonial approved successfully!');
                }, 1000);
            });

            $('.reject-btn').on('click', function() {
                const id = $(this).data('id');
                const type = $(this).data('type');
                Swal.fire({
                    title: 'Rejecting Testimonial...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                setTimeout(() => {
                    Swal.close();
                    showToast('Testimonial rejected successfully!');
                }, 1000);
            });

            $('.delete-btn').on('click', function() {
                const id = $(this).data('id');
                const type = $(this).data('type');
                const author = $(this).data('author');
                $('#deleteAuthor').text(author);
                $('#confirmDeleteBtn').data('id', id);
                $('#confirmDeleteBtn').data('type', type);
                $('#deleteModal').modal('show');
            });

            $('#confirmDeleteBtn').on('click', function() {
                const id = $(this).data('id');
                const type = $(this).data('type');
                Swal.fire({
                    title: 'Deleting Testimonial...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                setTimeout(() => {
                    Swal.close();
                    showToast('Testimonial deleted successfully!');
                    $('#deleteModal').modal('hide');
                }, 1000);
            });

            // Toast function
            function showToast(message, isSuccess = true) {
                const toastElement = document.getElementById('statusToast');
                const toast = new bootstrap.Toast(toastElement);
                const toastBody = toastElement.querySelector('.toast-body');
                toastBody.textContent = message;
                toastElement.querySelector('.toast-header').className = `toast-header ${isSuccess ? 'bg-success text-white' : 'bg-danger text-white'}`;
                toast.show();
            }
        });
    </script>
</body>
</html>