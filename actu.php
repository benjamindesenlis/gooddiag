<?php
session_start();
require_once 'C:\wamp64\www\GoodDiagV2\php\include\database.php';

$requete = "SELECT id, picture, title, texte, date FROM articles";
$resultat = $db->query($requete)->fetchAll(PDO::FETCH_ASSOC);

?>

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
            <h4>Nos actualités</h4>
        </div>

        <div class="actu-grid">

            <?php
            foreach ($resultat as $result) {
            ?>
                <div class="ficheactu">
                    <div class="top">
                        <img src="./assets/img/avatarfolder/<?php echo $result['picture']; ?>">
                    </div>
                    <div class="bottom">
                        <h3><?php echo $result['title']; ?></h3> <br>
                        <p><?php echo $result['texte']; ?></p> <br>
                        <a href="">Lire la suite ></a>

                    </div>

                </div>




            <?php } ?>


        </div>


        </div>

        <div class="devisgratuit">
        <div class="intro-devis">
            <h4>Votre devis gratuit</h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et</p> <br><br> <br>
            <a href="devis.php" class="button-1">Votre devis gratuit</a>
        </div>
        </div>
        

        <?php include 'php\include\trust.php' ?>
        <footer><?php include 'php\include\footer.php' ?></footer>

        <script src="assets\js\function.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="assets/js/carousel.js"></script>
</body>

</html>