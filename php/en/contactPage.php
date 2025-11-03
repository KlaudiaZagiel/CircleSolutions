<?php
session_start();
// Set light toggle
if (isset($_POST['toggle'])) {
	if (isset($_SESSION['light']) && $_SESSION['light'] === true) {
		$_SESSION['light'] = false;
	} else {
		$_SESSION['light'] = true;
	}
	header("Location: " . $_SERVER['PHP_SELF']);
	exit();
}

// Configure mailer
require_once __DIR__ . '/../../phpMailer/autoload.php';
require_once __DIR__ . '/../../phpMailer/mailConfig.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Handle user form input
$formErrorHtml = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$firstName     = filter_input(INPUT_POST, 'firstName');
	$lastName      = filter_input(INPUT_POST, 'lastName');
	$companyName   = filter_input(INPUT_POST, 'companyName');
	$email         = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$yourMessage   = filter_input(INPUT_POST, 'yourMessage');
	$howDidYouHear = filter_input(INPUT_POST, 'howDidYouHear');

	$errorMessages = array();
	$emailInvalid  = "";

	// Appends strings to error messages depending on condition
	if (empty($firstName)) {
		$errorMessages[] = "First Name" ;
	}

	if (empty($lastName)) {
		$errorMessages[] = "Last Name" ;
	}

	if (empty($companyName)) {
		$errorMessages[] = "Company Name" ;
	}
	
	if (empty($email)) {
		$errorMessages[] = "E-mail" ;
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailInvalid = "Please input a valid E-mail";
	}
	
	if (empty($yourMessage)) {
		$errorMessages[] = "Your Message" ;
	}

	if (empty($howDidYouHear)) {
		$errorMessages[] = "How did you hear about us?";
	}

	// appends all errors to a single string
	// if errorMessages or emailInvalid
	if (!empty($errorMessages) || (!empty($emailInvalid))) {
		//if errorMessages only
		if (!empty($errorMessages) && empty($emailInvalid)) {
			$errorMessage = "Please input: " . implode(", ", $errorMessages);
		}
		// elseif emailInvalid and no errorMessages
		elseif ((!empty($emailInvalid)) && empty($errorMessages)) {
			$errorMessage = $emailInvalid;
		}
		//else both
		else {
			$errorMessage = "<p>Please input: " . implode(", ", $errorMessages) . "<br>" . $emailInvalid . "</p>";
		}

		//gets printed at the form section
		$formErrorHtml = '<div class="formErrorText">' . $errorMessage . '</div>';

	} else {
		// If no errors, write contact form details to CSV
		$csvFile = __DIR__ . '/../../contactFormSubmissions/submissions.csv';
		$header  = ['Timestamp','First name','Last name','Company name', 'Email', 'Message', 'How did you hear about us?'];
		
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
		
		//separator, enclosure and escape are passed separately to avoid deprecation warnings
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

		// send email to client
		// use this if long email messages cause issues
		// $emailMessage = wordwrap($emailMessage,70);
		$mailer = new PHPMailer(true);

		try {
			$mailer->isSMTP();
			$mailer->Host       = SMTP_HOST;
			$mailer->Port       = SMTP_PORT;
			$mailer->SMTPSecure = SMTP_ENCRYPTION;
			$mailer->SMTPAuth   = true;
			$mailer->Username   = SMTP_USERNAME;
			$mailer->Password   = SMTP_PASSWORD;
			$mailer->CharSet    = 'UTF-8';

			$mailer->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
			$mailer->addAddress($email, trim("$firstName $lastName"));
			$mailer->addReplyTo(SMTP_REPLY_TO);

			$mailer->Subject = "Thanks for reaching out to Circle Solutions!";
			$mailer->Body    = "Thanks for getting in touch with us," ." ".$firstName."!"." "."This is the information you have provided to us:"." ".$firstName." ".$lastName.", ".$companyName.", ".$email.", ".$yourMessage.", ".$howDidYouHear.". "."We've received your message and a member of our team will respond within, 1-4 business days. If your inquiry is urgent, feel free to call us directly at +31 12345678. We appreciate your interest in Circule Solutions and look forward to connecting with you soon. Best regards, The Circule Solutions Team.";
			$mailer->send();
		} catch (Exception $e) {
			error_log('Mailer error: ' . $mailer->ErrorInfo);
			$formErrorHtml = '<div class="formErrorText">The confirmation email was not sent successfully. Your details have been saved.</div>';
		}

	}
}
?>

