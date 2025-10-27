<?php
$formErrorHtml = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$firstName   = filter_input(INPUT_POST, 'firstName');
	$lastName    = filter_input(INPUT_POST, 'lastName');
	$companyName = filter_input(INPUT_POST, 'companyName');
	$email       = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$yourMessage = filter_input(INPUT_POST, 'yourMessage');

	$errorMessages = array();
	$emailInvalid  = "";

	// Appends strings to error messages depending on condition
	if (empty($firstName)) {
		$errorMessages[] = "Voornaam" ;
	}

	if (empty($lastName)) {
		$errorMessages[] = "Achternaam" ;
	}

	if (empty($companyName)) {
		$errorMessages[] = "Bedrijfsnaam" ;
	}
	
	if (empty($email)) {
		$errorMessages[] = "E-mail" ;
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailInvalid = "Voer een geldig e-mailadres in.";
	}
	
	if (empty($yourMessage)) {
		$errorMessages[] = "Uw bericht" ;
	}

	// appends all errors to a single string
	// if errorMessages or emailInvalid
	if (!empty($errorMessages) || (!empty($emailInvalid))) {
		//if errorMessages only
		if (!empty($errorMessages) && empty($emailInvalid)) {
			$errorMessage = "Voer het volgende in: " . implode(", ", $errorMessages);
		}
		// elseif emailInvalid and no errorMessages
		elseif ((!empty($emailInvalid)) && empty($errorMessages)) {
			$errorMessage = $emailInvalid;
		}
		//else both
		else {
			$errorMessage = "Voer het volgende in: " . implode(", ", $errorMessages) . "<br>" . $emailInvalid;
		}

		//gets printed at the form section
		$formErrorHtml = '<div class="formErrorText">' . $errorMessage . '</div>';

	} else {
		// If no errors, write contact form details to CSV
		$csvFile = __DIR__ . '/../../contactFormSubmissions/submissions.csv';
		$header  = ['Timestamp','First Name','Last Name','Company Name', 'Email', 'Message'];
		
		$needHeader = !file_exists($csvFile) || filesize($csvFile) === 0;
		$fp = fopen($csvFile, 'a');
		if (!$fp) {
			http_response_code(500);
			echo 'Cannot open CSV for writing.';
			exit;
		}
		if (!flock($fp, LOCK_EX)) {
			fclose($fp);
			http_response_code(500);
			echo 'Could not lock file.';
			exit;
		}
		
		//separator, enclosure and escape passed separately to avoid deprecation warnings
		$sep = ',';
		$enc = '"';
		$esc = '\\';
		
		if ($needHeader) {
			fputcsv($fp, $header, $sep, $enc, $esc);
		}
		fputcsv($fp, [gmdate('c'), $firstName, $lastName, $companyName, $email, $yourMessage], $sep, $enc, $esc);
		
		fflush($fp);
		flock($fp, LOCK_UN);
		fclose($fp);
		
		$referer = $_SERVER['HTTP_REFERER'] ?? 'index.php';
		$sepchar = (strpos($referer, '?') === false) ? '?' : '&';

		$next = 'mainPage.php'; // your home page
			header('Location: contactPageSuccess.php?next=' . urlencode($next));
	}
}
?>

 <!-- add dutch version, make it responsive @media 800px-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact</title>
		<link rel="stylesheet" href="../../css/lightMode/contactPage.css">
	</head>

	<body>
		<!-- Headers -->
		<div class="header">
			<!-- Header Buttons -->
            <a href="mainPage.php" class="headerButton homeButton">Startpagina</a>
            <a href="dots.php" class="headerButton dotsButton">D.O.T.S.</a>
            <a href="" class="headerButton solutionsButton">Oplossingen</a>
			<a href="aboutUs.php" class="headerButton aboutUsButton">Over Ons</a>

			<hr>
			
        </div>

		<!-- Main Page -->
		<div class="pageGrid">
			<!-- Hero text -->
			<h1 class="heroReadyTo">Klaar om</h1>
			<h1 class="heroGetStarted">te beginnen?</h1>

			<h2 class="subheadingNextSolution">Uw volgende oplossing begint hier. Laten we eens praten.</h2>

			<img class="verticalCircleSolutionsLogo" src="../../images/contactPage/verticalCircleSolutionsLogo.png" alt="Vertical Circle Solutions Logo">

			<img src="../../images/contactPage/phone.png" class="phoneIconContact" alt="Phone Icon">
			<div class="phoneIconText contactIconsText"><a href="tel:0565445421">0565445421</a></div>

			<img src="../../images/contactPage/email.png" class="emailIconContact" alt="Email Icon">
			<div class="emailIconText contactIconsText"><a href="mailto:info@circlesolutions.com?subject=Website%20contact">info@circlesolutions.com</a></div>

			<img src="../../images/contactPage/home.png" class="addressIconContact" alt="Address Icon">
			<div class="addressIconText contactIconsText"><a href="https://maps.app.goo.gl/xbBmqjwVYxFGVoxU6" target="_blank" rel="noopener">Cirkelstraat 76, Emmen</a></div>

			<!-- Contact form -->

			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST' class="contactFormGrid" novalidate>
					
				<img src="../../images/contactPage/userMemberIcon.png" class="userMemberIcon contactFormIcons" alt="User Member Icon">
				<input type="text" class="firstNameInput contactFormInput" name="firstName" id="firstName" placeholder="Voornaam">

				<input type="text" class="lastNameInput contactFormInput" name="lastName" id="lastName" placeholder="Achternaam">

				<hr class="contactFormHr1 contactFormHr">

				<img src="../../images/contactPage/companyIcon.png" class="companyIcon contactFormIcons" alt="">
				<input type="text" class="companyNameInput contactFormInput" name="companyName" id="companyName" placeholder="Bedrijfsnaam">

				<hr class="contactFormHr2 contactFormHr">

				<img src="../../images/contactPage/emailIcon.png" class="emailIcon contactFormIcons" alt="">
				<input type="text" class="emailInput contactFormInput" name="email" id="email" placeholder="E-mail">

				<hr class="contactFormHr3 contactFormHr">

				<input type="text" class="yourMessageInput contactFormInput" name="yourMessage" id="yourMessage" placeholder="Uw Bericht">

				<button type="submit" class="sendMessageButton">
					<img src="../../images/contactPage/sendMessage.png" alt="Send Message Icon" class="sendMessageIcon contactFormInput">
					<span class="sendMessageText">Bericht verzenden</span>
				</button>
				
				<!-- Show errors from PHP in the form -->
				<?php print $formErrorHtml ?>

			</form>

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
