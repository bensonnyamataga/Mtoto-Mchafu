<?php
$pageUrl = 'https://deeptanzaniatours.com/joining-group-safaris/3-day-tarangire-ngorongoro-lake-manyara-joining-group-safari.php';
$pageTitle = '3-Day Tarangire, Ngorongoro & Lake Manyara Joining Group Safari';
$pageDescription = 'Join a 3-day Tarangire, Ngorongoro and Lake Manyara group safari from Arusha. Two nights at Jua Manyara Budget Lodge, full-board meals. From USD 660.';
$faqs = [
    ['question' => 'How much is the 3-day Tarangire, Ngorongoro and Lake Manyara joining safari?', 'answer' => 'The listed budget package starts from USD 660 per person. It includes a shared safari vehicle, guide, the itinerary’s park and crater fees, full-board meals during the safari, two nights at Jua Manyara Budget Lodge, and Arusha hotel pickup and return. Your final price and availability are confirmed for your travel date.'],
    ['question' => 'Will I share a room with other group members?', 'answer' => 'No. Couples, families, friends and partners have their own room arrangement. Solo travellers have their own single room. You do not share a room with unrelated travellers simply because you are sharing the safari vehicle.'],
    ['question' => 'Can I upgrade from the budget lodge to mid-range accommodation?', 'answer' => 'Yes. We can quote a mid-range lodge upgrade on request. The additional price depends on the property selected, room arrangement, your budget and availability. The upgrade must be agreed before booking and is not included in the base package price.'],
    ['question' => 'Can I start this safari from Moshi?', 'answer' => 'The shared safari departs from Arusha. If you are staying in Moshi, we recommend spending the night before the safari in Arusha. Alternatively, we can arrange an early morning Moshi-to-Arusha transfer for an additional USD 100, with timing confirmed in advance.'],
    ['question' => 'Can you arrange airport transfers and an Arusha hotel?', 'answer' => 'Yes. An airport transfer can be arranged for an additional USD 50. Pre- or post-safari Arusha hotel rooms can be arranged from approximately USD 50–100 per room, depending on the hotel, room occupancy and whether you choose budget or mid-range accommodation. Share your flight and hotel requirements so we can confirm the arrangements.'],
    ['question' => 'What if I have a food allergy or dietary requirement?', 'answer' => 'Please tell us about food allergies and dietary requirements before booking. We will discuss suitable meal arrangements with you and the lodge before your safari.'],
];
$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        ['@type' => 'TouristTrip', '@id' => $pageUrl . '#trip', 'name' => $pageTitle, 'description' => $pageDescription, 'url' => $pageUrl, 'image' => 'https://deeptanzaniatours.com/img/tarangire-national-park-banner.jpg', 'touristType' => 'Budget small-group safari travellers', 'provider' => ['@type' => 'TravelAgency', 'name' => 'Deep Tanzania Tours', 'url' => 'https://deeptanzaniatours.com/'], 'offers' => ['@type' => 'Offer', 'price' => '660', 'priceCurrency' => 'USD', 'url' => $pageUrl, 'description' => 'Budget package per person; final price and group availability confirmed on enquiry.'], 'itinerary' => ['@type' => 'ItemList', 'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Day 1: Arusha to Tarangire; overnight at Jua Manyara Budget Lodge, Mto wa Mbu'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Day 2: Mto wa Mbu to Ngorongoro Crater; return to Jua Manyara Budget Lodge'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Day 3: Lake Manyara National Park game drive and return to Arusha'],
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
    <title>3-Day Tarangire, Ngorongoro &amp; Lake Manyara Group Safari | From $660</title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <link rel="canonical" href="<?= htmlspecialchars($pageUrl, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:url" content="<?= htmlspecialchars($pageUrl, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image" content="https://deeptanzaniatours.com/img/tarangire-national-park-banner.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:image" content="https://deeptanzaniatours.com/img/tarangire-national-park-banner.jpg">
    <link rel="icon" type="image/png" href="../img/favicon-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../style/package.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/joining-multiday.css?v=3">
    <link rel="stylesheet" href="../style/hero.css?v=1">
    <script src="../script/hero.js?v=1" defer></script>
    <script src="../script/lodge-gallery.js?v=1" defer></script>
    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FP1EW3J4H7"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','G-FP1EW3J4H7');</script>
</head>
<body class="joining-multiday">
<?php include __DIR__ . '/../plugins-folder/header.php'; ?>

<section class="hero-altoo" aria-labelledby="safari-title">
    <div class="hero-altoo-background">
        <img src="../img/tarangire-national-park-banner.jpg" alt="Elephant herds in Tarangire National Park" fetchpriority="high">
        <div class="hero-altoo-overlay"></div>
    </div>
    <div class="container"><div class="hero-altoo-content">
        <h1 id="safari-title">3-Day Tarangire, Ngorongoro &amp; Lake Manyara Joining Group Safari</h1>
        <p class="hero-subtitle">Three wildlife destinations, 4–6 travellers and two budget lodge nights. A shared Tanzania safari from Arusha, with full-board meals.</p>
        <div class="hero-altoo-btns">
            <a class="btn btn-primary" href="#itinerary">View the Itinerary</a>
            <a class="btn btn-secondary" href="../contact-us.php" data-three-day-enquiry>Check Dates &amp; Join</a>
        </div>
    </div></div>
</section>

<main>
    <nav class="jm-breadcrumb" aria-label="Breadcrumb"><a href="../index.php">Home</a> / <a href="joining-groups.php">Joining Group Safaris</a> / <span aria-current="page">3-Day Tarangire, Ngorongoro &amp; Lake Manyara</span></nav>

    <section class="kilimanjaro-expedition jm-section" id="overview" aria-labelledby="overview-title">
        <div class="expedition-container">
            <div class="expedition-summary">
                <h2 class="schedule-heading" id="overview-title">An affordable three-day Tanzania safari from Arusha</h2>
                <p>Experience <a class="dt-internal-link" href="../safari-articles/tarangire-national-park-safari-guide.php">Tarangire</a>, <a class="dt-internal-link" href="../safari-articles/ngorongoro-crater-safari-guide.php">Ngorongoro Crater</a> and <a class="dt-internal-link" href="lake-manyara-national-park-joining-group-safari.php">Lake Manyara</a> without stretching your travel budget. This three-day joining safari combines shared game drives in three destinations with two nights at Jua Manyara Budget Lodge in Mto wa Mbu, making it a practical short adventure for travellers who want more than a day trip.</p>
                <p>You share the safari jeep with 4–6 clients and enjoy full-board meals during the safari. The vehicle is shared; your room is reserved for you and your own travelling party. Couples, friends and families have their own room arrangements, while solo travellers have a private single room rather than sharing with strangers.</p>
                <p>Prefer a mid-range lodge? Deep Tanzania Tours can arrange an upgrade on request. The additional cost depends on your budget, the lodge selected and availability, and is confirmed before you book.</p>
                <div class="jm-price"><strong>From $660 per person</strong><p>USD · 3 days / 2 nights · Budget lodge package<br>Confirm your travel date, room arrangement and group availability before booking.</p><div class="jm-actions"><a class="jm-button" href="../contact-us.php" data-three-day-enquiry>Request My Safari Dates</a><a class="jm-button jm-button-outline" href="#accommodation">See Accommodation</a></div></div>
                <div class="overview-features">
                    <div class="feature-box"><div class="feature-icon"><i class="fas fa-users" aria-hidden="true"></i></div><h3>4–6 Travellers</h3><p>Share your safari jeep with a small group.</p></div>
                    <div class="feature-box"><div class="feature-icon"><i class="fas fa-bed" aria-hidden="true"></i></div><h3>2 Lodge Nights</h3><p>Jua Manyara Budget Lodge in Mto wa Mbu.</p></div>
                    <div class="feature-box"><div class="feature-icon"><i class="fas fa-utensils" aria-hidden="true"></i></div><h3>Full-Board Meals</h3><p>Meals during your three-day safari itinerary.</p></div>
                    <div class="feature-box"><div class="feature-icon"><i class="fas fa-binoculars" aria-hidden="true"></i></div><h3>Three Destinations</h3><p>Tarangire, Ngorongoro Crater and Lake Manyara.</p></div>
                </div>
            </div>
        </div>
    </section>

    <section class="kilimanjaro-expedition jm-section" id="itinerary" aria-labelledby="itinerary-title">
        <div class="expedition-container">
            <h2 class="schedule-heading" id="itinerary-title">Your 3-day Tarangire, Ngorongoro and Lake Manyara itinerary</h2>
            <div class="trekking-schedule">
                <article class="trek-day">
                    <div class="day-header-section"><div class="day-indicator">Day 1</div><h3 class="day-title-text">Arusha → Tarangire → Mto wa Mbu</h3></div>
                    <div class="day-content-section">
                        <div class="day-description">
                            <p>We collect you from your Arusha hotel in the morning and bring you together with the other joining group members. The drive from Arusha to Tarangire’s gate takes approximately 2–2½ hours, depending on road and traffic conditions.</p>
                            <p>Enter the park for a morning game drive, looking out for Tarangire’s elephants and other wildlife. Depending on the season and animal movements, you may see herds gathering around water points. Sightings are part of the adventure and cannot be guaranteed.</p>
                            <p>Enjoy a picnic lunch, then continue game viewing into the late afternoon. Afterwards, travel to Mto wa Mbu for dinner and your overnight stay at Jua Manyara Budget Lodge.</p>
                        </div>
                        <div class="day-visual"><img src="../img/tarangire-national-park-banner.jpg" alt="Elephants encountered on a Tarangire safari" loading="lazy"></div>
                    </div>
                    <div class="day-stats"><p><strong>Drive:</strong> Arusha to gate, approx. 2–2½ hours</p><p><strong>Meals:</strong> Lunch and dinner</p><p><strong>Stay:</strong> Jua Manyara Budget Lodge</p></div>
                </article>
                <article class="trek-day">
                    <div class="day-header-section"><div class="day-indicator">Day 2</div><h3 class="day-title-text">Mto wa Mbu → Ngorongoro Crater → Mto wa Mbu</h3></div>
                    <div class="day-content-section">
                        <div class="day-description">
                            <p>After an early breakfast, depart Mto wa Mbu and pass through Karatu towards the Ngorongoro Conservation Area gate. Allow approximately 1½–2 hours for this drive, depending on road conditions and the day’s arrangements.</p>
                            <p>Descend into the crater for your morning game drive. Search for black rhino and other crater wildlife while your guide explores the accessible routes. Rhino sightings are not guaranteed, but the crater offers a rewarding setting for a day of wildlife viewing.</p>
                            <p>Stop for a picnic lunch and continue game viewing before ascending from the crater. Return to Mto wa Mbu for dinner and your second night at Jua Manyara Budget Lodge, ready for Lake Manyara the next morning.</p>
                        </div>
                        <div class="day-visual"><img src="../img/ngorongoro-crater-viewpoint.jpg" alt="View across Ngorongoro Crater before a crater safari" loading="lazy"></div>
                    </div>
                    <div class="day-stats"><p><strong>Drive:</strong> Lodge to conservation gate, approx. 1½–2 hours</p><p><strong>Meals:</strong> Breakfast, lunch and dinner</p><p><strong>Stay:</strong> Jua Manyara Budget Lodge</p></div>
                </article>
                <article class="trek-day">
                    <div class="day-header-section"><div class="day-indicator">Day 3</div><h3 class="day-title-text">Mto wa Mbu → Lake Manyara National Park → Arusha</h3></div>
                    <div class="day-content-section">
                        <div class="day-description">
                            <p>After breakfast at Jua Manyara Budget Lodge, check out and set off from Mto wa Mbu for Lake Manyara National Park. Your guide will confirm the departure timing so that the group can enjoy the final day’s game drive before returning to Arusha.</p>
                            <p>Explore Lake Manyara’s forest, woodland and lakeside scenery. Look out for monkeys, baboons and other wildlife, with opportunities for birdwatching where the route allows. Wildlife sightings and lake conditions vary, so your guide adapts the drive to accessible tracks and the day’s conditions.</p>
                            <p>Enjoy a picnic lunch before completing your park visit. Afterwards, leave Lake Manyara and drive back to Arusha, where you are transferred to your hotel. This marks the end of your three-day joining group safari.</p>
                        </div>
                        <div class="day-visual"><img src="../img/lake-manyara-national-park.jpg" alt="Flamingos and lake scenery at Lake Manyara" loading="lazy"></div>
                    </div>
                    <div class="day-stats"><p><strong>Route:</strong> Mto wa Mbu to Lake Manyara, then Arusha</p><p><strong>Meals:</strong> Breakfast and lunch</p><p><strong>Finish:</strong> Arusha hotel drop-off</p></div>
                </article>
            </div>
            <div class="jm-actions"><a class="jm-button" href="../contact-us.php" data-three-day-enquiry>Join This Three-Day Safari</a></div>
        </div>
    </section>

    <section class="section accommodation-section" id="accommodation" aria-labelledby="accommodation-title">
        <div class="container">
            <div class="section-title"><span class="subtitle">Your Comfort</span><h2 id="accommodation-title">Accommodation During Your Safari</h2><p>Two nights in Mto wa Mbu, with room arrangements for your own travelling party.</p></div>
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
                        <span class="jm-lodge-label">Included · Nights 1 &amp; 2 · Mto wa Mbu</span>
                        <h3>Jua Manyara Budget Lodge</h3>
                        <p class="accommodation-description">Your budget safari includes two nights at Jua Manyara Budget Lodge in Mto wa Mbu. Stay here after Tarangire on Day 1, return after your Ngorongoro Crater safari on Day 2, then leave for Lake Manyara on Day 3. You keep the same lodge base for both nights.</p>
                        <div class="accommodation-features">
                            <div class="feature"><i class="fas fa-bed" aria-hidden="true"></i><span>Two overnight stays</span></div>
                            <div class="feature"><i class="fas fa-user" aria-hidden="true"></i><span>Single room for solo travellers</span></div>
                            <div class="feature"><i class="fas fa-users" aria-hidden="true"></i><span>Rooms for your own party</span></div>
                            <div class="feature"><i class="fas fa-utensils" aria-hidden="true"></i><span>Dinner and breakfast</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accommodation-note">
                <div class="note-icon"><i class="fas fa-info-circle" aria-hidden="true"></i></div>
                <div>
                    <p><strong>Your room is not shared with strangers.</strong> Couples or partners have their own room, and families or friends stay according to their agreed room arrangement. Solo travellers have a private single room. Sharing the safari jeep does not mean sharing your bedroom with unrelated group members.</p>
                    <p class="note-sub"><strong>Prefer a mid-range lodge?</strong> We can suggest an alternative to suit your comfort level and budget. The upgrade cost depends on the lodge, room arrangement and availability and is agreed before booking.</p>
                    <div class="jm-actions"><a class="jm-button jm-button-outline" href="../contact-us.php" data-three-day-enquiry="Please include a quote for a mid-range accommodation upgrade.">Request a Lodge Upgrade</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section inclusion-exclusion-section" id="inclusions" aria-labelledby="inclusions-title">
        <div class="container">
            <div class="section-title"><span class="subtitle">Package Details</span><h2 id="inclusions-title">What Is Included &amp; Excluded</h2><p>Know what your budget joining safari covers before you travel.</p></div>
            <div class="inclusion-exclusion-container">
                <div class="inclusion-box">
                    <div class="ie-header"><div class="ie-icon include"><i class="fas fa-check-circle" aria-hidden="true"></i></div><h3>Inclusions</h3><p>The core services for your three-day group safari</p></div>
                    <div class="ie-content"><div class="ie-column">
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Shared Safari Jeep &amp; Guide</h4><p>A shared safari vehicle for 4–6 clients with an English-speaking safari guide.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Park &amp; Crater Fees</h4><p>Tarangire and Lake Manyara entry, plus Ngorongoro Conservation Area entry and crater service fees for the shared itinerary.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Two Budget Lodge Nights</h4><p>Jua Manyara Budget Lodge in Mto wa Mbu, with your agreed private room arrangement.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Full-Board Safari Meals</h4><p>Day 1 lunch and dinner; Day 2 breakfast, picnic lunch and dinner; Day 3 breakfast and lunch.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Game Drives in Three Destinations</h4><p>Tarangire on Day 1, Ngorongoro Crater on Day 2 and Lake Manyara on Day 3.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-check" aria-hidden="true"></i></div><div class="ie-text"><h4>Arusha Hotel Pickup &amp; Return</h4><p>Collection before the safari and transfer to your Arusha hotel at the end of Day 3.</p></div></div>
                    </div></div>
                </div>
                <div class="exclusion-box">
                    <div class="ie-header"><div class="ie-icon exclude"><i class="fas fa-times-circle" aria-hidden="true"></i></div><h3>Exclusions</h3><p>Optional services quoted separately from the base price</p></div>
                    <div class="ie-content"><div class="ie-column">
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-times" aria-hidden="true"></i></div><div class="ie-text"><h4>Airport Transfers</h4><p>Available on request for an additional USD 50.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-times" aria-hidden="true"></i></div><div class="ie-text"><h4>Arusha Hotels Before or After Safari</h4><p>Budget or mid-range rooms can be arranged from approximately USD 50–100 per room, depending on hotel and occupancy.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-times" aria-hidden="true"></i></div><div class="ie-text"><h4>Moshi-to-Arusha Transfer</h4><p>An early morning transfer from Moshi is an additional USD 100.</p></div></div>
                        <div class="ie-item"><div class="ie-bullet"><i class="fas fa-times" aria-hidden="true"></i></div><div class="ie-text"><h4>Mid-Range Accommodation Upgrade</h4><p>Quoted separately according to the lodge selected and your room requirements.</p></div></div>
                    </div></div>
                </div>
            </div>
            <div class="ie-note"><p><strong>Tell us what you need:</strong> Share your dates, number of travellers, room arrangements, any food allergies and additional transfer or hotel requirements. We will confirm your package and optional costs before booking.</p><div class="jm-actions"><a class="jm-button" href="../contact-us.php" data-three-day-enquiry>Check Availability &amp; Final Price</a></div></div>
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
                <tr><th scope="row">Mid-range safari lodge upgrade</th><td>Quote on request</td><td>Depends on your selected lodge, room arrangement and budget.</td></tr>
            </tbody></table></div>
            <p><strong>Staying in Moshi?</strong> We recommend spending the night before the safari in Arusha for an easier start. If you prefer the early morning transfer, tell us your Moshi hotel so we can coordinate the pickup.</p>
            <p><strong>Food allergies or dietary requirements?</strong> Please tell us in advance. We will discuss your needs with you and coordinate meal arrangements before your departure.</p>
            <div class="jm-actions"><a class="jm-button" href="../contact-us.php" data-three-day-enquiry="Please also quote my transfers and pre- or post-safari hotel.">Plan My Transfers &amp; Stay</a></div>
        </div>
    </section>

    <section class="jm-section jm-faq" id="frequently-asked-questions" aria-labelledby="faq-title">
        <div class="jm-reading"><h2 id="faq-title">3-Day Joining Safari: Frequently Asked Questions</h2>
            <?php foreach ($faqs as $faq): ?>
            <details><summary><?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?></summary><p><?= htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8') ?></p></details>
            <?php endforeach; ?>
            <div class="jm-actions"><a class="jm-button" href="../contact-us.php" data-three-day-enquiry>Enquire About My Dates</a><a class="jm-button jm-button-outline" href="joining-groups.php">All Joining Group Safaris</a></div>
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
    document.querySelectorAll('[data-three-day-enquiry]').forEach(function (link) {
        link.addEventListener('click', function (event) {
            if (typeof window.openBookingPopup !== 'function') return;
            event.preventDefault();
            var packageType = document.getElementById('popup-package-type');
            var message = document.getElementById('popup-special-requests');
            if (packageType && !packageType.value) packageType.value = 'Safari Adventure';
            if (message && !message.value.trim()) message.value = 'I am interested in the 3-Day Tarangire, Ngorongoro and Lake Manyara Joining Group Safari, from USD 660 per person, with Jua Manyara Budget Lodge. Please confirm my dates, group availability and private room arrangement. ' + (link.getAttribute('data-three-day-enquiry') || '');
            window.openBookingPopup();
            var name = document.getElementById('popup-full-name');
            if (name) name.focus();
        });
    });
})();
</script>
</body>
</html>
