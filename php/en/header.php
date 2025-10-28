
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
					<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
						<button name="toggle" class="buttonflag buttondarLight">
							<img src="<?= !empty($_SESSION['light']) 
								? '../../images/header/darkModeToggle.png' 
								: '../../images/header/lightModeToggle.png' ?>" 
							alt="">
						</button>
					</form>
				</li>
				<li>
					<a class="buttonflag" href="../../php/nl/mainPage.php">
						<img src="../../images/header/flag.png" alt="flag">
					</a>
				</li>
			</ul>
		</div>
	</div>
</header>
