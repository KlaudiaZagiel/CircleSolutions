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

$formErrorHtml = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$firstName   = filter_input(INPUT_POST, 'firstName');
	$lastName    = filter_input(INPUT_POST, 'lastName');
	$companyName = filter_input(INPUT_POST, 'companyName');
	$email       = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$yourMessage = filter_input(INPUT_POST, 'yourMessage');
	$howDidYouHear = filter_input(INPUT_POST, 'howDidYouHear');

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

	if (empty($howDidYouHear)) {
		$errorMessages[] = "Hoe heeft u over ons gehoord?";
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
		$header  = ['Timestamp','First Name','Last Name','Company Name', 'Email', 'Message', 'How did you hear about us?'];
		
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
		fputcsv($fp, [gmdate('c'), $firstName, $lastName, $companyName, $email, $yourMessage, $howDidYouHear], $sep, $enc, $esc);
		
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

<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact</title>
		<script defer src="../../js/contactPage.js"></script>
		<link rel="icon" type="image/x-icon" href="../../images/favicon/favicon.ico">

		<?php
			// CSS chosen based on dark or light mode
			if (!empty($_SESSION['light'])) {
				echo "<link rel='stylesheet' href='../../css/darkMode/contactPage.css'>";
				echo "<link rel='stylesheet' href='../../css/darkMode/header.css'>";
				$verticalCircleSolutionsLogoFile = 'verticalCircleSolutionsLogoDark.png';
			} else {
				echo "<link rel='stylesheet' href='../../css/lightMode/contactPage.css'>";
				echo "<link rel='stylesheet' href='../../css/lightMode/header.css'>";
				$verticalCircleSolutionsLogoFile = 'verticalCircleSolutionsLogoLight.png';
			}
			$verticalCircleSolutionsLogoPath = "../../images/contactPage/" . $verticalCircleSolutionsLogoFile;
		?>

	</head>

	<body>

		<!-- Header -->
		<?php include '../../php/nl/header.php'; ?>

		<!-- Main Page -->
		<div class="pageGrid">
			<!-- Hero text -->
			<h1 class="heroReadyTo">Klaar om</h1>
			<h1 class="heroGetStarted">te beginnen?</h1>

			<h2 class="subheadingNextSolution">Uw volgende oplossing begint hier. Laten we eens praten.</h2>

			<img class="verticalCircleSolutionsLogo" src="<?php echo htmlspecialchars($verticalCircleSolutionsLogoPath, ENT_QUOTES); ?>" alt="Logo van Vertical Circle Solutions">

			<img src="../../images/contactPage/phone.png" class="phoneIconContact" alt="Telefoonpictogram">
			<div class="phoneIconText contactIconsText"><a href="tel:0565445421">0565445421</a></div>

			<img src="../../images/contactPage/email.png" class="emailIconContact" alt="E-mailpictogram">
			<div class="emailIconText contactIconsText"><a href="mailto:info@circlesolutions.com?subject=Website%20contact">info@circlesolutions.com</a></div>

			<img src="../../images/contactPage/home.png" class="addressIconContact" alt="Adrespictogram">
			<div class="addressIconText contactIconsText"><a href="https://maps.app.goo.gl/xbBmqjwVYxFGVoxU6" target="_blank" rel="noopener">Cirkelstraat 76, Emmen</a></div>

			<!-- Contact form -->

			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST' class="contactFormGrid" novalidate>
					
				<img src="../../images/contactPage/userMemberIcon.png" class="userMemberIcon contactFormIcons" alt="Pictogram gebruiker">
				<input type="text" class="firstNameInput contactFormInput" name="firstName" id="firstName" placeholder="Voornaam">

				<input type="text" class="lastNameInput contactFormInput" name="lastName" id="lastName" placeholder="Achternaam">

				<hr class="contactFormHr1 contactFormHr">

				<img src="../../images/contactPage/companyIcon.png" class="companyIcon contactFormIcons" alt="Bedrijfspictogram">
				<input type="text" class="companyNameInput contactFormInput" name="companyName" id="companyName" placeholder="Bedrijfsnaam">

				<hr class="contactFormHr2 contactFormHr">

				<img src="../../images/contactPage/emailIcon.png" class="emailIcon contactFormIcons" alt="Pictogram e-mail">
				<input type="text" class="emailInput contactFormInput" name="email" id="email" placeholder="E-mail">

				<hr class="contactFormHr3 contactFormHr">

				<img src="../../images/contactPage/speechIcon.png" class="speechIcon contactFormIcons" alt="Pictogram spraakballon">
				<input type="text" class="yourMessageInput contactFormInput" name="yourMessage" id="yourMessage" placeholder="Uw Bericht">

				<hr class="contactFormHr4 contactFormHr">

				<img src="../../images/contactPage/telescopeIcon.png" class="telescopeIcon contactFormIcons" alt="Pictogram telescoop">
				<select name="howDidYouHear" class="contactFormInput" id="howDidYouHear" required>
					<option value="placeholder" disabled selected>Hoe heeft u over ons gehoord?</option>
					<option value="Research">Onderzoek</option>
					<option value="Marketing">Marketing</option>
					<option value="Industry event">Branche-evenement</option>
					<option value="Trade show">Beurs</option>
					<option value="Conference">Conferentie</option>
					<option value="Direct outreach">Directe benadering</option>
					<option value="Social media">Sociale media</option>
					<option value="Industry magazine">Branchemagazine</option>
					<option value="Word of mouth">Mond-tot-mondreclame</option>
				</select>

				<hr class="contactFormHr5 contactFormHr">

				<button type="submit" class="sendMessageButton">
					<img src="../../images/contactPage/sendMessage.png" alt="Pictogram bericht verzenden" class="sendMessageIcon contactFormInput">
					<span class="sendMessageText">Bericht verzenden</span>
				</button>
				
				<!-- Show errors from PHP in the form -->
				<?php print $formErrorHtml ?>

			</form>

			<!-- Social media tags -->
				<img src="../../images/contactPage/instagram.png" class="instagramIcon socialMediaIcons" alt="Instagram-pictogram">
				<img src="../../images/contactPage/x.png" class="xLogoIcon socialMediaIcons" alt="X-logo pictogram">
				<img src="../../images/contactPage/linkedIn.png" class="linkedInIcon socialMediaIcons" alt="LinkedIn-pictogram">
			<div class="circleSolutionsInstagramTag">@circlesolutions</div>

			<!-- Copyright tag -->
				 <img src="../../images/contactPage/copyright.png" class="circleSolutionsCopyrightImage" alt="Copyrightpictogram">
			<div class="circleSolutionsCopyrightTag">Circle Solutions 2025</div>

		</div>

	</body>

</html>
