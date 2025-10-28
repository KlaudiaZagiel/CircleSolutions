
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
        echo "<link rel='stylesheet' href='../css/whatwebuildDark.css'>";
    } else {
        echo "<link rel='stylesheet' href='../css/whatwebuild.css'>";
    }
    ?>
    <title>Wat we bouwen</title>
</head>
<body>
    <header>
    <div class="backroundimagemaindiv">
        <div class="headerdivmain">
            <a href="../nl/mainPage.php"><img class="headerImagedots" src="../images/circleSolutionsLogo.png" alt="Circle Solutions-logo"></a>
            <ul class="headerbuttons">
                <li><a href="../nl/dots.php">D.O.T.S</a></li>
                <li><a href="../nl/contactPage.php">Contact</a></li>
                <li><a href="../nl/aboutUs.php">Over ons</a></li>
                <li><a href="../nl/whatWeBuild.php">Oplossingen</a></li>
                <li>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES); ?>" method="POST">
                        <button name="toggle" class="buttonflag buttondarLight">Donker/licht</button>
                    </form>
                </li>
                <li><a class="buttonflag" href="../en/whatwebuild.php"><img src="../images/flag.png" alt="vlag"></a></li>
            </ul>
        </div>
    </div>
  </header>

  <main class="services" role="main">
    <h1 class="page-title">Wat we bouwen</h1>

    <div class="service-box">
      <div class="icon"><img src="../images/lock.png" alt="" aria-hidden="true"></div>
      <h3>Cybersecuritydiensten</h3>
      <p>Beveiligingsaudits, tests en naleving.</p>
    </div>

    <div class="service-box">
      <div class="icon"><img src="../images/phone.png" alt="" aria-hidden="true"></div>
      <h3>Mobiele app-ontwikkeling</h3>
      <p>Apps voor iOS, Android en meer.</p>
    </div>

    <div class="service-box">
      <div class="icon"><img src="../images/desktop.png" alt="" aria-hidden="true"></div>
      <h3>Onderhoud en ondersteuning</h3>
      <p>Regelmatige updates, bugfixes en verbeteringen.</p>
    </div>

    <div class="service-box">
      <div class="icon"><img src="../images/laptop1.png" alt="" aria-hidden="true"></div>
      <h3>Maatwerksoftware</h3>
      <p>Op maat gemaakte oplossingen voor uw bedrijfsbehoeften.</p>
    </div>

    <div class="service-box">
      <div class="icon"><img src="../images/cloud1.png" alt="" aria-hidden="true"></div>
      <h3>Cloudoplossingen</h3>
      <p>Veilige, schaalbare en altijd beschikbare infrastructuur.</p>
    </div>

    <div class="service-box">
      <div class="icon"><img src="../images/table.png" alt="" aria-hidden="true"></div>
      <h3>Webontwikkeling</h3>
      <p>Responsieve, moderne websites en apps voor uw merk.</p>
    </div>
  </main>

  <footer class="cta" role="contentinfo">
    <h2>Bekijk D.O.T.S of laten we aan de slag gaan.</h2>
    <a class="cta-link" href="../nl/dots.php">Bekijk D.O.T.S</a>
    <a class="cta-primary" href="../nl/contactPage.php">Start uw project</a>
  </footer>
</body>
</html>