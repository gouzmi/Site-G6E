<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="cssp11.css"/>
    <link rel="stylesheet" href="headerfooterr.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>


    <?php include("header.php") ?>
    <body>
      <h1 class="titre">L'Entreprise</h1>
        <article>
            <div class="Entreprise">
                <p>DomHome est un nouveau processus domotique innovant.</p>
                <p>Il vous permettra de gérer votre maison à distance<br>et de garantir votre sécurité.</p>
            </div>
        <h1 class="titre">L'équipe</h1>
            <div class="lequipe">
                <figure>
                    <div><img src="yuqing.jpg" class= img_petit alt="" />
                        <figcaption>Yuqing Zhu</figcaption> </div>
                    <div><img src="guillaume.jpg" class= img_petit alt="" />
                        <figcaption>Guillaume Dupont</figcaption></div>
                    <div><img src="darlene.jpg" class= img_petit alt="" />
                        <figcaption>Darlène Eustache</figcaption></div>
                    <div><img src="bruno.jpg" class= img_petit alt="" />
                        <figcaption>Bruno de Rosamel</figcaption></div>
                    <div><img src="morgane.jpg" class= img_petit alt="" />
                        <figcaption>Morgane Eckert</figcaption></div>
                    <div><img src="tibo.jpg" class= img_petit alt="" />
                        <figcaption>TszHin Chuk</figcaption></div>
                </figure>
            </div>
        </article>


    </body>
<?php include("footer.php") ?>


</html>
