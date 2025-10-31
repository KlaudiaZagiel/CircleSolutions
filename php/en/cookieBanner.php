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
    <title>Cookie banner</title>
    <link rel="stylesheet" href="../../css/lightMode/cookieBanner.css">
    <link rel="icon" type="image/x-icon" href="../../images/favicon/favicon.ico">
        <?php
	if (!empty($_SESSION['light'])) {
		echo "<link rel='stylesheet' href='../../css/darkMode/cookieBanner.css'>";
	} else {
		echo "<link rel='stylesheet' href='../../css/lightMode/cookieBanner.css'>";
	}
	?>
</head>
<body>

    <div class="Main">
        <div class="Second">
            <img class="cookie" src="../../images/cookie.png">
            <p class="text">We use cookies to improve your browsing experience, analyze site traffic, and personalize content.</p>
        </div>
        <div class="Buttons">
            <p class="But">Accept All</p>
            <p class="But">Reject All</p> 
            <p class="But">Manage Preferences</p>
        </div>
    </div>

</body>
</html>

