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
                                <p class="text-muted mb-0"><?php echo htmlspecialchars($settings['address']); ?></p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-light-custom p-3 rounded-circle me-3 text-center" style="width: 60px; height: 60px;">
                                <i class="fas fa-phone-alt fs-4 text-primary-color"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-secondary-color mb-1">Phone Number</h5>
                                <a href="tel:<?php echo htmlspecialchars(str_replace(' ', '', $settings['phone1'])); ?>" class="text-muted text-decoration-none d-block mb-1"><?php echo htmlspecialchars($settings['phone1']); ?></a>
                                <a href="tel:<?php echo htmlspecialchars(str_replace(' ', '', $settings['phone2'])); ?>" class="text-muted text-decoration-none d-block mb-1"><?php echo htmlspecialchars($settings['phone2']); ?></a>
                                <a href="tel:<?php echo htmlspecialchars(str_replace(' ', '', $settings['phone3'])); ?>" class="text-muted text-decoration-none d-block"><?php echo htmlspecialchars($settings['phone3']); ?></a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-light-custom p-3 rounded-circle me-3 text-center" style="width: 60px; height: 60px;">
                                <i class="fas fa-envelope fs-4 text-primary-color"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-secondary-color mb-1">Email Address</h5>
                                <a href="mailto:<?php echo htmlspecialchars($settings['email']); ?>" class="text-muted text-decoration-none d-block mb-1"><?php echo htmlspecialchars($settings['email']); ?></a>
                                <a href="mailto:<?php echo htmlspecialchars($settings['email_sales']); ?>" class="text-muted text-decoration-none d-block"><?php echo htmlspecialchars($settings['email_sales']); ?></a>
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

    <script>
        // Contact Form handling
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            if(contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const submitBtn = contactForm.querySelector('button[type="submit"]');
                    const originalBtnText = submitBtn.innerHTML;
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = 'Sending... <i class="fas fa-spinner fa-spin ms-2"></i>';

                    const formData = new FormData();
                    formData.append('form_type', 'contact');
                    formData.append('name', document.getElementById('name').value);
                    formData.append('email', document.getElementById('email').value);
                    formData.append('phone', document.getElementById('phone').value);
                    formData.append('subject', document.getElementById('subject').value);
                    formData.append('message', document.getElementById('message').value);

                    fetch('send-mail.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if(data.status === 'success') {
                            alert(data.message);
                            contactForm.reset();
                        } else {
                            alert('Error: ' + data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Something went wrong. Please try again.');
                    })
                    .finally(() => {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;
                    });
                });
            }
        });
    </script>

    <?php include 'footer.php'; ?>
