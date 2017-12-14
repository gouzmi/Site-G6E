<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="contact.css"/>
    <link rel="stylesheet" href="headerfooterr.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>

    <?php include("header.php") ?>

    <body>
    <div class="page">
    <h1 class="titre">Contact</h1>
        <article>
            <div>
                <ul class="contactleft">
                    <li>Lundi: 09:00-12:00,14:00-17:00</li>
                    <li>Mardi: 09:00-12:00,14:00-17:00</li>
                    <li>Mercredi: 09:00-12:00,14:00-17:00</li>
                    <li>Jeudi: 09:00-12:00,14:00-17:00</li>
                    <li>Vendredi: 09:00-12:00,14:00-17:00</li>
                </ul>
            </div>
            <div>
                <ul class="contactright">
                    <li ><i class="fa fa-phone" aria-hidden="true"></i>01 43 01 02 46</li>
                    <li><i class="fa fa-address-card" aria-hidden="true"></i>28 rue Notre-Dame des Champs,<br>  75006 Paris</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i>domisep@domhome.fr</li>
                </ul>
        </article>
    </div>
    </body>

    <?php include("footer.php") ?>

</html>
