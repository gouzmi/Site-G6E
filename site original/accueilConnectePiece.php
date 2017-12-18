<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Acceuil Connecté par pièce</title>
    <link rel="stylesheet" href="cssformulairee.css"/>
    <link rel="stylesheet" href="headerfooterr.css"/>
    <link rel="stylesheet" href="accueilConnecté.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>

    <?php include("header.php") ?>

    <a id = "top" href="deconnexion.php" >Se déconnecter</a>
    <body>

    	<!-- Menu pièce-->
    	<div class="corps">
        <div class="left">
    	   <ul>
       		<li class="li section"><a href="#Salle de bain" id="SalleDeBain"> Salle de bain</a></li>
    		<li class="li section"><a href="#Salle de séjour" id="SalleDeSejour">Salle de séjour</a></li>
    		<li class="li section"><a href="#Salon" id="Salon">Salon</a></li>
    		<li class="li section"><a href="#Salle à manger" id="SalleManger">Salle à manger</a></li>
    		<li class="li section"><a href="#Chambre" id="Chambre">Chambre</a></li>
            <li class="li section"><a href="#Terrasse" id="Terrasse">Terrasse</a></li>
            <li class="li section"><a href="#Cuisine" id="Cuisine">Cuisine</a></li>
            <li class="li section"><a href="#Bureau" id="Bureau">Bureau</a></li>
    		<li class="li section"><a href="#Garage" id="Garage">Garage</a></li>
    	   </ul>
       </div>
 		   <div class="right">
            <script src="JS1.js"></script>

        </div>

 	    </div>
    </body>

        <?php include("footer.php") ?>

</html>
