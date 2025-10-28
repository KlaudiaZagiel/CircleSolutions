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
        echo "<link rel='stylesheet' href='../../css/darkMode/aboutUs.css'>";
        echo "<link rel='stylesheet' href='../../css/darkMode/header.css'>";
    } else {
        echo "<link rel='stylesheet' href='../../css/lightMode/aboutUs.css'>";
        echo "<link rel='stylesheet' href='../../css/lightMode/header.css'>";
    }
    ?>
    <title>Over ons</title>
</head>
<body>
    <?php include '../../php/nl/header.php'; ?>

    <hr class="headerhr">
    <p class="headertext">Wij maken software eenvoudig.</p>

    <div class="maindiv">
        <div class="centraldiv">
            <div class="centralblock">
                <div class="centralblockdiv centralblockmargin">
                    <img class="centralblockimg1" src="../../images/aboutUs/tick.png" alt="tick">
                    <p class="centralblocktext centralblocktexthighermargin">Eenvoudig</p>
                    <p class="centralblocktext centralblocktextlowermargin">Eenvoudige interfaces die iedereen kan gebruiken.</p>
                </div>
                <div class="centralblockdiv centralblockmargin">
                    <img class="centralblockimg2" src="../../images/aboutUs/lighting.png" alt="lighting">
                    <p class="centralblocktext centralblocktexthighermargin">Efficiënt</p>
                    <p class="centralblocktext centralblocktextlowermargin">Gestroomlijnde processen die tijd besparen.</p>
                </div>
                <div class="centralblockdiv centralblockmargin">
                    <img class="centralblockimg3" src="../../images/aboutUs/person.png" alt="person">
                    <p class="centralblocktext centralblocktexthighermargin">Gebruiksvriendelijk</p>
                    <p class="centralblocktext centralblocktextlowermargin">Moeiteloze oplossing voor echte gebruikers.</p>
                </div>
            </div>

            <p class="centralblockbottomtext highermobilemargintext">
                ‘’Ons publiek bestaat uit besluitvormers op het gebied van IT en bedrijfsvoering —
            </p>
            <p class="centralblockbottomtext lovermobilemargintext">
                ze willen niet overweldigd worden; ze willen gerustgesteld worden.’’
            </p>
        </div>

        <div class="bottomdivone">
            <p class="bottombluetext">Geen complexiteit — alleen duidelijkheid</p>
            <p class="bottomtext">
                Bij Circle Solutions bouwen we software op maat die werkt zoals u dat wilt — eenvoudig, efficiënt en zonder onnodige extra's. We geloven in eenvoud, functionaliteit en oplossingen die echt bij de gebruiker passen. Onze filosofie is duidelijk: verbind gewoon de punten.
            </p>
        </div>

        <hr class="bottomhr">

        <div class="bottomblocksdivtwo">
            <p class="bottombluetext">Bedrijf met missie</p>
            <p class="bottomtext">
                “Ons doel is om software te ontwikkelen die is afgestemd op individuele behoeften, waardoor mensen en bedrijven worden ondersteund met oplossingen die aansluiten bij hun unieke kwaliteiten. We streven naar een wereld waarin software net zo eenvoudig en natuurlijk te gebruiken is als ademhalen.”
            </p>
        </div>
        <div class="copyrightabout">
			<img class="copyrightimg" src="../../images/Copyright.png" alt="Copyright">
			<p class="copyrighttext">circlesolutions2025</p>
		</div>
    </div>
</body>
</html>
