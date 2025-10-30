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

	<?php include '../../php/en/header.php'; ?>

 <div class="kb-hero">
    <div class="kb-hero-text">
      <h1>Knowledge Base</h1>
      <p>Discover articles, guides, and resources to empower your understanding.</p>
    </div>
  </div>

  <main class="kb-content">
    <section class="kb-section">
      <h2>Getting Started</h2>
      <div class="kb-grid">
        <div class="kb-card">
          <h3>Introduction</h3>
          <p>Learn the fundamentals of our system and how to begin effectively.</p>
          <a href="#card1" class="read-more">Read More →</a>
        </div>
        <div class="kb-card">
          <h3>Integrations</h3>
          <p>Connect external tools and streamline your workflows with ease.</p>
          <a href="#card4" class="read-more">Read More →</a>
        </div>
      </div>
    </section>

    <section class="kb-section">
      <h2>Advanced Topics</h2>
      <div class="kb-grid">
        <div class="kb-card">
          <h3>Data Management</h3>
          <p>Understand how to import, export, and maintain your data efficiently.</p>
          <a href="#card3" class="read-more">Read More →</a>
        </div>
        <div class="kb-card">
          <h3>Security & Privacy</h3>
          <p>Learn how to protect your account and data.</p>
          <a href="#card2" class="read-more">Read More →</a>
        </div>
      </div>
    </section>
  </main>

  <div id="card1" class="kb-expand">
    <div class="kb-expand-inner">
      <a class="kb-expand-close" href="#">&times;</a>
      <h3>Introduction</h3>
      <p>
        <ul>
          <li>We specialize in custom software development, system integration, and cloud computing services.</li>
          <li>Our team of experts is dedicated to delivering innovative solutions that manage business efficiency.</li>
          <li>We have a focus on quality and customer satisfaction, we work closely with clients to understand their unique needs.</li>
          <li>We hold the latest technologies and best practices to ensure successful project outcomes.</li>
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
          <li>Detailed guidance on importing, exporting and maintaining your data.</li>
          <li>We provide comprehensive tools for data migration and integration.</li>
          <li>Our solutions ensure data integrity and security throughout the management process.</li>
          <li>We understand every client unique’s challenges and deliver solutions to there expectations.</li>
        </ul>
      </p>
    </div>
  </div>

  <div id="card4" class="kb-expand">
    <div class="kb-expand-inner">
      <a class="kb-expand-close" href="#">&times;</a>
      <h3>Integrations</h3>
      <p>
        <ul>
          <li>We offer seamless integration with a wide range of third-party applications and services.</li>
          <li>We help businesses across various industries modernize their systems through innovative technology solutions.</li>
          <li>We assess your current setup, identify opportunities for improvement, and build solutions that connect smoothly with the tools you already use.</li>
        </ul>
      </p>
    </div>
  </div>

  <div id="card2" class="kb-expand">
    <div class="kb-expand-inner">
      <a class="kb-expand-close" href="#">&times;</a>
      <h3>Security & Privacy</h3>
      <p>
        <ul>
          <li>Use a strong, unique password and enable two-factor authentication (2FA).</li>
          <li>Regularly review connected apps and cancel access you don't recognize.</li>
          <li>Configure privacy settings to control what information is shared.</li>
          <li>Contact support immediately if you suspect unauthorized activity.</li>
        </ul>
      </p>
    </div>
  </div>

</body>
</html>