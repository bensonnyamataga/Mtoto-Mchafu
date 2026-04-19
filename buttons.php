<!-- Floating Safari Expert Popup -->
<div class="safari-popup" id="safariPopup">
    <div class="popup-header">
        <div class="avatar">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="Safari Expert">
        </div>
        <div class="agent-info">
            <h4>Sarah - Safari Expert</h4>
            <div class="status">
                <div class="status-dot"></div>
                <span>Online now</span>
            </div>
        </div>
        <button class="popup-close" onclick="closePopup()">×</button>
    </div>
    <div class="popup-body">
        <div class="expertise-tags">
            <span class="tag">Serengeti</span>
            <span class="tag">Kilimanjaro</span>
            <span class="tag">Zanzibar</span>
        </div>
        <a href="https://wa.me/255123456789?text=Hi%20Sarah%2C%20I'd%20like%20to%20plan%20my%20dream%20safari!" 
           class="whatsapp-btn" target="_blank">
            <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
    </div>
</div>

<!-- Styles -->
<style>
/* Floating Popup Styles */
.safari-popup {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 280px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
    border: 1px solid rgba(117, 104, 44, 0.1);
    overflow: hidden;
    animation: float 6s ease-in-out infinite;
    z-index: 9999;
    font-family: Arial, sans-serif;
}

.popup-header {
    display: flex;
    align-items: center;
    padding: 15px;
    background: #f8f6f2;
    position: relative;
}

.popup-header .avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
    border: 2px solid #d4a336;
}

.popup-header .avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.agent-info h4 {
    font-size: 16px;
    font-weight: 700;
    color: #4b3e1b;
    margin: 0;
}

.status {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    color: #555;
}

.status-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #25D366;
    animation: pulse 2s infinite;
}

.popup-close {
    position: absolute;
    top: 5px;
    right: 10px;
    border: none;
    background: transparent;
    font-size: 20px;
    cursor: pointer;
    color: #555;
}

.popup-body {
    padding: 15px;
    text-align: center;
}

.expertise-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    margin-bottom: 12px;
    justify-content: center;
}

.tag {
    background: rgba(117, 104, 44, 0.1);
    color: #d4a336;
    padding: 4px 10px;
    border-radius: 15px;
    font-size: 11px;
    font-weight: 600;
}

.whatsapp-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 10px 16px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    font-size: 14px;
    background: #25D366;
    color: white;
    box-shadow: 0 6px 15px rgba(37, 211, 102, 0.3);
    transition: all 0.3s ease;
    gap: 6px;
}

.whatsapp-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
}

@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-5px) rotate(1deg); }
}

@keyframes pulse {
    0% { transform: scale(0.8); opacity: 1; }
    100% { transform: scale(1.2); opacity: 0; }
}

/* Responsive */
@media (max-width: 480px) {
    .safari-popup { width: 90%; right: 5%; bottom: 20px; }
}
</style>

<!-- Script to close popup -->
<script>
function closePopup() {
    document.getElementById('safariPopup').style.display = 'none';
}
</script>
