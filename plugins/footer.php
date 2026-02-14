 
<?php include 'plugins/mobile-footer.php';?>
 
 
 <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>About Travolo</h3>
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
                    <p><i class="fas fa-map-marker-alt"></i>Deep Tanzania Tours, 10166 Moshi Tanzania, Aga Khan Street/Road, Nssf Complex Near Moshi Municipal, Second Floor Room No13i</p>
                    <p><i class="fas fa-phone"></i> +255 655 147 108</p>
                    <p><i class="fas fa-envelope"></i> info@deeptanzaniatours.com</p>
                    <p><i class="fas fa-clock"></i> Mon-Fri: 8AM - 5PM</p>
                </div>
            </div>

            
            
            <div class="footer-bottom">
                <p>&copy; 2026 Deep Tanzania Tours. All Rights Reserved. | <a href="#">Privacy Policy</a> | <a href="terms-and-condition.php">Terms of Service</a></p>
            </div>
        </div>
    </footer>



    <style>
       
 /*New footer contents*/
         /*New footer contents*/

 #contact {
            background: 
                linear-gradient(rgba(246, 244, 242, 0.85), rgba(246, 244, 242, 0.9)),
                url('img/savana.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--text);
            padding: 60px 0 20px;
            margin-top: 60px;
            position: relative;
        }

        #contact::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(117, 104, 44, 0.1), rgba(246, 244, 242, 0.9));
            z-index: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-col {
            padding: 25px 0;
        }

        .footer-col h3 {
            color: #000000;
            font-size: 20px;
            margin-bottom: 20px;
            font-family: var(--heading);
            font-weight: 600;
        }

        .footer-col p {
            margin-bottom: 15px;
            line-height: 1.6;
            font-size: 16px;
            color: #333;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: var(--primary);
            color: var(--light);
            border-radius: 50%;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 16px;
        }

        .social-links a:hover {
            background-color: var(--secondary);
            transform: translateY(-3px);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            font-size: 16px;
            font-weight: 500;
        }

        .footer-links a:hover {
            color: var(--primary);
            transform: translateX(5px);
        }

        .footer-col p i {
            color: var(--primary);
            margin-right: 10px;
            width: 20px;
            font-size: 16px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(117, 104, 44, 0.3);
            padding-top: 20px;
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

        /* Improved Mobile Styles with Larger Fonts */
        @media (max-width: 768px) {
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 25px; /* Slightly increased gap for better readability */
                margin-bottom: 30px;
            }
            
            .footer-col {
                text-align: left;
                padding: 20px 0; /* Increased padding for better spacing */
            }
            
            .footer-col h3 {
                font-size: 22px; /* Increased from 18px to 22px */
                margin-bottom: 18px; /* Slightly increased margin */
            }
            
            .footer-col p {
                font-size: 17px; /* Increased from 15px to 17px */
                margin-bottom: 14px; /* Slightly increased margin */
            }
            
            .footer-links li {
                margin-bottom: 12px; /* Increased from 10px to 12px */
            }
            
            .footer-links a {
                font-size: 17px; /* Increased from 15px to 17px */
            }
            
            .social-links {
                margin-top: 18px; /* Slightly increased margin */
            }
            
            .social-links a {
                width: 40px; /* Increased icon size */
                height: 40px; /* Increased icon size */
                font-size: 18px; /* Increased icon font size */
            }
            
            .footer-col p i {
                font-size: 17px; /* Increased contact icon size */
            }
            
            .footer-bottom {
                font-size: 16px; /* Increased from 14px to 16px */
                padding-top: 18px; /* Slightly increased padding */
            }
            
            .footer-bottom a {
                font-size: 16px; /* Increased footer link size */
            }
            
            #contact {
                background-attachment: scroll;
                padding: 45px 0 20px; /* Adjusted padding */
            }
            
            .container {
                padding: 0 18px; /* Slightly increased padding */
            }
        }

        @media (max-width: 480px) {
            .footer-grid {
                gap: 22px; /* Slightly increased gap */
            }
            
            .footer-col h3 {
                font-size: 20px; /* Larger than before on small screens */
                margin-bottom: 16px;
            }
            
            .footer-col p,
            .footer-links a {
                font-size: 16px; /* Larger than before on small screens */
            }
            
            .footer-links li {
                margin-bottom: 10px;
            }
            
            .footer-bottom {
                font-size: 15px; /* Larger than before on small screens */
            }
            
            .social-links a {
                width: 38px;
                height: 38px;
                font-size: 17px;
            }
            
            #contact {
                padding: 40px 0 15px;
            }
        }


    </style>