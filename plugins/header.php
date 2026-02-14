<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Travolo - Tanzanian Safaris & Kilimanjaro Climbs</title>

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

    * { margin: 0; padding: 0; box-sizing: border-box; }

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

    a { text-decoration: none; transition: all 0.3s ease; }
    img { max-width: 100%; height: auto; display: block; }

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

    .Travolo-section { padding: 80px 0; }

    .Travolo-section-title { text-align: center; margin-bottom: 50px; }

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

    .Travolo-header.scrolled { box-shadow: 0 5px 20px rgba(0,0,0,0.1); }

    .Travolo-header-top {
      background-color: #f3eeea;
      padding: 0px 0;
      color: var(--text);
    }

    .Travolo-header-top-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 18px;
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
      white-space: nowrap;
    }

    .Travolo-review-badges {
      display: flex;
      align-items: center;
      gap: 16px;
      flex-wrap: wrap;
      justify-content: flex-end;
    }

    .Travolo-review-badge {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      font-weight: 500;
    }

    .Travolo-stars { display: flex; gap: 2px; }

    .Travolo-stars i { color: #FFC107; font-size: 12px; }

    /* ✅ GTranslate mount point styling (so it sits nicely in the header) */
    .gtranslate_wrapper {
      display: flex;
      align-items: center;
      z-index: 1005;
    }

    .Travolo-header-main { padding: 15px 0; }

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

    .Travolo-logo span { color: var(--primary); }

    .Travolo-nav ul {
      display: flex;
      list-style: none;
    }

    .Travolo-nav ul li { margin-left: 25px; }

    .Travolo-nav ul li a {
      color: #1a1a1a;
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

    .Travolo-nav ul li a:hover { color: var(--primary); }
    .Travolo-nav ul li a:hover:after { width: 100%; }

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
      top: 0; left: 0;
      width: 100%; height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .Travolo-hamburger-icon { opacity: 1; }
    .Travolo-close-icon { opacity: 0; }

    .Travolo-mobile-menu-btn.active .Travolo-hamburger-icon { opacity: 0; }
    .Travolo-mobile-menu-btn.active .Travolo-close-icon { opacity: 1; }

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

    .Travolo-mobile-stars { display: flex; gap: 1px; }
    .Travolo-mobile-stars i { color: #FFC107; font-size: 10px; }

    /* Mobile Menu Styles - UNIQUE CLASSES */
    .Travolo-mobile-menu-overlay {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
      z-index: 998;
    }

    .Travolo-mobile-menu-overlay.active { display: block; }

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

    .Travolo-mobile-nav.active { right: 0; }

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
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
      .Travolo-header-top { display: none; }
      .Travolo-mobile-review-badges { display: block; }
      .Travolo-nav ul { display: none; }
      .Travolo-mobile-menu-btn { display: block; }
    }

    @media (max-width: 768px) {
      .Travolo-section { padding: 70px 0; }
      .Travolo-mobile-review-container { gap: 10px; }
      .Travolo-mobile-nav { width: 280px; }
    }

    @media (max-width: 576px) {
      .Travolo-section { padding: 60px 0; }
      .Travolo-logo { font-size: 22px; }
      .Travolo-mobile-nav { width: 100%; }
      .Travolo-mobile-review-badge { font-size: 12px; }
    }
  </style>
</head>

<body>

  <!-- =======================
       HEADER (FIXED HTML)
       ======================= -->
  <header class="Travolo-header">

    <!-- Desktop top bar -->
    <div class="Travolo-header-top">
      <div class="Travolo-container Travolo-header-top-container">

        <div class="Travolo-specialist-info">
          <div class="Travolo-specialist-tag">#Dive into the heart of Tanzania</div>
        </div>

        <div class="Travolo-review-badges">
          <div class="Travolo-review-badge">
            <div class="Travolo-stars">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <span><a href="https://www.tripadvisor.com/Profile/deeptanzaniatours">Tripadvisor</a></span>
          </div>

          <div class="Travolo-review-badge">
            <div class="Travolo-stars">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <span><a href="https://share.google/mC1Bc2n8hcHFs0iCq">Google</a></span>
          </div>

          <!-- ✅ GTranslate mount point -->
          <div class="gtranslate_wrapper"></div>
        </div>

      </div>
    </div>

    <!-- Mobile badges bar -->
    <div class="Travolo-mobile-review-badges">
      <div class="Travolo-container Travolo-mobile-review-container">

        <div class="Travolo-mobile-review-badge">
          <div class="Travolo-mobile-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <span><a href="https://www.tripadvisor.com/Profile/deeptanzaniatours">Tripadvisor</a></span>
        </div>

        <div class="Travolo-mobile-review-badge">
          <div class="Travolo-mobile-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <span><a href="https://share.google/mC1Bc2n8hcHFs0iCq">Google</a></span>
        </div>

      </div>
    </div>

    <!-- Main header -->
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
            <li><a href="about-us.php">ABOUT US</a></li>
            <li><a href="contact-us.php">CONTACT US</a></li>
          </ul>

          <!-- Mobile menu button -->
          <div class="Travolo-mobile-menu-btn" id="Travolo-mobile-menu-toggle">
            <div class="Travolo-hamburger-icon"><i class="fas fa-bars"></i></div>
            <div class="Travolo-close-icon"><i class="fas fa-times"></i></div>
          </div>
        </nav>

      </div>
    </div>
  </header>

  <!-- Mobile menu overlay -->
  <div class="Travolo-mobile-menu-overlay" id="Travolo-mobile-menu-overlay"></div>

  <!-- Mobile nav -->
  <div class="Travolo-mobile-nav" id="Travolo-mobile-nav"><br><br><br>
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="best-tanzania-safari-package.php">SAFARIS</a></li>
      <li><a href="kilimanjaro-trekking.php">KILIMANJARO</a></li>
      <li><a href="#zanzibar">ZANZIBAR</a></li>
      <li><a href="#daytrips">DAYTRIPS</a></li>
      <li><a href="about-us.php">ABOUT US</a></li>
      <li><a href="contact-us.php">CONTACT US</a></li>
    </ul>
  </div>

  <!-- =======================
       GTRANSLATE (FIXED KEYS)
       ======================= -->
  <script>
    window.gtranslateSettings = {
      default_language: "en",
      detect_browser_language: true,
      languages: ["en","sw","fr","de","es"],
      wrapper_selector: ".gtranslate_wrapper",
      switcher_horizontal_position: "right",
      switcher_vertical_position: "top"
    };
  </script>
  <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

  <!-- =======================
       HEADER JS (CLEANED)
       ======================= -->
  <script>
    // Mobile Menu
    const TravoloMobileMenuToggle = document.getElementById('Travolo-mobile-menu-toggle');
    const TravoloMobileNav = document.getElementById('Travolo-mobile-nav');
    const TravoloMobileMenuOverlay = document.getElementById('Travolo-mobile-menu-overlay');

    if (TravoloMobileMenuToggle && TravoloMobileNav && TravoloMobileMenuOverlay) {
      TravoloMobileMenuToggle.addEventListener('click', function () {
        const isOpen = TravoloMobileNav.classList.contains('active');
        TravoloMobileNav.classList.toggle('active', !isOpen);
        TravoloMobileMenuOverlay.classList.toggle('active', !isOpen);
        TravoloMobileMenuToggle.classList.toggle('active', !isOpen);
        document.body.style.overflow = !isOpen ? 'hidden' : '';
      });

      TravoloMobileMenuOverlay.addEventListener('click', function () {
        TravoloMobileNav.classList.remove('active');
        TravoloMobileMenuOverlay.classList.remove('active');
        TravoloMobileMenuToggle.classList.remove('active');
        document.body.style.overflow = '';
      });

      document.querySelectorAll('.Travolo-mobile-nav a').forEach(link => {
        link.addEventListener('click', function () {
          TravoloMobileNav.classList.remove('active');
          TravoloMobileMenuOverlay.classList.remove('active');
          TravoloMobileMenuToggle.classList.remove('active');
          document.body.style.overflow = '';
        });
      });
    }

    // Header scroll effect
    window.addEventListener('scroll', function () {
      const header = document.querySelector('.Travolo-header');
      if (!header) return;
      header.classList.toggle('scrolled', window.scrollY > 50);
    });
  </script>

</body>
</html>
