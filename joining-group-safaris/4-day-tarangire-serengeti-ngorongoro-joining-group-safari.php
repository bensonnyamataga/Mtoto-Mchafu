<?php
$pageUrl = 'https://deeptanzaniatours.com/joining-group-safaris/4-day-tarangire-serengeti-ngorongoro-joining-group-safari.php';
$pageTitle = '4-Day Tarangire, Serengeti & Ngorongoro Crater Joining Group Safari';
$pageDescription = 'Join a 4-day Tarangire, Serengeti and Ngorongoro group safari from Arusha. One budget lodge night and camping at Nyani and Simba. From USD 880 per person.';
$faqs = [
    ['question' => 'How much is the 4-day Tarangire, Serengeti and Ngorongoro joining safari?', 'answer' => 'The budget joining package starts from USD 880 per person. Share your travel date and number of travellers so we can confirm the final price and group availability.'],
    ['question' => 'Where do we stay during the safari?', 'answer' => 'Night 1 is at Jua Manyara Budget Lodge in Mto wa Mbu after the Tarangire game drive. Night 2 is at Nyani Public Campsite in Central Serengeti. Night 3 is at Simba Public Campsite on the Ngorongoro Crater rim. The two public campsites have shared toilet and bathroom facilities.'],
    ['question' => 'How many nights are spent in Central Serengeti?', 'answer' => 'You spend one night in Central Serengeti at Nyani Public Campsite. Day 2 includes the journey from Mto wa Mbu through the Ngorongoro Highlands and an afternoon Serengeti game drive. After a morning game drive on Day 3, you transfer to Simba Public Campsite in the Ngorongoro Conservation Area.'],
    ['question' => 'Is camping equipment provided?', 'answer' => 'Deep Tanzania Tours provides tents, sleeping mattresses and sleeping bags upon request for the two camping nights. You are welcome to bring your own sleeping bag. Our team handles campsite arrangements and meal preparation.'],
    ['question' => 'Where does the safari start and finish?', 'answer' => 'The safari starts with a morning pickup from your hotel in Arusha on Day 1 and finishes at your hotel or another agreed location in Arusha on Day 4. Please provide your hotel details before departure; we will confirm the pickup time with you.'],
    ['question' => 'Which meals are included?', 'answer' => 'Day 1 includes lunch and dinner. Days 2 and 3 include breakfast, lunch and dinner. Day 4 includes breakfast and lunch. Tell us about food allergies or dietary requirements before booking.'],
    ['question' => 'Are airport transfers and Arusha hotels included?', 'answer' => 'Airport transfers and Arusha hotels before or after the safari are excluded and can be arranged separately on request. Pickup from your Arusha hotel and return to Arusha are included in the shared itinerary.'],
];
$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        ['@type' => 'TouristTrip', '@id' => $pageUrl . '#trip', 'name' => $pageTitle, 'description' => $pageDescription, 'url' => $pageUrl, 'image' => 'https://deeptanzaniatours.com/img/serengeti-safari-banner-from-arusha.jpg', 'touristType' => 'Budget small-group safari travellers', 'provider' => ['@type' => 'TravelAgency', 'name' => 'Deep Tanzania Tours', 'url' => 'https://deeptanzaniatours.com/'], 'offers' => ['@type' => 'Offer', 'price' => '880', 'priceCurrency' => 'USD', 'url' => $pageUrl, 'description' => 'Budget package per person; final price and group availability confirmed on enquiry.'], 'itinerary' => ['@type' => 'ItemList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Day 1: Arusha to Tarangire; game drive and overnight at Jua Manyara Budget Lodge, Mto wa Mbu'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Day 2: Mto wa Mbu to Central Serengeti; afternoon game drive and overnight at Nyani Public Campsite'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Day 3: Central Serengeti morning game drive; transfer to Simba Public Campsite in the Ngorongoro Conservation Area'],
            ['@type' => 'ListItem', 'position' => 4, 'name' => 'Day 4: Ngorongoro Crater game drive and return to Arusha'],
        ]]],
        ['@type' => 'BreadcrumbList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://deeptanzaniatours.com/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Joining Group Safaris', 'item' => 'https://deeptanzaniatours.com/joining-group-safaris/joining-groups.php'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $pageTitle, 'item' => $pageUrl],
        ]],
        ['@type' => 'FAQPage', 'mainEntity' => array_map(static function ($faq) { return ['@type' => 'Question', 'name' => $faq['question'], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['answer']]]; }, $faqs)],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4-Day Tarangire, Serengeti &amp; Ngorongoro Group Safari | From $880</title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <link rel="canonical" href="<?= htmlspecialchars($pageUrl, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:url" content="<?= htmlspecialchars($pageUrl, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image" content="https://deeptanzaniatours.com/img/serengeti-safari-banner-from-arusha.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:image" content="https://deeptanzaniatours.com/img/serengeti-safari-banner-from-arusha.jpg">
    <link rel="icon" type="image/png" href="../img/favicon-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../style/package.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/joining-multiday.css?v=3">
    <link rel="stylesheet" href="../style/hero.css?v=1">
    <link rel="stylesheet" href="../style/joining-hero.css?v=1">
    <style>
        .serengeti-joining #itinerary .day-description { padding-right: 0; }
        .serengeti-joining #itinerary .day-description::after { display: none; }
    </style>
    <script src="../script/hero.js?v=1" defer></script>
    <script src="../script/lodge-gallery.js?v=1" defer></script>
    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FP1EW3J4H7"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','G-FP1EW3J4H7');</script>
