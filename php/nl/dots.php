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
        echo "<link rel='stylesheet' href='../../css/darkMode/dots.css'>";
        echo "<link rel='stylesheet' href='../../css/darkMode/mainpageStyles.css'>";
    } else {
        echo "<link rel='stylesheet' href='../../css/lightMode/dots.css'>";
        echo "<link rel='stylesheet' href='../../css/lightMode/mainPageStyles.css'>";
    }
    ?>
    <title>D.O.T.S</title>
</head>
<body>
    <?php include '../../php/nl/header.php'; ?>

    <div class="maindiv">
        <hr class="hrTop">
        <div class="dotsmaintext">
            <p class="bigtextcircle">Circle</p>
            <p class="bigtextdots">Dots</p>
        </div>
        <p class="headertext">
            Circle D.O.T.S is een geïntegreerd softwareplatform dat is ontworpen
            om bedrijven te helpen hun interne processen te stroomlijnen en te beheren.
        </p>

        <ul class="buttonsdiv">
            <li>
                <a href="../../php/nl/aboutUs.php">
                    <div class="buttondark"><p class="buttondarktext">Meer informatie over ons</p></div>
                </a>
            </li>
            <li class="buttonsecondposition">
                <a href="../../php/nl/contactPage.php">
                    <div class="buttondark"><p class="buttonlighttext">Laten we aan de slag gaan</p></div>
                </a>
            </li>
            <li class="buttonthirdposition">
                <a href="../../php/nl/whatWeBuild.php">
                    <div class="buttondark"><p class="buttondarktext">Bekijk andere oplossingen</p></div>
                </a>
            </li>
        </ul>

        <div class="lastdivgrid">
            <div class="lastdiv lastfirstdivposition">
                <img class="lastimg" src="<?php
                    if (!empty($_SESSION['light'])) {
                        echo '../../images/dots/intranet_icon_white.png';
                    } else {
                        echo '../../images/dots/intranet_icon.png';
                    }
                ?>" alt="intranet_icon">
                <p class="lasttext">
                    Een veilige hub voor updates, aankondigingen en bronnen – alle communicatie op één plek.
                </p>
            </div>

            <div class="lastdiv lastseconddivposition">
                <img class="lastimg" src="<?php
                    if (!empty($_SESSION['light'])) {
                        echo '../../images/dots/dash_white.png';
                    } else {
                        echo '../../images/dots/dash-removebg-preview.png';
                    }
                ?>" alt="dash-removebg-preview">
                <p class="lasttext">
                    Zet gegevens om in duidelijke visuals met aanpasbare dashboards voor snellere, slimmere beslissingen.
                </p>
            </div>

            <div class="lastdiv lastthirddivposition">
                <img class="lastimg" src="<?php
                    if (!empty($_SESSION['light'])) {
                        echo '../../images/dots/documents_white.png';
                    } else {
                        echo '../../images/dots/documents.png';
                    }
                ?>" alt="documents">
                <p class="lasttext">
                    Bestanden uploaden, ordenen en gezamenlijk bewerken met ingebouwd versiebeheer en soepele samenwerking.
                </p>
            </div>
        </div>

        <div class="copyright">
            <img class="copyrightimg" src="../../images/Copyright.png" alt="Copyright">
            <p class="copyrighttext">circlesolutions2025</p>
        </div>
    </div>
</body>
</html>
