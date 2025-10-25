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

    $message = "Perfect score! You crushed all 8 questions! Use code SOLUTIONS15 to receive 15% discount!";
} else {

    $message = " Almost...😅 You scored " . $score . "/8. Try again to get your 15% off!";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Solutions MiniQuiz</title>
    <link rel="stylesheet" href="../css/miniquiz.css">
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
        <h1>Are you ready to code your discount?🧠</h1>
        <p1>Solve our quiz and get up to 15% off on our services!</p1>
    </div>

    <?php
    if ($submitted) {
        echo "<div class='message'><p>" . $message . "</p></div>";
    }
    ?>

    <form method="post">
        <div class="question">
            <h3>🎯When starting a new project, what's the first thing a good software engineer should do?</h3>
            <label><input type="radio" name="q1" value="a" required>Turn off the PC.</label>
            <label><input type="radio" name="q1" value="b">Understand the client's requirements and
                goals.</label>
            <label><input type="radio" name="q1" value="c">Start coding without any communication.</label>
            <label><input type="radio" name="q1" value="d">Play your favorite video game.</label>
        </div>

        <div class="question">
            <h3>🌟What's the difference between UI and UX design?🧩</h3>
            <label><input type="radio" name="q2" value="a" required>What does it even mean?</label>
            <label><input type="radio" name="q2" value="b">UX stands for 'Ultra Extreme Experience'.</label>
            <label><input type="radio" name="q2" value="c">Both are types of soda.</label>
            <label><input type="radio" name="q2" value="d">UI is about how it looks, UX is about how it feels
                (😉).</label>
        </div>

        <div class="question">
            <h3>⚙️What's the backend's main job?</h3>
            <label><input type="radio" name="q3" value="a" required>He always stands at the back of the
                end.</label>
            <label><input type="radio" name="q3" value="b">Handle what happens behind the website.</label>
            <label><input type="radio" name="q3" value="c">Makes things pretty.</label>
            <label><input type="radio" name="q3" value="d">Keep the server warm at night.</label>
        </div>

        <div class="question">
            <h3> 😱Your client's site gets hacked! What should you have done earlier?</h3>
            <label><input type="radio" name="q4" value="a" required>Kept the site up to date and coded it
                safely.</label>
            <label><input type="radio" name="q4" value="b">Get more coffee.</label>
            <label><input type="radio" name="q4" value="c">Call your friend 'Who's good with computers'.</label>
            <label><input type="radio" name="q4" value="d">Make the passwords look cute.</label>
        </div>


        <div class="question">
            <h3>☁️Why do companies love the cloud so much?</h3>
            <label><input type="radio" name="q5" value="a" required>Because they can access data easily from
                anywhere.</label>
            <label><input type="radio" name="q5" value="b">Because clouds look nice.</label>
            <label><input type="radio" name="q5" value="c">To store memes safely.</label>
            <label><input type="radio" name="q5" value="d">Because they like rain.</label>
        </div>

        <div class="question">
            <h3>💡What's the most important resource in a developer's workflow?</h3>
            <label><input type="radio" name="q6" value="a" required>Hope and dreams.</label>
            <label><input type="radio" name="q6" value="b">Luck.</label>
            <label><input type="radio" name="q6" value="c">A looooot of coffee.</label>
            <label><input type="radio" name="q6" value="d">Psychological help.</label>
        </div>

        <div class="question">
            <h3>💻Why is software testing important?</h3>
            <label><input type="radio" name="q7" value="a" required>To make your boss happy.</label>
            <label><input type="radio" name="q7" value="b">To catch bugs before users do.</label>
            <label><input type="radio" name="q7" value="c">To delay the release.</label>
            <label><input type="radio" name="q7" value="d">To fill in your working hours.</label>
        </div>

        <div class="question">
            <h3>📱What's one key reason to build a mobile-friendly site or app?</h3>
            <label><input type="radio" name="q8" value="a" required>It looks cool on big screens.</label>
            <label><input type="radio" name="q8" value="b">You can touch the website.</label>
            <label><input type="radio" name="q8" value="c">Most users browse on phones.</label>
            <label><input type="radio" name="q8" value="d">Mobile has no friends.</label>
        </div>
        <div class="button">
            <button class="checkanswers" type="submit">Check your answers</button>
        </div>


    </form>

    </div>

</body>

</html>