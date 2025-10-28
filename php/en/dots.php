<?php
session_start();


if (isset($_POST['toggle'])) {
    
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../../images/favicon/favicon.ico">
    
    <?php
    if (!empty($_SESSION['light'])) {
        echo "<link rel='stylesheet' href='../../css/darkMode/dots.css'>";
    } else {
        echo "<link rel='stylesheet' href='../../css/lightMode/dots.css'>";
    }
    ?>
    <title>D.O.T.S</title>
    
</head>
<body>
    
    <header>
		<div class="backroundimagemaindiv">
			<div class="headerdivmain">
				<a href="../../php/en/mainPage.php">
					<img class="headerImagedots" src="../../images/header/circleSolutionsLogo.png" alt="logo">
				</a>
				<ul class="headerbuttons">
					<li><a href="../../php/en/dots.php">D.O.T.S</a></li>
					<li><a href="../../php/en/contactPage.php">Contact</a></li>
					<li><a href="../../php/en/aboutus.php">About Us</a></li>
					<li><a href="../../php/en/whatwebuild.php">Solution</a></li>
					<li>
						<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
							<button name="toggle" class="buttonflag buttondarLight">
								<img src="<?php
									if (!empty($_SESSION['light'])) {
										echo "../../images/header/darkModeToggle.png";
									} else {
										echo "../../images/header/lightModeToggle.png";
									}
								?>" alt="">
							</button>
						</form>
					</li>
					<li>
						<a class="buttonflag" href="../../php/nl/mainPage.php">
							<img src="../../images/flag.png" alt="flag">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
    <div class="maindiv">
        
        <hr>
        <div class="dotsmaintext">
            <p class="bigtextcircle">Circle</p>
            <p class="bigtextdots">Dots</p>
        </div>
        <p class="headertext">Circle D.O.T.S is an integrated software platform designed
to help companies steamline and manage their internal
processes.</p>
        <ul class="buttonsdiv">
            <li><a href="../../php/en/aboutus.php"><div class="buttondark"><p class="buttondarktext">Learn more about us</p></div></a></li>
            <li class="buttonsecondposition"><a  href=""><div class="buttondark "><p class="buttonlighttext">Let’s get to work</p></div></a></li>
            <li class="buttonthirdposition"><a  href="../html/whatwebuild.html"><div class="buttondark "><p class="buttondarktext">Check other solutions</p></div></a></li>
        </ul>

        <div class="lastdivgrid">
            <div class="lastdiv lastfirstdivposition">
            <img class="lastimg" src=" <?php
    if (!empty($_SESSION['light'])) {
        echo "../../images/dots/intranet_icon_white.png";
    } else {
        echo "../../images/dots/intranet_icon.png";
    }
    ?>" alt="intranet_icon">
            <p class="lasttext">A secure hub for updates, announcements, 
and resources—keeping all communication
 in one place.</p>
        </div>
        <div class="lastdiv lastseconddivposition">
            <img class="lastimg" src=" <?php
    if (!empty($_SESSION['light'])) {
        echo "../../images/dots/dash_white.png";
    } else {
        echo "../../images/dots/dash-removebg-preview.png";
    }
    ?>" alt="dash-removebg-preview">
            <p class="lasttext">Turn data into clear visuals 
with customizable dashboards
 for faster, smarter decisions.</p>
        </div>
        <div class="lastdiv lastthirddivposition">
            <img class="lastimg" src=" <?php
    if (!empty($_SESSION['light'])) {
        echo "../../images/dots/documents_white.png";
    } else {
        echo "../../images/dots/documents.png";
    }
    ?>" alt="documents">
            <p class="lasttext">Upload, organize, and co-edit files 
with built-in version control 
and smooth collaboration.</p>
        </div>
        </div>
        


        <div class="copyright">
            <img class="copyrightimg" src="../../images/Copyright.png" alt="Copyright">
            <p class="copyrighttext">circlesolutions2025</p>
        </div>
    </div>
    
</body>
</html>