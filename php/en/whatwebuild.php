<?php
session_start();

// Set default theme to light mode on first visit
if (!isset($_SESSION['light'])) {
    $_SESSION['light'] = true;
}

// Toggle theme if requested
if (isset($_POST['toggle'])) {
    $_SESSION['light'] = !$_SESSION['light'];
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Determine stylesheet
$themeCss = $_SESSION['light']
    ? '../../css/lightMode/whatWeBuild.css'
    : '../../css/darkMode/whatWeBuild.css';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What We Build</title>
    <link rel="stylesheet" href="<?= htmlspecialchars($themeCss, ENT_QUOTES) ?>">
</head>
<body>
    <header>
        <div class="backgroundimagemaindiv">
            <div class="headerdivmain">
                <a href="mainPage.php">
                    <img class="headerImagedots" src="../../images/header/circleSolutionsLogo.png" alt="Circle Solutions logo">
                </a>
                <ul class="headerbuttons">
                    <li><a href="dots.php">D.O.T.S</a></li>
                    <li><a href="contactPage.php">Contact</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="whatwebuild.php">Solutions</a></li>
                    <li>
                        <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
                            <button name="toggle" class="buttonflag buttondarLight">
                                <img src="<?= $_SESSION['light']
                                    ? '../../images/header/lightModeToggle.png'
                                    : '../../images/header/darkModeToggle.png' ?>" alt="Toggle theme">
                            </button>
                        </form>
                    </li>
                    <li>
                        <a class="buttonflag" href="../nl/whatwebuild.php">
                            <img src="../../images/header/flag.png" alt="english flag">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="services" role="main">
        <h1 class="page-title">What we build</h1>

        <div class="service-box">
            <img src="../../images/lock.png" alt="" aria-hidden="true">
            <h3>Cybersecurity Services</h3>
            <p>Security audits, testing, and compliance.</p>
        </div>

        <div class="service-box">
            <img src="../../images/phone.png" alt="" aria-hidden="true">
            <h3>Mobile App Development</h3>
            <p>Apps for iOS, Android, and beyond.</p>
        </div>

        <div class="service-box">
            <img src="../../images/desktop.png" alt="" aria-hidden="true">
            <h3>Maintenance & Support</h3>
            <p>Regular updates, bug fixes, and feature improvements.</p>
        </div>

        <div class="service-box">
            <img src="../../images/laptop1.png" alt="" aria-hidden="true">
            <h3>Custom Software</h3>
            <p>Tailored solutions built around your business needs.</p>
        </div>

        <div class="service-box">
            <img src="../../images/cloud1.png" alt="" aria-hidden="true">
            <h3>Cloud Solutions</h3>
            <p>Secure, scalable, and always-on infrastructure.</p>
        </div>

        <div class="service-box">
            <img src="../../images/table.png" alt="" aria-hidden="true">
            <h3>Web Development</h3>
            <p>Responsive, modern websites and apps for your brand.</p>
        </div>
    </main>

    <footer class="cta" role="contentinfo">
        <h2>Check out D.O.T.S or let’s get to work.</h2>
        <a class="cta-link" href="dots.php">Check D.O.T.S</a>
        <a class="cta-primary" href="contactPage.php">Start your project</a>
    </footer>
</body>
</html>