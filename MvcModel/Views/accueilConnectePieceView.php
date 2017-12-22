<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Acceuil Connecté par pièce</title>
    <link rel="stylesheet" href="../Css/cssformulairee.css"/>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/accueilConnecté.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <script src="../javaScript/accueilConnectePiece.js"></script>
</head>

<?php include("header.php") ?>

<a id = "top" href="../Controlers/deconnexion.php" >Se déconnecter</a>

<body>
<!-- Menu pièce-->
<div class="corps">s
    <div class="left">
        <ul>
            <button class="section"><a class="li" id="SalleDeBain" onclick="statut(this.id)"> Salle de bain</a></button>
            <button class="section"><a class="li" id="SalleDeSejour" onclick="statut(this.id)">Salle de séjour</a></button>
            <button class="section"><a class="li" id="Salon" onclick="statut(this.id)">Salon</a></button>
            <button class="section"><a class="li" id="SalleManger" onclick="statut(this.id)">Salle à manger</a></button>
            <button class="section"><a class="li" id="Chambre" onclick="statut(this.id)">Chambre</a></button>
            <button class="section"><a class="li" id="Terrasse" onclick="statut(this.id)">Terrasse</a></button>
            <button class="section"><a class="li" id="Cuisine" onclick="statut(this.id)">Cuisine</a></button>
            <button class="section"><a class="li" id="Bureau" onclick="statut(this.id)">Bureau</a></button>
            <button class="section"><a class="li" id="Garage" onclick="statut(this.id)">Garage</a></button>
        </ul>
    </div>
    <div class="right">
        <h1 class="h1" align="center">Voici les statuts des capteurs</h1>
        <button class="div1" href="conseil.php">Votre conseille</button>
        <button class="div2" href="notification.php">Notifications</button>
        <p id="pageStatut"></p>
    </div>

</div>
</body>

<?php include("footer.php") ?>

</html>
