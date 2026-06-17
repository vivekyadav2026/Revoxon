<?php
$page_title = "Manufacturing Facility | Revoxon Industries Pvt. Ltd.";
$page_description = "Discover Revoxon Industries' state-of-the-art manufacturing facility, advanced extrusion machinery, and high production capacity.";
include 'header.php';
?>

    <!-- Main Content -->
    <main>
        <!-- Page Banner -->
        <section class="page-banner bg-primary-color text-white py-5 text-center" style="background: linear-gradient(rgba(10, 77, 162, 0.85), rgba(30, 41, 59, 0.9)), url('assets/images/banner1.png') center/cover;">
            <div class="container py-4">
                <h1 class="display-5 fw-bold animation-fade-up">Manufacturing Facility</h1>
                <nav aria-label="breadcrumb" class="animation-fade-up delay-1">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-accent" aria-current="page">Facility</li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Factory Overview -->
        <section class="py-5 bg-white">
            <div class="container py-4">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 animate-on-scroll">
                        <h6 class="text-accent fw-bold text-uppercase mb-2">Infrastructure</h6>
                        <h2 class="fw-bold mb-4 text-secondary-color">State-of-the-Art Manufacturing</h2>
                        <p class="text-muted mb-4">Revoxon Industries boasts one of the most advanced pipe manufacturing facilities in India, spread across 10 acres. Equipped with the latest twin-screw extruders and fully automated mixing plants, we ensure precision, consistency, and high production capacity.</p>
                        <div class="d-flex mb-3">
                            <div class="me-4 text-center">
                                <h4 class="fw-bold text-primary-color mb-0">50,000+</h4>
                                <p class="small text-muted">MT/Year Capacity</p>
                            </div>
                            <div class="text-center">
                                <h4 class="fw-bold text-primary-color mb-0">24/7</h4>
                                <p class="small text-muted">Operations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 animate-on-scroll delay-1">
                        <img src="assets/images/factory.png" class="img-fluid rounded shadow" alt="Extrusion Machines">
                    </div>
                </div>

                <!-- Production Process Timeline -->
                <div class="row mt-5 pt-4 border-top animate-on-scroll">
                    <div class="col-12 text-center mb-5">
                        <h3 class="fw-bold text-secondary-color">Our Production Process</h3>
                    </div>
                    <div class="col-md-3 text-center mb-4">
                        <div class="bg-light-custom p-4 rounded shadow-sm h-100 border border-1">
                            <i class="fas fa-boxes fs-1 text-accent mb-3"></i>
                            <h5 class="fw-bold text-primary-color">1. Raw Material</h5>
                            <p class="small text-muted">Procurement of premium grade PVC resins and specific additives.</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center mb-4">
                        <div class="bg-light-custom p-4 rounded shadow-sm h-100 border border-1">
                            <i class="fas fa-blender fs-1 text-accent mb-3"></i>
                            <h5 class="fw-bold text-primary-color">2. Automated Mixing</h5>
                            <p class="small text-muted">Computerized compounding for precise and uniform formulation.</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center mb-4">
                        <div class="bg-light-custom p-4 rounded shadow-sm h-100 border border-1">
                            <i class="fas fa-industry fs-1 text-accent mb-3"></i>
                            <h5 class="fw-bold text-primary-color">3. Extrusion</h5>
                            <p class="small text-muted">High-speed twin-screw extrusion with uniform thickness control.</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center mb-4">
                        <div class="bg-light-custom p-4 rounded shadow-sm h-100 border border-1">
                            <i class="fas fa-microscope fs-1 text-accent mb-3"></i>
                            <h5 class="fw-bold text-primary-color">4. Testing & QA</h5>
                            <p class="small text-muted">Rigorous in-house lab testing before final packaging and dispatch.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery -->
        <section class="py-5 bg-light-custom">
            <div class="container py-4">
                <div class="text-center mb-5 animate-on-scroll">
                    <h6 class="text-accent fw-bold text-uppercase mb-2">Inside Revoxon</h6>
                    <h2 class="fw-bold text-secondary-color">Facility Gallery</h2>
                </div>
                <div class="row g-4 animate-on-scroll delay-1">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="assets/images/quality_lab.png" class="card-img-top w-100" alt="Factory Outside">
                            <div class="card-body text-center p-3">
                                <h6 class="fw-bold text-primary-color mb-0">Production Plant</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="assets/images/quality_lab.png" class="card-img-top w-100" alt="Quality Control Lab">
                            <div class="card-body text-center p-3">
                                <h6 class="fw-bold text-primary-color mb-0">Quality Control Lab</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="assets/images/quality_lab.png" class="card-img-top w-100" alt="Warehouse">
                            <div class="card-body text-center p-3">
                                <h6 class="fw-bold text-primary-color mb-0">Finished Goods Warehouse</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
