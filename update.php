<?php

session_start(); // On démarre la session AVANT toute chose

// verifier l'id si integer et non vide
$id = htmlspecialchars($_GET['id']);
require_once 'C:\wamp64\www\GoodDiagV2\php\include\database.php';
$requete = $db->query("SELECT id, title, texte, date, picture FROM articles where id = $id");
// $requete->execute($id);

$data = $requete->fetch(PDO::FETCH_ASSOC);

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
            <p>Ajouter un article</p>
    </div>

    <div class="container16">
        <img id="bgadmin" src="./assets/img/rose-1024710_1920.jpg" alt="">
        <div class="update-container">
            <h3>Edition de la bouteille</h3> <br><br>
            <form id="update" method="POST" action="./php/traitement/t-update.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input class="low" type="text" name="title" value="<?= $data["title"] ?>">
                <input class="low" type="text" name="texte" value="<?= $data["texte"] ?>">
                <input class="low" type="date" name="date" value="<?= $data["date"] ?>">
                <img src="./assets/img/avatarfolder/<?php echo $data['picture']; ?>" alt="">
                <input class="select
            " type="file" id="picture" name="picture">
                <input id="send" type="submit">
            </form>
        </div>
    </div>



    <br><br><br>

    
    <script src="assets\js\function.js"></script>

</body>

</html>