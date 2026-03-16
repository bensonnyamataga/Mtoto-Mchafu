<footer id="contact">
    <div class="container">

        <div class="footer-top-logo-row">
            <div class="footer-brand-logo-box">
                <img src="../img/footer-logo.png" alt="Deep Tanzania Tours Logo">
            </div>
            <div class="footer-brand-slogan">
                <h2>"Dive into the Heart of Tanzania"</h2> <br>
            </div>
        </div>

      

        <div class="footer-line"></div>

        <div class="footer-grid">
            <div class="footer-col">
                <h3>About Us</h3>
                <p>We are Tanzania's premier safari operator, offering unforgettable wildlife experiences with a commitment to sustainable tourism.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Safaris</a></li>
                    <li><a href="#">Kilimanjaro</a></li>
                    <li><a href="#">About Tanzania</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Safari Packages</h3>
                <ul class="footer-links">
                    <li><a href="#">Classic Safaris</a></li>
                    <li><a href="#">Luxury Safaris</a></li>
                    <li><a href="#">Family Safaris</a></li>
                    <li><a href="#">Great Migration</a></li>
                    <li><a href="#">Custom Safaris</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Contact Info</h3>
                <p><i class="fas fa-map-marker-alt"></i> Deep Tanzania Tours, 10166 Moshi Tanzania, Aga Khan Street/Road, NSSF Complex Near Moshi Municipal, Second Floor Room No13</p>
                <p><i class="fas fa-phone"></i> +255 655 147 108</p>
                <p><i class="fas fa-envelope"></i> info@deeptanzaniatours.com</p>
                <p><i class="fas fa-clock"></i> Mon-Fri: 8AM - 5PM</p>
            </div>
        </div>
  <div class="footer-line"></div>

        <div class="footer-top-extras">
            <div class="footer-top-block">
                <h3>Our Trusted Partners</h3>
                <div class="partner-logos-grid">
                    <div class="partner-logo-box">
                        <img src="../img/kilimanjaro-trekking-organization.jpg" alt="Partner 1">
                    </div>
                    <div class="partner-logo-box">
                        <img src="../img/ATTA-logo.png" alt="Partner 2">
                    </div>
                    <div class="partner-logo-box">
                        <img src="../img/travel-life.jpg" alt="Partner 3">
                    </div>
                    <div class="partner-logo-box">
                        <img src="../img/tripadivasor.png" alt="Partner 4">
                    </div>
                    <div class="partner-logo-box">
                        <img src="../img/kpap-logo.jpg" alt="Partner 5">
                    </div>
                </div>
            </div>

            <div class="footer-top-block">
                <h3>Payment Accepted</h3>
                <div class="payment-methods-grid">
                    <div class="payment-method-box">
                        <img src="../img/pesapal-logo.png" alt="Pesapal">
                    </div>
                    <div class="payment-method-box">
                        <img src="../img/visa-logo.png" alt="Visa">
                    </div>
                    <div class="payment-method-box">
                        <img src="../img/master-card.png" alt="Mastercard">
                    </div>
                    <div class="payment-method-box">
                        <img src="../img/american-express.png" alt="American Express">
                    </div>
                    <div class="payment-method-box">
                        <img src="../img/paypal.png" alt="PayPal">
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 Deep Tanzania Tours. All Rights Reserved. | <a href="#">Privacy Policy</a> | <a href="terms-and-condition.php">Terms of Service</a></p>
        </div>

    </div>
</footer>

<style>

#contact {
    background:
        linear-gradient(rgba(246, 244, 242, 0.88), rgba(246, 244, 242, 0.94)),
        url('img/savana.png');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    color: var(--text);
    padding: 70px 0 25px;
    margin-top: 60px;
    position: relative;
}

#contact::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(117, 104, 44, 0.08), rgba(246, 244, 242, 0.92));
    z-index: 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 1;
}

.footer-top-logo-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 25px;
    padding-bottom: 22px;
    flex-wrap: wrap;
}

.footer-brand-logo-box {
    width: 120px;
    height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    flex-shrink: 0;
}

.footer-brand-logo-box img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    display: block;
}

.footer-brand-slogan h2 {
    margin: 0;
    font-size: 24px;
    line-height: 1.2;
    color: #000;
    font-family: var(--heading);
    font-weight: 600;
}

