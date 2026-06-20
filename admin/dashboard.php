<?php
session_start();
require_once __DIR__ . '/db.php';

// Authentication Check
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: index.php');
    exit;
}

$message = '';
$error = '';

// Handle Actions (POST requests)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'update_settings') {
        try {
            $db->beginTransaction();
            $stmt = $db->prepare("UPDATE settings SET value = :value WHERE key = :key");
            
            $keys_to_update = [
                'phone1', 'phone2', 'phone3', 'email', 'email_sales', 
                'whatsapp', 'address', 'facebook', 'twitter', 'linkedin', 'instagram'
            ];
            
            foreach ($keys_to_update as $key) {
                if (isset($_POST[$key])) {
                    $stmt->execute([':value' => trim($_POST[$key]), ':key' => $key]);
                }
            }
            $db->commit();
            $message = 'Settings updated successfully.';
        } catch (PDOException $e) {
            $db->rollBack();
            $error = 'Error updating settings: ' . $e->getMessage();
        }
    } 
    // Handle Password Update
    elseif ($_POST['action'] === 'update_password') {
        $old_pass = $_POST['old_password'];
        $new_pass = $_POST['new_password'];
        $confirm_pass = $_POST['confirm_password'];
        
        if (empty($old_pass) || empty($new_pass) || empty($confirm_pass)) {
            $error = 'Please fill in all password fields.';
        } elseif ($new_pass !== $confirm_pass) {
            $error = 'New password and confirm password do not match.';
        } else {
            try {
                $stmt = $db->prepare("SELECT password FROM admins WHERE username = :username");
                $stmt->execute([':username' => $_SESSION['admin_username']]);
                $hash = $stmt->fetchColumn();
                
                if ($hash && password_verify($old_pass, $hash)) {
                    $new_hash = password_hash($new_pass, PASSWORD_DEFAULT);
                    $update_stmt = $db->prepare("UPDATE admins SET password = :password WHERE username = :username");
                    $update_stmt->execute([':password' => $new_hash, ':username' => $_SESSION['admin_username']]);
                    $message = 'Password changed successfully.';
                } else {
                    $error = 'Incorrect current password.';
                }
            } catch (PDOException $e) {
                $error = 'Error changing password: ' . $e->getMessage();
            }
        }
    }
    // Handle Delete Enquiry
    elseif ($_POST['action'] === 'delete_enquiry') {
        $id = intval($_POST['enquiry_id']);
        try {
            $stmt = $db->prepare("SELECT file_path FROM enquiries WHERE id = :id");
            $stmt->execute([':id' => $id]);
            $file_path = $stmt->fetchColumn();
            
            if ($file_path && file_exists(__DIR__ . '/../' . $file_path)) {
                @unlink(__DIR__ . '/../' . $file_path);
            }
            
            $del_stmt = $db->prepare("DELETE FROM enquiries WHERE id = :id");
            $del_stmt->execute([':id' => $id]);
            $message = 'Enquiry record deleted successfully.';
        } catch (PDOException $e) {
            $error = 'Error deleting enquiry: ' . $e->getMessage();
        }
    }
    // Handle Add Gallery Image
    elseif ($_POST['action'] === 'add_gallery_image') {
        $title = strip_tags(trim($_POST['gallery_title']));
        $category = strip_tags(trim($_POST['gallery_category']));
        
        if (empty($title) || empty($category) || !isset($_FILES['gallery_image'])) {
            $error = 'Please fill all fields and select an image.';
        } else {
            $file = $_FILES['gallery_image'];
            $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            if (!in_array($file['type'], $allowed_types) || $file['size'] > 5242880) { // 5MB limit
                $error = 'Invalid image format or size. Only JPG, PNG, GIF, and WEBP under 5MB are allowed.';
            } else {
                $upload_dir = __DIR__ . '/../uploads/gallery/';
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0755, true);
                }
                
                $file_ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                $new_file_name = uniqid('gallery_', true) . '.' . $file_ext;
                $dest_path = $upload_dir . $new_file_name;
                
                if (move_uploaded_file($file['tmp_name'], $dest_path)) {
                    try {
                        $db_path = 'uploads/gallery/' . $new_file_name;
                        $stmt = $db->prepare("INSERT INTO gallery (category, image_path, title) VALUES (:category, :image_path, :title)");
                        $stmt->execute([
                            ':category' => $category,
                            ':image_path' => $db_path,
                            ':title' => $title
                        ]);
                        $message = 'Image added to gallery successfully.';
                    } catch (PDOException $e) {
                        $error = 'Database error: ' . $e->getMessage();
                    }
                } else {
                    $error = 'Failed to upload image.';
                }
            }
        }
    }
    // Handle Delete Gallery Image
    elseif ($_POST['action'] === 'delete_gallery_image') {
        $id = intval($_POST['image_id']);
        try {
            $stmt = $db->prepare("SELECT image_path FROM gallery WHERE id = :id");
            $stmt->execute([':id' => $id]);
            $image_path = $stmt->fetchColumn();
            
            // Delete file if it exists and is in the uploads directory
            if ($image_path && strpos($image_path, 'uploads/') === 0 && file_exists(__DIR__ . '/../' . $image_path)) {
                @unlink(__DIR__ . '/../' . $image_path);
            }
            
            $del_stmt = $db->prepare("DELETE FROM gallery WHERE id = :id");
            $del_stmt->execute([':id' => $id]);
            $message = 'Gallery image deleted successfully.';
        } catch (PDOException $e) {
            $error = 'Error deleting gallery image: ' . $e->getMessage();
        }
    }
    // Handle Add Job Opening
    elseif ($_POST['action'] === 'add_job') {
        $title = strip_tags(trim($_POST['job_title']));
        $department = strip_tags(trim($_POST['job_department']));
        $location = strip_tags(trim($_POST['job_location']));
        $type = strip_tags(trim($_POST['job_type']));
        $experience = strip_tags(trim($_POST['job_experience']));
        $description = strip_tags(trim($_POST['job_description']));
        $requirements = strip_tags(trim($_POST['job_requirements']));
        
        if (empty($title) || empty($department) || empty($location) || empty($type) || empty($experience)) {
            $error = 'Please fill all required job details.';
        } else {
            try {
                $stmt = $db->prepare("INSERT INTO jobs (title, department, location, type, experience, description, requirements) VALUES (:title, :department, :location, :type, :experience, :description, :requirements)");
                $stmt->execute([
                    ':title' => $title,
                    ':department' => $department,
                    ':location' => $location,
                    ':type' => $type,
                    ':experience' => $experience,
                    ':description' => $description,
                    ':requirements' => $requirements
                ]);
                $message = 'Job opening posted successfully.';
            } catch (PDOException $e) {
                $error = 'Database error: ' . $e->getMessage();
            }
        }
    }
    // Handle Edit Job Opening
    elseif ($_POST['action'] === 'edit_job') {
        $id = intval($_POST['job_id']);
        $title = strip_tags(trim($_POST['job_title']));
        $department = strip_tags(trim($_POST['job_department']));
        $location = strip_tags(trim($_POST['job_location']));
        $type = strip_tags(trim($_POST['job_type']));
        $experience = strip_tags(trim($_POST['job_experience']));
        $description = strip_tags(trim($_POST['job_description']));
        $requirements = strip_tags(trim($_POST['job_requirements']));
        
        if (empty($title) || empty($department) || empty($location) || empty($type) || empty($experience)) {
            $error = 'Please fill all required job details.';
        } else {
            try {
                $stmt = $db->prepare("UPDATE jobs SET title = :title, department = :department, location = :location, type = :type, experience = :experience, description = :description, requirements = :requirements WHERE id = :id");
                $stmt->execute([
                    ':title' => $title,
                    ':department' => $department,
                    ':location' => $location,
                    ':type' => $type,
                    ':experience' => $experience,
                    ':description' => $description,
                    ':requirements' => $requirements,
                    ':id' => $id
                ]);
                $message = 'Job opening updated successfully.';
            } catch (PDOException $e) {
                $error = 'Database error: ' . $e->getMessage();
            }
        }
    }
    // Handle Delete Job Opening
    elseif ($_POST['action'] === 'delete_job') {
        $id = intval($_POST['job_id']);
        try {
            $stmt = $db->prepare("DELETE FROM jobs WHERE id = :id");
            $stmt->execute([':id' => $id]);
            $message = 'Job opening deleted successfully.';
        } catch (PDOException $e) {
            $error = 'Error deleting job: ' . $e->getMessage();
        }
    }
    // Handle Toggle Job Status
    elseif ($_POST['action'] === 'toggle_job_status') {
        $id = intval($_POST['job_id']);
        $status = $_POST['status'] === 'active' ? 'archived' : 'active';
        try {
            $stmt = $db->prepare("UPDATE jobs SET status = :status WHERE id = :id");
            $stmt->execute([':status' => $status, ':id' => $id]);
            $message = 'Job status updated successfully.';
        } catch (PDOException $e) {
            $error = 'Error updating status: ' . $e->getMessage();
        }
    }
}

