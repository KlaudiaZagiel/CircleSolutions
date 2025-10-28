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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../../images/favicon/favicon.ico">
    <?php
    if (!empty($_SESSION['light'])) {
        echo "<link rel='stylesheet' href='../../css/darkMode/mainPageStyles.css'>";
    } else {
        echo "<link rel='stylesheet' href='../../css/lightMode/mainPageStyles.css'>";
    }
    ?>

    <title>Main page</title>
</head>
<body>
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
                            <img src="../../images/flag.png" alt="flag">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="backroundimagemaindiv">
        <p class="solutiontext headertextposition">Softwareoplossingen</p>
        <p class="headertextposition headerlowertextposition">Verbinden. Samenwerken. Vereenvoudigen.</p>

        <div class="headerceanterbuttons">
            <a href="../../pdfFiles/CircleSolutionsBrochure.pdf"
               download="CircleSolutionsBrochure.pdf"
               style="text-decoration: none;" type="application/pdf">
                <div class="dotsdiv">
                    <p class="dotstext">Download onze brochure</p>
                </div>
            </a>
        </div>
    </div>

    <div class="bottomdiv">
        <p class="introducingtext">Maak kennis met Circle D.O.T.S</p>
        <hr>

        <div class="bottomblocksdiv">
            <div class="bottomblock">
                <img class="bottomimg" src="<?php
                    if (!empty($_SESSION['light'])) {
                        echo "../../images/mainPage/chat_white.png";
                    } else {
                        echo "../../images/mainPage/chat.png";
                    }
                ?>" alt="chat">
                <p class="bottomblocktext">Vereenvoudig communicatie</p>
            </div>

            <div class="bottomblock">
                <img class="bottomimg" src="<?php
                    if (!empty($_SESSION['light'])) {
                        echo "../../images/mainPage/puzzle_white.png";
                    } else {
                        echo "../../images/mainPage/puzzle.png";
                    }
                ?>" alt="puzzle">
                <p class="bottomblocktext">Optimaliseer teamwork</p>
            </div>

            <div class="bottomblock">
                <img class="bottomimg" src="<?php
                    if (!empty($_SESSION['light'])) {
                        echo "../../images/mainPage/search_white.png";
                    } else {
                        echo "../../images/mainPage/search.png";
                    }
                ?>" alt="search">
                <p class="bottomblocktext">Slimme inzichten</p>
            </div>
        </div>

        <hr>
        <p class="bottomtext">"Circle D.O.T.S. is ons vlaggenschipplatform om communicatie te vereenvoudigen,</p>
        <p class="bottomtext bottomtextmargin">samenwerking te stroomlijnen en slimme inzichten te bieden voor betere beslissingen."</p>

        <div class="copyright">
            <img class="copyrightimg" src="../../images/Copyright.png" alt="Copyright">
            <p class="copyrighttext">circlesolutions2025</p>
        </div>
    </div>
</body>
</html>
