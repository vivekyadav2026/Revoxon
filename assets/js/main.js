/**
 * Revoxon Industries - Main JS
 */

document.addEventListener('DOMContentLoaded', function() {
    // Header Scroll Effect
    const header = document.querySelector('.header');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
            header.classList.add('shadow');
        } else {
            header.classList.remove('scrolled');
            header.classList.remove('shadow');
        }
    });

    // Quote Form Submission (Prevent default for demo)
    const quoteForm = document.getElementById('quoteForm');
    if(quoteForm) {
        quoteForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you! Your quote request has been submitted. Our team will contact you shortly.');
            const modal = bootstrap.Modal.getInstance(document.getElementById('quoteModal'));
            modal.hide();
            quoteForm.reset();
        });
    }

    // Animation on Scroll Setup (Simple Intersection Observer)
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                entry.target.classList.add('animation-fade-up');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    animateElements.forEach(el => observer.observe(el));

    // Fix for Bootstrap Dropdown Parent Click & Touch Toggle
    const dropdownLinks = document.querySelectorAll('.dropdown-toggle');
    
    function initDropdowns() {
        dropdownLinks.forEach(link => {
            // Clone the link to remove all existing event listeners and avoid duplicates
            const newLink = link.cloneNode(true);
            link.parentNode.replaceChild(newLink, link);
            
            if (window.innerWidth < 992) {
                // Mobile behavior
                newLink.removeAttribute('data-bs-toggle');
                
                newLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const dropdownMenu = this.nextElementSibling;
                    if (dropdownMenu) {
                        const isShown = dropdownMenu.classList.contains('show');
                        
                        // Toggle this dropdown
                        if (isShown) {
                            dropdownMenu.classList.remove('show');
                            this.classList.remove('show');
                            this.setAttribute('aria-expanded', 'false');
                        } else {
                            dropdownMenu.classList.add('show');
                            this.classList.add('show');
                            this.setAttribute('aria-expanded', 'true');
                        }
                    }
                });
            } else {
                // Desktop behavior (handled via pure CSS hover, click navigates directly)
                newLink.setAttribute('data-bs-toggle', 'dropdown');
                
                newLink.addEventListener('click', function(e) {
                    if (this.getAttribute('href') && this.getAttribute('href') !== '#') {
                        window.location.href = this.getAttribute('href');
                    }
                });
            }
        });
    }

    // Run on load and on resize
    initDropdowns();
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(initDropdowns, 200);
    });
});
