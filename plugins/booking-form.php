<?php
$statusMessage = '';
$statusType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['booking_form_submit'])) {
    $fullName        = trim($_POST['full-name'] ?? '');
    $email           = trim($_POST['email'] ?? '');
    $phone           = trim($_POST['phone'] ?? '');
    $startDate       = trim($_POST['start-date'] ?? '');
    $adults          = trim($_POST['adults'] ?? '');
    $children        = trim($_POST['children'] ?? '');
    $packageType     = trim($_POST['package-type'] ?? '');
    $specialRequests = trim($_POST['special-requests'] ?? '');

    if ($fullName === '' || $email === '' || $phone === '' || $startDate === '' || $packageType === '') {
        $statusMessage = 'Please fill in all required fields.';
        $statusType = 'error';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $statusMessage = 'Please enter a valid email address.';
        $statusType = 'error';
    } else {
        $blocked = ["\r", "\n", "%0a", "%0d", "content-type:", "bcc:", "cc:", "to:"];
        $hasBadInput = false;

        foreach ($blocked as $bad) {
            if (
                stripos($fullName, $bad) !== false ||
                stripos($email, $bad) !== false ||
                stripos($phone, $bad) !== false
            ) {
                $hasBadInput = true;
                break;
            }
        }

        if ($hasBadInput) {
            $statusMessage = 'Invalid form input detected.';
            $statusType = 'error';
        } else {
            $to = "info@deeptanzaniatours.com, deeptanzania@gmail.com,bensonnyamataga@gmail.com";
            $subject = "New Booking Inquiry - Deep Tanzania Tours";

            $fullNameSafe        = htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8');
            $emailSafe           = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
            $phoneSafe           = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
            $startDateSafe       = htmlspecialchars($startDate, ENT_QUOTES, 'UTF-8');
            $adultsSafe          = htmlspecialchars($adults, ENT_QUOTES, 'UTF-8');
            $childrenSafe        = htmlspecialchars($children, ENT_QUOTES, 'UTF-8');
            $packageTypeSafe     = htmlspecialchars($packageType, ENT_QUOTES, 'UTF-8');
            $specialRequestsSafe = nl2br(htmlspecialchars($specialRequests, ENT_QUOTES, 'UTF-8'));

            $message = "
            <html>
            <head>
                <meta charset='UTF-8'>
                <title>New Booking Inquiry</title>
            </head>
            <body style='font-family: Arial, sans-serif; color: #333; line-height: 1.6;'>
                <h2 style='color: #75682c;'>New Booking Inquiry Received</h2>
                <table cellpadding='10' cellspacing='0' border='1' style='border-collapse: collapse; width: 100%; max-width: 700px;'>
                    <tr><td><strong>Full Name</strong></td><td>{$fullNameSafe}</td></tr>
                    <tr><td><strong>Email Address</strong></td><td>{$emailSafe}</td></tr>
                    <tr><td><strong>Mobile Number</strong></td><td>{$phoneSafe}</td></tr>
                    <tr><td><strong>Planned Start Date</strong></td><td>{$startDateSafe}</td></tr>
                    <tr><td><strong>Adults</strong></td><td>{$adultsSafe}</td></tr>
                    <tr><td><strong>Children</strong></td><td>{$childrenSafe}</td></tr>
                    <tr><td><strong>Package Type</strong></td><td>{$packageTypeSafe}</td></tr>
                    <tr><td><strong>Message / Special Requests</strong></td><td>{$specialRequestsSafe}</td></tr>
                </table>
            </body>
            </html>
            ";

            $headers  = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: Deep Tanzania Tours <info@deeptanzaniatours.com>\r\n";
            $headers .= "Reply-To: {$fullName} <{$email}>\r\n";

            if (mail($to, $subject, $message, $headers)) {
                $statusMessage = 'Thank you! Your booking inquiry has been sent successfully.';
                $statusType = 'success';
                $_POST = [];
            } else {
                $statusMessage = 'Failed to send your inquiry. Please try again later.';
                $statusType = 'error';
            }
        }
    }
}
?>

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
            <h3>Book Your African Adventure</h3>
            <p>Reserve your spot for this unforgettable Kilimanjaro, Safari, or Zanzibar experience</p>

            <?php if ($statusMessage !== ''): ?>
                <div style="margin-top:15px; padding:12px 14px; border-radius:8px; font-size:14px; font-weight:600; background: <?php echo $statusType === 'success' ? '#e8f7ed' : '#fdecec'; ?>; color: <?php echo $statusType === 'success' ? '#1f6b37' : '#a12626'; ?>;">
                    <?php echo htmlspecialchars($statusMessage, ENT_QUOTES, 'UTF-8'); ?>
                </div>
            <?php endif; ?>
        </div>
        
        <form class="booking-popup-form" id="universal-booking-form" method="POST" action="">
            <input type="hidden" name="booking_form_submit" value="1">

            <div class="popup-form-group">
                <label for="popup-full-name">Your Full Name</label>
                <input type="text" id="popup-full-name" name="full-name" required value="<?php echo htmlspecialchars($_POST['full-name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            
            <div class="popup-form-group">
                <label for="popup-email">Your Email Address</label>
                <input type="email" id="popup-email" name="email" required value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            
            <div class="popup-form-group">
                <label for="popup-phone">Mobile Number</label>
                <input type="tel" id="popup-phone" name="phone" required value="<?php echo htmlspecialchars($_POST['phone'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            
            <div class="popup-form-group">
                <label for="popup-start-date">When are you planning to come?*</label>
                <input type="date" id="popup-start-date" name="start-date" required value="<?php echo htmlspecialchars($_POST['start-date'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            
            <div class="popup-form-row">
                <div class="popup-form-group">
                    <label for="popup-adults">Number of Adults</label>
                    <input type="text" id="popup-adults" name="adults" placeholder="e.g. 2" value="<?php echo htmlspecialchars($_POST['adults'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                </div>
                
                <div class="popup-form-group">
                    <label for="popup-children">Number of Children</label>
                    <input type="text" id="popup-children" name="children" placeholder="e.g. 1" value="<?php echo htmlspecialchars($_POST['children'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                </div>
            </div>
            
            <div class="popup-form-group">
                <label for="popup-package-type">Which package are you interested in?</label>
                <select id="popup-package-type" name="package-type" required>
                    <option value="">Select package</option>
                    <option value="Kilimanjaro Trekking" <?php echo (($_POST['package-type'] ?? '') === 'Kilimanjaro Trekking') ? 'selected' : ''; ?>>Kilimanjaro Trekking</option>
                    <option value="Safari Adventure" <?php echo (($_POST['package-type'] ?? '') === 'Safari Adventure') ? 'selected' : ''; ?>>Safari Adventure</option>
                    <option value="Zanzibar Beach" <?php echo (($_POST['package-type'] ?? '') === 'Zanzibar Beach') ? 'selected' : ''; ?>>Zanzibar Beach Holiday</option>
                    <option value="Kilimanjaro + Safari" <?php echo (($_POST['package-type'] ?? '') === 'Kilimanjaro + Safari') ? 'selected' : ''; ?>>Kilimanjaro & Safari Combo</option>
                    <option value="Safari + Zanzibar" <?php echo (($_POST['package-type'] ?? '') === 'Safari + Zanzibar') ? 'selected' : ''; ?>>Safari & Zanzibar Combo</option>
                    <option value="Complete Experience" <?php echo (($_POST['package-type'] ?? '') === 'Complete Experience') ? 'selected' : ''; ?>>Complete Tanzania Experience</option>
                </select>
            </div>
            
            <div class="popup-form-group">
                <label for="popup-special-requests">Message / Special Requests</label>
                <textarea id="popup-special-requests" name="special-requests" rows="4"><?php echo htmlspecialchars($_POST['special-requests'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>
            
            <button type="submit" class="popup-btn-primary" id="booking-submit-btn">
                <i class="fas fa-paper-plane"></i> Submit Inquiry
            </button>
            
            <p class="popup-booking-terms">
                By submitting this form, you agree to our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>. We'll respond within 24 hours.
            </p>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const bookingForm = document.getElementById('universal-booking-form');
        const submitBtn = document.getElementById('booking-submit-btn');

        if (bookingForm && submitBtn) {
            bookingForm.addEventListener('submit', function() {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            });
        }
        
        // Set minimum date to today for date inputs
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('popup-start-date').min = today;

        <?php if ($statusMessage !== ''): ?>
            openBookingPopup();
        <?php endif; ?>
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