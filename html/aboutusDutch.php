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
        echo "<link rel='stylesheet' href='../css/aboutusDark.css'>";
    } else {
        echo "<link rel='stylesheet' href='../css/aboutus.css'>";
    }
    ?>
    <title>About us</title>
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
                    <li><a  class="buttonflag" href="../html/aboutus.php"><img src="../images/flag-niderlandov_b1.jpg" alt="flag"></a></li>
            </ul>
        </div>
    </div>
  </header>
    <hr class="headerhr">
    <p class="headertext">Wij maken software  eenvoudig.</p>
    <div class="maindiv">
        <div class="centraldiv">
            <div class="centralblock">
                <div class="centralblockdiv centralblockmargin">
                    <img class="centralblockimg1 " src="../images/tick.png" alt="tick">
                    <p class="centralblocktext centralblocktexthighermargin">Eenvoudig</p>
                    <p class="centralblocktext centralblocktextlowermargin">Eenvoudige interfaces die iedereen kan gebruiken.</p>
                </div>
                <div class="centralblockdiv centralblockmargin">
                    <img class="centralblockimg2" src="../images/lighting.png" alt="lighting">
                    <p class="centralblocktext centralblocktexthighermargin">Efficiënt</p>
                    <p class="centralblocktext centralblocktextlowermargin">Gestroomlijnde processen die tijd besparen.</p>
                </div>
                <div class="centralblockdiv centralblockmargin">
                    <img class="centralblockimg3" src="../images/person.png" alt="person">
                    <p class="centralblocktext centralblocktexthighermargin">Gebruiksvriendelijk</p>
                    <p class="centralblocktext centralblocktextlowermargin">Eenvoudige oplossing voor echte gebruikers.</p>
                </div>
                
            </div>
            <p class="centralblockbottomtext highermobilemargintext">‘’Ons publiek bestaat uit besluitvormers op het gebied van IT en bedrijfsvoering - </p>
                <p class="centralblockbottomtext lovermobilemargintext">Ze willen niet overweldigd worden; ze willen gerustgesteld worden.’’</p>
        </div>
        <div class="bottomdivone">
            <p class="bottombluetext">Geen complexiteit - alleen duidelijkheid</p>
            <p class="bottomtext">Bij Circle Solutions bouwen we software op maat die werkt zoals u dat wilt: eenvoudig, efficiënt en zonder onnodige extra's. Wij geloven in eenvoud, functionaliteit en oplossingen die echt bij de gebruiker passen. Onze filosofie is duidelijk: verbind gewoon de punten.</p>
        </div>
        <hr class="bottomhr">
        <div class="bottomblocksdivtwo">
            <p class="bottombluetext">Bedrijf met missie</p>
            <p class="bottomtext">“Ons doel is om software te ontwikkelen die is afgestemd op individuele behoeften, waardoor mensen en bedrijven worden ondersteund met oplossingen die aansluiten bij hun unieke kwaliteiten. Wij streven naar een wereld waarin software net zo eenvoudig en natuurlijk te gebruiken is als ademhalen.”</p>
        </div>
        
    </div>
    
</body>
</html>