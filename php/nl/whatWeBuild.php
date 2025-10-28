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
    <title>Wat we bouwen</title>
    <link rel="stylesheet" href="<?= htmlspecialchars($themeCss, ENT_QUOTES) ?>">
</head>
<body>
    <header>
        <div class="backgroundimagemaindiv">
            <div class="headerdivmain">
                <a href="mainPage.php">
                    <img class="headerImagedots" src="../../images/header/circleSolutionsLogo.png" alt="Circle Solutions-logo">
                </a>
                <ul class="headerbuttons">
                    <li><a href="dots.php">D.O.T.S</a></li>
                    <li><a href="contactPage.php">Contact</a></li>
                    <li><a href="aboutus.php">Over ons</a></li>
                    <li><a href="whatwebuild.php">Oplossingen</a></li>
                    <li>
                        <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
                            <button name="toggle" class="buttonflag buttondarLight">
                                <img src="<?= $_SESSION['light']
                                    ? '../../images/header/lightModeToggle.png'
                                    : '../../images/header/darkModeToggle.png' ?>" alt="Thema wisselen">
                            </button>
                        </form>
                    </li>
                    <li>
                        <a class="buttonflag" href="../en/whatwebuild.php">
                            <img src="../../images/header/flagNl.jpg" alt="Dutch vlag">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="services" role="main">
        <h1 class="page-title">Wat we bouwen</h1>

        <div class="service-box">
            <img src="../../images/lock.png" alt="" aria-hidden="true">
            <h3>Cybersecuritydiensten</h3>
            <p>Beveiligingsaudits, tests en naleving.</p>
        </div>

        <div class="service-box">
            <img src="../../images/phone.png" alt="" aria-hidden="true">
            <h3>Mobiele app-ontwikkeling</h3>
            <p>Apps voor iOS, Android en meer.</p>
        </div>

        <div class="service-box">
            <img src="../../images/desktop.png" alt="" aria-hidden="true">
            <h3>Onderhoud & ondersteuning</h3>
            <p>Regelmatige updates, bugfixes en verbeteringen.</p>
        </div>

        <div class="service-box">
            <img src="../../images/laptop1.png" alt="" aria-hidden="true">
            <h3>Maatwerksoftware</h3>
            <p>Oplossingen op maat voor jouw bedrijfsbehoeften.</p>
        </div>

        <div class="service-box">
            <img src="../../images/cloud1.png" alt="" aria-hidden="true">
            <h3>Cloudoplossingen</h3>
            <p>Veilige, schaalbare en altijd beschikbare infrastructuur.</p>
        </div>

        <div class="service-box">
            <img src="../../images/table.png" alt="" aria-hidden="true">
            <h3>Webontwikkeling</h3>
            <p>Responsieve, moderne websites en apps voor jouw merk.</p>
        </div>
    </main>

    <footer class="cta" role="contentinfo">
        <h2>Bekijk D.O.T.S of laten we aan de slag gaan.</h2>
        <a class="cta-link" href="dots.php">Bekijk D.O.T.S</a>
        <a class="cta-primary" href="contactPage.php">Start jouw project</a>
    </footer>
</body>
</html>