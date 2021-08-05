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
        <p>Editer ou supprimer un article</p>
    </div>

    <div class="grid-container">

        <?php
        foreach ($resultat as $result) {
        ?>
            <div class="fichearticle">
                <div class="top">
                    <img src="./assets/img/avatarfolder/<?php echo $result['picture']; ?>">
                </div>
                <div class="bottom">
                    <h3><?php echo $result['title']; ?></h3> <br>
                    <p><?php echo $result['texte']; ?></p> <br>
                    <p>Publié le <?php echo $result['date'] ?></p> <br> <br>
                    <a href="./update.php?id=<?php echo $result['id'] ?>" class="button-1">Editer</a>
                    <a class="button-1" href="./delete.php?id=<?php echo $result['id'] ?>" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cet article?'));">Supprimer</a>

                </div>

            </div>




        <?php } ?>


    </div>


    </div> <br><br><br>



    <script src="assets\js\function.js"></script>

</body>

</html>