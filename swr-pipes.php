<?php
$page_title = "SWR Pipes | Revoxon Industries Pvt. Ltd.";
$page_description = "Learn about Revoxon Industries Pvt. Ltd., our vision, mission, and our journey as a leading manufacturer of PVC and UPVC pipes in India.";
include 'header.php';
?>

    <!-- Main Content -->
    <main>
    <section class="page-banner bg-primary-color text-white py-5 text-center" style="background: linear-gradient(rgba(10, 77, 162, 0.85), rgba(30, 41, 59, 0.9)), url('assets/images/banner2.png') center/cover;">
        <div class="container py-4">
            <h1 class="display-5 fw-bold animation-fade-up text-white">SWR Pipes</h1>
            <nav aria-label="breadcrumb" class="animation-fade-up delay-1">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="products.php" class="text-white text-decoration-none">Products</a></li>
                    <li class="breadcrumb-item active text-accent" aria-current="page">SWR Pipes</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0 animate-on-scroll">
                    <img src="assets/images/product_with_company_name/swr_pipes_branded.jpeg" class="img-fluid rounded shadow w-100" alt="SWR Pipes">
                </div>
                <div class="col-lg-6 animate-on-scroll delay-1">
                    <h2 class="fw-bold text-secondary-color mb-3">SWR Pipes</h2>
                    <p class="text-muted fs-5 mb-4">Soil, Waste, and Rainwater drainage systems featuring high impact strength and leak-proof joints.</p>
                    <p class="text-muted mb-4">Revoxon Industries manufactures world-class SWR Pipes using advanced extrusion technology. Our products undergo rigorous lab testing to ensure they meet international quality standards and provide a long-lasting, leak-proof experience.</p>
                    <ul class="list-unstyled mb-4 text-muted">
                        <li class="mb-2"><i class="fas fa-check text-primary-color me-2"></i> High Durability & Strength</li>
                        <li class="mb-2"><i class="fas fa-check text-primary-color me-2"></i> Corrosion & Chemical Resistant</li>
                        <li class="mb-2"><i class="fas fa-check text-primary-color me-2"></i> Easy Installation</li>
                        <li><i class="fas fa-check text-primary-color me-2"></i> 100% Quality Tested</li>
                    </ul>
                    <a href="#" class="btn btn-primary-custom btn-lg" data-bs-toggle="modal" data-bs-target="#quoteModal">Request Quote</a>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-12 text-center animate-on-scroll">
                    <h3 class="fw-bold text-secondary-color mb-4">Product Showcase</h3>
                </div>
                <div class="col-md-6 animate-on-scroll">
                    <img src="assets/images/product_with_company_name/swr_pipes_branded.jpeg" class="img-fluid rounded shadow-sm w-100" alt="SWR Pipes Showcase 1">
                </div>
                <div class="col-md-6 animate-on-scroll delay-1">
                    <img src="assets/images/product_with_company_name/swr_fittings_branded.jpeg" class="img-fluid rounded shadow-sm w-100" alt="SWR Pipes Showcase 2">
                </div>
            </div>
        </div>
    </section>

    <!-- Product Specifications & Pricing -->
    <section class="py-5 bg-light-custom">
        <div class="container py-4">
            <div class="text-center mb-5 animate-on-scroll">
                <h6 class="text-accent fw-bold text-uppercase mb-2">Technical Details</h6>
                <h2 class="fw-bold text-secondary-color">SWR Pipes - Dimensions & Rates</h2>
                <p class="text-muted max-w-600 mx-auto mt-2">Rates conform to Indian Standards <strong>IS: 13592</strong>. HSN Code: 391723. Prices are subject to change.</p>
            </div>

            <!-- Nav Tabs for Single Socket vs Double Socket -->
            <ul class="nav nav-pills justify-content-center mb-5 animate-on-scroll" id="specTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active px-4 py-2 me-2" id="ringfit-tab" data-bs-toggle="pill" data-bs-target="#ringfit-pane" type="button" role="tab" aria-controls="ringfit-pane" aria-selected="true" style="border-radius: 8px; font-weight: 600;">Ringfit (Single Socket)</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 me-2" id="selffit-tab" data-bs-toggle="pill" data-bs-target="#selffit-pane" type="button" role="tab" aria-controls="selffit-pane" aria-selected="false" style="border-radius: 8px; font-weight: 600;">Selffit (Single Socket)</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2" id="double-socket-tab" data-bs-toggle="pill" data-bs-target="#double-socket-pane" type="button" role="tab" aria-controls="double-socket-pane" aria-selected="false" style="border-radius: 8px; font-weight: 600;">Double Socket (Ringfit)</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="specTabsContent">
                <!-- Ringfit Pane -->
                <div class="tab-pane fade show active" id="ringfit-pane" role="tabpanel" aria-labelledby="ringfit-tab" tabindex="0">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                            <div>
                                <h5 class="fw-bold text-primary-color mb-1">Ringfit Single Socket SWR Pipes</h5>
                                <p class="small text-muted mb-0">Conforming to IS: 13592 | HSN Code: 391723</p>
                            </div>
                            <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Ringfit</span>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped align-middle mb-0 text-center">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Size (mm)</th>
                                            <th>Type A (Rate/Pc ?)</th>
                                            <th>Type B (Rate/Pc ?)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td><strong>75 mm</strong></td><td>?399.00</td><td>?740.00</td></tr>
                                        <tr><td><strong>90 mm</strong></td><td>?550.00</td><td>?845.00</td></tr>
                                        <tr><td><strong>110 mm</strong></td><td>?760.00</td><td>?1120.00</td></tr>
                                        <tr><td><strong>160 mm</strong></td><td>?1625.00</td><td>?2060.00</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Selffit Pane -->
                <div class="tab-pane fade" id="selffit-pane" role="tabpanel" aria-labelledby="selffit-tab" tabindex="0">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                            <div>
                                <h5 class="fw-bold text-primary-color mb-1">Selffit Single Socket SWR Pipes</h5>
                                <p class="small text-muted mb-0">Conforming to IS: 13592 | HSN Code: 391723</p>
                            </div>
                            <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Selffit</span>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped align-middle mb-0 text-center">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Size (mm)</th>
                                            <th>Type A (Rate/Pc ?)</th>
                                            <th>Type B (Rate/Pc ?)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td><strong>75 mm</strong></td><td>?385.00</td><td>?730.00</td></tr>
                                        <tr><td><strong>90 mm</strong></td><td>?535.00</td><td>?838.00</td></tr>
                                        <tr><td><strong>110 mm</strong></td><td>?750.00</td><td>?1105.00</td></tr>
                                        <tr><td><strong>160 mm</strong></td><td>?1610.00</td><td>?2040.00</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Double Socket Pane -->
                <div class="tab-pane fade" id="double-socket-pane" role="tabpanel" aria-labelledby="double-socket-tab" tabindex="0">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                            <div>
                                <h5 class="fw-bold text-primary-color mb-1">Ringfit Double Socket SWR Pipes</h5>
                                <p class="small text-muted mb-0">Conforming to IS: 13592 with rubber rings | HSN Code: 391723</p>
                            </div>
                            <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Double Socket</span>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped align-middle mb-0 text-center">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Size (mm)</th>
                                            <th>2 Ft Length (?)</th>
                                            <th>3 Ft Length (?)</th>
                                            <th>4 Ft Length (?)</th>
                                            <th>5 Ft Length (?)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td><strong>75 mm</strong></td><td>?118.00</td><td>?163.00</td><td>?204.00</td><td>?241.00</td></tr>
                                        <tr><td><strong>110 mm</strong></td><td>?213.00</td><td>?301.00</td><td>?380.00</td><td>?451.00</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    <?php include 'terms-conditions.php'; ?>

    <?php include 'footer.php'; ?>
