<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Services - Bizzbel Data Intelligence</title>
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

        .service-image-preview {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 12px;
            margin-top: 0.5rem;
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

            .service-image-preview {
                width: 80px;
                height: 80px;
            }

            .form-control, .form-select {
                font-size: 0.9rem;
            }

            .truncate {
                max-width: 100px;
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
            <!-- Manage Services Section -->
            <div class="section">
                <h1 class="display-5 fw-bold mb-4">Manage Services</h1>
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="servicesTable" class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th class="p-3">Title</th>
                                        <th class="p-3">Description</th>
                                        <th class="p-3">Why Attend</th>
                                        <th class="p-3">What You'll Learn</th>
                                        <th class="p-3">Who Should Attend</th>
                                        <th class="p-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-3 truncate">Instructor-led Learning...</td>
                                        <td class="p-3 truncate">Expert-led, interactive...</td>
                                        <td class="p-3 truncate">Gain practical skills...</td>
                                        <td class="p-3 truncate">Learn advanced techniques...</td>
                                        <td class="p-3 truncate">Professionals seeking...</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 edit-btn" 
                                                        data-id="1" 
                                                        data-title="Instructor-led Learning Programmes" 
                                                        data-description="Expert-led, interactive sessions designed for immediate skill enhancement." 
                                                        data-why-attend="Gain practical skills from industry experts." 
                                                        data-what-learn="Learn advanced techniques in strategic planning." 
                                                        data-who-attend="Professionals seeking skill enhancement." 
                                                        data-image="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                                        title="Edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="1" data-title="Instructor-led Learning Programmes" title="Delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 truncate">International Study-Tour...</td>
                                        <td class="p-3 truncate">Global learning experiences...</td>
                                        <td class="p-3 truncate">Network with global...</td>
                                        <td class="p-3 truncate">Understand international...</td>
                                        <td class="p-3 truncate">Executives and managers...</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 edit-btn" 
                                                        data-id="2" 
                                                        data-title="International Study-Tour Programmes" 
                                                        data-description="Global learning experiences connecting you with industry leaders." 
                                                        data-why-attend="Network with global professionals." 
                                                        data-what-learn="Understand international best practices." 
                                                        data-who-attend="Executives and managers." 
                                                        data-image="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                                        title="Edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="2" data-title="International Study-Tour Programmes" title="Delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 truncate">Custom Training Programmes...</td>
                                        <td class="p-3 truncate">Tailored solutions to...</td>
                                        <td class="p-3 truncate">Address specific organizational...</td>
                                        <td class="p-3 truncate">Customized skills and...</td>
                                        <td class="p-3 truncate">Organizations of all...</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 edit-btn" 
                                                        data-id="3" 
                                                        data-title="Custom Training Programmes" 
                                                        data-description="Tailored solutions to meet your organization's unique goals." 
                                                        data-why-attend="Address specific organizational challenges." 
                                                        data-what-learn="Customized skills and strategies." 
                                                        data-who-attend="Organizations of all sizes." 
                                                        data-image="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                                        title="Edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="3" data-title="Custom Training Programmes" title="Delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 truncate">Data-Driven Consulting...</td>
                                        <td class="p-3 truncate">Actionable insights through...</td>
                                        <td class="p-3 truncate">Drive strategic success...</td>
                                        <td class="p-3 truncate">Advanced analytics and...</td>
                                        <td class="p-3 truncate">Business leaders and...</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 edit-btn" 
                                                        data-id="4" 
                                                        data-title="Data-Driven Consulting" 
                                                        data-description="Actionable insights through advanced analytics." 
                                                        data-why-attend="Drive strategic success with data." 
                                                        data-what-learn="Advanced analytics and decision-making." 
                                                        data-who-attend="Business leaders and analysts." 
                                                        data-image="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                                        title="Edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="4" data-title="Data-Driven Consulting" title="Delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 truncate">Organizational Development...</td>
                                        <td class="p-3 truncate">Enhance organizational...</td>
                                        <td class="p-3 truncate">Improve workplace dynamics...</td>
                                        <td class="p-3 truncate">Strategies for organizational...</td>
                                        <td class="p-3 truncate">HR professionals and...</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 edit-btn" 
                                                        data-id="5" 
                                                        data-title="Organizational Development Consulting" 
                                                        data-description="Enhance organizational efficiency and culture." 
                                                        data-why-attend="Improve workplace dynamics." 
                                                        data-what-learn="Strategies for organizational growth." 
                                                        data-who-attend="HR professionals and executives." 
                                                        data-image="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                                        title="Edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="5" data-title="Organizational Development Consulting" title="Delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 truncate">Talent Management Solutions...</td>
                                        <td class="p-3 truncate">Optimize talent acquisition...</td>
                                        <td class="p-3 truncate">Build a strong workforce...</td>
                                        <td class="p-3 truncate">Talent development techniques...</td>
                                        <td class="p-3 truncate">HR managers and recruiters...</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 edit-btn" 
                                                        data-id="6" 
                                                        data-title="Talent Management Solutions" 
                                                        data-description="Optimize talent acquisition and retention." 
                                                        data-why-attend="Build a strong workforce." 
                                                        data-what-learn="Talent development techniques." 
                                                        data-who-attend="HR managers and recruiters." 
                                                        data-image="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                                        title="Edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="6" data-title="Talent Management Solutions" title="Delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 truncate">Change Management Training...</td>
                                        <td class="p-3 truncate">Navigate organizational...</td>
                                        <td class="p-3 truncate">Manage transitions smoothly...</td>
                                        <td class="p-3 truncate">Change management frameworks...</td>
                                        <td class="p-3 truncate">Leaders and change agents...</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 edit-btn" 
                                                        data-id="7" 
                                                        data-title="Change Management Training" 
                                                        data-description="Navigate organizational change effectively." 
                                                        data-why-attend="Manage transitions smoothly." 
                                                        data-what-learn="Change management frameworks." 
                                                        data-who-attend="Leaders and change agents." 
                                                        data-image="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                                        title="Edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="7" data-title="Change Management Training" title="Delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 truncate">Innovation Workshops...</td>
                                        <td class="p-3 truncate">Foster creativity and...</td>
                                        <td class="p-3 truncate">Spark innovative thinking...</td>
                                        <td class="p-3 truncate">Innovation methodologies...</td>
                                        <td class="p-3 truncate">Creative teams and leaders...</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 edit-btn" 
                                                        data-id="8" 
                                                        data-title="Innovation Workshops" 
                                                        data-description="Foster creativity and innovation." 
                                                        data-why-attend="Spark innovative thinking." 
                                                        data-what-learn="Innovation methodologies." 
                                                        data-who-attend="Creative teams and leaders." 
                                                        data-image="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                                        title="Edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="8" data-title="Innovation Workshops" title="Delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 truncate">Leadership Development...</td>
                                        <td class="p-3 truncate">Build effective leadership...</td>
                                        <td class="p-3 truncate">Enhance leadership capabilities...</td>
                                        <td class="p-3 truncate">Leadership strategies...</td>
                                        <td class="p-3 truncate">Aspiring and current leaders...</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 edit-btn" 
                                                        data-id="9" 
                                                        data-title="Leadership Development" 
                                                        data-description="Build effective leadership skills." 
                                                        data-why-attend="Enhance leadership capabilities." 
                                                        data-what-learn="Leadership strategies and skills." 
                                                        data-who-attend="Aspiring and current leaders." 
                                                        data-image="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                                        title="Edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="9" data-title="Leadership Development" title="Delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 truncate">Digital Transformation...</td>
                                        <td class="p-3 truncate">Embrace digital solutions...</td>
                                        <td class="p-3 truncate">Stay ahead with technology...</td>
                                        <td class="p-3 truncate">Digital strategies and tools...</td>
                                        <td class="p-3 truncate">Tech leaders and innovators...</td>
                                        <td class="p-3">
                                            <div class="d-flex">
                                                <button class="btn btn-primary btn-sm me-2 edit-btn" 
                                                        data-id="10" 
                                                        data-title="Digital Transformation" 
                                                        data-description="Embrace digital solutions for growth." 
                                                        data-why-attend="Stay ahead with technology." 
                                                        data-what-learn="Digital strategies and tools." 
                                                        data-who-attend="Tech leaders and innovators." 
                                                        data-image="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" 
                                                        title="Edit"><i class="fas fa-edit"></i></button>
                                                <button class="btn btn-secondary btn-sm delete-btn" data-id="10" data-title="Digital Transformation" title="Delete"><i class="fas fa-trash"></i></button>
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

    <!-- Edit Service Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel"><i class="fas fa-edit me-2"></i>Edit Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editServiceForm" enctype="multipart/form-data">
                        <input type="hidden" id="editServiceId">
                        <div class="mb-3">
                            <label for="editServiceTitle" class="form-label">Service Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="editServiceTitle" placeholder="Enter service title" required>
                        </div>
                        <div class="mb-3">
                            <label for="editServiceDescription" class="form-label">Service Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="editServiceDescription" rows="4" placeholder="Enter service description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editWhyAttend" class="form-label">Why You Should Attend <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="editWhyAttend" rows="4" placeholder="Enter why attendees should participate" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editWhatLearn" class="form-label">What You'll Learn <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="editWhatLearn" rows="4" placeholder="Enter what attendees will learn" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editWhoAttend" class="form-label">Who Should Attend <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="editWhoAttend" rows="4" placeholder="Enter target audience" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editServiceImage" class="form-label">Service Image</label>
                            <input type="file" class="form-control" id="editServiceImage" accept="image/*">
                            <img id="editImagePreview" class="service-image-preview" src="" alt="Image Preview" style="display: none;">
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

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel"><i class="fas fa-trash me-2"></i>Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete the service "<span id="deleteTitle"></span>"? This action cannot be undone.
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
            const table = $('#servicesTable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                pageLength: 10,
                columnDefs: [{ orderable: false, targets: 5 }],
                dom: '<"mb-3"f>rt<"d-flex justify-content-between"lp>',
            });

            // Truncate text in table
            function truncateText(text, maxLength = 18) {
                if (text.length > maxLength) {
                    return text.substring(0, maxLength - 3) + '...';
                }
                return text;
            }

            $('#servicesTable tbody tr').each(function() {
                $(this).find('td.truncate').each(function() {
                    const text = $(this).data('full-text') || $(this).text();
                    $(this).data('full-text', text);
                    $(this).text(truncateText(text));
                });
            });

            // Image preview for edit form
            $('#editServiceImage').on('change', function(e) {
                const file = e.target.files[0];
                const preview = $('#editImagePreview');
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.attr('src', e.target.result).show();
                    };
                    reader.readAsDataURL(file);
                } else {
                    preview.attr('src', $('#editImagePreview').data('current-image')).show();
                }
            });

            // Populate edit form
            $(document).on('click', '.edit-btn', function() {
                const id = $(this).data('id');
                const title = $(this).data('title');
                const description = $(this).data('description');
                const whyAttend = $(this).data('why-attend');
                const whatLearn = $(this).data('what-learn');
                const whoAttend = $(this).data('who-attend');
                const image = $(this).data('image');

                $('#editServiceId').val(id);
                $('#editServiceTitle').val(title);
                $('#editServiceDescription').val(description);
                $('#editWhyAttend').val(whyAttend);
                $('#editWhatLearn').val(whatLearn);
                $('#editWhoAttend').val(whoAttend);
                $('#editImagePreview').attr('src', image).data('current-image', image).show();
                $('#editServiceImage').val('');
                $('#editModal').modal('show');
            });

            // Save edited service
            $('#saveEditBtn').on('click', function() {
                const id = $('#editServiceId').val();
                const title = $('#editServiceTitle').val();
                const description = $('#editServiceDescription').val();
                const whyAttend = $('#editWhyAttend').val();
                const whatLearn = $('#editWhatLearn').val();
                const whoAttend = $('#editWhoAttend').val();
                const image = $('#editServiceImage').get(0).files[0] || $('#editImagePreview').data('current-image');

                if (!title || !description || !whyAttend || !whatLearn || !whoAttend) {
                    showToast('Please fill all required fields.', false);
                    return;
                }

                Swal.fire({
                    title: 'Saving Changes...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                setTimeout(() => {
                    Swal.close();
                    showToast('Service updated successfully!');
                    $('#editModal').modal('hide');
                    // Update table row (placeholder)
                    const row = $(`#servicesTable tr td button[data-id="${id}"]`).closest('tr');
                    row.find('td').eq(0).text(truncateText(title)).data('full-text', title);
                    row.find('td').eq(1).text(truncateText(description)).data('full-text', description);
                    row.find('td').eq(2).text(truncateText(whyAttend)).data('full-text', whyAttend);
                    row.find('td').eq(3).text(truncateText(whatLearn)).data('full-text', whatLearn);
                    row.find('td').eq(4).text(truncateText(whoAttend)).data('full-text', whoAttend);
                    row.find('.edit-btn').data({ title, description, whyAttend, whatLearn, whoAttend, image });
                }, 1000);
            });

            // Delete service
            $(document).on('click', '.delete-btn', function() {
                const id = $(this).data('id');
                const title = $(this).data('title');
                $('#deleteTitle').text(title);
                $('#confirmDeleteBtn').data('id', id);
                $('#deleteModal').modal('show');
            });

            $('#confirmDeleteBtn').on('click', function() {
                const id = $(this).data('id');
                Swal.fire({
                    title: 'Deleting Service...',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                setTimeout(() => {
                    Swal.close();
                    showToast('Service deleted successfully!');
                    $('#deleteModal').modal('hide');
                    // Remove row from table (placeholder)
                    table.row($(`#servicesTable tr td button[data-id="${id}"]`).closest('tr')).remove().draw();
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