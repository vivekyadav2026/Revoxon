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

    <!-- Footer -->
    <footer class="footer bg-secondary-color text-white pt-5 pb-3">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="mb-4">
                        <img src="assets/images/logo/logo.jpeg" alt="Revoxon Logo" style="height: 60px; border-radius: 4px;">
                    </div>
                    <p class="text-light-opacity">A leading manufacturer of PVC, UPVC, CPVC, and SWR pipes in India. Delivering premium quality for agricultural, industrial, and residential needs.</p>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h5 class="mb-4 text-white">Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="facility.php">Facility</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="mb-4 text-white">Products</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="products.php">Agriculture Pipes</a></li>
                        <li><a href="products.php">UPVC Plumbing Pipes</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4 text-white">Contact Info</h5>
                    <ul class="list-unstyled contact-info">
                        <li class="mb-3"><i class="fas fa-phone-alt text-accent me-3"></i> +91 98765 43210</li>
                        <li class="mb-3"><i class="fas fa-envelope text-accent me-3"></i> info@revoxon.com</li>
                    </ul>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="text-center">
                <p class="mb-0 text-light-opacity">&copy; 2026 Revoxon Industries Pvt. Ltd. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating CTAs -->
    <a href="https://wa.me/919876543210" class="floating-whatsapp" target="_blank" title="Chat With Our Pipe Expert"><i class="fab fa-whatsapp"></i></a>
    <a href="tel:+919876543210" class="floating-call d-flex d-lg-none" title="Call Now"><i class="fas fa-phone-alt"></i></a>

    <!-- Quote Modal -->
    <div class="modal fade" id="quoteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary-color text-white">
                    <h5 class="modal-title">Request a Quote</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="quoteForm">
                        <div class="mb-3"><input type="text" class="form-control" placeholder="Name" required></div>
                        <div class="mb-3"><input type="tel" class="form-control" placeholder="Phone" required></div>
                        <div class="mb-3"><textarea class="form-control" placeholder="Message"></textarea></div>
                        <button type="submit" class="btn btn-primary-custom w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>




