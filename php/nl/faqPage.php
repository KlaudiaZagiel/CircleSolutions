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
    <title>Frequently Asked Questions</title>
    <link rel="stylesheet" href="../../css/lightMode/faqPage.css">
    <link rel="icon" type="image/x-icon" href="../../images/favicon/favicon.ico">

    <?php
    if (!empty($_SESSION['light'])) {
        echo "<link rel='stylesheet' href='../../css/darkMode/faqPage.css'>";
        echo "<link rel='stylesheet' href='../../css/darkMode/header.css'>";
    } else {
        echo "<link rel='stylesheet' href='../../css/lightMode/faqPage.css'>";
        echo "<link rel='stylesheet' href='../../css/lightMode/header.css'>";
    }
    ?>
</head>

<body>
    <?php include '../../php/nl/header.php'; ?>
    <div class="heroText">
        <h1>FAQ-Frequently Asked Questions</h1>
        <p class="findAnswers">Vind antwoorden op veelgestelde vragen over onze diensten en oplossingen.</p>
    </div>

    <section class="faqBoxes"> <!-- it wraps every individual FAQ block (each <details>). -->
        <details class="faq-Qa"> <!-- each faq  block (question and answer)-->

            <summary> <!--what user clicks to expand content-->
                <div class="faq-Question">Wat voor software oplossingen biedt Circle Solutions aan?</div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer">Wij bouwen op maat gemaakte software die is afgestemd op de behoeften van uw bedrijf,
                inclusief web, mobiele en cloudoplossingen.
            </div>
        </details>

        <details class="faq-Qa">
            <summary>
                <div class="faq-Question"> Wat maakt Circle D.O.T.S. anders?</div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer"> Circle D.O.T.S. is ons toonaangevende platform, ontworpen om communicatie te
                vereenvoudigen,
                samenwerking te optimaliseren en slimme inzichten te bieden — allemaal op één plek.
            </div>
        </details>

        <details class="faq-Qa">
            <summary>
                <div class="faq-Question">Bieden jullie doorlopende ondersteuning nadat een project is afgerond? </div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer">Ja. Onze onderhouds- en ondersteuningsdiensten omvatten regelmatige updates, bugfixes en
                prestatieverbeteringen om ervoor te zorgen dat uw systeem soepel blijft werken.
            </div>
        </details>

        <details class="faq-Qa">
            <summary>
                <div class="faq-Question">Kan Circle Solutions integreren met onze bestaande tools of platforms?</div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer"> Zeker! Wij ontwerpen flexibele, API-gestuurde oplossingen die naadloos aansluiten op uw
                huidige systemen en werkprocessen.
            </div>
        </details>

        <details class="faq-Qa">
            <summary>
                <div class="faq-Question">Hoe gaan jullie
                    om met wijzigingen of nieuwe eisen tijdens het project?</div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer">We bespreken nieuwe verzoeken in detail en passen de projectomvang of planning aan waar
                nodig, zodat er transparantie is en er geen verrassingen ontstaan in kosten of oplevering.
            </div>
        </details>

        <details class="faq-Qa">
            <summary>
                <div class="faq-Question">Wat zijn de responstijden voor ondersteuningsverzoeken?</div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer">Wij streven ernaar om op werkdagen binnen 24 uur te reageren op alle
                ondersteuningsverzoeken. Kritieke problemen worden onmiddellijk behandeld.
            </div>
        </details>

        <details class="faq-Qa">
            <summary>
                <div class="faq-Question">Kan ik betrokken worden bij het ontwerpproces en de ontwikkelingsfase?</div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer">Ja, wij moedigen samenwerking aan. Klanten kunnen ontwerpen beoordelen, prototypes
                testen en gedurende het hele project feedback geven om ervoor te zorgen dat het eindproduct aan de
                verwachtingen voldoet.
            </div>
        </details>

        <details class="faq-Qa">
            <summary>
                <div class="faq-Question">Bieden jullie training of documentatie aan voor het gebruik van de software?
                </div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer">Absoluut! Elk project bevat duidelijke gebruikersdocumentatie, en desgewenst kunnen wij
                ook virtuele of fysieke trainingssessies aanbieden.
        </details>
    </section>

    <div class="contactBox">
        <h2>Uw antwoord niet gevonden?</h2>
        <p class="wijHelpen">
            <a href="../../php/nl/contactPage.php">Neem contact met ons op</a>
            - wij helpen u graag.
        </p>

        <div class="copyrightBox">
            <img src="../../images/Copyright.png" alt="copyright" class="copyright">
            <p class="copyText">circlesolutions2025</p>
        </div>
    </div>
</body>

</html>