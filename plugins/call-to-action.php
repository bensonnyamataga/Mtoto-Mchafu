<section class="altezza-cta-section">
    <div class="container">
        <div class="altezza-cta-wrapper">
            <div class="altezza-cta-content">
                <h2>Start Planning Your Adventure Today</h2>
                <p>Get expert advice and personalized safari itineraries from our local Tanzania specialists</p>
                
                <div class="altezza-cta-buttons">
                    <div class="whatsapp-button-with-image">
                        <div class="customer-care-image">
                           <img src="img/black-customer-care.jpg" alt="customer-care">
                        </div>
                        <a href="https://wa.me/255123456789" class="altezza-cta-btn altezza-whatsapp-btn" target="_blank">
                            <div class="btn-icon">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="btn-content">
                                <span class="btn-title">WhatsApp Us</span>
                                <span class="btn-subtitle">Instant Response</span>
                            </div>
                        </a>
                    </div>
                    
                    <a href="mailto:info@Deep Tanzania.com" class="altezza-cta-btn altezza-email-btn">
                        <div class="btn-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="btn-content">
                            <span class="btn-title">Email Inquiry</span>
                            <span class="btn-subtitle">Detailed Quote</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Altezza CTA Section */
.altezza-cta-section {
    padding: 40px 0;
    background: #F6F4F2;
    border-top: 1px solid rgba(117, 104, 44, 0.1);
    border-bottom: 1px solid rgba(117, 104, 44, 0.1);
    font-family: var(--body);
}

.altezza-cta-wrapper {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.altezza-cta-content h2 {
    font-size: 32px;
    color: var(--dark);
    margin-bottom: 16px;
    font-weight: 700;
    font-family: var(--heading);
    line-height: 1.3;
}

.altezza-cta-content > p {
    font-size: 18px;
    color: var(--text);
    margin-bottom: 15px;
    line-height: 1.6;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    font-weight: 400;
}

.altezza-cta-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 20px;
    flex-wrap: wrap;
    align-items: center;
}

/* WhatsApp Button with Image */
.whatsapp-button-with-image {
    display: flex;
    align-items: center;
    gap: 20px;
}

/* Customer Care Image */
.customer-care-image {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    overflow: hidden;
    flex-shrink: 0;
    border: 4px solid var(--primary);
    box-shadow: 0 8px 25px rgba(117, 104, 44, 0.4);
    position: relative;
    transition: all 0.3s ease;
    background: var(--white);
    padding: 4px;
}

.customer-care-image:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 35px rgba(117, 104, 44, 0.6);
    border-color: var(--secondary);
}

/* Rotating Border */
.customer-care-image::before {
    content: '';
    position: absolute;
    top: -6px;
    left: -6px;
    right: -6px;
    bottom: -6px;
    border-radius: 50%;
    background: conic-gradient(
        from 0deg,
        var(--primary),
        var(--secondary),
        var(--accent),
        var(--primary)
    );
    animation: rotateBorder 4s linear infinite;
    z-index: -1;
    opacity: 0.8;
}

.customer-care-image::after {
    content: '';
    position: absolute;
    top: 2px;
    left: 2px;
    right: 2px;
    bottom: 2px;
    border-radius: 50%;
    background: var(--white);
    z-index: -1;
}

@keyframes rotateBorder {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.customer-care-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
    position: relative;
    z-index: 2;
}

/* CTA Buttons Base */
.altezza-cta-btn {
    display: flex;
    align-items: center;
    padding: 20px 30px;
    border-radius: 10px;
    text-decoration: none;
    transition: all 0.3s ease;
    min-width: 240px;
    box-shadow: 0 4px 15px rgba(26, 26, 26, 0.1);
    border: none;
    position: relative;
    overflow: hidden;
}

.btn-icon {
    width: 50px;
    height: 50px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 18px;
    font-size: 22px;
    flex-shrink: 0;
}

.btn-content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
}

.btn-title {
    font-size: 17px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 4px;
    font-family: var(--heading);
}

.btn-subtitle {
    font-size: 13px;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 500;
}

/* WhatsApp Button - Deep Tanzania Style */
.altezza-whatsapp-btn {
    background: #25D366;
    color: #fff;
}

.altezza-whatsapp-btn:hover {
    background: #1eb957ff;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(26, 26, 26, 0.2);
}

.altezza-whatsapp-btn .btn-icon {
    background: rgba(255, 255, 255, 0.3);
    color: #fff;
}

.altezza-whatsapp-btn:hover .btn-icon {
    transform: scale(1.1);
}

/* Email Button - Deep Tanzania Style */
.altezza-email-btn {
    background: var(--primary);
    color: #fff;
}

.altezza-email-btn:hover {
    background:  #96853bff;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(26, 26, 26, 0.2);
}

.altezza-email-btn .btn-icon {
    background: rgba(255, 255, 255, 0.3);
    color: #fff;
}

.altezza-email-btn:hover .btn-icon {
    transform: scale(1.1);
}

/* Responsive */
@media (max-width: 768px) {
    .altezza-cta-section {
        padding: 60px 20px;
        margin: 60px 0; /* ✅ Maintain margin on smaller screens */
    }

    .altezza-cta-content h2 {
        font-size: 28px;
    }

    .altezza-cta-content > p {
        font-size: 16px;
    }

    .altezza-cta-buttons {
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    .whatsapp-button-with-image {
        flex-direction: column;
        gap: 25px;
        width: 100%;
        align-items: center;
    }

    .customer-care-image {
        width: 140px;
        height: 140px;
        border: 5px solid var(--primary);
    }

    .altezza-cta-btn {
        width: 100%;
        max-width: 320px;
        padding: 20px 25px;
    }
}

@media (max-width: 480px) {
    .altezza-cta-section {
        padding: 50px 15px;
        margin: 50px 0; /* ✅ Maintain margin on smallest screens */
    }
}
</style>