<?php
$theme = !empty($_SESSION['light']) ? 'dark' : 'light';
?>
<body data-theme="<?= htmlspecialchars($theme, ENT_QUOTES) ?>">

<!DOCTYPE html>
<html lang="en">
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
		<?php include '../../php/en/header.php'; ?>

		<!-- Main Page -->
		<div class="pageGrid">
			<!-- Hero text -->
			<h1 class="heroReadyTo">Ready to</h1>
			<h1 class="heroGetStarted">get started?</h1>

			<h2 class="subheadingNextSolution">Your next solution begins here. Let's talk.</h2>

			<img class="verticalCircleSolutionsLogo" src="<?php echo htmlspecialchars($verticalCircleSolutionsLogoPath, ENT_QUOTES); ?>" alt="Logo van Vertical Circle Solutions">

			<img src="../../images/contactPage/phone.png" class="phoneIconContact" alt="Phone Icon">
			<div class="phoneIconText contactIconsText"><a href="tel:0565445421">0565445421</a></div>

			<img src="../../images/contactPage/email.png" class="emailIconContact" alt="Email Icon">
			<div class="emailIconText contactIconsText"><a href="mailto:info@circlesolutions.com?subject=Website%20contact">info@circlesolutions.com</a></div>

			<img src="../../images/contactPage/home.png" class="addressIconContact" alt="Address Icon">
			<div class="addressIconText contactIconsText"><a href="https://maps.app.goo.gl/xbBmqjwVYxFGVoxU6" target="_blank" rel="noopener">Circle Street 76, Emmen</a></div>

			<!-- Contact form -->

			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST' class="contactFormGrid" novalidate>
					
				<img src="../../images/contactPage/userMemberIcon.png" class="userMemberIcon contactFormIcons" alt="User Member Icon">
				<input type="text" class="firstNameInput contactFormInput" name="firstName" id="firstName" placeholder="First Name">

				<input type="text" class="lastNameInput contactFormInput" name="lastName" id="lastName" placeholder="Last Name">

				<hr class="contactFormHr1 contactFormHr">

				<img src="../../images/contactPage/companyIcon.png" class="companyIcon contactFormIcons" alt="Company Icon">
				<input type="text" class="companyNameInput contactFormInput" name="companyName" id="companyName" placeholder="Company Name">

				<hr class="contactFormHr2 contactFormHr">

				<img src="../../images/contactPage/emailIcon.png" class="emailIcon contactFormIcons" alt="Email Icon">
				<input type="text" class="emailInput contactFormInput" name="email" id="email" placeholder="E-mail">

				<hr class="contactFormHr3 contactFormHr">

				<img src="../../images/contactPage/speechIcon.png" class="speechIcon contactFormIcons" alt="Speech Icon">
				<input type="text" class="yourMessageInput contactFormInput" name="yourMessage" id="yourMessage" placeholder="Your Message">

				<hr class="contactFormHr4 contactFormHr">

				<img src="../../images/contactPage/telescopeIcon.png" class="telescopeIcon contactFormIcons" alt="Telescope Icon">
				<select name="howDidYouHear" class="contactFormInput" id="howDidYouHear" required>
					<option value="placeholder" disabled selected>How did you hear about us?</option>
					<option value="Research">Research</option>
					<option value="Marketing">Marketing</option>
					<option value="Industry event">Industry event</option>
					<option value="Trade show">Trade show</option>
					<option value="Conference">Conference</option>
					<option value="Direct outreach">Direct outreach</option>
					<option value="Social media">Social Media</option>
					<option value="Industry magazine">Industry magazine</option>
					<option value="Word of mouth">Word of Mouth</option>
				</select>

				<hr class="contactFormHr5 contactFormHr">

				<button type="submit" class="sendMessageButton">
					<img src="../../images/contactPage/sendMessage.png" alt="Send Message Icon" class="sendMessageIcon contactFormInput">
					<span class="sendMessageText">Send Message</span>
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
