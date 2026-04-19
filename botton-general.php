<!-- Expanded Safari Expert Section -->
<section class="safari-expert-section">
    <div class="expert-card">
        <div class="card-left">
            <div class="avatar">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=200&q=80" alt="Safari Expert">
            </div>
            <div class="agent-info">
                <h4 class="agent-name">Sarah - Safari Expert</h4>
                <div class="status">
                    <div class="status-dot"></div>
                    <span>Online now</span>
                </div>
            </div>
        </div>
        <div class="card-right">
            <h2 class="cta-heading">Let us create your tailor-made trip</h2>
            <p class="cta-intro">
                Tell us your ideas, and we’ll craft a <strong>personalized travel itinerary</strong> within <strong>3 hours</strong>.
            </p>
            <div class="expertise-tags">
                <span class="tag">Serengeti</span>
                <span class="tag">Kilimanjaro</span>
                <span class="tag">Zanzibar</span>
            </div>
            <div class="action-buttons">
                <a href="https://wa.me/255123456789?text=Hi%20Sarah%2C%20I'd%20like%20to%20plan%20my%20dream%20safari!" 
                   class="whatsapp-btn" target="_blank">
                    <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                </a>
                <a href="mailto:sarah@safariadventures.com" 
                   class="email-btn" target="_blank">
                    <i class="fas fa-envelope"></i> Send Email
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.safari-expert-section {
    padding: 40px 20px;
    background: #f8f6f2;
    display: flex;
    justify-content: center;
}

.expert-card {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    background: white;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    border: 1px solid rgba(117, 104, 44, 0.15);
    max-width: 1000px;
    overflow: hidden;
}

.card-left {
    flex: 1 1 250px;
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 30px;
    background: #d4a336;
    border-radius: 20px 0 0 20px;
}

.avatar {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid white;
    flex-shrink: 0;
}

.avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.agent-name {
    font-size: 22px;
    font-weight: 700;
    color: white;
    margin-bottom: 8px;
}

.status {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: white;
}

.status-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #25D366;
    animation: pulse 2s infinite;
}

.card-right {
    flex: 2 1 500px;
    padding: 30px;
    text-align: left;
}

.cta-heading {
    font-size: 28px;
    font-weight: 700;
    color: #4b3e1b;
    margin-bottom: 15px;
}

.cta-intro {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
    margin-bottom: 20px;
}

.expertise-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 25px;
}

.tag {
    background: rgba(117, 104, 44, 0.1);
    color: #d4a336;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
}

.action-buttons a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 12px 22px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    font-size: 14px;
    margin-right: 10px;
    margin-bottom: 10px;
    transition: all 0.3s ease;
    gap: 8px;
}

.whatsapp-btn {
    background: #25D366;
    color: white;
    box-shadow: 0 6px 20px rgba(37, 211, 102, 0.3);
}

.whatsapp-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4);
}

.email-btn {
    background: #4b3e1b;
    color: white;
    box-shadow: 0 6px 20px rgba(75, 62, 27, 0.3);
}

.email-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(75, 62, 27, 0.4);
}

@keyframes pulse {
    0% { transform: scale(0.8); opacity: 1; }
    100% { transform: scale(1.2); opacity: 0; }
}

/* Responsive Styles */
@media (max-width: 992px) {
    .expert-card {
        flex-direction: column;
    }
    .card-left, .card-right {
        text-align: center;
        border-radius: 20px 20px 0 0;
    }
    .avatar {
        width: 100px;
        height: 100px;
    }
    .cta-heading {
        font-size: 24px;
    }
}

@media (max-width: 576px) {
    .card-left {
        padding: 20px;
    }
    .card-right {
        padding: 20px;
    }
    .cta-heading {
        font-size: 20px;
    }
    .cta-intro {
        font-size: 14px;
    }
    .action-buttons a {
        width: 100%;
        justify-content: center;
    }
}
</style>
