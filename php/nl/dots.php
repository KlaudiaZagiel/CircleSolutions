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
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <?php
    if (!empty($_SESSION['light'])) {
        echo "<link rel='stylesheet' href='../css/dotsdark.css'>";
    } else {
        echo "<link rel='stylesheet' href='../css/dots.css'>";
    }
    ?>
    <title>D.O.T.S</title>
</head>
<body>
    
    <header>
    <div class="backroundimagemaindiv">
        <div class="headerdivmain">
            <a  href="../html/mainPageDutch.php"><img class="headerImagedots"  src="../images/circleSolutionsLogo.png" alt="logo"></a>
            <ul class="headerbuttons">
                <li><a href="../html/dotsDutch.php">D.O.T.S</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="../html/aboutus.php">Over</a></li>
                <li><a href="../html/whatwebuild.html">Oplossing</a></li>
                <li>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <button name="toggle" class="buttonflag buttondarLight"><p class="darklightbuttontext">Donker/licht</p></button>
                </form>
                </li>
                    <li><a  class="buttonflag" href="../html/dots.php"><img src="../images/flag-niderlandov_b1.jpg" alt="flag"></a></li>
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
        <p class="headertext">Circle D.O.T.S is een geïntegreerd softwareplatform dat is ontworpen
om bedrijven te helpen hun interne
processen te stroomlijnen en te beheren.</p>
        <ul class="buttonsdiv">
            <li><a href="../html/aboutus.html"><div class="buttondark"><p class="buttondarktext">Meer informatie over ons</p></div></a></li>
            <li class="buttonsecondposition"><a  href=""><div class="buttondark "><p class="buttonlighttext">Laten we aan de slag gaan</p></div></a></li>
            <li class="buttonthirdposition"><a  href="../html/whatwebuild.html"><div class="buttondark "><p class="buttondarktext">Bekijk andere oplossingen</p></div></a></li>
        </ul>

        <div class="lastdivgrid">
            <div class="lastdiv lastfirstdivposition">
            <img class="lastimg" src=" <?php
    if (!empty($_SESSION['light'])) {
        echo "../images/intranet_icon_white.png";
    } else {
        echo "../images/intranet_icon.png";
    }
    ?>" alt="intranet_icon">
            <p class="lasttext">Een veilige hub voor updates, aankondigingen 
en bronnen – alle communicatie
 op één plek.</p>
        </div>
        <div class="lastdiv lastseconddivposition">
            <img class="lastimg" src=" <?php
    if (!empty($_SESSION['light'])) {
        echo "../images/dash_white.png";
    } else {
        echo "../images/dash-removebg-preview.png";
    }
    ?>" alt="dash-removebg-preview">
            <p class="lasttext">Zet gegevens om in duidelijke visuals 
met aanpasbare dashboards
 voor snellere, slimmere beslissingen.</p>
        </div>
        <div class="lastdiv lastthirddivposition">
            <img class="lastimg" src=" <?php
    if (!empty($_SESSION['light'])) {
        echo "../images/../images/documents_white.png";
    } else {
        echo "../images/../images/documents.png";
    }
    ?>" alt="documents">
            <p class="lasttext">Bestanden uploaden, ordenen en gezamenlijk bewerken 
met ingebouwde versiebeheer 
en soepele samenwerking.</p>
        </div>
        </div>
        


        <div class="copyright">
            <img class="copyrightimg" src="../images/Copyright.png" alt="Copyright">
            <p class="copyrighttext">circlesolutions2025</p>
        </div>
    </div>
    
</body>
</html>