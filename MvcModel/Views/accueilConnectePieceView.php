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
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
</head>

<?php include("header.php") ?>


<body class="no" id="menu">
<!-- Menu pièce-->
<div id="corps">


    <div class="sidebar">
      <div class="container" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
      </div>
    </div>

    <div class="coeur" id="left">
            <div class="li">
                  <button class="section"><a id="SalleDeBain" onclick="statut(this.id)"> Salle de bain</a></button>
            </div>
            <div class="li">
                  <button class="section"><a id="SalleDeSejour" onclick="statut(this.id)">Salle de séjour</a></button>
            </div>
            <div class="li">
                  <button class="section"><a id="Salon" onclick="statut(this.id)">Salon</a></button>
            </div>
            <div class="li">
                  <button class="section"><a id="SalleManger" onclick="statut(this.id)">Salle à manger</a></button>
            </div>
            <div class="li">
                  <button class="section"><a id="Chambre" onclick="statut(this.id)">Chambre</a></button>
            </div>
            <div class="li">
                  <button class="section"><a id="Terrasse" onclick="statut(this.id)">Terrasse</a></button>
            </div>
            <div class="li">
                  <button class="section"><a id="Cuisine" onclick="statut(this.id)">Cuisine</a></button>
            </div>
            <div class="li">
                  <button class="section"><a id="Bureau" onclick="statut(this.id)">Bureau</a></button>
            </div>
            <div class="li">
                  <button class="section"><a id="Garage" onclick="statut(this.id)">Garage</a></button>
            </div>
    </div>

    <div class="coeur" id="right">
        <h1 class="h1" align="center">Voici les statuts des capteurs</h1>
        <p id="pageStatut"></p>
    </div>

</div>

</body>

<?php include("footer.php") ?>

</html>
