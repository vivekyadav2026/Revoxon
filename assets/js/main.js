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

    // Fix for Bootstrap Dropdown Parent Click
    const dropdownLinks = document.querySelectorAll('.dropdown-toggle');
    dropdownLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // If it has a real href and it's not just '#'
            if (this.getAttribute('href') && this.getAttribute('href') !== '#') {
                // Navigate to the link
                window.location.href = this.getAttribute('href');
            }
        });
        
        // Add hover to open dropdown on desktop for better UX since click navigates
        link.addEventListener('mouseenter', function() {
            if (window.innerWidth >= 992) {
                let dropdown = new bootstrap.Dropdown(this);
                dropdown.show();
            }
        });
        
        const parentLi = link.parentElement;
        parentLi.addEventListener('mouseleave', function() {
            if (window.innerWidth >= 992) {
                let dropdown = bootstrap.Dropdown.getInstance(link);
                if (dropdown) dropdown.hide();
            }
        });
    });
});
