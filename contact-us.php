<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in Touch with us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
   <link rel="stylesheet" href="style/style.css">
   <script src="script/script.js"></script>
</head>
<body>

     <?php include 'plugins/header.php';?>

<br> <br> <br>

<section class="section contact-section">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Reach Out</span>
                <h2>Contact Deep Tanzania</h2>
                <p>We're here to answer any questions and help you plan your dream Tanzanian safari experience.</p>
            </div>

            <div class="contact-container">
                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Our Office</h4>
                            <p>Deep Tanzania Tours, 10166 Moshi Tanzania, Aga Khan Street/Road, Nssf Complex Near Moshi Municipal, Second Floor Room No13i</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Call Us</h4>
                            <p>+255 655 147 108</p>

                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email Us</h4>
                            <p> info@deeptanzaniatours.com</p>
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

                    <div class="social-contact">
                        <h4>Follow Us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="contact-form-container">
                    <h3>Send Us a Message</h3>
                    <form class="contact-form" id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject *</label>
                                <select id="subject" name="subject" required>
                                    <option value="">Select a subject</option>
                                    <option value="safari">Safari Inquiry</option>
                                    <option value="kilimanjaro">Kilimanjaro Climb</option>
                                    <option value="zanzibar">Zanzibar Beach Holiday</option>
                                    <option value="custom">Custom Tour</option>
                                    <option value="general">General Information</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label for="message">Your Message *</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq-section">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Need Help?</span>
                <h2>Frequently Asked Questions</h2>
                <p>Find quick answers to common questions about our safari packages and services.</p>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h4>How far in advance should I book my safari?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We recommend booking at least 3-6 months in advance, especially for peak season (June-October and December-February). For Kilimanjaro climbs, we suggest booking 6-12 months ahead to secure permits and the best guides.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h4>What is included in your safari packages?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our safari packages typically include accommodation, park fees, professional guide, 4x4 safari vehicle, all meals on safari, and airport transfers. Flights, visas, travel insurance, and personal expenses are not included.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h4>What is the best time to visit Tanzania?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>The best time for wildlife viewing is during the dry season from June to October. The calving season in the Southern Serengeti (January-February) offers incredible predator action. The rainy seasons (April-May and November) offer lower prices and fewer crowds.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h4>Do you offer customized safari itineraries?</h4>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we specialize in creating personalized itineraries based on your preferences, budget, and travel dates. Our experts will work with you to design the perfect Tanzanian adventure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="section-title">
                <h2>Find Our Office</h2>
                <p>Visit us in Arusha, the safari capital of Tanzania</p>
            </div>
            
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.634326025897!2d36.6828604740992!3d-3.367888296550315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371af116a3dacd%3A0xcb1f6c6b4f343f0e!2sArusha!5e0!3m2!1sen!2stz!4v1678882345678!5m2!1sen!2stz" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    
<style>
    /* Contact Section Styles */
        .contact-section {
            padding: 80px 0;
            background-color: var(--white);
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 50px;
            margin-top: 50px;
        }

        .contact-info {
            background: var(--light);
            padding: 30px;
            border-radius: 10px;
            height: fit-content;
        }

        .contact-info-item {
            display: flex;
            margin-bottom: 30px;
            align-items: flex-start;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--primary);
            color: var(--white);
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
            color: var(--dark);
        }

        .contact-details p {
            margin: 3px 0;
            color: var(--text);
        }

        .social-contact {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid rgba(0,0,0,0.1);
        }

        .social-contact h4 {
            margin-bottom: 15px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--secondary);
            color: var(--dark);
            transform: translateY(-3px);
        }

        .contact-form-container {
            background: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        }

        .contact-form-container h3 {
            margin-bottom: 25px;
            color: var(--primary);
            text-align: center;
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

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-family: var(--body);
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(117, 104, 44, 0.1);
        }

        .contact-form button {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            margin-top: 10px;
        }

        /* FAQ Section */
        .faq-section {
            background-color: var(--light);
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background: var(--white);
            border-radius: 8px;
            margin-bottom: 15px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }

        .faq-question {
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }

        .faq-question h4 {
            margin: 0;
            font-size: 18px;
            color: var(--primary);
        }

        .faq-question i {
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }

        .faq-item.active .faq-answer {
            padding: 0 20px 20px;
            max-height: 300px;
        }

        .faq-answer p {
            margin: 0;
            color: var(--text);
            line-height: 1.6;
        }

        /* Map Section */
        .map-section {
            padding: 80px 0;
            background-color: var(--white);
        }

        .map-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .contact-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .contact-info, 
            .contact-form-container {
                padding: 20px;
            }
            
            .faq-question h4 {
                font-size: 16px;
            }
        }
        </style>

         <script>
        // FAQ toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', () => {
                    item.classList.toggle('active');
                });
            });
            
            // Form submission (you would integrate with your backend)
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    // Here you would typically send the form data to your server
                    alert('Thank you for your message! We will get back to you soon.');
                    contactForm.reset();
                });
            }
        });
    </script>

     <?php include 'plugins/mobile-footer.php';?>

<!--Call to actions-->
 <?php include 'plugins/call-to-action.php';?>
 
<?php include 'plugins/pop-up-expert.php';?>
    <!--Call to actions ends-->


   <?php include 'plugins/footer.php';?>
<?php include 'plugins/booking-form.php';?>

    <!-- Additional sections would continue here for Kilimanjaro, Itineraries, About Tanzania, etc. -->

    
<?php include 'plugins/mobile-footer.php';?>

</body>
</html>