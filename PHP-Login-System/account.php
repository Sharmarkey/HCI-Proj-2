<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: login.php");
    exit();
}
if (isset($_GET['logout'])) {
    unset($_SESSION['user']);
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Imports the Philospher font family from Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap">
    <!-- Imports the Roboto font family from Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
<header class="header-flex-container">
        <div class="appointment-social-media-header" id="only-desktop">
            <h1 class="header-regular appointment-social-media-header-content">(507) 474-2221</h1>
            <p class="header-regular-small appointment-social-media-header-content">Call for Appointment</p>
            <ul class="social-media-list-flex-container appointment-social-media-header-content">
                <li class="nav-list-item paragraph-regular">
                    <a href="https://www.facebook.com/profile.php?id=61562904845913" class="social-media-list-icon">
                        <img class="social-media-icon" src="/assets/icons/fb_primary.ico" />
                    </a>
                </li>
                <li class="nav-list-item paragraph-regular">
                    <a href="https://www.youtube.com/channel/UCkqAJX7E3-nzu064ilpDDvw" class="social-media-list-icon">
                        <img class="social-media-icon" src="/assets/icons/yt_primary.ico" />
                    </a>
                </li>
                <li class="nav-list-item paragraph-regular">
                    <a href="https://www.instagram.com/bridgescommunityhealth_/" class="social-media-list-icon">
                        <img class="social-media-icon" src="/assets/icons/ig_primary.ico" />
                    </a>
                </li>
                <li class="nav-list-item paragraph-regular">
                    <a href="https://www.linkedin.com/company/bridges-health-winona?trk=public_profile_topcard-current-company"
                        class="social-media-list-icon">
                        <img class="social-media-icon" src="/assets/icons/in_primary.ico" />
                    </a>
                </li>
            </ul>
        </div>
        <a href="/donation.html">
            <img class="primary-logo" src="https://bridgeshealthwinona.org/wp-content/uploads/2024/08/logo-main.png">
        </a>
        <div class="header-button-container" id="only-desktop">
            <a href="/dontation.html">
                <button class="volunteer-button-header" id="volunteer-button">Volunteer</button>
            </a>
            <a href="https://stripe.com/">
                <button class="donation-button-header" id="donation-button">Donate</button>
            </a>
        </div>
    </header>
    <div class="nav-bar">
        <ul class="nav-list-flex-container">
            <li class="nav-list-item paragraph-regular">
                <a class="darken-nav-button" href="/donation.html">
                    <button class="nav-button"> Donate </button>
                </a>
            </li>
            <li class="nav-list-item paragraph-regular">
                <a href="/PHP-Login-System/login.php">
                    <button class="nav-button"> Login </button>
                </a>
            </li>
            <li class="nav-list-item paragraph-regular">
                <a href="/instagram_feed.html">
                    <button class="nav-button"> Social Media </button>
                </a>
            </li>
        </ul>
    </div>
    <div class="protected-page-content-container">
        <article class=protected-page-content>
            <h1 class="header-regular">Policies</h1>
            <p class=paragraph-regular>Here is the Bridges Health list of policies
                that are to be followed by all staff and volunteers.
                Please refer to this list as needed.</p>
        </article>
        <article class=protected-page-content>
            <h1 class="header-regular">Procedures</h1>
            <p class=paragraph-regular>Here are the Bridges Health step-by-step procedures
                that are to be followed by all staff and volunteers.
                Please refer to this list as needed.</p>
        </article>
        <article class=protected-page-content>
            <h1 class="header-regular">Training Videos</h1>
            <p class=paragraph-regular>Here are the Bridges Health training videos that will give you
                visual demonstrations of different tasks you will be expected to carry out during your time with us.
                Please feel free to review these videos as needed.</p>
        </article>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <div class="quick-link-container">
                <h1 class="header-regular appointment-social-media-header-content">Contact</h1>
                <p class="header-regular-small appointment-social-media-header-content">(507) 474-2221</p>
            </div>
            <div class="quick-link-container">
                <img class="favicon-footer" src="https://bridgeshealthwinona.org/wp-content/uploads/2024/08/heart.png">
                <ul class="social-media-list-flex-container appointment-social-media-header-content">
                    <li class="nav-list-item paragraph-regular">
                        <a href="https://www.facebook.com/profile.php?id=61562904845913" class="social-media-list-icon">
                            <img class="social-media-icon" src="/assets/icons/fb_white.ico" />
                        </a>
                    </li>
                    <li class="nav-list-item paragraph-regular">
                        <a href="https://www.youtube.com/channel/UCkqAJX7E3-nzu064ilpDDvw"
                            class="social-media-list-icon">
                            <img class="social-media-icon" src="/assets/icons/yt_white.ico" />
                        </a>
                    </li>
                    <li class="nav-list-item paragraph-regular">
                        <a href="https://www.instagram.com/bridgescommunityhealth_/" class="social-media-list-icon">
                            <img class="social-media-icon" src="/assets/icons/ig_white.ico" />
                        </a>
                    </li>
                    <li class="nav-list-item paragraph-regular">
                        <a href="https://www.linkedin.com/company/bridges-health-winona?trk=public_profile_topcard-current-company"
                            class="social-media-list-icon">
                            <img class="social-media-icon" src="/assets/icons/in_white.ico">
                        </a>
                    </li>
                </ul>
                <p class="paragraph-regular copy-write">© 2024 Bridges Health. A non-profit 501(c)(3).
                    <br>
                    "All Rights Reserved."
                </p>
            </div>
            <div class="quick-link-container">
                <p class="header-bold-small">Quick Links</p>
                <ul class="quick-link-list-container">
                    <li class="quick-link-item">
                        <a class="quick-link" href="/donation.html">
                            <p class="paragraph-regular ">Donate</p>
                        </a>
                    </li>
                    <li class="quick-link-item">
                        <a class="quick-link" href="/instagram_feed.html">
                            <p class="paragraph-regular">Social Media</p>
                        </a>
                    </li>
                    <li class="quick-link-item">
                        <a class="quick-link" href="?logout">
                            <p class="paragraph-regular">Logout</p>
                        </a>
                    </li>
                    <li class = "quick-link-item">
                        <form action="delete_account.php" method="POST" onsubmit="return confirm('Are you sure you want to delete your account?');">
                        <input type="hidden" name="username" value="<?php echo htmlspecialchars($_SESSION['user']); ?>">
                        <button class = "paragraph-regular logout-button" type="submit" name="delete_account">
                           Delete Account
                        </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>