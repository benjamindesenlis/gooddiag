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
    <link rel="stylesheet" href="assets\style\admin-navigation.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">

</head>

<body>

    <header><?php include 'php\include\admin-navigation.php' ?></header>

    <div class="intro">
            <h4>Espace d'administration</h4>
            <p>Ajouter un administrateur</p>
    </div>

         <div class="register-container">
            <form id="registercontainer" action="./php/traitement/t-register.php" method="POST">
                <h3>Ajouter un administrateur</h3> <br>
                <input class="low" type="text" placeholder="Prenom" name="firstname"> <br>
                <input class="low" type="text" placeholder="Nom" name="lastname"> <br>
                <input class="low" type="email" placeholder="Email" name="email"> <br>
                <input class="low" type="password" placeholder="Mot de passe" name="password"> <br>
                <input class="low" type="password" placeholder="Confirmez le mdp" name="password-confirm"> <br>
                <button type="submit" class="button-1">Envoyer</button>
            </form>
        </div> <br><br><br>