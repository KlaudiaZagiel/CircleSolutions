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
    <?php
    if (!empty($_SESSION['light'])) {
        echo "<link rel='stylesheet' href='../css/darkMode/404Page.css>";
    } else {
        echo "<link rel='stylesheet' href='../css/lightMode/404Page.css'>";
    }
    ?>
    <link rel="shortcut icon" href="#" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r79/three.min.js"></script>
    <title>404 Not Found</title>
</head>
<body>
    <!-- Star background -->

    <script src="/CircleSolutions/js/404page.js"></script>

    <!--Header-->

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
    <!--404 Text-->

    <div class="text-stack"> 
    <div class="text404">
            <h1>404</h1>
        <div class="notfound">
            <h2>Page not found</h2>
        </div>
    </div>
    </div>    
    <div class="homemessage">
        <h3>Couldn't find the page your looking for</h3>
        <p> <a href="../html/mainPage.html">Go to Homepage</a></p>
    </div>

</body>
</html>