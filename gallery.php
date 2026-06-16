<?php
$page_title = "Photo Gallery | Revoxon Industries Pvt. Ltd.";
$page_description = "Learn about Revoxon Industries Pvt. Ltd., our vision, mission, and our journey as a leading manufacturer of PVC and UPVC pipes in India.";
include 'header.php';
?>

    <!-- Main Content -->
    <main>
<section class="page-banner bg-primary-color text-white py-5 text-center" style="background: linear-gradient(rgba(10, 77, 162, 0.85), rgba(30, 41, 59, 0.9)), url('assets/images/banner1.png') center/cover;">
        <div class="container py-4">
            <h1 class="display-5 fw-bold animation-fade-up text-white">Our Photo Gallery</h1>
            <nav aria-label="breadcrumb" class="animation-fade-up delay-1">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active text-accent" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </section>
    <style>
    .gallery-card {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
    }
    .gallery-card-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(10, 77, 162, 0.95));
        opacity: 0;
        transition: opacity 0.35s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 1.5rem;
        z-index: 2;
        pointer-events: none; /* Allows clicks to pass through to the image */
    }
    .gallery-card:hover .gallery-card-overlay {
        opacity: 1;
    }
    .nav-pills .nav-link {
        color: var(--secondary-color, #1e293b);
        border: 1px solid rgba(0,0,0,0.1);
        background: #f8fafc;
    }
    .nav-pills .nav-link.active {
        background-color: var(--primary-color, #0a4da2) !important;
        color: white !important;
        border-color: var(--primary-color, #0a4da2) !important;
        box-shadow: 0 4px 15px rgba(10, 77, 162, 0.3);
    }
    </style>

    <section class="py-5 bg-white">
        <div class="container py-4">
            <!-- Gallery Filters / Tabs -->
            <div class="row mb-5 animate-on-scroll">
                <div class="col-12 text-center">
                    <ul class="nav nav-pills justify-content-center mb-4" id="galleryTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active px-4 py-2.5 me-2 fs-6 fw-bold" id="brand-tab" data-bs-toggle="pill" data-bs-target="#brand-pane" type="button" role="tab" aria-controls="brand-pane" aria-selected="true" style="border-radius: 30px; transition: all 0.3s;">
                                <i class="fas fa-certificate me-2 text-accent"></i>Brand Products Showcase
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link px-4 py-2.5 fs-6 fw-bold" id="plant-tab" data-bs-toggle="pill" data-bs-target="#plant-pane" type="button" role="tab" aria-controls="plant-pane" aria-selected="false" style="border-radius: 30px; transition: all 0.3s;">
                                <i class="fas fa-industry me-2"></i>Plant & Infrastructure
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content" id="galleryTabsContent">
                <!-- Brand Products Tab -->
                <div class="tab-pane fade show active" id="brand-pane" role="tabpanel" aria-labelledby="brand-tab" tabindex="0">
                    <div class="row g-4">
                        <?php
                        $brand_images = [
                            "all_pipes_range_branded.jpeg" => "Revoxon Complete Pipes Range",
                            "column_pipes_branded.jpeg" => "Revoxon Column Pipes",
                            "hdpe_pipes_branded.jpeg" => "Revoxon HDPE Pipes",
                            "cpvc_pipes_branded.jpeg" => "Revoxon CPVC Pipes",
                            "upvc_pipes_branded.jpeg" => "Revoxon UPVC Pipes",
                            "swr_pipes_branded.jpeg" => "Revoxon SWR Pipes",
                            "agri_pipes_branded_2.jpeg" => "Revoxon Agriculture Pipes",
                            "agri_pipes_branded.jpeg" => "Revoxon Agriculture Pipes Range",
                            "all_products_branded.jpeg" => "Revoxon Complete Product Range",
                            "swr_fittings_branded.jpeg" => "Revoxon SWR Fittings",
                            "all_products_branded_2.jpeg" => "Revoxon All Products Collection",
                            "cpvc_fittings_branded.jpeg" => "Revoxon CPVC Fittings",
                            "upvc_fittings_branded.jpeg" => "Revoxon UPVC Fittings",
                            "pvc_adhesive_branded.jpeg" => "Revoxon PVC Adhesive",
                            "tshirt_navy_branded.jpeg" => "Revoxon Team Uniform",
                            "tshirt_blue_branded.jpeg" => "Revoxon Brand Merchandise",
                            "chemicals_branded.jpeg" => "Revoxon Construction Chemicals",
                            "chemicals_branded_2.jpeg" => "Revoxon Chemicals Range",
                            "chemicals_grid_branded.jpeg" => "Revoxon Chemical Products",
                            "casing_pipes_branded.jpeg" => "Revoxon Casing Pipes",
                            "casing_pipes_branded_2.jpeg" => "Revoxon Casing Pipes Range"
                        ];

                        $delay = 0;
                        foreach ($brand_images as $filename => $title) {
                            $img_path = "assets/images/product_with_company_name/" . $filename;
                            ?>
                            <div class="col-lg-4 col-md-6 animate-on-scroll" style="animation-delay: <?php echo $delay; ?>ms;">
                                <div class="card border-0 shadow-sm overflow-hidden h-100 position-relative gallery-card">
                                    <img src="<?php echo htmlspecialchars($img_path); ?>" class="img-fluid w-100 h-100 object-fit-cover" style="min-height: 280px; max-height: 280px; cursor: pointer; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'" alt="<?php echo htmlspecialchars($title); ?>" data-bs-toggle="modal" data-bs-target="#galleryModal" onclick="document.getElementById('modalImage').src=this.src; document.getElementById('modalTitle').innerText=this.alt">
                                    <div class="gallery-card-overlay">
                                        <h5 class="text-white fw-bold mb-1"><?php echo htmlspecialchars($title); ?></h5>
                                        <p class="text-accent small mb-0"><i class="fas fa-search-plus me-1"></i> Click to Zoom</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $delay = ($delay + 50) % 300;
                        }
                        ?>
                    </div>
                </div>

                <!-- Plant & Infrastructure Tab -->
                <div class="tab-pane fade" id="plant-pane" role="tabpanel" aria-labelledby="plant-tab" tabindex="0">
                    <div class="row g-4">
                        <?php
                        $delay = 0;
                        for ($i = 1; $i <= 45; $i++) {
                            ?>
                            <div class="col-lg-4 col-md-6 animate-on-scroll" style="animation-delay: <?php echo $delay; ?>ms;">
                                <div class="card border-0 shadow-sm overflow-hidden h-100 position-relative gallery-card">
                                    <img src="assets/images/gallery_<?php echo $i; ?>.jpeg" class="img-fluid w-100 h-100 object-fit-cover" style="min-height: 280px; max-height: 280px; cursor: pointer; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'" alt="Infrastructure Image <?php echo $i; ?>" data-bs-toggle="modal" data-bs-target="#galleryModal" onclick="document.getElementById('modalImage').src=this.src; document.getElementById('modalTitle').innerText=this.alt">
                                    <div class="gallery-card-overlay">
                                        <h5 class="text-white fw-bold mb-1">Infrastructure Glimpse <?php echo $i; ?></h5>
                                        <p class="text-accent small mb-0"><i class="fas fa-search-plus me-1"></i> Click to Zoom</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $delay = ($delay + 50) % 300;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Modal (Lightbox) -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-transparent border-0">
          <div class="modal-header border-0 pb-0 d-flex justify-content-between align-items-center">
            <h5 class="modal-title text-white fw-bold ms-3" id="modalTitle">Gallery Image</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1); opacity: 1;"></button>
          </div>
          <div class="modal-body text-center p-0 mt-2">
            <img id="modalImage" src="" class="img-fluid rounded shadow-lg" alt="Gallery Large View" style="max-height: 85vh;">
          </div>
        </div>
      </div>
    </div>
</main></main>

    <!-- Footer -->
    <footer class="footer bg-secondary-color text-white pt-5 pb-3">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="mb-4">
                        <img src="assets/images/logo/logo.jpeg" alt="Revoxon Logo" style="height: 60px; border-radius: 4px;">
                    </div>
                    <p class="text-light-opacity">A leading manufacturer of PVC, UPVC, CPVC, and SWR pipes in India. Delivering premium quality for agricultural, industrial, and residential needs.</p>
                    <a href="#" class="btn btn-accent-custom mt-2"><i class="fas fa-download me-2"></i>Download Catalogue</a>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h5 class="mb-4 text-white">Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="facility.php">Manufacturing Facility</a></li>
                        <li><a href="certifications.php">Certifications</a></li>
                        <li><a href="dealers.php">Dealer Program</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="mb-4 text-white">Products</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="agriculture-pipes.php">Agriculture Pipes</a></li>
                        <li><a href="upvc-pipes.php">UPVC Plumbing Pipes</a></li>
                        <li><a href="cpvc-pipes.php">CPVC Pipes</a></li>
                        <li><a href="swr-pipes.php">SWR Drainage Pipes</a></li>
                        <li><a href="chemicals.php">Construction Chemicals</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4 text-white">Contact Info</h5>
                    <ul class="list-unstyled contact-info">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-map-marker-alt text-accent me-3 mt-1"></i>
                            <span class="text-light-opacity">338/01, Majara Chokdi, NH-48, Vill & Ta – Tajpur, Prantij, Sabarkantha, Gujarat - 383205</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-phone-alt text-accent me-3 mt-1"></i>
                            <div>
                                <a href="tel:+919825706253" class="text-light-opacity text-decoration-none d-block mb-1">+91 98257 06253</a>
                                <a href="tel:+919460861021" class="text-light-opacity text-decoration-none d-block mb-1">+91 94608 61021</a>
                                <a href="tel:+918200945366" class="text-light-opacity text-decoration-none d-block">+91 82009 45366</a>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-envelope text-accent me-3 mt-1"></i>
                            <a href="mailto:info@revoxon.com" class="text-light-opacity text-decoration-none">info@revoxon.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="row align-items-center mt-3">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-light-opacity">&copy; 2026 Revoxon Industries Pvt. Ltd. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <a href="#" class="text-light-opacity me-3 text-decoration-none">Privacy Policy</a>
                    <a href="#" class="text-light-opacity text-decoration-none">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating CTAs -->
    <a href="https://wa.me/919825706253" class="floating-whatsapp" target="_blank" title="Chat With Our Pipe Expert">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="tel:+919825706253" class="floating-call d-flex d-lg-none" title="Call Now">
        <i class="fas fa-phone-alt"></i>
    </a>

    <!-- Sticky Mobile Bottom Bar -->
    <div class="mobile-bottom-bar d-lg-none d-flex justify-content-around bg-white shadow py-2 sticky-bottom border-top">
        <a href="tel:+919825706253" class="text-center text-decoration-none text-dark">
            <i class="fas fa-phone-alt d-block fs-5 text-primary-color mb-1"></i> Call Now
        </a>
        <a href="https://wa.me/919825706253" class="text-center text-decoration-none text-dark">
            <i class="fab fa-whatsapp d-block fs-5 text-success mb-1"></i> WhatsApp
        </a>
        <a href="#" class="text-center text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#quoteModal">
            <i class="fas fa-envelope-open-text d-block fs-5 text-accent mb-1"></i> Get Quote
        </a>
    </div>

    <!-- Quote Modal -->
    <div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary-color text-white">
                    <h5 class="modal-title" id="quoteModalLabel">Request a Quote</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="quoteForm">
                        <div class="mb-3">
                            <label for="quoteName" class="form-label">Name / Company</label>
                            <input type="text" class="form-control" id="quoteName" required>
                        </div>
                        <div class="mb-3">
                            <label for="quotePhone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="quotePhone" required>
                        </div>
                        <div class="mb-3">
                            <label for="quoteProduct" class="form-label">Interested Product</label>
                            <select class="form-select" id="quoteProduct">
                                <option value="Agriculture Pipes">Agriculture Pipes</option>
                                <option value="UPVC Pipes">UPVC Pipes</option>
                                <option value="CPVC Pipes">CPVC Pipes</option>
                                <option value="SWR Pipes">SWR Pipes</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="quoteMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="quoteMessage" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary-custom w-100">Submit Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>






