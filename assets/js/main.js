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

    // Fix for Bootstrap Dropdown Parent Click & Touch Toggle (Safe, crash-free implementation)
    function handleDropdownClick(e) {
        if (window.innerWidth >= 992) {
            // On desktop, navigate directly
            if (this.getAttribute('href') && this.getAttribute('href') !== '#') {
                window.location.href = this.getAttribute('href');
            }
        } else {
            // On mobile, override Bootstrap and toggle inline dropdown menu
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();
            
            const dropdownMenu = this.nextElementSibling;
            if (dropdownMenu) {
                const isShown = dropdownMenu.classList.contains('show');
                
                // Toggle this dropdown menu
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
        }
    }

    function initDropdowns() {
        const dropdownLinks = document.querySelectorAll('.dropdown-toggle');
        dropdownLinks.forEach(link => {
            if (window.innerWidth < 992) {
                link.removeAttribute('data-bs-toggle');
            } else {
                link.setAttribute('data-bs-toggle', 'dropdown');
            }
            // Clear existing bindings first to prevent multiple click events
            link.removeEventListener('click', handleDropdownClick);
            link.addEventListener('click', handleDropdownClick);
        });
    }

    // Run on load and on resize safely
    initDropdowns();
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(initDropdowns, 150);
    });
});
