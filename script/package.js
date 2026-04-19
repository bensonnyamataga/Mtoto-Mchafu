// Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const navMenu = document.getElementById('nav-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            mobileMenuBtn.innerHTML = navMenu.classList.contains('active') ? 
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('#nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });
        
        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // FAQ Toggle Functionality with unique class names
        document.addEventListener('DOMContentLoaded', function() {
            const safariFaqQuestions = document.querySelectorAll('.safari-faq-question');
            
            safariFaqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    const answer = question.nextElementSibling;
                    const toggle = question.querySelector('.safari-faq-toggle');
                    
                    // Toggle active class
                    answer.classList.toggle('active');
                    
                    // Change toggle symbol and add rotation effect
                    if (answer.classList.contains('active')) {
                        toggle.textContent = '−';
                        toggle.classList.add('rotate');
                    } else {
                        toggle.textContent = '+';
                        toggle.classList.remove('rotate');
                    }
                });
            });
        });


function closePopup() {
    document.getElementById('safariPopup').style.display = 'none';
}

document.addEventListener('DOMContentLoaded', function() {
        // Kilimanjaro Day Toggle Functionality
        const kilimanjaroDayHeaders = document.querySelectorAll('.kilimanjaro-day-header');
        
        kilimanjaroDayHeaders.forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                const toggle = header.querySelector('.kilimanjaro-day-toggle');
                
                // Toggle active class
                content.classList.toggle('active');
                
                // Change toggle symbol and add rotation effect
                if (content.classList.contains('active')) {
                    toggle.textContent = '−';
                    toggle.classList.add('rotate');
                } else {
                    toggle.textContent = '+';
                    toggle.classList.remove('rotate');
                }
            });
        });
        
        // Form submission
        const bookingForm = document.getElementById('kilimanjaro-booking-form');
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your Kilimanjaro trek booking request! We will contact you shortly to confirm your adventure.');
            closeBookingPopup();
        });
        
        // Set minimum date to today for date inputs
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('popup-start-date').min = today;
    });

    // Booking Popup Functions
    function openBookingPopup() {
        document.getElementById('bookingPopupOverlay').style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    function closeBookingPopup() {
        document.getElementById('bookingPopupOverlay').style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Close popup when clicking outside
    document.getElementById('bookingPopupOverlay').addEventListener('click', function(e) {
        if (e.target === this) {
            closeBookingPopup();
        }
    });

    // Close popup with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeBookingPopup();
        }
    });