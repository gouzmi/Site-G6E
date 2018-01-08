<!DOCTYPE html>
<html>
<head>
  <title>Editer sa maison</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../Css/headerfooterr.css">
  <link rel="stylesheet" type="text/css" href="../Css/editerMaison.css">
</head>
<?php include ("header.php")?>
<body>
  <div class="page">
    <section>
     <p id="titre">Editer votre maison ici </p> <br><br>
     <form action="" method="post">
       <center>
       <label for="email" id="question">Vous voulez modifier des capteurs ou des pièce dans votre maison? </label>
       <br><br>
       <input name="choix" type=radio value="capteur">Capteur</input>
       <input name="choix" type=radio value="piece">Pièce</input>
       <br><br><br>
       <input type="submit" value="Valider" id="valider">
     </center>
     </form>
     <div id="retour"><a href="login.php"> Retour</a></div>
     <br>
   </section>
</div>

  <?php include("footer.php") ?>
</body>
</html>
