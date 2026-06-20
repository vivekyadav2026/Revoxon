<?php
$page_title = "Photo Gallery | Revoxon Industries Pvt. Ltd.";
$page_description = "Learn about Revoxon Industries Pvt. Ltd., our vision, mission, and our journey as a leading manufacturer of PVC and UPVC pipes in India.";
include 'header.php';

// Include database
require_once __DIR__ . '/admin/db.php';

// Fetch Brand Showcase Images
try {
    $stmt_brand = $db->query("SELECT * FROM gallery WHERE category = 'brand' ORDER BY id DESC");
    $brand_items = $stmt_brand->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $brand_items = [];
}

// Fetch Plant & Infrastructure Images
try {
    $stmt_plant = $db->query("SELECT * FROM gallery WHERE category = 'plant' ORDER BY id DESC");
    $plant_items = $stmt_plant->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $plant_items = [];
}
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
                        if (count($brand_items) === 0): ?>
                            <div class="col-12 text-center py-5 text-muted">No brand showcase images found.</div>
                        <?php else:
                            $delay = 0;
                            foreach ($brand_items as $item) {
                                // Add fallback prefix if it is a default asset or user upload
                                $img_src = htmlspecialchars($item['image_path']);
                                ?>
                                <div class="col-lg-4 col-md-6 animate-on-scroll" style="animation-delay: <?php echo $delay; ?>ms;">
                                    <div class="card border-0 shadow-sm overflow-hidden h-100 position-relative gallery-card">
                                        <img src="<?php echo $img_src; ?>" class="img-fluid w-100 h-100" style="min-height: 280px; max-height: 280px; object-fit: contain !important; background: #f8fafc; padding: 15px; cursor: pointer; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'" alt="<?php echo htmlspecialchars($item['title']); ?>" data-bs-toggle="modal" data-bs-target="#galleryModal" onclick="document.getElementById('modalImage').src=this.src; document.getElementById('modalTitle').innerText=this.alt">
                                        <div class="gallery-card-overlay">
                                            <h5 class="text-white fw-bold mb-1"><?php echo htmlspecialchars($item['title']); ?></h5>
                                            <p class="text-accent small mb-0"><i class="fas fa-search-plus me-1"></i> Click to Zoom</p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $delay = ($delay + 50) % 300;
                            }
                        endif;
                        ?>
                    </div>
                </div>

                <!-- Plant & Infrastructure Tab -->
                <div class="tab-pane fade" id="plant-pane" role="tabpanel" aria-labelledby="plant-tab" tabindex="0">
                    <div class="row g-4">
                        <?php
                        if (count($plant_items) === 0): ?>
                            <div class="col-12 text-center py-5 text-muted">No plant or infrastructure images found.</div>
                        <?php else:
                            $delay = 0;
                            foreach ($plant_items as $item) {
                                $img_src = htmlspecialchars($item['image_path']);
                                ?>
                                <div class="col-lg-4 col-md-6 animate-on-scroll" style="animation-delay: <?php echo $delay; ?>ms;">
                                    <div class="card border-0 shadow-sm overflow-hidden h-100 position-relative gallery-card">
                                        <img src="<?php echo $img_src; ?>" class="img-fluid w-100 h-100 object-fit-cover" style="min-height: 280px; max-height: 280px; cursor: pointer; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'" alt="<?php echo htmlspecialchars($item['title']); ?>" data-bs-toggle="modal" data-bs-target="#galleryModal" onclick="document.getElementById('modalImage').src=this.src; document.getElementById('modalTitle').innerText=this.alt">
                                        <div class="gallery-card-overlay">
                                            <h5 class="text-white fw-bold mb-1"><?php echo htmlspecialchars($item['title']); ?></h5>
                                            <p class="text-accent small mb-0"><i class="fas fa-search-plus me-1"></i> Click to Zoom</p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $delay = ($delay + 50) % 300;
                            }
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Lightbox Modal -->
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
</main>

<?php include 'footer.php'; ?>
