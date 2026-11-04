<?php
/* Point @font-face to the ACTUAL local site font files. This fixes the
   /style/fonts/... URL issue on localhost/deep-tanzania/ installations. */
$dttFontPath = 'style/fonts/';
foreach (['style/fonts/', '../style/fonts/', '../../style/fonts/'] as $candidate) {
    if (is_file(__DIR__ . '/' . $candidate . 'MazzardH-regular.otf')) {
        $dttFontPath = $candidate;
        break;
    }
}
$dttFontPath = htmlspecialchars($dttFontPath, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanzania Joining Group Safari Packages | Deep Tanzania Tours</title>

    <meta name="description" content="Explore affordable Tanzania joining group safari packages with Deep Tanzania Tours. Compare 1 to 6-day shared safaris departing from Arusha, with total per-person prices from USD 220.">
    <meta name="keywords" content="Tanzania joining group safari, budget camping safari Tanzania, Serengeti group safari, Tarangire shared safari, Ngorongoro group safari, Lake Manyara joining safari, group safari from Arusha">

<meta property="og:title" content="Tanzania Joining Group Safaris | Deep Tanzania Tours">
    <meta property="og:description" content="Affordable shared safari adventures departing from Arusha. Explore 11 budget safari options with total per-person prices.">
    <meta property="og:image" content="https://deeptanzaniatours.com/img/banner.jpg">

<meta property="og:type" content="article">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Joining Group Safaris | Deep Tanzania Tours">
    <meta name="twitter:description" content="Explore Tanzania on an affordable shared safari. Choose from 1–6 day itineraries starting and ending in Arusha.">
    <meta name="twitter:image" content="https://deeptanzaniatours.com/img/banner.jpg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" href="style/package.css">
   <link rel="stylesheet" href="style/style.css">
     <link rel="stylesheet" href="style/remove-highlight-icons.css">


    <link rel="icon" href="/img/favicon/favicon.ico" sizes="any">
    <link rel="icon" type="image/svg+xml" href="/img/favicon/favicon.svg">
    <link rel="apple-touch-icon" href="/img/favicon/apple-touch-icon.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">

    <style>
        .znz-section {
            padding: 60px 0 40px;
            background: var(--white);
        }

        .znz-inner {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .znz-section h2 {
            color: #1a1a1a;
            font-size: 26px;
            font-weight: 700;
            margin: 35px 0 15px;
            padding-bottom: 10px;
            text-align: center;
            position: relative;
        }

        .znz-section h2::after {
            content: "";
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--secondary);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .znz-section h3 {
            color: var(--dark);
            font-size: 20px;
            font-weight: 700;
            margin: 28px 0 12px;
        }

        .znz-section p {
            color: var(--text);
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 18px;
        }

        .znz-note {
            background: rgba(117, 104, 44, 0.08);
            padding: 18px 20px;
            border-left: 4px solid var(--primary);
            margin: 25px 0;
            color: var(--text);
            font-size: 15px;
            line-height: 1.7;
        }

        .znz-note strong {
            color: var(--dark);
        }

        .znz-bullets {
            list-style: none;
            padding: 0;
            margin: 22px 0 28px;
        }

        .znz-bullets li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 16px;
            color: var(--text);
            font-size: 16px;
            line-height: 1.8;
        }

        .znz-bullets li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 10px;
            width: 0;
            height: 0;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
            border-left: 10px solid var(--primary);
        }

        .znz-table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin: 22px 0 32px;
            background: #ffffff;
            border: 1px solid rgba(117, 104, 44, 0.35);
            border-radius: 0;
            box-shadow: none;
        }

        .znz-table th {
            background: var(--primary);
            color: var(--white);
            padding: 13px 16px;
            font-size: 15px;
            font-weight: 700;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        .znz-table td {
            padding: 13px 16px;
            color: var(--text);
            font-size: 15px;
            line-height: 1.7;
            vertical-align: top;
            border: 1px solid rgba(117, 104, 44, 0.25);
        }

        .znz-table tbody tr:nth-child(even) td {
            background: rgba(117, 104, 44, 0.06);
        }

        .znz-table tbody tr:nth-child(odd) td {
            background: #ffffff;
        }

        .znz-table td:first-child {
            color: var(--dark);
            font-weight: 600;
        }

        .znz-quick-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin: 25px 0;
        }

        .znz-quick-card {
            background: rgba(117, 104, 44, 0.06);
            border: 1px solid rgba(117, 104, 44, 0.18);
            padding: 18px 12px;
            text-align: center;
            border-radius: 0;
        }

        .znz-quick-card h4 {
            color: var(--primary);
            font-size: 20px;
            margin-bottom: 6px;
        }

        .znz-quick-card p {
            font-size: 13px;
            line-height: 1.5;
            margin-bottom: 0;
        }

        .znz-card-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            margin: 25px 0;
        }

        .znz-card {
            background: rgba(117, 104, 44, 0.06);
            border: 1px solid rgba(117, 104, 44, 0.18);
            padding: 20px;
            border-radius: 0;
        }

        .znz-card h4 {
            color: var(--dark);
            font-size: 17px;
            margin-bottom: 10px;
        }

        .znz-card p {
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 0;
        }

        @media (max-width: 768px) {
            .znz-section {
                padding: 45px 0 30px;
            }

            .znz-section h2 {
                font-size: 24px;
            }

            .znz-section h3 {
                font-size: 19px;
            }

            .znz-quick-grid,
            .znz-card-grid {
                grid-template-columns: 1fr;
            }

            .znz-table {
                display: block;
                overflow-x: auto;
                white-space: normal;
            }

            .znz-table th,
            .znz-table td {
                min-width: 230px;
                font-size: 14px;
                padding: 12px;
            }
        }
    </style>

    <script src="script/script.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FP1EW3J4H7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag("js", new Date());
        gtag("config", "G-FP1EW3J4H7");
    </script>
