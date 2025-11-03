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
    <title>Security First: Our Approach to Safe Software</title>
    <link rel="icon" type="image/x-icon" href="../../images/favicon/favicon.ico">

    <?php
	if (!empty($_SESSION['light'])) {
		echo "<link rel='stylesheet' href='../../css/darkMode/blogPostSecurity.css'>";
		echo "<link rel='stylesheet' href='../../css/darkMode/header.css'>";
	} else {
		echo "<link rel='stylesheet' href='../../css/lightMode/blogPostSecurity.css'>";
		echo "<link rel='stylesheet' href='../../css/lightMode/header.css'>";
	}
	?>
</head>

<body>
    <?php include '../../php/en/header.php'; ?>

    <div class="topText">
        <h1 class="intro">
            Our Blogs
        </h1>
        <hr>
    </div>
    
    <main>
        <div class="mainFocus">
            <div class="mainHeader">
                <h1>Security First: Our Approach to Safe Software</h1>
            </div>
            <div class="mainContent">
                <p>
                    Security is a product requirement, not an add-on. We design every feature with the goal of protecting users, data, and service availability.
                </p>
                
                <h2>Core principles</h2>
                <ul>
                    <li>
                        Secure by Design: threat modeling and least-privilege architecture guide decisions from day one
                    </li>
                    <li>
                        Secure by Default: strong settings ship enabled so secure behavior is the path of least resistance.
                    </li>
                    <li>
                        Continuous Improvement: automated checks, telemetry, and regular exercises keep risk declining over time.
                    </li>
                </ul>
                <h2>How we build</h2>
                    <p>
                        We shift security left by embedding linters, SAST, dependency scanning, and secrets detection into developer workflows. We validate releases with dynamic testing and focused pen tests, gate deployments on security criteria, and enforce immutable, auditable infrastructure in production.
                    </p>
                <h2>Culture and governance</h2>
                    <p>
                        Security is a shared responsibility across product, engineering, and operations. Decisions are reviewed cross-functionally, prioritization is threat-informed, and incidents are treated as learning opportunities through blameless postmortems.
                    </p>
                <h2>Outcomes</h2>
                    <p>
                        The result is faster remediation, fewer critical incidents, maintained developer velocity, and stronger customer trust. Security-first practices deliver resilient, trustworthy software that scales with confidence.
                    </p>
            </div>
        </div>
    </main>
    
    <div class="copyRightDots">
        <img class="copyRightImg" src="../../images/Copyright.png" alt="Copyright">
        <p class="copyRightText">circlesolutions2025</p>
    </div>
</body>
</html>