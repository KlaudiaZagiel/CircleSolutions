<header>
        <div class="backroundimagemaindiv">
            <div class="headerdivmain">
                <a href="../../php/nl/mainPage.php">
                    <img class="headerImagedots" src="../../images/header/circleSolutionsLogo.png" alt="logo">
                </a>
                <ul class="headerbuttons">
                    <li><a href="../../php/nl/dots.php">D.O.T.S</a></li>
                    <li><a href="../../php/nl/contactPage.php">Contact</a></li>
                    <li><a href="../../php/nl/aboutUs.php">Over ons</a></li>
                    <li><a href="../../php/nl/whatWeBuild.php">Oplossing</a></li>
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
                        <a class="buttonflag" href="../../php/en/mainPage.php">
                            <img src="../../images/header/flagNl.jpg" alt="flag">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>