<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good'Diag Immo - Accueil</title>
    <link rel="stylesheet" href="assets\style\style.css">
    <link rel="stylesheet" href="assets\style\navigation.css">
    <link rel="stylesheet" href="assets\style\footer.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">

</head>

<body>

    <header><?php include 'php\include\navigation.php' ?></header>

    <div class="intro">
        <h4>Votre devis gratuit</h4>
        <p>Vous pouvez faire une demande de devis gratuite, suite à la réception de celle-ci nous vous répondrons dans les plus brefs délais.</p>
    </div>

    <div class="container9">
        <form action="php/traitement/form.php" method="POST">
            <div class="caracteristique">
                <h5>Les caractéristiques du bien</h5> <br>
                <p>Type de transaction</p>
                <div class="venteoulocation">
                    <input type="radio" name="transaction" id="transaction_1" value="Vente" checked />
                    <label for="transaction_1">Vente</label>

                    <input type="radio" name="transaction" id="transaction_2" value="Location" />
                    <label for="transaction_2">Location</label>
                </div> <br>
                <p>Type de bien</p>
                <div class="typedebien">
                    <input type="radio" name="typeimmo" id="typeimmo_1" value="appartement" checked />
                    <label for="typeimmo_1">Appartement</label>

                    <input type="radio" name="typeimmo" id="typeimmo_2" value="maison" />
                    <label for="typeimmo_2">Maison</label>
                    <input type="radio" name="typeimmo" id="typeimmo_3" value="local" />
                    <label for="typeimmo_3">Local commercial</label>
                </div> <br>
                <p>Année de construction</p>
                <div class="anneeconstruction">
                    <input type="radio" name="dateconstruction" id="dateconstruction_1" value="avant" checked />
                    <label for="dateconstruction_1">Avant 1949</label>
                    <input type="radio" name="dateconstruction" id="dateconstruction_2" value="pendant" />
                    <label for="dateconstruction_2">Entre 1949 et 1997</label>
                    <input type="radio" name="dateconstruction" id="dateconstruction_3" value="apres" />
                    <label for="dateconstruction_3">Après 1997</label>
                </div> <br>
                <p>Supérficie</p>
                <div class="superficie">
                    <input type="number" id="superficie" name="superficie" min="0" value="1" max="100000"><span>m²</span>
                </div>


            </div>
            <div class="coordonnees">
                <h5>Vos coordonnées</h5>
                <input type="text" id="name" name="name" placeholder="Votre nom">
                <hr> <br>
                <input type="tel" id="tel" name="tel" placeholder="Votre téléphone">
                <hr> <br>
                <input type="mail" id="mail" name="mail" placeholder="Votre adresse mail">
                <hr> <br>
                <div class="villepostale">
                    <div class="city">
                        <input type="text" name="ville" placeholder="Votre ville">
                        <hr>
                    </div>
                    <div class="postal">
                        <input type="text" name=postal max="99999" min="0" placeholder="Code postal">
                        <hr>
                    </div>
                </div> <br>
                <input type="text" id="remarque" name="message" placeholder="Vous avez une remarque, une question ?">
                <hr> <br>

                <input type="submit" id="formsend" placeholder="Envoyeri" class="button-1">
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('destinataire@free.fr', 'Envoi depuis page Contact', $message, $entete);
        if ($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
    ?>



    <?php include 'php\include\trust.php' ?>
    <footer><?php include 'php\include\footer.php' ?></footer>

    <script src="assets\js\function.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/carousel.js"></script>
</body>

</html>