<style>
/* Joining group page: copy the Zanzibar article's exact 800px content width,
   Mazzard H font, brand palette, introductory quote and information boxes. */
.dtt-join-article .container {max-width:1200px;}
.dtt-join-article .article-header,
.dtt-join-article .article-content {max-width:800px; width:100%; margin-left:auto; margin-right:auto;}
.dtt-join-article, .dtt-join-article * {box-sizing:border-box;}
.dtt-join-article :is(h1,h2,h3,h4,p,a,button,blockquote,span,strong) {font-family:'Mazzard H',Arial,sans-serif;}
.dtt-join-article .article-content .highlight-box {padding:20px 24px;}
.dtt-join-article .article-content .highlight-box p {margin:0;}
.dtt-join-article .znz-quick-card {border-radius:0;}
.dtt-join-article .znz-quick-card h4 {font-size:20px;font-weight:800;line-height:1.2;color:var(--primary,#75682c);}
.dtt-join-article .znz-quick-card p {font-size:13px;line-height:1.55;margin:0;}
.dtt-join-article .dtt-jg-hint{font-size:14px;color:var(--text,#444);text-align:center;margin:0 0 19px;}
.dtt-join-article .dtt-jg-list {width:100%;display:flex;flex-direction:column;gap:14px;margin:24px 0 28px;}
.dtt-join-article .dtt-jg-card {display:grid;grid-template-columns:62px minmax(0,1fr) 96px 111px;gap:14px;align-items:center;min-width:0;background:#fff;border:1px solid rgba(117,104,44,.23);border-radius:9px;padding:17px 16px;box-shadow:0 2px 9px rgba(29,26,20,.035);}
.dtt-join-article .dtt-jg-duration {width:62px;height:64px;display:flex;flex-direction:column;align-items:center;justify-content:center;border:2px solid #e0b354;border-radius:12px;color:#26211d;line-height:1.06;}
.dtt-join-article .dtt-jg-duration b{font-size:25px;font-weight:700;}
.dtt-join-article .dtt-jg-duration span{font-size:12px;font-weight:700;}
.dtt-join-article .dtt-jg-card-copy {min-width:0;}
.dtt-join-article .dtt-jg-card h3 {font-size:16px;line-height:1.3;font-weight:700;margin:0 0 5px;color:#1a1a1a;text-align:left;padding:0;}
.dtt-join-article .dtt-jg-card h3:after{display:none;}
.dtt-join-article .dtt-jg-card .dtt-jg-sub {font-size:12px;line-height:1.45;margin:0 0 6px;color:#736d64;}
.dtt-join-article .dtt-jg-wildlife {display:flex;flex-wrap:wrap;gap:4px 14px;font-size:12px;color:#494640;line-height:1.4;}
.dtt-join-article .dtt-jg-wildlife span {white-space:nowrap;}
.dtt-join-article .dtt-jg-price {text-align:center;}
.dtt-join-article .dtt-jg-price strong {display:block;font-size:22px;line-height:1.12;font-weight:800;color:var(--primary,#75682c);white-space:nowrap;}
.dtt-join-article .dtt-jg-price small {display:block;font-size:11px;color:#605c56;line-height:1.3;margin-top:5px;}
.dtt-join-article .dtt-jg-join {width:100%;min-height:41px;padding:10px 12px;background:#6ca347;border:none;border-radius:8px;color:#fff;cursor:pointer;font-size:13px;font-weight:700;text-transform:none;letter-spacing:0;line-height:1.35;white-space:nowrap;transition:background .2s ease,transform .2s ease;}
.dtt-join-article .dtt-jg-join:hover,.dtt-join-article .dtt-jg-join:focus-visible{background:#56893a;transform:translateY(-1px);}
.dtt-join-article .dtt-jg-note {border-left:4px solid var(--primary,#75682c);background:rgba(117,104,44,.08);padding:17px 19px;font-size:14px;line-height:1.7;margin:25px 0 0;}
.dtt-join-article .dtt-jg-note strong{color:#1a1a1a;}
.dtt-join-modal {border:0;border-radius:12px;padding:25px;max-width:440px;width:calc(100% - 30px);box-shadow:0 16px 50px rgba(0,0,0,.2);font-family:'Mazzard H',Arial,sans-serif;}
.dtt-join-modal::backdrop{background:rgba(0,0,0,.54);}
.dtt-join-modal h2{font-size:22px;margin:0 0 10px;}
.dtt-join-modal p{font-size:14px;line-height:1.65;margin:0 0 18px;}
.dtt-join-modal .dtt-modal-actions{display:flex;flex-wrap:wrap;gap:10px;}
.dtt-join-modal button{background:#75682c;color:#fff;border:0;padding:12px 16px;border-radius:7px;font:700 14px 'Mazzard H',Arial,sans-serif;cursor:pointer;}
.dtt-join-modal button:last-child{background:#e8e2d5;color:#29231f;}
@media(max-width:760px){
 .dtt-join-article .dtt-jg-card{grid-template-columns:55px minmax(0,1fr) 91px;gap:8px 11px;padding:15px;}
 .dtt-join-article .dtt-jg-duration{width:55px;height:61px;grid-column:1;grid-row:1;}
 .dtt-join-article .dtt-jg-card-copy{grid-column:2;grid-row:1;}
 .dtt-join-article .dtt-jg-price{grid-column:3;grid-row:1;}
 .dtt-join-article .dtt-jg-join{grid-column:1/-1;grid-row:2;}
}
@media(max-width:500px){
 .dtt-join-article .article-content .highlight-box{padding:16px 18px;}
 .dtt-join-article .dtt-jg-card{grid-template-columns:53px minmax(0,1fr) 79px;gap:10px 8px;padding:12px;}
 .dtt-join-article .dtt-jg-duration{width:51px;height:57px;}
 .dtt-join-article .dtt-jg-duration b{font-size:23px;}
 .dtt-join-article .dtt-jg-card h3{font-size:14px;}
 .dtt-join-article .dtt-jg-wildlife{font-size:11px;}
 .dtt-join-article .dtt-jg-price strong{font-size:17px;}
 .dtt-join-article .dtt-jg-price small{font-size:10px;}
 .dtt-join-article .znz-quick-grid{grid-template-columns:repeat(2,minmax(0,1fr));}
 .dtt-join-article .dtt-jg-note{padding:16px;}
}
@media(prefers-reduced-motion:reduce){.dtt-join-article .dtt-jg-join{transition:none;}}
</style>

<style>
/* Use the exact site font for every text element on this page, including
   the shared PHP header, hero, navigation, article, package cards, forms,
   booking popup and footer. Do not change icon font glyphs. */
body.dtt-join-full-mazzard {
    --dtt-join-font: 'Mazzard H', Arial, sans-serif;
    font-family: var(--dtt-join-font) !important;
}
body.dtt-join-full-mazzard :is(
    header, footer, nav, main, section, article, aside,
    div, p, span, h1, h2, h3, h4, h5, h6, a, button,
    ul, ol, li, blockquote, strong, b, em, small, time,
    label, input, textarea, select, option, legend, summary,
    th, td, dt, dd, figcaption, caption
):not(:is(
    .fa, .fas, .far, .fab, .fal, .fad,
    .fa-solid, .fa-regular, .fa-brands, .fa-light, .fa-duotone,
    [class^="fa-"], [class*=" fa-"],
    [class^="icon-"], [class*=" icon-"]
)) {
    font-family: var(--dtt-join-font) !important;
}
/* Icons may live in <i>, font-awesome spans, or SVG; their own styles win. */
</style>

<style id="deep-tanzania-real-mazzard">
/* IMPORTANT: These filenames match the font files declared in your original
   Deep Tanzania Tours style.css. Files remain on YOUR server, not in this page. */
@font-face {font-family:'DTT Site Mazzard'; src:url('<?= $dttFontPath ?>MazzardH-light.otf') format('opentype'); font-weight:300; font-style:normal; font-display:swap;}
@font-face {font-family:'DTT Site Mazzard'; src:url('<?= $dttFontPath ?>MazzardH-regular.otf') format('opentype'); font-weight:400 600; font-style:normal; font-display:swap;}
@font-face {font-family:'DTT Site Mazzard'; src:url('<?= $dttFontPath ?>MazzardH-Bold.otf') format('opentype'); font-weight:700; font-style:normal; font-display:swap;}
@font-face {font-family:'DTT Site Mazzard'; src:url('<?= $dttFontPath ?>MazzardH-ExtraBold.otf') format('opentype'); font-weight:800; font-style:normal; font-display:swap;}
@font-face {font-family:'DTT Site Mazzard'; src:url('<?= $dttFontPath ?>MazzardH-Black.otf') format('opentype'); font-weight:900; font-style:normal; font-display:swap;}
@font-face {font-family:'DTT Site Mazzard'; src:url('<?= $dttFontPath ?>MazzardH-BoldItalic.otf') format('opentype'); font-weight:700; font-style:italic; font-display:swap;}
/* Force the real, locally-loaded family across page and shared components. */
body.dtt-join-full-mazzard {
  --dtt-join-font: 'DTT Site Mazzard', 'Mazzard H', Arial, sans-serif;
  font-family: var(--dtt-join-font) !important;
}
body.dtt-join-full-mazzard :is(
  header,footer,nav,main,section,article,aside,div,p,span,a,button,
  h1,h2,h3,h4,h5,h6,strong,b,em,small,time,blockquote,ul,ol,li,
  label,input,textarea,select,option,legend,summary,th,td,dt,dd,
  figcaption,caption
):not(:is(
  .fa,.fas,.far,.fab,.fal,.fad,.fa-solid,.fa-regular,.fa-brands,
  .fa-light,.fa-duotone,[class^="fa-"],[class*=" fa-"],
  [class^="icon-"],[class*=" icon-"]
)) {
  font-family: var(--dtt-join-font) !important;
}
/* Icons keep their own font, even when nested in a styled label. */
body.dtt-join-full-mazzard :is(i.fa,i.fas,i.far,i.fab,i.fal,i.fad,i.fa-solid,i.fa-regular,i.fa-brands) {
  font-family:'Font Awesome 6 Free','Font Awesome 6 Brands' !important;
}
</style>
</head><body class="dtt-join-full-mazzard">
<?php include 'plugins/header.php'; ?>
<br>
<section class="hero-altoo" id="home-altoo">
    <div class="hero-altoo-background">
        <img src="img/banner.jpg" alt="Elephants in the Tanzanian savanna on a wildlife safari">
        <div class="hero-altoo-overlay"></div>
    </div>
    <div class="container">
        <div class="hero-altoo-content">
            <h1>Joining Group Safaris in Tanzania</h1>
            <p class="hero-subtitle">Affordable 1–6 day shared safaris | Tarangire | Ngorongoro | Serengeti | Lake Manyara</p>
            <div class="safari-hero-actions">
                <a href="#available-joining-packages" class="safari-hero-btn safari-hero-btn--light">View Group Packages</a>
                <a href="#available-joining-packages" class="safari-hero-btn safari-hero-btn--dark" onclick="if(typeof openBookingPopup==='function'){openBookingPopup();return false;}">Request Group Safari</a>
            </div>
        </div>
    </div>
</section>
<style>

    /*button styles*/

.safari-hero-actions{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:18px;
    flex-wrap:wrap;
    margin-top:28px;
}

.safari-hero-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    min-width:290px;
    min-height:54px;
    padding:14px 26px;
    border-radius:999px;
    text-decoration:none;
    text-align:center;
    font-size:14px;
    font-weight:800;
    line-height:1.2;
    letter-spacing:0.8px;
    text-transform:uppercase;
    transition:all 0.3s ease;
    box-sizing:border-box;
}

.safari-hero-btn--light{
    background:#8b7a23;
    color:#ffffff;
    border:2px solid #8b7a23;
}

.safari-hero-btn--light:hover{
    background:#7b6c1f;
    border-color:#7b6c1f;
    transform:translateY(-2px);
}

.safari-hero-btn--dark{
    background:#e0b64c;
    color:#111111;
    border:2px solid #e0b64c;
    box-shadow:0 8px 18px rgba(224,182,76,0.20);
}

.safari-hero-btn--dark:hover{
    background:#d1a73a;
    border-color:#d1a73a;
    transform:translateY(-2px);
}

@media (max-width: 768px){
    .safari-hero-actions{
        display:flex;
        flex-direction:column;
        align-items:center;
        gap:12px;
        margin-top:20px;
        width:100%;
    }

    .safari-hero-btn{
        display:flex;
        align-items:center;
        justify-content:center;
        width:78%;
        max-width:250px;
        min-height:48px;
        padding:12px 16px;
        border-radius:999px;
        text-decoration:none;
        text-align:center;
        font-size:13px;
        font-weight:800;
        line-height:1.2;
        letter-spacing:0.4px;
        text-transform:uppercase;
        box-sizing:border-box;
    }

    .safari-hero-btn--light{
        background:#8b7a23;
        color:#ffffff;
        border:2px solid #8b7a23;
    }

    .safari-hero-btn--dark{
        background:#e0b64c;
        color:#111111;
        border:2px solid #e0b64c;
        box-shadow:0 5px 12px rgba(224,182,76,0.16);
    }
}

</style>
<br><br>
<section class="blog-article-section dtt-join-article" id="article-start">
    <div class="container">
        <div class="article-header">
            <span class="article-category">TANZANIA JOINING GROUP SAFARIS</span>
            <h1>Affordable Tanzania Joining Group Safaris</h1>
            <div class="article-meta">
                <span class="author"><i class="far fa-user" aria-hidden="true"></i> By Deep Tanzania Tours</span>
                <span class="read-time"><i class="far fa-clock" aria-hidden="true"></i> 1–6 Day Budget Safari Options</span>
            </div>
        </div>
        <div class="article-content">
            <div class="intro-quote">
                <blockquote>“Explore Tanzania's wildlife, meet fellow travellers and enjoy an unforgettable safari without the cost of a private vehicle.”</blockquote>
            </div>
            <p>Travelling alone, as a couple or with friends? A joining group safari is a great way to discover Tanzania while keeping your costs down. You share a safari vehicle and guide with other travellers, enjoy game drives together and experience the parks at a more affordable price.</p>
            <p>Deep Tanzania Tours offers budget joining safaris from one to six days, visiting Tarangire, Lake Manyara, Ngorongoro Crater and Serengeti National Park. Trips use public campsites during safari and budget lodges around Karatu where applicable.</p>
            <div class="highlight-box"><p><strong>Quick safari planning advice:</strong> All joining safaris start and end in Arusha. Arusha hotel stays and airport transfers are not included, but we can arrange them on request. Departure dates and available group spaces are confirmed when you enquire.</p></div>
            <div class="znz-quick-grid" aria-label="Group safari quick facts">
                <div class="znz-quick-card"><h4>From $220</h4><p>Total package price per person for a 1-day joining safari.</p></div>
                <div class="znz-quick-card"><h4>1–6 Days</h4><p>Choose a short park visit or a multi-day safari.</p></div>
                <div class="znz-quick-card"><h4>Arusha</h4><p>All group safari departures start and finish here.</p></div>
                <div class="znz-quick-card"><h4>Budget Stays</h4><p>Public campsites and budget lodges where applicable.</p></div>
            </div>
            <h2 id="available-joining-packages">Available Joining Group Packages</h2>
            <p class="dtt-jg-hint">Total safari prices in USD per person. Select a package to enquire about departure dates and availability.</p>
            <div class="dtt-jg-list" aria-label="Available joining safari packages">
<article class="dtt-jg-card" aria-labelledby="joining-package-1">
  <div class="dtt-jg-duration" aria-label="1 day"><b>01</b><span>Day</span></div>
  <div class="dtt-jg-card-copy"><h3 id="joining-package-1">1-Day Tarangire National Park Joining Group Safari</h3><p class="dtt-jg-sub">Budget joining safari · Departure dates on request</p><div class="dtt-jg-wildlife"><span>🐘 Elephant herds</span><span>🌳 Baobab trees</span></div></div>
  <div class="dtt-jg-price"><strong>$220</strong><small>total / person</small></div>
  <button class="dtt-jg-join" type="button" data-tour="1-Day Tarangire National Park Joining Group Safari" data-price="$220" aria-label="Enquire about 1-Day Tarangire National Park Joining Group Safari">Join group</button>
</article>
<article class="dtt-jg-card" aria-labelledby="joining-package-2">
  <div class="dtt-jg-duration" aria-label="1 day"><b>01</b><span>Day</span></div>
  <div class="dtt-jg-card-copy"><h3 id="joining-package-2">1-Day Lake Manyara National Park Joining Group Safari</h3><p class="dtt-jg-sub">Budget joining safari · Departure dates on request</p><div class="dtt-jg-wildlife"><span>🦩 Birdlife</span><span>🌿 Rift Valley scenery</span></div></div>
  <div class="dtt-jg-price"><strong>$220</strong><small>total / person</small></div>
  <button class="dtt-jg-join" type="button" data-tour="1-Day Lake Manyara National Park Joining Group Safari" data-price="$220" aria-label="Enquire about 1-Day Lake Manyara National Park Joining Group Safari">Join group</button>
</article>
<article class="dtt-jg-card" aria-labelledby="joining-package-3">
  <div class="dtt-jg-duration" aria-label="1 day"><b>01</b><span>Day</span></div>
  <div class="dtt-jg-card-copy"><h3 id="joining-package-3">1-Day Ngorongoro Crater Joining Group Safari</h3><p class="dtt-jg-sub">Budget joining safari · Departure dates on request</p><div class="dtt-jg-wildlife"><span>🦏 Crater wildlife</span><span>🦁 Big Five habitat</span></div></div>
  <div class="dtt-jg-price"><strong>$240</strong><small>total / person</small></div>
  <button class="dtt-jg-join" type="button" data-tour="1-Day Ngorongoro Crater Joining Group Safari" data-price="$240" aria-label="Enquire about 1-Day Ngorongoro Crater Joining Group Safari">Join group</button>
</article>
<article class="dtt-jg-card" aria-labelledby="joining-package-4">
  <div class="dtt-jg-duration" aria-label="2 days"><b>02</b><span>Days</span></div>
  <div class="dtt-jg-card-copy"><h3 id="joining-package-4">2-Day Tarangire &amp; Ngorongoro Crater Group Safari</h3><p class="dtt-jg-sub">Budget joining safari · Departure dates on request</p><div class="dtt-jg-wildlife"><span>🐘 Elephant herds</span><span>🦏 Crater game drive</span></div></div>
  <div class="dtt-jg-price"><strong>$440</strong><small>total / person</small></div>
  <button class="dtt-jg-join" type="button" data-tour="2-Day Tarangire &amp; Ngorongoro Crater Group Safari" data-price="$440" aria-label="Enquire about 2-Day Tarangire &amp; Ngorongoro Crater Group Safari">Join group</button>
</article>
<article class="dtt-jg-card" aria-labelledby="joining-package-5">
  <div class="dtt-jg-duration" aria-label="3 days"><b>03</b><span>Days</span></div>
  <div class="dtt-jg-card-copy"><h3 id="joining-package-5">3-Day Tarangire, Lake Manyara &amp; Ngorongoro Group Safari</h3><p class="dtt-jg-sub">Budget joining safari · Departure dates on request</p><div class="dtt-jg-wildlife"><span>🌳 Diverse landscapes</span><span>🦁 Wildlife viewing</span></div></div>
  <div class="dtt-jg-price"><strong>$660</strong><small>total / person</small></div>
  <button class="dtt-jg-join" type="button" data-tour="3-Day Tarangire, Lake Manyara &amp; Ngorongoro Group Safari" data-price="$660" aria-label="Enquire about 3-Day Tarangire, Lake Manyara &amp; Ngorongoro Group Safari">Join group</button>
</article>
<article class="dtt-jg-card" aria-labelledby="joining-package-6">
  <div class="dtt-jg-duration" aria-label="3 days"><b>03</b><span>Days</span></div>
  <div class="dtt-jg-card-copy"><h3 id="joining-package-6">3-Day Serengeti &amp; Ngorongoro Crater Group Safari</h3><p class="dtt-jg-sub">Budget joining safari · Departure dates on request</p><div class="dtt-jg-wildlife"><span>🦁 Lion prides</span><span>🦓 Serengeti plains</span></div></div>
  <div class="dtt-jg-price"><strong>$720</strong><small>total / person</small></div>
  <button class="dtt-jg-join" type="button" data-tour="3-Day Serengeti &amp; Ngorongoro Crater Group Safari" data-price="$720" aria-label="Enquire about 3-Day Serengeti &amp; Ngorongoro Crater Group Safari">Join group</button>
</article>
<article class="dtt-jg-card" aria-labelledby="joining-package-7">
  <div class="dtt-jg-duration" aria-label="4 days"><b>04</b><span>Days</span></div>
  <div class="dtt-jg-card-copy"><h3 id="joining-package-7">4-Day Tarangire, Serengeti &amp; Ngorongoro Group Safari</h3><p class="dtt-jg-sub">Budget joining safari · Departure dates on request</p><div class="dtt-jg-wildlife"><span>🐘 Elephant herds</span><span>🦁 Predator habitat</span></div></div>
  <div class="dtt-jg-price"><strong>$880</strong><small>total / person</small></div>
  <button class="dtt-jg-join" type="button" data-tour="4-Day Tarangire, Serengeti &amp; Ngorongoro Group Safari" data-price="$880" aria-label="Enquire about 4-Day Tarangire, Serengeti &amp; Ngorongoro Group Safari">Join group</button>
</article>
<article class="dtt-jg-card" aria-labelledby="joining-package-8">
  <div class="dtt-jg-duration" aria-label="4 days"><b>04</b><span>Days</span></div>
  <div class="dtt-jg-card-copy"><h3 id="joining-package-8">4-Day Serengeti (2 Nights) &amp; Ngorongoro Group Safari</h3><p class="dtt-jg-sub">Budget joining safari · Departure dates on request</p><div class="dtt-jg-wildlife"><span>🦁 Big cats</span><span>🦏 Crater wildlife</span></div></div>
  <div class="dtt-jg-price"><strong>$960</strong><small>total / person</small></div>
  <button class="dtt-jg-join" type="button" data-tour="4-Day Serengeti (2 Nights) &amp; Ngorongoro Group Safari" data-price="$960" aria-label="Enquire about 4-Day Serengeti (2 Nights) &amp; Ngorongoro Group Safari">Join group</button>
</article>
<article class="dtt-jg-card" aria-labelledby="joining-package-9">
  <div class="dtt-jg-duration" aria-label="5 days"><b>05</b><span>Days</span></div>
  <div class="dtt-jg-card-copy"><h3 id="joining-package-9">5-Day Tarangire, Serengeti, Ngorongoro &amp; Lake Manyara Group Safari</h3><p class="dtt-jg-sub">Budget joining safari · Departure dates on request</p><div class="dtt-jg-wildlife"><span>🦓 Varied wildlife</span><span>🌳 Four destinations</span></div></div>
  <div class="dtt-jg-price"><strong>$1,200</strong><small>total / person</small></div>
  <button class="dtt-jg-join" type="button" data-tour="5-Day Tarangire, Serengeti, Ngorongoro &amp; Lake Manyara Group Safari" data-price="$1,200" aria-label="Enquire about 5-Day Tarangire, Serengeti, Ngorongoro &amp; Lake Manyara Group Safari">Join group</button>
</article>
<article class="dtt-jg-card" aria-labelledby="joining-package-10">
  <div class="dtt-jg-duration" aria-label="5 days"><b>05</b><span>Days</span></div>
  <div class="dtt-jg-card-copy"><h3 id="joining-package-10">5-Day Tarangire, Serengeti (2 Nights) &amp; Ngorongoro Group Safari</h3><p class="dtt-jg-sub">Budget joining safari · Departure dates on request</p><div class="dtt-jg-wildlife"><span>🦁 Serengeti game drives</span><span>🐘 Elephant herds</span></div></div>
  <div class="dtt-jg-price"><strong>$1,200</strong><small>total / person</small></div>
  <button class="dtt-jg-join" type="button" data-tour="5-Day Tarangire, Serengeti (2 Nights) &amp; Ngorongoro Group Safari" data-price="$1,200" aria-label="Enquire about 5-Day Tarangire, Serengeti (2 Nights) &amp; Ngorongoro Group Safari">Join group</button>
</article>
<article class="dtt-jg-card" aria-labelledby="joining-package-11">
  <div class="dtt-jg-duration" aria-label="6 days"><b>06</b><span>Days</span></div>
  <div class="dtt-jg-card-copy"><h3 id="joining-package-11">6-Day Tarangire, Serengeti (2 Nights), Ngorongoro &amp; Lake Manyara Group Safari</h3><p class="dtt-jg-sub">Budget joining safari · Departure dates on request</p><div class="dtt-jg-wildlife"><span>🦁 Big cat habitat</span><span>🐘 Elephant families</span></div></div>
  <div class="dtt-jg-price"><strong>$1,440</strong><small>total / person</small></div>
  <button class="dtt-jg-join" type="button" data-tour="6-Day Tarangire, Serengeti (2 Nights), Ngorongoro &amp; Lake Manyara Group Safari" data-price="$1,440" aria-label="Enquire about 6-Day Tarangire, Serengeti (2 Nights), Ngorongoro &amp; Lake Manyara Group Safari">Join group</button>
</article>
            </div>
            <div class="dtt-jg-note"><strong>Please note:</strong> These package prices are for budget shared safaris. Arusha accommodation and airport transfers are not included. If you prefer upgraded accommodation, different destinations or a custom itinerary, we can arrange a private tour on request.</div>
        </div>
    </div>
</section>
<dialog class="dtt-join-modal" id="dtt-join-dialog" aria-labelledby="dtt-join-dialog-heading"><h2 id="dtt-join-dialog-heading">Group safari enquiry</h2><p id="dtt-join-description"></p><div class="dtt-modal-actions"><button type="button" id="dtt-join-copy">Copy enquiry</button><button type="button" id="dtt-join-dismiss">Close</button></div></dialog>
<script>
(function(){
  var selected='';
  var dialog=document.getElementById('dtt-join-dialog');
  var summary=document.getElementById('dtt-join-description');
  var copy=document.getElementById('dtt-join-copy');
  document.querySelectorAll('.dtt-join-article .dtt-jg-join').forEach(function(button){
    button.addEventListener('click',function(){
      selected=button.getAttribute('data-tour')+' — '+button.getAttribute('data-price')+' per person';
      window.deepTanzaniaSelectedSafari=selected;
      if(typeof window.openBookingPopup==='function'){
         window.openBookingPopup();
         var msg=document.querySelector('textarea[name="message"], textarea[name="comments"], textarea[name="enquiry"]');
         if(msg&&!msg.value.trim()) msg.value='I am interested in '+selected+'. Please share dates and availability.';
      } else if(dialog && typeof dialog.showModal==='function') {
         summary.textContent='Interested in '+selected+'? Copy the details to send with your enquiry.';
         dialog.showModal();
      } else {
         window.prompt('Copy your safari enquiry:', 'I am interested in '+selected+'. Please share dates and availability.');
      }
    });
  });
  if(copy)copy.addEventListener('click',function(){
    var message='Hello Deep Tanzania Tours, I would like to join '+selected+'. Please share available departure dates and booking details.';
    if(navigator.clipboard && navigator.clipboard.writeText){navigator.clipboard.writeText(message).then(function(){copy.textContent='Copied';},function(){window.prompt('Copy enquiry:',message);});}
    else window.prompt('Copy enquiry:',message);
  });
  var close=document.getElementById('dtt-join-dismiss');
  if(close)close.addEventListener('click',function(){dialog.close();copy.textContent='Copy enquiry';});
})();
</script>
<?php include 'plugins/call-to-action.php'; ?>
<?php include 'plugins/pop-up-expert.php'; ?>
<?php include 'plugins/footer.php'; ?>
<?php include 'plugins/booking-form.php'; ?>
<?php include 'plugins/mobile-footer.php'; ?>
</body>
</html>
