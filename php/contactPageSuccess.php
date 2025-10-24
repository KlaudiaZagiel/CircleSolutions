<!-- Code a closing circle in HTML CSS and JS -->
<?php
$next    = $_GET['next'] ?? '../html/mainPage.php';
$seconds = 5;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you!</title>
    <link rel="stylesheet" href="../css/contactPageSuccess.css">
    <meta http-equiv="refresh" content="<?= (int)$seconds ?>;url=<?= htmlspecialchars($next, ENT_QUOTES) ?>">
  </head>

  <body>

		<!-- Headers -->
		<div class="header">
			<!-- Header Buttons -->
            <a href="mainPage.html" class="headerButton homeButton">Home</a>
            <a href="dots.html" class="headerButton dotsButton">D.O.T.S.</a>
            <a href="" class="headerButton solutionsButton">Solutions</a>
			<a href="aboutus.html" class="headerButton aboutUsButton">About us</a>

			<hr>
			
    </div>

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

      <script src="../js/contactPageSuccess.js"></script>


      <!-- Contact tags -->
			<img src="../images/contactPage/phone.png" class="phoneIconContact" alt="Phone Icon">
			<div class="phoneIconText contactIconsText"><a href="tel:0565445421">0565445421</a></div>

			<img src="../images/contactPage/email.png" class="emailIconContact" alt="Email Icon">
			<div class="emailIconText contactIconsText"><a href="mailto:info@circlesolutions.com?subject=Website%20contact">info@circlesolutions.com</a></div>

			<img src="../images/contactPage/home.png" class="addressIconContact" alt="Address Icon">
			<div class="addressIconText contactIconsText"><a href="https://maps.app.goo.gl/xbBmqjwVYxFGVoxU6" target="_blank" rel="noopener">Circle Street 76, Emmen</a></div>


			<!-- Social media tags -->
			<img src="../images/contactPage/instagram.png" class="instagramIcon socialMediaIcons" alt="Instagram Icon">
			<img src="../images/contactPage/x.png" class="xLogoIcon socialMediaIcons" alt="X logo Icon">
			<img src="../images/contactPage/linkedIn.png" class="linkedInIcon socialMediaIcons" alt="LinkedIn Icon">
			<div class="circleSolutionsInstagramTag">@circlesolutions</div>

			<!-- Copyright tag -->
      <img src="../images/contactPage/copyright.png" class="circleSolutionsCopyrightImage" alt="Copyright Icon">
			<div class="circleSolutionsCopyrightTag">Circle Solutions 2025</div>

		</div>







  </body>
</html>
