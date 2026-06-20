<?php
require_once __DIR__ . '/settings_loader.php';
$currentPage = basename($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : "Revoxon Industries Pvt. Ltd. | Premium PVC & UPVC Pipes Manufacturer"; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : "Revoxon Industries Pvt. Ltd. is a leading manufacturer of premium PVC Pipes, UPVC Pipes, CPVC Pipes, SWR Pipes, and Construction Chemicals in India."; ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="<?php echo ($currentPage == 'index.php') ? 'home-page' : ''; ?>">
 
    <!-- Topbar -->
    <div class="topbar-utility d-none d-lg-block bg-slate-light border-bottom py-1">
        <div class="container-fluid px-xl-5 px-3">
            <div class="row align-items-center">
                <div class="col-md-6 text-start">
                    <span class="me-4"><i class="fas fa-envelope text-primary-color me-2"></i><a href="mailto:<?php echo htmlspecialchars($settings['email']); ?>" class="text-decoration-none"><?php echo htmlspecialchars($settings['email']); ?></a></span>
                    <span><i class="fas fa-phone-alt text-primary-color me-2"></i><a href="tel:<?php echo htmlspecialchars(str_replace(' ', '', $settings['phone1'])); ?>" class="text-decoration-none"><?php echo htmlspecialchars($settings['phone1'] . ' / ' . $settings['phone2'] . ' / ' . $settings['phone3']); ?></a></span>
                </div>
                <div class="col-md-6 text-end">
                    <a href="<?php echo htmlspecialchars($settings['facebook']); ?>" class="topbar-social-link me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php echo htmlspecialchars($settings['twitter']); ?>" class="topbar-social-link me-3"><i class="fab fa-twitter"></i></a>
                    <a href="<?php echo htmlspecialchars($settings['linkedin']); ?>" class="topbar-social-link me-3"><i class="fab fa-linkedin-in"></i></a>
                    <a href="<?php echo htmlspecialchars($settings['instagram']); ?>" class="topbar-social-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header / Navbar -->
    <header class="header sticky-top bg-white shadow-sm">
        <div class="container-fluid px-xl-5 px-3">
            <nav class="navbar navbar-expand-lg navbar-light py-3">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="assets/images/logo/logo.jpeg" alt="Revoxon Industries" style="border-radius: 4px;" class="me-2 brand-logo-img">
                    <span class="fw-bold text-navy-dark brand-name-text"><span class="text-orange-accent">REVOXON</span> INDUSTRIES</span>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header border-bottom d-flex d-lg-none">
                        <a class="navbar-brand d-flex align-items-center" href="index.php">
                            <img src="assets/images/logo/logo.jpeg" alt="Revoxon Industries" style="border-radius: 4px;" class="me-2 brand-logo-img">
                            <span class="fw-bold text-navy-dark brand-name-text"><span class="text-orange-accent">REVOXON</span> INDUSTRIES</span>
                        </a>
                        <button type="button" class="btn-close-custom text-dark" data-bs-dismiss="offcanvas" aria-label="Close" style="background:none; border:none; font-size: 24px;">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-medium">
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php echo in_array($currentPage, ['products.php', 'agriculture-pipes.php', 'upvc-pipes.php', 'cpvc-pipes.php', 'swr-pipes.php', 'casing-pipes.php', 'conduit-pipes.php', 'fittings.php', 'adhesives.php', 'chemicals.php']) ? 'active' : ''; ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>Products</span>
                                    <i class="fas fa-plus d-lg-none dropdown-toggle-icon" style="font-size: 1.1rem; margin-left: 10px;"></i>
                                    <i class="fas fa-chevron-down ms-1 d-none d-lg-inline-block dropdown-arrow-icon" style="font-size: 0.75rem; transition: transform 0.3s ease;"></i>
                                </a>
                                <ul class="dropdown-menu border-0 shadow" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item <?php echo ($currentPage == 'agriculture-pipes.php') ? 'active' : ''; ?>" href="agriculture-pipes.php">Agriculture Pipes</a></li>
                                    <li><a class="dropdown-item <?php echo ($currentPage == 'upvc-pipes.php') ? 'active' : ''; ?>" href="upvc-pipes.php">UPVC Pipes</a></li>
                                    <li><a class="dropdown-item <?php echo ($currentPage == 'cpvc-pipes.php') ? 'active' : ''; ?>" href="cpvc-pipes.php">CPVC Pipes</a></li>
                                    <li><a class="dropdown-item <?php echo ($currentPage == 'swr-pipes.php') ? 'active' : ''; ?>" href="swr-pipes.php">SWR Pipes</a></li>
                                    <li><a class="dropdown-item <?php echo ($currentPage == 'casing-pipes.php') ? 'active' : ''; ?>" href="casing-pipes.php">Casing & Column Pipes</a></li>
                                    <li><a class="dropdown-item <?php echo ($currentPage == 'conduit-pipes.php') ? 'active' : ''; ?>" href="conduit-pipes.php">Conduit Pipes</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item <?php echo ($currentPage == 'fittings.php') ? 'active' : ''; ?>" href="fittings.php">Pipe Fittings</a></li>
                                    <li><a class="dropdown-item <?php echo ($currentPage == 'adhesives.php') ? 'active' : ''; ?>" href="adhesives.php">Solvents & Adhesives</a></li>
                                    <li><a class="dropdown-item <?php echo ($currentPage == 'chemicals.php') ? 'active' : ''; ?>" href="chemicals.php">Construction Chemicals</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($currentPage == 'facility.php') ? 'active' : ''; ?>" href="facility.php">Infrastructure</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($currentPage == 'dealers.php') ? 'active' : ''; ?>" href="dealers.php">Dealers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($currentPage == 'gallery.php') ? 'active' : ''; ?>" href="gallery.php">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($currentPage == 'career.php') ? 'active' : ''; ?>" href="career.php">Careers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <div class="d-flex align-items-center ms-lg-4 mt-3 mt-lg-0 btn-quote-wrap">
                            <!-- Get Free Quote Button -->
                            <a href="#" class="btn btn-get-quote w-100 w-lg-auto" data-bs-toggle="modal" data-bs-target="#quoteModal">Get Free Quote</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
