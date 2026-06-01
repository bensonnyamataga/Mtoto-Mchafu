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
    $website         = trim($_POST['website'] ?? ''); // Honeypot field for spam protection

    if ($website !== '') {
        $statusMessage = 'Invalid form submission detected.';
        $statusType = 'error';
    } elseif ($fullName === '' || $email === '' || $phone === '' || $startDate === '' || $packageType === '') {
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
            $to = "info@deeptanzaniatours.com, deeptanzania@gmail.com, bensonnyamataga@gmail.com";
            $subject = "New Booking Inquiry - Deep Tanzania Tours";

            $fullNameSafe        = htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8');
            $emailSafe           = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
            $phoneSafe           = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
            $startDateSafe       = htmlspecialchars($startDate, ENT_QUOTES, 'UTF-8');
            $adultsSafe          = htmlspecialchars($adults, ENT_QUOTES, 'UTF-8');
            $childrenSafe        = htmlspecialchars($children, ENT_QUOTES, 'UTF-8');
            $packageTypeSafe     = htmlspecialchars($packageType, ENT_QUOTES, 'UTF-8');
            $specialRequestsSafe = nl2br(htmlspecialchars($specialRequests, ENT_QUOTES, 'UTF-8'));
            $replyEmail          = filter_var($email, FILTER_SANITIZE_EMAIL);

            $message = "
            <html>
            <head>
                <meta charset='UTF-8'>
                <title>New Booking Inquiry</title>
            </head>
            <body style='font-family: Arial, sans-serif; color: #333; line-height: 1.6;'>
                <h2 style='color: #75682c;'>New Booking Inquiry Received</h2>
                <p>A new traveller has submitted a booking request through the contact page.</p>
                <table cellpadding='10' cellspacing='0' border='1' style='border-collapse: collapse; width: 100%; max-width: 700px;'>
                    <tr><td><strong>Full Name</strong></td><td>{$fullNameSafe}</td></tr>
                    <tr><td><strong>Email Address</strong></td><td>{$emailSafe}</td></tr>
                    <tr><td><strong>Mobile / WhatsApp Number</strong></td><td>{$phoneSafe}</td></tr>
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
            $headers .= "Reply-To: {$replyEmail}\r\n";

            if (mail($to, $subject, $message, $headers)) {
                $statusMessage = 'Thank you! Your booking inquiry has been sent successfully. Our team will respond within 24 hours.';
                $statusType = 'success';
                $_POST = [];
            } else {
                $statusMessage = 'Failed to send your inquiry. Please try again later or contact us directly by phone or email.';
                $statusType = 'error';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Deep Tanzania Tours | Book Your Tanzania Safari, Kilimanjaro or Zanzibar Trip</title>
    <meta name="description" content="Contact Deep Tanzania Tours and send your booking request for Tanzania safaris, Kilimanjaro trekking, Zanzibar beach holidays, and tailor-made Tanzania travel packages.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="script/script.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FP1EW3J4H7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-FP1EW3J4H7');
    </script>
</head>
<body>

<?php include 'plugins/header.php'; ?>

<br><br><br>

<section class="section contact-section">
    <div class="container">
        <div class="section-title">
            <span class="subtitle">Reach Out</span>
            <h1>Contact Deep Tanzania Tours</h1>
            <p>Tell us about your travel plans and our team will help you arrange a safari, Kilimanjaro climb, Zanzibar beach holiday, or a complete tailor-made Tanzania experience.</p>
        </div>

        <div class="contact-container">
            <div class="contact-info">
                <div class="contact-info-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Our Office</h4>
                        <p>Deep Tanzania Tours, 10166 Moshi Tanzania, Aga Khan Street/Road, NSSF Complex Near Moshi Municipal, Second Floor Room No13i</p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Call / WhatsApp Us</h4>
                        <p><a href="tel:+255655147108">+255 655 147 108</a></p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Email Us</h4>
                        <p><a href="mailto:info@deeptanzaniatours.com">info@deeptanzaniatours.com</a></p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Office Hours</h4>
                        <p>Mon - Fri: 8:00 AM - 6:00 PM</p>
                        <p>Sat: 9:00 AM - 4:00 PM</p>
                        <p>Sun: Closed</p>
                    </div>
                </div>

                <div class="contact-help-card">
                    <h4>What happens after you submit?</h4>
                    <p>We review your dates, group size, travel style, and preferred package, then send you a clear reply with availability, suggestions, and the best possible itinerary options.</p>
                </div>

                <div class="social-contact">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="contact-form-container booking-form-container" id="booking-form">
                <span class="booking-small-title">Booking Request Form</span>
                <h2>Plan Your Tanzania Adventure</h2>
                <p class="booking-intro">Complete the form below and our reservations team will help you prepare the right safari, Kilimanjaro, Zanzibar, or custom Tanzania travel program.</p>

                <?php if ($statusMessage !== ''): ?>
                    <div class="booking-status-message <?php echo $statusType === 'success' ? 'booking-status-success' : 'booking-status-error'; ?>">
                        <?php echo htmlspecialchars($statusMessage, ENT_QUOTES, 'UTF-8'); ?>
                    </div>
                <?php endif; ?>

                <form class="contact-form booking-direct-form" id="direct-booking-form" method="POST" action="#booking-form">
                    <input type="hidden" name="booking_form_submit" value="1">
                    <input type="text" name="website" class="booking-honeypot" tabindex="-1" autocomplete="off" aria-hidden="true">

                    <div class="form-row">
                        <div class="form-group">
                            <label for="full-name">Full Name *</label>
                            <input type="text" id="full-name" name="full-name" required value="<?php echo htmlspecialchars($_POST['full-name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Mobile / WhatsApp Number *</label>
                            <input type="tel" id="phone" name="phone" required value="<?php echo htmlspecialchars($_POST['phone'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="start-date">Planned Start Date *</label>
                            <input type="date" id="start-date" name="start-date" required value="<?php echo htmlspecialchars($_POST['start-date'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="adults">Number of Adults</label>
                            <input type="text" id="adults" name="adults" placeholder="e.g. 2" value="<?php echo htmlspecialchars($_POST['adults'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="children">Number of Children</label>
                            <input type="text" id="children" name="children" placeholder="e.g. 1" value="<?php echo htmlspecialchars($_POST['children'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="package-type">Which package are you interested in? *</label>
                        <select id="package-type" name="package-type" required>
                            <option value="">Select package</option>
                            <option value="Kilimanjaro Trekking" <?php echo (($_POST['package-type'] ?? '') === 'Kilimanjaro Trekking') ? 'selected' : ''; ?>>Kilimanjaro Trekking</option>
                            <option value="Safari Adventure" <?php echo (($_POST['package-type'] ?? '') === 'Safari Adventure') ? 'selected' : ''; ?>>Safari Adventure</option>
                            <option value="Zanzibar Beach" <?php echo (($_POST['package-type'] ?? '') === 'Zanzibar Beach') ? 'selected' : ''; ?>>Zanzibar Beach Holiday</option>
                            <option value="Kilimanjaro + Safari" <?php echo (($_POST['package-type'] ?? '') === 'Kilimanjaro + Safari') ? 'selected' : ''; ?>>Kilimanjaro & Safari Combo</option>
                            <option value="Safari + Zanzibar" <?php echo (($_POST['package-type'] ?? '') === 'Safari + Zanzibar') ? 'selected' : ''; ?>>Safari & Zanzibar Combo</option>
                            <option value="Complete Experience" <?php echo (($_POST['package-type'] ?? '') === 'Complete Experience') ? 'selected' : ''; ?>>Complete Tanzania Experience</option>
                            <option value="Custom Tanzania Tour" <?php echo (($_POST['package-type'] ?? '') === 'Custom Tanzania Tour') ? 'selected' : ''; ?>>Custom Tanzania Tour</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label for="special-requests">Message / Special Requests</label>
                        <textarea id="special-requests" name="special-requests" rows="5" placeholder="Tell us your preferred parks, travel dates, accommodation style, budget level, or any special occasion."><?php echo htmlspecialchars($_POST['special-requests'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary booking-submit-btn" id="booking-submit-btn">
                        <i class="fas fa-paper-plane"></i> Submit Booking Inquiry
                    </button>

                    <p class="booking-terms">
                        By submitting this form, you agree to be contacted by Deep Tanzania Tours regarding your travel request. We normally respond within 24 hours.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
    .contact-section {
        padding: 80px 0;
        background-color: var(--white, #ffffff);
    }

    .contact-container {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 50px;
        margin-top: 50px;
        align-items: start;
    }

    .contact-info {
        background: var(--light, #f8f5ed);
        padding: 30px;
        border-radius: 14px;
        height: fit-content;
        border: 1px solid rgba(117, 104, 44, 0.12);
    }

    .contact-info-item {
        display: flex;
        margin-bottom: 28px;
        align-items: flex-start;
    }

    .contact-icon {
        width: 50px;
        height: 50px;
        background: var(--primary, #75682c);
        color: var(--white, #ffffff);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        margin-right: 15px;
        flex-shrink: 0;
    }

    .contact-details h4 {
        margin-bottom: 5px;
        color: var(--dark, #1f1f1f);
    }

    .contact-details p,
    .contact-details a {
        margin: 3px 0;
        color: var(--text, #555555);
        text-decoration: none;
        line-height: 1.6;
    }

    .contact-details a:hover {
        color: var(--primary, #75682c);
    }

    .contact-help-card {
        background: #ffffff;
        padding: 18px;
        border-radius: 10px;
        margin-top: 10px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.04);
    }

    .contact-help-card h4 {
        color: var(--primary, #75682c);
        margin-bottom: 8px;
    }

    .contact-help-card p {
        margin: 0;
        color: var(--text, #555555);
        line-height: 1.7;
    }

    .social-contact {
        margin-top: 35px;
        padding-top: 20px;
        border-top: 1px solid rgba(0,0,0,0.1);
    }

    .social-contact h4 {
        margin-bottom: 15px;
    }

    .social-links {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .social-links a {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--primary, #75682c);
        color: var(--white, #ffffff);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .social-links a:hover {
        background: var(--secondary, #d4a336);
        color: var(--dark, #1f1f1f);
        transform: translateY(-3px);
    }

    .contact-form-container {
        background: var(--white, #ffffff);
        padding: 34px;
        border-radius: 16px;
        box-shadow: 0 12px 40px rgba(0,0,0,0.09);
        border: 1px solid rgba(117, 104, 44, 0.12);
    }

    .booking-form-container {
        position: relative;
        overflow: hidden;
    }

    .booking-form-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
    }

    .booking-small-title {
        display: inline-block;
        color: var(--primary, #75682c);
        font-weight: 700;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }

    .contact-form-container h2 {
        margin-bottom: 10px;
        color: var(--dark, #1f1f1f);
        font-size: 30px;
        line-height: 1.25;
    }

    .booking-intro {
        color: var(--text, #555555);
        line-height: 1.7;
        margin-bottom: 25px;
    }

    .booking-status-message {
        margin-bottom: 22px;
        padding: 14px 16px;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.5;
    }

    .booking-status-success {
        background: #e8f7ed;
        color: #1f6b37;
        border: 1px solid rgba(31, 107, 55, 0.18);
    }

    .booking-status-error {
        background: #fdecec;
        color: #a12626;
        border: 1px solid rgba(161, 38, 38, 0.18);
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-row .form-group {
        margin-bottom: 0;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: var(--dark, #1f1f1f);
        font-size: 14px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 13px 15px;
        border: 1px solid #dddddd;
        border-radius: 9px;
        font-family: var(--body, Arial, sans-serif);
        font-size: 15px;
        transition: all 0.3s ease;
        background: #ffffff;
        color: var(--dark, #1f1f1f);
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: var(--primary, #75682c);
        outline: none;
        box-shadow: 0 0 0 3px rgba(117, 104, 44, 0.1);
    }

    .booking-direct-form textarea {
        resize: vertical;
        min-height: 130px;
    }

    .booking-submit-btn {
        width: 100%;
        padding: 15px 22px;
        font-size: 16px;
        margin-top: 5px;
        border: none;
        border-radius: 50px;
        background: linear-gradient(135deg, var(--primary, #75682c), #d4a336);
        color: #ffffff;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 6px 18px rgba(117, 104, 44, 0.28);
    }

    .booking-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 26px rgba(117, 104, 44, 0.38);
    }

    .booking-submit-btn:disabled {
        opacity: 0.75;
        cursor: not-allowed;
        transform: none;
    }

    .booking-terms {
        font-size: 12px;
        color: var(--text, #555555);
        text-align: center;
        margin-top: 15px;
        line-height: 1.6;
    }

    .booking-honeypot {
        position: absolute !important;
        left: -9999px !important;
        opacity: 0 !important;
        height: 0 !important;
        width: 0 !important;
        pointer-events: none !important;
    }

    @media (max-width: 992px) {
        .contact-container {
            grid-template-columns: 1fr;
            gap: 30px;
        }
    }

    @media (max-width: 768px) {
        .contact-section {
            padding: 55px 0;
        }

        .form-row {
            grid-template-columns: 1fr;
            gap: 18px;
        }

        .contact-info,
        .contact-form-container {
            padding: 22px;
        }

        .contact-form-container h2 {
            font-size: 25px;
        }
    }

    @media (max-width: 480px) {
        .contact-info-item {
            flex-direction: column;
            gap: 12px;
        }

        .contact-icon {
            margin-right: 0;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const bookingForm = document.getElementById('direct-booking-form');
        const submitBtn = document.getElementById('booking-submit-btn');
        const startDateInput = document.getElementById('start-date');

        if (startDateInput) {
            const today = new Date().toISOString().split('T')[0];
            startDateInput.min = today;
        }

        if (bookingForm && submitBtn) {
            bookingForm.addEventListener('submit', function() {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            });
        }
    });
</script>

<?php include 'plugins/footer.php'; ?>
<?php include 'plugins/mobile-footer.php'; ?>

</body>
</html>
