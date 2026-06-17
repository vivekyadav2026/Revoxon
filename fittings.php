<?php
$page_title = "Pipe Fittings | Revoxon Industries Pvt. Ltd.";
$page_description = "Learn about Revoxon Industries Pvt. Ltd., our vision, mission, and our journey as a leading manufacturer of PVC and UPVC pipes in India.";
include 'header.php';
?>

    <!-- Main Content -->
    <main>
    <section class="page-banner bg-primary-color text-white py-5 text-center" style="background: linear-gradient(rgba(10, 77, 162, 0.85), rgba(30, 41, 59, 0.9)), url('assets/images/banner2.png') center/cover;">
        <div class="container py-4">
            <h1 class="display-5 fw-bold animation-fade-up text-white">Pipe Fittings</h1>
            <nav aria-label="breadcrumb" class="animation-fade-up delay-1">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="products.php" class="text-white text-decoration-none">Products</a></li>
                    <li class="breadcrumb-item active text-accent" aria-current="page">Pipe Fittings</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0 animate-on-scroll">
                    <img src="assets/images/product_with_company_name/swr_fittings_branded.jpeg" class="img-fluid rounded shadow w-100" alt="Pipe Fittings">
                </div>
                <div class="col-lg-6 animate-on-scroll delay-1">
                    <h2 class="fw-bold text-secondary-color mb-3">Pipe Fittings</h2>
                    <p class="text-muted fs-5 mb-4">A complete range of precision-engineered fittings including elbows, tees, couplers, and reducers.</p>
                    <p class="text-muted mb-4">Revoxon Industries manufactures world-class Pipe Fittings using advanced extrusion technology. Our products undergo rigorous lab testing to ensure they meet international quality standards and provide a long-lasting, leak-proof experience.</p>
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
                    <img src="assets/images/product_with_company_name/upvc_fittings_branded.jpeg" class="img-fluid rounded shadow-sm w-100" alt="Pipe Fittings Showcase 1">
                </div>
                <div class="col-md-6 animate-on-scroll delay-1">
                    <img src="assets/images/product_with_company_name/cpvc_fittings_branded.jpeg" class="img-fluid rounded shadow-sm w-100" alt="Pipe Fittings Showcase 2">
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Details & Specifications -->
    <section class="py-5 bg-light-custom">
        <div class="container py-4">
            <div class="text-center mb-5 animate-on-scroll">
                <h6 class="text-accent fw-bold text-uppercase mb-2">Technical Details</h6>
                <h2 class="fw-bold text-secondary-color">Couplers - Product Dimensions & Rates</h2>
                <p class="text-muted max-w-600 mx-auto mt-2">Rates conform to Indian Standards where applicable. HSN Code: 391723. Prices are subject to change.</p>
            </div>

            <!-- Nav Tabs for Couplers Categories -->
            <ul class="nav nav-pills justify-content-center mb-5 animate-on-scroll" id="specTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active px-4 py-2 me-2" id="standard-couplers-tab" data-bs-toggle="pill" data-bs-target="#standard-couplers-pane" type="button" role="tab" aria-controls="standard-couplers-pane" aria-selected="true" style="border-radius: 8px; font-weight: 600;">Standard PVC Couplers</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 me-2" id="repair-couplers-tab" data-bs-toggle="pill" data-bs-target="#repair-couplers-pane" type="button" role="tab" aria-controls="repair-couplers-pane" aria-selected="false" style="border-radius: 8px; font-weight: 600;">Repair Couplers</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 me-2" id="rrc-rrj-tab" data-bs-toggle="pill" data-bs-target="#rrc-rrj-pane" type="button" role="tab" aria-controls="rrc-rrj-pane" aria-selected="false" style="border-radius: 8px; font-weight: 600;">RRC & RRJ Couplers</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 me-2" id="elbows-tees-tab" data-bs-toggle="pill" data-bs-target="#elbows-tees-pane" type="button" role="tab" aria-controls="elbows-tees-pane" aria-selected="false" style="border-radius: 8px; font-weight: 600;">Elbows &amp; Tees</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 me-2" id="tees-endcaps-bends-tab" data-bs-toggle="pill" data-bs-target="#tees-endcaps-bends-pane" type="button" role="tab" aria-controls="tees-endcaps-bends-pane" aria-selected="false" style="border-radius: 8px; font-weight: 600;">VC Tees, End Caps &amp; Bends</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 me-2" id="reducers-tab" data-bs-toggle="pill" data-bs-target="#reducers-pane" type="button" role="tab" aria-controls="reducers-pane" aria-selected="false" style="border-radius: 8px; font-weight: 600;">Bends 10KG &amp; Reducers</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 me-2" id="pvc-mt-tab" data-bs-toggle="pill" data-bs-target="#pvc-mt-pane" type="button" role="tab" aria-controls="pvc-mt-pane" aria-selected="false" style="border-radius: 8px; font-weight: 600;">PVC MT, Reducers &amp; Lengths</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 me-2" id="swr-fittings-tab" data-bs-toggle="pill" data-bs-target="#swr-fittings-pane" type="button" role="tab" aria-controls="swr-fittings-pane" aria-selected="false" style="border-radius: 8px; font-weight: 600;">SWR Fittings</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 me-2" id="upvc-fittings-tab" data-bs-toggle="pill" data-bs-target="#upvc-fittings-pane" type="button" role="tab" aria-controls="upvc-fittings-pane" aria-selected="false" style="border-radius: 8px; font-weight: 600;">UPVC Fittings SCH-80</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 me-2" id="cpvc-fittings-tab" data-bs-toggle="pill" data-bs-target="#cpvc-fittings-pane" type="button" role="tab" aria-controls="cpvc-fittings-pane" aria-selected="false" style="border-radius: 8px; font-weight: 600;">CPVC Fittings SDR-11</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2 me-2" id="hdpe-fittings-tab" data-bs-toggle="pill" data-bs-target="#hdpe-fittings-pane" type="button" role="tab" aria-controls="hdpe-fittings-pane" aria-selected="false" style="border-radius: 8px; font-weight: 600;">HDPE &amp; Flanged Fittings</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2" id="valves-accessories-tab" data-bs-toggle="pill" data-bs-target="#valves-accessories-pane" type="button" role="tab" aria-controls="valves-accessories-pane" aria-selected="false" style="border-radius: 8px; font-weight: 600;">Valves &amp; Accessories</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="specTabsContent">
                <!-- Standard Couplers Pane -->
                <div class="tab-pane fade show active" id="standard-couplers-pane" role="tabpanel" aria-labelledby="standard-couplers-tab" tabindex="0">
                    <div class="row g-4">
                        <!-- PVC Coupler 6 KG ISI -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Coupler 6 KG ISI</h5>
                                        <p class="small text-muted mb-0">Industrial Grade Standard (IS Marked)</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate per Piece (?)</th>
                                                    <th>Std. Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>63 mm</strong></td><td>?29.25</td><td>500 NOS</td></tr>
                                                <tr><td><strong>75 mm</strong></td><td>?49.50</td><td>300 NOS</td></tr>
                                                <tr><td><strong>90 mm</strong></td><td>?86.00</td><td>200 NOS</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?132.00</td><td>100 NOS</td></tr>
                                                <tr><td><strong>140 mm</strong></td><td>?275.00</td><td>50 NOS</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?380.00</td><td>40 NOS</td></tr>
                                                <tr><td><strong>180 mm</strong></td><td>?513.00</td><td>30 NOS</td></tr>
                                                <tr><td><strong>200 mm</strong></td><td>?680.00</td><td>21 NOS</td></tr>
                                                <tr><td><strong>225 mm</strong></td><td>?1013.00</td><td>15 NOS</td></tr>
                                                <tr><td><strong>250 mm</strong></td><td>?1315.00</td><td>10 NOS</td></tr>
                                                <tr><td><strong>280 mm</strong></td><td>?1189.00</td><td>10 NOS</td></tr>
                                                <tr><td><strong>315 mm</strong></td><td>?2265.00</td><td>5 NOS</td></tr>
                                                <tr><td><strong>355 mm</strong></td><td>?4213.00</td><td>5 NOS</td></tr>
                                                <tr><td><strong>400 mm</strong></td><td>?5930.00</td><td>5 NOS</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC Coupler 10 KG ISI -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Coupler 10 KG ISI</h5>
                                        <p class="small text-muted mb-0">High Pressure Standard (IS Marked)</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate per Piece (?)</th>
                                                    <th>Std. Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>63 mm</strong></td><td>?65.00</td><td>500 NOS</td></tr>
                                                <tr><td><strong>75 mm</strong></td><td>?90.00</td><td>300 NOS</td></tr>
                                                <tr><td><strong>90 mm</strong></td><td>?180.00</td><td>200 NOS</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?263.00</td><td>100 NOS</td></tr>
                                                <tr><td><strong>140 mm</strong></td><td>?540.00</td><td>50 NOS</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?590.00</td><td>40 NOS</td></tr>
                                                <tr><td><strong>180 mm</strong></td><td>?925.00</td><td>30 NOS</td></tr>
                                                <tr><td><strong>200 mm</strong></td><td>?1589.00</td><td>21 NOS</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Commercial PVC Coupler 4 KG (ISI) -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">Commercial PVC Coupler 4 KG (ISI)</h5>
                                        <p class="small text-muted mb-0">Commercial Quality (IS Marked)</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate per Piece (?)</th>
                                                    <th>Std. Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>63 mm</strong></td><td>?15.00</td><td>500 NOS</td></tr>
                                                <tr><td><strong>75 mm</strong></td><td>?23.50</td><td>300 NOS</td></tr>
                                                <tr><td><strong>90 mm</strong></td><td>?38.50</td><td>200 NOS</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?60.00</td><td>100 NOS</td></tr>
                                                <tr><td><strong>140 mm</strong></td><td>?140.00</td><td>50 NOS</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?165.00</td><td>40 NOS</td></tr>
                                                <tr><td><strong>180 mm</strong></td><td>?245.00</td><td>30 NOS</td></tr>
                                                <tr><td><strong>200 mm</strong></td><td>?305.00</td><td>21 NOS</td></tr>
                                                <tr><td><strong>225 mm</strong></td><td>?450.00</td><td>15 NOS</td></tr>
                                                <tr><td><strong>250 mm</strong></td><td>?650.00</td><td>10 NOS</td></tr>
                                                <tr><td><strong>280 mm</strong></td><td>?1035.00</td><td>10 NOS</td></tr>
                                                <tr><td><strong>315 mm</strong></td><td>?1245.00</td><td>5 NOS</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Non-ISI PVC Coupler 6 KG -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">Non-ISI PVC Coupler 6 KG</h5>
                                        <p class="small text-muted mb-0">Standard Grade Non-ISI Coupler</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate per Piece (?)</th>
                                                    <th>Std. Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>63 mm</strong></td><td>?15.00</td><td>500 NOS</td></tr>
                                                <tr><td><strong>75 mm</strong></td><td>?23.50</td><td>300 NOS</td></tr>
                                                <tr><td><strong>90 mm</strong></td><td>?38.50</td><td>200 NOS</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?60.00</td><td>100 NOS</td></tr>
                                                <tr><td><strong>140 mm</strong></td><td>?140.00</td><td>50 NOS</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?165.00</td><td>40 NOS</td></tr>
                                                <tr><td><strong>180 mm</strong></td><td>?245.00</td><td>30 NOS</td></tr>
                                                <tr><td><strong>200 mm</strong></td><td>?305.00</td><td>21 NOS</td></tr>
                                                <tr><td><strong>225 mm</strong></td><td>?450.00</td><td>15 NOS</td></tr>
                                                <tr><td><strong>250 mm</strong></td><td>?650.00</td><td>10 NOS</td></tr>
                                                <tr><td><strong>280 mm</strong></td><td>?1035.00</td><td>10 NOS</td></tr>
                                                <tr><td><strong>315 mm</strong></td><td>?1245.00</td><td>5 NOS</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Repair Couplers Pane -->
                <div class="tab-pane fade" id="repair-couplers-pane" role="tabpanel" aria-labelledby="repair-couplers-tab" tabindex="0">
                    <div class="card border-0 shadow-sm animate-on-scroll">
                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                            <div>
                                <h4 class="fw-bold text-primary-color mb-1">PVC Coupler 4 KG Repair Coupler</h4>
                                <p class="small text-muted mb-0">Rates by length (6", 9", 12") and Outer Diameter (mm)</p>
                            </div>
                            <span class="badge bg-slate-light text-navy-dark border px-3 py-2 mt-2 mt-sm-0" style="border-radius: 6px;">Rates: ? Per Piece</span>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped align-middle mb-0 text-center" style="min-width: 900px;">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Length</th>
                                            <th>65 mm</th>
                                            <th>75 mm</th>
                                            <th>90 mm</th>
                                            <th>110 mm</th>
                                            <th>140 mm</th>
                                            <th>160 mm</th>
                                            <th>180 mm</th>
                                            <th>200 mm</th>
                                            <th>225 mm</th>
                                            <th>250 mm</th>
                                            <th>280 mm</th>
                                            <th>315 mm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>6" Length</strong></td>
                                            <td>?34.75</td>
                                            <td>?47.50</td>
                                            <td>?67.25</td>
                                            <td>?93.50</td>
                                            <td>?161.00</td>
                                            <td>?226.00</td>
                                            <td>?277.00</td>
                                            <td>?339.00</td>
                                            <td>?439.00</td>
                                            <td>?590.00</td>
                                            <td>?740.00</td>
                                            <td>?940.00</td>
                                        </tr>
                                        <tr>
                                            <td><strong>9" Length</strong></td>
                                            <td>?52.50</td>
                                            <td>?77.50</td>
                                            <td>?108.00</td>
                                            <td>?156.00</td>
                                            <td>?236.00</td>
                                            <td>?321.00</td>
                                            <td>?413.00</td>
                                            <td>?512.50</td>
                                            <td>?625.00</td>
                                            <td>?762.00</td>
                                            <td>?1005.00</td>
                                            <td>?1238.00</td>
                                        </tr>
                                        <tr>
                                            <td><strong>12" Length</strong></td>
                                            <td>?76.00</td>
                                            <td>?123.00</td>
                                            <td>?133.00</td>
                                            <td>?196.00</td>
                                            <td>?331.00</td>
                                            <td>?421.00</td>
                                            <td>?563.00</td>
                                            <td>?662.50</td>
                                            <td>?845.00</td>
                                            <td>?1038.00</td>
                                            <td>?1340.00</td>
                                            <td>?1638.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RRC & RRJ Couplers Pane -->
                <div class="tab-pane fade" id="rrc-rrj-pane" role="tabpanel" aria-labelledby="rrc-rrj-tab" tabindex="0">
                    <div class="row g-4">
                        <!-- RC Coupler ISI & RRJ Coupler -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm animate-on-scroll">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">RC Coupler ISI & RRJ Coupler</h5>
                                        <p class="small text-muted mb-0">Detailed sizing and variants list (IS:7834)</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-3 py-2 mt-2 mt-sm-0" style="border-radius: 6px;">Rates: ? Per Piece</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Specification / Variant</th>
                                                    <th>63 MM</th>
                                                    <th>75 MM</th>
                                                    <th>90 MM</th>
                                                    <th>110 MM</th>
                                                    <th>140 MM</th>
                                                    <th>160 MM</th>
                                                    <th>180 MM</th>
                                                    <th>200 MM</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>LONG 4 KG</strong></td>
                                                    <td>?116.00</td>
                                                    <td>?146.00</td>
                                                    <td>?193.00</td>
                                                    <td>?289.00</td>
                                                    <td>?525.00</td>
                                                    <td>?725.00</td>
                                                    <td>—</td>
                                                    <td>?1480.00</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>LONG 6 KG</strong></td>
                                                    <td>?149.00</td>
                                                    <td>?190.00</td>
                                                    <td>?302.00</td>
                                                    <td>?444.00</td>
                                                    <td>?805.00</td>
                                                    <td>?1085.00</td>
                                                    <td>—</td>
                                                    <td>?2335.00</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>SHORT 4 KG</strong></td>
                                                    <td>—</td>
                                                    <td>?125.00</td>
                                                    <td>?181.00</td>
                                                    <td>?269.00</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>COM. 4 KG</strong></td>
                                                    <td>—</td>
                                                    <td>?131.00</td>
                                                    <td>?182.00</td>
                                                    <td>?243.00</td>
                                                    <td>?465.00</td>
                                                    <td>?630.00</td>
                                                    <td>—</td>
                                                    <td>?1215.00</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>RRJ 18"</strong></td>
                                                    <td>?110.00</td>
                                                    <td>?146.00</td>
                                                    <td>?185.00</td>
                                                    <td>?255.00</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>LONG COM 18"</strong></td>
                                                    <td>?68.00</td>
                                                    <td>?95.00</td>
                                                    <td>?130.00</td>
                                                    <td>?195.00</td>
                                                    <td>?346.00</td>
                                                    <td>?506.00</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- VC Elbow PN 4 ISI -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm animate-on-scroll">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">VC Elbow PN 4 ISI</h5>
                                        <p class="small text-muted mb-0">Elbow variant specifications conforming to ISI standard</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-3 py-2 mt-2 mt-sm-0" style="border-radius: 6px;">Rates: ? Per Piece</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Specification / Variant</th>
                                                    <th>63 MM</th>
                                                    <th>75 MM</th>
                                                    <th>90 MM</th>
                                                    <th>110 MM</th>
                                                    <th>140 MM</th>
                                                    <th>160 MM</th>
                                                    <th>180 MM</th>
                                                    <th>200 MM</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>LONG 4 KG</strong></td>
                                                    <td>?116.00</td>
                                                    <td>?146.00</td>
                                                    <td>?193.00</td>
                                                    <td>?289.00</td>
                                                    <td>?525.00</td>
                                                    <td>?725.00</td>
                                                    <td>—</td>
                                                    <td>?1480.00</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>LONG 6 KG</strong></td>
                                                    <td>?149.00</td>
                                                    <td>?190.00</td>
                                                    <td>?302.00</td>
                                                    <td>?444.00</td>
                                                    <td>?805.00</td>
                                                    <td>?1085.00</td>
                                                    <td>—</td>
                                                    <td>?2335.00</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>SHORT 4 KG</strong></td>
                                                    <td>—</td>
                                                    <td>?125.00</td>
                                                    <td>?181.00</td>
                                                    <td>?269.00</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>COM. 4 KG</strong></td>
                                                    <td>—</td>
                                                    <td>?131.00</td>
                                                    <td>?182.00</td>
                                                    <td>?243.00</td>
                                                    <td>?465.00</td>
                                                    <td>?630.00</td>
                                                    <td>—</td>
                                                    <td>?1215.00</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>RRJ 18"</strong></td>
                                                    <td>?110.00</td>
                                                    <td>?146.00</td>
                                                    <td>?185.00</td>
                                                    <td>?255.00</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>LONG COM 18"</strong></td>
                                                    <td>?68.00</td>
                                                    <td>?95.00</td>
                                                    <td>?130.00</td>
                                                    <td>?195.00</td>
                                                    <td>?346.00</td>
                                                    <td>?506.00</td>
                                                    <td>—</td>
                                                    <td>—</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Elbows & Tees Pane -->
                <div class="tab-pane fade" id="elbows-tees-pane" role="tabpanel" aria-labelledby="elbows-tees-tab" tabindex="0">
                    <div class="row g-4">
                        <!-- PVC Elbow 6 KG -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Elbow 90° (6 KG)</h5>
                                        <p class="small text-muted mb-0">Standard Pressure Rating</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate per Piece (?)</th>
                                                    <th>Std. Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>50 mm</strong></td><td>?25.00</td><td>200 NOS</td></tr>
                                                <tr><td><strong>63 mm</strong></td><td>?32.00</td><td>160 NOS</td></tr>
                                                <tr><td><strong>75 mm</strong></td><td>?45.00</td><td>110 NOS</td></tr>
                                                <tr><td><strong>90 mm</strong></td><td>?62.00</td><td>70 NOS</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?107.00</td><td>55 NOS</td></tr>
                                                <tr><td><strong>140 mm</strong></td><td>?201.00</td><td>24 NOS</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?272.00</td><td>16 NOS</td></tr>
                                                <tr><td><strong>180 mm</strong></td><td>?1190.00</td><td>—</td></tr>
                                                <tr><td><strong>200 mm</strong></td><td>?1288.00</td><td>—</td></tr>
                                                <tr><td><strong>225 mm</strong></td><td>?1980.00</td><td>—</td></tr>
                                                <tr><td><strong>250 mm</strong></td><td>?2420.00</td><td>—</td></tr>
                                                <tr><td><strong>280 mm</strong></td><td>?3289.00</td><td>—</td></tr>
                                                <tr><td><strong>315 mm</strong></td><td>?4550.00</td><td>—</td></tr>
                                                <tr><td><strong>355 mm</strong></td><td>?7140.00</td><td>—</td></tr>
                                                <tr><td><strong>400 mm</strong></td><td>?9780.00</td><td>—</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC Elbow 10 KG -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Elbow 90° (10 KG)</h5>
                                        <p class="small text-muted mb-0">High Pressure Rating</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate per Piece (?)</th>
                                                    <th>Std. Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>50 mm</strong></td><td>?45.00</td><td>100 NOS</td></tr>
                                                <tr><td><strong>63 mm</strong></td><td>?56.00</td><td>45 NOS</td></tr>
                                                <tr><td><strong>75 mm</strong></td><td>?82.00</td><td>60 NOS</td></tr>
                                                <tr><td><strong>90 mm</strong></td><td>?123.00</td><td>36 NOS</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?195.00</td><td>16 NOS</td></tr>
                                                <tr><td><strong>140 mm</strong></td><td>?388.00</td><td>8 NOS</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?545.00</td><td>12 NOS</td></tr>
                                                <tr><td><strong>180 mm</strong></td><td>?1565.00</td><td>—</td></tr>
                                                <tr><td><strong>200 mm</strong></td><td>?2150.00</td><td>—</td></tr>
                                                <tr><td><strong>225 mm</strong></td><td>?2816.00</td><td>—</td></tr>
                                                <tr><td><strong>250 mm</strong></td><td>?3375.00</td><td>—</td></tr>
                                                <tr><td><strong>280 mm</strong></td><td>?5038.00</td><td>—</td></tr>
                                                <tr><td><strong>315 mm</strong></td><td>?5739.00</td><td>—</td></tr>
                                                <tr><td><strong>355 mm</strong></td><td>?9215.00</td><td>—</td></tr>
                                                <tr><td><strong>400 mm</strong></td><td>?13590.00</td><td>—</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC Tee 6 KG -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Equal Tee (6 KG)</h5>
                                        <p class="small text-muted mb-0">Standard Pressure Equal Tee</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate per Piece (?)</th>
                                                    <th>Std. Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>50 mm</strong></td><td>?30.00</td><td>65 NOS</td></tr>
                                                <tr><td><strong>63 mm</strong></td><td>?45.00</td><td>48 NOS</td></tr>
                                                <tr><td><strong>75 mm</strong></td><td>?62.00</td><td>72 NOS</td></tr>
                                                <tr><td><strong>90 mm</strong></td><td>?85.00</td><td>55 NOS</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?136.00</td><td>55 NOS</td></tr>
                                                <tr><td><strong>140 mm</strong></td><td>?245.00</td><td>14 NOS</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?385.00</td><td>10 NOS</td></tr>
                                                <tr><td><strong>180 mm</strong></td><td>?1850.00</td><td>10 NOS</td></tr>
                                                <tr><td><strong>200 mm</strong></td><td>?2326.00</td><td>—</td></tr>
                                                <tr><td><strong>225 mm</strong></td><td>?2565.00</td><td>—</td></tr>
                                                <tr><td><strong>250 mm</strong></td><td>?2989.00</td><td>—</td></tr>
                                                <tr><td><strong>280 mm</strong></td><td>?4991.00</td><td>—</td></tr>
                                                <tr><td><strong>315 mm</strong></td><td>?6988.00</td><td>—</td></tr>
                                                <tr><td><strong>355 mm</strong></td><td>?10590.00</td><td>—</td></tr>
                                                <tr><td><strong>400 mm</strong></td><td>?14466.00</td><td>—</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VC Tees, End Caps & Bends Pane -->
                <div class="tab-pane fade" id="tees-endcaps-bends-pane" role="tabpanel" aria-labelledby="tees-endcaps-bends-tab" tabindex="0">

                    <!-- Product Hero Image -->
                    <div class="text-center mb-5 animate-on-scroll">
                        <img src="assets/images/tees_endcaps_bends.png" class="img-fluid rounded shadow" style="max-height: 280px; object-fit: cover;" alt="VC Tees, End Caps & Bends">
                    </div>

                    <div class="row g-4">

                        <!-- VC TEE 6 ISI -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">VC Tee 6 ISI</h5>
                                        <p class="small text-muted mb-0">ISI Marked Equal Tee Fitting — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">IS Standard</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Field</th>
                                                    <th>50MM</th><th>63MM</th><th>75MM</th><th>90MM</th><th>110MM</th><th>140MM</th><th>160MM</th><th>180MM</th><th>200MM</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Rate (?)</strong></td>
                                                    <td>65.00</td><td>77.00</td><td>105.00</td><td>150.00</td><td>260.00</td><td>490.00</td><td>715.00</td><td>2166.00</td><td>2465.00</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Packing</strong></td>
                                                    <td>65 NOS</td><td>30 NOS</td><td>60 NOS</td><td>18 NOS</td><td>24 NOS</td><td>6 NOS</td><td>10 NOS</td><td>10 NOS</td><td>—</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Larger Sizes -->
                                    <div class="table-responsive border-top">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Field</th>
                                                    <th>225MM</th><th>250MM</th><th>280MM</th><th>315MM</th><th>355MM</th><th>400MM</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Rate (?)</strong></td>
                                                    <td>3890.00</td><td>4438.00</td><td>7545.00</td><td>8916.00</td><td>15200.00</td><td>21345.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- VC END CAP 4 ISI -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">VC End Cap 4 ISI</h5>
                                        <p class="small text-muted mb-0">ISI Marked End Cap — 4 KG Class</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr><th>Size</th><th>Rate (?)</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>180 MM</strong></td><td>575.00</td></tr>
                                                <tr><td><strong>200 MM</strong></td><td>775.00</td></tr>
                                                <tr><td><strong>225 MM</strong></td><td>1091.00</td></tr>
                                                <tr><td><strong>250 MM</strong></td><td>1265.00</td></tr>
                                                <tr><td><strong>280 MM</strong></td><td>1495.00</td></tr>
                                                <tr><td><strong>315 MM</strong></td><td>1595.00</td></tr>
                                                <tr><td><strong>355 MM</strong></td><td>2390.00</td></tr>
                                                <tr><td><strong>400 MM</strong></td><td>3020.00</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC END CAP 6 ISI -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC End Cap 6 ISI</h5>
                                        <p class="small text-muted mb-0">ISI Marked End Cap — 6 KG Class</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr><th>Size</th><th>Rate (?)</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>180 MM</strong></td><td>801.00</td></tr>
                                                <tr><td><strong>200 MM</strong></td><td>940.00</td></tr>
                                                <tr><td><strong>225 MM</strong></td><td>1240.00</td></tr>
                                                <tr><td><strong>250 MM</strong></td><td>1515.00</td></tr>
                                                <tr><td><strong>280 MM</strong></td><td>1876.00</td></tr>
                                                <tr><td><strong>315 MM</strong></td><td>2388.00</td></tr>
                                                <tr><td><strong>355 MM</strong></td><td>3895.00</td></tr>
                                                <tr><td><strong>400 MM</strong></td><td>4766.00</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- BOOTAM CAP -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/bootam_cap_product.png" alt="Bootam Cap Icon" style="width: 40px; height: 40px; object-fit: contain; margin-right: 12px; border-radius: 4px;">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">Bootam Cap / End Caps</h5>
                                            <p class="small text-muted mb-0">Protective pipeline end caps — HSN: 391740</p>
                                        </div>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">End Caps</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (MM)</th>
                                                    <th>Category (Inch)</th>
                                                    <th>Box Packing</th>
                                                    <th>Carton Packing</th>
                                                    <th>M.R.P. (?)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>100</strong></td><td>4"</td><td>—</td><td>—</td><td>—</td></tr>
                                                <tr><td><strong>125.00</strong></td><td>5"</td><td>—</td><td>—</td><td>—</td></tr>
                                                <tr><td><strong>150.00</strong></td><td>6"</td><td>—</td><td>—</td><td>—</td></tr>
                                                <tr><td><strong>175.00</strong></td><td>7"</td><td>50 Pcs</td><td>50 Pcs</td><td>?260.00</td></tr>
                                                <tr><td><strong>200.00</strong></td><td>8"</td><td>50 Pcs</td><td>50 Pcs</td><td>?450.00</td></tr>
                                                <tr><td><strong>250.00</strong></td><td>9"</td><td>50 Pcs</td><td>50 Pcs</td><td>?510.00</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- VC BEND 4 KG ISI -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">VC Bend 4 KG ISI</h5>
                                        <p class="small text-muted mb-0">90° Bend — 4 KG ISI Class — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">IS Standard</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Field</th>
                                                    <th>50MM</th><th>63MM</th><th>75MM</th><th>90MM</th><th>110MM</th><th>140MM</th><th>160MM</th><th>180MM</th><th>200MM</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Rate (?)</strong></td>
                                                    <td>65.00</td><td>71.00</td><td>108.00</td><td>183.00</td><td>312.00</td><td>788.00</td><td>1013.00</td><td>1525.00</td><td>1938.00</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Packing</strong></td>
                                                    <td>50 NOS</td><td>50 NOS</td><td>50 NOS</td><td>50 NOS</td><td>30 NOS</td><td>15 NOS</td><td>10 NOS</td><td>10 NOS</td><td>6 NOS</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive border-top">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Field</th>
                                                    <th>225MM</th><th>250MM</th><th>280MM</th><th>315MM</th><th>355MM</th><th>400MM</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Rate (?)</strong></td>
                                                    <td>2815.00</td><td>3876.00</td><td>6263.00</td><td>8013.00</td><td>13938.00</td><td>23540.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- VC BEND 2.5 KG ISI -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">VC Bend 2.5 KG ISI</h5>
                                        <p class="small text-muted mb-0">90° Bend — 2.5 KG ISI Class</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr><th>Size</th><th>Rate (?)</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>90 MM</strong></td><td>138.00</td></tr>
                                                <tr><td><strong>110 MM</strong></td><td>213.00</td></tr>
                                                <tr><td><strong>140 MM</strong></td><td>538.00</td></tr>
                                                <tr><td><strong>160 MM</strong></td><td>738.00</td></tr>
                                                <tr><td><strong>180 MM</strong></td><td>1090.00</td></tr>
                                                <tr><td><strong>200 MM</strong></td><td>1300.00</td></tr>
                                                <tr><td><strong>225 MM</strong></td><td>2488.00</td></tr>
                                                <tr><td><strong>250 MM</strong></td><td>2740.00</td></tr>
                                                <tr><td><strong>280 MM</strong></td><td>6800.00</td></tr>
                                                <tr><td><strong>315 MM</strong></td><td>7125.00</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC BEND 6 KG ISI -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Bend 6 KG ISI</h5>
                                        <p class="small text-muted mb-0">90° Bend — 6 KG ISI Class</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr><th>Size</th><th>Rate (?)</th><th>Packing</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>50 MM</strong></td><td>70.00</td><td>100 NOS</td></tr>
                                                <tr><td><strong>63 MM</strong></td><td>113.00</td><td>100 NOS</td></tr>
                                                <tr><td><strong>75 MM</strong></td><td>175.00</td><td>50 NOS</td></tr>
                                                <tr><td><strong>90 MM</strong></td><td>280.00</td><td>50 NOS</td></tr>
                                                <tr><td><strong>110 MM</strong></td><td>490.00</td><td>25 NOS</td></tr>
                                                <tr><td><strong>140 MM</strong></td><td>1080.00</td><td>15 NOS</td></tr>
                                                <tr><td><strong>160 MM</strong></td><td>1625.00</td><td>10 NOS</td></tr>
                                                <tr><td><strong>180 MM</strong></td><td>2200.00</td><td>10 NOS</td></tr>
                                                <tr><td><strong>200 MM</strong></td><td>2875.00</td><td>6 NOS</td></tr>
                                                <tr><td><strong>225 MM</strong></td><td>4440.00</td><td>—</td></tr>
                                                <tr><td><strong>250 MM</strong></td><td>6139.00</td><td>—</td></tr>
                                                <tr><td><strong>280 MM</strong></td><td>9998.00</td><td>—</td></tr>
                                                <tr><td><strong>315 MM</strong></td><td>13063.00</td><td>—</td></tr>
                                                <tr><td><strong>355 MM</strong></td><td>21375.00</td><td>—</td></tr>
                                                <tr><td><strong>400 MM</strong></td><td>31188.00</td><td>—</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC AGRICULTURE BYPASS BEND -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Agriculture Bypass Bend</h5>
                                        <p class="small text-muted mb-0">Agriculture grade offset bypass bend — HSN: 391740</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Plain Class</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (MM)</th>
                                                    <th>Rate (?)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>20 MM</strong></td><td>?30.00</td></tr>
                                                <tr><td><strong>25 MM</strong></td><td>?36.50</td></tr>
                                                <tr><td><strong>32 MM</strong></td><td>?59.00</td></tr>
                                                <tr><td><strong>40 MM</strong></td><td>?86.50</td></tr>
                                                <tr><td><strong>50 MM</strong></td><td>?131.00</td></tr>
                                                <tr><td><strong>63 MM</strong></td><td>?219.00</td></tr>
                                                <tr><td><strong>75 MM</strong></td><td>?325.00</td></tr>
                                                <tr><td><strong>90 MM</strong></td><td>?538.00</td></tr>
                                                <tr><td><strong>110 MM</strong></td><td>?989.00</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Bends 10KG & Reducers Pane -->
                <div class="tab-pane fade" id="reducers-pane" role="tabpanel" aria-labelledby="reducers-tab" tabindex="0">

                    <!-- Product Hero Image -->
                    <div class="text-center mb-5 animate-on-scroll">
                        <img src="assets/images/reducers_bends_tees.png" class="img-fluid rounded shadow" style="max-height: 280px; object-fit: cover;" alt="PVC Bends, Reducers & Reducer Tees">
                    </div>

                    <div class="row g-4">

                        <!-- PVC BEND 10 KG ISI -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Bend 10 KG ISI</h5>
                                        <p class="small text-muted mb-0">90° Heavy-Duty Bend — 10 KG ISI Class — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">IS Standard</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Field</th>
                                                    <th>20MM</th><th>25MM</th><th>32MM</th><th>40MM</th><th>50MM</th><th>63MM</th><th>75MM</th><th>90MM</th><th>110MM</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Rate (?)</strong></td>
                                                    <td>14.50</td><td>21.50</td><td>32.30</td><td>56.25</td><td>106.00</td><td>170.00</td><td>275.00</td><td>475.00</td><td>830.00</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Packing</strong></td>
                                                    <td>250 NOS</td><td>300 NOS</td><td>250 NOS</td><td>150 NOS</td><td>100 NOS</td><td>100 NOS</td><td>50 NOS</td><td>25 NOS</td><td>12 NOS</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive border-top">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Field</th>
                                                    <th>140MM</th><th>160MM</th><th>180MM</th><th>200MM</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Rate (?)</strong></td>
                                                    <td>2076.00</td><td>2615.00</td><td>4890.00</td><td>5875.00</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Packing</strong></td>
                                                    <td>8 NOS</td><td>8 NOS</td><td>6 NOS</td><td>4 NOS</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC REDUCER 4KG ISI -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Reducer 4 KG ISI</h5>
                                        <p class="small text-muted mb-0">Concentric Reducer — 4 KG Class — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>110×90</strong></td><td>135.00</td><td><strong>140×110</strong></td><td>165.00</td><td><strong>160×110</strong></td><td>421.00</td><td><strong>160×140</strong></td><td>300.00</td><td><strong>180×140</strong></td><td>370.00</td></tr>
                                                <tr><td><strong>180×160</strong></td><td>388.00</td><td><strong>200×140</strong></td><td>516.00</td><td><strong>200×160</strong></td><td>566.00</td><td><strong>200×180</strong></td><td>863.00</td><td><strong>225×160</strong></td><td>889.00</td></tr>
                                                <tr><td><strong>225×180</strong></td><td>915.00</td><td><strong>225×200</strong></td><td>1016.00</td><td><strong>250×160</strong></td><td>951.00</td><td><strong>250×200</strong></td><td>989.00</td><td><strong>250×225</strong></td><td>1016.00</td></tr>
                                                <tr><td><strong>280×160</strong></td><td>1765.00</td><td><strong>280×200</strong></td><td>1788.00</td><td><strong>280×225</strong></td><td>1838.00</td><td><strong>280×250</strong></td><td>1988.00</td><td><strong>280×315</strong></td><td>2450.00</td></tr>
                                                <tr><td><strong>315×160</strong></td><td>2450.00</td><td><strong>315×200</strong></td><td>2465.00</td><td><strong>315×225</strong></td><td>2440.00</td><td><strong>315×250</strong></td><td>2566.00</td><td><strong>315×280</strong></td><td>3265.00</td></tr>
                                                <tr><td><strong>315×355</strong></td><td>3365.00</td><td><strong>315×400</strong></td><td>4365.00</td><td><strong>355×400</strong></td><td>7491.00</td><td>—</td><td>—</td><td>—</td><td>—</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC REDUCER 6KG ISI -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Reducer 6 KG ISI</h5>
                                        <p class="small text-muted mb-0">Concentric Reducer — 6 KG Class — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>110×90</strong></td><td>146.00</td><td><strong>125×90</strong></td><td>289.00</td><td><strong>125×110</strong></td><td>338.00</td><td><strong>140×90</strong></td><td>351.00</td><td><strong>140×110</strong></td><td>371.00</td></tr>
                                                <tr><td><strong>140×125</strong></td><td>405.00</td><td><strong>160×110</strong></td><td>516.00</td><td><strong>160×125</strong></td><td>702.00</td><td><strong>160×140</strong></td><td>689.00</td><td><strong>180×110</strong></td><td>766.00</td></tr>
                                                <tr><td><strong>180×125</strong></td><td>789.00</td><td><strong>180×140</strong></td><td>689.00</td><td><strong>180×160</strong></td><td>716.00</td><td><strong>200×110</strong></td><td>888.00</td><td><strong>200×125</strong></td><td>950.00</td></tr>
                                                <tr><td><strong>200×140</strong></td><td>1015.00</td><td><strong>200×160</strong></td><td>1066.00</td><td><strong>200×180</strong></td><td>1097.00</td><td><strong>225×110</strong></td><td>916.00</td><td><strong>225×140</strong></td><td>815.00</td></tr>
                                                <tr><td><strong>225×160</strong></td><td>1513.00</td><td><strong>225×180</strong></td><td>1138.00</td><td><strong>225×200</strong></td><td>1289.00</td><td><strong>250×160</strong></td><td>1238.00</td><td><strong>250×180</strong></td><td>1265.00</td></tr>
                                                <tr><td><strong>250×200</strong></td><td>1139.00</td><td><strong>250×225</strong></td><td>1139.00</td><td><strong>280×140</strong></td><td>2488.00</td><td><strong>280×160</strong></td><td>2565.00</td><td><strong>280×180</strong></td><td>2738.00</td></tr>
                                                <tr><td><strong>280×200</strong></td><td>2776.00</td><td><strong>280×225</strong></td><td>2838.00</td><td><strong>280×250</strong></td><td>2888.00</td><td><strong>280×315</strong></td><td>2990.00</td><td><strong>315×160</strong></td><td>2525.00</td></tr>
                                                <tr><td><strong>315×200</strong></td><td>3025.00</td><td><strong>315×225</strong></td><td>3700.00</td><td><strong>315×250</strong></td><td>3815.00</td><td><strong>315×280</strong></td><td>3938.00</td><td><strong>315×355</strong></td><td>5626.00</td></tr>
                                                <tr><td><strong>315×400</strong></td><td>8439.00</td><td><strong>315×400</strong></td><td>8439.00</td><td><strong>355×280</strong></td><td>8540.00</td><td><strong>355×400</strong></td><td>8940.00</td><td><strong>315×110</strong></td><td>2526.00</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC REDUCER 10 KG ISI -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Reducer 10 KG ISI</h5>
                                        <p class="small text-muted mb-0">Concentric Reducer — 10 KG Heavy Duty — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>63×75</strong></td><td>88.00</td><td><strong>75×90</strong></td><td>149.00</td><td><strong>75×110</strong></td><td>253.00</td><td><strong>90×110</strong></td><td>290.00</td><td><strong>90×140</strong></td><td>432.00</td></tr>
                                                <tr><td><strong>90×160</strong></td><td>566.00</td><td><strong>110×140</strong></td><td>566.00</td><td><strong>110×160</strong></td><td>776.00</td><td><strong>160×140</strong></td><td>889.00</td><td><strong>160×180</strong></td><td>1075.00</td></tr>
                                                <tr><td><strong>200×110</strong></td><td>1201.00</td><td><strong>200×140</strong></td><td>1240.00</td><td><strong>200×160</strong></td><td>1376.00</td><td><strong>200×180</strong></td><td>2125.00</td><td><strong>225×160</strong></td><td>2390.00</td></tr>
                                                <tr><td><strong>225×200</strong></td><td>2815.00</td><td><strong>250×160</strong></td><td>2995.00</td><td>—</td><td>—</td><td>—</td><td>—</td><td>—</td><td>—</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC REDUCER TEE 4 KG ISI -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Reducer Tee 4 KG ISI</h5>
                                        <p class="small text-muted mb-0">Reducer Tee Junction — 4 KG ISI Class — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">IS Standard</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>140×110</strong></td><td>765.00</td><td><strong>160×110</strong></td><td>865.00</td><td><strong>160×140</strong></td><td>1116.00</td><td><strong>180×90</strong></td><td>1089.00</td><td><strong>180×110</strong></td><td>1216.00</td></tr>
                                                <tr><td><strong>180×140</strong></td><td>1238.00</td><td><strong>180×160</strong></td><td>1538.00</td><td><strong>200×110</strong></td><td>1290.00</td><td><strong>200×160</strong></td><td>1695.00</td><td><strong>200×180</strong></td><td>1765.00</td></tr>
                                                <tr><td><strong>225×90</strong></td><td>1816.00</td><td><strong>225×110</strong></td><td>1895.00</td><td><strong>225×140</strong></td><td>2038.00</td><td><strong>225×160</strong></td><td>2125.00</td><td><strong>225×180</strong></td><td>2266.00</td></tr>
                                                <tr><td><strong>225×200</strong></td><td>2438.00</td><td><strong>250×90</strong></td><td>2016.00</td><td><strong>250×110</strong></td><td>2088.00</td><td><strong>250×140</strong></td><td>2290.00</td><td><strong>250×160</strong></td><td>2139.00</td></tr>
                                                <tr><td><strong>250×180</strong></td><td>2666.00</td><td><strong>250×200</strong></td><td>2871.00</td><td><strong>250×225</strong></td><td>3016.00</td><td><strong>280×90</strong></td><td>3326.00</td><td><strong>280×110</strong></td><td>3438.00</td></tr>
                                                <tr><td><strong>280×140</strong></td><td>3763.00</td><td><strong>280×160</strong></td><td>3938.00</td><td><strong>280×200</strong></td><td>4039.00</td><td><strong>280×200</strong></td><td>4465.00</td><td><strong>280×225</strong></td><td>4738.00</td></tr>
                                                <tr><td><strong>280×250</strong></td><td>4766.00</td><td><strong>315×90</strong></td><td>3489.00</td><td><strong>315×110</strong></td><td>3615.00</td><td><strong>315×140</strong></td><td>3938.00</td><td><strong>315×160</strong></td><td>4116.00</td></tr>
                                                <tr><td><strong>315×180</strong></td><td>4638.00</td><td><strong>315×200</strong></td><td>4990.00</td><td><strong>315×225</strong></td><td>5238.00</td><td><strong>315×250</strong></td><td>5416.00</td><td><strong>315×280</strong></td><td>6338.00</td></tr>
                                                <tr><td><strong>355×90</strong></td><td>5189.00</td><td><strong>355×110</strong></td><td>5338.00</td><td><strong>355×140</strong></td><td>5988.00</td><td><strong>355×160</strong></td><td>6315.00</td><td><strong>355×180</strong></td><td>6588.00</td></tr>
                                                <tr><td><strong>355×200</strong></td><td>6990.00</td><td><strong>355×225</strong></td><td>7338.00</td><td><strong>355×250</strong></td><td>8388.00</td><td><strong>355×315</strong></td><td>8875.00</td><td><strong>400×90</strong></td><td>9590.00</td></tr>
                                                <tr><td><strong>400×110</strong></td><td>7400.00</td><td><strong>400×160</strong></td><td>7590.00</td><td><strong>400×200</strong></td><td>8390.00</td><td><strong>400×250</strong></td><td>8965.00</td><td><strong>400×315</strong></td><td>10925.00</td></tr>
                                                <tr><td><strong>400×315</strong></td><td>12115.00</td><td><strong>400×315</strong></td><td>14215.00</td><td><strong>400×355</strong></td><td>16989.00</td><td>—</td><td>—</td><td>—</td><td>—</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC REDUCER TEE 6 KG ISI -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Reducer Tee 6 KG ISI</h5>
                                        <p class="small text-muted mb-0">Reducer Tee Junction — 6 KG ISI Class — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">IS Standard</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>125×90</strong></td><td>875.00</td><td><strong>125×110</strong></td><td>916.00</td><td><strong>140×90</strong></td><td>966.00</td><td><strong>140×110</strong></td><td>988.00</td><td><strong>140×125</strong></td><td>998.00</td></tr>
                                                <tr><td><strong>160×140</strong></td><td>1489.00</td><td><strong>180×140</strong></td><td>1516.00</td><td><strong>160×110</strong></td><td>1590.00</td><td><strong>160×125</strong></td><td>1240.00</td><td>—</td><td>—</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- PVC MT, Reducers & Pipe Lengths Pane -->
                <div class="tab-pane fade" id="pvc-mt-pane" role="tabpanel" aria-labelledby="pvc-mt-tab" tabindex="0">

                    <!-- Product Hero Image -->
                    <div class="text-center mb-5 animate-on-scroll">
                        <img src="assets/images/pvc_mt_reducers.png" class="img-fluid rounded shadow" style="max-height: 280px; object-fit: cover;" alt="PVC MT, Reducers & Pipe Lengths">
                    </div>

                    <div class="row g-4">

                        <!-- PVC REDUCER TEE 6 KG ISI - Continuation (Large Sizes) -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Reducer Tee 6 KG ISI — Large Sizes</h5>
                                        <p class="small text-muted mb-0">Reducer Tee — 6 KG ISI Class (180MM to 400MM range) — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">IS Standard</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th><th>Size</th><th>Rate (?)</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>180×90</strong></td><td>1266.00</td><td><strong>180×110</strong></td><td>1389.00</td><td><strong>180×125</strong></td><td>1612.00</td><td><strong>180×160</strong></td><td>1716.00</td><td><strong>200×110</strong></td><td>1916.00</td></tr>
                                                <tr><td><strong>200×125</strong></td><td>1988.00</td><td><strong>200×160</strong></td><td>2190.00</td><td><strong>200×180</strong></td><td>2340.00</td><td><strong>225×90</strong></td><td>2115.00</td><td><strong>225×110</strong></td><td>2490.00</td></tr>
                                                <tr><td><strong>225×125</strong></td><td>2516.00</td><td><strong>225×160</strong></td><td>2700.00</td><td><strong>225×180</strong></td><td>2963.00</td><td><strong>225×200</strong></td><td>3138.00</td><td><strong>250×90</strong></td><td>2638.00</td></tr>
                                                <tr><td><strong>250×110</strong></td><td>2763.00</td><td><strong>250×125</strong></td><td>2838.00</td><td><strong>250×140</strong></td><td>3116.00</td><td><strong>250×160</strong></td><td>3190.00</td><td><strong>250×180</strong></td><td>3263.00</td></tr>
                                                <tr><td><strong>250×200</strong></td><td>3589.00</td><td><strong>250×225</strong></td><td>3738.00</td><td><strong>280×90</strong></td><td>3488.00</td><td><strong>280×110</strong></td><td>3488.00</td><td><strong>280×125</strong></td><td>3963.00</td></tr>
                                                <tr><td><strong>280×140</strong></td><td>4016.00</td><td><strong>280×200</strong></td><td>4789.00</td><td><strong>280×225</strong></td><td>5620.00</td><td><strong>280×250</strong></td><td>5766.00</td><td><strong>315×90</strong></td><td>4989.00</td></tr>
                                                <tr><td><strong>315×110</strong></td><td>5125.00</td><td><strong>315×125</strong></td><td>5163.00</td><td><strong>315×140</strong></td><td>5090.00</td><td><strong>315×160</strong></td><td>5464.00</td><td><strong>315×180</strong></td><td>5765.00</td></tr>
                                                <tr><td><strong>315×200</strong></td><td>6066.00</td><td><strong>315×225</strong></td><td>6488.00</td><td><strong>315×250</strong></td><td>6538.00</td><td><strong>315×280</strong></td><td>7113.00</td><td><strong>355×90</strong></td><td>5876.00</td></tr>
                                                <tr><td><strong>355×110</strong></td><td>6014.00</td><td><strong>355×125</strong></td><td>6488.00</td><td><strong>355×140</strong></td><td>7745.00</td><td><strong>355×160</strong></td><td>7765.00</td><td><strong>355×200</strong></td><td>8240.00</td></tr>
                                                <tr><td><strong>355×225</strong></td><td>8540.00</td><td><strong>355×250</strong></td><td>12150.00</td><td><strong>355×280</strong></td><td>15875.00</td><td><strong>355×315</strong></td><td>9000.00</td><td><strong>400×90</strong></td><td>9515.00</td></tr>
                                                <tr><td><strong>400×110</strong></td><td>10888.00</td><td><strong>400×125</strong></td><td>11188.00</td><td><strong>400×160</strong></td><td>12138.00</td><td><strong>400×225</strong></td><td>12488.00</td><td><strong>400×250</strong></td><td>14990.00</td></tr>
                                                <tr><td><strong>400×280</strong></td><td>15999.00</td><td><strong>400×315</strong></td><td>17040.00</td><td><strong>400×355</strong></td><td>17780.00</td><td>—</td><td>—</td><td>—</td><td>—</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC MT (Male Thread Adapter) — 4 KG -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC MT — 4 KG ISI</h5>
                                        <p class="small text-muted mb-0">Male Thread Adapter — 4 KG Class — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr><th>Size</th><th>Rate (?)</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>63 MM</strong></td><td>65.00</td></tr>
                                                <tr><td><strong>75 MM</strong></td><td>101.00</td></tr>
                                                <tr><td><strong>90 MM</strong></td><td>175.00</td></tr>
                                                <tr><td><strong>110 MM</strong></td><td>271.00</td></tr>
                                                <tr><td><strong>140 MM</strong></td><td>555.00</td></tr>
                                                <tr><td><strong>160 MM</strong></td><td>800.00</td></tr>
                                                <tr><td><strong>200 MM</strong></td><td>1440.00</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC MT (Male Thread Adapter) — 6 KG -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC MT — 6 KG ISI</h5>
                                        <p class="small text-muted mb-0">Male Thread Adapter — 6 KG Class — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr><th>Size</th><th>Rate (?)</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>63 MM</strong></td><td>76.00</td></tr>
                                                <tr><td><strong>75 MM</strong></td><td>105.00</td></tr>
                                                <tr><td><strong>90 MM</strong></td><td>189.00</td></tr>
                                                <tr><td><strong>110 MM</strong></td><td>290.00</td></tr>
                                                <tr><td><strong>140 MM</strong></td><td>538.00</td></tr>
                                                <tr><td><strong>160 MM</strong></td><td>775.00</td></tr>
                                                <tr><td><strong>200 MM</strong></td><td>1465.00</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC REDUCER (Plain) -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Reducer (4 KG)</h5>
                                        <p class="small text-muted mb-0">Plain Concentric Reducer — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr><th>Size</th><th>Rate (?)</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>63×75</strong></td><td>95.00</td></tr>
                                                <tr><td><strong>75×90</strong></td><td>155.00</td></tr>
                                                <tr><td><strong>75×110</strong></td><td>270.00</td></tr>
                                                <tr><td><strong>90×110</strong></td><td>289.00</td></tr>
                                                <tr><td><strong>90×140</strong></td><td>396.00</td></tr>
                                                <tr><td><strong>110×140</strong></td><td>640.00</td></tr>
                                                <tr><td><strong>110×160</strong></td><td>940.00</td></tr>
                                                <tr><td><strong>140×160</strong></td><td>989.00</td></tr>
                                                <tr><td><strong>160×200</strong></td><td>1690.00</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC REDUCER (Second Variant — 6 KG) -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Reducer (6 KG)</h5>
                                        <p class="small text-muted mb-0">Plain Concentric Reducer — 6 KG — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HSN: 391723</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr><th>Size</th><th>Rate (?)</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>63×75</strong></td><td>101.00</td></tr>
                                                <tr><td><strong>75×90</strong></td><td>185.00</td></tr>
                                                <tr><td><strong>75×110</strong></td><td>290.00</td></tr>
                                                <tr><td><strong>90×110</strong></td><td>330.00</td></tr>
                                                <tr><td><strong>90×140</strong></td><td>438.00</td></tr>
                                                <tr><td><strong>140×160</strong></td><td>590.00</td></tr>
                                                <tr><td><strong>160×200</strong></td><td>1738.00</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PIPE CUTTING LENGTHS TABLE -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Pipe — Cut Lengths Price List</h5>
                                        <p class="small text-muted mb-0">Rate per piece by pipe size and cut length — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Cut Lengths</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Pipe Size</th>
                                                    <th>4" Length</th>
                                                    <th>6" Length</th>
                                                    <th>9" Length</th>
                                                    <th>12" Length</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>½" — 20 MM</strong></td><td>14.00</td><td>21.00</td><td>33.00</td><td>38.00</td></tr>
                                                <tr><td><strong>¾" — 25 MM</strong></td><td>18.75</td><td>24.00</td><td>40.00</td><td>46.00</td></tr>
                                                <tr><td><strong>1" — 32 MM</strong></td><td>26.30</td><td>38.00</td><td>63.00</td><td>65.00</td></tr>
                                                <tr><td><strong>1¼" — 40 MM</strong></td><td>36.75</td><td>56.00</td><td>80.00</td><td>106.00</td></tr>
                                                <tr><td><strong>1½" — 50 MM</strong></td><td>56.25</td><td>73.00</td><td>120.00</td><td>131.00</td></tr>
                                                <tr><td><strong>2" — 63 MM</strong></td><td>72.50</td><td>88.00</td><td>143.00</td><td>185.00</td></tr>
                                                <tr><td><strong>2½" — 75 MM</strong></td><td>99.00</td><td>142.00</td><td>188.00</td><td>255.00</td></tr>
                                                <tr><td><strong>3" — 90 MM</strong></td><td>124.00</td><td>175.00</td><td>262.00</td><td>356.00</td></tr>
                                                <tr><td><strong>4" — 110 MM</strong></td><td>181.00</td><td>264.00</td><td>331.00</td><td>545.00</td></tr>
                                                <tr><td><strong>5" — 140 MM</strong></td><td>271.00</td><td>361.00</td><td>525.00</td><td>725.00</td></tr>
                                                <tr><td><strong>6" — 160 MM</strong></td><td>339.00</td><td>476.00</td><td>675.00</td><td>938.00</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- SWR Fittings Pane -->
                <div class="tab-pane fade" id="swr-fittings-pane" role="tabpanel" aria-labelledby="swr-fittings-tab" tabindex="0">

                    <!-- Group 1: SWR Single Y Fittings -->
                    <div class="row g-4 mb-5 align-items-start">
                        <div class="col-lg-4 animate-on-scroll">
                            <div class="card border-0 shadow-sm bg-white overflow-hidden">
                                <div class="position-relative bg-light text-center p-3 d-flex align-items-center justify-content-center" style="height: 300px; background-color: #0d6efd !important;">
                                    <img src="assets/images/swr_single_y_fitting.png" class="img-fluid rounded object-fit-contain" style="max-height: 270px;" alt="SWR Single Y Fitting">
                                </div>
                                <div class="card-body p-4">
                                    <h4 class="fw-bold text-secondary-color">SWR Single Y Fittings</h4>
                                    <p class="text-muted small mb-3">Designed for seamless 45-degree branch connections in soil, waste, and rainwater drainage. Available in Self-Fit and push-fit Ring-Fit designs for quick, leak-free installation.</p>
                                    <ul class="list-unstyled small text-muted mb-0">
                                        <li class="mb-2"><i class="fas fa-check text-primary-color me-2"></i> Heavy-duty, high flow efficiency design</li>
                                        <li class="mb-2"><i class="fas fa-check text-primary-color me-2"></i> Cleanout door option for easy inspection</li>
                                        <li><i class="fas fa-check text-primary-color me-2"></i> Certified leak-proof joints</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row g-4">
                                <!-- SWR Single Y (Self-Fit) - Plain -->
                                <div class="col-md-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                            <div>
                                                <h5 class="fw-bold text-primary-color mb-1">SWR Single Y (Plain)</h5>
                                                <p class="small text-muted mb-0">Self-Fit Jointing Type — HSN: 391723</p>
                                            </div>
                                            <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Self-Fit</span>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Size (mm)</th>
                                                            <th>Rate per Piece (?)</th>
                                                            <th>Std. Packing</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr><td><strong>75 mm</strong></td><td>?147.00</td><td>72 NOS</td></tr>
                                                        <tr><td><strong>90 mm</strong></td><td>?221.00</td><td>35 NOS</td></tr>
                                                        <tr><td><strong>110 mm</strong></td><td>?256.00</td><td>24 NOS</td></tr>
                                                        <tr><td><strong>160 mm</strong></td><td>?646.00</td><td>7 NOS</td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- SWR Single Y (Self-Fit) - With Door -->
                                <div class="col-md-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                            <div>
                                                <h5 class="fw-bold text-primary-color mb-1">SWR Single Y (With Door)</h5>
                                                <p class="small text-muted mb-0">Self-Fit Jointing with Cleanout — HSN: 391723</p>
                                            </div>
                                            <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Self-Fit</span>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Size (mm)</th>
                                                            <th>Rate per Piece (?)</th>
                                                            <th>Std. Packing</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr><td><strong>75 mm</strong></td><td>?199.00</td><td>30 NOS</td></tr>
                                                        <tr><td><strong>90 mm</strong></td><td>?272.00</td><td>30 NOS</td></tr>
                                                        <tr><td><strong>110 mm</strong></td><td>?330.00</td><td>20 NOS</td></tr>
                                                        <tr><td><strong>160 mm</strong></td><td>?706.00</td><td>7 NOS</td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- SWR Single Y (Ring-Fit) - Plain -->
                                <div class="col-md-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                            <div>
                                                <h5 class="fw-bold text-primary-color mb-1">SWR Single Y (Ring-Fit — Plain)</h5>
                                                <p class="small text-muted mb-0">Push-Fit Rubber Ring Joints — HSN: 391723</p>
                                            </div>
                                            <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Ring-Fit</span>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Size (mm)</th>
                                                            <th>Rate per Piece (?)</th>
                                                            <th>Std. Packing</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr><td><strong>75 mm</strong></td><td>?180.00</td><td>32 NOS</td></tr>
                                                        <tr><td><strong>90 mm</strong></td><td>?250.00</td><td>30 NOS</td></tr>
                                                        <tr><td><strong>110 mm</strong></td><td>?330.00</td><td>20 NOS</td></tr>
                                                        <tr><td><strong>110×75 mm</strong></td><td>?326.00</td><td>22 NOS</td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- SWR Single Y (Ring-Fit) - With Door -->
                                <div class="col-md-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                            <div>
                                                <h5 class="fw-bold text-primary-color mb-1">SWR Single Y (Ring-Fit — With Door)</h5>
                                                <p class="small text-muted mb-0">Push-Fit with Rubber Ring &amp; Cleanout — HSN: 391723</p>
                                            </div>
                                            <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Ring-Fit</span>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Size (mm)</th>
                                                            <th>Rate per Piece (?)</th>
                                                            <th>Std. Packing</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr><td><strong>75 mm</strong></td><td>?235.00</td><td>25 NOS</td></tr>
                                                        <tr><td><strong>90 mm</strong></td><td>?296.00</td><td>25 NOS</td></tr>
                                                        <tr><td><strong>110 mm</strong></td><td>?391.00</td><td>16 NOS</td></tr>
                                                        <tr><td><strong>110×75 mm</strong></td><td>?386.00</td><td>20 NOS</td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- SWR Reducer Single Y - Plain -->
                                <div class="col-md-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                            <div>
                                                <h5 class="fw-bold text-primary-color mb-1">SWR Reducer Single Y (Plain)</h5>
                                                <p class="small text-muted mb-0">Reducing Y Jointing Fittings — HSN: 391723</p>
                                            </div>
                                            <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Self-Fit</span>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Size (mm)</th>
                                                            <th>Rate per Piece (?)</th>
                                                            <th>Std. Packing</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr><td><strong>75×90 mm</strong></td><td>?211.00</td><td>36 NOS</td></tr>
                                                        <tr><td><strong>110×75 mm</strong></td><td>?246.00</td><td>28 NOS</td></tr>
                                                        <tr><td><strong>160×110 mm</strong></td><td>?575.00</td><td>9 NOS</td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- SWR Reducer Single Y - With Door -->
                                <div class="col-md-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                            <div>
                                                <h5 class="fw-bold text-primary-color mb-1">SWR Reducer Single Y (With Door)</h5>
                                                <p class="small text-muted mb-0">Reducing Y with Cleanout Access — HSN: 391723</p>
                                            </div>
                                            <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Self-Fit</span>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Size (mm)</th>
                                                            <th>Rate per Piece (?)</th>
                                                            <th>Std. Packing</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr><td><strong>75×90 mm</strong></td><td>?255.00</td><td>30 NOS</td></tr>
                                                        <tr><td><strong>110×75 mm</strong></td><td>?311.00</td><td>20 NOS</td></tr>
                                                        <tr><td><strong>160×110 mm</strong></td><td>?610.00</td><td>8 NOS</td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Group 2: SWR Single Tee Fittings -->
                    <div class="row g-4 mb-5 align-items-start">
                        <div class="col-lg-4 order-lg-last animate-on-scroll">
                            <div class="card border-0 shadow-sm bg-white overflow-hidden">
                                <div class="position-relative bg-light text-center p-3 d-flex align-items-center justify-content-center" style="height: 300px; background-color: #0d6efd !important;">
                                    <img src="assets/images/swr_single_tee_fitting.png" class="img-fluid rounded object-fit-contain" style="max-height: 270px;" alt="SWR Single Tee Fitting">
                                </div>
                                <div class="card-body p-4">
                                    <h4 class="fw-bold text-secondary-color">SWR Single Tee Fittings</h4>
                                    <p class="text-muted small mb-3">Designed for precise 90-degree branch connections. Features smooth sweeps to prevent clogging and optimize wastewater flow.</p>
                                    <ul class="list-unstyled small text-muted mb-0">
                                        <li class="mb-2"><i class="fas fa-check text-primary-color me-2"></i> Smooth inner surface prevents build-ups</li>
                                        <li class="mb-2"><i class="fas fa-check text-primary-color me-2"></i> Cleanout door option for inspection and clearing</li>
                                        <li><i class="fas fa-check text-primary-color me-2"></i> High chemical resistance to household wastes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row g-4">
                                <!-- SWR Single Tee - Plain -->
                                <div class="col-md-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                            <div>
                                                <h5 class="fw-bold text-primary-color mb-1">SWR Single Tee (Plain)</h5>
                                                <p class="small text-muted mb-0">T-Junction Connection Fitting — HSN: 391723</p>
                                            </div>
                                            <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Self-Fit</span>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Size (mm)</th>
                                                            <th>Rate per Piece (?)</th>
                                                            <th>Std. Packing</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr><td><strong>75 mm</strong></td><td>?147.00</td><td>72 NOS</td></tr>
                                                        <tr><td><strong>90 mm</strong></td><td>?221.00</td><td>35 NOS</td></tr>
                                                        <tr><td><strong>110 mm</strong></td><td>?256.00</td><td>24 NOS</td></tr>
                                                        <tr><td><strong>160 mm</strong></td><td>?646.00</td><td>7 NOS</td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- SWR Single Tee - With Door -->
                                <div class="col-md-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                            <div>
                                                <h5 class="fw-bold text-primary-color mb-1">SWR Single Tee (With Door)</h5>
                                                <p class="small text-muted mb-0">T-Junction with Cleanout Inspection — HSN: 391723</p>
                                            </div>
                                            <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Self-Fit</span>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Size (mm)</th>
                                                            <th>Rate per Piece (?)</th>
                                                            <th>Std. Packing</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr><td><strong>75 mm</strong></td><td>?199.00</td><td>30 NOS</td></tr>
                                                        <tr><td><strong>90 mm</strong></td><td>?272.00</td><td>30 NOS</td></tr>
                                                        <tr><td><strong>110 mm</strong></td><td>?330.00</td><td>20 NOS</td></tr>
                                                        <tr><td><strong>160 mm</strong></td><td>?706.00</td><td>7 NOS</td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Group 3: Bends & Accessories -->
                    <div class="row g-4 mb-5">
                        <div class="col-12">
                            <h4 class="fw-bold text-secondary-color border-bottom pb-2 mb-4">SWR Bends &amp; Special Fittings</h4>
                        </div>
                        
                        <!-- SWR Bend 87.5° - Plain -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">SWR Bend 87.5° (Plain)</h5>
                                        <p class="small text-muted mb-0">Self-Fit Jointing Type — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Self-Fit</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate per Piece (?)</th>
                                                    <th>Std. Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>75 mm</strong></td><td>?89.00</td><td>92 NOS</td></tr>
                                                <tr><td><strong>90 mm</strong></td><td>?121.00</td><td>60 NOS</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?139.00</td><td>60 NOS</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?332.00</td><td>22 NOS</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SWR Bend 87.5° - With Door -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">SWR Bend 87.5° (With Door)</h5>
                                        <p class="small text-muted mb-0">Self-Fit Jointing Type with Cleanout — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Self-Fit</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate per Piece (?)</th>
                                                    <th>Std. Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>75 mm</strong></td><td>?142.00</td><td>48 NOS</td></tr>
                                                <tr><td><strong>90 mm</strong></td><td>?184.00</td><td>55 NOS</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?242.00</td><td>28 NOS</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?553.00</td><td>11 NOS</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SWR Bend 45° (Plain) -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">SWR Bend 45° (Plain)</h5>
                                        <p class="small text-muted mb-0">45-Degree Elbow / Shoe Plain — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Self-Fit</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate per Piece (?)</th>
                                                    <th>Std. Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>75 mm</strong></td><td>?89.00</td><td>92 NOS</td></tr>
                                                <tr><td><strong>90 mm</strong></td><td>?121.00</td><td>60 NOS</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?139.00</td><td>60 NOS</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?332.00</td><td>22 NOS</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SWR Bend 45° (With Door) -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">SWR Bend 45° (With Door)</h5>
                                        <p class="small text-muted mb-0">45-Degree Elbow / Shoe with Cleanout Door — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Self-Fit</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate per Piece (?)</th>
                                                    <th>Std. Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>75 mm</strong></td><td>?142.00</td><td>48 NOS</td></tr>
                                                <tr><td><strong>90 mm</strong></td><td>?184.00</td><td>55 NOS</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?242.00</td><td>28 NOS</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?553.00</td><td>11 NOS</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC Tail Piece (Telpish) — 4 KG -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Tail Piece (Telpish) — 4 KG</h5>
                                        <p class="small text-muted mb-0">Standard Grade Flanged Coupler Fitting — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">4 KG</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate (?)</th>
                                                    <th>Size (mm)</th>
                                                    <th>Rate (?)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>90 mm</strong></td><td>?51.25</td><td><strong>225 mm</strong></td><td>?650.00</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?75.00</td><td><strong>250 mm</strong></td><td>?865.00</td></tr>
                                                <tr><td><strong>140 mm</strong></td><td>?112.50</td><td><strong>280 mm</strong></td><td>?1140.00</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?205.00</td><td><strong>315 mm</strong></td><td>?1388.00</td></tr>
                                                <tr><td><strong>180 mm</strong></td><td>?451.00</td><td><strong>355 mm</strong></td><td>?2380.00</td></tr>
                                                <tr><td><strong>200 mm</strong></td><td>?563.50</td><td><strong>400 mm</strong></td><td>?3380.00</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PVC Tail Piece (Telpish) — 6 KG ISI -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">PVC Tail Piece (Telpish) — 6 KG ISI</h5>
                                        <p class="small text-muted mb-0">IS Marked Heavy-Duty Flanged Coupler — HSN: 391723</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">6 KG ISI</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate (?)</th>
                                                    <th>Size (mm)</th>
                                                    <th>Rate (?)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>90 mm</strong></td><td>?88.00</td><td><strong>225 mm</strong></td><td>?738.00</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?138.00</td><td><strong>250 mm</strong></td><td>?1239.00</td></tr>
                                                <tr><td><strong>140 mm</strong></td><td>?248.50</td><td><strong>280 mm</strong></td><td>?1840.50</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?376.00</td><td><strong>315 mm</strong></td><td>?2363.00</td></tr>
                                                <tr><td><strong>180 mm</strong></td><td>?538.00</td><td><strong>355 mm</strong></td><td>?3516.00</td></tr>
                                                <tr><td><strong>200 mm</strong></td><td>?689.00</td><td><strong>400 mm</strong></td><td>?6163.00</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section Divider for Rings Fittings -->
                        <div class="col-12 text-center mt-5 mb-2">
                            <h4 class="fw-bold text-secondary-color">SWR Fittings with Rubber Rings (IS: 14735)</h4>
                            <p class="text-muted">Premium rubber ring jointed fittings conforming to IS: 14735 | HSN Code: 391740</p>
                        </div>

                        <!-- SWR Fittings with Rings — Plain -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">SWR Ring Joint Fittings (Plain)</h5>
                                        <p class="small text-muted mb-0">Conforming to IS: 14735 — HSN: 391740</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Ring-Joint Plain</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate per Piece (?)</th>
                                                    <th>Std. Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>75 mm</strong></td><td>?88.00</td><td>75 NOS</td></tr>
                                                <tr><td><strong>90 mm</strong></td><td>?125.00</td><td>75 NOS</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?160.00</td><td>44 NOS</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?421.00</td><td>14 NOS</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SWR Fittings with Rings — With Door -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">SWR Ring Joint Fittings (With Door)</h5>
                                        <p class="small text-muted mb-0">Conforming to IS: 14735 with Cleanout — HSN: 391740</p>
                                    </div>
                                    <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Ring-Joint Door</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped align-middle mb-0 text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Size (mm)</th>
                                                    <th>Rate per Piece (?)</th>
                                                    <th>Std. Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr><td><strong>75 mm</strong></td><td>?103.00</td><td>60 NOS</td></tr>
                                                <tr><td><strong>90 mm</strong></td><td>?147.00</td><td>60 NOS</td></tr>
                                                <tr><td><strong>110 mm</strong></td><td>?190.00</td><td>36 NOS</td></tr>
                                                <tr><td><strong>160 mm</strong></td><td>?480.00</td><td>12 NOS</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                    <!-- UPVC Fittings Pane -->
                    <div class="tab-pane fade" id="upvc-fittings-pane" role="tabpanel" aria-labelledby="upvc-fittings-tab" tabindex="0">
                        <!-- Technical specifications for UPVC Plumbing Fittings SCH-80 -->
                        <div class="text-center mb-5 animate-on-scroll">
                            <img src="assets/images/upvc_fittings_product.png" class="img-fluid rounded shadow" style="max-height: 280px; object-fit: cover;" alt="UPVC SCH-80 Plumbing Fittings">
                        </div>

                        <div class="row g-4">
                            <!-- ELBOW -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Elbow SCH-80</h5>
                                            <p class="small text-muted mb-0">ASTM D-2467 standard elbow fittings — HSN: 391723</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>?10.00</td><td>100 NOS</td><td>500 NOS</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>?15.00</td><td>40 NOS</td><td>280 NOS</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>?23.00</td><td>45 NOS</td><td>180 NOS</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>?38.00</td><td>20 NOS</td><td>100 NOS</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>?50.00</td><td>18 NOS</td><td>72 NOS</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>?75.00</td><td>5 NOS</td><td>40 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- TANK NIPPLE -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Tank Nipple SCH-80</h5>
                                            <p class="small text-muted mb-0">Heavy duty borewell / tank connection nipple — HSN: 391723</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>?26.00</td><td>50 NOS</td><td>400 NOS</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>?35.00</td><td>20 NOS</td><td>300 NOS</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>?55.00</td><td>25 NOS</td><td>175 NOS</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>?68.00</td><td>15 NOS</td><td>105 NOS</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>?110.00</td><td>10 NOS</td><td>50 NOS</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>?145.00</td><td>10 NOS</td><td>50 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FTA (Female Threaded Adaptor) -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC FTA SCH-80</h5>
                                            <p class="small text-muted mb-0">Female Threaded Adaptor fitting — HSN: 391723</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>?8.00</td><td>100 NOS</td><td>500 NOS</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>?12.00</td><td>50 NOS</td><td>400 NOS</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>?18.00</td><td>50 NOS</td><td>250 NOS</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>?25.00</td><td>35 NOS</td><td>175 NOS</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>?30.00</td><td>16 NOS</td><td>128 NOS</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>?42.00</td><td>15 NOS</td><td>75 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- BALL VALVE -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Ball Valve SCH-80</h5>
                                            <p class="small text-muted mb-0">High quality pressure block flow ball valve — HSN: 391723</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>?68.00</td><td>25 NOS</td><td>175 NOS</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>?85.00</td><td>25 NOS</td><td>125 NOS</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>?138.00</td><td>15 NOS</td><td>75 NOS</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>?215.00</td><td>10 NOS</td><td>50 NOS</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>?280.00</td><td>5 NOS</td><td>25 NOS</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>?490.00</td><td>5 NOS</td><td>20 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- TEE -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Tee SCH-80</h5>
                                            <p class="small text-muted mb-0">ASTM D-2467 standard equal tee fittings — HSN: 391723</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>?12.00</td><td>50 NOS</td><td>300 NOS</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>?20.00</td><td>40 NOS</td><td>200 NOS</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>?32.00</td><td>28 NOS</td><td>112 NOS</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>?48.00</td><td>12 NOS</td><td>60 NOS</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>?65.00</td><td>10 NOS</td><td>50 NOS</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>?98.00</td><td>7 NOS</td><td>35 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- COUPLER (SOCKET) -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Coupler (Socket) SCH-80</h5>
                                            <p class="small text-muted mb-0">ASTM D-2467 coupling socket joints — HSN: 391723</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>?9.00</td><td>60 NOS</td><td>660 NOS</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>?14.00</td><td>45 NOS</td><td>405 NOS</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>?22.00</td><td>60 NOS</td><td>240 NOS</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>?32.00</td><td>20 NOS</td><td>140 NOS</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>?41.00</td><td>25 NOS</td><td>100 NOS</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>?53.00</td><td>16 NOS</td><td>80 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- MTA (Male Threaded Adaptor) -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC MTA SCH-80</h5>
                                            <p class="small text-muted mb-0">Male Threaded Adaptor fitting — HSN: 391723</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>?6.00</td><td>100 NOS</td><td>500 NOS</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>?9.00</td><td>50 NOS</td><td>500 NOS</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>?15.00</td><td>50 NOS</td><td>300 NOS</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>?23.00</td><td>25 NOS</td><td>250 NOS</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>?28.00</td><td>30 NOS</td><td>150 NOS</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>?40.00</td><td>20 NOS</td><td>120 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- END CAP -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC End Cap SCH-80</h5>
                                            <p class="small text-muted mb-0">ASTM D-2467 closing cap fitting — HSN: 391723</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>?6.00</td><td>50 NOS</td><td>400 NOS</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>?9.00</td><td>20 NOS</td><td>300 NOS</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>?12.00</td><td>25 NOS</td><td>175 NOS</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>?20.00</td><td>15 NOS</td><td>105 NOS</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>?25.00</td><td>10 NOS</td><td>50 NOS</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>?35.00</td><td>10 NOS</td><td>50 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- TANK CONNECTOR -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Tank Connector</h5>
                                            <p class="small text-muted mb-0">Heavy duty tank joint connector fitting — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>?35.00</td><td>100 NOS</td><td>300 NOS</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>?40.00</td><td>50 NOS</td><td>150 NOS</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>?55.00</td><td>50 NOS</td><td>150 NOS</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>?80.00</td><td>20 NOS</td><td>60 NOS</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>?105.00</td><td>20 NOS</td><td>60 NOS</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>?180.00</td><td>10 NOS</td><td>30 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- REDUCER SOCKET -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Reducer Socket</h5>
                                            <p class="small text-muted mb-0">ASTM D-2467 reducing socket coupling — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>3/4" x 1/2"</strong></td><td>?10.00</td><td>50 NOS</td><td>350 NOS</td></tr>
                                                    <tr><td><strong>1" x 1/2"</strong></td><td>?18.00</td><td>50 NOS</td><td>200 NOS</td></tr>
                                                    <tr><td><strong>1" x 3/4"</strong></td><td>?19.00</td><td>50 NOS</td><td>200 NOS</td></tr>
                                                    <tr><td><strong>1 1/4" x 1/2"</strong></td><td>?25.00</td><td>50 NOS</td><td>300 NOS</td></tr>
                                                    <tr><td><strong>1 1/4" x 1"</strong></td><td>?32.00</td><td>50 NOS</td><td>300 NOS</td></tr>
                                                    <tr><td><strong>1 1/2" x 1"</strong></td><td>?32.00</td><td>50 NOS</td><td>250 NOS</td></tr>
                                                    <tr><td><strong>1 1/2" x 1 1/4"</strong></td><td>?35.00</td><td>50 NOS</td><td>250 NOS</td></tr>
                                                    <tr><td><strong>2" x 1"</strong></td><td>?45.00</td><td>20 NOS</td><td>160 NOS</td></tr>
                                                    <tr><td><strong>2" x 1 1/4"</strong></td><td>?47.00</td><td>20 NOS</td><td>160 NOS</td></tr>
                                                    <tr><td><strong>2" x 1 1/2"</strong></td><td>?47.00</td><td>20 NOS</td><td>160 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- REDUCER BUSH -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Reducer Bush</h5>
                                            <p class="small text-muted mb-0">ASTM D-2467 reducing bush fitting — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>3/4" x 1/2"</strong></td><td>?5.00</td><td>50 NOS</td><td>350 NOS</td></tr>
                                                    <tr><td><strong>1" x 1/2"</strong></td><td>?9.00</td><td>50 NOS</td><td>200 NOS</td></tr>
                                                    <tr><td><strong>1" x 3/4"</strong></td><td>?10.00</td><td>50 NOS</td><td>200 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- REDUCER ELBOW (PLAIN) -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Reducer Elbow (Plain)</h5>
                                            <p class="small text-muted mb-0">ASTM D-2467 plain reducing elbow — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>3/4" x 1/2"</strong></td><td>?18.00</td><td>40 NOS</td><td>320 NOS</td></tr>
                                                    <tr><td><strong>1" x 1/2"</strong></td><td>?22.00</td><td>45 NOS</td><td>225 NOS</td></tr>
                                                    <tr><td><strong>1" x 3/4"</strong></td><td>?22.00</td><td>25 NOS</td><td>200 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- REDUCER ELBOW (THREADED / HEAVY) -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Reducer Elbow (Threaded / Heavy)</h5>
                                            <p class="small text-muted mb-0">Heavy duty / threaded reducing elbow joint — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>3/4" x 1/2"</strong></td><td>?22.00</td><td>20 NOS</td><td>60 NOS</td></tr>
                                                    <tr><td><strong>1" x 1/2"</strong></td><td>?30.00</td><td>15 NOS</td><td>45 NOS</td></tr>
                                                    <tr><td><strong>1" x 3/4"</strong></td><td>?33.00</td><td>14 NOS</td><td>42 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- THREADED TEE -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Threaded Tee</h5>
                                            <p class="small text-muted mb-0">Female threaded tee outlet fitting — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>?18.00</td><td>50 NOS</td><td>350 NOS</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>?25.00</td><td>50 NOS</td><td>200 NOS</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>?35.00</td><td>50 NOS</td><td>200 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- BRASS ELBOW -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Brass Threaded Elbow</h5>
                                            <p class="small text-muted mb-0">Elbow with premium brass threaded insert — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80 Brass</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>?60.00</td><td>30 NOS</td><td>120 NOS</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>?105.00</td><td>25 NOS</td><td>75 NOS</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>?155.00</td><td>10 NOS</td><td>40 NOS</td></tr>
                                                    <tr><td><strong>3/4" x 1/2"</strong></td><td>?75.00</td><td>25 NOS</td><td>100 NOS</td></tr>
                                                    <tr><td><strong>1" x 1/2"</strong></td><td>?85.00</td><td>20 NOS</td><td>60 NOS</td></tr>
                                                    <tr><td><strong>1" x 3/4"</strong></td><td>?115.00</td><td>20 NOS</td><td>60 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- BRASS MTA -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Brass MTA</h5>
                                            <p class="small text-muted mb-0">Male Threaded Adaptor with brass insert — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80 Brass</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>?85.00</td><td>35 NOS</td><td>105 NOS</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>?130.00</td><td>30 NOS</td><td>90 NOS</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>?185.00</td><td>20 NOS</td><td>60 NOS</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>?210.00</td><td>4 NOS</td><td>20 NOS</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>?270.00</td><td>4 NOS</td><td>20 NOS</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>?430.00</td><td>4 NOS</td><td>20 NOS</td></tr>
                                                    <tr><td><strong>3/4" x 1/2"</strong></td><td>?125.00</td><td>35 NOS</td><td>105 NOS</td></tr>
                                                    <tr><td><strong>1" x 1/2"</strong></td><td>?105.00</td><td>24 NOS</td><td>96 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- BRASS TEE -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Brass Threaded Tee</h5>
                                            <p class="small text-muted mb-0">Tee outlet with premium brass threaded insert — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80 Brass</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>?65.00</td><td>25 NOS</td><td>75 NOS</td></tr>
                                                    <tr><td><strong>3/4" x 1/2"</strong></td><td>?75.00</td><td>20 NOS</td><td>60 NOS</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>?110.00</td><td>18 NOS</td><td>54 NOS</td></tr>
                                                    <tr><td><strong>1" x 1/2"</strong></td><td>?85.00</td><td>15 NOS</td><td>45 NOS</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>?170.00</td><td>10 NOS</td><td>30 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- BRASS F TA -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Brass F TA</h5>
                                            <p class="small text-muted mb-0">Female Threaded Adaptor with brass insert — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80 Brass</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Rate (?)</th>
                                                        <th>Inner Packing</th>
                                                        <th>Outer Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>?55.00</td><td>35 NOS</td><td>105 NOS</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>?95.00</td><td>25 NOS</td><td>100 NOS</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>?135.00</td><td>20 NOS</td><td>60 NOS</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>?275.00</td><td>4 NOS</td><td>20 NOS</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>?350.00</td><td>4 NOS</td><td>20 NOS</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>?480.00</td><td>4 NOS</td><td>20 NOS</td></tr>
                                                    <tr><td><strong>3/4" x 1/2"</strong></td><td>?85.00</td><td>35 NOS</td><td>105 NOS</td></tr>
                                                    <tr><td><strong>1" x 1/2"</strong></td><td>?85.00</td><td>24 NOS</td><td>96 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- UPVC SCH-40 LONG BEND -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC SCH-40 Long Bend</h5>
                                            <p class="small text-muted mb-0">Standard schedule 40 long sweep bend — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-40</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>Rate (?)</th>
                                                        <th>Std. Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2" (15 MM)</strong></td><td>?26.00</td><td>250 NOS</td></tr>
                                                    <tr><td><strong>3/4" (20 MM)</strong></td><td>?41.00</td><td>250 NOS</td></tr>
                                                    <tr><td><strong>1" (25 MM)</strong></td><td>?75.00</td><td>150 NOS</td></tr>
                                                    <tr><td><strong>1 1/4" (32 MM)</strong></td><td>?115.00</td><td>100 NOS</td></tr>
                                                    <tr><td><strong>1 1/2" (40 MM)</strong></td><td>?160.00</td><td>50 NOS</td></tr>
                                                    <tr><td><strong>2" (50 MM)</strong></td><td>?215.00</td><td>30 NOS</td></tr>
                                                    <tr><td><strong>2 1/2" (65 MM)</strong></td><td>?455.00</td><td>20 NOS</td></tr>
                                                    <tr><td><strong>3" (80 MM)</strong></td><td>?689.00</td><td>12 NOS</td></tr>
                                                    <tr><td><strong>4" (100 MM)</strong></td><td>?1,238.00</td><td>6 NOS</td></tr>
                                                    <tr><td><strong>6" (150 MM)</strong></td><td>?2,950.00</td><td>—</td></tr>
                                                    <tr><td><strong>8" (200 MM)</strong></td><td>?6,065.00</td><td>—</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- UPVC SCH-80 LONG BEND -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC SCH-80 Long Bend</h5>
                                            <p class="small text-muted mb-0">Heavy duty schedule 80 long sweep bend — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>Rate (?)</th>
                                                        <th>Std. Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2" (15 MM)</strong></td><td>?36.00</td><td>250 NOS</td></tr>
                                                    <tr><td><strong>3/4" (20 MM)</strong></td><td>?60.88</td><td>250 NOS</td></tr>
                                                    <tr><td><strong>1" (25 MM)</strong></td><td>?98.00</td><td>150 NOS</td></tr>
                                                    <tr><td><strong>1 1/4" (32 MM)</strong></td><td>?149.00</td><td>100 NOS</td></tr>
                                                    <tr><td><strong>1 1/2" (40 MM)</strong></td><td>?213.00</td><td>50 NOS</td></tr>
                                                    <tr><td><strong>2" (50 MM)</strong></td><td>?300.00</td><td>30 NOS</td></tr>
                                                    <tr><td><strong>2 1/2" (65 MM)</strong></td><td>?600.00</td><td>20 NOS</td></tr>
                                                    <tr><td><strong>3" (80 MM)</strong></td><td>?913.00</td><td>12 NOS</td></tr>
                                                    <tr><td><strong>4" (100 MM)</strong></td><td>?1,438.00</td><td>6 NOS</td></tr>
                                                    <tr><td><strong>6" (150 MM)</strong></td><td>?4,600.00</td><td>—</td></tr>
                                                    <tr><td><strong>8" (200 MM)</strong></td><td>?12,300.00</td><td>—</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- UPVC PLAIN BEND -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC Plain Bend (Lighter Class)</h5>
                                            <p class="small text-muted mb-0">Economy grade plain sweep bend — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Plain Class</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>Rate (?)</th>
                                                        <th>Std. Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2" (15 MM)</strong></td><td>?20.00</td><td>250 NOS</td></tr>
                                                    <tr><td><strong>3/4" (20 MM)</strong></td><td>?32.00</td><td>250 NOS</td></tr>
                                                    <tr><td><strong>1" (25 MM)</strong></td><td>?45.00</td><td>150 NOS</td></tr>
                                                    <tr><td><strong>1 1/4" (32 MM)</strong></td><td>?75.00</td><td>100 NOS</td></tr>
                                                    <tr><td><strong>1 1/2" (40 MM)</strong></td><td>?125.00</td><td>50 NOS</td></tr>
                                                    <tr><td><strong>2" (50 MM)</strong></td><td>?180.00</td><td>30 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- UPVC BYPASS BEND -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">UPVC SCH-80 Bypass Bend</h5>
                                            <p class="small text-muted mb-0">Premium schedule 80 offset bypass bend — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SCH-80</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>Rate (?)</th>
                                                        <th>Std. Packing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2" (15 MM)</strong></td><td>?41.25</td><td>250 NOS</td></tr>
                                                    <tr><td><strong>3/4" (20 MM)</strong></td><td>?60.00</td><td>250 NOS</td></tr>
                                                    <tr><td><strong>1" (25 MM)</strong></td><td>?95.00</td><td>150 NOS</td></tr>
                                                    <tr><td><strong>1 1/4" (32 MM)</strong></td><td>?180.00</td><td>100 NOS</td></tr>
                                                    <tr><td><strong>1 1/2" (40 MM)</strong></td><td>?275.00</td><td>50 NOS</td></tr>
                                                    <tr><td><strong>2" (50 MM)</strong></td><td>?400.00</td><td>30 NOS</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CPVC Fittings Pane -->
                    <div class="tab-pane fade" id="cpvc-fittings-pane" role="tabpanel" aria-labelledby="cpvc-fittings-tab" tabindex="0">
                        <div class="text-center mb-5 animate-on-scroll">
                            <img src="assets/images/cpvc_fittings_product.png" class="img-fluid rounded shadow" style="max-height: 280px; object-fit: cover;" alt="CPVC SDR-11 Fittings">
                        </div>

                        <div class="row g-4">
                            <!-- CPVC SDR 11 TEE -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">CPVC SDR-11 Equal Tee</h5>
                                            <p class="small text-muted mb-0">ASTM D-2846 standard CPVC tee fitting — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SDR 11</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Std. Packing</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>15</td><td>100 NOS</td><td>?16.80</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>20</td><td>50 NOS</td><td>?23.00</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>25</td><td>30 NOS</td><td>?36.80</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>32</td><td>15 NOS</td><td>?72.30</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>40</td><td>10 NOS</td><td>?124.50</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>50</td><td>4 NOS</td><td>?290.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CPVC SDR 11 ELBOW -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">CPVC SDR-11 90° Elbow</h5>
                                            <p class="small text-muted mb-0">ASTM D-2846 standard CPVC 90-degree elbow — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SDR 11</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Std. Packing</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>15</td><td>100 NOS</td><td>?14.00</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>20</td><td>50 NOS</td><td>?15.50</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>25</td><td>40 NOS</td><td>?28.50</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>32</td><td>20 NOS</td><td>?56.00</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>40</td><td>15 NOS</td><td>?98.50</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>50</td><td>7 NOS</td><td>?221.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CPVC SDR 11 COUPLER -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">CPVC SDR-11 Coupler</h5>
                                            <p class="small text-muted mb-0">ASTM D-2846 standard coupler socket — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SDR 11</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Std. Packing</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>15</td><td>150 NOS</td><td>?8.30</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>20</td><td>50 NOS</td><td>?11.50</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>25</td><td>40 NOS</td><td>?19.70</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>32</td><td>25 NOS</td><td>?34.50</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>40</td><td>20 NOS</td><td>?61.00</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>50</td><td>10 NOS</td><td>?136.50</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CPVC SDR 11 45° ELBOW -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">CPVC SDR-11 45° Elbow</h5>
                                            <p class="small text-muted mb-0">ASTM D-2846 standard 45-degree elbow — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SDR 11</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Std. Packing</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>15</td><td>100 NOS</td><td>?18.50</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>20</td><td>50 NOS</td><td>?23.50</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>25</td><td>40 NOS</td><td>?38.00</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>32</td><td>20 NOS</td><td>?65.00</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>40</td><td>15 NOS</td><td>?116.00</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>50</td><td>8 NOS</td><td>?250.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CPVC SDR 11 END CAP -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">CPVC SDR-11 End Cap</h5>
                                            <p class="small text-muted mb-0">ASTM D-2846 standard end closure cap — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SDR 11</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Std. Packing</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>15</td><td>100 NOS</td><td>?12.00</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>20</td><td>50 NOS</td><td>?11.00</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>25</td><td>50 NOS</td><td>?16.50</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>32</td><td>30 NOS</td><td>?29.80</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>40</td><td>25 NOS</td><td>?49.00</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>50</td><td>20 NOS</td><td>?105.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CPVC SDR 11 MTA -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">CPVC SDR-11 MTA</h5>
                                            <p class="small text-muted mb-0">Male Threaded Adaptor — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SDR 11</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Std. Packing</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>3/4"</strong></td><td>20</td><td>50 NOS</td><td>?16.50</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>25</td><td>40 NOS</td><td>?25.50</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>32</td><td>30 NOS</td><td>?40.80</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>40</td><td>25 NOS</td><td>?69.50</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>50</td><td>12 NOS</td><td>?138.00</td></tr>
                                                    <tr><td><strong>3/4" x 1/2"</strong></td><td>20 x 15</td><td>50 NOS</td><td>?20.50</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CPVC SDR 11 FTA -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">CPVC SDR-11 FTA</h5>
                                            <p class="small text-muted mb-0">Female Threaded Adaptor — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SDR 11</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Std. Packing</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>3/4"</strong></td><td>20</td><td>50 NOS</td><td>?19.90</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>25</td><td>40 NOS</td><td>?33.00</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>32</td><td>30 NOS</td><td>?70.40</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>40</td><td>25 NOS</td><td>?105.50</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>50</td><td>12 NOS</td><td>?186.00</td></tr>
                                                    <tr><td><strong>3/4" x 1/2"</strong></td><td>20 x 15</td><td>50 NOS</td><td>?22.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CPVC SDR 11 UNION -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">CPVC SDR-11 Union</h5>
                                            <p class="small text-muted mb-0">ASTM D-2846 standard coupling union — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SDR 11</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Std. Packing</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>3/4"</strong></td><td>20</td><td>40 NOS</td><td>?61.00</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>25</td><td>25 NOS</td><td>?83.20</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>32</td><td>15 NOS</td><td>?121.00</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>40</td><td>12 NOS</td><td>?273.00</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>50</td><td>5 NOS</td><td>?475.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section Divider for Brass Fittings -->
                            <div class="col-12 text-center mt-5 mb-4 animate-on-scroll">
                                <h4 class="fw-bold text-secondary-color">CPVC SDR-11 Brass Threaded Fittings</h4>
                                <p class="text-muted">Premium CPVC fittings with brass threaded inserts for secure metal-to-plastic transitions</p>
                                <img src="assets/images/cpvc_brass_fittings_product.png" class="img-fluid rounded shadow mt-3" style="max-height: 250px; object-fit: cover;" alt="CPVC Brass Fittings">
                            </div>

                            <!-- CPVC TANK ADAPTOR NIPPLE -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">CPVC Tank Adaptor Nipple</h5>
                                            <p class="small text-muted mb-0">Premium tank connector adaptor nipple — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SDR 11</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Std. Packing</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>3/4"</strong></td><td>20</td><td>30 NOS</td><td>?62.00</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>25</td><td>20 NOS</td><td>?82.50</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>32</td><td>15 NOS</td><td>?132.50</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>40</td><td>15 NOS</td><td>?176.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CPVC BRASS MT -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">CPVC Brass MT (MTA)</h5>
                                            <p class="small text-muted mb-0">Male Threaded Adaptor with premium brass insert — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SDR 11 Brass</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Std. Packing</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>3/4"</strong></td><td>20</td><td>40 NOS</td><td>?103.50</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>25</td><td>30 NOS</td><td>?133.80</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>32</td><td>15 NOS</td><td>?306.00</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>40</td><td>12 NOS</td><td>?382.00</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>50</td><td>5 NOS</td><td>?504.00</td></tr>
                                                    <tr><td><strong>3/4" x 1/2"</strong></td><td>20 x 15</td><td>50 NOS</td><td>?61.50</td></tr>
                                                    <tr><td><strong>1" x 1/2"</strong></td><td>25 x 15</td><td>30 NOS</td><td>?75.60</td></tr>
                                                    <tr><td><strong>1" x 3/4"</strong></td><td>25 x 20</td><td>30 NOS</td><td>?103.00</td></tr>
                                                    <tr><td><strong>1 1/4" x 1"</strong></td><td>32 x 25</td><td>20 NOS</td><td>?196.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CPVC BRASS FTA -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">CPVC Brass FTA</h5>
                                            <p class="small text-muted mb-0">Female Threaded Adaptor with premium brass insert — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SDR 11 Brass</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Std. Packing</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>3/4"</strong></td><td>20</td><td>30 NOS</td><td>?104.00</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>25</td><td>30 NOS</td><td>?180.00</td></tr>
                                                    <tr><td><strong>1 1/4"</strong></td><td>32</td><td>15 NOS</td><td>?375.00</td></tr>
                                                    <tr><td><strong>1 1/2"</strong></td><td>40</td><td>12 NOS</td><td>?517.00</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>50</td><td>5 NOS</td><td>?724.00</td></tr>
                                                    <tr><td><strong>3/4" x 1/2"</strong></td><td>20 x 15</td><td>50 NOS</td><td>?94.00</td></tr>
                                                    <tr><td><strong>1" x 1/2"</strong></td><td>25 x 15</td><td>30 NOS</td><td>?106.00</td></tr>
                                                    <tr><td><strong>1" x 3/4"</strong></td><td>25 x 20</td><td>30 NOS</td><td>?137.00</td></tr>
                                                    <tr><td><strong>1 1/4" x 1"</strong></td><td>32 x 25</td><td>30 NOS</td><td>?231.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CPVC BRASS TEE -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">CPVC Brass Threaded Tee</h5>
                                            <p class="small text-muted mb-0">Tee outlet with premium brass threaded insert — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SDR 11 Brass</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Std. Packing</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>3/4"</strong></td><td>20</td><td>30 NOS</td><td>?93.00</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>25</td><td>20 NOS</td><td>?159.00</td></tr>
                                                    <tr><td><strong>3/4" x 1/2"</strong></td><td>20 x 15</td><td>30 NOS</td><td>?69.00</td></tr>
                                                    <tr><td><strong>1" x 1/2"</strong></td><td>25 x 15</td><td>30 NOS</td><td>?89.60</td></tr>
                                                    <tr><td><strong>1" x 3/4"</strong></td><td>25 x 20</td><td>20 NOS</td><td>?112.00</td></tr>
                                                    <tr><td><strong>1 1/4" x 1/2"</strong></td><td>32 x 15</td><td>15 NOS</td><td>?121.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CPVC BRASS ELBOW -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">CPVC Brass Threaded Elbow</h5>
                                            <p class="small text-muted mb-0">Elbow with premium brass threaded insert — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">SDR 11 Brass</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Std. Packing</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>1/2"</strong></td><td>15</td><td>50 NOS</td><td>?80.00</td></tr>
                                                    <tr><td><strong>3/4"</strong></td><td>20</td><td>35 NOS</td><td>?83.00</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>25</td><td>20 NOS</td><td>?148.00</td></tr>
                                                    <tr><td><strong>3/4" x 1/2"</strong></td><td>20 x 15</td><td>50 NOS</td><td>?60.00</td></tr>
                                                    <tr><td><strong>1" x 1/2"</strong></td><td>25 x 15</td><td>35 NOS</td><td>?85.00</td></tr>
                                                    <tr><td><strong>1" x 3/4"</strong></td><td>25 x 20</td><td>25 NOS</td><td>?108.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- HDPE & Flanged Fittings Pane -->
                    <div class="tab-pane fade" id="hdpe-fittings-pane" role="tabpanel" aria-labelledby="hdpe-fittings-tab" tabindex="0">
                        <div class="text-center mb-5 animate-on-scroll">
                            <img src="assets/images/hdpe_fittings_product.png" class="img-fluid rounded shadow" style="max-height: 280px; object-fit: cover;" alt="HDPE & Flanged Fittings">
                        </div>

                        <div class="row g-4">
                            <!-- TAILPIECE WITH FLANGE (BLACK) -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">Tailpiece with Flange (Black)</h5>
                                            <p class="small text-muted mb-0">HDPE flanged tailpiece coupler — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HDPE Black</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (MM)</th>
                                                        <th>Tailpiece Flange (?)</th>
                                                        <th>Close Flange (?)</th>
                                                        <th>Air Valve Flange (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>63 MM</strong></td><td>?39.00</td><td>?29.00</td><td>—</td></tr>
                                                    <tr><td><strong>75 MM</strong></td><td>?43.00</td><td>?32.00</td><td>—</td></tr>
                                                    <tr><td><strong>90 MM</strong></td><td>?46.00</td><td>?35.00</td><td>?60.00</td></tr>
                                                    <tr><td><strong>110 MM</strong></td><td>?80.00</td><td>?60.00</td><td>?95.00</td></tr>
                                                    <tr><td><strong>140 MM</strong></td><td>?146.00</td><td>?190.00</td><td>?163.00</td></tr>
                                                    <tr><td><strong>160 MM</strong></td><td>?289.00</td><td>?225.00</td><td>—</td></tr>
                                                    <tr><td><strong>200 MM</strong></td><td>?599.00</td><td>?585.00</td><td>—</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- TAILPIECE WITH FLANGE (WHITE) -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">Tailpiece with Flange (White)</h5>
                                            <p class="small text-muted mb-0">PVC flanged tailpiece coupler — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">PVC White</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (MM)</th>
                                                        <th>Tailpiece Flange (?)</th>
                                                        <th>Close Flange (?)</th>
                                                        <th>Air Valve Flange (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>63 MM</strong></td><td>?48.00</td><td>?33.00</td><td>?35.00</td></tr>
                                                    <tr><td><strong>75 MM</strong></td><td>?61.00</td><td>?38.00</td><td>?46.00</td></tr>
                                                    <tr><td><strong>90 MM</strong></td><td>?73.00</td><td>?48.00</td><td>?60.00</td></tr>
                                                    <tr><td><strong>110 MM</strong></td><td>?130.00</td><td>?87.50</td><td>?95.00</td></tr>
                                                    <tr><td><strong>140 MM</strong></td><td>?221.00</td><td>?150.00</td><td>?163.50</td></tr>
                                                    <tr><td><strong>160 MM</strong></td><td>?290.00</td><td>?226.00</td><td>—</td></tr>
                                                    <tr><td><strong>200 MM</strong></td><td>?513.00</td><td>?373.00</td><td>—</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- DETACHABLE JOINT (D-JOINT) -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">Detachable D-Joint (Black)</h5>
                                            <p class="small text-muted mb-0">HDPE short and long detachable joint coupler — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HDPE Black</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (MM)</th>
                                                        <th>Short Joint (?)</th>
                                                        <th>Long Joint (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>63 MM</strong></td><td>?70.00</td><td>?95.00</td></tr>
                                                    <tr><td><strong>75 MM</strong></td><td>?83.00</td><td>?105.00</td></tr>
                                                    <tr><td><strong>90 MM</strong></td><td>?109.00</td><td>?125.00</td></tr>
                                                    <tr><td><strong>110 MM</strong></td><td>?129.00</td><td>?155.00</td></tr>
                                                    <tr><td><strong>140 MM</strong></td><td>?162.50</td><td>?180.00</td></tr>
                                                    <tr><td><strong>160 MM</strong></td><td>?220.00</td><td>?240.00</td></tr>
                                                    <tr><td><strong>200 MM</strong></td><td>—</td><td>?1,225.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SERVICE SADDLE CLAMP -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">PVC Service Saddle Clamp</h5>
                                            <p class="small text-muted mb-0">Underpressure tapping saddle connection clamp — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">PVC White</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (MM)</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>50 MM</strong></td><td>?53.00</td></tr>
                                                    <tr><td><strong>63 MM</strong></td><td>?57.50</td></tr>
                                                    <tr><td><strong>75 MM</strong></td><td>?65.00</td></tr>
                                                    <tr><td><strong>90 MM</strong></td><td>?75.00</td></tr>
                                                    <tr><td><strong>110 MM</strong></td><td>?85.00</td></tr>
                                                    <tr><td><strong>140 MM</strong></td><td>?175.00</td></tr>
                                                    <tr><td><strong>160 MM</strong></td><td>?200.00</td></tr>
                                                    <tr><td><strong>180 MM</strong></td><td>?293.00</td></tr>
                                                    <tr><td><strong>200 MM</strong></td><td>?349.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FLANGE PLATE (BLACK) -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">Black Flange Plate / Backup Flange</h5>
                                            <p class="small text-muted mb-0">High density backup flange plates — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HDPE Black</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (MM)</th>
                                                        <th>Open Flange (?)</th>
                                                        <th>Close Flange (?)</th>
                                                        <th>Air Valve Flange (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>63 MM</strong></td><td>?53.00</td><td>?70.00</td><td>?90.00</td></tr>
                                                    <tr><td><strong>75 MM</strong></td><td>?60.00</td><td>?75.00</td><td>?100.00</td></tr>
                                                    <tr><td><strong>90 MM</strong></td><td>?65.00</td><td>?100.00</td><td>?120.00</td></tr>
                                                    <tr><td><strong>110 MM</strong></td><td>?77.50</td><td>?135.00</td><td>—</td></tr>
                                                    <tr><td><strong>140 MM</strong></td><td>?265.00</td><td>—</td><td>—</td></tr>
                                                    <tr><td><strong>160 MM</strong></td><td>?350.00</td><td>—</td><td>—</td></tr>
                                                    <tr><td><strong>200 MM</strong></td><td>?525.00</td><td>—</td><td>—</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- HDPE (HEAVY) TAILPIECE FLANGE THREADED -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">HDPE Heavy Threaded Tailpiece</h5>
                                            <p class="small text-muted mb-0">Heavy grade flanged tailpiece with threaded connection — HSN: 391740</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">HDPE Heavy</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (MM)</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>63 MM</strong></td><td>?52.50</td></tr>
                                                    <tr><td><strong>90 MM</strong></td><td>?60.00</td></tr>
                                                    <tr><td><strong>110 MM</strong></td><td>?77.50</td></tr>
                                                    <tr><td><strong>140 MM</strong></td><td>?265.00</td></tr>
                                                    <tr><td><strong>160 MM</strong></td><td>?350.00</td></tr>
                                                    <tr><td><strong>180 MM</strong></td><td>—</td></tr>
                                                    <tr><td><strong>200 MM</strong></td><td>?525.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Valves & Accessories Pane -->
                    <div class="tab-pane fade" id="valves-accessories-pane" role="tabpanel" aria-labelledby="valves-accessories-tab" tabindex="0">
                        <div class="text-center mb-5 animate-on-scroll">
                            <img src="assets/images/valves_accessories_product.png" class="img-fluid rounded shadow" style="max-height: 280px; object-fit: cover;" alt="Valves & Accessories">
                        </div>

                        <div class="row g-4">
                            <!-- RUBBER PACKING (RATE FOR DOZEN) -->
                            <div class="col-lg-12">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">Rubber Flange Packing / Gaskets</h5>
                                            <p class="small text-muted mb-0">Heavy flange and golden red/black rubber gasket packing — Rate for Dozen (12 Pieces) — HSN: 401693</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Rubber Gaskets</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Packing Type</th>
                                                        <th>2" (50 MM)</th>
                                                        <th>2½" (65 MM)</th>
                                                        <th>3" (80 MM)</th>
                                                        <th>4" (100 MM)</th>
                                                        <th>5" (125 MM)</th>
                                                        <th>6" (150 MM)</th>
                                                        <th>8" (200 MM)</th>
                                                        <th>10" (250 MM)</th>
                                                        <th>12" (315 MM)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Heavy Flange Packing</strong></td>
                                                        <td>?170.00</td>
                                                        <td>?210.00</td>
                                                        <td>?250.00</td>
                                                        <td>?340.00</td>
                                                        <td>—</td>
                                                        <td>—</td>
                                                        <td>—</td>
                                                        <td>?2,440.00</td>
                                                        <td>?2,737.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Flange Golden Black</strong></td>
                                                        <td>?138.00</td>
                                                        <td>?176.00</td>
                                                        <td>?210.00</td>
                                                        <td>?280.00</td>
                                                        <td>?545.00</td>
                                                        <td>?630.00</td>
                                                        <td>?915.00</td>
                                                        <td>—</td>
                                                        <td>—</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Flange Golden Red</strong></td>
                                                        <td>?181.00</td>
                                                        <td>?241.00</td>
                                                        <td>?285.00</td>
                                                        <td>?370.00</td>
                                                        <td>?788.00</td>
                                                        <td>?940.00</td>
                                                        <td>?1,265.00</td>
                                                        <td>—</td>
                                                        <td>—</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PVC BALL VALVE & LONG HANDLE (PLAIN & THREADED) -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">PVC Ball Valve &amp; Long Handle</h5>
                                            <p class="small text-muted mb-0">Plain and threaded long handle compact ball valve — HSN: 848180</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Long Handle</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>½"</strong></td><td>20 MM</td><td>?57.00</td></tr>
                                                    <tr><td><strong>¾"</strong></td><td>25 MM</td><td>?66.00</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>32 MM</td><td>?76.00</td></tr>
                                                    <tr><td><strong>1¼"</strong></td><td>40 MM</td><td>?129.00</td></tr>
                                                    <tr><td><strong>1½"</strong></td><td>50 MM</td><td>?165.00</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>63 MM</td><td>?232.00</td></tr>
                                                    <tr><td><strong>2½"</strong></td><td>75 MM</td><td>?326.00</td></tr>
                                                    <tr><td><strong>3"</strong></td><td>90 MM</td><td>?526.00</td></tr>
                                                    <tr><td><strong>4"</strong></td><td>110 MM</td><td>?763.00</td></tr>
                                                    <tr><td><strong>5"</strong></td><td>140 MM</td><td>?2,375.00</td></tr>
                                                    <tr><td><strong>6"</strong></td><td>160 MM</td><td>?2,750.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PVC BALL VALVE T & LONG HANDLE (PLAIN & THREADED) -->
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">PVC Ball Valve T-Handle</h5>
                                            <p class="small text-muted mb-0">Plain and threaded T &amp; long handle compact flow valve — HSN: 848180</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">T-Handle</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>½"</strong></td><td>20 MM</td><td>?50.00</td></tr>
                                                    <tr><td><strong>¾"</strong></td><td>25 MM</td><td>?57.00</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>32 MM</td><td>?72.00</td></tr>
                                                    <tr><td><strong>1¼"</strong></td><td>40 MM</td><td>?117.00</td></tr>
                                                    <tr><td><strong>1½"</strong></td><td>50 MM</td><td>?137.00</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>63 MM</td><td>?198.00</td></tr>
                                                    <tr><td><strong>2½"</strong></td><td>75 MM</td><td>?288.00</td></tr>
                                                    <tr><td><strong>3"</strong></td><td>90 MM</td><td>?421.00</td></tr>
                                                    <tr><td><strong>4"</strong></td><td>110 MM</td><td>?664.00</td></tr>
                                                    <tr><td><strong>5"</strong></td><td>140 MM</td><td>?2,066.00</td></tr>
                                                    <tr><td><strong>6"</strong></td><td>160 MM</td><td>?2,516.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- GI PIPE CLAMPS -->
                            <div class="col-lg-12 mt-4">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fw-bold text-primary-color mb-1">GI Pipe U-Clamps / Support Saddle Hooks</h5>
                                            <p class="small text-muted mb-0">Heavy galvanized iron support saddle hooks for pipe mounting — HSN: 732690</p>
                                        </div>
                                        <span class="badge bg-slate-light text-navy-dark border px-2 py-1 mt-1 mt-sm-0" style="border-radius: 6px;">Metal Clamps</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped align-middle mb-0 text-center">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size (Inch)</th>
                                                        <th>Size (MM)</th>
                                                        <th>Packing Standard</th>
                                                        <th>Rate (?)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td><strong>½"</strong></td><td>15 MM</td><td>1 Gross (144 Pcs)</td><td>?725.00</td></tr>
                                                    <tr><td><strong>¾"</strong></td><td>20 MM</td><td>1 Gross (144 Pcs)</td><td>?788.00</td></tr>
                                                    <tr><td><strong>1"</strong></td><td>25 MM</td><td>1 Gross (144 Pcs)</td><td>?889.00</td></tr>
                                                    <tr><td><strong>1¼"</strong></td><td>32 MM</td><td>1 Dozen (12 Pcs)</td><td>?100.00</td></tr>
                                                    <tr><td><strong>1½"</strong></td><td>40 MM</td><td>1 Dozen (12 Pcs)</td><td>?100.00</td></tr>
                                                    <tr><td><strong>2"</strong></td><td>50 MM</td><td>1 Dozen (12 Pcs)</td><td>?120.00</td></tr>
                                                    <tr><td><strong>2½"</strong></td><td>65 MM</td><td>1 Dozen (12 Pcs)</td><td>?130.00</td></tr>
                                                    <tr><td><strong>3"</strong></td><td>80 MM</td><td>1 Dozen (12 Pcs)</td><td>?140.00</td></tr>
                                                    <tr><td><strong>4"</strong></td><td>100 MM</td><td>1 Dozen (12 Pcs)</td><td>?155.00</td></tr>
                                                    <tr><td><strong>5"</strong></td><td>125 MM</td><td>1 Dozen (12 Pcs)</td><td>?205.00</td></tr>
                                                    <tr><td><strong>6"</strong></td><td>150 MM</td><td>1 Dozen (12 Pcs)</td><td>?236.00</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
