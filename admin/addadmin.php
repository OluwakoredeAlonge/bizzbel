<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Add and manage admins for Bizzbel Data Intelligence.">
    <meta name="keywords" content="Bizzbel Data Intelligence, Add Admin, Manage Admins">
    <title>Add Admin - Bizzbel Data Intelligence</title>
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

        h1, h3 {
            font-family: 'Montserrat', sans-serif;
            color: var(--primary-color);
        }

        [data-theme="dark"] h1,
        [data-theme="dark"] h3 {
            color: var(--muted-text);
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

        .card-icon {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 0.75rem;
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

        .table {
            background-color: var(--card-bg);
            border-radius: 12px;
            overflow: hidden;
        }

        .table th, .table td {
            border-color: var(--shadow-color);
        }

        [data-theme="dark"] .table {
            background-color: var(--card-bg);
        }

        [data-theme="dark"] .table th,
        [data-theme="dark"] .table td {
            border-color: rgba(255, 255, 255, 0.1);
        }

        .form-select-sm {
            font-size: 0.85rem;
            padding: 0.25rem 0.5rem;
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

            .form-control, .form-select {
                font-size: 0.9rem;
            }

            .table {
                font-size: 0.85rem;
            }

            .sidebar .nav-link {
                font-size: 0.7rem;
            }

            .form-select-sm {
                font-size: 0.75rem;
                padding: 0.2rem 0.4rem;
            }
        }
    </style>
</head>
<body data-theme="light">
    <?php
    // session_start();
    // if (!isset($_SESSION['user_id']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'superadmin') {
    //     header('Location: login.html');
    //     exit;
    // }
    ?>
    <div class="d-flex">
        <!-- Sidebar -->
        <?php require_once('partials/sidebar.php'); ?>
        <!-- Main Content -->
        <div class="content flex-grow-1">
            <!-- Toggle Sidebar Button for Mobile -->
            <button class="btn btn-primary d-md-none mb-3" id="toggle-sidebar"><i class="fas fa-bars"></i> Menu</button>
            <!-- Add Admin Section -->
            <div class="section">
                <h1 class="display-5 fw-bold mb-4">Manage Admins</h1>
                <!-- Total Admins Card -->
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <i class="fas fa-users card-icon"></i>
                        <h3 class="card-title mb-2">Total Admins</h3>
                        <p class="card-text display-6" id="total-admins">0</p>
                    </div>
                </div>
                <!-- Add Admin Form -->
                <div class="card mb-4" id="add-admin-form">
                    <div class="card-body">
                        <h3 class="card-title mb-4"><i class="fas fa-user-plus me-2"></i>Add New Admin</h3>
                        <form id="add-admin-form">
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="fullName" name="fullName" required placeholder="Enter full name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="Enter email address">
                            </div>
                            <input type="text" name="honeypot" style="display: none;" aria-hidden="true">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save me-2"></i>Invite Admin</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Admins Table -->
                <div class="card" id="admin-table">
                    <div class="card-body">
                        <h3 class="card-title mb-4"><i class="fas fa-users-cog me-2"></i>Registered Admins</h3>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody id="admin-table-body">
                                    <!-- Placeholder Data -->
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>john.doe@example.com</td>
                                        <td>
                                            <select class="form-select form-select-sm admin-status" data-id="1">
                                                <option value="active" selected>Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </td>
                                        <td>2025-07-01 10:30:00</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jane Smith</td>
                                        <td>jane.smith@example.com</td>
                                        <td>
                                            <select class="form-select form-select-sm admin-status" data-id="2">
                                                <option value="active">Active</option>
                                                <option value="inactive" selected>Inactive</option>
                                            </select>
                                        </td>
                                        <td>2025-07-02 14:45:00</td>
                                    </tr>
                                    <!-- Dynamic data will replace this -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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

        // Form submission
        const addAdminForm = document.getElementById('add-admin-form');
        addAdminForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(addAdminForm);
            const honeypot = formData.get('honeypot');

            if (honeypot !== '') {
                // Bot detected, ignore submission
                return;
            }

            const fullName = formData.get('fullName');
            const email = formData.get('email');

            // Client-side validation
            if (!fullName || !email) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Please fill in all required fields.',
                    timer: 3000,
                    showConfirmButton: false
                });
                return;
            }

            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Please enter a valid email address.',
                    timer: 3000,
                    showConfirmButton: false
                });
                return;
            }

            // Submit to backend
            fetch('api/add-admin.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    fullName,
                    email
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: data.message,
                        timer: 3000,
                        showConfirmButton: false
                    }).then(() => {
                        addAdminForm.reset();
                        loadAdmins(); // Refresh table
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: data.message || 'An error occurred. Please try again.',
                        timer: 3000,
                        showConfirmButton: false
                    });
                }
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

        // Load admins table and update total admins
        function loadAdmins() {
            fetch('api/get-admins.php')
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        const tbody = document.getElementById('admin-table-body');
                        const totalAdmins = document.getElementById('total-admins');
                        tbody.innerHTML = '';
                        data.data.forEach(admin => {
                            const row = `
                                <tr>
                                    <td>${admin.id}</td>
                                    <td>${admin.full_name}</td>
                                    <td>${admin.email}</td>
                                    <td>
                                        <select class="form-select form-select-sm admin-status" data-id="${admin.id}">
                                            <option value="active" ${admin.status === 'active' ? 'selected' : ''}>Active</option>
                                            <option value="inactive" ${admin.status === 'inactive' ? 'selected' : ''}>Inactive</option>
                                        </select>
                                    </td>
                                    <td>${new Date(admin.created_at).toLocaleString()}</td>
                                </tr>
                            `;
                            tbody.innerHTML += row;
                        });
                        totalAdmins.textContent = data.data.length;

                        // Add event listeners to status dropdowns
                        document.querySelectorAll('.admin-status').forEach(select => {
                            select.addEventListener('change', (e) => {
                                const adminId = e.target.getAttribute('data-id');
                                const newStatus = e.target.value;
                                updateAdminStatus(adminId, newStatus);
                            });
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: data.message || 'Failed to load admins.',
                            timer: 3000,
                            showConfirmButton: false
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Failed to load admins. Please try again later.',
                        timer: 3000,
                        showConfirmButton: false
                    });
                });
        }

        // Update admin status
        function updateAdminStatus(adminId, status) {
            fetch('api/update-admin-status.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    adminId,
                    status
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: data.message,
                        timer: 2000,
                        showConfirmButton: false
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: data.message || 'Failed to update status.',
                        timer: 3000,
                        showConfirmButton: false
                    });
                    loadAdmins(); // Revert dropdown on error
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Failed to update status. Please try again later.',
                    timer: 3000,
                    showConfirmButton: false
                });
                loadAdmins(); // Revert dropdown on error
            });
        }

        // Load admins on page load
        loadAdmins();
    </script>
</body>
</html>