</head>
<body class="joining-multiday serengeti-joining">
<?php include __DIR__ . '/../plugins-folder/header.php'; ?>

<div class="dtt-join-page">
    <section class="dtt-join-hero" aria-labelledby="safari-title">
        <img class="dtt-join-image" src="../img/serengeti-safari-banner-from-arusha.jpg" alt="Serengeti National Park safari landscape" fetchpriority="high">
        <div class="dtt-join-shade" aria-hidden="true"></div>
        <div class="dtt-join-hero-inner">
            <span class="dtt-join-kicker">SHARED WILDLIFE ADVENTURES</span>
            <h1 id="safari-title">4-Day Tarangire, Serengeti &amp; Ngorongoro Crater Joining Group Safari</h1>
            <p class="dtt-join-lead">Four days from Arusha through Tarangire, Central Serengeti and Ngorongoro Crater, with one budget lodge night and two public campsite nights.</p>
            <div class="dtt-join-hero-buttons">
            <a class="dtt-join-button dtt-join-button-primary" href="#itinerary">View the Itinerary</a>
            <a class="dtt-join-button dtt-join-button-secondary" href="../contact-us.php" data-four-day-enquiry>Check Dates &amp; Join</a>
        </div>
        </div>
    </section>
</div>

<main>
    <nav class="jm-breadcrumb" aria-label="Breadcrumb"><a href="../index.php">Home</a> / <a href="joining-groups.php">Joining Group Safaris</a> / <span aria-current="page">4-Day Tarangire, Serengeti &amp; Ngorongoro</span></nav>

    <section class="kilimanjaro-expedition jm-section" id="overview" aria-labelledby="overview-title">
        <div class="expedition-container">
            <div class="expedition-summary">
                <h2 class="schedule-heading" id="overview-title">Four days in Tarangire, Serengeti and Ngorongoro</h2>
                <p>Experience Tanzania’s wildlife on this <strong>4-day joining group safari to Tarangire National Park, Central Serengeti and Ngorongoro Crater</strong>. Share the safari vehicle and guide with fellow travellers while exploring three wildlife destinations from Arusha.</p>
                <p>Start with a Tarangire game drive and a night at <strong>Jua Manyara Budget Lodge in Mto wa Mbu</strong>. The following morning, continue through the Ngorongoro Highlands to Central Serengeti for an afternoon game drive and <strong>one night at Nyani Public Campsite</strong>.</p>
                <p>After your Serengeti morning game drive on Day 3, travel to the Ngorongoro Conservation Area and stay at <strong>Simba Public Campsite on the crater rim</strong>. On Day 4, descend into Ngorongoro Crater before returning to Arusha.</p>
                <p>Both public campsites have shared toilets and bathrooms. Deep Tanzania Tours provides camping tents, sleeping mattresses and sleeping bags upon request. Compare this itinerary with our other <a class="dt-internal-link" href="joining-groups.php">joining group safaris</a>.</p>
                <div class="jm-price"><strong>From $880 per person</strong><p>USD · 4 days / 3 nights · Budget lodge &amp; camping package<br>Confirm your travel date, camping requirements and group availability before booking.</p><div class="jm-actions"><a class="jm-button" href="../contact-us.php" data-four-day-enquiry>Request My Safari Dates</a><a class="jm-button jm-button-outline" href="#accommodation">See Accommodation</a></div></div>
                <div class="overview-features">
                    <div class="feature-box"><div class="feature-icon"><i class="fas fa-users" aria-hidden="true"></i></div><h3>4–6 Travellers</h3><p>Share your safari jeep with a small group.</p></div>
                    <div class="feature-box"><div class="feature-icon"><i class="fas fa-campground" aria-hidden="true"></i></div><h3>3 Safari Nights</h3><p>Jua Manyara lodge, Nyani campsite and Simba campsite.</p></div>
                    <div class="feature-box"><div class="feature-icon"><i class="fas fa-utensils" aria-hidden="true"></i></div><h3>Full-Board Meals</h3><p>Meals during your four-day safari itinerary.</p></div>
                    <div class="feature-box"><div class="feature-icon"><i class="fas fa-binoculars" aria-hidden="true"></i></div><h3>Three Destinations</h3><p>Tarangire, Central Serengeti and Ngorongoro Crater.</p></div>
                </div>
            </div>
        </div>
    </section>

    <section class="kilimanjaro-expedition jm-section" id="itinerary" aria-labelledby="itinerary-title">
        <div class="expedition-container">
            <h2 class="schedule-heading" id="itinerary-title">Your 4-day Tarangire, Serengeti and Ngorongoro itinerary</h2>
            <div class="trekking-schedule">
                <article class="trek-day">
                    <div class="day-header-section"><div class="day-indicator">Day 1</div><h3 class="day-title-text">Arusha → Tarangire → Mto wa Mbu</h3></div>
                    <div class="day-content-section">
                        <div class="day-description">
                            <p>We collect you from your Arusha hotel in the morning and bring you together with the other joining group members. The drive from Arusha to Tarangire’s gate takes approximately 2–2½ hours, depending on road and traffic conditions.</p>
                            <p>Enter the park for a morning game drive, looking out for Tarangire’s elephants and other wildlife. Depending on the season and animal movements, you may see herds gathering around water points. Sightings are part of the adventure and cannot be guaranteed.</p>
                            <p>Enjoy a picnic lunch, then continue game viewing into the late afternoon. Afterwards, travel to Mto wa Mbu for dinner and your overnight stay at Jua Manyara Budget Lodge.</p>
                        </div>
                    </div>
                    <div class="day-stats"><p><strong>Drive:</strong> Arusha to gate, approx. 2–2½ hours</p><p><strong>Meals:</strong> Lunch and dinner</p><p><strong>Stay:</strong> Jua Manyara Budget Lodge</p></div>
                </article>
                <article class="trek-day">
                    <div class="day-header-section"><div class="day-indicator">Day 2</div><h3 class="day-title-text">Mto wa Mbu → Central Serengeti</h3></div>
                    <div class="day-content-section">
                        <div class="day-description">
                            <p>After an early breakfast at Jua Manyara Budget Lodge in Mto wa Mbu, depart for Central Serengeti. Following your Tarangire visit on Day 1, today’s journey takes you through Karatu and the Ngorongoro Highlands towards the Serengeti plains.</p>
                            <p>Enjoy the highland landscapes along the way. Your guide will coordinate the journey, entry formalities and lunch stops according to road conditions and the day’s arrangements.</p>
                            <p>You will continue toward Naabi Hill Gate, the main entrance to Central Serengeti, arriving around the afternoon, depending on road conditions and stops along the way.</p>
                            <p>After completing the park entry formalities and enjoying your packed lunch, you will begin your afternoon game drive in the vast plains of Serengeti National Park.</p>
                            <p>Central Serengeti is particularly famous for its abundant wildlife, including lions, leopards, cheetahs, elephants, giraffes, zebras, and numerous antelope species. Your safari guide will explore different wildlife areas, searching for predators and other fascinating animals in their natural habitat.</p>
                            <p>As the afternoon comes to an end, you will head toward Nyani Public Campsite, where your camping team will prepare dinner.</p>
                            <p>Enjoy your first night in the heart of the Serengeti, surrounded by the sounds of the African wilderness.</p>
                        </div>

                    </div>
                    <div class="day-stats"><p><strong>Route:</strong> Mto wa Mbu to Central Serengeti</p><p><strong>Meals:</strong> Breakfast, lunch and dinner</p><p><strong>Stay:</strong> Nyani Public Campsite</p></div>
                </article>
                <article class="trek-day">
                    <div class="day-header-section"><div class="day-indicator">Day 3</div><h3 class="day-title-text">Central Serengeti → Ngorongoro Conservation Area</h3></div>
                    <div class="day-content-section">
                        <div class="day-description">
                            <p>After an early breakfast at the campsite, you will depart for a morning game drive in Central Serengeti.</p>
                            <p>The early morning hours offer excellent opportunities for wildlife viewing, as many animals are active before the temperatures rise.</p>
                            <p>Your guide will take you through different sections of the Serengeti, searching for lions, leopards, cheetahs, elephants, buffaloes, giraffes, and other wildlife.</p>
                            <p>The Serengeti&#x27;s endless plains and diverse ecosystems provide incredible opportunities for wildlife photography and memorable safari experiences.</p>
                            <p>After your morning game drive, you will enjoy lunch before beginning your journey toward the Ngorongoro Conservation Area.</p>
                            <p>Along the way, you may continue spotting wildlife as you travel through the Serengeti toward Naabi Hill Gate and the Ngorongoro Highlands.</p>
                            <p>You will arrive at <strong>Simba Public Campsite</strong>, located on the rim of Ngorongoro Crater, where you will spend the night.</p>
                            <p>This campsite offers a unique experience, with beautiful highland surroundings and cooler temperatures compared to the Serengeti plains.</p>
                            <p>Dinner will be prepared at the campsite, followed by an overnight stay in your camping tent.</p>
                        </div>

                    </div>
                    <div class="day-stats"><p><strong>Activity:</strong> Morning game drive and transfer</p><p><strong>Meals:</strong> Breakfast, lunch and dinner</p><p><strong>Stay:</strong> Simba Public Campsite</p></div>
                </article>
                <article class="trek-day">
                    <div class="day-header-section"><div class="day-indicator">Day 4</div><h3 class="day-title-text">Ngorongoro Crater Game Drive → Arusha</h3></div>
                    <div class="day-content-section">
                        <div class="day-description">
                            <p>Your final safari day begins with an early breakfast at Simba Public Campsite before descending into the magnificent Ngorongoro Crater for an unforgettable wildlife experience.</p>
                            <p>Ngorongoro Crater is the <strong>world&#x27;s largest intact, unfilled volcanic caldera</strong> and one of Africa&#x27;s most remarkable wildlife destinations.</p>
                            <p>The crater floor supports an extraordinary concentration of wildlife, making it one of the best places in Tanzania to observe different animal species within a relatively small area.</p>
                            <p>During your game drive, you will have opportunities to encounter lions, elephants, buffaloes, zebras, wildebeests, hippos, hyenas, and numerous antelope species.</p>
                            <p>The <a class="dt-internal-link" href="../safari-articles/ngorongoro-crater-safari-guide.php">crater</a> is also home to the endangered black rhinoceros, although sightings are never guaranteed.</p>
                            <p>Bird enthusiasts can enjoy spotting various bird species, including secretary birds, flamingos, and other birds found around the crater&#x27;s grasslands, wetlands, and lakes.</p>
                            <p>Your experienced safari guide will explore different sections of the crater floor, helping you discover its fascinating wildlife and beautiful scenery.</p>
                            <p>Around midday, you will stop at a designated picnic area to enjoy your packed lunch while surrounded by the spectacular crater landscape.</p>
                            <p>Depending on the available time and park regulations, you may continue with a short game drive before ascending the crater walls and beginning your journey back to Arusha.</p>
                            <p>You will arrive in Arusha later in the afternoon or evening, depending on traffic and road conditions.</p>
                            <p>Your guide will drop you off at your hotel or another agreed location in Arusha, marking the end of your memorable <strong>4-day Tarangire, Serengeti and Ngorongoro joining group safari</strong>.</p>
                        </div>

                    </div>
                    <div class="day-stats"><p><strong>Finish:</strong> Arusha hotel or agreed drop-off</p><p><strong>Meals:</strong> Breakfast and lunch</p><p><strong>Stay:</strong> Not included · end of safari</p></div>
                </article>
            </div>
            <div class="jm-actions"><a class="jm-button" href="../contact-us.php" data-four-day-enquiry>Join This Four-Day Safari</a></div>
        </div>
    </section>

    <section class="section accommodation-section" id="accommodation" aria-labelledby="accommodation-title">
        <div class="container">
            <div class="section-title"><span class="subtitle">Your Camping Experience</span><h2 id="accommodation-title">Safari Accommodation &amp; Camping Equipment</h2><p>One night at Jua Manyara Budget Lodge, one night in Central Serengeti and one night on the Ngorongoro Crater rim.</p></div>
            <div class="accommodation-container">
                <div class="accommodation-card">
                    <div class="accommodation-image jm-lodge-photo" data-lodge-gallery role="region" aria-roledescription="carousel" aria-label="Jua Manyara Budget Lodge photos" tabindex="0">
                        <div class="jm-gallery-slides" id="jua-manyara-slides">
                            <img class="jm-gallery-image" data-gallery-slide src="../img/jua-manyara-3.jpg" alt="Garden and greenery viewed from the lodge veranda at Jua Manyara" width="900" height="500" loading="lazy">
                            <img class="jm-gallery-image" data-gallery-slide src="../img/jua-manyara-2.jpg" alt="Guest accommodation and veranda at Jua Manyara Budget Lodge" width="900" height="500" loading="lazy" hidden>
                            <img class="jm-gallery-image" data-gallery-slide src="../img/jua-manyara-1.jpg" alt="Bedroom with a four-poster bed and mosquito net at Jua Manyara" width="1000" height="750" loading="lazy" hidden>
                        </div>
                        <button class="jm-gallery-arrow jm-gallery-prev" data-gallery-prev type="button" aria-label="Previous lodge photo" aria-controls="jua-manyara-slides" hidden><i class="fas fa-chevron-left" aria-hidden="true"></i></button>
                        <button class="jm-gallery-arrow jm-gallery-next" data-gallery-next type="button" aria-label="Next lodge photo" aria-controls="jua-manyara-slides" hidden><i class="fas fa-chevron-right" aria-hidden="true"></i></button>
                        <span class="jm-gallery-counter" data-gallery-counter role="status" aria-live="polite" aria-atomic="true">Photo 1 of 3</span>
                        <div class="accommodation-location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i><span>Mto wa Mbu, Tanzania</span></div>
                        <div class="image-overlay"><a href="https://juamanyara.com/" target="_blank" rel="noopener" class="view-website-btn"><i class="fas fa-external-link-alt" aria-hidden="true"></i> View Lodge Website</a></div>
                    </div>
                    <div class="accommodation-content">
                        <span class="jm-lodge-label">Included · Night 1 · Mto wa Mbu</span>
                        <h3>Jua Manyara Budget Lodge</h3>
                        <p class="accommodation-description">Your first night is at Jua Manyara Budget Lodge in Mto wa Mbu after the Tarangire game drive. Enjoy dinner and an overnight stay before breakfast and departure for Central Serengeti on Day 2. Room arrangements are confirmed for your own travelling party when you book.</p>
                        <div class="accommodation-features">
                            <div class="feature"><i class="fas fa-bed" aria-hidden="true"></i><span>One overnight stay</span></div>
                            <div class="feature"><i class="fas fa-user" aria-hidden="true"></i><span>Single room for solo travellers</span></div>
                            <div class="feature"><i class="fas fa-users" aria-hidden="true"></i><span>Rooms for your own party</span></div>
                            <div class="feature"><i class="fas fa-utensils" aria-hidden="true"></i><span>Dinner and breakfast</span></div>
                        </div>
                    </div>
                </div>
                <article class="accommodation-card" id="nyani-public-campsite" aria-labelledby="nyani-title">
                    <div class="accommodation-image jm-lodge-photo" data-lodge-gallery role="region" aria-roledescription="carousel" aria-label="Nyani Public Campsite photos" tabindex="0">
                        <div class="jm-gallery-slides" id="nyani-slides">
                            <img class="jm-gallery-image" data-gallery-slide src="../img/nyani-public-campsite-serengeti.jpg" alt="Nyani Public Campsite in Serengeti" loading="lazy">
                            <img class="jm-gallery-image" data-gallery-slide src="../img/nyani-public-campsite-cooking-area.jpg" alt="Cooking area at Nyani Public Campsite" loading="lazy" hidden>
                        </div>
                        <button class="jm-gallery-arrow jm-gallery-prev" data-gallery-prev type="button" aria-label="Previous Nyani Public Campsite photo" aria-controls="nyani-slides" hidden><i class="fas fa-chevron-left" aria-hidden="true"></i></button>
                        <button class="jm-gallery-arrow jm-gallery-next" data-gallery-next type="button" aria-label="Next Nyani Public Campsite photo" aria-controls="nyani-slides" hidden><i class="fas fa-chevron-right" aria-hidden="true"></i></button>
                        <span class="jm-gallery-counter" data-gallery-counter role="status" aria-live="polite" aria-atomic="true">Photo 1 of 2</span>
                        <div class="accommodation-location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i><span>Central Serengeti</span></div>
                    </div>
                    <div class="accommodation-content">
                        <span class="jm-lodge-label">Included · Night 2 · Central Serengeti</span>
                        <h3 id="nyani-title">Nyani Public Campsite</h3>
                        <p class="accommodation-description">After your afternoon game drive on Day 2, settle into Nyani Public Campsite in Central Serengeti. Enjoy dinner prepared by the camping team and a night in your tent, with the sounds of the Serengeti wilderness around you.</p>
                        <div class="accommodation-features">
                            <div class="feature"><i class="fas fa-campground" aria-hidden="true"></i><span>Tents &amp; sleeping mattresses provided</span></div>
                            <div class="feature"><i class="fas fa-bed" aria-hidden="true"></i><span>Sleeping bags upon request</span></div>
                            <div class="feature"><i class="fas fa-shower" aria-hidden="true"></i><span>Shared toilets &amp; bathrooms</span></div>
                            <div class="feature"><i class="fas fa-utensils" aria-hidden="true"></i><span>Dinner &amp; breakfast prepared by the team</span></div>
                        </div>
                    </div>
                </article>
                <article class="accommodation-card" id="simba-public-campsite" aria-labelledby="simba-title">
                    <div class="accommodation-image jm-lodge-photo" data-lodge-gallery role="region" aria-roledescription="carousel" aria-label="Simba Public Campsite photos" tabindex="0">
                        <div class="jm-gallery-slides" id="simba-slides">
                            <img class="jm-gallery-image" data-gallery-slide src="../img/simba-public-campsite.jpg" alt="Simba Public Campsite" loading="lazy">
                            <img class="jm-gallery-image" data-gallery-slide src="../img/campground-simba-public-campsite.jpg" alt="Campground at Simba Public Campsite" loading="lazy" hidden>
                            <img class="jm-gallery-image" data-gallery-slide src="../img/simba-camsite.jpg" alt="Camping area at Simba Public Campsite" loading="lazy" hidden>
                        </div>
                        <button class="jm-gallery-arrow jm-gallery-prev" data-gallery-prev type="button" aria-label="Previous Simba Public Campsite photo" aria-controls="simba-slides" hidden><i class="fas fa-chevron-left" aria-hidden="true"></i></button>
                        <button class="jm-gallery-arrow jm-gallery-next" data-gallery-next type="button" aria-label="Next Simba Public Campsite photo" aria-controls="simba-slides" hidden><i class="fas fa-chevron-right" aria-hidden="true"></i></button>
                        <span class="jm-gallery-counter" data-gallery-counter role="status" aria-live="polite" aria-atomic="true">Photo 1 of 3</span>
                        <div class="accommodation-location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i><span>Ngorongoro Crater Rim</span></div>
                    </div>
                    <div class="accommodation-content">
                        <span class="jm-lodge-label">Included · Night 3 · Ngorongoro Crater Rim</span>
                        <h3 id="simba-title">Simba Public Campsite</h3>
                        <p class="accommodation-description">After your Serengeti morning game drive and transfer on Day 3, stay at Simba Public Campsite on the Ngorongoro Crater rim. Enjoy dinner and an overnight stay in your tent before descending into the crater the next morning.</p>
                        <p class="accommodation-description">The highlands are cooler than the Serengeti plains, so bring warm clothing for the evening and early morning.</p>
                        <div class="accommodation-features">
                            <div class="feature"><i class="fas fa-campground" aria-hidden="true"></i><span>Tents &amp; sleeping mattresses provided</span></div>
                            <div class="feature"><i class="fas fa-bed" aria-hidden="true"></i><span>Sleeping bags upon request</span></div>
                            <div class="feature"><i class="fas fa-shower" aria-hidden="true"></i><span>Shared toilets &amp; bathrooms</span></div>
                            <div class="feature"><i class="fas fa-utensils" aria-hidden="true"></i><span>Dinner &amp; early breakfast prepared by the team</span></div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="accommodation-note"><div class="note-icon"><i class="fas fa-info-circle" aria-hidden="true"></i></div><div>
                <p>Deep Tanzania Tours provides the necessary camping equipment, including tents, sleeping mattresses and sleeping bags upon request. You are also welcome to bring your own sleeping bag. Our team handles campsite arrangements and meal preparation so you can enjoy your wildlife adventure.</p>
                <p class="note-sub">Both campsites have shared toilet and bathroom facilities. Confirm your camping and sleeping bag requirements before departure.</p>
                <div class="jm-actions"><a class="jm-button jm-button-outline" href="../contact-us.php" data-four-day-enquiry="Please confirm camping equipment and sleeping bag availability.">Ask About Camping Equipment</a></div>
            </div></div>
        </div>
    </section>

    <section class="section inclusion-exclusion-section" id="inclusions" aria-labelledby="inclusions-title">
        <div class="container">
            <div class="section-title"><span class="subtitle">Package Details</span><h2 id="inclusions-title">What Is Included &amp; Excluded</h2><p>Know what your budget joining safari covers before you travel.</p></div>
            <div class="inclusion-exclusion-container">
                <div class="inclusion-box">
                    <div class="ie-header"><div class="ie-icon include"><i class="fas fa-check-circle" aria-hidden="true"></i></div><h3>Inclusions</h3><p>The core services for your four-day group safari</p></div>
                    <div class="ie-content"><div class="ie-column">
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Shared Safari Jeep &amp; Guide</h4><p>A shared safari vehicle for 4–6 clients with an English-speaking safari guide.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Park &amp; Crater Fees</h4><p>Tarangire and Serengeti National Park entry, plus Ngorongoro Conservation Area entry and crater service fees for the shared itinerary.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>One Lodge Night, Two Camping Nights &amp; Equipment</h4><p>Jua Manyara Budget Lodge on Night 1, Nyani Public Campsite on Night 2 and Simba Public Campsite on Night 3. Tents, sleeping mattresses and sleeping bags upon request are provided for the camping nights.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Full-Board Safari Meals</h4><p>Day 1 lunch and dinner; Days 2 and 3 breakfast, lunch and dinner; Day 4 breakfast and lunch.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Tarangire, Serengeti &amp; Ngorongoro Game Drives</h4><p>Tarangire on Day 1, Serengeti on Days 2 and 3, and Ngorongoro Crater on Day 4.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Arusha Hotel Pickup &amp; Return</h4><p>Morning pickup from your Arusha hotel on Day 1; return to your hotel or another agreed Arusha location on Day 4. The pickup time is confirmed before departure.</p></div></div>
                    </div></div>
                </div>
                <div class="exclusion-box">
                    <div class="ie-header"><div class="ie-icon exclude"><i class="fas fa-times-circle" aria-hidden="true"></i></div><h3>Exclusions</h3><p>Optional services quoted separately from the base price</p></div>
                    <div class="ie-content"><div class="ie-column">
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-times" aria-hidden="true"></i></div><div class="ie-text"><h4>Airport Transfers</h4><p>Available on request for an additional USD 50.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-times" aria-hidden="true"></i></div><div class="ie-text"><h4>Arusha Hotels Before or After Safari</h4><p>Budget or mid-range rooms can be arranged from approximately USD 50–100 per room, depending on hotel and occupancy.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-times" aria-hidden="true"></i></div><div class="ie-text"><h4>Moshi-to-Arusha Transfer</h4><p>An early morning transfer from Moshi is an additional USD 100.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-times" aria-hidden="true"></i></div><div class="ie-text"><h4>Personal Expenses &amp; Optional Activities</h4><p>Personal purchases, guide and crew tips, travel insurance, visas and activities outside the agreed itinerary.</p></div></div>
                    </div></div>
                </div>
            </div>
            <div class="ie-note"><p><strong>Tell us what you need:</strong> Share your dates, number of travellers, camping equipment requirements, any food allergies and additional transfer or hotel requirements. We will confirm your package and optional costs before booking.</p><div class="jm-actions"><a class="jm-button" href="../contact-us.php" data-four-day-enquiry>Check Availability &amp; Final Price</a></div></div>
        </div>
    </section>

    <section class="blog-article-section" id="airport-pickup" aria-labelledby="airport-pickup-title">
        <div class="container">
            <div class="article-content">
                <h2 id="airport-pickup-title">Safari Airport Pickup Information</h2>
                <p>Your Tanzanian adventure begins the moment you land. Deep Tanzania Tours can arrange an airport pickup and transfer to your hotel in Arusha before your joining group safari.</p>
                <p><strong>Airport transfers are optional and charged separately:</strong> an airport transfer is available on request for an additional USD 50. Your pre- or post-safari hotel in Arusha is also separate from the safari package.</p>
                <div class="day-images">
                    <img src="../img/airport-transfer.jpg" alt="Airport Meet and Greet Service" loading="lazy">
                    <img src="../img/transfer-from-airport-vehicle.jpg" alt="Comfortable Safari Transfer Vehicle" loading="lazy">
                </div>
                <p>When you book an airport pickup, we can arrange:</p>
                <ul>
                    <li><strong>Meet &amp; Greet:</strong> Our representative will be waiting for you in the arrivals hall with a sign bearing your name.</li>
                    <li><strong>Assisted Luggage Handling:</strong> We help with your luggage and guide you to your waiting vehicle.</li>
                    <li><strong>Comfortable Transfers:</strong> A direct transfer in a clean, private vehicle to your hotel in Arusha.</li>
                    <li><strong>Safari Preparation:</strong> We confirm your hotel details and the morning pickup for the start of your Tarangire, Serengeti and Ngorongoro safari.</li>
                    <li><strong>Flight Timing:</strong> Share your arrival time so we can coordinate the airport pickup. We recommend spending the night before the safari in Arusha for the early departure.</li>
                    <li><strong>Return Transfers:</strong> An airport transfer after the safari can be arranged separately on request. Confirm your flight time with us before booking, as the Day 4 return to Arusha may be in the afternoon or evening.</li>
                </ul>
                <p>Please provide your arrival airport, flight number, arrival date and time, and Arusha hotel details in advance so we can confirm your pickup and transfer quote.</p>
                <div class="jm-actions"><a class="jm-button" href="../contact-us.php" data-four-day-enquiry="Please also arrange an airport pickup and confirm the transfer quote for my flight and Arusha hotel.">Arrange My Airport Pickup</a></div>
            </div>
        </div>
    </section>

    <section class="jm-section jm-extras" id="travel-arrangements" aria-labelledby="extras-title">
        <div class="jm-reading">
            <h2 id="extras-title">Airport Transfers, Arusha Hotels &amp; Moshi Departures</h2>
            <p>If you are arriving before the safari or continuing your holiday afterwards, we can help arrange the extra transport and accommodation you need. These services are optional and are separate from the safari price.</p>
            <div class="seasons-table-container"><table class="seasons-table"><caption>Optional arrangements in USD; confirm the final quote with your travel details.</caption><thead><tr><th scope="col">Service</th><th scope="col">Additional cost</th><th scope="col">Planning details</th></tr></thead><tbody>
                <tr><th scope="row">Airport transfer</th><td>USD 50</td><td>Share your airport, flight details and destination hotel when enquiring.</td></tr>
                <tr><th scope="row">Pre- or post-safari Arusha hotel</th><td>Approx. USD 50–100 per room</td><td>Depends on the hotel selected, room occupancy and budget or mid-range preference.</td></tr>
                <tr><th scope="row">Early Moshi-to-Arusha transfer</th><td>USD 100</td><td>Arrange in advance to meet the Arusha safari departure.</td></tr>
                <tr><th scope="row">Alternative accommodation or private itinerary</th><td>Quote on request</td><td>Discuss a separate safari arrangement if you prefer a lodge to public campsite camping.</td></tr>
            </tbody></table></div>
            <p><strong>Staying in Moshi?</strong> We recommend spending the night before the safari in Arusha for an easier start. If you prefer the early morning transfer, tell us your Moshi hotel so we can coordinate the pickup.</p>
            <p><strong>Food allergies or dietary requirements?</strong> Please tell us in advance. We will discuss your needs with you and coordinate meal arrangements before your departure.</p>
            <div class="jm-actions"><a class="jm-button" href="../contact-us.php" data-four-day-enquiry="Please also quote my transfers and pre- or post-safari hotel.">Plan My Transfers &amp; Stay</a></div>
        </div>
    </section>

    <section class="jm-section jm-faq" id="frequently-asked-questions" aria-labelledby="faq-title">
        <div class="jm-reading"><h2 id="faq-title">4-Day Joining Safari: Frequently Asked Questions</h2>
            <?php foreach ($faqs as $faq): ?>
            <details><summary><?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?></summary><p><?= htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8') ?></p></details>
            <?php endforeach; ?>
            <div class="jm-actions"><a class="jm-button" href="../contact-us.php" data-four-day-enquiry>Enquire About My Dates</a><a class="jm-button jm-button-outline" href="joining-groups.php">All Joining Group Safaris</a></div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../plugins-folder/call-to-action.php'; ?>
