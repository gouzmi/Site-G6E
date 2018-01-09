<!DOCTYPE html>
<html>
<head>
  <title>Editer sa maison</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../Css/headerfooterr.css">
  <link rel="stylesheet" type="text/css" href="../Css/editerMaison.css">
</head>
<?php include ("header.php")?>
<body class="no" id="menu">
  <div id="corps">
  <?php include("../Views/slideView.php") ;?>
  <div class="page">
    <section>
     <p id="titre">Editer votre maison ici </p> <br><br>
     <form action="" method="post">
       <center>
       <label id="question">Vous voulez modifier des capteurs ou des pièce dans votre maison? </label>
       <br><br>
       <input type="radio" name="capteur" id="capteur"><label for="capteur" >Capteur</label>
       <input type="radio" name="piece" id="piece"><label for="piece">Pièce</label>
       <br><br><br>
       <input type="submit" value="Valider" id="Valider">
     </center>
     </form>
     <div id="retour"><a href="login.php"> Retour</a></div>
     <br>
   </section>
</div>
</div>
</body>
<?php include("footer.php") ?>
</html>
