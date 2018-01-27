<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Historique des capteurs</title>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/profil.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
</head>


<body class="no" id="menu">
  <?php include("header.php") ?>

<div id="corps">


<?php include("../Views/slideView.php") ;?>

<div>
  <?php
    foreach ($capteurs as $key => $capteur) {
      getHistorique($capteur['id_capteur'], $bdd);
    }
  ?>
</div>


</div>

<?php include("footer.php") ?>

</body>



</html>
