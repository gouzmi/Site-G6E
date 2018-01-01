<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Acceuil Connecté par pièce</title>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/capteur.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <script src="../javaScript/accueilConnectePiece.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
</head>

<?php include("header.php") ?>


<body class="no" id="menu">
<!-- Menu pièce-->
<div id="corps">


<?php include("../Views/slideView.php") ;?>

    <div class="coeur" id="left">
            
    </div>

    <div class="coeur" id="right">
        <h1 class="h1" align="center">Voici les statuts des capteurs</h1>
        <p id="pageStatut"></p>
    </div>

</div>

</body>

<?php include("footer.php") ?>

</html>
