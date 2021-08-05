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
            <h4>À propos</h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus</p>
        </div>

        <div class="container10">
            <div class="history">
                <h3>Notre histoire</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. <br><br> Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. <br> <br> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
            </div>
            <div class="historyimg">
                <img src="assets\img\MenDiag.png" alt="">
            </div>
        </div>

        <div class="container11">
            <div class="container11-content">
                <div class="kim">
                    <img src="assets\img\KimAbout.png" alt="">
                    <h3>Kim</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed doloremque nobis quia ipsum reprehenderit saepe repellat fugit. Sed, similique sapiente? Expedita, commodi sit, dolorem, qui tempora delectus aspernatur id reprehenderit eaque sed voluptas optio impedit error nulla? Ex eligendi quaerat reprehenderit eveniet sed laborum eius molestiae dolore obcaecati quis! Totam.</p>
                </div>
                <div class="thibault">
                    <img src="assets\img\ThibaultAbout.png" alt="">
                    <h3>Thibault</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed doloremque nobis quia ipsum reprehenderit saepe repellat fugit. Sed, similique sapiente? Expedita, commodi sit, dolorem, qui tempora delectus aspernatur id reprehenderit eaque sed voluptas optio impedit error nulla? Ex eligendi quaerat reprehenderit eveniet sed laborum eius molestiae dolore obcaecati quis! Totam.</p>
                </div>
            </div>
        </div>

        <div class="container12">
               <div class="container12-content">
                   <div class="cont12-left">
                       <h3>Les diagnostics immobiliers obligatoires</h3>
                       <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et</p>
                       <button class="button-1">Voir tous les diagnostics</button>
                   </div>
                   <div class="cont12-right">
                       <img src="assets\img\Tablette.png" alt="">
                   </div>
               </div>
        </div>



        <?php include 'php\include\trust.php' ?>
        <footer><?php include 'php\include\footer.php' ?></footer>

        <script src="assets\js\function.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="assets/js/carousel.js"></script>
</body>

</html>