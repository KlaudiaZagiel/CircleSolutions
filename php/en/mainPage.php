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
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="../../images/favicon/favicon.ico">

	<?php
	if (!empty($_SESSION['light'])) {
		echo "<link rel='stylesheet' href='../../css/darkMode/mainPageStyles.css'>";
	} else {
		echo "<link rel='stylesheet' href='../../css/lightMode/mainPageStyles.css'>";
	}
	?>

	<title>Main page</title>
</head>
<body>
	<?php include '../../php/en/header.php'; ?>

	<div class="backroundimagemaindiv">
		<p class="solutiontext headertextposition">Software Solutions</p>
		<p class="headertextposition headerlowertextposition">Connect. Collaborate. Simplify</p>

		<div class="headerceanterbuttons">
			<a href="../../pdfFiles/CircleSolutionsBrochure.pdf" download="CircleSolutionsBrochure.pdf"
			   style="text-decoration: none;" type="application/pdf">
				<div class="dotsdiv">
					<p class="dotstext">Download our brochure</p>
				</div>
			</a>
		</div>
	</div>

	<div class="bottomdiv">
		<p class="introducingtext">Introducing Circle D.O.T.S</p>
		<hr>

		<div class="bottomblocksdiv">
			<div class="bottomblock">
				<img class="bottomimg" src="<?php
					if (!empty($_SESSION['light'])) {
						echo "../../images/mainPage/chat_white.png";
					} else {
						echo "../../images/mainPage/chat.png";
					}
				?>" alt="chat">
				<p class="bottomblocktext">Simplify Communication</p>
			</div>

			<div class="bottomblock">
				<img class="bottomimg" src="<?php
					if (!empty($_SESSION['light'])) {
						echo "../../images/mainPage/puzzle_white.png";
					} else {
						echo "../../images/mainPage/puzzle.png";
					}
				?>" alt="puzzle">
				<p class="bottomblocktext">Optimize teamwork</p>
			</div>

			<div class="bottomblock">
				<img class="bottomimg" src="<?php
					if (!empty($_SESSION['light'])) {
						echo "../../images/mainPage/search_white.png";
					} else {
						echo "../../images/mainPage/search.png";
					}
				?>" alt="search">
				<p class="bottomblocktext">Smart Insights</p>
			</div>
		</div>

		<hr>
		<p class="bottomtext">"Circle D.O.T.S. is our flagship platform to simplify communication,</p>
		<p class="bottomtext bottomtextmargin">streamline collaboration, and provide smart insights for better decisions."</p>

		<div class="copyright">
			<img class="copyrightimg" src="../../images/Copyright.png" alt="Copyright">
			<p class="copyrighttext">circlesolutions2025</p>
		</div>
	</div>
</body>
</html>
