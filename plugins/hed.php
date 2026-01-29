<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deep Tanzania - Premium Tanzanian Safaris & Kilimanjaro Climbs</title>
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

        .Deep Tanzania-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .Deep Tanzania-btn {
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

        .Deep Tanzania-btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(42, 92, 69, 0.3);
        }

        .Deep Tanzania-btn-primary:hover {
            background-color: #d4a336;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(42, 92, 69, 0.4);
        }

        .Deep Tanzania-btn-secondary {
            background-color: var(--secondary);
            color: var(--dark);
            box-shadow: 0 4px 15px rgba(224, 179, 84, 0.3);
        }

        .Deep Tanzania-btn-secondary:hover {
            background-color: #d4a336;
            color: var(--dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(224, 179, 84, 0.4);
        }

        .Deep Tanzania-section {
            padding: 80px 0;
        }

        .Deep Tanzania-section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .Deep Tanzania-section-title .Deep Tanzania-subtitle {
            display: block;
            color: var(--primary);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 12px;
            text-transform: lowercase;
            letter-spacing: 2px;
        }

        .Deep Tanzania-section-title h2 {
            font-size: 28px;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .Deep Tanzania-section-title h2:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--secondary);
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
        }

        .Deep Tanzania-section-title p {
            max-width: 700px;
            margin: 0 auto;
            font-size: 16px;
            color: var(--text);
            padding: 0 15px;
        }

        /* Header Styles - UNIQUE CLASSES */
        .Deep Tanzania-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
            background-color: var(--light);
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        
        .Deep Tanzania-header.scrolled {
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        .Deep Tanzania-header-top {
            background-color: #f3eeea;
            padding: 0px 0;
            color: var(--text);
        }
        
        .Deep Tanzania-header-top-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .Deep Tanzania-specialist-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .Deep Tanzania-specialist-tag {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #444444;
        }
        
        .Deep Tanzania-review-badges {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .Deep Tanzania-review-badge {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 500;
        }
        
        .Deep Tanzania-stars {
            display: flex;
            gap: 2px;
        }
        
        .Deep Tanzania-stars i {
            color: #FFC107;
            font-size: 12px;
        }
        
        /* Language Switcher Styles - UNIQUE CLASSES */
        .Deep Tanzania-language-switcher {
            position: relative;
            display: inline-block;
        }
        
        .Deep Tanzania-current-language {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
            color: var(--text);
        }
        
        .Deep Tanzania-current-language:hover {
            background-color: rgba(117, 104, 44, 0.1);
        }
        
        .Deep Tanzania-language-dropdown {
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
        
        .Deep Tanzania-language-dropdown.active {
            display: block;
        }
        
        .Deep Tanzania-language-option {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .Deep Tanzania-language-option:last-child {
            border-bottom: none;
        }
        
        .Deep Tanzania-language-option:hover {
            background-color: #f5f5f5;
        }
        
        .Deep Tanzania-language-option.active {
            background-color: rgba(117, 104, 44, 0.1);
            font-weight: 600;
        }
        
        .Deep Tanzania-flag-icon {
            width: 20px;
            height: 15px;
            border-radius: 2px;
        }
        
        .Deep Tanzania-header-main {
            padding: 15px 0;
        }
        
        .Deep Tanzania-header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .Deep Tanzania-logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark);
            letter-spacing: 1px;
        }
        
        .Deep Tanzania-logo span {
            color: var(--primary);
        }
        
        .Deep Tanzania-nav ul {
            display: flex;
            list-style: none;
        }
        
        .Deep Tanzania-nav ul li {
            margin-left: 25px;
        }
        
        .Deep Tanzania-nav ul li a {
            color:  #1a1a1a;
            font-weight: 700;
            position: relative;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            padding: 8px 0;
        }
        
        .Deep Tanzania-nav ul li a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }
        
        .Deep Tanzania-nav ul li a:hover {
            color: var(--primary);
        }
        
        .Deep Tanzania-nav ul li a:hover:after {
            width: 100%;
        }
        
        /* Mobile Menu Button - UNIQUE CLASSES */
        .Deep Tanzania-mobile-menu-btn {
            display: none;
            font-size: 24px;
            color: var(--dark);
            cursor: pointer;
            z-index: 1001;
            transition: all 0.3s ease;
            width: 30px;
            height: 30px;
            position: relative;
        }
        
        .Deep Tanzania-hamburger-icon, .Deep Tanzania-close-icon {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .Deep Tanzania-hamburger-icon {
            opacity: 1;
        }
        
        .Deep Tanzania-close-icon {
            opacity: 0;
        }
        
        .Deep Tanzania-mobile-menu-btn.active .Deep Tanzania-hamburger-icon {
            opacity: 0;
        }
        
        .Deep Tanzania-mobile-menu-btn.active .Deep Tanzania-close-icon {
            opacity: 1;
        }

        /* Mobile Review Badges - UNIQUE CLASSES */
        .Deep Tanzania-mobile-review-badges {
            display: none;
            background-color: #f3eeea;
            padding: 12px 0;
            color: var(--text);
        }
        
        .Deep Tanzania-mobile-review-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .Deep Tanzania-mobile-review-badge {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 13px;
            font-weight: 500;
        }
        
        .Deep Tanzania-mobile-stars {
            display: flex;
            gap: 1px;
        }
        
        .Deep Tanzania-mobile-stars i {
            color: #FFC107;
            font-size: 10px;
        }
        
        .Deep Tanzania-mobile-language-switcher {
            display: none;
        }

        /* Mobile Menu Styles - UNIQUE CLASSES */
        .Deep Tanzania-mobile-menu-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 998;
        }
        
        .Deep Tanzania-mobile-menu-overlay.active {
            display: block;
        }
        
        .Deep Tanzania-mobile-nav {
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
        
        .Deep Tanzania-mobile-nav.active {
            right: 0;
        }
        
        .Deep Tanzania-mobile-nav ul {
            display: flex;
            flex-direction: column;
            width: 100%;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .Deep Tanzania-mobile-nav ul li {
            margin: 0;
            width: 100%;
            text-align: left;
            position: relative;
        }
        
        .Deep Tanzania-mobile-nav ul li:not(:last-child):after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 20px;
            width: calc(100% - 40px);
            height: 1px;
            background: rgba(117, 104, 44, 0.2);
        }
        
        .Deep Tanzania-mobile-nav ul li a {
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
        
        .Deep Tanzania-mobile-nav ul li a:hover {
            color: var(--primary);
            background-color: rgba(117, 104, 44, 0.05);
            padding-left: 35px;
        }

        /* Animations */
        @keyframes Deep Tanzania-fadeInUp {
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
            .Deep Tanzania-hero h1 {
                font-size: 32px;
            }
            
            .Deep Tanzania-section {
                padding: 70px 0;
            }
            
            .Deep Tanzania-header-top {
                display: none;
            }
            
            .Deep Tanzania-mobile-review-badges {
                display: block;
            }
            
            .Deep Tanzania-mobile-language-switcher {
                display: block;
            }
            
            .Deep Tanzania-desktop-language-switcher {
                display: none;
            }
            
            .Deep Tanzania-nav ul {
                display: none;
            }
            
            .Deep Tanzania-mobile-menu-btn {
                display: block;
            }
            
            .Deep Tanzania-hero {
                margin-top: 140px;
            }
        }

        @media (max-width: 768px) {
            .Deep Tanzania-hero {
                min-height: 500px;
                padding-top: 70px;
            }
            
            .Deep Tanzania-hero h1 {
                font-size: 28px;
            }
            
            .Deep Tanzania-hero p {
                font-size: 16px;
            }
            
            .Deep Tanzania-hero-btns {
                flex-direction: column;
                gap: 12px;
            }
            
            .Deep Tanzania-btn {
                width: 100%;
                max-width: 220px;
                margin: 0 auto;
                padding: 10px 20px;
            }
            
            .Deep Tanzania-section-title h2 {
                font-size: 24px;
            }
            
            .Deep Tanzania-section-title .Deep Tanzania-subtitle {
                font-size: 13px;
            }
            
            .Deep Tanzania-about-features {
                flex-direction: column;
                align-items: center;
            }
            
            .Deep Tanzania-feature-item {
                min-width: 100%;
                max-width: 300px;
            }
            
            .Deep Tanzania-mobile-review-container {
                gap: 10px;
            }
            
            .Deep Tanzania-mobile-nav {
                width: 280px;
            }
        }

        @media (max-width: 576px) {
            .Deep Tanzania-section {
                padding: 60px 0;
            }
            
            .Deep Tanzania-section-title h2 {
                font-size: 22px;
            }
            
            .Deep Tanzania-logo {
                font-size: 22px;
            }
            
            .Deep Tanzania-feature-icon {
                width: 60px;
                height: 60px;
                font-size: 22px;
            }
            
            .Deep Tanzania-feature-text h4 {
                font-size: 18px;
            }
            
            .Deep Tanzania-btn {
                font-size: 13px;
            }
            
            .Deep Tanzania-mobile-nav {
                width: 100%;
            }
            
            .Deep Tanzania-mobile-review-badge {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section with UNIQUE CLASSES -->
    <header class="Deep Tanzania-header">
        <div class="Deep Tanzania-header-top">
            <div class="Deep Tanzania-container Deep Tanzania-header-top-container">
                <div class="Deep Tanzania-specialist-info">
                    <div class="Deep Tanzania-specialist-tag">#Dive into the heart of Tanzania </div>
                </div>
                <div class="Deep Tanzania-review-badges">
                    <div class="Deep Tanzania-review-badge">
                        <div class="Deep Tanzania-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span>Tripadvisor</span>
                    </div>
                    <div class="Deep Tanzania-review-badge">
                        <div class="Deep Tanzania-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span>Google</span>
                    </div>
                    <div class="Deep Tanzania-language-switcher Deep Tanzania-desktop-language-switcher">
                        <div class="Deep Tanzania-current-language" id="Deep Tanzania-current-language">
                            <span class="fi fi-us"></span>
                            <span>EN</span>
                            <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                        </div>
                        <div class="Deep Tanzania-language-dropdown" id="Deep Tanzania-language-dropdown">
                            <div class="Deep Tanzania-language-option active" data-lang="en">
                                <span class="fi fi-us"></span>
                                <span>English</span>
                            </div>
                            <div class="Deep Tanzania-language-option" data-lang="fr">
                                <span class="fi fi-fr"></span>
                                <span>Français</span>
                            </div>
                            <div class="Deep Tanzania-language-option" data-lang="de">
                                <span class="fi fi-de"></span>
                                <span>Deutsch</span>
                            </div>
                            <div class="Deep Tanzania-language-option" data-lang="es">
                                <span class="fi fi-es"></span>
                                <span>Español</span>
                            </div>
                            <div class="Deep Tanzania-language-option" data-lang="it">
                                <span class="fi fi-it"></span>
                                <span>Italiano</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="Deep Tanzania-mobile-review-badges">
            <div class="Deep Tanzania-container Deep Tanzania-mobile-review-container">
                <div class="Deep Tanzania-mobile-review-badge">
                    <div class="Deep Tanzania-mobile-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span>Tripadvisor</span>
                </div>
                <div class="Deep Tanzania-mobile-review-badge">
                    <div class="Deep Tanzania-mobile-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span>Google</span>
                </div>
                <div class="Deep Tanzania-language-switcher Deep Tanzania-mobile-language-switcher">
                    <div class="Deep Tanzania-current-language" id="Deep Tanzania-mobile-current-language">
                        <span class="fi fi-us"></span>
                        <span>EN</span>
                        <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                    </div>
                    <div class="Deep Tanzania-language-dropdown" id="Deep Tanzania-mobile-language-dropdown">
                        <div class="Deep Tanzania-language-option active" data-lang="en">
                            <span class="fi fi-us"></span>
                            <span>English</span>
                        </div>
                        <div class="Deep Tanzania-language-option" data-lang="fr">
                            <span class="fi fi-fr"></span>
                            <span>Français</span>
                        </div>
                        <div class="Deep Tanzania-language-option" data-lang="de">
                            <span class="fi fi-de"></span>
                            <span>Deutsch</span>
                        </div>
                        <div class="Deep Tanzania-language-option" data-lang="es">
                            <span class="fi fi-es"></span>
                            <span>Español</span>
                        </div>
                        <div class="Deep Tanzania-language-option" data-lang="it">
                            <span class="fi fi-it"></span>
                            <span>Italiano</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="Deep Tanzania-header-main">
            <div class="Deep Tanzania-container Deep Tanzania-header-container">
                <div class="Deep Tanzania-logo">Deep Tanzania</div>
                
                <nav class="Deep Tanzania-nav">
                    <ul id="Deep Tanzania-nav-menu">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#safaris">SAFARIS</a></li>
                        <li><a href="#kilimanjaro">KILIMANJARO</a></li>
                        <li><a href="#zanzibar">ZANZIBAR</a></li>
                        <li><a href="#daytrips">DAYTRIPS</a></li>
                        <li><a href="#about">ABOUT US</a></li>
                        <li><a href="#contact">CONTACT US</a></li>
                    </ul>
                    
                    <!-- Updated Mobile Menu Button with UNIQUE CLASSES -->
                    <div class="Deep Tanzania-mobile-menu-btn" id="Deep Tanzania-mobile-menu-toggle">
                        <div class="Deep Tanzania-hamburger-icon">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="Deep Tanzania-close-icon">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay with UNIQUE CLASSES -->
    <div class="Deep Tanzania-mobile-menu-overlay" id="Deep Tanzania-mobile-menu-overlay"></div>

    <!-- Mobile Navigation with UNIQUE CLASSES -->
    <div class="Deep Tanzania-mobile-nav" id="Deep Tanzania-mobile-nav">
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

    <script>
        // Mobile Menu Functionality with UNIQUE IDs
        const Deep TanzaniaMobileMenuToggle = document.getElementById('Deep Tanzania-mobile-menu-toggle');
        const Deep TanzaniaMobileNav = document.getElementById('Deep Tanzania-mobile-nav');
        const Deep TanzaniaMobileMenuOverlay = document.getElementById('Deep Tanzania-mobile-menu-overlay');
        
        // Toggle mobile menu
        Deep TanzaniaMobileMenuToggle.addEventListener('click', function() {
            if (Deep TanzaniaMobileNav.classList.contains('active')) {
                // Close menu
                Deep TanzaniaMobileNav.classList.remove('active');
                Deep TanzaniaMobileMenuOverlay.classList.remove('active');
                Deep TanzaniaMobileMenuToggle.classList.remove('active');
                document.body.style.overflow = '';
            } else {
                // Open menu
                Deep TanzaniaMobileNav.classList.add('active');
                Deep TanzaniaMobileMenuOverlay.classList.add('active');
                Deep TanzaniaMobileMenuToggle.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
        
        // Close menu when clicking on overlay
        Deep TanzaniaMobileMenuOverlay.addEventListener('click', function() {
            Deep TanzaniaMobileNav.classList.remove('active');
            Deep TanzaniaMobileMenuOverlay.classList.remove('active');
            Deep TanzaniaMobileMenuToggle.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        // Close menu when clicking on links
        const Deep TanzaniaMobileNavLinks = document.querySelectorAll('.Deep Tanzania-mobile-nav a');
        Deep TanzaniaMobileNavLinks.forEach(link => {
            link.addEventListener('click', function() {
                Deep TanzaniaMobileNav.classList.remove('active');
                Deep TanzaniaMobileMenuOverlay.classList.remove('active');
                Deep TanzaniaMobileMenuToggle.classList.remove('active');
                document.body.style.overflow = '';
            });
        });

        // Language Switcher Functionality with UNIQUE IDs
        const Deep TanzaniaCurrentLanguage = document.getElementById('Deep Tanzania-current-language');
        const Deep TanzaniaLanguageDropdown = document.getElementById('Deep Tanzania-language-dropdown');
        const Deep TanzaniaMobileCurrentLanguage = document.getElementById('Deep Tanzania-mobile-current-language');
        const Deep TanzaniaMobileLanguageDropdown = document.getElementById('Deep Tanzania-mobile-language-dropdown');
        const Deep TanzaniaLanguageOptions = document.querySelectorAll('.Deep Tanzania-language-option');
        
        // Toggle desktop language dropdown
        Deep TanzaniaCurrentLanguage.addEventListener('click', function(e) {
            e.stopPropagation();
            Deep TanzaniaLanguageDropdown.classList.toggle('active');
        });
        
        // Toggle mobile language dropdown
        Deep TanzaniaMobileCurrentLanguage.addEventListener('click', function(e) {
            e.stopPropagation();
            Deep TanzaniaMobileLanguageDropdown.classList.toggle('active');
        });
        
        // Handle language selection
        Deep TanzaniaLanguageOptions.forEach(option => {
            option.addEventListener('click', function() {
                const lang = this.getAttribute('data-lang');
                
                // Update active state
                Deep TanzaniaLanguageOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
                
                // Update current language display
                const flagClass = this.querySelector('.fi').className;
                const languageName = this.querySelector('span:last-child').textContent;
                const languageCode = languageName.substring(0, 2).toUpperCase();
                
                // Update desktop switcher
                Deep TanzaniaCurrentLanguage.innerHTML = `
                    <span class="${flagClass}"></span>
                    <span>${languageCode}</span>
                    <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                `;
                
                // Update mobile switcher
                Deep TanzaniaMobileCurrentLanguage.innerHTML = `
                    <span class="${flagClass}"></span>
                    <span>${languageCode}</span>
                    <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                `;
                
                // Close dropdowns
                Deep TanzaniaLanguageDropdown.classList.remove('active');
                Deep TanzaniaMobileLanguageDropdown.classList.remove('active');
                
                // Save the language preference to localStorage
                localStorage.setItem('Deep Tanzania-preferred-language', lang);
                
                // Show confirmation (optional)
                Deep TanzaniaShowLanguageChangeToast(languageName);
            });
        });
        
        // Close dropdowns when clicking outside
        document.addEventListener('click', function() {
            Deep TanzaniaLanguageDropdown.classList.remove('active');
            Deep TanzaniaMobileLanguageDropdown.classList.remove('active');
        });
        
        // Prevent dropdown close when clicking inside
        Deep TanzaniaLanguageDropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
        
        Deep TanzaniaMobileLanguageDropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
        
        // Load saved language preference
        function Deep TanzaniaLoadLanguagePreference() {
            const savedLang = localStorage.getItem('Deep Tanzania-preferred-language');
            if (savedLang) {
                const optionToSelect = document.querySelector(`.Deep Tanzania-language-option[data-lang="${savedLang}"]`);
                if (optionToSelect) {
                    optionToSelect.click();
                }
            }
        }
        
        // Show toast notification for language change
        function Deep TanzaniaShowLanguageChangeToast(languageName) {
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
            const header = document.querySelector('.Deep Tanzania-header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Load language preference on page load
        window.addEventListener('DOMContentLoaded', Deep TanzaniaLoadLanguagePreference);
    </script>
</body>
</html>