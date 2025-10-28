<?php
$script = $_SERVER['SCRIPT_NAME'] ?? '';
$toggleTarget = '/php/en/mainPage.php';

if ($script !== '') {
    $candidate = preg_replace('#/(php|html)/nl/#', '/$1/en/', $script, 1, $count);

    if ($count === 0) {
        $candidate = preg_replace('#/nl/#', '/en/', $script, 1, $count);
    }

    if ($count > 0) {
        $toggleTarget = $candidate;
    } elseif (preg_match('#^(.*?)/(php|html)/#', $script, $match)) {
        $toggleTarget = $match[1] . '/php/en/mainPage.php';
    }
}
?>
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
                        <a class="buttonflag" href="<?= htmlspecialchars($toggleTarget, ENT_QUOTES) ?>">
                            <img src="../../images/header/flagNl.jpg" alt="flag">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>