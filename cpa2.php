
<!-- Call to Action Section - Altezza Style -->
<section class="altezza-cta-section">
    <div class="container">
        <div class="altezza-cta-wrapper">
            <div class="altezza-cta-content">
                <h2>Start Planning Your Adventure Today</h2>
                <p>Get expert advice and personalized safari itineraries from our local Tanzania specialists</p>
                
                <div class="altezza-cta-buttons">
                    <a href="https://wa.me/255123456789" class="altezza-cta-btn altezza-whatsapp-btn" target="_blank">
                        <div class="btn-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="btn-content">
                            <span class="btn-title">WhatsApp Us</span>
                            <span class="btn-subtitle">Instant Response</span>
                        </div>
                    </a>
                    
                    <a href="mailto:info@deeptanzaniatours.com" class="altezza-cta-btn altezza-email-btn">
                        <div class="btn-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="btn-content">
                            <span class="btn-title">Email Inquiry</span>
                            <span class="btn-subtitle">Detailed Quote</span>
                        </div>
                    </a>
                </div>
                
                <div class="altezza-cta-features">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Local Experts</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Best Price Guarantee</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>24/7 Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Altezza Travels Style CTA Section */
.altezza-cta-section {
    padding: 80px 0;
    background: linear-gradient(135deg, rgba(117, 104, 44, 0.05) 0%, rgba(117, 104, 44, 0.02) 100%);
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
    margin-bottom: 40px;
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
    margin-bottom: 40px;
    flex-wrap: wrap;
}

.altezza-cta-btn {
    display: flex;
    align-items: center;
    padding: 20px 30px;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 1px solid rgba(117, 104, 44, 0.2);
    background: var(--white);
    min-width: 220px;
    box-shadow: 0 2px 10px rgba(26, 26, 26, 0.08);
}

.altezza-cta-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(26, 26, 26, 0.12);
}

.btn-icon {
    width: 48px;
    height: 48px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 16px;
    font-size: 20px;
    flex-shrink: 0;
}

.btn-content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
}

.btn-title {
    font-size: 16px;
    font-weight: 600;
    color: var(--dark);
    margin-bottom: 4px;
    font-family: var(--heading);
}

.btn-subtitle {
    font-size: 13px;
    color: var(--text);
    opacity: 0.8;
    font-weight: 400;
}

/* WhatsApp Button */
.altezza-whatsapp-btn {
    border-color: rgba(37, 211, 102, 0.3);
}

.altezza-whatsapp-btn .btn-icon {
    background: rgba(37, 211, 102, 0.1);
    color: #25D366;
}

.altezza-whatsapp-btn:hover {
    border-color: #25D366;
    background: rgba(37, 211, 102, 0.02);
}

/* Email Button */
.altezza-email-btn .btn-icon {
    background: rgba(117, 104, 44, 0.1);
    color: var(--primary);
}

.altezza-email-btn:hover {
    border-color: var(--primary);
    background: rgba(117, 104, 44, 0.02);
}

/* Features Row */
.altezza-cta-features {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
    padding-top: 30px;
    border-top: 1px solid rgba(117, 104, 44, 0.1);
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: var(--text);
    font-weight: 500;
}

.feature-item i {
    color: var(--primary);
    font-size: 16px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .altezza-cta-section {
        padding: 60px 20px;
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
    }
    
    .altezza-cta-btn {
        width: 100%;
        max-width: 300px;
        padding: 18px 24px;
    }
    
    .altezza-cta-features {
        gap: 20px;
        flex-direction: column;
    }
}

@media (max-width: 480px) {
    .altezza-cta-section {
        padding: 50px 15px;
    }
    
    .altezza-cta-content h2 {
        font-size: 24px;
    }
    
    .altezza-cta-btn {
        flex-direction: column;
        text-align: center;
        padding: 20px;
    }
    
    .btn-icon {
        margin-right: 0;
        margin-bottom: 12px;
    }
    
    .btn-content {
        align-items: center;
        text-align: center;
    }
}
</style>
