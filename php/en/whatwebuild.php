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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/lightMode/whatWeBuild.css">
    <title>What We Build</title>
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
    <?php include '../../php/en/header.php'; ?>
    <main class="services" role="main">
        <h1 class="page-title">What we build</h1>

        <div class="service-box">
            <img src="../../images/whatWeBuild/lock.png" alt="" aria-hidden="true">
            <h3>Cybersecurity Services</h3>
            <p>Security audits, testing, and compliance.</p>
        </div>

        <div class="service-box">
            <img src="../../images/whatWeBuild/phone.png" alt="" aria-hidden="true">
            <h3>Mobile App Development</h3>
            <p>Apps for iOS, Android, and beyond.</p>
        </div>

        <div class="service-box">
            <img src="../../images/whatWeBuild/desktop.png" alt="" aria-hidden="true">
            <h3>Maintenance & Support</h3>
            <p>Regular updates, bug fixes, and feature improvements.</p>
        </div>

        <div class="service-box">
            <img src="../../images/whatWeBuild/laptop1.png" alt="" aria-hidden="true">
            <h3>Custom Software</h3>
            <p>Tailored solutions built around your business needs.</p>
        </div>

        <div class="service-box">
            <img src="../../images/whatWeBuild/cloud1.png" alt="" aria-hidden="true">
            <h3>Cloud Solutions</h3>
            <p>Secure, scalable, and always-on infrastructure.</p>
        </div>

        <div class="service-box">
            <img src="../../images/whatWebuild/table.png" alt="" aria-hidden="true">
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