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

$next    = $_GET['next'] ?? 'mainPage.php';
$seconds = 5;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you!</title>
    <script defer src="../../js/contactPageSuccess.js"></script>
    <meta http-equiv="refresh" content="<?= (int)$seconds ?>;url=<?= htmlspecialchars($next, ENT_QUOTES) ?>">
    <link rel="icon" type="image/x-icon" href="../../images/favicon/favicon.ico">

    <?php
		// CSS chosen based on dark or light mode
		if (!empty($_SESSION['light'])) {
			echo "<link rel='stylesheet' href='../../css/darkMode/contactPageSuccess.css'>";
			echo "<link rel='stylesheet' href='../../css/darkMode/header.css'>";
		} else {
			echo "<link rel='stylesheet' href='../../css/lightMode/contactPageSuccess.css'>";
			echo "<link rel='stylesheet' href='../../css/lightMode/header.css'>";
		}
    ?>

  </head>

  <body>

    <!-- Header -->
		<?php include '../../php/en/header.php'; ?>

		<!-- Main Page -->
		<div class="pageGrid">

      <div class="circleSolutionsWellBeInTouchText circleSolutionsLogoLargeText circleSolutionsText black">We'll be in touch!</div>
      <div class="circleSolutionsLogoMediumText circleSolutionsText">You're one step closer to closing the circle</div>
    
      <div class="circleSolutionsSmallText circleSolutionsText black subheadingNextSolution">You will be redirected to the home page shortly</div>

      <div class="animationGrid">

        <div class="circleSolutionsLogoCircle circleSolutionsLogoLargeText circleSolutionsText">circle</div>
        <div class="circleSolutionsLogoSolutions circleSolutionsLogoLargeText circleSolutionsText">solutions</div>
        <div class="circleSolutionsLogoJustConnectTheDots">just connect the dots</div>

        <div class="radialProgress"></div>

      </div>

      <!-- Contact tags -->
			<img src="../../images/contactPage/phone.png" class="phoneIconContact" alt="Phone Icon">
			<div class="phoneIconText contactIconsText"><a href="tel:0565445421">0565445421</a></div>

			<img src="../../images/contactPage/email.png" class="emailIconContact" alt="Email Icon">
			<div class="emailIconText contactIconsText"><a href="mailto:info@circlesolutions.com?subject=Website%20contact">info@circlesolutions.com</a></div>

			<img src="../../images/contactPage/home.png" class="addressIconContact" alt="Address Icon">
			<div class="addressIconText contactIconsText"><a href="https://maps.app.goo.gl/xbBmqjwVYxFGVoxU6" target="_blank" rel="noopener">Circle Street 76, Emmen</a></div>


			<!-- Social media tags -->
			<img src="../../images/contactPage/instagram.png" class="instagramIcon socialMediaIcons" alt="Instagram Icon">
			<img src="../../images/contactPage/x.png" class="xLogoIcon socialMediaIcons" alt="X logo Icon">
			<img src="../../images/contactPage/linkedIn.png" class="linkedInIcon socialMediaIcons" alt="LinkedIn Icon">
			<div class="circleSolutionsInstagramTag">@circlesolutions</div>

			<!-- Copyright tag -->
      <img src="../../images/contactPage/copyright.png" class="circleSolutionsCopyrightImage" alt="Copyright Icon">
			<div class="circleSolutionsCopyrightTag">Circle Solutions 2025</div>

		</div>

  </body>
</html>
