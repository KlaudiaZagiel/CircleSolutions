<?php
session_start();


if (isset($_POST['toggle']))
    {
    
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
        echo "<link rel='stylesheet' href='../css/mainPageStylesdark.css'>";
    } else {
        echo "<link rel='stylesheet' href='../css/mainPageStyles.css'>";
    }
    ?>
    <title>Main page</title>
</head>
<body>
    <header>
    <div class="backroundimagemaindiv">
        <div class="headerdivmain">
            <a  href="../html/mainPage.php"><img class="headerImagedots"  src="../images/circleSolutionsLogo.png" alt="logo"></a>
            <ul class="headerbuttons">
                <li><a href="../html/dots.php">D.O.T.S</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="../html/aboutus.php">About</a></li>
                <li><a href="../html/whatwebuild.html">Solution</a></li>
                <li>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <button name="toggle" class="buttonflag buttondarLight"><p class="darklightbuttontext">Dark/light</p></button>
                </form>
                </li>
                    <li><a  class="buttonflag" href="../html/mainPageDutch.php"><img src="../images/flag.png" alt="flag"></a></li>
            </ul>
        </div>
    </div>
  </header>

    <div class="backroundimagemaindiv">
        
        
        <p class="solutiontext headertextposition">Software Solutions</p>
        <p class="headertextposition headerlowertextposition">Connect. Collaborate. Simplify</p>
        <div class="headerceanterbuttons">
            <a href="../pdfFiles/CircleSolutionsBrochure.pdf" download="CircleSolutionsBrochure.pdf" style="text-decoration: none;" type="application/pdf">
                <div class="dotsdiv ">
                    <p class="dotstext">Download our brochure</p>
                </div>
            </a>
            

            
        </div>
    </div>
    <div class="bottomdiv">
        <p class="introducingtext">Introducing Circle D.O.T.S</p>
        <hr>
        <div class="bottomblocksdiv">
            <div class="bottomblock">
                <img class="bottomimg" src="<?php
    if (!empty($_SESSION['light'])) {
        echo "../images/chat_white.png";
    } else {
        echo "../images/chat.png";
    }
    ?>" alt="chat">
                <p class="bottomblocktext">Simplify Communication</p>
            </div>
                
            <div class="bottomblock">
                <img class="bottomimg" src="<?php
    if (!empty($_SESSION['light'])) {
        echo "../images/pazzle_white.png";
    } else {
        echo "../images/pazzle.png";
    }
    ?>" alt="puzzle">
                <p class="bottomblocktext">Optimize teamwork</p>
            </div>

            <div class="bottomblock">
                <img class="bottomimg" src="<?php
    if (!empty($_SESSION['light'])) {
        echo "../images/search_white.png";
    } else {
        echo "../images/search.png";
    }
    ?>" alt="search">
                <p class="bottomblocktext">Smart Insights</p>
            </div>
        </div>
        <hr>
        <p class="bottomtext">"Circle D.O.T.S. is our flagship platform to simplify communication,</p>
        <p class="bottomtext bottomtextmargin">streamline collaboration, and provide smart insights for better decisions."</p>
        <div class="copyright">
            <img class="copyrightimg" src="../images/Copyright.png" alt="Copyright">
            <p class="copyrighttext">circlesolutions2025</p>
        </div>
    </div>
</body>
</html>