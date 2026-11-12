<?php
$pageUrl = 'https://deeptanzaniatours.com/joining-group-safaris/4-day-serengeti-ngorongoro-joining-group-safari.php';
$pageTitle = '4-Day Serengeti & Ngorongoro Crater Joining Group Safari';
$pageDescription = 'Join a 4-day Serengeti and Ngorongoro Crater camping safari from Arusha. Two nights in Central Serengeti, one on the crater rim and a full Serengeti day. From USD 960.';
$faqs = [
    ['question' => 'How much is the 4-day Serengeti and Ngorongoro joining safari?', 'answer' => 'The camping package starts from USD 960 per person, matching our listed four-day safari with two Serengeti nights. Share your travel dates and number of travellers to confirm the final price and group availability.'],
    ['question' => 'How many nights do we spend in Serengeti?', 'answer' => 'You spend two nights at Nyani Public Campsite in Central Serengeti. This gives you an afternoon game drive on Day 1, a full day of Serengeti wildlife viewing on Day 2 and another morning game drive on Day 3 before travelling to Ngorongoro.'],
    ['question' => 'Where do we stay on the third night?', 'answer' => 'Night 3 is at Simba Public Campsite on the Ngorongoro Crater rim. Both Nyani and Simba have shared toilets and bathrooms. Deep Tanzania Tours provides tents and sleeping mattresses, with sleeping bags available upon request. You may bring your own sleeping bag.'],
    ['question' => 'What time is pickup in Arusha?', 'answer' => 'Pickup from your Arusha hotel is at approximately 6:30 AM on Day 1. The drive to Naabi Hill Gate takes approximately 7–8 hours, depending on road conditions and stops. Please share your hotel details before departure.'],
    ['question' => 'Which meals are included?', 'answer' => 'Day 1 includes lunch and dinner. Days 2 and 3 include breakfast, lunch and dinner. Day 4 includes breakfast and lunch. Please tell us about food allergies or dietary requirements before booking.'],
    ['question' => 'Can the safari include Ndutu during calving season?', 'answer' => 'From late December to March, a seasonal variation may allow approximately 3–4 hours of wildlife viewing in Ndutu while travelling towards Central Serengeti. It depends on wildlife movements, road conditions and the group schedule, requires advance confirmation and may involve changes to the standard itinerary.'],
    ['question' => 'Is a Northern Serengeti extension included?', 'answer' => 'No. Between July and September you may request an optional Northern Serengeti extension. It requires extra travel time, advance planning and an additional cost. Feasibility and price depend on your dates, group arrangements and available time; a separate itinerary may be recommended. Wildlife movements and river crossings cannot be guaranteed.'],
    ['question' => 'Are airport transfers and Arusha hotels included?', 'answer' => 'Airport transfers and hotels in Arusha before or after the safari are excluded, but can be arranged separately on request. Pickup from your Arusha hotel and return to your hotel or another agreed Arusha location are included.'],
];
$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        ['@type' => 'TouristTrip', '@id' => $pageUrl . '#trip', 'name' => $pageTitle, 'description' => $pageDescription, 'url' => $pageUrl, 'image' => 'https://deeptanzaniatours.com/img/serengeti-safari-banner-from-arusha.jpg', 'touristType' => 'Budget small-group safari travellers', 'provider' => ['@type' => 'TravelAgency', 'name' => 'Deep Tanzania Tours', 'url' => 'https://deeptanzaniatours.com/'], 'offers' => ['@type' => 'Offer', 'price' => '960', 'priceCurrency' => 'USD', 'url' => $pageUrl, 'description' => 'Budget package per person; final price and group availability confirmed on enquiry.'], 'itinerary' => ['@type' => 'ItemList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Day 1: Arusha to Central Serengeti; afternoon game drive and overnight at Nyani Public Campsite'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Day 2: Full-day Central Serengeti game drive; second night at Nyani Public Campsite'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Day 3: Serengeti morning game drive; transfer to Simba Public Campsite on the Ngorongoro Crater rim'],
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
<?php require_once __DIR__ . '/../plugins/google-tag.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4-Day Serengeti &amp; Ngorongoro Group Safari | From $960</title>
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


</head>
<body class="joining-multiday serengeti-joining">
<?php include __DIR__ . '/../plugins-folder/header.php'; ?>

<div class="dtt-join-page">
    <section class="dtt-join-hero" aria-labelledby="safari-title">
        <img class="dtt-join-image" src="../img/serengeti-safari-banner-from-arusha.jpg" alt="Serengeti National Park safari landscape" fetchpriority="high">
        <div class="dtt-join-shade" aria-hidden="true"></div>
        <div class="dtt-join-hero-inner">
            <span class="dtt-join-kicker">SHARED WILDLIFE ADVENTURES</span>
            <h1 id="safari-title">4-Day Serengeti &amp; Ngorongoro Crater Joining Group Safari</h1>
            <p class="dtt-join-lead">Two nights in Central Serengeti, a full day exploring its wildlife and a Ngorongoro Crater safari, with three public campsite nights from Arusha.</p>
            <div class="dtt-join-hero-buttons">
            <a class="dtt-join-button dtt-join-button-primary" href="#itinerary">View the Itinerary</a>
            <a class="dtt-join-button dtt-join-button-secondary" href="../contact-us.php" data-four-day-enquiry>Check Dates &amp; Join</a>
        </div>
        </div>
    </section>
</div>

<main>
    <nav class="jm-breadcrumb" aria-label="Breadcrumb"><a href="../index.php">Home</a> / <a href="joining-groups.php">Joining Group Safaris</a> / <span aria-current="page">4-Day Serengeti &amp; Ngorongoro</span></nav>

    <section class="kilimanjaro-expedition jm-section" id="overview" aria-labelledby="overview-title">
        <div class="expedition-container">
            <div class="expedition-summary">
                <h2 class="schedule-heading" id="overview-title">Four days in Serengeti and Ngorongoro, with more time on the plains</h2>
                            <p>Experience an unforgettable <strong>4-day joining group camping safari in Tanzania</strong>, exploring two of Africa&#x27;s most spectacular wildlife destinations: Serengeti National Park and Ngorongoro Crater.</p>
                            <p>This affordable group safari is designed for travelers who want to experience the incredible wildlife of Tanzania while sharing a safari vehicle with other adventurers. Each group typically consists of <strong>4 to 6 travelers</strong>, allowing everyone to enjoy excellent wildlife viewing opportunities.</p>
                            <p>Unlike shorter safari itineraries, this 4-day adventure includes <strong>two nights in Central Serengeti</strong>, giving you an entire day to explore the park&#x27;s vast plains and search for its remarkable wildlife.</p>
                            <p>Your safari includes two nights at Nyani Public Campsite in Central Serengeti and one night at Simba Public Campsite on the Ngorongoro Crater rim.</p>
                            <p>Depending on your travel dates, the itinerary may also offer seasonal wildlife-viewing opportunities in the Ndutu area or an optional extension toward Northern Serengeti.</p>
                <div class="jm-price"><strong>From $960 per person</strong><p>USD · 4 days / 3 nights · Public campsite package<br>Confirm your travel date, camping requirements and group availability before booking.</p><div class="jm-actions"><a class="jm-button" href="../contact-us.php" data-four-day-enquiry>Request My Safari Dates</a><a class="jm-button jm-button-outline" href="#accommodation">See Accommodation</a></div></div>
                <div class="overview-features">
                    <div class="feature-box"><div class="feature-icon"><i class="fas fa-users" aria-hidden="true"></i></div><h3>4–6 Travellers</h3><p>Share your safari jeep with a small group.</p></div>
                    <div class="feature-box"><div class="feature-icon"><i class="fas fa-campground" aria-hidden="true"></i></div><h3>3 Camping Nights</h3><p>Two nights at Nyani in Serengeti, one at Simba on the crater rim.</p></div>
                    <div class="feature-box"><div class="feature-icon"><i class="fas fa-utensils" aria-hidden="true"></i></div><h3>Full-Board Meals</h3><p>Meals during your four-day safari itinerary.</p></div>
                    <div class="feature-box"><div class="feature-icon"><i class="fas fa-binoculars" aria-hidden="true"></i></div><h3>Two Destinations</h3><p>Central Serengeti and Ngorongoro Crater.</p></div>
                </div>
            </div>
        </div>
    </section>

    <section class="kilimanjaro-expedition jm-section" id="itinerary" aria-labelledby="itinerary-title">
        <div class="expedition-container">
            <h2 class="schedule-heading" id="itinerary-title">Your 4-day Serengeti and Ngorongoro itinerary</h2>
            <div class="trekking-schedule">
                <article class="trek-day">
                    <div class="day-header-section"><div class="day-indicator">Day 1</div><h3 class="day-title-text">Arusha → Central Serengeti · Afternoon Game Drive</h3></div>
                    <div class="day-content-section">
                        <div class="day-description">
                            <p>Your safari begins with an early morning pickup from your hotel in Arusha at approximately <strong>6:30 AM</strong>. After meeting your professional safari guide and fellow group members, you will begin your journey toward the world-famous Serengeti National Park.</p>
                            <p>The drive takes approximately 7–8 hours to reach Naabi Hill Gate, passing through the scenic Ngorongoro Highlands and the beautiful landscapes of the Ngorongoro Conservation Area.</p>
                            <p>Along the way, you will enjoy breathtaking views of the surrounding countryside and highland scenery before continuing toward the endless plains of the Serengeti.</p>
                            <p>Upon arrival at Naabi Hill Gate, you will stop for a packed lunch at the designated picnic area while your guide completes the necessary park entry formalities.</p>
                            <p>After lunch, your adventure continues with an afternoon game drive in Central Serengeti.</p>
                            <p>This region is renowned for its remarkable concentration of wildlife, including lions, leopards, cheetahs, elephants, giraffes, buffaloes, zebras, and numerous antelope species.</p>
                            <p>Your guide will explore different wildlife areas, searching for predators and other animals while introducing you to the Serengeti&#x27;s fascinating ecosystem.</p>
                            <p>As the afternoon comes to an end, you will proceed to Nyani Public Campsite, located in Central Serengeti, where dinner will be prepared.</p>
                            <p>Enjoy your first night camping in the heart of the African wilderness.</p>
                        </div>
                    </div>
                    <div class="day-stats"><p><strong>Pickup:</strong> Approx. 6:30 AM · Arusha hotel</p><p><strong>Meals:</strong> Lunch and dinner</p><p><strong>Stay:</strong> Nyani Public Campsite</p></div>
                </article>
                <article class="trek-day">
                    <div class="day-header-section"><div class="day-indicator">Day 2</div><h3 class="day-title-text">Full-Day Game Drive in Central Serengeti</h3></div>
                    <div class="day-content-section">
                        <div class="day-description">
                            <p>Today is one of the highlights of your safari, as you will have an entire day dedicated to exploring the incredible landscapes and wildlife of Serengeti National Park.</p>
                            <p>After an early breakfast at the campsite, you will depart for a full-day game drive with your experienced safari guide.</p>
                            <p>Having a full day in the Serengeti provides a wonderful opportunity to explore different wildlife habitats and increase your chances of observing a variety of animals in their natural environment.</p>
                            <p>Central Serengeti, particularly the Seronera Valley, is famous for its resident wildlife and excellent opportunities to encounter big cats such as lions, leopards, and cheetahs.</p>
                            <p>Throughout the day, your guide will search for wildlife across the open plains, river valleys, and surrounding woodland areas.</p>
                            <p>You may encounter elephants, buffaloes, giraffes, zebras, wildebeests, hyenas, and numerous antelope species.</p>
                            <p>Depending on wildlife movements, road conditions, and available time, your guide may explore additional areas beyond the central region to maximize your safari experience.</p>
                            <p>You will enjoy a packed lunch at a suitable picnic area before continuing your afternoon game drive.</p>
                            <p>After a rewarding day of wildlife viewing and photography, you will return to Nyani Public Campsite for dinner and your second overnight stay.</p>
                        </div>
                    </div>
                    <div class="day-stats"><p><strong>Activity:</strong> Full-day Serengeti game drive</p><p><strong>Meals:</strong> Breakfast, lunch and dinner</p><p><strong>Stay:</strong> Nyani Public Campsite</p></div>
                </article>
                <article class="trek-day">
                    <div class="day-header-section"><div class="day-indicator">Day 3</div><h3 class="day-title-text">Serengeti Morning Game Drive → Ngorongoro Crater Rim</h3></div>
                    <div class="day-content-section">
                        <div class="day-description">
                            <p>After breakfast at the campsite, you will begin another exciting morning game drive in Central Serengeti.</p>
                            <p>The morning hours provide excellent opportunities to observe wildlife while temperatures are still relatively cool.</p>
                            <p>Your guide will explore different areas of the park, searching for predators, grazing animals, and other fascinating wildlife that may have been missed during the previous day&#x27;s game drive.</p>
                            <p>This final Serengeti game drive gives you another chance to appreciate the park&#x27;s spectacular landscapes and diverse animal populations.</p>
                            <p>After enjoying lunch, you will begin your journey toward the Ngorongoro Conservation Area.</p>
                            <p>You will travel through the Serengeti plains toward Naabi Hill Gate before continuing through the beautiful Ngorongoro Highlands.</p>
                            <p>The scenery gradually changes from the open grasslands of Serengeti to the lush highland landscapes surrounding Ngorongoro Crater.</p>
                            <p>Later in the afternoon or early evening, you will arrive at <strong>Simba Public Campsite</strong>, situated on the rim of Ngorongoro Crater.</p>
                            <p>The campsite offers a peaceful highland environment and a unique opportunity to spend the night close to one of Africa&#x27;s most extraordinary natural wonders.</p>
                            <p>Dinner will be served at the campsite, followed by an overnight stay in your camping tent.</p>
                        </div>
                    </div>
                    <div class="day-stats"><p><strong>Activity:</strong> Morning game drive and transfer</p><p><strong>Meals:</strong> Breakfast, lunch and dinner</p><p><strong>Stay:</strong> Simba Public Campsite</p></div>
                </article>
                <article class="trek-day">
                    <div class="day-header-section"><div class="day-indicator">Day 4</div><h3 class="day-title-text">Ngorongoro Crater Game Drive → Arusha</h3></div>
                    <div class="day-content-section">
                        <div class="day-description">
                            <p>Your final safari day begins with an early breakfast at approximately <strong>6:30 AM</strong> at Simba Public Campsite.</p>
                            <p>At around 7:00 AM, you will depart for the Ngorongoro Crater descent, where you will experience one of Tanzania&#x27;s most remarkable wildlife destinations.</p>
                            <p>Ngorongoro Crater is the world&#x27;s largest intact, unfilled volcanic caldera and is recognized for its exceptional concentration of wildlife.</p>
                            <p>As you descend approximately 600 meters to the crater floor, you will be surrounded by breathtaking scenery and diverse natural habitats, including grasslands, forests, wetlands, and lakes.</p>
                            <p>Your experienced safari guide will take you through different sections of the crater, searching for its remarkable wildlife.</p>
                            <p>The crater is home to lions, elephants, buffaloes, zebras, wildebeests, hippos, hyenas, and numerous bird species.</p>
                            <p>One of the most exciting possibilities is spotting the endangered <strong>black rhinoceros</strong>, although sightings depend on wildlife movements and cannot be guaranteed.</p>
                            <p>During your game drive, you may also encounter flamingos, secretary birds, and other bird species around the crater&#x27;s lakes and grasslands.</p>
                            <p>Around midday, you will stop at a designated picnic area to enjoy your packed lunch while admiring the spectacular natural surroundings.</p>
                            <p>After lunch, depending on the available time and park regulations, you will ascend the crater walls and begin your return journey to Arusha.</p>
                            <p>You will arrive in Arusha later in the afternoon or evening, where your safari guide will drop you off at your hotel or another agreed location.</p>
                            <p>This marks the end of your memorable <strong>4-day Serengeti and Ngorongoro joining group safari</strong>.</p>
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
            <div class="section-title"><span class="subtitle">Your Camping Experience</span><h2 id="accommodation-title">Safari Accommodation &amp; Camping Equipment</h2><p>Three public campsite nights: two in Central Serengeti and one on the Ngorongoro Crater rim.</p></div>
            <div class="accommodation-container">
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
                        <span class="jm-lodge-label">Included · Nights 1 &amp; 2 · Central Serengeti</span>
                        <h3 id="nyani-title">Nyani Public Campsite</h3>
                        <p class="accommodation-description">Stay at Nyani Public Campsite in Central Serengeti on Nights 1 and 2. After your arrival game drive on Day 1, enjoy dinner and your first night in your tent. Return here after the full-day game drive on Day 2 for dinner and your second overnight stay, before a final Serengeti morning drive on Day 3.</p>
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
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Park &amp; Crater Fees</h4><p>Serengeti National Park entry, plus Ngorongoro Conservation Area entry and crater service fees for the shared itinerary.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Three Camping Nights &amp; Equipment</h4><p>Two nights at Nyani Public Campsite in Central Serengeti and one night at Simba Public Campsite on the crater rim, with tents, sleeping mattresses and sleeping bags upon request.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Full-Board Safari Meals</h4><p>Day 1 lunch and dinner; Days 2 and 3 breakfast, lunch and dinner; Day 4 breakfast and lunch.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Serengeti &amp; Ngorongoro Game Drives</h4><p>Serengeti afternoon game drive on Day 1, full-day game drive on Day 2 and morning game drive on Day 3; Ngorongoro Crater game drive on Day 4.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Arusha Hotel Pickup &amp; Return</h4><p>Approximately 6:30 AM pickup from your Arusha hotel on Day 1; return to your hotel or another agreed Arusha location on Day 4.</p></div></div>
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
                    <li><strong>Safari Preparation:</strong> We confirm your hotel details and the 6:30 AM pickup for the start of your Serengeti and Ngorongoro safari.</li>
                    <li><strong>Flight Timing:</strong> Share your arrival time so we can coordinate the airport pickup. We recommend spending the night before the safari in Arusha for the early departure.</li>
                    <li><strong>Return Transfers:</strong> An airport transfer after the safari can be arranged separately on request. Confirm your flight time with us before booking, as the Day 4 return to Arusha may be in the afternoon or evening.</li>
                </ul>
                <p>Please provide your arrival airport, flight number, arrival date and time, and Arusha hotel details in advance so we can confirm your pickup and transfer quote.</p>
                <div class="jm-actions"><a class="jm-button" href="../contact-us.php" data-four-day-enquiry="Please also arrange an airport pickup and confirm the transfer quote for my flight and Arusha hotel.">Arrange My Airport Pickup</a></div>
            </div>
        </div>
    </section>

    <section class="jm-section" id="seasonal-wildlife" aria-labelledby="seasonal-title">
        <div class="jm-reading">
            <h2 id="seasonal-title">Seasonal Wildlife Viewing Opportunities</h2>
            <h3>December to March – Ndutu and Calving Season</h3>
                            <p>For travelers visiting between late December and March, the southern Serengeti and Ndutu region may offer additional opportunities to experience the Great Migration during the calving season.</p>
                            <p>During this period, large herds of wildebeests and zebras typically gather around the nutrient-rich grasslands of the southern Serengeti and Ndutu area.</p>
                            <p>Depending on seasonal wildlife movements, road conditions, and the group&#x27;s schedule, it may be possible to include approximately 3–4 hours of wildlife viewing in the Ndutu area while traveling toward Central Serengeti.</p>
                            <p>This seasonal variation is subject to advance confirmation and may require adjustments to the standard itinerary.</p>
            <h3>July to September – Northern Serengeti and Great Migration</h3>
                            <p>Between July and September, the Great Migration often moves toward Northern Serengeti, where wildebeest and zebra herds may cross the Mara River.</p>
                            <p>Travelers visiting during this period may request an optional Northern Serengeti extension to increase their chances of witnessing migration activity.</p>
                            <p>Because Northern Serengeti is a considerable distance from Central Serengeti, this excursion requires additional travel time, advance planning, and an extra cost.</p>
                            <p>The feasibility and price of this extension will be confirmed according to the travel dates, group arrangements, and available time. A separate Northern Serengeti itinerary may be recommended for a more comfortable experience.</p>
                            <p>Wildlife movements and river crossings are natural events and cannot be guaranteed.</p>
            <div class="jm-actions"><a class="jm-button" href="../contact-us.php" data-four-day-enquiry="Please advise on seasonal Ndutu viewing or quote an optional Northern Serengeti extension for my travel dates.">Ask About Seasonal Options</a></div>
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
            if (message && !message.value.trim()) message.value = 'I am interested in the 4-Day Serengeti and Ngorongoro Crater Joining Group Camping Safari, from USD 960 per person, with Nyani and Simba Public Campsites. Please confirm my dates, group availability and camping equipment requirements. ' + (link.getAttribute('data-four-day-enquiry') || '');
            window.openBookingPopup();
            var name = document.getElementById('popup-full-name');
            if (name) name.focus();
        });
    });
})();
</script>
</body>
</html>
