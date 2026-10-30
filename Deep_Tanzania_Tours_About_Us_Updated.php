<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Deep Tanzania Tours | Our Story & Founder</title>
    <meta name="description" content="Discover the story of Deep Tanzania Tours, founded by Benson Nyamataga in 2024. From Mara and Moshi to the Serengeti, learn why we believe in travelling deeper through Tanzania.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Our Story | Deep Tanzania Tours">
    <meta property="og:description" content="Meet founder Benson Nyamataga and discover the real journey behind Deep Tanzania Tours. Travel Deep. Go Beyond.">
    <meta property="og:image" content="https://deeptanzaniatours.com/img/banner.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Our Story | Deep Tanzania Tours">
    <meta name="twitter:description" content="From a view of Kilimanjaro to a deeper way of sharing Tanzania. Meet the founder of Deep Tanzania Tours.">

    <!-- Keep the existing site's main styles; package.css follows the reference page's design system. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/package.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="/img/favicon/favicon.ico" sizes="any">
    <link rel="icon" type="image/svg+xml" href="/img/favicon/favicon.svg">
    <script src="script/script.js" defer></script>

    <!-- Original About Us page analytics configuration retained. -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FP1EW3J4H7"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-FP1EW3J4H7');
    </script>

    <style>
    /* Scoped About Us styles: inspired by the supplied Kilimanjaro article layout. */
    .about-page {
        --about-olive: #75682c;
        --about-olive-dark: #554b20;
        --about-gold: #e0b64c;
        --about-cream: #f8f6ef;
        --about-ink: #23231f;
        --about-text: #55554f;
        --about-border: rgba(117, 104, 44, .20);
        font-family: 'Poppins', sans-serif;
        color: var(--about-ink);
    }
    .about-page *, .about-page *::before, .about-page *::after { box-sizing: border-box; }
    .about-page .container { width: min(100% - 36px, 1140px); margin-inline: auto; }
    .about-page .about-reading-width { max-width: 830px; margin-inline: auto; }
    .about-page p { font-size: 16px; line-height: 1.85; color: var(--about-text); margin: 0 0 22px; }
    .about-page a { text-decoration: none; }
    .about-page a:focus-visible { outline: 3px solid var(--about-gold); outline-offset: 3px; }
    .about-page section { scroll-margin-top: 86px; }

    /* Reference page hero layout: wide photograph, strong overlay, centered heading and dual CTAs. */
    .about-page .about-hero {
        min-height: 525px;
        padding: 102px 0 88px;
        display: flex;
        align-items: center;
        position: relative;
        isolation: isolate;
        overflow: hidden;
        text-align: center;
        color: white;
        background: linear-gradient(120deg, #26352e, #625b3c);
    }
    .about-page .about-hero .hero-altoo-background,
    .about-page .about-hero .hero-altoo-overlay { position: absolute; inset: 0; }
    .about-page .about-hero .hero-altoo-background { z-index: -2; }
    .about-page .about-hero .hero-altoo-background img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .about-page .about-hero .hero-altoo-overlay {
        z-index: 1;
        background: linear-gradient(95deg, rgba(16,22,19,.78), rgba(24,28,21,.60) 52%, rgba(10,20,17,.78));
    }
    .about-page .about-hero .hero-altoo-content { position: relative; z-index: 2; max-width: 960px; margin-inline: auto; }
    .about-page .hero-eyebrow { display: inline-block; color: #f5db91; font-size: 13px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 18px; }
    .about-page .about-hero h1 { color: #fff; font-size: clamp(34px, 5.5vw, 62px); line-height: 1.15; font-weight: 700; margin: 0 0 18px; }
    .about-page .about-hero .hero-subtitle { color: #f6f6f3; max-width: 790px; margin: 0 auto; font-size: clamp(15px, 2vw, 18px); line-height: 1.8; }
    .about-page .safari-hero-actions { display: flex; justify-content: center; align-items: center; gap: 16px; flex-wrap: wrap; margin-top: 30px; }
    .about-page .safari-hero-btn { display: inline-flex; align-items: center; justify-content: center; min-height: 51px; padding: 13px 24px; min-width: 214px; border-radius: 999px; font-size: 13px; font-weight: 700; letter-spacing: .7px; text-transform: uppercase; transition: .2s ease; }
    .about-page .safari-hero-btn--light { background: var(--about-olive); color: white; border: 2px solid var(--about-olive); }
    .about-page .safari-hero-btn--dark { background: var(--about-gold); color: #1c1b16; border: 2px solid var(--about-gold); }
    .about-page .safari-hero-btn:hover { transform: translateY(-2px); filter: brightness(1.08); }

    /* Article headline, byline and founding motto mirror the reference article. */
    .about-page .about-article { padding: 76px 0 54px; background: #fff; }
    .about-page .article-header { text-align: center; max-width: 900px; margin: 0 auto 34px; }
    .about-page .article-category { display: block; margin-bottom: 12px; color: var(--about-olive); text-transform: uppercase; font-size: 12px; font-weight: 700; letter-spacing: 1.7px; }
    .about-page .article-header h2 { font-size: clamp(26px, 3.1vw, 38px); line-height: 1.3; color: var(--about-ink); margin: 0 0 18px; }
    .about-page .article-meta { display: flex; justify-content: center; flex-wrap: wrap; gap: 12px 25px; font-size: 13px; color: #74746c; }
    .about-page .article-meta i { color: var(--about-olive); margin-right: 7px; }
    .about-page .intro-quote { margin: 32px 0; padding: 23px 28px; background: var(--about-cream); border-left: 4px solid var(--about-olive); }
    .about-page .intro-quote blockquote { margin: 0; color: var(--about-olive-dark); font-family: Georgia, serif; font-size: clamp(22px, 3.2vw, 31px); line-height: 1.4; font-style: italic; text-align: center; }
    .about-page .lead { color: #3e3e36; font-size: 18px; line-height: 1.85; }

    /* The article's centered H2 titles, fine gold rule, and spacious reading column. */
    .about-page .kili-section { padding: 66px 0; background: #fff; }
    .about-page .kili-section.about-soft { background: var(--about-cream); }
    .about-page .kili-inner { width: min(100% - 36px, 850px); margin: 0 auto; }
    .about-page .kili-section h2 { position: relative; font-size: clamp(24px, 3.2vw, 31px); font-weight: 700; line-height: 1.35; color: #1d1d1b; text-align: center; margin: 0 0 32px; padding: 0 0 15px; }
    .about-page .kili-section h2::after { content: ''; width: 52px; height: 3px; background: var(--about-gold); position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); }
    .about-page .section-kicker { display: block; text-align: center; color: var(--about-olive); text-transform: uppercase; font-size: 12px; font-weight: 700; letter-spacing: 1.7px; margin-bottom: 8px; }
    .about-page .kili-section h3 { margin: 30px 0 12px; color: var(--about-ink); font-size: 20px; }
    .about-page .kili-note { background: rgba(117, 104, 44, .07); border-left: 4px solid var(--about-olive); color: var(--about-text); line-height: 1.8; padding: 20px 24px; margin-top: 29px; }
    .about-page .kili-note strong { color: var(--about-ink); }

    /* Images use paths already referred to in the supplied pages; no claim that they depict Benson. */
    .about-page .day-images { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin: 30px auto 33px; }
    .about-page .day-images figure { margin: 0; min-width: 0; }
    .about-page .day-images img { display: block; width: 100%; height: 260px; object-fit: cover; background: #e6e3d5; border-radius: 4px; }
    .about-page .day-images figcaption { color: #77756e; font-size: 12px; line-height: 1.5; padding-top: 10px; }

    /* Reference-style milestone tiles — dates are sourced from the founder's story. */
    .about-page .stat-box-container { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 15px; margin: 31px 0 8px; }
    .about-page .stat-box { background: #fff; border: 1px solid var(--about-border); padding: 23px 16px; text-align: center; }
    .about-page .stat-box h4 { color: var(--about-olive); font-size: 28px; line-height: 1.2; margin: 0 0 9px; font-weight: 700; }
    .about-page .stat-box p { font-size: 13px; line-height: 1.65; margin: 0; }

    /* Mission/value grid borrowed from the article's two-column informational cards. */
    .about-page .kili-card-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 17px; margin: 31px 0 12px; }
    .about-page .kili-card { background: rgba(117, 104, 44, .05); border: 1px solid var(--about-border); padding: 23px 22px; }
    .about-page .kili-card .card-icon { color: var(--about-olive); font-size: 22px; margin: 0 0 11px; }
    .about-page .kili-card h3 { font-size: 18px; color: var(--about-ink); margin: 0 0 11px; }
    .about-page .kili-card p { font-size: 15px; line-height: 1.75; margin: 0; }
    .about-page .founder-signoff { border-top: 1px solid var(--about-border); margin-top: 27px; padding-top: 21px; }
    .about-page .founder-signoff strong { color: var(--about-ink); font-size: 16px; display: block; }
    .about-page .founder-signoff span { display: block; color: var(--about-olive); font-size: 13px; margin-top: 4px; }

    .about-page .about-final-cta { background: #2e3225; color: #fff; text-align: center; padding: 70px 0 78px; }
    .about-page .about-final-cta h2 { font-size: clamp(27px, 3.5vw, 39px); color: #fff; margin: 0 0 15px; }
    .about-page .about-final-cta p { color: #e5e6db; max-width: 720px; margin: 0 auto; }
    .about-page .about-final-cta .safari-hero-actions { margin-top: 26px; }
    .about-page .back-to-top { display: block; text-align: center; margin-top: 22px; color: #e8d6a1; font-size: 13px; }
    @media (max-width: 760px) {
        .about-page .about-hero { min-height: 475px; padding: 88px 0 68px; }
        .about-page .about-article { padding: 53px 0 39px; }
        .about-page .kili-section { padding: 49px 0; }
        .about-page .stat-box-container { grid-template-columns: 1fr; }
        .about-page .kili-card-grid, .about-page .day-images { grid-template-columns: 1fr; }
        .about-page .day-images img { height: 240px; }
        .about-page .safari-hero-actions { flex-direction: column; gap: 11px; }
        .about-page .safari-hero-btn { width: min(100%, 300px); }
        .about-page .article-meta { gap: 7px 17px; }
        .about-page .intro-quote { padding: 22px 16px; }
    }
    </style>
</head>
<body>
<?php include __DIR__ . '/plugins/header.php'; ?>

<main class="about-page" id="top">
    <!-- HERO: same visual pattern as the supplied Kilimanjaro guide. -->
    <section class="hero-altoo about-hero" aria-labelledby="about-hero-title">
        <div class="hero-altoo-background" aria-hidden="true">
            <img src="img/banner.jpg" alt="" fetchpriority="high">
            <div class="hero-altoo-overlay"></div>
        </div>
        <div class="container">
            <div class="hero-altoo-content">
                <span class="hero-eyebrow">Our story • Our people • Our Tanzania</span>
                <h1 id="about-hero-title">About Deep Tanzania Tours</h1>
                <p class="hero-subtitle">A journey that began with a view of Kilimanjaro, a bus ride through the Serengeti, and a simple wish to share more of the country we call home.</p>
                <div class="safari-hero-actions">
                    <a href="#our-story" class="safari-hero-btn safari-hero-btn--light">Read Our Story</a>
                    <a href="#plan-your-trip" class="safari-hero-btn safari-hero-btn--dark">Plan Your Trip</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ARTICLE INTRO: title, byline and quote based on the second page's article header. -->
    <section class="about-article" id="our-story" aria-labelledby="our-story-title">
        <div class="container">
            <header class="article-header">
                <span class="article-category">The story behind Deep Tanzania Tours</span>
                <h2 id="our-story-title">It Began With Curiosity, Not a Tour Company</h2>
                <div class="article-meta">
                    <span><i class="far fa-user" aria-hidden="true"></i> Founder: Benson Nyamataga</span>
                    <span><i class="far fa-calendar-alt" aria-hidden="true"></i> Established in 2024</span>
                    <span><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Rooted in Tanzania</span>
                </div>
            </header>
            <div class="about-reading-width">
                <div class="intro-quote"><blockquote>“Travel Deep. Go Beyond.”</blockquote></div>
                <p class="lead">Some people know from an early age that they want to work in tourism. For our founder, Benson Nyamataga, it happened differently. He went to university to study information technology. Somewhere between the view of Mount Kilimanjaro and the road home to Mara, he started looking at Tanzania in a new way.</p>
                <p>That curiosity eventually became Deep Tanzania Tours. We believe that a trip is better when you understand a little more about the places you visit, the people you meet, and the stories behind the landscapes. That is the idea our company was built around.</p>
            </div>
        </div>
    </section>

    <!-- LONG-FORM STORY: natural, founder-led copy instead of unsupported marketing claims. -->
    <section class="kili-section about-soft" aria-labelledby="early-days-title">
        <div class="kili-inner">
            <span class="section-kicker">Where it all started</span>
            <h2 id="early-days-title">A View of Kilimanjaro and a Road Through the Serengeti</h2>
            <p>Benson was born in Tanzania's Mara Region, a part of the country closely connected to the Serengeti landscape. In 2019, he moved to Moshi to study for a bachelor's degree in information technology at Moshi Co-operative University. Moshi is known as a starting point for Kilimanjaro climbs, but at the time, Benson had arrived for his studies, not to become a tour operator.</p>
            <p>From the university, particularly around Ushirika Stadium, he could see Mount Kilimanjaro on clear days. He found himself drawn to the mountain, its changing appearance and the atmosphere of the town around it. The more he saw, the more he wanted to know about the people who came to climb it.</p>
            <div class="day-images">
                <figure>
                    <img src="img/mount-kilimanjaro-climbing-banner.jpg" alt="Mount Kilimanjaro rising above northern Tanzania" loading="lazy">
                    <figcaption>Kilimanjaro, the mountain that first caught Benson's attention while studying in Moshi.</figcaption>
                </figure>
                <figure>
                    <img src="img/banner.jpg" alt="Tanzania's landscapes and wildlife" loading="lazy">
                    <figcaption>Journeys between Moshi and Mara deepened his interest in the Serengeti.</figcaption>
                </figure>
            </div>
            <p>On school holidays, Benson travelled home to Mara by local transport, passing through the Serengeti. He remembers seeing wildlife along the way. He also noticed tourists in safari vehicles, cameras in hand, enjoying the very landscapes he was crossing on his journey home.</p>
            <p>It made him curious about everything happening behind those trips. Who planned the route? How did visitors choose their camps? How were the guides and vehicles arranged? He had no idea then that those questions would eventually lead him to start a travel company of his own.</p>
        </div>
    </section>

    <section class="kili-section" aria-labelledby="learning-title">
        <div class="kili-inner">
            <span class="section-kicker">Learning by doing</span>
            <h2 id="learning-title">From Building Websites to Understanding Safaris</h2>
            <p>Benson's first work in tourism was actually behind a computer. While studying, he began designing websites for local tour operators. He could build the pages, but he soon realised that knowing how to make a website was not the same as understanding a safari.</p>
            <p>He had to learn how the parks connected, how long journeys really took, which accommodation made sense for different routes, and what travellers needed to know before they arrived. He read, researched and kept asking questions. It was a slow process, but it gave him a good foundation.</p>
            <p>After graduating in 2022, Benson worked as a freelance website designer and developed his skills in digital marketing. That same year, he joined an established Tanzanian tour company, working in operations and digital marketing. This was the part that changed things most. He had the chance to join safari trips, talk with guests, spend time with guides and see the practical side of organising travel.</p>
            <p>Visits to Tarangire, the Serengeti, Ngorongoro and Lake Manyara taught him more than any website could. He learned how important it is to choose the right route, allow realistic travel time, select accommodation carefully and listen when a guest says what they enjoyed—or what they would do differently. Time spent with local communities also reminded him that Tanzania has much more to share than wildlife alone.</p>
            <div class="kili-note"><strong>What Benson learned:</strong> A good trip is not simply a list of destinations. It is the thoughtful work behind the journey—and the people who make each day feel worthwhile.</div>
        </div>
    </section>

    <section class="kili-section about-soft" aria-labelledby="company-start-title">
        <div class="kili-inner">
            <span class="section-kicker">A company takes shape</span>
            <h2 id="company-start-title">The Beginning of Deep Tanzania Tours</h2>
            <p>In 2024, Benson founded Deep Tanzania Tours. The company started on a small, local scale: trips around Moshi and Arusha, visits to waterfalls and nearby communities, and day safaris to places such as Tarangire and Ngorongoro.</p>
            <p>Those early experiences shaped the name. <strong>Deep Tanzania Tours</strong> is about going a little further than the usual sightseeing checklist. Of course, the famous places matter. The Serengeti, Kilimanjaro and Ngorongoro are extraordinary for good reason. But we also want travellers to understand what makes those places special, to hear local perspectives and to feel welcome rather than rushed.</p>
            <div class="stat-box-container" aria-label="Three milestones in the founder's journey">
                <div class="stat-box"><h4>2019</h4><p>Benson moves to Moshi for university and discovers a growing interest in Kilimanjaro and tourism.</p></div>
                <div class="stat-box"><h4>2022</h4><p>He graduates, works in digital marketing and gains hands-on safari operations experience.</p></div>
                <div class="stat-box"><h4>2024</h4><p>Deep Tanzania Tours begins with locally organised trips and a desire to share more of Tanzania.</p></div>
            </div>
        </div>
    </section>

    <!-- The reference article's informative card sections used for a clearly stated brand philosophy. -->
    <section class="kili-section" aria-labelledby="meaning-title">
        <div class="kili-inner">
            <span class="section-kicker">What we believe</span>
            <h2 id="meaning-title">What “Travel Deep. Go Beyond.” Means to Us</h2>
            <p>It means a safari should be more than sitting in a vehicle and moving from one famous stop to the next. It means making room for the questions you want to ask, the people you meet, and the small moments you may not have planned.</p>
            <p>We want to help guests discover Tanzania in a way that fits them, whether they are dreaming of a northern-circuit safari, preparing for Kilimanjaro or hoping to include cultural experiences and local day trips along the way.</p>
            <div class="kili-card-grid">
                <div class="kili-card">
                    <div class="card-icon"><i class="fas fa-map-marked-alt" aria-hidden="true"></i></div>
                    <h3>Know the Journey</h3>
                    <p>Good planning begins with honest advice about routes, driving times, places to stay and how much can comfortably fit into each day.</p>
                </div>
                <div class="kili-card">
                    <div class="card-icon"><i class="fas fa-users" aria-hidden="true"></i></div>
                    <h3>Make Space for People</h3>
                    <p>Wildlife and scenery are part of Tanzania's story. So are the communities, traditions and conversations that help you know the country better.</p>
                </div>
                <div class="kili-card">
                    <div class="card-icon"><i class="fas fa-route" aria-hidden="true"></i></div>
                    <h3>Travel at Your Pace</h3>
                    <p>We believe an itinerary should suit the traveller, not the other way around. Your interests and comfort help shape the experience.</p>
                </div>
                <div class="kili-card">
                    <div class="card-icon"><i class="fas fa-seedling" aria-hidden="true"></i></div>
                    <h3>Respect the Places We Visit</h3>
                    <p>We want our trips to encourage care for the landscapes, wildlife and local people who make travel in Tanzania possible.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="kili-section about-soft" aria-labelledby="founder-note-title">
        <div class="kili-inner">
            <span class="section-kicker">A final word</span>
            <h2 id="founder-note-title">Why This Story Still Matters</h2>
            <p>Deep Tanzania Tours began because Benson wanted to understand his own country better—and help others discover it too. That feeling has not changed. Every person who comes to Tanzania brings a different reason for travelling, and we think the best starting point is to listen.</p>
            <p>We would love to show you the places that first inspired this journey, and introduce you to the places and people that continue to make Tanzania feel like home.</p>
            <div class="founder-signoff">
                <strong>Benson Nyamataga</strong>
                <span>Founder, Deep Tanzania Tours</span>
            </div>
        </div>
    </section>

    <section class="about-final-cta" id="plan-your-trip" aria-labelledby="cta-title">
        <div class="container">
            <span class="hero-eyebrow">Your Tanzania story starts here</span>
            <h2 id="cta-title">Come and See Tanzania for Yourself</h2>
            <p>Tell us what you are curious about, how you like to travel and the dates you have in mind. We will help you put together a journey that feels right for you.</p>
            <div class="safari-hero-actions">
                <!-- Use the site's existing booking popup when available; otherwise the link stays on this section. -->
                <a href="#plan-your-trip" class="safari-hero-btn safari-hero-btn--dark" onclick="if(typeof openBookingPopup === 'function'){openBookingPopup();return false;}">Start Planning Your Trip</a>
                <a href="#our-story" class="safari-hero-btn safari-hero-btn--light">Read Our Story Again</a>
            </div>
            <a class="back-to-top" href="#top">Back to the top</a>
        </div>
    </section>
</main>

<!-- Original About Us layout uses the plugins/ directory. Adjust only if your live site uses plugins-folder/. -->
<?php include __DIR__ . '/plugins/call-to-action.php'; ?>
<?php include __DIR__ . '/plugins/pop-up-expert.php'; ?>
<?php include __DIR__ . '/plugins/footer.php'; ?>
<?php include __DIR__ . '/plugins/booking-form.php'; ?>
<?php include __DIR__ . '/plugins/mobile-footer.php'; ?>
</body>
</html>