// Fetch all settings
$settings = [];
$stmt = $db->query("SELECT * FROM settings");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $settings[$row['key']] = $row['value'];
}

// Fetch all enquiries ordered by date desc
$enquiries = $db->query("SELECT * FROM enquiries ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);

// Fetch all gallery items
$gallery_items = $db->query("SELECT * FROM gallery ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);

// Fetch all job postings
$jobs = $db->query("SELECT * FROM jobs ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);

// Count stats
$count_contact = 0;
$count_quote = 0;
$count_career = 0;
foreach ($enquiries as $enq) {
    if ($enq['type'] === 'contact') $count_contact++;
    elseif ($enq['type'] === 'quote') $count_quote++;
    elseif ($enq['type'] === 'career') $count_career++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Revoxon Industries</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #0057B8;
            --secondary: #002D62;
            --accent: #0077E6;
            --success: #10B981;
            --sidebar-width: 260px;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F8FAFC;
            color: #334155;
            overflow-x: hidden;
        }
        /* Sidebar Layout */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: var(--sidebar-width);
            background-color: #002D62;
            z-index: 1000;
            transition: all 0.3s ease;
            box-shadow: 4px 0 15px rgba(0,0,0,0.05);
        }
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 40px;
            min-height: 100vh;
            transition: all 0.3s ease;
        }
        /* Sidebar Brand */
        .sidebar-brand {
            padding: 24px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }
        /* Sidebar Menu Links */
        .sidebar-menu {
            padding: 20px 0;
        }
        .sidebar-menu .nav-link {
            color: rgba(255, 255, 255, 0.7);
            padding: 14px 24px;
            font-weight: 500;
            border-left: 4px solid transparent;
            transition: all 0.25s ease;
            display: flex;
            align-items: center;
        }
        .sidebar-menu .nav-link i {
            width: 24px;
            font-size: 1.1rem;
        }
        .sidebar-menu .nav-link:hover {
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.04);
        }
        .sidebar-menu .nav-link.active {
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.08);
            border-left-color: var(--accent);
        }
        /* Cards */
        .card-custom {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(15, 23, 42, 0.03);
            background: #ffffff;
        }
        .card-stat {
            border: none;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.02);
            transition: transform 0.3s ease;
            background-color: #ffffff;
        }
        .card-stat:hover {
            transform: translateY(-4px);
        }
        .icon-wrap-stat {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border: none;
            color: white;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .btn-primary-custom:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 87, 184, 0.25);
            color: white;
        }
        
        /* Responsive & Mobile overlay styles */
        .sidebar-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(15, 23, 42, 0.5);
            backdrop-filter: blur(4px);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        .sidebar-backdrop.active {
            opacity: 1;
            visibility: visible;
        }
        body.sidebar-open {
            overflow: hidden;
        }
        @media (max-width: 991.98px) {
            .sidebar {
                left: calc(-1 * var(--sidebar-width));
                z-index: 1001;
            }
            .sidebar.active {
                left: 0;
            }
            .main-content {
                margin-left: 0;
                padding: 24px 16px;
            }
            .main-content.active {
                margin-left: 0; /* Don't shift main content on mobile, overlay instead */
            }
        }
        .top-navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #E2E8F0;
            padding: 16px 24px;
        }
        .table-custom th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.8px;
            color: #64748B;
            background-color: #F8FAFC;
        }
        .gallery-admin-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.03);
            transition: all 0.3s ease;
            background: #fff;
        }
        .gallery-admin-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        }
    </style>
