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
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
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

    <div class="container1">

        <form id="addcontainer" action="./php/traitement/t-add.php" method="POST" enctype="multipart/form-data" id="tableau">
        <div class="div">
            <input class="low" type="text" maxlength="30" placeholder="Titre" name="title"> <br>
            <div id="editor-container">
                <input class="high" type="text" placeholder="Texte" name="texte"> <br>
            </div>
            <input class="date" type="date" placeholder="Date" name="date"> <br>
            <input class="select" type="file" placeholder="Image" name="picture" accept="image/png, image/jpg, image/jpeg"> <br>
            <button type=" submit" class="button-1">Envoyer</button>
        </div>
            
        </form>
            
    </div> <br><br><br>


    
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="assets\js\function.js"></script>
    <script>
    var quill = new Quill('#editor-container', {
  modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['bold', 'italic', 'underline'],
      ['image', 'code-block']
    ]
  },
  placeholder: 'Compose an epic...',
  theme: 'snow'  // or 'bubble'
});

    var form = document.querySelector('form');
    form.onsubmit = function() {
    // Populate hidden form on submit
    var about = document.querySelector('input[name=texte]');
    about.value = JSON.stringify(quill.getContents());
    
    console.log("Submitted", $(form).serialize(), $(form).serializeArray());
  
  // No back end to actually submit to!
  alert('Open the console to see the submit data!')
  return false;
};   
    </script>
</body>

</html>