<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'Bespoke custom-made solutions, Italian & Belgian interior designs + fast delivery & professional installation: Sofas, Kitchens, Bedrooms, dining tables.')">
    <meta property="og:url" content="https://marquee-design.com/">
    <meta property="og:title" content="@yield('title', 'European Furniture Showroom in Dubai Design District | Luxury Collections')">
    <meta property="og:description" content="@yield('description', 'Bespoke custom-made solutions, Italian & Belgian interior designs + fast delivery & professional installation: Sofas, Kitchens, Bedrooms, dining tables.')">
    <meta property="og:image" content="https://marquee-design.com/assets/img/canonnical-img.jpg">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="@yield('title', 'European Furniture Showroom in Dubai Design District | Luxury Collections')">
    <link rel="canonical" href="https://marquee-design.com/">
    <link rel="shortcut icon" href="assets/img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="assets/img/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="assets/img/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>@yield('title', 'European Furniture Showroom in Dubai Design District | Luxury Collections')</title>
    <meta name="description" content="@yield('description', 'Bespoke custom-made solutions, Italian & Belgian interior designs + fast delivery & professional installation: Sofas, Kitchens, Bedrooms, dining tables.')">
</head>
<body>
    <div class="header">
        <div class="header-container">
            <div class="header-content">
                <div class="header-contacts">
                    <div class="header-phone header-link-group">
                        <a href="tel:+971506132486" class="desctop-link header-link">+971 50 613 2486</a>
    
                        <a href="tel:+971506132486" class="mobile-link">
                            <div class="phone-icon header-btn-icon">
                                <img src="assets/img/icons/header/phone.svg" alt="phone">
                            </div>
                        </a>
                    </div>
    
                    <div class="header-location header-link-group">
                        <a href="https://maps.yango.com/121479/emirate-of-dubai/house/YUwYdANkQU0GQFxvfX1ydn5kZg==/?ll=55.247097%2C25.136919&utm_source=share&z=17" class="desctop-link header-link">39/1, 12nd Street, Al Quoz 3</a>
    
                        <a href="https://maps.yango.com/121479/emirate-of-dubai/house/YUwYdANkQU0GQFxvfX1ydn5kZg==/?ll=55.247097%2C25.136919&utm_source=share&z=17" class="mobile-link">
                            <div class="location-icon header-btn-icon">
                                <img src="assets/img/icons/header/location.svg" alt="location">
                            </div>
                        </a>
                    </div>
                </div>
                

                <div class="header-buttons">
                    <a href="/" class="lang-switch lang-switch-directions">
                        <span>ru</span>
                        <img src="assets/img/icons/header/planet.svg" alt="lang">
                    </a>

                    <a href="/" class="logo-small logo-directions">
                        <img src="assets/img/logo-small.svg" alt="logo">
                    </a>

                    <div class="header-menu-button header-btn-icon">
                        <img src="assets/img/icons/header/menu.svg" alt="menu">
                    </div>
                </div>
            </div>
        </div>
    </div>


    @yield('content')

    <div class="main-address-block">
        <div class="main-address-container">
            <div class="main-address-map">
                <div id="yandex-map"></div>
            </div>
            
            <div class="main-address-info">
                <div class="main-address-top">
                    <h2 class="main-address-title">Let's get acquainted</h2>
                    
                    <div class="main-address-schedule">
                        Mon–Fri 9:00–18:00 (GMT+4)
                    </div>
                </div>
                
                <div class="main-address-middle">
                    <div class="main-address-phone">
                        <img src="assets/img/icons/header/phone.svg" alt="phone">
                        <span>+971 50 613 2486</span>
                    </div>
                    
                    <button class="main-address-call-btn">
                        <span>Request a call</span>
                        <img src="assets/img/icons/header/arrow-right.svg" alt="arrow" class="arrow">
                    </button>
                </div>
                
                <div class="main-address-bottom">
                    <div class="main-address-location">
                        <img src="assets/img/icons/header/location.svg" alt="location">
                        <span>39/1, 12nd Street, Al Quoz 3, Al Quoz, Hadaek Mohammed Bin Rashid, Dubai Emirate</span>
                    </div>
                    
                    <a href="https://maps.yango.com/en-ae/-/CHVaRN4h" class="main-address-directions-btn" target="_blank">
                        <span>Get directions</span>
                        <img src="assets/img/icons/header/arrow-right.svg" alt="arrow" class="arrow">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-phone">
                    <img src="assets/img/icons/header/phone.svg" alt="phone">
                    <span>+971 50 613 2486</span>
                </div>

                <div class="footer-logo">
                    <img src="assets/img/logo.svg" alt="logo">
                </div>
                
                <div class="footer-links">
                    <a href="/" class="footer-link">Home</a>
                    <a href="/mesons" class="footer-link">Menson's Kitchens</a>
                    <a href="/privacy" class="footer-link">Privacy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Оверлей для меню -->
    <div class="side-menu-overlay" id="side-menu-overlay"></div>

    <!-- Выезжающее меню -->
    <div class="side-menu" id="side-menu">
        <div class="side-menu-close" id="side-menu-close">
            <img src="assets/img/icons/header/cross.svg" alt="close">
        </div>
        
        <div class="side-menu-logo">
            <img src="assets/img/logo.svg" alt="logo">
        </div>
        
        <nav class="side-menu-nav">
            <a href="/" class="menu-item">
                <span>Home</span>
                <img src="assets/img/icons/header/arrow-right.svg" alt="arrow" class="arrow">
            </a>
            <a href="/mesons" class="menu-item">
                <span>Menson's Kitchens</span>
                <img src="assets/img/icons/header/arrow-right.svg" alt="arrow" class="arrow">
            </a>
        </nav>
        
        <div class="side-menu-lang">
            <a href="/" class="lang-switch">
                <span>ru</span>
                <img src="assets/img/icons/header/planet.svg" alt="lang">
            </a>
        </div>
        
        <div class="side-menu-schedule">
            Mon-Fri 9:00–18:00 (GMT+4)
        </div>
        
        <div class="side-menu-phone">
            <img src="assets/img/icons/header/phone.svg" alt="phone">
            <span>+971 50 613 2486</span>
        </div>
        
        <button class="side-menu-call-btn">
            <span>Request a call</span>
            <img src="assets/img/icons/header/arrow-right.svg" alt="arrow" class="arrow">
        </button>
        
        <div class="side-menu-address">
            <img src="assets/img/icons/header/location.svg" alt="location">
            <span>39/1, 12nd Street, Al Quoz 3, Al Quoz, Hadaek Mohammed Bin Rashid, Dubai Emirate</span>
        </div>
        
        <a href="https://maps.yango.com/en-ae/-/CHVaRN4h" class="side-menu-directions-btn" target="_blank">
            <span>Get directions</span>
            <img src="assets/img/icons/header/arrow-right.svg" alt="arrow" class="arrow">
        </a>
    </div>

    <!-- Окно предупреждения о куки -->
    <div id="cookie-notice">
        <div class="cookie-text">
            We use cookies to ensure the best possible interaction with the site.
        </div>
        <button class="cookie-button" onclick="hideCookieNotice()">OKAY</button>
    </div>

    <!-- Форма обратной связи -->
    <div class="feedback-form-overlay" id="feedback-form-overlay">
        <div class="feedback-form">
            <button class="feedback-form-close" id="feedback-form-close">
                <img src="assets/img/icons/header/cross.svg" alt="close">
            </button>
            
            <h2 class="feedback-form-title">Leave a phone number</h2>
            <p class="feedback-form-subtitle">I will call you back at the specified time.</p>
            
            <form id="feedback-form">
                <div class="feedback-form-group">
                    <label for="feedback-name" class="feedback-form-label">Name</label>
                    <input type="text" id="feedback-name" class="feedback-form-input" placeholder="Alex" required>
                </div>
                
                <div class="feedback-form-group">
                    <label for="feedback-phone" class="feedback-form-label">Phone</label>
                    <div class="feedback-form-phone-wrapper">
                        <div class="feedback-form-phone-flag">
                            <img src="assets/img/icons/header/emirates.svg" alt="UAE flag">
                        </div>
                        <input type="tel" id="feedback-phone" class="feedback-form-input feedback-form-phone-input" placeholder="+971 99 999 9999" required>
                    </div>
                </div>
                
                <div class="feedback-form-group">
                    <div class="feedback-form-datetime-group">
                        <div class="feedback-form-date-wrapper">
                            <label for="feedback-date" class="feedback-form-label">Date</label>
                            <input type="text" id="feedback-date" class="feedback-form-input feedback-form-date-input" placeholder="01-01-2025" required readonly>
                            <img src="assets/img/icons/header/calendar.svg" alt="calendar" class="feedback-form-date-icon">
                        </div>
                        
                        <div class="feedback-form-time-wrapper">
                            <label for="feedback-time" class="feedback-form-label">Time</label>
                            <input type="text" id="feedback-time" class="feedback-form-input feedback-form-time-input" placeholder="14:30" required>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="feedback-form-submit">Request a call</button>
            </form>
        </div>
    </div>

    <script src="assets/js/cookie.js"></script>
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/feedback-form.js"></script>
    <script src="assets/js/map.js"></script>
</body>
</html>