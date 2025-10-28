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
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/lightMode/whatWeBuild.css" rel="stylesheet">
    <?php
    if (isset($_SESSION['light']) && $_SESSION['light'] === true) {
        echo "<link rel='stylesheet' href='../css/lightMode/whatWeBuild.css'>";
    }else{
        echo "<link rel='stylesheet' href='../css/darkMode/whatWeBuild.css'>";
    }
    ?>
    <title>What We Build</title>
</head>
<body>
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
						<a class="buttonflag" href="../../php/nl/whatwebuild.php">
							<img src="../../images/flag.png" alt="flag">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
  <main class="services" role="main">
    <h1 class="page-title">What we build</h1>

    <div class="service-box">
      <img src="../../images/lock.png" alt="" aria-hidden="true">
      <h3>Cybersecurity Services</h3>
      <p>Security audits, testing, and compliance.</p>
    </div>

    <div class="service-box">
      <img src="../../images/phone.png" alt="" aria-hidden="true">
      <h3>Mobile App Development</h3>
      <p>Apps for iOS, Android, and beyond.</p>
    </div>

    <div class="service-box">
      <img src="../../images/desktop.png" alt="" aria-hidden="true">
      <h3>Maintenance & Support</h3>
      <p>Regular updates, bug fixes, and feature improvements.</p>
    </div>

    <div class="service-box">
      <img src="../../images/laptop1.png" alt="" aria-hidden="true">
      <h3>Custom Software</h3>
      <p>Tailored solutions built around your business needs.</p>
    </div>

    <div class="service-box">
      <img src="../../images/cloud1.png" alt="" aria-hidden="true">
      <h3>Cloud Solutions</h3>
      <p>Secure, scalable, and always-on infrastructure.</p>
    </div>

    <div class="service-box">
      <img src="../../images/table.png" alt="" aria-hidden="true">
      <h3>Web Development</h3>
      <p>Responsive, modern websites and apps for your brand.</p>
    </div>
  </main>

  <footer class="cta" role="contentinfo">
    <h2>Check out D.O.T.S or let’s get to work.</h2>
    <a class="cta-link" href="../en/dots.php">Check D.O.T.S</a>
    <a class="cta-primary" href="../en/contactPage.php">Start your project</a>
  </footer>
</body>
</html>