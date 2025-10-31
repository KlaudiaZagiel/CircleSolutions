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
    <title>Frequently Asked Questions</title>
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

    <?php include '../../php/en/header.php'; ?>

    <div class="herotext">
        <h1>FAQ-Frequently Asked Questions</h1>
        <p class="findanswers">Find answers to common questions about our services and solutions.</p>
    </div>

    <section class="faqboxes"> <!-- it wraps every individual FAQ block (each <details>). -->
        <details class="faq-qa"> <!-- each faq  block (question and answer)-->

            <summary> <!--what user clicks to expand content-->
                <div class="faq-question">What kind of software solutions does Circle Solutions offer?</div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer">We build custom software tailored to your business needs, including web, mobile, and
                cloud solutions.
            </div>
        </details>

        <details class="faq-qa">
            <summary>
                <div class="faq-question"> What makes Circle D.O.T.S. different?</div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer"> Circle D.O.T.S. is our flagship platform designed to simplify
                communication,optimize
                teamwork, and deliver smart insights — all in one place.
            </div>
        </details>

        <details class="faq-qa">
            <summary>
                <div class="faq-question">Do you provide ongoing support after a project is completed?</div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer">Yes. Our Maintenance & Support services include regular updates, bug fixes, and
                performance improvements to ensure your system runs smoothly.
            </div>
        </details>

        <details class="faq-qa">
            <summary>
                <div class="faq-question">Can Circle Solutions integrate with our existing tools or platforms?</div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer"> Absolutely. We design flexible, API-driven solutions that connect seamlesslywith
                your
                current systems and workflows.
            </div>
        </details>

        <details class="faq-qa">
            <summary>
                <div class="faq-question">How do you handle changes or new requirements during the project?</div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer">We discuss any new requests in detail and adjust the project scope or timeline as
                needed, ensuring transparency and no surprises in cost or delivery.
            </div>
        </details>

        <details class="faq-qa">
            <summary>
                <div class="faq-question">What are your response times for support requests?</div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer">We aim to respond to all support inquiries within 24 hours on business days. Critical
                issues are handled immediately.
            </div>
        </details>

        <details class="faq-qa">
            <summary>
                <div class="faq-question">Can I be involved in the design and development process?</div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer">Yes, we encourage collaboration. Clients can review designs, test prototypes, and share
                feedback throughout the project to ensure the final product meets expectations.
            </div>
        </details>

        <details class="faq-qa">
            <summary>
                <div class="faq-question">Do you offer training or documentation for using your software?</div>
                <img src="../../images/faqimages/chevrondown.png" alt="chevron" class="chevron">
            </summary>
            <div class="answer">Yes. Every project includes clear user documentation, and we can also provide virtual or
                on-site training sessions if requested.
        </details>
    </section>

    <div class="contactbox">
        <h2>Didn't find your answer?</h2>
        <p class="wijhelpen">
            <a href="../../php/en/contactPage.php">Contact us</a>
            - we're happy to help.
        </p>

        <div class="copyrightbox">
            <img src="../../images/Copyright.png" alt="copyright" class="copyright">
            <p class="copytext">circlesolutions2025</p>
        </div>
    </div>
</body>

</html>