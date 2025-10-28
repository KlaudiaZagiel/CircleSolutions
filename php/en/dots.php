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
		echo "<link rel='stylesheet' href='../../css/darkMode/dots.css'>";
		echo "<link rel='stylesheet' href='../../css/darkMode/mainPageStyles.css'>";
	} else {
		echo "<link rel='stylesheet' href='../../css/lightMode/dots.css'>";
		echo "<link rel='stylesheet' href='../../css/lightMode/mainPageStyles.css'>";
	}
	?>

	<title>D.O.T.S</title>
</head>
<body>

	<?php include '../../php/en/header.php'; ?>

	<div class="maindiv">
		<hr class="hrTop">

		<div class="dotsmaintext">
			<p class="bigtextcircle">Circle</p>
			<p class="bigtextdots">Dots</p>
		</div>

		<p class="headertext">
			Circle D.O.T.S is an integrated software platform designed
			to help companies streamline and manage their internal
			processes.
		</p>

		<ul class="buttonsdiv">
			<li>
				<a href="../../php/en/aboutus.php">
					<div class="buttondark">
						<p class="buttondarktext">Learn more about us</p>
					</div>
				</a>
			</li>
			<li class="buttonsecondposition">
				<a href="../en/contactPage.php">
					<div class="buttondark">
						<p class="buttonlighttext">Let’s get to work</p>
					</div>
				</a>
			</li>
			<li class="buttonthirdposition">
				<a href="../en/whatwebuild.php">
					<div class="buttondark">
						<p class="buttondarktext">Check other solutions</p>
					</div>
				</a>
			</li>
		</ul>

		<div class="lastdivgrid">
			<div class="lastdiv lastfirstdivposition">
				<img class="lastimg" src="<?php
					if (!empty($_SESSION['light'])) {
						echo '../../images/dots/intranet_icon_white.png';
					} else {
						echo '../../images/dots/intranet_icon.png';
					}
				?>" alt="intranet_icon">
				<p class="lasttext">
					A secure hub for updates, announcements, 
					and resources — keeping all communication
					in one place.
				</p>
			</div>

			<div class="lastdiv lastseconddivposition">
				<img class="lastimg" src="<?php
					if (!empty($_SESSION['light'])) {
						echo '../../images/dots/dash_white.png';
					} else {
						echo '../../images/dots/dash-removebg-preview.png';
					}
				?>" alt="dashboard">
				<p class="lasttext">
					Turn data into clear visuals 
					with customizable dashboards
					for faster, smarter decisions.
				</p>
			</div>

			<div class="lastdiv lastthirddivposition">
				<img class="lastimg" src="<?php
					if (!empty($_SESSION['light'])) {
						echo '../../images/dots/documents_white.png';
					} else {
						echo '../../images/dots/documents.png';
					}
				?>" alt="documents">
				<p class="lasttext">
					Upload, organize, and co-edit files 
					with built-in version control 
					and smooth collaboration.
				</p>
			</div>
		</div>

		<div class="copyrightdots">
			<img class="copyrightimg" src="../../images/Copyright.png" alt="Copyright">
			<p class="copyrighttext">circlesolutions2025</p>
		</div>
	</div>

</body>
</html>
