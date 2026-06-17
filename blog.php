<?php
$page_title = "Blogs & Articles | Revoxon Industries Pvt. Ltd.";
$page_description = "Read the latest industry updates, plumbing solutions, and agriculture irrigation guides from Revoxon Industries.";
include 'header.php';
?>

    <main>
        <section class="page-banner bg-primary-color text-white py-5 text-center" style="background: linear-gradient(rgba(10, 77, 162, 0.85), rgba(30, 41, 59, 0.9)), url('assets/images/banner1.png') center/cover;">
            <div class="container py-4">
                <h1 class="display-5 fw-bold animation-fade-up">Blogs & Articles</h1>
                <nav aria-label="breadcrumb" class="animation-fade-up delay-1">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-accent" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="py-5 bg-light-custom">
            <div class="container py-4">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 animate-on-scroll">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="assets/images/factory.png" class="card-img-top" alt="Plumbing">
                            <div class="card-body p-4">
                                <span class="badge bg-accent mb-2">Plumbing Solutions</span>
                                <h4 class="card-title fw-bold text-primary-color mb-3">UPVC vs CPVC: Which is Better for Your Home?</h4>
                                <p class="card-text text-muted mb-4">A comprehensive guide explaining the differences between UPVC and CPVC pipes, and where to use them in residential projects.</p>
                                <a href="#" class="text-accent text-decoration-none fw-bold">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate-on-scroll delay-1">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="assets/images/factory.png" class="card-img-top" alt="Agriculture">
                            <div class="card-body p-4">
                                <span class="badge bg-accent mb-2">Agriculture</span>
                                <h4 class="card-title fw-bold text-primary-color mb-3">Maximizing Yield with Modern Drip Irrigation</h4>
                                <p class="card-text text-muted mb-4">Learn how integrating Revoxon agriculture pipes into your drip irrigation system can save water and increase crop yields.</p>
                                <a href="#" class="text-accent text-decoration-none fw-bold">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 animate-on-scroll delay-2">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="assets/images/factory.png" class="card-img-top" alt="Industry">
                            <div class="card-body p-4">
                                <span class="badge bg-accent mb-2">Industry Updates</span>
                                <h4 class="card-title fw-bold text-primary-color mb-3">The Future of PVC Piping in Smart Cities</h4>
                                <p class="card-text text-muted mb-4">Discover how high-durability PVC pipes are playing a crucial role in the development of underground infrastructure for smart cities.</p>
                                <a href="#" class="text-accent text-decoration-none fw-bold">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
