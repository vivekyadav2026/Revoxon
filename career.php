<?php
$page_title = "Careers | Revoxon Industries Pvt. Ltd.";
$page_description = "Join the Revoxon team. Explore career opportunities and be part of India's leading pipe manufacturing company.";
include 'header.php';

// Fetch active jobs from database
require_once __DIR__ . '/admin/db.php';
$active_jobs = [];
try {
    $stmt = $db->prepare("SELECT * FROM jobs WHERE status = 'active' ORDER BY created_at DESC");
    $stmt->execute();
    $active_jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Silent fail
}
?>

<main>
    <!-- Page Banner -->
    <section class="page-banner bg-primary-color text-white py-5 text-center position-relative" style="background: linear-gradient(135deg, rgba(0, 45, 98, 0.9) 0%, rgba(0, 87, 184, 0.8) 100%), url('assets/images/banner1.png') center/cover;">
        <!-- decorative elements -->
        <div class="dots-accent-bg"></div>
        <div class="container py-5 position-relative z-index-1">
            <span class="hero-badge text-white mb-3 d-inline-block">Join Our Team</span>
            <h1 class="display-4 fw-bold animation-fade-up text-white mb-4">Build Your Future With Revoxon</h1>
            <p class="lead text-white-50 mb-4 mx-auto animation-fade-up delay-1" style="max-width: 600px;">
                We are looking for passionate individuals to innovate and grow with us in the manufacturing industry.
            </p>
            <nav aria-label="breadcrumb" class="animation-fade-up delay-2">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active text-accent" aria-current="page">Careers</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Why Work Here -->
    <section class="py-5 bg-light-custom position-relative">
        <div class="container py-5">
            <div class="row align-items-center mb-5 g-5">
                <div class="col-lg-6 animate-on-scroll">
                    <div class="pe-lg-4">
                        <h6 class="text-accent fw-bold text-uppercase tracking-wider mb-2">Life at Revoxon</h6>
                        <h2 class="display-6 fw-bold text-secondary-color mb-4">Empowering Talent, Driving Excellence</h2>
                        <p class="text-muted mb-4 lead" style="line-height: 1.8;">
                            At Revoxon, we believe our people are our greatest asset. We foster a culture of continuous learning, innovation, and mutual respect. Whether you're in the manufacturing plant, the research lab, or the sales field, your contribution directly drives our success.
                        </p>
                        <div class="row g-4 mt-2">
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <div class="icon-wrap bg-primary-color text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 48px; height: 48px;">
                                        <i class="fas fa-chart-line fs-5"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="fw-bold mb-1">Career Growth</h5>
                                        <p class="text-muted small mb-0">Clear pathways for advancement.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <div class="icon-wrap bg-accent text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 48px; height: 48px;">
                                        <i class="fas fa-heartbeat fs-5"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="fw-bold mb-1">Health & Wellness</h5>
                                        <p class="text-muted small mb-0">Comprehensive employee benefits.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <div class="icon-wrap bg-primary-color text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 48px; height: 48px;">
                                        <i class="fas fa-users fs-5"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="fw-bold mb-1">Inclusive Culture</h5>
                                        <p class="text-muted small mb-0">A diverse and welcoming workplace.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start">
                                    <div class="icon-wrap bg-accent text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 48px; height: 48px;">
                                        <i class="fas fa-lightbulb fs-5"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="fw-bold mb-1">Innovation</h5>
                                        <p class="text-muted small mb-0">Work with cutting-edge technology.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 animate-on-scroll delay-1">
                    <div class="premium-image-wrapper position-relative rounded-4 overflow-hidden shadow-lg">
                        <img src="assets/images/team_culture.png" class="img-fluid w-100" alt="Team Culture" style="min-height: 400px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
                        <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                            <div class="d-flex align-items-center">
                                <div class="bg-accent text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="fas fa-quote-left fs-5"></i>
                                </div>
                                <div>
                                    <p class="text-white fw-medium fst-italic mb-0">"Innovation is driven by our people."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Openings Section -->
    <section class="py-5 bg-white position-relative border-bottom">
        <div class="container py-4">
            <div class="text-center mb-5 animate-on-scroll">
                <h6 class="text-accent fw-bold text-uppercase tracking-wider mb-2">Current Openings</h6>
                <h2 class="display-6 fw-bold text-secondary-color">Explore Opportunities</h2>
                <p class="text-muted mx-auto mt-2" style="max-width: 600px;">Join our growing team and work on premium manufacturing and operations.</p>
                <div class="mx-auto bg-accent mt-3" style="width: 60px; height: 3px; border-radius: 2px;"></div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <?php if (count($active_jobs) === 0): ?>
                        <div class="text-center py-5 bg-light-custom rounded-4 border animate-on-scroll">
                            <i class="fas fa-briefcase fs-1 text-muted mb-3"></i>
                            <h5 class="fw-bold text-secondary-color">No Active Openings</h5>
                            <p class="text-muted mb-0">We don't have any active openings right now, but feel free to submit your resume below for future opportunities.</p>
                        </div>
                    <?php else: ?>
                        <div class="accordion accordion-custom animate-on-scroll" id="jobsAccordion">
                            <?php foreach ($active_jobs as $index => $job): ?>
                                <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden" style="background-color: #f8fafc;">
                                    <h2 class="accordion-header" id="headingJob<?php echo $job['id']; ?>">
                                        <button class="accordion-button collapsed px-4 py-3 fw-bold text-secondary-color bg-transparent border-0 shadow-none d-flex align-items-center justify-content-between flex-wrap gap-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJob<?php echo $job['id']; ?>" aria-expanded="false" aria-controls="collapseJob<?php echo $job['id']; ?>">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="bg-primary-color text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="text-start">
                                                    <span class="fs-5 text-navy-dark d-block"><?php echo htmlspecialchars($job['title']); ?></span>
                                                    <span class="small text-muted fw-normal"><i class="fas fa-map-marker-alt me-1 text-accent"></i><?php echo htmlspecialchars($job['location']); ?> &bull; <i class="fas fa-clock me-1 text-accent"></i><?php echo htmlspecialchars($job['type']); ?></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-3 me-3 ms-auto">
                                                <span class="badge bg-secondary-subtle text-secondary rounded-pill px-3 py-1.5 font-monospace" style="font-size: 0.8rem;"><?php echo htmlspecialchars($job['experience']); ?> Exp</span>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseJob<?php echo $job['id']; ?>" class="accordion-collapse collapse" aria-labelledby="headingJob<?php echo $job['id']; ?>" data-bs-parent="#jobsAccordion">
                                        <div class="accordion-body px-4 pb-4 pt-0 bg-white text-muted">
                                            <hr class="mt-0 mb-3">
                                            <h6 class="fw-bold text-dark mb-2"><i class="fas fa-info-circle text-primary-color me-2"></i>Job Description</h6>
                                            <p class="mb-4 text-justify" style="line-height: 1.7; font-size: 0.95rem; white-space: pre-line;"><?php echo htmlspecialchars($job['description']); ?></p>
                                            
                                            <h6 class="fw-bold text-dark mb-2"><i class="fas fa-list-check text-primary-color me-2"></i>Requirements & Qualifications</h6>
                                            <p class="mb-4 text-justify" style="line-height: 1.7; font-size: 0.95rem; white-space: pre-line;"><?php echo htmlspecialchars($job['requirements']); ?></p>
                                            
                                            <div class="text-end">
                                                <button class="btn btn-primary-custom btn-sm px-4 py-2 rounded-3 apply-job-btn" data-department="<?php echo htmlspecialchars($job['department']); ?>"><i class="fas fa-paper-plane me-2"></i>Apply for this Role</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Submit Profile Section -->
    <section class="py-5 bg-white position-relative">
        <div class="container py-5">
            <div class="text-center mb-5 animate-on-scroll">
                <h6 class="text-accent fw-bold text-uppercase tracking-wider mb-2">Share Your Profile</h6>
                <h2 class="display-6 fw-bold text-secondary-color">Submit Your Application</h2>
                <p class="text-muted mx-auto mt-2" style="max-width: 600px;">Even if we do not have active openings, we are always looking for exceptional talent to join our team. Share your details and resume below.</p>
                <div class="mx-auto bg-accent mt-3" style="width: 60px; height: 3px; border-radius: 2px;"></div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 animate-on-scroll delay-1">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-5 d-none d-md-block bg-primary-color text-white position-relative p-5">
                                <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, rgba(0, 45, 98, 0.9) 0%, rgba(0, 87, 184, 0.8) 100%);"></div>
                                <div class="position-relative z-index-1 d-flex flex-column h-100 justify-content-center">
                                    <h4 class="fw-bold mb-4 text-white">Join Revoxon</h4>
                                    <p class="text-white-50 small mb-4">Take the next step in your career journey with India's leading pipe manufacturer.</p>
                                    <ul class="list-unstyled mb-0 small">
                                        <li class="mb-3 d-flex align-items-center"><i class="fas fa-check-circle text-accent me-2"></i> Fast-paced growth</li>
                                        <li class="mb-3 d-flex align-items-center"><i class="fas fa-check-circle text-accent me-2"></i> Innovative culture</li>
                                        <li class="d-flex align-items-center"><i class="fas fa-check-circle text-accent me-2"></i> Competitive benefits</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7 p-4 p-lg-5">
                                <form id="careerApplicationForm">
                                    <div class="mb-3">
                                        <label class="form-label text-muted small fw-bold">Department / Area of Interest <span class="text-danger">*</span></label>
                                        <select class="form-select shadow-none bg-light border-0" id="careerDept" required>
                                            <option value="" disabled selected>Select Department</option>
                                            <option value="Sales & Marketing">Sales & Marketing</option>
                                            <option value="Production & Operations">Production & Operations (Manufacturing)</option>
                                            <option value="Research & Development">Research & Development</option>
                                            <option value="Finance & Accounts">Finance & Accounts</option>
                                            <option value="Human Resources">Human Resources</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-6">
                                            <label class="form-label text-muted small fw-bold">Full Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control shadow-none" id="careerName" placeholder="John Doe" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label text-muted small fw-bold">Phone Number <span class="text-danger">*</span></label>
                                            <input type="tel" class="form-control shadow-none" id="careerPhone" placeholder="+91 98765 43210" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-muted small fw-bold">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control shadow-none" id="careerEmail" placeholder="johndoe@example.com" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label text-muted small fw-bold">Upload Resume <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="file" class="form-control shadow-none" id="resumeUpload" accept=".pdf,.doc,.docx" required>
                                            <label class="input-group-text bg-light text-muted" for="resumeUpload"><i class="fas fa-cloud-upload-alt"></i></label>
                                        </div>
                                        <div class="form-text text-muted" style="font-size: 0.75rem;">Max file size: 5MB. Accepted formats: PDF, DOC, DOCX.</div>
                                    </div>
                                    <button type="submit" class="btn btn-primary-custom w-100 py-2 rounded-3 fw-bold">Submit Application</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.z-index-1 {
    z-index: 1;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Apply Job button click handler
    document.querySelectorAll('.apply-job-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const dept = this.getAttribute('data-department');
            const deptSelect = document.getElementById('careerDept');
            const appForm = document.getElementById('careerApplicationForm');
            
            if (deptSelect) {
                let matched = false;
                for (let i = 0; i < deptSelect.options.length; i++) {
                    if (deptSelect.options[i].value === dept) {
                        deptSelect.selectedIndex = i;
                        matched = true;
                        break;
                    }
                }
                if (!matched) {
                    deptSelect.value = "Other";
                }
            }
            
            if (appForm) {
                appForm.scrollIntoView({ behavior: 'smooth', block: 'center' });
                const nameInput = document.getElementById('careerName');
                if (nameInput) setTimeout(() => nameInput.focus(), 800);
            }
        });
    });

    const careerForm = document.getElementById('careerApplicationForm');
    if(careerForm) {
        careerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = careerForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Submitting... <i class="fas fa-spinner fa-spin ms-2"></i>';

            const formData = new FormData();
            formData.append('form_type', 'career');
            formData.append('department', document.getElementById('careerDept').value);
            formData.append('name', document.getElementById('careerName').value);
            formData.append('phone', document.getElementById('careerPhone').value);
            formData.append('email', document.getElementById('careerEmail').value);
            formData.append('resume', document.getElementById('resumeUpload').files[0]);

            fetch('send-mail.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if(data.status === 'success') {
                    alert(data.message);
                    careerForm.reset();
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
