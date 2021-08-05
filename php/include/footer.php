<?php

if (isset($_POST['submit'])) {
    $to = "benjamindesenlis@gmail.com";
    $subject = $_POST['name'];
    $telnumber = $_POST['tel'];
    $message = $_POST['votremessage'];
    $from = $_POST['mail'];
    $headers = "From:" . $from;

    if (mail($to, $subject, $telnumber, $message, $headers)) {
        header("../../index.php");
    } else {
        echo "failed";
    }
}

?>

<div class="footer">
    <div class="contact">

        <div class="contacteznous">
            <div class="svg-circle2">
                <img src="assets\img\svg\circlelogoblack.svg" alt="">
            </div>
            <div class="formulaire">
                <h4>Contactez-nous !</h4>
                <form action="" method="POST">
                    <input type="text" placeholder="Votre nom" name="name">
                    <hr> <br>
                    <input type="tel" placeholder="Votre téléphone" name="tel">
                    <hr> <br>
                    <input type="mail" placeholder="Votre adresse mail" name="mail">
                    <hr> <br>
                    <input type="text" placeholder="Votre message" name="votremessage" class="votremessage">
                    <hr> <br>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
    <div class="footer-content">
        <ul>
            <li>
                <h4>GOOD'DIAG IMMO</h4>
                <p>Nous réalisons tous les diagnostics obligatoires lors de la vente et la location de vos biens. Notre entreprise est familiale, nous sommes à votre écoute afin de vous accompagner et vous conseiller.</p> <br>
                <p>N° RCS <br>GOOD DIAG IMMO © 2020</p>
            </li>
            <li>
                <div class="link">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="">Accueil</a></li>
                        <li><a href="">A propos</a></li>
                        <li><a href="">Actualités</a></li>
                        <li><a href="">Mentions légales</a></li>
                    </ul>
                </div>

            </li>
            <li>
                <div class="link">
                    <h4>Les diagnostics</h4>
                    <ul>
                        <li><a href="">Nos diagnostics</a></li>
                        <li><a href="">Contact et devis</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <h4>Suivez-nous</h4>
                <div class="reseau">
                    <img src="assets\img\svg\facebook.svg" alt="">
                    <img src="assets\img\svg\linkedinn.svg" alt="">
                </div>
            </li>
        </ul>
    </div>
</div>