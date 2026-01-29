<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travolo - Premium Tanzanian Safaris & Kilimanjaro Climbs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/6.6.6/css/flag-icons.min.css">
    <style>
        /* Base Styles */
        :root {
            --primary: #75682C;
            --secondary: #e0b354;
            --accent: #d4a762;
            --dark: #1a1a1a;
            --light: #F6F4F2;
            --white: #F6F4F2;
            --text: #444444;
            --heading: 'Mazzard H', 'Futura', 'Trebuchet MS', Arial, sans-serif;
            --body: 'Mazzard H', 'Futura', 'Trebuchet MS', Arial, sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--body);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: var(--light);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--heading);
            color: var(--dark);
            margin-bottom: 15px;
            line-height: 1.3;
            font-weight: 600;
        }

        a {
            text-decoration: none;
            transition: all 0.3s ease;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 14px;
            text-align: center;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(42, 92, 69, 0.3);
        }

        .btn-primary:hover {
            background-color: #d4a336;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(42, 92, 69, 0.4);
        }

        .btn-secondary {
            background-color: var(--secondary);
            color: var(--dark);
            box-shadow: 0 4px 15px rgba(224, 179, 84, 0.3);
        }

        .btn-secondary:hover {
            background-color: #d4a336;
            color: var(--dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(224, 179, 84, 0.4);
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title .subtitle {
            display: block;
            color: var(--primary);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 12px;
            text-transform: lowercase;
            letter-spacing: 2px;
        }

        .section-title h2 {
            font-size: 28px;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--secondary);
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
        }

        .section-title p {
            max-width: 700px;
            margin: 0 auto;
            font-size: 16px;
            color: var(--text);
            padding: 0 15px;
        }

        /* Header Styles */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
            background-color: var(--light);
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        
        header.scrolled {
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        .header-top {
            background-color: #f3eeea; /* Updated to #f3eeea as requested */
            padding: 12px 0;
            color: var(--text);
        }
        
        .header-top-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .specialist-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .specialist-tag {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #444444;
        }
        
        .review-badges {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .review-badge {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 500;
        }
        
        .stars {
            display: flex;
            gap: 2px;
        }
        
        .stars i {
            color: #FFC107; /* Gold color for stars */
            font-size: 12px;
        }
        
        /* Language Switcher Styles */
        .language-switcher {
            position: relative;
            display: inline-block;
        }
        
        .current-language {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
            color: var(--text);
        }
        
        .current-language:hover {
            background-color: rgba(117, 104, 44, 0.1);
        }
        
        .language-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: var(--white);
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
            min-width: 150px;
            z-index: 1002;
            display: none;
            overflow: hidden;
        }
        
        .language-dropdown.active {
            display: block;
        }
        
        .language-option {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .language-option:last-child {
            border-bottom: none;
        }
        
        .language-option:hover {
            background-color: #f5f5f5;
        }
        
        .language-option.active {
            background-color: rgba(117, 104, 44, 0.1);
            font-weight: 600;
        }
        
        .flag-icon {
            width: 20px;
            height: 15px;
            border-radius: 2px;
        }
        
        .header-main {
            padding: 15px 0;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark);
            letter-spacing: 1px;
        }
        
        .logo span {
            color: var(--primary);
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 25px;
        }
        
        nav ul li a {
            color:  #1a1a1a; /* Updated to #444444 as requested */
            font-weight: 700;
            position: relative;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            padding: 8px 0;
        }
        
        nav ul li a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }
        
        nav ul li a:hover {
            color: var(--primary);
        }
        
        nav ul li a:hover:after {
            width: 100%;
        }
        
        .mobile-menu-btn {
            display: none;
            font-size: 24px;
            color: var(--dark);
            cursor: pointer;
            z-index: 1001;
            transition: all 0.3s ease;
        }

        /* Mobile Review Badges */
        .mobile-review-badges {
            display: none;
            background-color: #f3eeea; /* Updated to match header-top */
            padding: 12px 0;
            color: var(--text);
        }
        
        .mobile-review-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .mobile-review-badge {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 13px;
            font-weight: 500;
        }
        
        .mobile-stars {
            display: flex;
            gap: 1px;
        }
        
        .mobile-stars i {
            color: #FFC107; /* Gold color for stars */
            font-size: 10px;
        }
        
        .mobile-language-switcher {
            display: none;
        }

        /* Mobile Menu Styles - UPDATED */
        .mobile-menu-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 998;
        }
        
        .mobile-menu-overlay.active {
            display: block;
        }
        
        .mobile-nav {
            position: fixed;
            top: 0;
            right: -100%;
            width: 300px;
            height: 100vh;
            background: var(--light);
            flex-direction: column;
            transition: all 0.5s ease;
            z-index: 999;
            padding-top: 80px;
            box-shadow: -5px 0 15px rgba(0,0,0,0.1);
            display: flex;
        }
        
        .mobile-nav.active {
            right: 0;
        }
        
        .mobile-nav-close {
            position: absolute;
            top: 25px;
            right: 25px;
            font-size: 24px;
            color: var(--dark);
            cursor: pointer;
            z-index: 1001;
            background: none;
            border: none;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .mobile-nav-close:hover {
            color: var(--primary);
            background-color: rgba(117, 104, 44, 0.1);
        }
        
        .mobile-nav ul {
            display: flex;
            flex-direction: column;
            width: 100%;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .mobile-nav ul li {
            margin: 0;
            width: 100%;
            text-align: left;
            position: relative;
        }
        
        .mobile-nav ul li:not(:last-child):after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 20px;
            width: calc(100% - 40px);
            height: 1px;
            background: rgba(117, 104, 44, 0.2);
        }
        
        .mobile-nav ul li a {
            display: block;
            color: #1a1a1a;
            font-weight: 700;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            padding: 20px 30px;
            width: 100%;
            text-align: left;
            transition: all 0.3s ease;
        }
        
        .mobile-nav ul li a:hover {
            color: var(--primary);
            background-color: rgba(117, 104, 44, 0.05);
            padding-left: 35px;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            color: var(--white);
            text-align: center;
            position: relative;
            padding-top: 80px;
            overflow: hidden;
            margin-top: 120px;
        }

        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .hero-background img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6));
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 36px;
            color: var(--white);
            margin-bottom: 20px;
            animation: fadeInUp 1s ease;
            line-height: 1.3;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease 0.3s forwards;
            opacity: 0;
            color: rgba(255,255,255,0.9);
        }

        .hero-btns {
            display: flex;
            justify-content: center;
            gap: 15px;
            animation: fadeInUp 1s ease 0.6s forwards;
            opacity: 0;
            flex-wrap: wrap;
        }

        /* About Section */
        .about-section {
            padding: 100px 0;
            background: var(--white);
        }

        .about-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
        }

        .about-text {
            flex: 1;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .about-text h2 {
            color: var(--dark);
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
        }

        .about-text p {
            margin-bottom: 20px;
            font-size: 16px;
            line-height: 1.8;
            text-align: center;
            max-width: 800px;
        }

        .about-features {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin: 30px 0;
            justify-content: center;
        }

        .feature-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            flex: 1;
            min-width: 200px;
            max-width: 250px;
            text-align: center;
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .feature-text h4 {
            font-size: 18px;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .feature-text p {
            font-size: 14px;
            margin: 0;
            color: var(--text);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 32px;
            }
            
            .section {
                padding: 70px 0;
            }
            
            .header-top {
                display: none;
            }
            
            .mobile-review-badges {
                display: block;
            }
            
            .mobile-language-switcher {
                display: block;
            }
            
            .desktop-language-switcher {
                display: none;
            }
            
            nav ul {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .hero {
                margin-top: 140px;
            }
        }

        @media (max-width: 768px) {
            .hero {
                min-height: 500px;
                padding-top: 70px;
            }
            
            .hero h1 {
                font-size: 28px;
            }
            
            .hero p {
                font-size: 16px;
            }
            
            .hero-btns {
                flex-direction: column;
                gap: 12px;
            }
            
            .btn {
                width: 100%;
                max-width: 220px;
                margin: 0 auto;
                padding: 10px 20px;
            }
            
            .section-title h2 {
                font-size: 24px;
            }
            
            .section-title .subtitle {
                font-size: 13px;
            }
            
            .about-features {
                flex-direction: column;
                align-items: center;
            }
            
            .feature-item {
                min-width: 100%;
                max-width: 300px;
            }
            
            .mobile-review-container {
                gap: 10px;
            }
            
            .mobile-nav {
                width: 280px;
            }
        }

        @media (max-width: 576px) {
            .section {
                padding: 60px 0;
            }
            
            .section-title h2 {
                font-size: 22px;
            }
            
            .logo {
                font-size: 22px;
            }
            
            .feature-icon {
                width: 60px;
                height: 60px;
                font-size: 22px;
            }
            
            .feature-text h4 {
                font-size: 18px;
            }
            
            .btn {
                font-size: 13px;
            }
            
            .mobile-nav {
                width: 100%;
            }
            
            .mobile-review-badge {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="header-top">
            <div class="container header-top-container">
                <div class="specialist-info">
                    <div class="specialist-tag">#Dive into the heart of Tanzania </div>
                </div>
                <div class="review-badges">
                    <div class="review-badge">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span>Tripadvisor</span>
                    </div>
                    <div class="review-badge">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span>Google</span>
                    </div>
                    <div class="language-switcher desktop-language-switcher">
                        <div class="current-language" id="current-language">
                            <span class="fi fi-us"></span>
                            <span>EN</span>
                            <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                        </div>
                        <div class="language-dropdown" id="language-dropdown">
                            <div class="language-option active" data-lang="en">
                                <span class="fi fi-us"></span>
                                <span>English</span>
                            </div>
                            <div class="language-option" data-lang="fr">
                                <span class="fi fi-fr"></span>
                                <span>Français</span>
                            </div>
                            <div class="language-option" data-lang="de">
                                <span class="fi fi-de"></span>
                                <span>Deutsch</span>
                            </div>
                            <div class="language-option" data-lang="es">
                                <span class="fi fi-es"></span>
                                <span>Español</span>
                            </div>
                            <div class="language-option" data-lang="it">
                                <span class="fi fi-it"></span>
                                <span>Italiano</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mobile-review-badges">
            <div class="container mobile-review-container">
                <div class="mobile-review-badge">
                    <div class="mobile-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span>Tripadvisor</span>
                </div>
                <div class="mobile-review-badge">
                    <div class="mobile-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span>Google</span>
                </div>
                <div class="language-switcher mobile-language-switcher">
                    <div class="current-language" id="mobile-current-language">
                        <span class="fi fi-us"></span>
                        <span>EN</span>
                        <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                    </div>
                    <div class="language-dropdown" id="mobile-language-dropdown">
                        <div class="language-option active" data-lang="en">
                            <span class="fi fi-us"></span>
                            <span>English</span>
                        </div>
                        <div class="language-option" data-lang="fr">
                            <span class="fi fi-fr"></span>
                            <span>Français</span>
                        </div>
                        <div class="language-option" data-lang="de">
                            <span class="fi fi-de"></span>
                            <span>Deutsch</span>
                        </div>
                        <div class="language-option" data-lang="es">
                            <span class="fi fi-es"></span>
                            <span>Español</span>
                        </div>
                        <div class="language-option" data-lang="it">
                            <span class="fi fi-it"></span>
                            <span>Italiano</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="header-main">
            <div class="container header-container">
                <div class="logo">Travolo</div>
                
                <nav>
                    <ul id="nav-menu">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#safaris">SAFARIS</a></li>
                        <li><a href="#kilimanjaro">KILIMANJARO</a></li>
                        <li><a href="#zanzibar">ZANZIBAR</a></li>
                        <li><a href="#daytrips">DAYTRIPS</a></li>
                        <li><a href="#about">ABOUT US</a></li>
                        <li><a href="#contact">CONTACT US</a></li>
                    </ul>
                    
                    <div class="mobile-menu-btn" id="mobile-menu-toggle">
                        <i class="fas fa-bars"></i>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay"></div>

    <!-- Mobile Navigation -->
    <div class="mobile-nav" id="mobile-nav">
        <button class="mobile-nav-close" id="mobile-nav-close">
            <i class="fas fa-times"></i>
        </button>
        <ul>
            <li><a href="#home">HOME</a></li>
            <li><a href="#safaris">SAFARIS</a></li>
            <li><a href="#kilimanjaro">KILIMANJARO</a></li>
            <li><a href="#zanzibar">ZANZIBAR</a></li>
            <li><a href="#daytrips">DAYTRIPS</a></li>
            <li><a href="#about">ABOUT US</a></li>
            <li><a href="#contact">CONTACT US</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-background">
            <img src="https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2068&q=80" alt="Tanzanian Landscape">
            <div class="hero-overlay"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <h1>Experience the Wonders of Tanzania</h1>
                <p>Discover the breathtaking wildlife of the Serengeti, conquer Mount Kilimanjaro, and relax on the pristine beaches of Zanzibar with our expert-guided tours.</p>
                <div class="hero-btns">
                    <a href="#safaris" class="btn btn-primary">Explore Safaris</a>
                    <a href="#contact" class="btn btn-secondary">Plan Your Trip</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="section-title">
                <span class="subtitle">Discover Our Story</span>
                <h2>About Travolo</h2>
            </div>
            
            <div class="about-text">
                <h2>Your Authentic Tanzanian Adventure</h2>
                <p>Welcome to Travolo, a locally-owned tour company based in Tanzania, specializing in creating unforgettable safari experiences and Mount Kilimanjaro treks. We offer personalized adventures that showcase Tanzania's spectacular natural beauty and rich cultural heritage.</p>
                
                <p>Our experienced team is dedicated to providing authentic, eco-friendly journeys whether you're seeking wildlife encounters on safari, the challenge of conquering Africa's highest peak, or meaningful connections with local communities. At Travolo, we take pride in crafting tailored tours that reflect our deep commitment to responsible travel and our passion for Tanzania's wonders.</p>
                
                <div class="about-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Kilimanjaro Treks</h4>
                            <p>Expert guided climbs</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-binoculars"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Safari Adventures</h4>
                            <p>Wildlife experiences</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Eco-Friendly</h4>
                            <p>Sustainable tourism</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Local Experts</h4>
                            <p>Tanzanian owned</p>
                        </div>
                    </div>
                </div>
                
                <a href="#" class="btn btn-primary">Learn More About Us</a>
            </div>
        </div>
    </section>

    <script>
        // Mobile Menu Functionality
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileNav = document.getElementById('mobile-nav');
        const mobileNavClose = document.getElementById('mobile-nav-close');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        
        // Open mobile menu
        mobileMenuToggle.addEventListener('click', function() {
            mobileNav.classList.add('active');
            mobileMenuOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        
        // Close mobile menu
        function closeMobileMenu() {
            mobileNav.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }
        
        mobileNavClose.addEventListener('click', closeMobileMenu);
        mobileMenuOverlay.addEventListener('click', closeMobileMenu);
        
        // Close menu when clicking on links
        const mobileNavLinks = document.querySelectorAll('.mobile-nav a');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });

        // Language Switcher Functionality
        const currentLanguage = document.getElementById('current-language');
        const languageDropdown = document.getElementById('language-dropdown');
        const mobileCurrentLanguage = document.getElementById('mobile-current-language');
        const mobileLanguageDropdown = document.getElementById('mobile-language-dropdown');
        const languageOptions = document.querySelectorAll('.language-option');
        
        // Toggle desktop language dropdown
        currentLanguage.addEventListener('click', function(e) {
            e.stopPropagation();
            languageDropdown.classList.toggle('active');
        });
        
        // Toggle mobile language dropdown
        mobileCurrentLanguage.addEventListener('click', function(e) {
            e.stopPropagation();
            mobileLanguageDropdown.classList.toggle('active');
        });
        
        // Handle language selection
        languageOptions.forEach(option => {
            option.addEventListener('click', function() {
                const lang = this.getAttribute('data-lang');
                
                // Update active state
                languageOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
                
                // Update current language display
                const flagClass = this.querySelector('.fi').className;
                const languageName = this.querySelector('span:last-child').textContent;
                const languageCode = languageName.substring(0, 2).toUpperCase();
                
                // Update desktop switcher
                currentLanguage.innerHTML = `
                    <span class="${flagClass}"></span>
                    <span>${languageCode}</span>
                    <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                `;
                
                // Update mobile switcher
                mobileCurrentLanguage.innerHTML = `
                    <span class="${flagClass}"></span>
                    <span>${languageCode}</span>
                    <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                `;
                
                // Close dropdowns
                languageDropdown.classList.remove('active');
                mobileLanguageDropdown.classList.remove('active');
                
                // In a real implementation, you would:
                // 1. Save the language preference to localStorage
                localStorage.setItem('preferred-language', lang);
                
                // 2. Redirect to the language-specific page or reload content
                // window.location.href = `?lang=${lang}`;
                
                // 3. Or use a translation API to update content dynamically
                console.log(`Language changed to: ${lang}`);
                
                // Show confirmation (optional)
                showLanguageChangeToast(languageName);
            });
        });
        
        // Close dropdowns when clicking outside
        document.addEventListener('click', function() {
            languageDropdown.classList.remove('active');
            mobileLanguageDropdown.classList.remove('active');
        });
        
        // Prevent dropdown close when clicking inside
        languageDropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
        
        mobileLanguageDropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
        
        // Load saved language preference
        function loadLanguagePreference() {
            const savedLang = localStorage.getItem('preferred-language');
            if (savedLang) {
                const optionToSelect = document.querySelector(`.language-option[data-lang="${savedLang}"]`);
                if (optionToSelect) {
                    optionToSelect.click();
                }
            }
        }
        
        // Show toast notification for language change
        function showLanguageChangeToast(languageName) {
            // Create toast element
            const toast = document.createElement('div');
            toast.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: var(--primary);
                color: white;
                padding: 12px 20px;
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                z-index: 10000;
                font-weight: 600;
                transform: translateX(150%);
                transition: transform 0.3s ease;
            `;
            toast.textContent = `Language changed to ${languageName}`;
            
            document.body.appendChild(toast);
            
            // Animate in
            setTimeout(() => {
                toast.style.transform = 'translateX(0)';
            }, 100);
            
            // Animate out and remove
            setTimeout(() => {
                toast.style.transform = 'translateX(150%)';
                setTimeout(() => {
                    document.body.removeChild(toast);
                }, 300);
            }, 3000);
        }
        
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Load language preference on page load
        window.addEventListener('DOMContentLoaded', loadLanguagePreference);
    </script>
</body>
</html>