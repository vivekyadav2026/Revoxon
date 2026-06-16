<?php
$page_title = "FAQ | Revoxon Industries Pvt. Ltd.";
$page_description = "";
include 'header.php';
?>

    <main>
        <section class="page-banner bg-primary-color text-white py-5 text-center" style="background: linear-gradient(rgba(10, 77, 162, 0.85), rgba(30, 41, 59, 0.9)), url('assets/images/banner1.png') center/cover;">
            <div class="container py-4">
                <h1 class="display-5 fw-bold animation-fade-up">Frequently Asked Questions</h1>
                <nav aria-label="breadcrumb" class="animation-fade-up delay-1">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-accent" aria-current="page">FAQ</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="py-5 bg-light-custom">
            <div class="container py-4 animate-on-scroll">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion shadow-sm" id="faqAccordion">
                            <div class="accordion-item border-0 border-bottom">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fw-bold text-primary-color" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        What is the difference between UPVC and CPVC pipes?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        UPVC (Unplasticized Polyvinyl Chloride) is ideal for cold water applications, while CPVC (Chlorinated Polyvinyl Chloride) can handle both hot and cold water, withstanding temperatures up to 93°C.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 border-bottom">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold text-primary-color" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        How can I become a dealer for Revoxon Industries?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        You can apply for dealership by visiting our <a href="dealers.php">Dealers Page</a> and filling out the application form. Our sales team will get in touch with you shortly.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold text-primary-color" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        Are your pipes lead-free?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted">
                                        Yes, our UPVC and CPVC plumbing pipes are 100% lead-free and completely safe for potable drinking water supply.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer bg-secondary-color text-white pt-4 pb-3">
        <div class="container text-center">
            <p class="mb-0 text-light-opacity">&copy; 2026 Revoxon Industries Pvt. Ltd. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>



