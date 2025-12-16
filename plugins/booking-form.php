
<style>
    /* BOOKING POPUP MODAL STYLES - SEPARATE CSS */
        .booking-popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            backdrop-filter: blur(5px);
        }

        .booking-popup-modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: var(--white);
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            width: 90%;
            max-width: 500px;
            max-height: 90vh;
            overflow-y: auto;
            animation: popupFadeIn 0.3s ease-out;
        }

        @keyframes popupFadeIn {
            from {
                opacity: 0;
                transform: translate(-50%, -60%);
            }
            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }

        .booking-popup-close {
            position: absolute;
            top: 15px;
            right: 20px;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--text);
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .booking-popup-close:hover {
            color: var(--primary);
        }

        .booking-popup-heading {
            text-align: center;
            margin-bottom: 25px;
            padding-right: 30px;
        }

        .booking-popup-heading h3 {
            font-size: 24px;
            color: var(--dark);
            margin-bottom: 8px;
        }

        .booking-popup-heading p {
            color: var(--text);
            font-size: 14px;
        }

        .booking-popup-form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .popup-form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .popup-form-group label {
            font-weight: 600;
            color: var(--dark);
            font-size: 14px;
        }

        .popup-form-group input,
        .popup-form-group select,
        .popup-form-group textarea {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            font-family: var(--body);
            background: var(--white);
        }

        .popup-form-group input:focus,
        .popup-form-group select:focus,
        .popup-form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(117, 104, 44, 0.1);
        }

        .popup-form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .popup-price-summary {
            background: rgba(117, 104, 44, 0.05);
            border-radius: 10px;
            padding: 20px;
            margin: 15px 0;
        }

        .popup-price-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .popup-price-total {
            display: flex;
            justify-content: space-between;
            font-weight: 700;
            font-size: 18px;
            padding-top: 10px;
            border-top: 2px solid var(--accent);
            margin-top: 10px;
        }

        .popup-booking-terms {
            font-size: 12px;
            color: var(--text);
            text-align: center;
            margin-top: 15px;
            line-height: 1.5;
        }

        .popup-btn-primary {
            background: linear-gradient(135deg, var(--primary), #d4a336);
            color: var(--white);
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(117, 104, 44, 0.3);
        }

        .popup-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(117, 104, 44, 0.4);
        }

        /* Book Now Button in Itinerary Section */
        .book-now-container {
            text-align: center;
            margin-top: 30px;
        }

        .book-now-btn {
            background: linear-gradient(135deg, var(--primary), #d4a336);
            color: var(--white);
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(117, 104, 44, 0.3);
        }

        .book-now-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(117, 104, 44, 0.4);
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .slider-slide {
                height: 400px;
            }

            .gallery-layout {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .large-image {
                height: 400px;
            }
            
            .right-images {
                grid-template-columns: repeat(3, 1fr);
                grid-template-rows: 1fr;
                height: 150px; /* Smaller height for tablet */
            }
        }

        @media (max-width: 768px) {
            .kilimanjaro-itinerary-section {
                padding: 30px 0; /* Reduced from 60px */
            }

            .kilimanjaro-itinerary-content {
                padding: 20px;
            }

            .kilimanjaro-day-header {
                padding: 15px 18px; /* Reduced from 18px 20px */
            }

            .kilimanjaro-day-info h3 {
                font-size: 18px;
            }

            .kilimanjaro-day-content.active {
                padding: 18px; /* Reduced from 20px */
            }

            .kilimanjaro-day-stats {
                flex-direction: column;
                gap: 6px; /* Reduced from 8px */
            }

            .booking-popup-modal {
                padding: 25px;
                width: 95%;
            }

            .popup-form-row {
                grid-template-columns: 1fr;
            }

            .mountain-activities-gallery {
                padding: 30px 0;
            }
            
            .large-image {
                height: 350px;
            }
            
            .right-images {
                grid-template-columns: 1fr 1fr 1fr;
                grid-template-rows: 1fr;
                height: 200px; /* Same height for all three images on mobile */
                gap: 10px;
            }
            
            .small-image {
                aspect-ratio: 1/1; /* Ensure square aspect ratio */
            }
            
            .image-overlay {
                padding: 15px;
            }
            
            .image-overlay h3 {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .kilimanjaro-day-header {
                padding: 12px 15px; /* Reduced from 15px */
                flex-direction: column;
                align-items: flex-start;
                gap: 12px; /* Reduced from 15px */
            }

            .kilimanjaro-day-title {
                width: 100%;
            }

            .kilimanjaro-day-content.active {
                padding: 15px;
            }

            .kilimanjaro-day-number {
                width: 60px; /* Reduced from 65px */
                height: 60px; /* Reduced from 65px */
            }

            .day-digit {
                font-size: 26px;
            }

            .day-label {
                font-size: 12px;
            }

            .kilimanjaro-day-toggle {
                align-self: flex-end;
            }

            .slider-slide {
                height: 300px;
            }

            .slide-overlay {
                padding: 15px;
            }

            .slide-overlay h3 {
                font-size: 18px;
            }

            .slide-overlay p {
                font-size: 14px;
            }

            .slider-btn {
                width: 35px;
                height: 35px;
            }

            .large-image {
                height: 250px;
            }
            
            .right-images {
                height: 120px; /* Smaller height for mobile */
                gap: 8px;
            }
            
            .image-overlay {
                padding: 12px;
            }
            
            .image-overlay h3 {
                font-size: 14px;
            }

            .booking-popup-modal {
                padding: 20px;
            }
        }

</style>










<!-- Booking Popup Modal -->
<div class="booking-popup-overlay" id="bookingPopupOverlay">
    <div class="booking-popup-modal">
        <button class="booking-popup-close" onclick="closeBookingPopup()">
            <i class="fas fa-times"></i>
        </button>
        
        <div class="booking-popup-heading">
            <h3>Book Your Kilimanjaro & Serengeti Adventure</h3>
            <p>Reserve your spot for this unforgettable mountain and wildlife experience</p>
        </div>
        
        <form class="booking-popup-form" id="kilimanjaro-booking-form">
            <div class="popup-form-group">
                <label for="popup-full-name">Full Name</label>
                <input type="text" id="popup-full-name" name="full-name" required>
            </div>
            
            <div class="popup-form-group">
                <label for="popup-email">Email Address</label>
                <input type="email" id="popup-email" name="email" required>
            </div>
            
            <div class="popup-form-group">
                <label for="popup-phone">Phone Number</label>
                <input type="tel" id="popup-phone" name="phone" required>
            </div>
            
            <div class="popup-form-row">
                <div class="popup-form-group">
                    <label for="popup-start-date">Start Date</label>
                    <input type="date" id="popup-start-date" name="start-date" required>
                </div>
                
                <div class="popup-form-group">
                    <label for="popup-package-type">Package Type</label>
                    <select id="popup-package-type" name="package-type" required>
                        <option value="">Select Package</option>
                        <option value="Lemosho + Serengeti" selected>Lemosho Route + Serengeti Safari</option>
                        <option value="Machame Route">Machame Route Only</option>
                        <option value="Marangu Route">Marangu Route Only</option>
                        <option value="Safari Only">Safari Only</option>
                    </select>
                </div>
            </div>
            
            <div class="popup-form-group">
                <label for="popup-group-size">Number of Travelers</label>
                <select id="popup-group-size" name="group-size" required>
                    <option value="">Select Group Size</option>
                    <option value="1">1 Person</option>
                    <option value="2">2 People</option>
                    <option value="3">3 People</option>
                    <option value="4">4 People</option>
                    <option value="5+">5+ People</option>
                </select>
            </div>
            
            <div class="popup-form-group">
                <label for="popup-accommodation-type">Accommodation Preference</label>
                <select id="popup-accommodation-type" name="accommodation-type">
                    <option value="tented-camp" selected>Tented Camp</option>
                    <option value="lodge">Lodge</option>
                    <option value="luxury">Luxury Tented Camp</option>
                </select>
            </div>
            
            <div class="popup-form-group">
                <label for="popup-special-requests">Special Requests</label>
                <textarea id="popup-special-requests" name="special-requests" rows="3" placeholder="Any dietary requirements, medical conditions, accommodation preferences, or other requests"></textarea>
            </div>
            
            <button type="submit" class="popup-btn-primary">
                <i class="fas fa-paper-plane"></i> Request Booking
            </button>
            
            <p class="popup-booking-terms">
                By submitting this form, you agree to our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>. A 30% deposit is required to confirm your booking.
            </p>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form submission
        const bookingForm = document.getElementById('kilimanjaro-booking-form');
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your Kilimanjaro and Serengeti booking request! We will contact you shortly to confirm your adventure.');
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
</script>