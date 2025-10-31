<?php
session_start();

if (isset($_POST['toggle']))
    {
    
    if (isset($_SESSION['light']) && $_SESSION['light'] === true)
        {
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
    <link rel="shortcut icon" href="#" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r79/three.min.js"></script>
    <title>404 Not Found</title>
    <link rel="icon" type="image/x-icon" href="../../images/favicon/favicon.ico">
    
	<?php
	if (!empty($_SESSION['light'])) {
		echo "<link rel='stylesheet' href='../../css/darkMode/404Page.css'>";
		echo "<link rel='stylesheet' href='../../css/darkMode/header.css'>";
	} else {
		echo "<link rel='stylesheet' href='../../css/lightMode/404Page.css'>";
		echo "<link rel='stylesheet' href='../../css/lightMode/header.css'>";
	}
	?>

</head>
<body>
    
    <!-- Star background -->

    <script src="../../js/404page.js"></script>

    <!--Header-->

    <?php include '../../php/en/header.php'; ?>
    
    <!--404 Text-->

    <div class="text404">
            <h1>404</h1>
        <div class="notFound">
            <h2>Page not found</h2>
        </div>
    </div>
    </div>    
    <div class="homeMessage">
        <h3>Couldn't find the page your looking for</h3>
        <p> <a href="./mainPage.php">Go to Homepage</a></p>
    </div>

</body>
</html>