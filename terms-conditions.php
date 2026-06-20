<!-- Terms & Conditions Section -->
<section class="py-5 bg-white border-top">
    <div class="container">
        <div class="row g-4 align-items-center">
            <!-- Business Info & Address -->
            <div class="col-lg-5 animate-on-scroll">
                <div class="p-4 bg-light-custom rounded-4 shadow-sm border h-100">
                    <h4 class="fw-bold text-secondary-color mb-3">REVOXON INDUSTRIES PVT LTD</h4>
                    <p class="text-accent fw-bold mb-4">Official Registered Office</p>
                    
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex mb-3 align-items-start">
                            <i class="fas fa-map-marker-alt text-primary-color fs-5 me-3 mt-1"></i>
                            <div>
                                <span class="d-block fw-bold text-secondary-color">Registered Address</span>
                                <span class="text-muted small"><?php echo htmlspecialchars($settings['address']); ?></span>
                            </div>
                        </li>
                        <li class="d-flex mb-3 align-items-start">
                            <i class="fas fa-phone-alt text-primary-color fs-5 me-3 mt-1"></i>
                            <div>
                                <span class="d-block fw-bold text-secondary-color">Call Us</span>
                                <a href="tel:<?php echo htmlspecialchars(str_replace(' ', '', $settings['phone1'])); ?>" class="text-muted small text-decoration-none d-block mb-1"><?php echo htmlspecialchars($settings['phone1']); ?></a>
                                <a href="tel:<?php echo htmlspecialchars(str_replace(' ', '', $settings['phone2'])); ?>" class="text-muted small text-decoration-none d-block mb-1"><?php echo htmlspecialchars($settings['phone2']); ?></a>
                                <a href="tel:<?php echo htmlspecialchars(str_replace(' ', '', $settings['phone3'])); ?>" class="text-muted small text-decoration-none d-block"><?php echo htmlspecialchars($settings['phone3']); ?></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fas fa-envelope text-primary-color fs-5 me-3 mt-1"></i>
                            <div>
                                <span class="d-block fw-bold text-secondary-color">Email Support</span>
                                <a href="mailto:<?php echo htmlspecialchars($settings['email']); ?>" class="text-muted small text-decoration-none d-block"><?php echo htmlspecialchars($settings['email']); ?></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Commercial Terms -->
            <div class="col-lg-7 animate-on-scroll delay-1">
                <div class="p-4 border rounded-4 shadow-sm h-100">
                    <h4 class="fw-bold text-secondary-color mb-4 d-flex align-items-center">
                        <i class="fas fa-file-contract text-primary-color me-3"></i>Terms &amp; Conditions
                    </h4>
                    
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-file-invoice-dollar text-primary-color me-2 mt-1"></i>
                                <p class="text-muted small mb-0"><strong>Ex-Factory Prices:</strong> All prices are Ex-Factory. Freight &amp; Taxes will be charged extra as applicable.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-sync-alt text-primary-color me-2 mt-1"></i>
                                <p class="text-muted small mb-0"><strong>Price Alteration:</strong> Price terms and conditions are subject to alteration without any notice. No claims will be entertained.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-box text-primary-color me-2 mt-1"></i>
                                <p class="text-muted small mb-0"><strong>Standard Packaging:</strong> Material will be supplied in standard packaging and is subject to change without notice.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-drafting-compass text-primary-color me-2 mt-1"></i>
                                <p class="text-muted small mb-0"><strong>Design Changes:</strong> The company can make design or specification changes due to market demand; same has to be accepted by all.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-ban text-danger me-2 mt-1"></i>
                                <p class="text-muted small mb-0"><strong>No Cash Transactions:</strong> Do not do cash transactions with any employees. If you do, it will not be the company's responsibility.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-percent text-warning me-2 mt-1"></i>
                                <p class="text-muted small mb-0"><strong>Delayed Payment:</strong> If bill payment is not received within 30 days, interest @ 24% per annum will be charged on delayed payments.</p>
                            </div>
                        </div>
                        <div class="col-12 border-top pt-3">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-gavel text-primary-color me-2 mt-1"></i>
                                <p class="text-muted small mb-0"><strong>Jurisdiction:</strong> All disputes are subject to <strong>Prantij Jurisdiction Only</strong>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
