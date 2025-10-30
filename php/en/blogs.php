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
    <link rel="stylesheet" href="../../css/lightMode/blogs.css">
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
    
    <?php include '../../php/en/header.php'; ?>

    <div class="topText">
        <h1 class="intro">
            Our Blogs
        </h1>
        <hr>
    </div>

    <main>
        <div class="postLeft">
            <img src="../../images/Code.jpg" alt="Code.jpg" class="imgLeft">
            <h2>Security First: Our Approach to Safe Software</h2>
            <p class="description">Discover how our team prioritizes security at every stage of software development to deliver robust, resilient, and trustworthy solutions.</p>
            <p>Wedenesday, October 15 2025</p>
            <div class="squareLeft"> <a href="../../html/en/blogPostSecurity.html">Read more</a> </div>
        </div>

        <div class="postCenter">
            <img src="../../images/Office 2.jpg" alt="Office 2.jpg" class="imgCenter">
            <h2>A Day in the Life of a Developer at Circle Solutions</h2>
            <p>Step into the daily rhythm of a developer at Circle Solutions, where creativity, collaboration, and code come together to build impactful software.</p>
            <p>Wedenesday, October 15 2025</p>
            <div class="squareCenter"> <a href="">Read more</a> </div>
        </div>

        <div class="postRight">
            <img src="../../images/Penguin-06-1.jpg" alt="Penguin-06-1.jpg" class="imgRight">
            <h2>Lessons Learned from Our Most Challenging Project</h2>
            <p>Discover the key insights, hard earned lessons, and growth we gained from navigating our most complex and demanding software project to date.</p>
            <p>Wedenesday, October 15 2025</p>
            <div class="squareRight"> <a href="">Read more</a> </div>
        </div>
    </main>

</body>
</html>