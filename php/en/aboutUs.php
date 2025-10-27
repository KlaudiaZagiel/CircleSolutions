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
    <?php
    if (!empty($_SESSION['light'])) {
        echo "<link rel='stylesheet' href='../../css/darkMode/aboutUs.css'>";
    } else {
        echo "<link rel='stylesheet' href='../../css/lightMode/aboutUs.css'>";
    }
    ?>
    <title>About us</title>
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
    <hr class="headerhr">
    <p class="headertext">We make software  simple.</p>
    <div class="maindiv">
        <div class="centraldiv">
            <div class="centralblock">
                <div class="centralblockdiv centralblockmargin">
                    <img class="centralblockimg1 " src="../images/tick.png" alt="tick">
                    <p class="centralblocktext centralblocktexthighermargin">Simple</p>
                    <p class="centralblocktext centralblocktextlowermargin">Simple interfaces that anyone can use.</p>
                </div>
                <div class="centralblockdiv centralblockmargin">
                    <img class="centralblockimg2" src="../images/lighting.png" alt="lighting">
                    <p class="centralblocktext centralblocktexthighermargin">Efficient</p>
                    <p class="centralblocktext centralblocktextlowermargin">Steamlined processes that save time.</p>
                </div>
                <div class="centralblockdiv centralblockmargin">
                    <img class="centralblockimg3" src="../images/person.png" alt="person">
                    <p class="centralblocktext centralblocktexthighermargin">User-friendly</p>
                    <p class="centralblocktext centralblocktextlowermargin">Efortless solution for real users.</p>
                </div>
                
            </div>
            <p class="centralblockbottomtext highermobilemargintext">‘’Our audience consists of decision-makers in IT and business - </p>
                <p class="centralblockbottomtext lovermobilemargintext">they don’t want to be overwhelmed; they want to be reassured.’’</p>
        </div>
        <div class="bottomdivone">
            <p class="bottombluetext">No complexity - only clarity</p>
            <p class="bottomtext">At Circle Solutions, we build custom software that works the way you do — simple, efficient, and free from unnecessary extras. We believe in simplicity, functionality, and solutions that truly fit the user. Our philosophy is clear: just connect the dots.</p>
        </div>
        <hr class="bottomhr">
        <div class="bottomblocksdivtwo">
            <p class="bottombluetext">Company with mission</p>
            <p class="bottomtext">“Our purpose is to develop software tailored to individual needs, empowering people and businesses with solutions that fit their unique qualities. We envision a world where software is as easy and natural to use as breathing.”</p>
        </div>
        
    </div>
    
</body>
</html>