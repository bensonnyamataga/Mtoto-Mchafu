<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travolo -  Tanzanian Safaris & Kilimanjaro Climbs</title>
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

        .Travolo-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .Travolo-btn {
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

        .Travolo-btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(42, 92, 69, 0.3);
        }

        .Travolo-btn-primary:hover {
            background-color: #d4a336;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(42, 92, 69, 0.4);
        }

        .Travolo-btn-secondary {
            background-color: var(--secondary);
            color: var(--dark);
            box-shadow: 0 4px 15px rgba(224, 179, 84, 0.3);
        }

        .Travolo-btn-secondary:hover {
            background-color: #d4a336;
            color: var(--dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(224, 179, 84, 0.4);
        }

        .Travolo-section {
            padding: 80px 0;
        }

        .Travolo-section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .Travolo-section-title .Travolo-subtitle {
            display: block;
            color: var(--primary);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 12px;
            text-transform: lowercase;
            letter-spacing: 2px;
        }

        .Travolo-section-title h2 {
            font-size: 28px;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .Travolo-section-title h2:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--secondary);
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
        }

        .Travolo-section-title p {
            max-width: 700px;
            margin: 0 auto;
            font-size: 16px;
            color: var(--text);
            padding: 0 15px;
        }

        /* Header Styles - UNIQUE CLASSES */
        .Travolo-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
            background-color: var(--light);
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        
        .Travolo-header.scrolled {
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        .Travolo-header-top {
            background-color: #f3eeea;
            padding: 0px 0;
            color: var(--text);
        }
        
        .Travolo-header-top-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .Travolo-specialist-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .Travolo-specialist-tag {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #444444;
        }
        
        .Travolo-review-badges {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .Travolo-review-badge {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 500;
        }
        
        .Travolo-stars {
            display: flex;
            gap: 2px;
        }
        
        .Travolo-stars i {
            color: #FFC107;
            font-size: 12px;
        }
        
        /* Language Switcher Styles - UNIQUE CLASSES */
        .Travolo-language-switcher {
            position: relative;
            display: inline-block;
        }
        
        .Travolo-current-language {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
            color: var(--text);
        }
        
        .Travolo-current-language:hover {
            background-color: rgba(117, 104, 44, 0.1);
        }
        
        .Travolo-language-dropdown {
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
        
        .Travolo-language-dropdown.active {
            display: block;
        }
        
        .Travolo-language-option {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .Travolo-language-option:last-child {
            border-bottom: none;
        }
        
        .Travolo-language-option:hover {
            background-color: #f5f5f5;
        }
        
        .Travolo-language-option.active {
            background-color: rgba(117, 104, 44, 0.1);
            font-weight: 600;
        }
        
        .Travolo-flag-icon {
            width: 20px;
            height: 15px;
            border-radius: 2px;
        }
        
        .Travolo-header-main {
            padding: 15px 0;
        }
        
        .Travolo-header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .Travolo-logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark);
            letter-spacing: 1px;
        }
        
        .Travolo-logo span {
            color: var(--primary);
        }
        
        .Travolo-nav ul {
            display: flex;
            list-style: none;
        }
        
        .Travolo-nav ul li {
            margin-left: 25px;
        }
        
        .Travolo-nav ul li a {
            color:  #1a1a1a;
            font-weight: 700;
            position: relative;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            padding: 8px 0;
        }
        
        .Travolo-nav ul li a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }
        
        .Travolo-nav ul li a:hover {
            color: var(--primary);
        }
        
        .Travolo-nav ul li a:hover:after {
            width: 100%;
        }
        
        /* Mobile Menu Button - UNIQUE CLASSES */
        .Travolo-mobile-menu-btn {
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
        
        .Travolo-hamburger-icon, .Travolo-close-icon {
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
        
        .Travolo-hamburger-icon {
            opacity: 1;
        }
        
        .Travolo-close-icon {
            opacity: 0;
        }
        
        .Travolo-mobile-menu-btn.active .Travolo-hamburger-icon {
            opacity: 0;
        }
        
        .Travolo-mobile-menu-btn.active .Travolo-close-icon {
            opacity: 1;
        }

        /* Mobile Review Badges - UNIQUE CLASSES */
        .Travolo-mobile-review-badges {
            display: none;
            background-color: #f3eeea;
            padding: 12px 0;
            color: var(--text);
        }
        
        .Travolo-mobile-review-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .Travolo-mobile-review-badge {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 13px;
            font-weight: 500;
        }
        
        .Travolo-mobile-stars {
            display: flex;
            gap: 1px;
        }
        
        .Travolo-mobile-stars i {
            color: #FFC107;
            font-size: 10px;
        }
        
        .Travolo-mobile-language-switcher {
            display: none;
        }

        /* Mobile Menu Styles - UNIQUE CLASSES */
        .Travolo-mobile-menu-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 998;
        }
        
        .Travolo-mobile-menu-overlay.active {
            display: block;
        }
        
        .Travolo-mobile-nav {
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
        
        .Travolo-mobile-nav.active {
            right: 0;
        }
        
        .Travolo-mobile-nav ul {
            display: flex;
            flex-direction: column;
            width: 100%;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .Travolo-mobile-nav ul li {
            margin: 0;
            width: 100%;
            text-align: left;
            position: relative;
        }
        
        .Travolo-mobile-nav ul li:not(:last-child):after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 20px;
            width: calc(100% - 40px);
            height: 1px;
            background: rgba(117, 104, 44, 0.2);
        }
        
        .Travolo-mobile-nav ul li a {
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
        
        .Travolo-mobile-nav ul li a:hover {
            color: var(--primary);
            background-color: rgba(117, 104, 44, 0.05);
            padding-left: 35px;
        }

        /* Animations */
        @keyframes Travolo-fadeInUp {
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
            .Travolo-hero h1 {
                font-size: 32px;
            }
            
            .Travolo-section {
                padding: 70px 0;
            }
            
            .Travolo-header-top {
                display: none;
            }
            
            .Travolo-mobile-review-badges {
                display: block;
            }
            
            .Travolo-mobile-language-switcher {
                display: block;
            }
            
            .Travolo-desktop-language-switcher {
                display: none;
            }
            
            .Travolo-nav ul {
                display: none;
            }
            
            .Travolo-mobile-menu-btn {
                display: block;
            }
            
            .Travolo-hero {
                margin-top: 140px;
            }
        }

        @media (max-width: 768px) {
            .Travolo-hero {
                min-height: 500px;
                padding-top: 70px;
            }
            
            .Travolo-hero h1 {
                font-size: 28px;
            }
            
            .Travolo-hero p {
                font-size: 16px;
            }
            
            .Travolo-hero-btns {
                flex-direction: column;
                gap: 12px;
            }
            
            .Travolo-btn {
                width: 100%;
                max-width: 220px;
                margin: 0 auto;
                padding: 10px 20px;
            }
            
            .Travolo-section-title h2 {
                font-size: 24px;
            }
            
            .Travolo-section-title .Travolo-subtitle {
                font-size: 13px;
            }
            
            .Travolo-about-features {
                flex-direction: column;
                align-items: center;
            }
            
            .Travolo-feature-item {
                min-width: 100%;
                max-width: 300px;
            }
            
            .Travolo-mobile-review-container {
                gap: 10px;
            }
            
            .Travolo-mobile-nav {
                width: 280px;
            }
        }

        @media (max-width: 576px) {
            .Travolo-section {
                padding: 60px 0;
            }
            
            .Travolo-section-title h2 {
                font-size: 22px;
            }
            
            .Travolo-logo {
                font-size: 22px;
            }
            
            .Travolo-feature-icon {
                width: 60px;
                height: 60px;
                font-size: 22px;
            }
            
            .Travolo-feature-text h4 {
                font-size: 18px;
            }
            
            .Travolo-btn {
                font-size: 13px;
            }
            
            .Travolo-mobile-nav {
                width: 100%;
            }
            
            .Travolo-mobile-review-badge {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section with UNIQUE CLASSES -->
    <header class="Travolo-header">
        <div class="Travolo-header-top">
            <div class="Travolo-container Travolo-header-top-container">
                <div class="Travolo-specialist-info">
                    <div class="Travolo-specialist-tag">#Dive into the heart of Tanzania </div>
                </div>
                <div class="Travolo-review-badges">
                    <div class="Travolo-review-badge">
                        <div class="Travolo-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
<span><a href="https://https://www.tripadvisor.com/Profile/deeptanzaniatours/">Tripadvisor</a></span>
                    </div>
                    <div class="Travolo-review-badge">
                        <div class="Travolo-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
<span><a href="https://share.google/mC1Bc2n8hcHFs0iCq">Google</a></span>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
        
        <div class="Travolo-mobile-review-badges">
            <div class="Travolo-container Travolo-mobile-review-container">
                <div class="Travolo-mobile-review-badge">
                    <div class="Travolo-mobile-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span><a href="https://https://www.tripadvisor.com/Profile/deeptanzaniatours/">Tripadvisor</a></span>
                </div>
                <div class="Travolo-mobile-review-badge">
                    <div class="Travolo-mobile-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span><a href="https://share.google/mC1Bc2n8hcHFs0iCq">Google</a></span>
                </div>
                
                    </div>
                </div>
            </div>
        </div>
        
        <div class="Travolo-header-main">
            <div class="Travolo-container Travolo-header-container">
                <div class="Travolo-logo">Deep Tanzania</div>
                
                <nav class="Travolo-nav">
                    <ul id="Travolo-nav-menu">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="best-tanzania-safari-package.php">SAFARIS</a></li>
                        <li><a href="kilimanjaro-trekking.php">KILIMANJARO</a></li>
                        <li><a href="#zanzibar">ZANZIBAR</a></li>
                        <li><a href="#daytrips">DAYTRIPS</a></li>
                        <li><a href="#about">ABOUT US</a></li>
                        <li><a href="#contact">CONTACT US</a></li>
                    </ul>
                    
                    <!-- Updated Mobile Menu Button with UNIQUE CLASSES -->
                    <div class="Travolo-mobile-menu-btn" id="Travolo-mobile-menu-toggle">
                        <div class="Travolo-hamburger-icon">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="Travolo-close-icon">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay with UNIQUE CLASSES -->
    <div class="Travolo-mobile-menu-overlay" id="Travolo-mobile-menu-overlay"></div>

    <!-- Mobile Navigation with UNIQUE CLASSES -->
    <div class="Travolo-mobile-nav" id="Travolo-mobile-nav"> <br> <br> <br>
        <ul>
            <li><a href="index.php">HOME</a></li>
             <li><a href="best-tanzania-safari-package.php">SAFARIS</a></li>
            <li><a href="kilimanjaro-trekking.php">KILIMANJARO</a></li>
            <li><a href="#zanzibar">ZANZIBAR</a></li>
            <li><a href="#daytrips">DAYTRIPS</a></li>
            <li><a href="#about">ABOUT US</a></li>
            <li><a href="#contact">CONTACT US</a></li>
        </ul>
    </div>

    <script>
        // Mobile Menu Functionality with UNIQUE IDs
        const TravoloMobileMenuToggle = document.getElementById('Travolo-mobile-menu-toggle');
        const TravoloMobileNav = document.getElementById('Travolo-mobile-nav');
        const TravoloMobileMenuOverlay = document.getElementById('Travolo-mobile-menu-overlay');
        
        // Toggle mobile menu
        TravoloMobileMenuToggle.addEventListener('click', function() {
            if (TravoloMobileNav.classList.contains('active')) {
                // Close menu
                TravoloMobileNav.classList.remove('active');
                TravoloMobileMenuOverlay.classList.remove('active');
                TravoloMobileMenuToggle.classList.remove('active');
                document.body.style.overflow = '';
            } else {
                // Open menu
                TravoloMobileNav.classList.add('active');
                TravoloMobileMenuOverlay.classList.add('active');
                TravoloMobileMenuToggle.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
        
        // Close menu when clicking on overlay
        TravoloMobileMenuOverlay.addEventListener('click', function() {
            TravoloMobileNav.classList.remove('active');
            TravoloMobileMenuOverlay.classList.remove('active');
            TravoloMobileMenuToggle.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        // Close menu when clicking on links
        const TravoloMobileNavLinks = document.querySelectorAll('.Travolo-mobile-nav a');
        TravoloMobileNavLinks.forEach(link => {
            link.addEventListener('click', function() {
                TravoloMobileNav.classList.remove('active');
                TravoloMobileMenuOverlay.classList.remove('active');
                TravoloMobileMenuToggle.classList.remove('active');
                document.body.style.overflow = '';
            });
        });

        // Language Switcher Functionality with UNIQUE IDs
        const TravoloCurrentLanguage = document.getElementById('Travolo-current-language');
        const TravoloLanguageDropdown = document.getElementById('Travolo-language-dropdown');
        const TravoloMobileCurrentLanguage = document.getElementById('Travolo-mobile-current-language');
        const TravoloMobileLanguageDropdown = document.getElementById('Travolo-mobile-language-dropdown');
        const TravoloLanguageOptions = document.querySelectorAll('.Travolo-language-option');
        
        // Toggle desktop language dropdown
        TravoloCurrentLanguage.addEventListener('click', function(e) {
            e.stopPropagation();
            TravoloLanguageDropdown.classList.toggle('active');
        });
        
        // Toggle mobile language dropdown
        TravoloMobileCurrentLanguage.addEventListener('click', function(e) {
            e.stopPropagation();
            TravoloMobileLanguageDropdown.classList.toggle('active');
        });
        
        // Handle language selection
        TravoloLanguageOptions.forEach(option => {
            option.addEventListener('click', function() {
                const lang = this.getAttribute('data-lang');
                
                // Update active state
                TravoloLanguageOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
                
                // Update current language display
                const flagClass = this.querySelector('.fi').className;
                const languageName = this.querySelector('span:last-child').textContent;
                const languageCode = languageName.substring(0, 2).toUpperCase();
                
                // Update desktop switcher
                TravoloCurrentLanguage.innerHTML = `
                    <span class="${flagClass}"></span>
                    <span>${languageCode}</span>
                    <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                `;
                
                // Update mobile switcher
                TravoloMobileCurrentLanguage.innerHTML = `
                    <span class="${flagClass}"></span>
                    <span>${languageCode}</span>
                    <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                `;
                
                // Close dropdowns
                TravoloLanguageDropdown.classList.remove('active');
                TravoloMobileLanguageDropdown.classList.remove('active');
                
                // Save the language preference to localStorage
                localStorage.setItem('Travolo-preferred-language', lang);
                
                // Show confirmation (optional)
                TravoloShowLanguageChangeToast(languageName);
            });
        });
        
        // Close dropdowns when clicking outside
        document.addEventListener('click', function() {
            TravoloLanguageDropdown.classList.remove('active');
            TravoloMobileLanguageDropdown.classList.remove('active');
        });
        
        // Prevent dropdown close when clicking inside
        TravoloLanguageDropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
        
        TravoloMobileLanguageDropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
        
        // Load saved language preference
        function TravoloLoadLanguagePreference() {
            const savedLang = localStorage.getItem('Travolo-preferred-language');
            if (savedLang) {
                const optionToSelect = document.querySelector(`.Travolo-language-option[data-lang="${savedLang}"]`);
                if (optionToSelect) {
                    optionToSelect.click();
                }
            }
        }
        
        // Show toast notification for language change
        function TravoloShowLanguageChangeToast(languageName) {
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
            const header = document.querySelector('.Travolo-header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Load language preference on page load
        window.addEventListener('DOMContentLoaded', TravoloLoadLanguagePreference);
    </script>
</body>
</html>