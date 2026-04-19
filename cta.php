<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Tailor Made Trips</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
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
    --whatsapp-green: #25D366;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: var(--body);
}

body {
    background-color: #f5f5f5;
    color: var(--dark);
    line-height: 1.6;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.universal-contact-section {
    max-width: 700px;
    width: 100%;
    margin: 0 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    overflow: hidden;
    padding: 35px;
    text-align: center;
}

.contact-heading {
    font-size: 28px;
    color: var(--dark);
    margin-bottom: 12px;
    font-family: var(--heading);
    line-height: 1.3;
    font-weight: 700;
}

.contact-subheading {
    font-size: 18px;
    color: var(--primary);
    margin-bottom: 8px;
    font-weight: 600;
}

.contact-description {
    font-size: 16px;
    color: var(--text);
    margin-bottom: 30px;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}

.service-features {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    margin-bottom: 30px;
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
}

.service-feature {
    display: flex;
    align-items: center;
    gap: 10px;
    justify-content: flex-start;
}

.service-icon {
    width: 32px;
    height: 32px;
    background: rgba(117, 104, 44, 0.1);
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary);
    font-size: 14px;
    flex-shrink: 0;
}

.service-text {
    font-size: 14px;
    color: var(--text);
    font-weight: 500;
    text-align: left;
}

.contact-buttons {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    justify-content: center;
    max-width: 400px;
    margin: 0 auto;
}

.contact-button {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 14px 25px;
    border-radius: 6px;
    font-weight: 600;
    font-size: 15px;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    min-width: 160px;
    flex: 1;
}

.contact-button i {
    margin-right: 8px;
    font-size: 16px;
}

.whatsapp-button {
    background: var(--whatsapp-green);
    color: white;
}

.whatsapp-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(37, 211, 102, 0.4);
    background: #1fb154;
}

.email-button {
    background: var(--primary);
    color: white;
}

.email-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(117, 104, 44, 0.4);
    background: #5a4c21;
}

/* Tablet Styles */
@media (max-width: 1024px) {
    .universal-contact-section {
        max-width: 600px;
        padding: 30px;
    }
    
    .contact-heading {
        font-size: 26px;
    }
}

/* Mobile Styles */
@media (max-width: 768px) {
    body {
        padding: 15px;
    }

    .universal-contact-section {
        padding: 25px 20px;
        margin: 0 10px;
        border-radius: 6px;
    }

    /* Stack buttons vertically while keeping size/padding same */
    .contact-buttons {
        flex-direction: column;
        gap: 15px; /* spacing between buttons */
    }

    .contact-button {
        min-width: unset; /* remove fixed min-width */
        flex: none;       /* maintain desktop width/shape */
    }

    .contact-heading {
        font-size: 28px;
        margin-bottom: 10px;
    }

    .contact-subheading {
        font-size: 16px;
        margin-bottom: 6px;
    }

    .contact-description {
        font-size: 15px;
        margin-bottom: 25px;
    }

    .service-features {
        grid-template-columns: 1fr;
        gap: 12px;
        margin-bottom: 25px;
    }

    .service-feature {
        justify-content: center;
    }

    .service-text {
        font-size: 14px;
        text-align: center;
    }
}

/* Small Mobile Styles */
@media (max-width: 480px) {
    body {
        padding: 10px;
    }

    .universal-contact-section {
        padding: 20px 15px;
        margin: 0 5px;
    }

    .contact-heading {
        font-size: 28px;
    }

    .contact-subheading {
        font-size: 15px;
    }

    .contact-description {
        font-size: 14px;
    }

    .service-features {
        gap: 10px;
    }

    .service-text {
        font-size: 14px;
    }

    .contact-button {
        padding: 14px 25px; /* keep original padding */
        font-size: 15px;    /* keep original font size */
        flex: none;         /* maintain shape */
    }
}

    </style>
</head>
<body>
    <div class="universal-contact-section">
        <h2 class="contact-heading">Let us create your tailor-made trip</h2>
        <div class="contact-subheading">Receive a free, no obligation quote</div>
        <p class="contact-description">Start planning your dream trip</p>
          
        <div class="contact-buttons">
            <a href="https://wa.me/255123456789?text=Hi%2C%20I'd%20like%20a%20free%20quote%20for%20a%20tailor-made%20trip" class="contact-button whatsapp-button">
                <i class="fab fa-whatsapp"></i> GET QUOTE
            </a>
            <a href="mailto:info@adventures.com?subject=Free Quote for Tailor-Made Trip" class="contact-button email-button">
                <i class="fas fa-envelope"></i> EMAIL US
            </a>
        </div>
    </div>

    
<?php include 'plugins/mobile-footer.php';?>

</body>
</html>
