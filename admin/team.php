<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Team Members & Impact Stats - Bizzbel Data Intelligence</title>
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
            --muted-text: #A0A0A0;
            --warning-color: #f5365c;
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

        .toast-container {
            z-index: 9999;
        }

        .team-image-preview {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 100%;
            margin-top: 0.5rem;
        }

        .char-count {
            font-size: 0.9rem;
            color: var(--muted-text);
            margin-top: 0.25rem;
        }

        .char-count.warning {
            color: var(--warning-color);
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

            .team-image-preview {
                width: 80px;
                height: 80px;
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
            <!-- Team Management Section -->
            <div class="section mb-5">
                <h1 class="display-5 fw-bold mb-4">Manage Team Members</h1>
                <!-- Add Team Member Form -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="mb-4">Add New Team Member</h3>
                        <form id="addTeamForm" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="teamName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="teamName" placeholder="Enter name" required>
                            </div>
                            <div class="mb-3">
                                <label for="teamRole" class="form-label">Role</label>
                                <input type="text" class="form-control" id="teamRole" placeholder="Enter role" required>
                            </div>
                            <div class="mb-3">
                                <label for="teamDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="teamDescription" rows="4" placeholder="Enter description" maxlength="150" required></textarea>
                                <div class="char-count" id="teamDescriptionCount">0/150 characters</div>
                            </div>
                            <div class="mb-3">
                                <label for="teamImage" class="form-label">Profile Image</label>
                                <input type="file" class="form-control" id="teamImage" accept="image/*" required>
                                <img id="imagePreview" class="team-image-preview" src="" alt="Image Preview" style="display: none;">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus me-2"></i>Add Team Member</button>
                        </form>
                    </div>
                    <p class="text-muted mb-2 p-3">Note: The layout is optimized to display a maximum of 3 team members. Adding more may affect the visual presentation of the page.</p>
                </div>
                <!-- Team Members Table -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="teamTable" class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th class="p-3">Name</th>
                                        <th class="p-3">Role</th>
                                        <th class="p-3">Description</th>
                                        <th class="p-3">Image</th>
                                        <th class="p-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-3">Dr. Amina Bello</td>
                                        <td class="p-3">CEO & Founder</td>
                                        <td class="p-3">With over 20 years of experience in strategic consultancy, Dr. Bello leads Bizzbel with a passion for transformative growth.</td>
                                        <td class="p-3"><img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Dr. Amina Bello" class="team-image-preview"></td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 edit-btn" data-id="1" data-name="Dr. Amina Bello" data-role="CEO & Founder" data-description="With over 20 years of experience in strategic consultancy, Dr. Bello leads Bizzbel with a passion for transformative growth." data-image="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" title="Edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="1" data-name="Dr. Amina Bello" title="Delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3">James Okoye</td>
                                        <td class="p-3">Head of Training</td>
                                        <td class="p-3">James designs innovative training programs, drawing on his expertise in global education trends.</td>
                                        <td class="p-3"><img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="James Okoye" class="team-image-preview"></td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 edit-btn" data-id="2" data-name="James Okoye" data-role="Head of Training" data-description="James designs innovative training programs, drawing on his expertise in global education trends." data-image="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" title="Edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="2" data-name="James Okoye" title="Delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3">Sarah Mwangi</td>
                                        <td class="p-3">Chief Consultant</td>
                                        <td class="p-3">Sarah drives data-driven solutions, helping clients achieve measurable results across industries.</td>
                                        <td class="p-3"><img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Sarah Mwangi" class="team-image-preview"></td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 edit-btn" data-id="3" data-name="Sarah Mwangi" data-role="Chief Consultant" data-description="Sarah drives data-driven solutions, helping clients achieve measurable results across industries." data-image="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" title="Edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="3" data-name="Sarah Mwangi" title="Delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Impact Stats Management Section -->
            <div class="section">
                <h1 class="display-5 fw-bold mb-4">Manage Impact Stats</h1>
                <!-- Impact Stats Table -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="impactTable" class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th class="p-3">Icon</th>
                                        <th class="p-3">Number</th>
                                        <th class="p-3">Description</th>
                                        <th class="p-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-3"><i class="fas fa-users"></i> Users</td>
                                        <td class="p-3">15,000+</td>
                                        <td class="p-3">Participants Trained</td>
                                        <td class="p-3">
                                            <button class="btn btn-primary btn-sm impact-edit-btn" data-id="1" data-icon="fas fa-users" data-number="15,000+" data-description="Participants Trained" title="Edit"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3"><i class="fas fa-graduation-cap"></i> Graduation Cap</td>
                                        <td class="p-3">32</td>
                                        <td class="p-3">Years of Talent Development</td>
                                        <td class="p-3">
                                            <button class="btn btn-primary btn-sm impact-edit-btn" data-id="2" data-icon="fas fa-graduation-cap" data-number="32" data-description="Years of Talent Development" title="Edit"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3"><i class="fas fa-globe"></i> Globe</td>
                                        <td class="p-3">25</td>
                                        <td class="p-3">Countries Reached</td>
                                        <td class="p-3">
                                            <button class="btn btn-primary btn-sm impact-edit-btn" data-id="3" data-icon="fas fa-globe" data-number="25" data-description="Countries Reached" title="Edit"><i class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3"><i class="fas fa-chart-line"></i> Chart Line</td>
                                        <td class="p-3">82%</td>
                                        <td class="p-3">Satisfaction Rate</td>
                                        <td class="p-3">
                                            <button class="btn btn-primary btn-sm impact-edit-btn" data-id="4" data-icon="fas fa-chart-line" data-number="82%" data-description="Satisfaction Rate" title="Edit"><i class="fas fa-edit"></i></button>
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

    <!-- Edit Team Member Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel"><i class="fas fa-edit me-2"></i>Edit Team Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editTeamForm" enctype="multipart/form-data">
                        <input type="hidden" id="editTeamId">
                        <div class="mb-3">
                            <label for="editTeamName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="editTeamName" placeholder="Enter name" required>
                        </div>
                        <div class="mb-3">
                            <label for="editTeamRole" class="form-label">Role</label>
                            <input type="text" class="form-control" id="editTeamRole" placeholder="Enter role" required>
                        </div>
                        <div class="mb-3">
                            <label for="editTeamDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="editTeamDescription" rows="4" placeholder="Enter description" maxlength="150" required></textarea>
                            <div class="char-count" id="editTeamDescriptionCount">0/150 characters</div>
                        </div>
                        <div class="mb-3">
                            <label for="editTeamImage" class="form-label">Profile Image</label>
                            <input type="file" class="form-control" id="editTeamImage" accept="image/*">
                            <img id="editImagePreview" class="team-image-preview" src="" alt="Image Preview" style="display: none;">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times me-2"></i>Cancel</button>
                    <button type="button" class="btn btn-primary" id="saveEditBtn"><i class="fas fa-save me-2"></i>Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Team Member Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel"><i class="fas fa-trash me-2"></i>Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete the team member "<span id="deleteName"></span>"? This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times me-2"></i>Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn"><i class="fas fa-trash me-2"></i>Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Impact Stat Modal -->
    <div class="modal fade" id="editImpactModal" tabindex="-1" aria-labelledby="editImpactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editImpactModalLabel"><i class="fas fa-edit me-2"></i>Edit Impact Stat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editImpactForm">
                        <input type="hidden" id="editImpactId">
                        <div class="mb-3">
                            <label for="editImpactNumber" class="form-label">Number</label>
                            <input type="text" class="form-control" id="editImpactNumber" placeholder="e.g., 15,000+" required>
                        </div>
                        <div class="mb-3">
                            <label for="editImpactDescription" class="form-label">Description</label>
                            <input type="text" class="form-control" id="editImpactDescription" placeholder="e.g., Participants Trained" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times me-2"></i>Cancel</button>
                    <button type="button" class="btn btn-primary" id="saveImpactEditBtn"><i class="fas fa-save me-2"></i>Save Changes</button>
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

            // DataTable initialization for team table
            const teamTable = $('#teamTable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                pageLength: 10,
                columnDefs: [{ orderable: false, targets: 4 }],
                dom: '<"mb-3"f>rt<"d-flex justify-content-between"lp>',
            });

            // DataTable initialization for impact table
            const impactTable = $('#impactTable').DataTable({
                paging: false,
                searching: false,
                ordering: false,
                dom: '<"mb-3"f>rt<"d-flex justify-content-between"lp>',
            });

            // Image preview for add team form
            $('#teamImage').on('change', function(e) {
                const file = e.target.files[0];
                const preview = $('#imagePreview');
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.attr('src', e.target.result).show();
                    };
                    reader.readAsDataURL(file);
                } else {
                    preview.hide();
                }
            });

            // Image preview for edit team form
            $('#editTeamImage').on('change', function(e) {
                const file = e.target.files[0];
                const preview = $('#editImagePreview');
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.attr('src', e.target.result).show();
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Character count for add team description
            const maxChars = 150;
            const teamDescription = $('#teamDescription');
            const teamDescriptionCount = $('#teamDescriptionCount');
            function updateCharCount(textarea, counter) {
                const len = textarea.val().length;
                counter.text(`${len}/${maxChars} characters`);
                if (len >= maxChars) {
                    counter.addClass('warning');
                } else {
                    counter.removeClass('warning');
                }
            }
            teamDescription.on('input', function() {
                const val = $(this).val();
                if (val.length > maxChars) {
                    $(this).val(val.slice(0, maxChars));
                }
                updateCharCount($(this), teamDescriptionCount);
            });
            // Initialize character count for add form
            updateCharCount(teamDescription, teamDescriptionCount);

            // Character count for edit team description
            const editTeamDescription = $('#editTeamDescription');
            const editTeamDescriptionCount = $('#editTeamDescriptionCount');
            editTeamDescription.on('input', function() {
                const val = $(this).val();
                if (val.length > maxChars) {
                    $(this).val(val.slice(0, maxChars));
                }
                updateCharCount($(this), editTeamDescriptionCount);
            });

            // Populate edit team form
            $(document).on('click', '.edit-btn', function() {
                const id = $(this).data('id');
                const name = $(this).data('name');
                const role = $(this).data('role');
                const description = $(this).data('description');
                const image = $(this).data('image');

                $('#editTeamId').val(id);
                $('#editTeamName').val(name);
                $('#editTeamRole').val(role);
                $('#editTeamDescription').val(description);
                $('#editImagePreview').attr('src', image).show();
                $('#editTeamImage').val('');
                updateCharCount(editTeamDescription, editTeamDescriptionCount); // Initialize character count
                $('#editModal').modal('show');
            });

            // Add team member (placeholder)
            $('#addTeamForm').on('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Adding Team Member...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                setTimeout(() => {
                    Swal.close();
                    showToast('Team member added successfully!');
                    this.reset();
                    $('#imagePreview').hide();
                    updateCharCount(teamDescription, teamDescriptionCount); // Reset character count
                }, 1000);
            });

            // Save edited team member
            $('#saveEditBtn').on('click', function() {
                const id = $('#editTeamId').val();
                Swal.fire({
                    title: 'Saving Changes...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                setTimeout(() => {
                    Swal.close();
                    showToast('Team member updated successfully!');
                    $('#editModal').modal('hide');
                }, 1000);
            });

            // Delete team member
            $(document).on('click', '.delete-btn', function() {
                const id = $(this).data('id');
                const name = $(this).data('name');
                $('#deleteName').text(name);
                $('#confirmDeleteBtn').data('id', id);
                $('#deleteModal').modal('show');
            });

            $('#confirmDeleteBtn').on('click', function() {
                const id = $(this).data('id');
                Swal.fire({
                    title: 'Deleting Team Member...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                setTimeout(() => {
                    Swal.close();
                    showToast('Team member deleted successfully!');
                    $('#deleteModal').modal('hide');
                }, 1000);
            });

            // Populate edit impact form
            $(document).on('click', '.impact-edit-btn', function() {
                const id = $(this).data('id');
                const number = $(this).data('number');
                const description = $(this).data('description');

                $('#editImpactId').val(id);
                $('#editImpactNumber').val(number);
                $('#editImpactDescription').val(description);
                $('#editImpactModal').modal('show');
            });

            // Save edited impact stat
            $('#saveImpactEditBtn').on('click', function() {
                const id = $('#editImpactId').val();
                Swal.fire({
                    title: 'Saving Changes...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                setTimeout(() => {
                    Swal.close();
                    showToast('Impact stat updated successfully!');
                    $('#editImpactModal').modal('hide');
                }, 1000);
            });

            // Toast function
            function showToast(message, isSuccess = true) {
                const toastElement = $('#statusToast')[0];
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