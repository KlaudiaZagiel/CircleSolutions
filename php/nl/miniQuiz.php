<?php

$correctanswers = array("b", "d", "b", "a", "a", "c", "b", "c");

$score = 0;
$submitted = ($_SERVER['REQUEST_METHOD'] == 'POST');
$message = '';

if ($submitted) {

    for ($i = 0; $i < count($correctanswers); $i++) { //countcorrectanswers returns how many questions i have (8). starts from 0 $i=0, goes up to 7 (8 in tota) "<" means that loop will run as long as $i is less than 8.

        $question = 'q' . ($i + 1); // the first loop $i=0, so $question becomes q1. (it matches my input names.)
        if (isset($_POST[$question]) && $_POST[$question] == $correctanswers[$i]) { //isset($_POST[$qname]) checks if the user actually answered that question. then, gets selected option and then picks correct option from array.

            $score++;
        }
    }
}

if ($score >= 7) {

    $message = "Perfecte score!🔥 Je hebt alle 8 vragen geweldig gedaan! Gebruik de code SOLUTIONS15 om 15% korting te ontvangen!";
} else {

    $message = " Bijna... 😅 Je scoorde " . $score . "/8. Probeer het opnieuw om je 15% korting te verdienen!";
}

?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Solutions MiniQuiz</title>
    <link rel="stylesheet" href="../css/miniquizNL.css">
    <link rel="icon" type="image/x-icon" href="../../images/favicon/favicon.ico">
</head>

<body>
    <div class="topheader">
        <img src="../images/circleSolutionsLogo.png" alt="logo" class="logo">
        <div class="links">
            <a href="mainPage.html">Home</a>
            <a href="contact.html">Contact</a>
            <a href="aboutus.html">About</a>
            <a href="whatwebuild.html">Solutions</a>
            <a href="dots.html">D.O.T.S</a>
            <img src="../images/flag.png" alt="flag" class="flag">
        </div>
    </div>
    <div class="herotext">
        <h1>Ben je klaar om je korting te coderen?🧠</h1>
        <p>Los onze quiz op en ontvang tot 15% korting op onze diensten!</p>
    </div>

    <?php
    if ($submitted) {
        echo "<div class='message'><p>" . $message . "</p></div>";
    }
    ?>

    <form method="post">
        <div class="question">
            <h3>🎯Wanneer je een nieuw project start, wat is dan het eerste dat een goede software engineer zou moeten doen?</h3>
            <label><input type="radio" name="q1" value="a" required>De computer uitzetten.</label>
            <label><input type="radio" name="q1" value="b">De vereisten en doelen van de klant begrijpen.</label>
            <label><input type="radio" name="q1" value="c">Beginnen met coderen zonder enige communicatie.</label>
            <label><input type="radio" name="q1" value="d">Je favoriete videogame spelen.</label>
        </div>

        <div class="question">
            <h3>🌟Wat is het verschil tussen UI- en UX-design?</h3>
            <label><input type="radio" name="q2" value="a" required>Wat betekent dat eigenlijk?</label>
            <label><input type="radio" name="q2" value="b">UX staat voor 'Ultra Extreme Experience'.</label>
            <label><input type="radio" name="q2" value="c">Beide zijn soorten frisdrank.</label>
            <label><input type="radio" name="q2" value="d">UI gaat over hoe het eruitziet, UX over hoe het aanvoelt (😉).</label>
        </div>

        <div class="question">
            <h3>⚙️Wat is de belangrijkste taak van de backend?</h3>
            <label><input type="radio" name="q3" value="a" required>Hij staat altijd achteraan aan het einde.</label>
            <label><input type="radio" name="q3" value="b">Afhandelen wat er achter de website gebeurt.</label>
            <label><input type="radio" name="q3" value="c">Maakt dingen mooi.</label>
            <label><input type="radio" name="q3" value="d">De server 's nachts warm houden.</label>
        </div>

        <div class="question">
            <h3> 😱De website van je klant wordt gehackt! Wat had je eerder moeten doen?</h3>
            <label><input type="radio" name="q4" value="a" required>De site up-to-date gehouden en veilig gecodeerd.</label>
            <label><input type="radio" name="q4" value="b">Meer koffie halen.</label>
            <label><input type="radio" name="q4" value="c">Je vriend bellen die “goed is met computers”.</label>
            <label><input type="radio" name="q4" value="d">De wachtwoorden er schattig uit laten zien.</label>
        </div>


        <div class="question">
            <h3>☁️Waarom zijn bedrijven zo dol op de cloud?</h3>
            <label><input type="radio" name="q5" value="a" required>Omdat ze overal gemakkelijk toegang hebben tot gegevens.</label>
            <label><input type="radio" name="q5" value="b">Omdat wolken er mooi uitzien.</label>
            <label><input type="radio" name="q5" value="c">Om memes veilig op te slaan.</label>
            <label><input type="radio" name="q5" value="d">Omdat ze van regen houden.</label>
        </div>

        <div class="question">
            <h3>💡Wat is de belangrijkste hulpbron in de workflow van een ontwikkelaar?</h3>
            <label><input type="radio" name="q6" value="a" required>Hoop en dromen.</label>
            <label><input type="radio" name="q6" value="b">Geluk.</label>
            <label><input type="radio" name="q6" value="c">Héél veel koffie.</label>
            <label><input type="radio" name="q6" value="d">Psychologische hulp.</label>
        </div>

        <div class="question">
            <h3>💻Waarom is softwaretesten belangrijk?</h3>
            <label><input type="radio" name="q7" value="a" required>Om je baas blij te maken.</label>
            <label><input type="radio" name="q7" value="b">Om bugs te vinden voordat gebruikers dat doen.</label>
            <label><input type="radio" name="q7" value="c">Om de release uit te stellen.</label>
            <label><input type="radio" name="q7" value="d">Om je werkuren te vullen.</label>
        </div>

        <div class="question">
            <h3>📱Wat is een belangrijke reden om een mobielvriendelijke website of app te bouwen?</h3>
            <label><input type="radio" name="q8" value="a" required>Het ziet er cool uit op grote schermen.</label>
            <label><input type="radio" name="q8" value="b">Je kunt de website aanraken.</label>
            <label><input type="radio" name="q8" value="c">De meeste gebruikers surfen op hun telefoon.</label>
            <label><input type="radio" name="q8" value="d">Mobiel heeft geen vrienden.</label>
        </div>
        <div class="button">
            <button class="checkanswers" type="submit">Controleer je aantworden</button>
        </div>


    </form>

    </div>

</body>

</html>