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
		echo "<link rel='stylesheet' href='../../css/darkMode/aboutUs.css'>";
		echo "<link rel='stylesheet' href='../../css/darkMode/header.css'>";
	} else {
		echo "<link rel='stylesheet' href='../../css/lightMode/aboutUs.css'>";
		echo "<link rel='stylesheet' href='../../css/lightMode/header.css'>";
	}
	?>

	<title>About us</title>
</head>

<body>
	<?php include '../../php/en/header.php'; ?>

	<hr class="headerhr">
	<p class="headertext">We make software simple.</p>
	<div class="faqbutton">
		<a href="../en/faqPage.php" class="faq-button">Go to FAQ</a>
	</div>

	<div class="maindiv">
		<div class="centraldiv">
			<div class="centralblock">

				<div class="centralblockdiv centralblockmargin">
					<img class="centralblockimg1" src="../../images/aboutUs/tick.png" alt="tick">
					<p class="centralblocktext centralblocktexthighermargin">Simple</p>
					<p class="centralblocktext centralblocktextlowermargin">Simple interfaces that anyone can use.</p>
				</div>

				<div class="centralblockdiv centralblockmargin">
					<img class="centralblockimg2" src="../../images/aboutUs/lighting.png" alt="lighting">
					<p class="centralblocktext centralblocktexthighermargin">Efficient</p>
					<p class="centralblocktext centralblocktextlowermargin">Streamlined processes that save time.</p>
				</div>

				<div class="centralblockdiv centralblockmargin">
					<img class="centralblockimg3" src="../../images/aboutUs/person.png" alt="person">
					<p class="centralblocktext centralblocktexthighermargin">User-friendly</p>
					<p class="centralblocktext centralblocktextlowermargin">Effortless solutions for real users.</p>
				</div>

			</div>

			<p class="centralblockbottomtext highermobilemargintext">
				“Our audience consists of decision-makers in IT and business —
			</p>
			<p class="centralblockbottomtext lovermobilemargintext">
				they don’t want to be overwhelmed; they want to be reassured.”
			</p>
		</div>

		<div class="bottomdivone">
			<p class="bottombluetext">No complexity — only clarity</p>
			<p class="bottomtext">
				At Circle Solutions, we build custom software that works the way you do — simple, efficient, and free from unnecessary extras.
				We believe in simplicity, functionality, and solutions that truly fit the user.
				Our philosophy is clear: just connect the dots.
			</p>
		</div>

		<hr class="bottomhr">

		<div class="bottomblocksdivtwo">
			<p class="bottombluetext">Company with mission</p>
			<p class="bottomtext">
				“Our purpose is to develop software tailored to individual needs,
				empowering people and businesses with solutions that fit their unique qualities.
				We envision a world where software is as easy and natural to use as breathing.”
			</p>
		</div>
		<div class="copyrightabout">
			<img class="copyrightimg" src="../../images/Copyright.png" alt="Copyright">
			<p class="copyrighttext">circlesolutions2025</p>
		</div>
	</div>

</body>

</html>