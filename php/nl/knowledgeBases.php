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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowledge Base</title>
    <link rel="stylesheet" href="../../css/lightMode/knowledgeBases.css">
    <link rel="icon" type="image/x-icon" href="../../images/favicon/favicon.ico">
    	<?php
	if (!empty($_SESSION['light'])) {
		echo "<link rel='stylesheet' href='../../css/darkMode/knowledgeBases.css'>";
		echo "<link rel='stylesheet' href='../../css/darkMode/header.css'>";
	} else {
		echo "<link rel='stylesheet' href='../../css/lightMode/knowledgeBases.css'>";
		echo "<link rel='stylesheet' href='../../css/lightMode/header.css'>";
	}
	?>
</head>
<body>

	<?php include '../../php/nl/header.php'; ?>

 <div class="kb-hero">
    <div class="kb-hero-text">
      <h1>Kennisbank</h1>
      <p>Ontdek artikelen, handleidingen en hulpmiddelen om uw begrip te vergroten</p>
    </div>
  </div>

  <main class="kb-content">
    <section class="kb-section">
      <h2>Aan de slag</h2>
      <div class="kb-grid">
        <div class="kb-card">
          <h3>Introductie</h3>
          <p>Leer de basisprincipes van ons systeem en hoe u effectief aan de slag kunt.</p>
          <a href="#card1" class="read-more">Lees meer →</a>
        </div>
        <div class="kb-card">
          <h3>Integraties</h3>
          <p>Verbind externe tools en stroomlijn uw workflows eenvoudig.</p>
          <a href="#card4" class="read-more">Lees meer →</a>
        </div>
      </div>
    </section>

    <section class="kb-section">
      <h2>Geavanceerde onderwerpen</h2>
      <div class="kb-grid">
        <div class="kb-card">
          <h3>Data Management</h3>
          <p>Begrijp hoe u uw gegevens efficiënt kunt importeren, exporteren en onderhouden.</p>
          <a href="#card3" class="read-more">Lees meer →</a>
        </div>
        <div class="kb-card">
          <h3>Security & Privacy</h3>
          <p>Ontdek hoe u uw account en gegevens kunt beschermen.</p>
          <a href="#card2" class="read-more">Lees meer →</a>
        </div>
      </div>
    </section>
  </main>

  <div id="card1" class="kb-expand">
    <div class="kb-expand-inner">
      <a class="kb-expand-close" href="#">&times;</a>
      <h3>Introductie</h3>
      <p>
        <ul>
          <li class="kb-expand-inner-inner">Wij zijn gespecialiseerd in softwareontwikkeling op maat, systeemintegratie en cloud computing-diensten.</li>
          <li class="kb-expand-inner-inner">Ons team van experts is toegewijd aan het leveren van innovatieve oplossingen die de bedrijfsefficiëntie beheren.</li>
          <li class="kb-expand-inner-inner">Wij richten ons op kwaliteit en klanttevredenheid, we werken nauw samen met klanten om hun unieke behoeften te begrijpen.</li>
          <li class="kb-expand-inner-inner">Wij maken gebruik van de nieuwste technologieën en beste werkwijzen om succesvolle projectresultaten te garanderen.</li>
        </ul>
      </p>
    </div>
  </div>

  <div id="card3" class="kb-expand">
    <div class="kb-expand-inner">
      <a class="kb-expand-close" href="#">&times;</a>
      <h3>Data Management</h3>
      <p>
        <ul>
          <li class="kb-expand-inner-inner">Gedetailleerde instructies voor het importeren, exporteren en onderhouden van uw gegevens.</li>
          <li class="kb-expand-inner-inner">Wij bieden uitgebreide hulpmiddelen voor gegevensmigratie en -integratie.</li>
          <li class="kb-expand-inner-inner">Onze oplossingen garanderen de integriteit en veiligheid van gegevens gedurende het hele beheerproces.</li>
          <li class="kb-expand-inner-inner">Wij begrijpen de unieke uitdagingen van elke klant en leveren oplossingen die aan hun verwachtingen voldoen.</li>
        </ul>
      </p>
    </div>
  </div>

  <div id="card4" class="kb-expand">
    <div class="kb-expand-inner">
      <a class="kb-expand-close" href="#">&times;</a>
      <h3>Integraties</h3>
      <p>
        <ul>
          <li class="kb-expand-inner-inner">Wij bieden naadloze integratie met een breed scala aan applicaties en services van derden.</li>
          <li class="kb-expand-inner-inner">Wij helpen bedrijven in uiteenlopende sectoren hun systemen te moderniseren met behulp van innovatieve technologische oplossingen.</li>
          <li class="kb-expand-inner-inner">Wij beoordelen uw huidige configuratie, identificeren verbetermogelijkheden en bouwen oplossingen die naadloos aansluiten op de tools die u al gebruikt.</li>
        </ul>
      </p>
    </div>
  </div>

  <div id="card2" class="kb-expand">
    <div class="kb-expand-inner">
      <a class="kb-expand-close" href="#">&times;</a>
      <h3>Beveiliging en privacy</h3>
      <p>
        <ul>
          <li class="kb-expand-inner-inner">Gebruik een sterk, uniek wachtwoord en schakel tweefactorauthenticatie (2FA) in.</li>
          <li class="kb-expand-inner-inner">Controleer regelmatig de gekoppelde apps en annuleer de toegang die u niet herkent.</li>
          <li class="kb-expand-inner-inner">Configureer de privacyinstellingen om te bepalen welke informatie wordt gedeeld.</li>
          <li class="kb-expand-inner-inner">Neem onmiddellijk contact op met de ondersteuning als u vermoedt dat er sprake is van ongeautoriseerde activiteiten.</li>
        </ul>
      </p>
    </div>
  </div>

</body>
</html>