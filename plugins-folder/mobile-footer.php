    <!-- Your existing content... -->
    

    <!-- Mobile Footer with Icons and Text -->
    <div class="mobile-footer">
        <div class="mobile-footer-buttons">
            <a href="#" class="mobile-footer-btn">
                <i class="fas fa-blog"></i>
                <span>Blog</span>
            </a>
            <a href="best-tanzania-safari-package.php" class="mobile-footer-btn">
                <i class="fas fa-camera"></i>
                <span>Safari</span>
            </a>
            <a href="kilimanjaro-trekking.php" class="mobile-footer-btn">
                <i class="fas fa-mountain"></i>
                <span>kilimanjaro</span>
            </a>
            <a href="https://wa.me/+255655147108" class="mobile-footer-btn whatsapp">
                <i class="fab fa-whatsapp"></i>
                <span>WhatsApp</span>
            </a>
        </div>
    </div>


</body>
</html>

<style>
/* Mobile Footer with Icons and Text - Only Visible on Mobile */
.mobile-footer {
    display: none;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: var(--white);
    box-shadow: 0 -2px 15px rgba(0,0,0,0.1);
    z-index: 1000;
    border-top: 1px solid rgba(117, 104, 44, 0.1);
    padding: 8px 0;
}

.mobile-footer-buttons {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.mobile-footer-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    color: var(--dark);
    font-size: 0.7rem;
    padding: 8px 5px;
    flex: 1;
    transition: all 0.3s ease;
    border-radius: 8px;
    min-width: 60px;
}

.mobile-footer-btn i {
    font-size: 1.3rem;
    margin-bottom: 4px;
    transition: all 0.3s ease;
}

.mobile-footer-btn span {
    font-weight: 500;
    font-size: 0.65rem;
    text-align: center;
    line-height: 1.2;
}

.mobile-footer-btn:hover {
    background-color: rgba(117, 104, 44, 0.05);
    transform: translateY(-2px);
}

.mobile-footer-btn.whatsapp {
    color: #25D366;
}

.mobile-footer-btn.whatsapp span {
    color: #25D366;
}

.mobile-footer-btn.active {
    color: var(--primary);
}

.mobile-footer-btn.active span {
    color: var(--primary);
}

.mobile-footer-btn.active i {
    transform: scale(1.1);
}

/* Add padding to main content to prevent overlap with fixed footer on mobile */
@media (max-width: 768px) {
    .mobile-footer {
        display: block;
    }
    
    /* Add padding to prevent content from being hidden behind fixed footer */
    body {
        padding-bottom: 70px;
    }
}

/* Small mobile adjustments */
@media (max-width: 480px) {
    .mobile-footer-btn {
        font-size: 0.65rem;
        padding: 6px 3px;
        min-width: 55px;
    }
    
    .mobile-footer-btn i {
        font-size: 1.2rem;
    }
    
    .mobile-footer-btn span {
        font-size: 0.6rem;
    }
    
    .mobile-footer {
        padding: 6px 0;
    }
}

/* Very small screens */
@media (max-width: 360px) {
    .mobile-footer-btn {
        min-width: 50px;
        padding: 5px 2px;
    }
    
    .mobile-footer-btn i {
        font-size: 1.1rem;
    }
    
    .mobile-footer-btn span {
        font-size: 0.55rem;
    }
}
</style>

<script>
// Mobile footer button interactions
document.addEventListener('DOMContentLoaded', function() {
    const mobileButtons = document.querySelectorAll('.mobile-footer-btn');
    
    mobileButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            // Remove active class from all buttons
            mobileButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            // Specific functionality for each button
            const buttonText = this.querySelector('span').textContent;
            switch(buttonText) {
                case 'Blog':
                    // Navigate to blog page or show blog section
                    window.location.href = '#blog'; // Adjust URL as needed
                    break;
                case 'Safari':
                    // Navigate to safari page or show safari section
                    window.location.href = '#safaris'; // Adjust URL as needed
                    break;
                case 'Mountain':
                    // Navigate to Kilimanjaro page
                    window.location.href = '#kilimanjaro'; // Adjust URL as needed
                    break;
                case 'WhatsApp':
                    // Open WhatsApp
                    window.open('https://wa.me/+255655147108', '_blank'); // Replace with your WhatsApp number
                    break;
            }
        });
    });
});
</script>
