<?php
session_start();
require_once 'C:\wamp64\www\GoodDiagV2\php\include\database.php';

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

        <div class="confirmintro">
            <h4>Nous avons bien reçu votre demande de devis gratuit !</h4>
            <p>Nous allons traiter votre demande dans les plus brefs délais.</p> <br> <br>
            <a href="index.php" class="button-1">Aller sur la page d'accueil</a> <br> <br> <br> <br>
            <a href="actu.php" class="button-2">Voir nos actualités</a>
        </div>

        <?php include 'php\include\trust.php' ?>
        <footer><?php include 'php\include\footer.php' ?></footer>

        <script src="assets\js\function.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="assets/js/carousel.js"></script>
</body>

</html>