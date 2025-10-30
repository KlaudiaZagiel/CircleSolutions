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
    <title>Wat we bouwen</title>
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