.footer-line {
    width: 100%;
    height: 1px;
    background: rgba(117, 104, 44, 0.30);
    margin: 0 0 24px 0;
}

.footer-top-extras {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 35px;
    margin-bottom: 24px;
}

.footer-top-block h3 {
    color: #000;
    font-size: 18px;
    margin-bottom: 14px;
    font-family: var(--heading);
    font-weight: 600;
}

.partner-logos-grid {
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    gap: 12px;
}

.partner-logo-box {
    height: 78px;
    background: rgba(255,255,255,0.75);
    border: 1px solid rgba(117, 104, 44, 0.18);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    overflow: hidden;
}

.partner-logo-box img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    display: block;
}

.payment-methods-grid {
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    gap: 12px;
}

.payment-method-box {
    height: 78px;
    background: rgba(255,255,255,0.78);
    border: 1px solid rgba(117, 104, 44, 0.18);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    overflow: hidden;
}

.payment-method-box img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    display: block;
}

.footer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 24px;
    margin-bottom: 28px;
}

.footer-col {
    padding: 10px 0;
}

.footer-col h3 {
    color: #000000;
    font-size: 18px;
    margin-bottom: 14px;
    font-family: var(--heading);
    font-weight: 600;
}

.footer-col p {
    margin-bottom: 12px;
    line-height: 1.7;
    font-size: 15.5px;
    color: #333;
}

.social-links {
    display: flex;
    gap: 12px;
    margin-top: 16px;
    flex-wrap: wrap;
}

.social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    background-color: var(--primary);
    color: var(--light);
    border-radius: 50%;
    transition: all 0.3s ease;
    text-decoration: none;
    font-size: 14px;
}

.social-links a:hover {
    background-color: var(--secondary);
    transform: translateY(-3px);
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: #333;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
    font-size: 15.5px;
    font-weight: 500;
}

.footer-links a:hover {
    color: var(--primary);
    transform: translateX(5px);
}

.footer-col p i {
    color: var(--primary);
    margin-right: 8px;
    width: 18px;
    font-size: 15px;
}

.footer-bottom {
    border-top: 1px solid rgba(117, 104, 44, 0.3);
    padding-top: 18px;
    text-align: center;
    font-size: 15px;
    color: #333;
    font-weight: 500;
}

.footer-bottom a {
    color: var(--primary);
    text-decoration: none;
    transition: color 0.3s ease;
    font-weight: 500;
    font-size: 15px;
}

.footer-bottom a:hover {
    color: var(--secondary);
}

@media (max-width: 1100px) {
    .partner-logos-grid,
    .payment-methods-grid {
        grid-template-columns: repeat(5, 1fr);
        gap: 10px;
    }

    .partner-logo-box,
    .payment-method-box {
        height: 72px;
        padding: 8px;
    }
}

@media (max-width: 992px) {
    .footer-top-extras {
        grid-template-columns: 1fr;
    }

    .partner-logos-grid,
    .payment-methods-grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .footer-brand-slogan h2 {
        font-size: 22px;
    }
}

@media (max-width: 768px) {
    #contact {
        background-attachment: scroll;
        padding: 55px 0 20px;
    }

    .footer-top-logo-row {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 15px;
    }

    .footer-brand-logo-box {
        width: 100px;
        height: 100px;
    }

    .footer-brand-slogan h2 {
        font-size: 20px;
    }

    .footer-top-block h3 {
        font-size: 17px;
        text-align: center;
    }

    .footer-grid {
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .footer-col {
        text-align: left;
    }

    .footer-col h3 {
        font-size: 17px;
    }

    .footer-col p,
    .footer-links a {
        font-size: 15px;
    }

    .partner-logos-grid,
    .payment-methods-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .partner-logo-box,
    .payment-method-box {
        height: 74px;
    }

    .footer-bottom,
    .footer-bottom a {
        font-size: 14.5px;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 15px;
    }

    .footer-brand-slogan h2 {
        font-size: 18px;
    }

    .footer-top-block h3,
    .footer-col h3 {
        font-size: 16px;
    }

    .footer-col p,
    .footer-links a,
    .footer-bottom,
    .footer-bottom a {
        font-size: 14px;
    }

    .partner-logos-grid,
    .payment-methods-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .partner-logo-box,
    .payment-method-box {
        height: 68px;
        padding: 8px;
    }
}
</style>