<?php
$page_title = "Agriculture Pipes | Revoxon Industries Pvt. Ltd.";
$page_description = "Learn about Revoxon Industries Pvt. Ltd., our vision, mission, and our journey as a leading manufacturer of PVC and UPVC pipes in India.";
include 'header.php';
?>

    <!-- Main Content -->
    <main>
    <section class="page-banner bg-primary-color text-white py-5 text-center" style="background: linear-gradient(rgba(10, 77, 162, 0.85), rgba(30, 41, 59, 0.9)), url('assets/images/banner2.png') center/cover;">
        <div class="container py-4">
            <h1 class="display-5 fw-bold animation-fade-up text-white">Agriculture Pipes</h1>
            <nav aria-label="breadcrumb" class="animation-fade-up delay-1">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="products.php" class="text-white text-decoration-none">Products</a></li>
                    <li class="breadcrumb-item active text-accent" aria-current="page">Agriculture Pipes</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0 animate-on-scroll">
                    <img src="assets/images/product_with_company_name/agri_pipes_branded.jpeg" class="img-fluid rounded shadow w-100" alt="Agriculture Pipes">
                </div>
                <div class="col-lg-6 animate-on-scroll delay-1">
                    <h2 class="fw-bold text-secondary-color mb-3">Agriculture Pipes</h2>
                    <p class="text-muted fs-5 mb-4">High-pressure PVC pipes designed specifically for agricultural irrigation systems and water supply networks.</p>
                    <p class="text-muted mb-4">Revoxon Industries manufactures world-class Agriculture Pipes using advanced extrusion technology. Our products undergo rigorous lab testing to ensure they meet international quality standards and provide a long-lasting, leak-proof experience.</p>
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
                    <img src="assets/images/product_with_company_name/agri_pipes_branded_2.jpeg" class="img-fluid rounded shadow-sm w-100" alt="Agriculture Pipes Showcase 1">
                </div>
                <div class="col-md-6 animate-on-scroll delay-1">
                    <img src="assets/images/product_with_company_name/all_pipes_range_branded.jpeg" class="img-fluid rounded shadow-sm w-100" alt="Agriculture Fittings Showcase">
                </div>
            </div>
        </div>
    </section>

    <!-- Product Specifications & Pricing -->
    <section class="py-5 bg-light-custom">
        <div class="container py-4">
            <div class="text-center mb-5 animate-on-scroll">
                <h6 class="text-accent fw-bold text-uppercase mb-2">Technical Details</h6>
                <h2 class="fw-bold text-secondary-color">Product Dimensions & Rates</h2>
                <p class="text-muted max-w-600 mx-auto mt-2">Rates conform to Indian Standards <strong>IS 1784 & 4985-2021</strong> (for pipes) and <strong>IS 7834</strong> (for fittings). HSN Code: 391723. Prices are subject to change.</p>
            </div>

            <!-- Nav Tabs for Pipes vs Fittings -->
            <ul class="nav nav-pills justify-content-center mb-5 animate-on-scroll" id="specTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active px-4 py-2 me-2" id="pipes-tab" data-bs-toggle="pill" data-bs-target="#pipes-pane" type="button" role="tab" aria-controls="pipes-pane" aria-selected="true" style="border-radius: 8px; font-weight: 600;">Agriculture Pipes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-4 py-2" id="fittings-tab" data-bs-toggle="pill" data-bs-target="#fittings-pane" type="button" role="tab" aria-controls="fittings-pane" aria-selected="false" style="border-radius: 8px; font-weight: 600;">Agriculture Fittings</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="specTabsContent">
                <!-- Pipes Pane -->
                <div class="tab-pane fade show active" id="pipes-pane" role="tabpanel" aria-labelledby="pipes-tab" tabindex="0">
                    <div class="card border-0 shadow-sm animate-on-scroll">
                        <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                            <div>
                                <h4 class="fw-bold text-primary-color mb-1">Agri Pipes Rate List</h4>
                                <p class="small text-muted mb-0">Conforming to IS 1784 & 4985-2021 | HSN Code: 391723</p>
                            </div>
                            <span class="badge bg-slate-light text-navy-dark border px-3 py-2 mt-2 mt-sm-0" style="border-radius: 6px;">Rates: ? Per Meter</span>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped align-middle mb-0 text-center" style="min-width: 800px;">
                                    <thead class="table-light">
                                        <tr>
                                            <th rowspan="2" class="align-middle">Size (Inches)</th>
                                            <th rowspan="2" class="align-middle">Size (OD mm)</th>
                                            <th colspan="5" class="border-bottom">Rate Per Meter (?) by Working Pressure / Class</th>
                                        </tr>
                                        <tr>
                                            <th>Class-1<br><small class="text-muted">2.5 kg/cm²</small></th>
                                            <th>Class-2<br><small class="text-muted">4.0 kg/cm²</small></th>
                                            <th>Class-3<br><small class="text-muted">6.0 kg/cm²</small></th>
                                            <th>Class-4<br><small class="text-muted">8.0 kg/cm²</small></th>
                                            <th>Class-5<br><small class="text-muted">10.0 kg/cm²</small></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>½"</strong></td>
                                            <td>20</td>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>?20.00</td>
                                        </tr>
                                        <tr>
                                            <td><strong>¾"</strong></td>
                                            <td>25</td>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>?26.67</td>
                                            <td>?30.00</td>
                                        </tr>
                                        <tr>
                                            <td><strong>1"</strong></td>
                                            <td>32</td>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>?46.34</td>
                                            <td>?50.00</td>
                                        </tr>
                                        <tr>
                                            <td><strong>1¼"</strong></td>
                                            <td>40</td>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>?50.00</td>
                                            <td>?66.67</td>
                                            <td>?76.67</td>
                                        </tr>
                                        <tr>
                                            <td><strong>1½"</strong></td>
                                            <td>50</td>
                                            <td>—</td>
                                            <td>—</td>
                                            <td>?76.68</td>
                                            <td>?106.67</td>
                                            <td>?121.68</td>
                                        </tr>
                                        <tr>
                                            <td><strong>2"</strong></td>
                                            <td>63</td>
                                            <td>—</td>
                                            <td>?90.00</td>
                                            <td>?127.00</td>
                                            <td>?160.00</td>
                                            <td>?191.50</td>
                                        </tr>
                                        <tr>
                                            <td><strong>2½"</strong></td>
                                            <td>75</td>
                                            <td>—</td>
                                            <td>?123.33</td>
                                            <td>?176.68</td>
                                            <td>?233.30</td>
                                            <td>?273.34</td>
                                        </tr>
                                        <tr>
                                            <td><strong>3"</strong></td>
                                            <td>90</td>
                                            <td>?120.00</td>
                                            <td>?180.00</td>
                                            <td>?260.00</td>
                                            <td>?333.33</td>
                                            <td>?395.00</td>
                                        </tr>
                                        <tr>
                                            <td><strong>4"</strong></td>
                                            <td>110</td>
                                            <td>?173.33</td>
                                            <td>?260.00</td>
                                            <td>?380.00</td>
                                            <td>?500.00</td>
                                            <td>?600.00</td>
                                        </tr>
                                        <tr>
                                            <td><strong>4½"</strong></td>
                                            <td>125</td>
                                            <td>?200.00</td>
                                            <td>?316.66</td>
                                            <td>?483.33</td>
                                            <td>?633.34</td>
                                            <td>?760.00</td>
                                        </tr>
                                        <tr>
                                            <td><strong>5"</strong></td>
                                            <td>140</td>
                                            <td>?266.67</td>
                                            <td>?430.00</td>
                                            <td>?630.00</td>
                                            <td>?816.67</td>
                                            <td>?950.00</td>
                                        </tr>
                                        <tr>
                                            <td><strong>6"</strong></td>
                                            <td>160</td>
                                            <td>?350.00</td>
                                            <td>?566.67</td>
                                            <td>?816.66</td>
                                            <td>?1033.33</td>
                                            <td>?1267.00</td>
                                        </tr>
                                        <tr>
                                            <td><strong>7"</strong></td>
                                            <td>180</td>
                                            <td>?433.34</td>
                                            <td>?726.67</td>
                                            <td>?1043.33</td>
                                            <td>?1340.00</td>
                                            <td>?1563.35</td>
                                        </tr>
                                        <tr>
                                            <td><strong>8"</strong></td>
                                            <td>200</td>
                                            <td>?533.34</td>
                                            <td>?885.00</td>
                                            <td>?1295.00</td>
                                            <td>?1666.67</td>
                                            <td>?2000.00</td>
                                        </tr>
                                        <tr>
                                            <td><strong>9"</strong></td>
                                            <td>225</td>
                                            <td>?660.00</td>
                                            <td>?1130.00</td>
                                            <td>?1634.33</td>
                                            <td>?2100.00</td>
                                            <td>?2500.00</td>
                                        </tr>
                                        <tr>
                                            <td><strong>10"</strong></td>
                                            <td>250</td>
                                            <td>?833.35</td>
                                            <td>?1380.00</td>
                                            <td>?2040.00</td>
                                            <td>?2566.70</td>
                                            <td>?3133.35</td>
                                        </tr>
                                        <tr>
                                            <td><strong>11"</strong></td>
                                            <td>280</td>
                                            <td>?1116.65</td>
                                            <td>?1750.00</td>
                                            <td>?2563.67</td>
                                            <td>?3200.00</td>
                                            <td>?3933.34</td>
                                        </tr>
                                        <tr>
                                            <td><strong>12"</strong></td>
                                            <td>315</td>
                                            <td>?1333.34</td>
                                            <td>?2221.00</td>
                                            <td>?3266.66</td>
                                            <td>?4033.33</td>
                                            <td>?4833.50</td>
                                        </tr>
                                        <tr>
                                            <td><strong>14"</strong></td>
                                            <td>355</td>
                                            <td>?1740.00</td>
                                            <td>?2740.00</td>
                                            <td>?4008.65</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                        <tr>
                                            <td><strong>16"</strong></td>
                                            <td>400</td>
                                            <td>?2237.96</td>
                                            <td>?3480.83</td>
                                            <td>?5105.70</td>
                                            <td>—</td>
                                            <td>—</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer bg-white text-muted small py-3">
                            * Note: "—" indicates sizes that are not manufactured or not applicable for that specific pressure rating/class.
                        </div>
                    </div>
                </div>

                <!-- Fittings Pane -->
                <div class="tab-pane fade" id="fittings-pane" role="tabpanel" aria-labelledby="fittings-tab" tabindex="0">
                    <div class="row g-4">
                        <!-- Ring-Fit Table -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">Ring-Fit Fittings</h5>
                                        <p class="small text-muted mb-0">Elastomeric Ring Joint (IS:7834)</p>
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
                                                    <th>Standard Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>63 MM</strong></td>
                                                    <td>?18.00</td>
                                                    <td>500 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>75 MM</strong></td>
                                                    <td>?25.00</td>
                                                    <td>300 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>90 MM</strong></td>
                                                    <td>?37.50</td>
                                                    <td>200 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>110 MM</strong></td>
                                                    <td>?55.50</td>
                                                    <td>100 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>140 MM</strong></td>
                                                    <td>?131.00</td>
                                                    <td>50 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>160 MM</strong></td>
                                                    <td>?185.00</td>
                                                    <td>40 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>180 MM</strong></td>
                                                    <td>?260.00</td>
                                                    <td>30 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>200 MM</strong></td>
                                                    <td>?339.00</td>
                                                    <td>21 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>225 MM</strong></td>
                                                    <td>?520.00</td>
                                                    <td>15 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>250 MM</strong></td>
                                                    <td>?590.00</td>
                                                    <td>10 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>280 MM</strong></td>
                                                    <td>?988.00</td>
                                                    <td>10 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>315 MM</strong></td>
                                                    <td>?1248.00</td>
                                                    <td>5 NOS</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Self-Fit Table -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-header bg-white py-3 border-bottom d-flex flex-wrap justify-content-between align-items-center">
                                    <div>
                                        <h5 class="fw-bold text-primary-color mb-1">Self-Fit Fittings</h5>
                                        <p class="small text-muted mb-0">Solvent Cement Joint (IS:7834)</p>
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
                                                    <th>Standard Packing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>63 MM</strong></td>
                                                    <td>?20.00</td>
                                                    <td>500 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>75 MM</strong></td>
                                                    <td>?30.00</td>
                                                    <td>300 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>90 MM</strong></td>
                                                    <td>?48.00</td>
                                                    <td>200 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>110 MM</strong></td>
                                                    <td>?75.00</td>
                                                    <td>100 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>140 MM</strong></td>
                                                    <td>?180.00</td>
                                                    <td>50 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>160 MM</strong></td>
                                                    <td>?205.00</td>
                                                    <td>40 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>180 MM</strong></td>
                                                    <td>?310.00</td>
                                                    <td>30 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>200 MM</strong></td>
                                                    <td>?399.50</td>
                                                    <td>21 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>225 MM</strong></td>
                                                    <td>?715.50</td>
                                                    <td>15 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>250 MM</strong></td>
                                                    <td>?978.00</td>
                                                    <td>10 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>280 MM</strong></td>
                                                    <td>?1340.00</td>
                                                    <td>10 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>315 MM</strong></td>
                                                    <td>?1765.00</td>
                                                    <td>5 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>355 MM</strong></td>
                                                    <td>?2830.00</td>
                                                    <td>5 NOS</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>400 MM</strong></td>
                                                    <td>?3950.00</td>
                                                    <td>5 NOS</td>
                                                </tr>
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