<?php include __DIR__ . '/../plugins-folder/pop-up-expert.php'; ?>
<?php include __DIR__ . '/../plugins-folder/footer.php'; ?>
<?php include __DIR__ . '/../plugins-folder/booking-form.php'; ?>
<?php include __DIR__ . '/../plugins-folder/mobile-footer.php'; ?>
<script>
(function () {
    document.querySelectorAll('[data-four-day-enquiry]').forEach(function (link) {
        link.addEventListener('click', function (event) {
            if (typeof window.openBookingPopup !== 'function') return;
            event.preventDefault();
            var packageType = document.getElementById('popup-package-type');
            var message = document.getElementById('popup-special-requests');
            if (packageType && !packageType.value) packageType.value = 'Safari Adventure';
            if (message && !message.value.trim()) message.value = 'I am interested in the 4-Day Tarangire, Serengeti and Ngorongoro Crater Joining Group Safari, from USD 880 per person, with Jua Manyara Budget Lodge and Nyani and Simba Public Campsites. Please confirm my dates, group availability and camping equipment requirements. ' + (link.getAttribute('data-four-day-enquiry') || '');
            window.openBookingPopup();
            var name = document.getElementById('popup-full-name');
            if (name) name.focus();
        });
    });
})();
</script>
</body>
</html>
