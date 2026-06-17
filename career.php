<?php
$page_title = "Careers | Revoxon Industries Pvt. Ltd.";
$page_description = "Join the Revoxon team. Explore career opportunities and be part of India's leading pipe manufacturing company.";
include 'header.php';
?>

    <main>
        <section class="page-banner bg-primary-color text-white py-5 text-center" style="background: linear-gradient(rgba(10, 77, 162, 0.85), rgba(30, 41, 59, 0.9)), url('assets/images/banner1.png') center/cover;">
            <div class="container py-4">
                <h1 class="display-5 fw-bold animation-fade-up">Build Your Career With Us</h1>
                <nav aria-label="breadcrumb" class="animation-fade-up delay-1">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-accent" aria-current="page">Careers</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="py-5 bg-white">
            <div class="container py-4">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 animate-on-scroll">
                        <h2 class="fw-bold text-secondary-color mb-4">Why Work at Revoxon?</h2>
                        <p class="text-muted">We believe our employees are our greatest asset. At Revoxon, we foster a culture of innovation, continuous learning, and mutual respect. Whether you're in the manufacturing plant, the research lab, or the sales field, your contribution drives our success.</p>
                        <ul class="list-unstyled mt-4 text-muted">
                            <li class="mb-3"><i class="fas fa-star text-accent me-2"></i> Competitive Salary & Benefits</li>
                            <li class="mb-3"><i class="fas fa-star text-accent me-2"></i> Opportunities for Career Growth</li>
                            <li class="mb-3"><i class="fas fa-star text-accent me-2"></i> Safe & Inclusive Workspace</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 animate-on-scroll delay-1">
                        <img src="assets/images/team_culture.png" class="img-fluid rounded shadow" alt="Team Culture">
                    </div>
                </div>

                <div class="mt-5 animate-on-scroll">
                    <h3 class="fw-bold text-secondary-color mb-4 text-center">Current Openings</h3>
                    <div class="accordion shadow-sm" id="careerAccordion">
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-primary-color" type="button" data-bs-toggle="collapse" data-bs-target="#job1">
                                    Area Sales Manager - Plumbing (Maharashtra)
                                </button>
                            </h2>
                            <div id="job1" class="accordion-collapse collapse" data-bs-parent="#careerAccordion">
                                <div class="accordion-body text-muted">
                                    <p><strong>Experience:</strong> 5-8 Years</p>
                                    <p><strong>Responsibilities:</strong> Handling dealer network, achieving sales targets, managing the sales team.</p>
                                    <button class="btn btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-primary-color" type="button" data-bs-toggle="collapse" data-bs-target="#job2">
                                    Extrusion Machine Operator
                                </button>
                            </h2>
                            <div id="job2" class="accordion-collapse collapse" data-bs-parent="#careerAccordion">
                                <div class="accordion-body text-muted">
                                    <p><strong>Experience:</strong> 2-4 Years</p>
                                    <p><strong>Responsibilities:</strong> Operating twin-screw extruders, maintaining production logs, quality checks.</p>
                                    <button class="btn btn-outline-primary mt-2" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Apply Modal -->
        <div class="modal fade" id="applyModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary-color text-white">
                        <h5 class="modal-title">Job Application</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3"><input type="text" class="form-control" placeholder="Full Name" required></div>
                            <div class="mb-3"><input type="email" class="form-control" placeholder="Email Address" required></div>
                            <div class="mb-3"><input type="tel" class="form-control" placeholder="Phone Number" required></div>
                            <div class="mb-3">
                                <label class="form-label text-muted small">Upload Resume (PDF/DOC)</label>
                                <input type="file" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary-custom w-100">Submit Application</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
