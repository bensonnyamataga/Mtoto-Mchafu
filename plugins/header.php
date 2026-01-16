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

        .travolo-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .travolo-btn {
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

        .travolo-btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(42, 92, 69, 0.3);
        }

        .travolo-btn-primary:hover {
            background-color: #d4a336;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(42, 92, 69, 0.4);
        }

        .travolo-btn-secondary {
            background-color: var(--secondary);
            color: var(--dark);
            box-shadow: 0 4px 15px rgba(224, 179, 84, 0.3);
        }

        .travolo-btn-secondary:hover {
            background-color: #d4a336;
            color: var(--dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(224, 179, 84, 0.4);
        }

        .travolo-section {
            padding: 80px 0;
        }

        .travolo-section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .travolo-section-title .travolo-subtitle {
            display: block;
            color: var(--primary);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 12px;
            text-transform: lowercase;
            letter-spacing: 2px;
        }

        .travolo-section-title h2 {
            font-size: 28px;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .travolo-section-title h2:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--secondary);
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
        }

        .travolo-section-title p {
            max-width: 700px;
            margin: 0 auto;
            font-size: 16px;
            color: var(--text);
            padding: 0 15px;
        }

        /* Header Styles - UNIQUE CLASSES */
        .travolo-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
            background-color: var(--light);
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        
        .travolo-header.scrolled {
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        .travolo-header-top {
            background-color: #f3eeea;
            padding: 0px 0;
            color: var(--text);
        }
        
        .travolo-header-top-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .travolo-specialist-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .travolo-specialist-tag {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #444444;
        }
        
        .travolo-review-badges {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .travolo-review-badge {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 500;
        }
        
        .travolo-stars {
            display: flex;
            gap: 2px;
        }
        
        .travolo-stars i {
            color: #FFC107;
            font-size: 12px;
        }
        
        /* Language Switcher Styles - UNIQUE CLASSES */
        .travolo-language-switcher {
            position: relative;
            display: inline-block;
        }
        
        .travolo-current-language {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
            color: var(--text);
        }
        
        .travolo-current-language:hover {
            background-color: rgba(117, 104, 44, 0.1);
        }
        
        .travolo-language-dropdown {
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
        
        .travolo-language-dropdown.active {
            display: block;
        }
        
        .travolo-language-option {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .travolo-language-option:last-child {
            border-bottom: none;
        }
        
        .travolo-language-option:hover {
            background-color: #f5f5f5;
        }
        
        .travolo-language-option.active {
            background-color: rgba(117, 104, 44, 0.1);
            font-weight: 600;
        }
        
        .travolo-flag-icon {
            width: 20px;
            height: 15px;
            border-radius: 2px;
        }
        
        .travolo-header-main {
            padding: 15px 0;
        }
        
        .travolo-header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .travolo-logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark);
            letter-spacing: 1px;
        }
        
        .travolo-logo span {
            color: var(--primary);
        }
        
        .travolo-nav ul {
            display: flex;
            list-style: none;
        }
        
        .travolo-nav ul li {
            margin-left: 25px;
        }
        
        .travolo-nav ul li a {
            color:  #1a1a1a;
            font-weight: 700;
            position: relative;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            padding: 8px 0;
        }
        
        .travolo-nav ul li a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }
        
        .travolo-nav ul li a:hover {
            color: var(--primary);
        }
        
        .travolo-nav ul li a:hover:after {
            width: 100%;
        }
        
        /* Mobile Menu Button - UNIQUE CLASSES */
        .travolo-mobile-menu-btn {
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
        
        .travolo-hamburger-icon, .travolo-close-icon {
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
        
        .travolo-hamburger-icon {
            opacity: 1;
        }
        
        .travolo-close-icon {
            opacity: 0;
        }
        
        .travolo-mobile-menu-btn.active .travolo-hamburger-icon {
            opacity: 0;
        }
        
        .travolo-mobile-menu-btn.active .travolo-close-icon {
            opacity: 1;
        }

        /* Mobile Review Badges - UNIQUE CLASSES */
        .travolo-mobile-review-badges {
            display: none;
            background-color: #f3eeea;
            padding: 12px 0;
            color: var(--text);
        }
        
        .travolo-mobile-review-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .travolo-mobile-review-badge {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 13px;
            font-weight: 500;
        }
        
        .travolo-mobile-stars {
            display: flex;
            gap: 1px;
        }
        
        .travolo-mobile-stars i {
            color: #FFC107;
            font-size: 10px;
        }
        
        .travolo-mobile-language-switcher {
            display: none;
        }

        /* Mobile Menu Styles - UNIQUE CLASSES */
        .travolo-mobile-menu-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 998;
        }
        
        .travolo-mobile-menu-overlay.active {
            display: block;
        }
        
        .travolo-mobile-nav {
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
        
        .travolo-mobile-nav.active {
            right: 0;
        }
        
        .travolo-mobile-nav ul {
            display: flex;
            flex-direction: column;
            width: 100%;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .travolo-mobile-nav ul li {
            margin: 0;
            width: 100%;
            text-align: left;
            position: relative;
        }
        
        .travolo-mobile-nav ul li:not(:last-child):after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 20px;
            width: calc(100% - 40px);
            height: 1px;
            background: rgba(117, 104, 44, 0.2);
        }
        
        .travolo-mobile-nav ul li a {
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
        
        .travolo-mobile-nav ul li a:hover {
            color: var(--primary);
            background-color: rgba(117, 104, 44, 0.05);
            padding-left: 35px;
        }

        /* Animations */
        @keyframes travolo-fadeInUp {
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
            .travolo-hero h1 {
                font-size: 32px;
            }
            
            .travolo-section {
                padding: 70px 0;
            }
            
            .travolo-header-top {
                display: none;
            }
            
            .travolo-mobile-review-badges {
                display: block;
            }
            
            .travolo-mobile-language-switcher {
                display: block;
            }
            
            .travolo-desktop-language-switcher {
                display: none;
            }
            
            .travolo-nav ul {
                display: none;
            }
            
            .travolo-mobile-menu-btn {
                display: block;
            }
            
            .travolo-hero {
                margin-top: 140px;
            }
        }

        @media (max-width: 768px) {
            .travolo-hero {
                min-height: 500px;
                padding-top: 70px;
            }
            
            .travolo-hero h1 {
                font-size: 28px;
            }
            
            .travolo-hero p {
                font-size: 16px;
            }
            
            .travolo-hero-btns {
                flex-direction: column;
                gap: 12px;
            }
            
            .travolo-btn {
                width: 100%;
                max-width: 220px;
                margin: 0 auto;
                padding: 10px 20px;
            }
            
            .travolo-section-title h2 {
                font-size: 24px;
            }
            
            .travolo-section-title .travolo-subtitle {
                font-size: 13px;
            }
            
            .travolo-about-features {
                flex-direction: column;
                align-items: center;
            }
            
            .travolo-feature-item {
                min-width: 100%;
                max-width: 300px;
            }
            
            .travolo-mobile-review-container {
                gap: 10px;
            }
            
            .travolo-mobile-nav {
                width: 280px;
            }
        }

        @media (max-width: 576px) {
            .travolo-section {
                padding: 60px 0;
            }
            
            .travolo-section-title h2 {
                font-size: 22px;
            }
            
            .travolo-logo {
                font-size: 22px;
            }
            
            .travolo-feature-icon {
                width: 60px;
                height: 60px;
                font-size: 22px;
            }
            
            .travolo-feature-text h4 {
                font-size: 18px;
            }
            
            .travolo-btn {
                font-size: 13px;
            }
            
            .travolo-mobile-nav {
                width: 100%;
            }
            
            .travolo-mobile-review-badge {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section with UNIQUE CLASSES -->
    <header class="travolo-header">
        <div class="travolo-header-top">
            <div class="travolo-container travolo-header-top-container">
                <div class="travolo-specialist-info">
                    <div class="travolo-specialist-tag">#Dive into the heart of Tanzania </div>
                </div>
                <div class="travolo-review-badges">
                    <div class="travolo-review-badge">
                        <div class="travolo-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span>Tripadvisor</span>
                    </div>
                    <div class="travolo-review-badge">
                        <div class="travolo-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span>Google</span>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
        
        <div class="travolo-mobile-review-badges">
            <div class="travolo-container travolo-mobile-review-container">
                <div class="travolo-mobile-review-badge">
                    <div class="travolo-mobile-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span>Tripadvisor</span>
                </div>
                <div class="travolo-mobile-review-badge">
                    <div class="travolo-mobile-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span>Google</span>
                </div>
                <div class="travolo-language-switcher travolo-mobile-language-switcher">
                    <div class="travolo-current-language" id="travolo-mobile-current-language">
                        <span class="fi fi-us"></span>
                        <span>EN</span>
                        <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                    </div>
                    <div class="travolo-language-dropdown" id="travolo-mobile-language-dropdown">
                        <div class="travolo-language-option active" data-lang="en">
                            <span class="fi fi-us"></span>
                            <span>English</span>
                        </div>
                        <div class="travolo-language-option" data-lang="fr">
                            <span class="fi fi-fr"></span>
                            <span>Français</span>
                        </div>
                        <div class="travolo-language-option" data-lang="de">
                            <span class="fi fi-de"></span>
                            <span>Deutsch</span>
                        </div>
                        <div class="travolo-language-option" data-lang="es">
                            <span class="fi fi-es"></span>
                            <span>Español</span>
                        </div>
                        <div class="travolo-language-option" data-lang="it">
                            <span class="fi fi-it"></span>
                            <span>Italiano</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="travolo-header-main">
            <div class="travolo-container travolo-header-container">
                <div class="travolo-logo">TRAVOLO</div>
                
                <nav class="travolo-nav">
                    <ul id="travolo-nav-menu">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#safaris">SAFARIS</a></li>
                        <li><a href="#kilimanjaro">KILIMANJARO</a></li>
                        <li><a href="#zanzibar">ZANZIBAR</a></li>
                        <li><a href="#daytrips">DAYTRIPS</a></li>
                        <li><a href="#about">ABOUT US</a></li>
                        <li><a href="#contact">CONTACT US</a></li>
                    </ul>
                    
                    <!-- Updated Mobile Menu Button with UNIQUE CLASSES -->
                    <div class="travolo-mobile-menu-btn" id="travolo-mobile-menu-toggle">
                        <div class="travolo-hamburger-icon">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="travolo-close-icon">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay with UNIQUE CLASSES -->
    <div class="travolo-mobile-menu-overlay" id="travolo-mobile-menu-overlay"></div>

    <!-- Mobile Navigation with UNIQUE CLASSES -->
    <div class="travolo-mobile-nav" id="travolo-mobile-nav"> <br> <br> <br>
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
        const travoloMobileMenuToggle = document.getElementById('travolo-mobile-menu-toggle');
        const travoloMobileNav = document.getElementById('travolo-mobile-nav');
        const travoloMobileMenuOverlay = document.getElementById('travolo-mobile-menu-overlay');
        
        // Toggle mobile menu
        travoloMobileMenuToggle.addEventListener('click', function() {
            if (travoloMobileNav.classList.contains('active')) {
                // Close menu
                travoloMobileNav.classList.remove('active');
                travoloMobileMenuOverlay.classList.remove('active');
                travoloMobileMenuToggle.classList.remove('active');
                document.body.style.overflow = '';
            } else {
                // Open menu
                travoloMobileNav.classList.add('active');
                travoloMobileMenuOverlay.classList.add('active');
                travoloMobileMenuToggle.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
        
        // Close menu when clicking on overlay
        travoloMobileMenuOverlay.addEventListener('click', function() {
            travoloMobileNav.classList.remove('active');
            travoloMobileMenuOverlay.classList.remove('active');
            travoloMobileMenuToggle.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        // Close menu when clicking on links
        const travoloMobileNavLinks = document.querySelectorAll('.travolo-mobile-nav a');
        travoloMobileNavLinks.forEach(link => {
            link.addEventListener('click', function() {
                travoloMobileNav.classList.remove('active');
                travoloMobileMenuOverlay.classList.remove('active');
                travoloMobileMenuToggle.classList.remove('active');
                document.body.style.overflow = '';
            });
        });

        // Language Switcher Functionality with UNIQUE IDs
        const travoloCurrentLanguage = document.getElementById('travolo-current-language');
        const travoloLanguageDropdown = document.getElementById('travolo-language-dropdown');
        const travoloMobileCurrentLanguage = document.getElementById('travolo-mobile-current-language');
        const travoloMobileLanguageDropdown = document.getElementById('travolo-mobile-language-dropdown');
        const travoloLanguageOptions = document.querySelectorAll('.travolo-language-option');
        
        // Toggle desktop language dropdown
        travoloCurrentLanguage.addEventListener('click', function(e) {
            e.stopPropagation();
            travoloLanguageDropdown.classList.toggle('active');
        });
        
        // Toggle mobile language dropdown
        travoloMobileCurrentLanguage.addEventListener('click', function(e) {
            e.stopPropagation();
            travoloMobileLanguageDropdown.classList.toggle('active');
        });
        
        // Handle language selection
        travoloLanguageOptions.forEach(option => {
            option.addEventListener('click', function() {
                const lang = this.getAttribute('data-lang');
                
                // Update active state
                travoloLanguageOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
                
                // Update current language display
                const flagClass = this.querySelector('.fi').className;
                const languageName = this.querySelector('span:last-child').textContent;
                const languageCode = languageName.substring(0, 2).toUpperCase();
                
                // Update desktop switcher
                travoloCurrentLanguage.innerHTML = `
                    <span class="${flagClass}"></span>
                    <span>${languageCode}</span>
                    <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                `;
                
                // Update mobile switcher
                travoloMobileCurrentLanguage.innerHTML = `
                    <span class="${flagClass}"></span>
                    <span>${languageCode}</span>
                    <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                `;
                
                // Close dropdowns
                travoloLanguageDropdown.classList.remove('active');
                travoloMobileLanguageDropdown.classList.remove('active');
                
                // Save the language preference to localStorage
                localStorage.setItem('travolo-preferred-language', lang);
                
                // Show confirmation (optional)
                travoloShowLanguageChangeToast(languageName);
            });
        });
        
        // Close dropdowns when clicking outside
        document.addEventListener('click', function() {
            travoloLanguageDropdown.classList.remove('active');
            travoloMobileLanguageDropdown.classList.remove('active');
        });
        
        // Prevent dropdown close when clicking inside
        travoloLanguageDropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
        
        travoloMobileLanguageDropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
        
        // Load saved language preference
        function travoloLoadLanguagePreference() {
            const savedLang = localStorage.getItem('travolo-preferred-language');
            if (savedLang) {
                const optionToSelect = document.querySelector(`.travolo-language-option[data-lang="${savedLang}"]`);
                if (optionToSelect) {
                    optionToSelect.click();
                }
            }
        }
        
        // Show toast notification for language change
        function travoloShowLanguageChangeToast(languageName) {
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
            const header = document.querySelector('.travolo-header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Load language preference on page load
        window.addEventListener('DOMContentLoaded', travoloLoadLanguagePreference);
    </script>
</body>
</html>