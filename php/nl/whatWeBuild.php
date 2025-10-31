<?php
session_start();

if (isset($_POST['toggle'])) {
	if (isset($_SESSION['light']) && $_SESSION['light'] === true) {
		$_SESSION['light'] = false;
	} else {
		$_SESSION['light'] = true;
	}
	header("Location: " . $_SERVER['PHP_SELF']);
	exit();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/lightMode/whatWeBuild.css">
    <title>Wat We Bouwen</title>
    <link rel="icon" type="image/x-icon" href="../../images/favicon/favicon.ico">

    <?php
	if (!empty($_SESSION['light'])) {
		echo "<link rel='stylesheet' href='../../css/darkMode/whatWeBuild.css'>";
		echo "<link rel='stylesheet' href='../../css/darkMode/header.css'>";
	} else {
		echo "<link rel='stylesheet' href='../../css/lightmode/whatWeBuild.css'>";
		echo "<link rel='stylesheet' href='../../css/lightMode/header.css'>";
	}
	?>
</head>
<body>
    <?php include '../../php/nl/header.php'; ?>

    <main class="services" role="main">
        <h1 class="page-title">Wat We Bouwen</h1>

        <div class="service-box cyberSecurityServices">
            <img src="../../images/whatWeBuild/lock.png" alt="" aria-hidden="true">
            <h3>Cybersecuritydiensten</h3>
            <p>Beveiligingsaudits, tests en naleving.</p>
        </div>

        <div class="service-box mobileAppDevelopment">
            <img src="../../images/whatWeBuild/phone.png" alt="" aria-hidden="true">
            <h3>Mobiele app-ontwikkeling</h3>
            <p>Apps voor iOS, Android en meer.</p>
        </div>

        <div class="service-box maintainanceAndSupport">
            <img src="../../images/whatWeBuild/desktop.png" alt="" aria-hidden="true">
            <h3>Onderhoud & ondersteuning</h3>
            <p>Regelmatige updates, bugfixes en verbeteringen.</p>
        </div>

        <div class="service-box customSoftware">
            <img src="../../images/whatWeBuild/laptop1.png" alt="" aria-hidden="true">
            <h3>Maatwerksoftware</h3>
            <p>Oplossingen op maat voor jouw bedrijfsbehoeften.</p>
        </div>

        <div class="service-box cloudSolutions">
            <img src="../../images/whatWeBuild/cloud1.png" alt="" aria-hidden="true">
            <h3>Cloudoplossingen</h3>
            <p>Veilige, schaalbare en altijd beschikbare infrastructuur.</p>
        </div>

        <div class="service-box webDevelopment">
            <img src="../../images/whatWeBuild/table.png" alt="" aria-hidden="true">
            <h3>Webontwikkeling</h3>
            <p>Responsieve, moderne websites en apps voor jouw merk.</p>
        </div>

        <!-- animated gear icons -->
        <div class="gearIcons" id="gearContainer">
            <img class="gear gear-1" src="../../images/whatWeBuild/gear-icon.png" alt="Tandwiel">
            <img class="gear gear-2" src="../../images/whatWeBuild/gear-icon.png" alt="Tandwiel">
            <img class="gear gear-3" src="../../images/whatWeBuild/gear-icon.png" alt="Tandwiel">
        </div>
    </main>

    <footer class="cta" role="contentinfo">
        <h2>Ontdek D.O.T.S, Verken onze Blog, Doe de Quiz of Begin Nu.</h2>
        <a class="cta-link" href="../../php/nl/dots.php">Bekijk D.O.T.S</a>
        <a class="cta-link" href="../../php/nl/blogs.php">Onze Blog</a>
        <a class="cta-link" href="../../php/nl/miniQuiz.php">Doe de Quiz</a>
        <a class="cta-link" href="../../php/nl/contactPage.php">Start je project</a>
    </footer>
    
</body>
</html>