<?php
$page_title = "Contact Us | Revoxon Industries Pvt. Ltd.";
$page_description = "Contact Revoxon Industries for product inquiries, dealer applications, or general questions. Find our office address, phone number, and email.";
include 'header.php';
?>

    <!-- Main Content -->
    <main>
        <!-- Page Banner -->
        <section class="page-banner bg-primary-color text-white py-5 text-center" style="background: linear-gradient(rgba(10, 77, 162, 0.85), rgba(30, 41, 59, 0.9)), url('assets/images/banner1.png') center/cover;">
            <div class="container py-4">
                <h1 class="display-5 fw-bold animation-fade-up">Contact Us</h1>
                <nav aria-label="breadcrumb" class="animation-fade-up delay-1">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-accent" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="py-5 bg-white">
            <div class="container py-4">
                <div class="row g-5">
                    <!-- Contact Info -->
                    <div class="col-lg-4 animate-on-scroll">
                        <h2 class="fw-bold text-secondary-color mb-4">Get In Touch</h2>
                        <p class="text-muted mb-5">Have questions about our products, pricing, or dealership? Our team is ready to assist you.</p>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-light-custom p-3 rounded-circle me-3 text-center" style="width: 60px; height: 60px;">
                                <i class="fas fa-map-marker-alt fs-4 text-primary-color"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-secondary-color mb-1">Head Office & Works</h5>
                                <p class="text-muted mb-0">338/01, Majara Chokdi, NH-48,<br>Vill &amp; Ta &ndash; Tajpur, Prantij, Sabarkantha, Gujarat - 383205</p>
                            </div>
                        </div>

                                                <div class="d-flex align-items-start mb-4">
                            <div class="bg-light-custom p-3 rounded-circle me-3 text-center" style="width: 60px; height: 60px;">
                                <i class="fas fa-phone-alt fs-4 text-primary-color"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-secondary-color mb-1">Phone Number</h5>
                                <a href="tel:+919825706253" class="text-muted text-decoration-none d-block mb-1">+91 98257 06253</a>
                                <a href="tel:+919460861021" class="text-muted text-decoration-none d-block mb-1">+91 94608 61021</a>
                                <a href="tel:+918200945366" class="text-muted text-decoration-none d-block">+91 82009 45366</a>
                            </div>
                        </div>

                                                <div class="d-flex align-items-start mb-4">
                            <div class="bg-light-custom p-3 rounded-circle me-3 text-center" style="width: 60px; height: 60px;">
                                <i class="fas fa-envelope fs-4 text-primary-color"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-secondary-color mb-1">Email Address</h5>
                                <a href="mailto:info@revoxon.com" class="text-muted text-decoration-none d-block mb-1">info@revoxon.com</a>
                                <a href="mailto:sales@revoxon.com" class="text-muted text-decoration-none d-block">sales@revoxon.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-lg-8 animate-on-scroll delay-1">
                        <div class="bg-light-custom p-5 rounded shadow-sm h-100">
                            <h3 class="fw-bold text-secondary-color mb-4">Send Us a Message</h3>
                            <form id="contactForm">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                                            <label for="name">Your Name *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                                            <label for="email">Email Address *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" id="phone" placeholder="Phone Number" required>
                                            <label for="phone">Phone Number *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="subject">
                                                <option value="General Inquiry">General Inquiry</option>
                                                <option value="Product Pricing">Product Pricing</option>
                                                <option value="Dealership">Dealership</option>
                                                <option value="Feedback">Feedback</option>
                                            </select>
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px" required></textarea>
                                            <label for="message">Message *</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary-custom btn-lg w-100 py-3">Send Message <i class="fas fa-paper-plane ms-2"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Google Map -->
        <section class="py-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3662.51231772731!2d72.80207061767578!3d23.36967658996582!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395dd0352f3fbdbb%3A0x841f0848e8a543a2!2sREVOXON%20PIPES!5e0!3m2!1sen!2sin!4v1781555661860!5m2!1sen!2sin" width="100%" height="450" style="border:0; filter: grayscale(20%);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    <script src="assets/js/main.js">
        // Contact Form handling
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            if(contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Thank you! Your message has been sent successfully.');
                    contactForm.reset();
                });
            }
        });
    </script>
</body>
</html>



