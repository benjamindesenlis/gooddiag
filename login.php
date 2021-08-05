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
    <link rel="stylesheet" href="assets\style\admin-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">

</head>
<body>

<div class="espace">
        <img id="bgadmin" src="assets\img\LogoGoodDiagImmo.png" alt="">
        <div class="connexion">
            <h2>Connectez-vous!</h2> <br>
            <form action="./php/traitement/t-login.php" method="post">
                <input type="text" name="mailconnect" placeholder="Votre email"> <br>
                <input type="password" name="mdpconnect" placeholder="Votre mot de passe"> <br>
                <input type="submit" placeholder="Connectez-vous!" class="button-1"> <br>
            </form>
        </div>
    </div>

</body>
</html>