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
    <title>Blogs</title>
    <link rel="icon" type="image/x-icon" href="../../images/favicon/favicon.ico">

    <?php
	if (!empty($_SESSION['light'])) {
		echo "<link rel='stylesheet' href='../../css/darkMode/blogs.css'>";
		echo "<link rel='stylesheet' href='../../css/darkMode/header.css'>";
	} else {
		echo "<link rel='stylesheet' href='../../css/lightMode/blogs.css'>";
		echo "<link rel='stylesheet' href='../../css/lightMode/header.css'>";
	}
	?>

</head>

<body>
    <?php include '../../php/nl/header.php'; ?>

    <div class="topText">
        <h1 class="Intro">
            Onze Blogs
        </h1>
        <hr>
    </div>

    <main>
        <div class="postLeft">
            <img src="../../images/blogs/Code.jpg" alt="Code.jpg" class="imgLeft">
            <h2>Veiligheid voorop: onze aanpak voor veilige software</h2>
            <p>Ontdek hoe ons team veiligheid in elke fase van de softwareontwikkeling vooropstelt om robuuste, veerkrachtige en betrouwbare oplossingen te leveren.</p>
            <p>Woensdag 15 oktober 2025</p>
            <div class="squareLeft"> <a href="../../php/nl/blogPostSecurity.php">Lees meer</a> </div>
        </div>

        <div class="postCenter">
            <img src="../../images/blogs/Office 2.jpg" alt="Office 2.jpg" class="imgCenter">
            <h2>Een dag uit het leven van een ontwikkelaar bij Circle Solutions</h2>
            <p>Neem een kijkje in het dagelijkse leven van een ontwikkelaar bij Circle Solutions, waar creativiteit, samenwerking en code samenkomen om impactvolle software te bouwen.</p>
            <p>Woensdag 15 oktober 2025</p>
            <div class="squareCenter"> <a href="#">Lees meer</a> </div>
        </div>

        <div class="postRight">
            <img src="../../images/blogs/Penguin-06-1.jpg" alt="Penguin-06-1.jpg" class="imgRight">
            <h2>Lessen die we hebben geleerd van ons meest uitdagende project</h2>
            <p>Ontdek de belangrijkste inzichten, hard bevochten lessen en groei die we hebben opgedaan tijdens ons meest complexe en veeleisende softwareproject tot nu toe.</p>
            <p>Woensdag 15 oktober 2025</p>
            <div class="squareRight"> <a href="#">Lees meer</a> </div>
        </div>
    </main>
</body>
</html>