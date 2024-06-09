<?php
	ini_set("error_reporting", 1);
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Expires: 0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	if($_GET['rel']!='tab'){
?>
<!DOCTYPE html>
<html lang="en" translate="no" style="padding : 0%">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <meta http-equiv="content-type" content="application/javascript;">
    <title>AntOrb</title>
    <!-- CSS with cache busting -->
    <link rel="stylesheet" href="assets/css/styles.css?v=2">
    <!-- JavaScript with cache busting -->
    <script src="script.js?v=2"></script>
    <!-- Tailwind.css CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- GOOGLE FONT CDN -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- JAVASCRIPT FILES -->
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--include page redirection javascript code-->
    <script src="page_redirection.js"></script>
    <!--carousel design javascript code-->
    <script src="carousel.js"></script>
    <!--TAP TO TOP design javascript code-->
    <script src="script.js"></script>
    <script src="modal.js"></script>

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!--=============== to make website installable starts ===============-->
    <link rel="manifest" href="/manifest.json">
    <script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/service-worker.js')
                .then(function(registration) {
                    console.log('Service Worker registered with scope: ', registration.scope);
                }, function(err) {
                    console.log('Service Worker registration failed: ', err);
                });
        });
    }
    </script>
    <!--=============== to make website installable ends ===============-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <!--=============== to make website installable starts ===============-->
    <button id="installButton" style="display: none;">Install App</button>
    <!--=============== to make website installable ends ===============-->
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <a rel='tab' href="index.php" class="nav__logo">AntOrb</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a rel='tab' href="index.php" class="nav__link active-link">
                            <i class='bx bx-home-alt nav__icon'></i>
                            <span class="nav__name">Home</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a rel='tab' href="explore.php" class="nav__link">
                            <i class='bx bx-search-alt-2 nav__icon'></i>
                            <span class="nav__name">Explore</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a rel='tab' href="service.php" class="nav__link">
                            <i class='bx bx-category-alt nav__icon'></i>
                            <span class="nav__name">Service</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a rel='tab' href="profile.php" class="nav__link">
                            <i class='bx bx-user nav__icon'></i>
                            <span class="nav__name">Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
            <i class='bx bx-menu nav__icon' id="nav-menu-icon"></i>
        </nav>
    </header>
    <!-- HTML for the drawer menu -->
    <div class="drawer" id="drawer">
        <div class="drawer__arrow" id="drawer_arrow"><i class='bx bx-chevron-down'></i></div>
        <div class="drawer__content">
            <ul class="drawer__list">
                <li class="drawer__item">
                    <i class='bx bx-shield bx-fw drawer__icon'></i>
                    <a href="service.php" class=" drawer__link">Privacy Policy</a>
                </li>
                <li class="drawer__item">
                    <i class='bx bx-help-circle bx-fw drawer__icon'></i>
                    <a href="help.php" class="drawer__link">Help</a>
                </li>
                <li class="drawer__item">
                    <i class='bx bx-cog bx-fw drawer__icon'></i>
                    <a href="settings.php" class="drawer__link">Settings</a>
                </li>
                <li class="drawer__item">
                    <i class='bx bx-link-external bx-fw drawer__icon'></i>
                    <a href="links.php" class="drawer__link">Links</a>
                </li>
                <li class="drawer__item">
                    <i class='bx bx-help-circle bx-fw drawer__icon'></i>
                    <a href="help.php" class="drawer__link">Help</a>
                </li>
                <li class="drawer__item">
                    <i class='bx bx-cog bx-fw drawer__icon'></i>
                    <a href="settings.php" class="drawer__link">Settings</a>
                </li>
                <li class="drawer__item">
                    <i class='bx bx-cog bx-fw drawer__icon'></i>
                    <a href="settings.php" class="drawer__link">Settings</a>
                </li>
                <li class="drawer__item">
                    <i class='bx bx-link-external bx-fw drawer__icon'></i>
                    <a href="links.php" class="drawer__link">Links</a>
                </li>
                <li class="drawer__item">
                    <i class='bx bx-help-circle bx-fw drawer__icon'></i>
                    <a href="help.php" class="drawer__link">Help</a>
                </li>
                <li class="drawer__item">
                    <i class='bx bx-cog bx-fw drawer__icon'></i>
                    <a href="settings.php" class="drawer__link">Settings</a>
                </li>
            </ul>
        </div>
    </div>

    <div id='content' class='content'>
        <?php } ?>

        <!-- end of the body tag is in the footer.php file -->
        <!-- end of the html tag is in the footer.php file -->