</head>
<body>

    <!-- Left Sidebar -->
    <div class="sidebar" id="sidebarMenu">
        <div class="sidebar-brand d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img src="../assets/images/logo/logo.jpeg" alt="Revoxon" style="height: 36px; border-radius: 4px;" class="me-2 bg-white p-1">
                <span class="text-white fw-bold tracking-wider fs-5">REVOXON</span>
            </div>
            <button class="btn btn-link text-white d-lg-none p-0 border-0" id="closeSidebarBtn" style="font-size: 1.25rem;">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="sidebar-menu nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill" href="#v-pills-dashboard" role="tab" aria-selected="true">
                <i class="fas fa-chart-line me-3"></i>Dashboard
            </a>
            <a class="nav-link" id="v-pills-contact-tab" data-bs-toggle="pill" href="#v-pills-contact" role="tab" aria-selected="false">
                <i class="fas fa-comment-dots me-3"></i>Contact Messages
            </a>
            <a class="nav-link" id="v-pills-quotes-tab" data-bs-toggle="pill" href="#v-pills-quotes" role="tab" aria-selected="false">
                <i class="fas fa-file-invoice-dollar me-3"></i>Quote Requests
            </a>
            <a class="nav-link" id="v-pills-careers-tab" data-bs-toggle="pill" href="#v-pills-careers" role="tab" aria-selected="false">
                <i class="fas fa-user-tie me-3"></i>Job Applications
            </a>
            <a class="nav-link" id="v-pills-gallery-tab" data-bs-toggle="pill" href="#v-pills-gallery" role="tab" aria-selected="false">
                <i class="fas fa-images me-3"></i>Gallery Showcase
            </a>
            <a class="nav-link" id="v-pills-jobs-tab" data-bs-toggle="pill" href="#v-pills-jobs" role="tab" aria-selected="false">
                <i class="fas fa-briefcase me-3"></i>Manage Job Postings
            </a>
            <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-selected="false">
                <i class="fas fa-cog me-3"></i>Website Settings
            </a>
            <a class="nav-link" id="v-pills-security-tab" data-bs-toggle="pill" href="#v-pills-security" role="tab" aria-selected="false">
                <i class="fas fa-shield-alt me-3"></i>Security Settings
            </a>
            <hr class="border-secondary mx-3">
            <a href="logout.php" class="nav-link text-danger-hover">
                <i class="fas fa-sign-out-alt me-3 text-danger"></i>Logout
            </a>
        </div>
    </div>

    <!-- Sidebar Backdrop for Mobile -->
    <div class="sidebar-backdrop d-lg-none" id="sidebarBackdrop"></div>

    <!-- Main Content Area -->
    <div class="main-content" id="mainContent">
        
        <!-- Top bar/header -->
        <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
            <div class="d-flex align-items-center">
                <button class="btn btn-outline-secondary d-lg-none me-3" id="sidebarToggleBtn"><i class="fas fa-bars"></i></button>
                <h4 class="fw-bold mb-0 text-dark">Admin Portal</h4>
            </div>
            <div class="d-flex align-items-center">
                <a href="../index.php" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill px-3 me-3"><i class="fas fa-external-link-alt me-2"></i>View Website</a>
                <span class="text-muted d-none d-sm-inline-block">Logged in as: <strong class="text-dark"><?php echo htmlspecialchars($_SESSION['admin_username']); ?></strong></span>
            </div>
        </div>

        <!-- Notification Alerts -->
        <?php if (!empty($message)): ?>
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mb-4 card-custom border-start border-success border-4" role="alert">
                <i class="fas fa-check-circle me-2 text-success fs-5"></i>
                <div class="text-success"><?php echo htmlspecialchars($message); ?></div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center mb-4 card-custom border-start border-danger border-4" role="alert">
                <i class="fas fa-exclamation-circle me-2 text-danger fs-5"></i>
                <div class="text-danger"><?php echo htmlspecialchars($error); ?></div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Dynamic Panels -->
        <div class="tab-content" id="v-pills-tabContent">
            
            <!-- Dashboard Home Panel -->
            <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel">
                <div class="row g-4 mb-5">
                    <div class="col-md-4">
                        <div class="card card-stat p-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-muted small fw-bold text-uppercase d-block mb-1">Messages</span>
                                    <h2 class="fw-bold text-secondary mb-0"><?php echo $count_contact; ?></h2>
                                </div>
                                <div class="icon-wrap-stat bg-success-subtle text-success"><i class="fas fa-comment-dots fs-4"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-stat p-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-muted small fw-bold text-uppercase d-block mb-1">Quotes Requested</span>
                                    <h2 class="fw-bold text-secondary mb-0"><?php echo $count_quote; ?></h2>
                                </div>
                                <div class="icon-wrap-stat bg-warning-subtle text-warning"><i class="fas fa-file-invoice-dollar fs-4"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-stat p-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-muted small fw-bold text-uppercase d-block mb-1">Applications</span>
                                    <h2 class="fw-bold text-secondary mb-0"><?php echo $count_career; ?></h2>
                                </div>
                                <div class="icon-wrap-stat bg-info-subtle text-info"><i class="fas fa-user-tie fs-4"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-custom p-4">
                    <h5 class="fw-bold text-dark mb-3">Recent Submissions (Last 5)</h5>
                    <div class="table-responsive">
                        <table class="table align-middle table-hover mb-0 table-custom">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Applicant/Company</th>
                                    <th>Contact</th>
                                    <th>Subject / Interest</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $recent_enqs = array_slice($enquiries, 0, 5);
                                if (count($recent_enqs) === 0): ?>
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-muted">No submissions yet.</td>
                                    </tr>
                                <?php else:
                                    foreach ($recent_enqs as $enq): ?>
                                        <tr>
                                            <td class="small text-muted"><?php echo date('d M Y, h:i A', strtotime($enq['created_at'])); ?></td>
                                            <td>
                                                <?php if ($enq['type'] === 'contact'): ?>
                                                    <span class="badge bg-success-subtle text-success px-3 py-1 rounded-pill">Contact</span>
                                                <?php elseif ($enq['type'] === 'quote'): ?>
                                                    <span class="badge bg-warning-subtle text-warning px-3 py-1 rounded-pill">Quote</span>
                                                <?php elseif ($enq['type'] === 'career'): ?>
                                                    <span class="badge bg-info-subtle text-info px-3 py-1 rounded-pill">Career</span>
                                                <?php endif; ?>
                                            </td>
                                            <td class="fw-medium"><?php echo htmlspecialchars($enq['name']); ?></td>
                                            <td class="small"><?php echo htmlspecialchars($enq['phone']); ?></td>
                                            <td class="small text-muted"><?php echo htmlspecialchars($enq['subject_or_product']); ?></td>
                                        </tr>
                                    <?php endforeach;
                                endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Contact Messages Panel -->
            <div class="tab-pane fade" id="v-pills-contact" role="tabpanel">
                <div class="card card-custom p-4">
                    <h5 class="fw-bold text-dark mb-4">Contact Enquiries</h5>
                    <div class="table-responsive">
                        <table class="table align-middle table-hover mb-0 table-custom">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Phone / Email</th>
                                    <th>Subject</th>
                                    <th>Message Details</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $has_contacts = false;
                                foreach ($enquiries as $enq): 
                                    if ($enq['type'] !== 'contact') continue;
                                    $has_contacts = true;
                                ?>
                                    <tr>
                                        <td class="small text-muted"><?php echo date('d M Y, h:i A', strtotime($enq['created_at'])); ?></td>
                                        <td class="fw-medium"><?php echo htmlspecialchars($enq['name']); ?></td>
                                        <td class="small">
                                            <div><i class="fas fa-phone-alt text-muted me-1"></i><?php echo htmlspecialchars($enq['phone']); ?></div>
                                            <div class="text-muted"><i class="fas fa-envelope text-muted me-1"></i><?php echo htmlspecialchars($enq['email']); ?></div>
                                        </td>
                                        <td class="small"><?php echo htmlspecialchars($enq['subject_or_product']); ?></td>
                                        <td style="max-width: 300px;" class="small text-muted"><?php echo htmlspecialchars($enq['message']); ?></td>
                                        <td class="text-center">
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this enquiry?');">
                                                <input type="hidden" name="action" value="delete_enquiry">
                                                <input type="hidden" name="enquiry_id" value="<?php echo $enq['id']; ?>">
                                                <button type="submit" class="btn btn-outline-danger btn-sm rounded-circle"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; 
                                if (!$has_contacts): ?>
                                    <tr>
                                        <td colspan="6" class="text-center py-4 text-muted">No contact messages received.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Quote Requests Panel -->
            <div class="tab-pane fade" id="v-pills-quotes" role="tabpanel">
                <div class="card card-custom p-4">
                    <h5 class="fw-bold text-dark mb-4">Quote Inquiries</h5>
                    <div class="table-responsive">
                        <table class="table align-middle table-hover mb-0 table-custom">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Company / Name</th>
                                    <th>Phone</th>
                                    <th>Product of Interest</th>
                                    <th>Message Details</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $has_quotes = false;
                                foreach ($enquiries as $enq): 
                                    if ($enq['type'] !== 'quote') continue;
                                    $has_quotes = true;
                                ?>
                                    <tr>
                                        <td class="small text-muted"><?php echo date('d M Y, h:i A', strtotime($enq['created_at'])); ?></td>
                                        <td class="fw-medium"><?php echo htmlspecialchars($enq['name']); ?></td>
                                        <td class="small"><i class="fas fa-phone-alt text-muted me-1"></i><?php echo htmlspecialchars($enq['phone']); ?></td>
                                        <td><span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-1"><?php echo htmlspecialchars($enq['subject_or_product']); ?></span></td>
                                        <td style="max-width: 300px;" class="small text-muted"><?php echo htmlspecialchars($enq['message']); ?></td>
                                        <td class="text-center">
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this quote request?');">
                                                <input type="hidden" name="action" value="delete_enquiry">
                                                <input type="hidden" name="enquiry_id" value="<?php echo $enq['id']; ?>">
                                                <button type="submit" class="btn btn-outline-danger btn-sm rounded-circle"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; 
                                if (!$has_quotes): ?>
                                    <tr>
                                        <td colspan="6" class="text-center py-4 text-muted">No quote requests received.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Job Applications Panel -->
            <div class="tab-pane fade" id="v-pills-careers" role="tabpanel">
                <div class="card card-custom p-4">
                    <h5 class="fw-bold text-dark mb-4">Job Applications & Resumes</h5>
                    <div class="table-responsive">
                        <table class="table align-middle table-hover mb-0 table-custom">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Contact Info</th>
                                    <th>Department</th>
                                    <th>Resume Attachment</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $has_careers = false;
                                foreach ($enquiries as $enq): 
                                    if ($enq['type'] !== 'career') continue;
                                    $has_careers = true;
                                ?>
                                    <tr>
                                        <td class="small text-muted"><?php echo date('d M Y, h:i A', strtotime($enq['created_at'])); ?></td>
                                        <td class="fw-medium"><?php echo htmlspecialchars($enq['name']); ?></td>
                                        <td class="small">
                                            <div><i class="fas fa-phone-alt text-muted me-1"></i><?php echo htmlspecialchars($enq['phone']); ?></div>
                                            <div class="text-muted"><i class="fas fa-envelope text-muted me-1"></i><?php echo htmlspecialchars($enq['email']); ?></div>
                                        </td>
                                        <td><span class="badge bg-secondary-subtle text-secondary px-3 py-1 rounded-pill"><?php echo htmlspecialchars($enq['subject_or_product']); ?></span></td>
                                        <td>
                                            <?php if (!empty($enq['file_path']) && file_exists(__DIR__ . '/../' . $enq['file_path'])): ?>
                                                <a href="../<?php echo htmlspecialchars($enq['file_path']); ?>" download class="btn btn-primary btn-sm rounded-pill px-3"><i class="fas fa-download me-2"></i>Download Resume</a>
                                            <?php else: ?>
                                                <span class="text-danger small"><i class="fas fa-times-circle me-1"></i>Missing Attachment</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center">
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this application?');">
                                                <input type="hidden" name="action" value="delete_enquiry">
                                                <input type="hidden" name="enquiry_id" value="<?php echo $enq['id']; ?>">
                                                <button type="submit" class="btn btn-outline-danger btn-sm rounded-circle"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; 
                                if (!$has_careers): ?>
                                    <tr>
                                        <td colspan="6" class="text-center py-4 text-muted">No job applications submitted yet.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Gallery Management Panel -->
            <div class="tab-pane fade" id="v-pills-gallery" role="tabpanel">
                <div class="row g-4">
                    <!-- Upload Form -->
                    <div class="col-lg-4">
                        <div class="card card-custom p-4">
                            <h5 class="fw-bold text-dark mb-4">Add Gallery Image</h5>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="add_gallery_image">
                                <div class="mb-3">
                                    <label for="gallery_title" class="form-label text-muted small fw-bold">Image Title</label>
                                    <input type="text" class="form-control bg-light border-0 py-2" id="gallery_title" name="gallery_title" placeholder="Enter image title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="gallery_category" class="form-label text-muted small fw-bold">Category</label>
                                    <select class="form-select bg-light border-0 py-2" id="gallery_category" name="gallery_category" required>
                                        <option value="" disabled selected>Select Category</option>
                                        <option value="brand">Brand Products Showcase</option>
                                        <option value="plant">Plant & Infrastructure</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="gallery_image" class="form-label text-muted small fw-bold">Select Image File</label>
                                    <input type="file" class="form-control bg-light border-0" id="gallery_image" name="gallery_image" accept="image/*" required>
                                    <div class="form-text text-muted small">Only JPG, PNG, GIF, WEBP under 5MB.</div>
                                </div>
                                <button type="submit" class="btn btn-primary-custom w-100 py-2 rounded-pill"><i class="fas fa-cloud-upload-alt me-2"></i>Upload Image</button>
                            </form>
                        </div>
                    </div>
                    <!-- Gallery Items Grid -->
                    <div class="col-lg-8">
                        <div class="card card-custom p-4">
                            <h5 class="fw-bold text-dark mb-4">Gallery Showcase Gallery</h5>
                            
                            <?php if (count($gallery_items) === 0): ?>
                                <div class="text-center py-5 text-muted">
                                    <i class="fas fa-images fs-1 mb-3 text-muted"></i>
                                    <p class="mb-0">No images uploaded in the gallery.</p>
                                </div>
                            <?php else: ?>
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                    <?php foreach ($gallery_items as $item): ?>
                                        <div class="col">
                                            <div class="gallery-admin-card h-100 position-relative">
                                                <img src="../<?php echo htmlspecialchars($item['image_path']); ?>" class="card-img-top object-fit-cover" style="height: 140px; background-color: #f8fafc;" alt="<?php echo htmlspecialchars($item['title']); ?>" onerror="this.src='../assets/images/logo/logo.jpeg'">
                                                <div class="card-body p-2.5">
                                                    <span class="badge <?php echo $item['category'] === 'brand' ? 'bg-primary' : 'bg-secondary'; ?> small mb-1"><?php echo $item['category'] === 'brand' ? 'Brand' : 'Plant'; ?></span>
                                                    <p class="card-text text-dark text-truncate small mb-2 fw-medium" title="<?php echo htmlspecialchars($item['title']); ?>"><?php echo htmlspecialchars($item['title']); ?></p>
                                                    <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this image?');" class="text-end">
                                                        <input type="hidden" name="action" value="delete_gallery_image">
                                                        <input type="hidden" name="image_id" value="<?php echo $item['id']; ?>">
                                                        <button type="submit" class="btn btn-outline-danger btn-sm py-0.5 px-2 rounded-2" style="font-size: 0.8rem;"><i class="fas fa-trash-alt me-1"></i>Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job Openings Manager Panel -->
            <div class="tab-pane fade" id="v-pills-jobs" role="tabpanel">
                <div class="row g-4">
                    <!-- Post Job Form -->
                    <div class="col-lg-4">
                        <div class="card card-custom p-4">
                            <h5 class="fw-bold text-dark mb-4">Post a New Job Opening</h5>
                            <form action="" method="POST">
                                <input type="hidden" name="action" value="add_job">
                                <div class="mb-3">
                                    <label for="job_title" class="form-label text-muted small fw-bold">Job Title</label>
                                    <input type="text" class="form-control bg-light border-0 py-2" id="job_title" name="job_title" placeholder="e.g. Sales Executive" required>
                                </div>
                                <div class="mb-3">
                                    <label for="job_department" class="form-label text-muted small fw-bold">Department</label>
                                    <select class="form-select bg-light border-0 py-2" id="job_department" name="job_department" required>
                                        <option value="" disabled selected>Select Department</option>
                                        <option value="Sales & Marketing">Sales & Marketing</option>
                                        <option value="Production & Operations">Production & Operations (Manufacturing)</option>
                                        <option value="Research & Development">Research & Development</option>
                                        <option value="Finance & Accounts">Finance & Accounts</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="job_location" class="form-label text-muted small fw-bold">Location</label>
                                    <input type="text" class="form-control bg-light border-0 py-2" id="job_location" name="job_location" placeholder="e.g. Gujarat Region" required>
                                </div>
                                <div class="mb-3">
                                    <label for="job_type" class="form-label text-muted small fw-bold">Job Type</label>
                                    <select class="form-select bg-light border-0 py-2" id="job_type" name="job_type" required>
                                        <option value="Full Time">Full Time</option>
                                        <option value="Part Time">Part Time</option>
                                        <option value="Contract">Contract</option>
                                        <option value="Internship">Internship</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="job_experience" class="form-label text-muted small fw-bold">Experience Required</label>
                                    <input type="text" class="form-control bg-light border-0 py-2" id="job_experience" name="job_experience" placeholder="e.g. 2-5 Years" required>
                                </div>
                                <div class="mb-3">
                                    <label for="job_description" class="form-label text-muted small fw-bold">Description / Role</label>
                                    <textarea class="form-control bg-light border-0 py-2" id="job_description" name="job_description" rows="3" placeholder="Brief job description..." required></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="job_requirements" class="form-label text-muted small fw-bold">Requirements / Qualifications</label>
                                    <textarea class="form-control bg-light border-0 py-2" id="job_requirements" name="job_requirements" rows="3" placeholder="Key qualifications/requirements..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary-custom w-100 py-2 rounded-pill"><i class="fas fa-plus me-2"></i>Post Job</button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Job Openings List -->
                    <div class="col-lg-8">
                        <div class="card card-custom p-4">
                            <h5 class="fw-bold text-dark mb-4">Current Job Openings</h5>
                            <div class="table-responsive">
                                <table class="table align-middle table-hover mb-0 table-custom">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Department / Location</th>
                                            <th>Experience / Type</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (count($jobs) === 0): ?>
                                            <tr>
                                                <td colspan="5" class="text-center py-4 text-muted">No jobs posted yet.</td>
                                            </tr>
                                        <?php else:
                                            foreach ($jobs as $job): ?>
                                                <tr>
                                                    <td>
                                                        <div class="fw-bold text-dark"><?php echo htmlspecialchars($job['title']); ?></div>
                                                        <div class="small text-muted text-truncate" style="max-width: 200px;" title="<?php echo htmlspecialchars($job['description']); ?>"><?php echo htmlspecialchars($job['description']); ?></div>
                                                    </td>
                                                    <td class="small">
                                                        <div><span class="text-muted">Dept:</span> <?php echo htmlspecialchars($job['department']); ?></div>
                                                        <div><span class="text-muted">Loc:</span> <?php echo htmlspecialchars($job['location']); ?></div>
                                                    </td>
                                                    <td class="small">
                                                        <div><span class="badge bg-secondary-subtle text-secondary rounded-pill px-2 py-0.5"><?php echo htmlspecialchars($job['type']); ?></span></div>
                                                        <div class="mt-1 text-muted"><i class="fas fa-briefcase me-1"></i><?php echo htmlspecialchars($job['experience']); ?></div>
                                                    </td>
                                                    <td>
                                                        <?php if ($job['status'] === 'active'): ?>
                                                            <span class="badge bg-success-subtle text-success px-3 py-1 rounded-pill">Active</span>
                                                        <?php else: ?>
                                                            <span class="badge bg-secondary-subtle text-secondary px-3 py-1 rounded-pill">Archived</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="d-flex justify-content-center gap-2">
                                                            <!-- View details -->
                                                            <button class="btn btn-outline-info btn-sm rounded-circle view-job-btn" 
                                                                    data-title="<?php echo htmlspecialchars($job['title']); ?>"
                                                                    data-dept="<?php echo htmlspecialchars($job['department']); ?>"
                                                                    data-loc="<?php echo htmlspecialchars($job['location']); ?>"
                                                                    data-type="<?php echo htmlspecialchars($job['type']); ?>"
                                                                    data-exp="<?php echo htmlspecialchars($job['experience']); ?>"
                                                                    data-desc="<?php echo htmlspecialchars($job['description']); ?>"
                                                                    data-req="<?php echo htmlspecialchars($job['requirements']); ?>"
                                                                    title="View Job Details">
                                                                <i class="fas fa-eye"></i>
                                                            </button>

                                                            <!-- Edit Job -->
                                                            <button class="btn btn-outline-primary btn-sm rounded-circle edit-job-btn" 
                                                                    data-id="<?php echo $job['id']; ?>"
                                                                    data-title="<?php echo htmlspecialchars($job['title']); ?>"
                                                                    data-dept="<?php echo htmlspecialchars($job['department']); ?>"
                                                                    data-loc="<?php echo htmlspecialchars($job['location']); ?>"
                                                                    data-type="<?php echo htmlspecialchars($job['type']); ?>"
                                                                    data-exp="<?php echo htmlspecialchars($job['experience']); ?>"
                                                                    data-desc="<?php echo htmlspecialchars($job['description']); ?>"
                                                                    data-req="<?php echo htmlspecialchars($job['requirements']); ?>"
                                                                    title="Edit Job">
                                                                <i class="fas fa-edit"></i>
                                                            </button>

                                                            <!-- Toggle Status -->
                                                            <form action="" method="POST" class="d-inline">
                                                                <input type="hidden" name="action" value="toggle_job_status">
                                                                <input type="hidden" name="job_id" value="<?php echo $job['id']; ?>">
                                                                <input type="hidden" name="status" value="<?php echo $job['status']; ?>">
                                                                <button type="submit" class="btn btn-outline-warning btn-sm rounded-circle" title="Toggle active/archived">
                                                                    <i class="fas <?php echo $job['status'] === 'active' ? 'fa-toggle-on' : 'fa-toggle-off'; ?>"></i>
                                                                </button>
                                                            </form>
                                                            
                                                            <!-- Delete Job -->
                                                            <form action="" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this job opening?');">
                                                                <input type="hidden" name="action" value="delete_job">
                                                                <input type="hidden" name="job_id" value="<?php echo $job['id']; ?>">
                                                                <button type="submit" class="btn btn-outline-danger btn-sm rounded-circle" title="Delete Permanent">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach;
                                        endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Website Settings Panel -->
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel">
                <div class="card card-custom p-4" style="max-width: 860px;">
                    <h5 class="fw-bold text-dark mb-4">Website Configuration</h5>
                    
                    <form action="" method="POST">
                        <input type="hidden" name="action" value="update_settings">
                        
                        <div class="row g-4">
                            <div class="col-md-4">
                                <label for="phone1" class="form-label text-muted small fw-bold">Primary Phone</label>
                                <input type="text" class="form-control bg-light border-0 py-2" id="phone1" name="phone1" value="<?php echo htmlspecialchars($settings['phone1']); ?>" required>
                            </div>
                            <div class="col-md-4">
                                <label for="phone2" class="form-label text-muted small fw-bold">Secondary Phone</label>
                                <input type="text" class="form-control bg-light border-0 py-2" id="phone2" name="phone2" value="<?php echo htmlspecialchars($settings['phone2']); ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="phone3" class="form-label text-muted small fw-bold">Plant Phone</label>
                                <input type="text" class="form-control bg-light border-0 py-2" id="phone3" name="phone3" value="<?php echo htmlspecialchars($settings['phone3']); ?>">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="whatsapp" class="form-label text-muted small fw-bold">WhatsApp Number (e.g. 9460861021)</label>
                                <input type="text" class="form-control bg-light border-0 py-2" id="whatsapp" name="whatsapp" value="<?php echo htmlspecialchars($settings['whatsapp']); ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label text-muted small fw-bold">General Email</label>
                                <input type="email" class="form-control bg-light border-0 py-2" id="email" name="email" value="<?php echo htmlspecialchars($settings['email']); ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email_sales" class="form-label text-muted small fw-bold">Sales Email</label>
                                <input type="email" class="form-control bg-light border-0 py-2" id="email_sales" name="email_sales" value="<?php echo htmlspecialchars($settings['email_sales']); ?>" required>
                            </div>
                            
                            <div class="col-12">
                                <label for="address" class="form-label text-muted small fw-bold">Address</label>
                                <textarea class="form-control bg-light border-0 py-2" id="address" name="address" rows="3" required><?php echo htmlspecialchars($settings['address']); ?></textarea>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="facebook" class="form-label text-muted small fw-bold">Facebook Link</label>
                                <input type="text" class="form-control bg-light border-0 py-2" id="facebook" name="facebook" value="<?php echo htmlspecialchars($settings['facebook']); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="twitter" class="form-label text-muted small fw-bold">Twitter Link</label>
                                <input type="text" class="form-control bg-light border-0 py-2" id="twitter" name="twitter" value="<?php echo htmlspecialchars($settings['twitter']); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="linkedin" class="form-label text-muted small fw-bold">LinkedIn Link</label>
                                <input type="text" class="form-control bg-light border-0 py-2" id="linkedin" name="linkedin" value="<?php echo htmlspecialchars($settings['linkedin']); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="instagram" class="form-label text-muted small fw-bold">Instagram Link</label>
                                <input type="text" class="form-control bg-light border-0 py-2" id="instagram" name="instagram" value="<?php echo htmlspecialchars($settings['instagram']); ?>">
                            </div>
                            
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary-custom px-4 py-2 rounded-pill"><i class="fas fa-save me-2"></i>Save Configuration</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Security Panel -->
            <div class="tab-pane fade" id="v-pills-security" role="tabpanel">
                <div class="card card-custom p-4" style="max-width: 500px;">
                    <h5 class="fw-bold text-dark mb-4">Security Options</h5>
                    <form action="" method="POST">
                        <input type="hidden" name="action" value="update_password">
                        <div class="mb-3">
                            <label for="old_password" class="form-label text-muted small fw-bold">Current Password</label>
                            <input type="password" class="form-control bg-light border-0 py-2" id="old_password" name="old_password" required>
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label text-muted small fw-bold">New Password</label>
                            <input type="password" class="form-control bg-light border-0 py-2" id="new_password" name="new_password" required>
                        </div>
                        <div class="mb-4">
                            <label for="confirm_password" class="form-label text-muted small fw-bold">Confirm New Password</label>
                            <input type="password" class="form-control bg-light border-0 py-2" id="confirm_password" name="confirm_password" required>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary-custom px-4 py-2 rounded-pill"><i class="fas fa-key me-2"></i>Update Password</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <!-- View Job Modal -->
    <div class="modal fade text-dark" id="viewJobModal" tabindex="-1" aria-labelledby="viewJobModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content card-custom border-0 shadow-lg" style="border-radius: 16px;">
                <div class="modal-header bg-light border-bottom-0 pb-0" style="border-radius: 16px 16px 0 0;">
                    <h5 class="modal-title fw-bold" id="viewJobModalLabel">Job Opening Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="fas fa-briefcase fs-4"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-0 text-dark" id="v_job_title"></h4>
                            <span class="small text-muted"><i class="fas fa-map-marker-alt me-1 text-primary"></i><span id="v_job_location"></span> &bull; <i class="fas fa-clock me-1 text-primary"></i><span id="v_job_type"></span></span>
                        </div>
                    </div>
                    
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <span class="text-muted small d-block">Department</span>
                            <strong class="text-dark" id="v_job_department"></strong>
                        </div>
                        <div class="col-md-6">
                            <span class="text-muted small d-block">Experience Required</span>
                            <strong class="text-dark" id="v_job_experience"></strong>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <h6 class="fw-bold text-dark"><i class="fas fa-info-circle text-primary me-2"></i>Job Description</h6>
                        <div class="p-3 bg-light rounded-3 text-muted small" style="white-space: pre-wrap;" id="v_job_description"></div>
                    </div>
                    
                    <div>
                        <h6 class="fw-bold text-dark"><i class="fas fa-list-check text-primary me-2"></i>Requirements & Qualifications</h6>
                        <div class="p-3 bg-light rounded-3 text-muted small" style="white-space: pre-wrap;" id="v_job_requirements"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Job Modal -->
    <div class="modal fade text-dark" id="editJobModal" tabindex="-1" aria-labelledby="editJobModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content card-custom border-0 shadow-lg" style="border-radius: 16px;">
                <div class="modal-header bg-light border-bottom-0 pb-0" style="border-radius: 16px 16px 0 0;">
                    <h5 class="modal-title fw-bold" id="editJobModalLabel">Edit Job Opening</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="" method="POST">
                        <input type="hidden" name="action" value="edit_job">
                        <input type="hidden" name="job_id" id="edit_job_id">
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="edit_job_title" class="form-label text-muted small fw-bold">Job Title</label>
                                <input type="text" class="form-control bg-light border-0 py-2" id="edit_job_title" name="job_title" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_job_department" class="form-label text-muted small fw-bold">Department</label>
                                <select class="form-select bg-light border-0 py-2" id="edit_job_department" name="job_department" required>
                                    <option value="Sales & Marketing">Sales & Marketing</option>
                                    <option value="Production & Operations">Production & Operations (Manufacturing)</option>
                                    <option value="Research & Development">Research & Development</option>
                                    <option value="Finance & Accounts">Finance & Accounts</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_job_location" class="form-label text-muted small fw-bold">Location</label>
                                <input type="text" class="form-control bg-light border-0 py-2" id="edit_job_location" name="job_location" required>
                            </div>
                            <div class="col-md-3">
                                <label for="edit_job_type" class="form-label text-muted small fw-bold">Job Type</label>
                                <select class="form-select bg-light border-0 py-2" id="edit_job_type" name="job_type" required>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Internship">Internship</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="edit_job_experience" class="form-label text-muted small fw-bold">Experience</label>
                                <input type="text" class="form-control bg-light border-0 py-2" id="edit_job_experience" name="job_experience" required>
                            </div>
                            <div class="col-12">
                                <label for="edit_job_description" class="form-label text-muted small fw-bold">Description / Role</label>
                                <textarea class="form-control bg-light border-0 py-2" id="edit_job_description" name="job_description" rows="3" required></textarea>
                            </div>
                            <div class="col-12 text-dark">
                                <label for="edit_job_requirements" class="form-label text-muted small fw-bold">Requirements / Qualifications</label>
                                <textarea class="form-control bg-light border-0 py-2" id="edit_job_requirements" name="job_requirements" rows="3" required></textarea>
                            </div>
                            <div class="col-12 text-end mt-4">
                                <button type="button" class="btn btn-secondary px-4 py-2 rounded-pill me-2" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary-custom px-4 py-2 rounded-pill"><i class="fas fa-save me-2"></i>Update Job Opening</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sidebar responsive toggler
        const toggleBtn = document.getElementById('sidebarToggleBtn');
        const closeBtn = document.getElementById('closeSidebarBtn');
        const sidebar = document.getElementById('sidebarMenu');
        const backdrop = document.getElementById('sidebarBackdrop');
        
        function openSidebar() {
            sidebar.classList.add('active');
            backdrop.classList.add('active');
            document.body.classList.add('sidebar-open');
        }
        
        function closeSidebar() {
            sidebar.classList.remove('active');
            backdrop.classList.remove('active');
            document.body.classList.remove('sidebar-open');
        }
        
        if (toggleBtn) {
            toggleBtn.addEventListener('click', openSidebar);
        }
        if (closeBtn) {
            closeBtn.addEventListener('click', closeSidebar);
        }
        if (backdrop) {
            backdrop.addEventListener('click', closeSidebar);
        }

        // Auto-dismiss sidebar on mobile link click
        document.querySelectorAll('#v-pills-tab .nav-link').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 992) {
                    closeSidebar();
                }
            });
        });

        // View Job modal mapping
        document.querySelectorAll('.view-job-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.getElementById('v_job_title').textContent = this.getAttribute('data-title');
                document.getElementById('v_job_department').textContent = this.getAttribute('data-dept');
                document.getElementById('v_job_location').textContent = this.getAttribute('data-loc');
                document.getElementById('v_job_type').textContent = this.getAttribute('data-type');
                document.getElementById('v_job_experience').textContent = this.getAttribute('data-exp');
                document.getElementById('v_job_description').textContent = this.getAttribute('data-desc');
                document.getElementById('v_job_requirements').textContent = this.getAttribute('data-req');
                
                const viewModal = new bootstrap.Modal(document.getElementById('viewJobModal'));
                viewModal.show();
            });
        });

        // Edit Job modal mapping
        document.querySelectorAll('.edit-job-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.getElementById('edit_job_id').value = this.getAttribute('data-id');
                document.getElementById('edit_job_title').value = this.getAttribute('data-title');
                document.getElementById('edit_job_department').value = this.getAttribute('data-dept');
                document.getElementById('edit_job_location').value = this.getAttribute('data-loc');
                document.getElementById('edit_job_type').value = this.getAttribute('data-type');
                document.getElementById('edit_job_experience').value = this.getAttribute('data-exp');
                document.getElementById('edit_job_description').value = this.getAttribute('data-desc');
                document.getElementById('edit_job_requirements').value = this.getAttribute('data-req');
                
                const editModal = new bootstrap.Modal(document.getElementById('editJobModal'));
                editModal.show();
            });
        });
    </script>
</body>
</html>
