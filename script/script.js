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