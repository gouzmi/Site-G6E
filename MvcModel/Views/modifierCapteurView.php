<!DOCTYPE html>
<html>
<head>
  <title>Modifier vos capteurs</title>
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
     <p id="titre">Modifier vos capteurs </p> <br><br>
     <form action="" method="post">
       <center>
       <label id="question">Vous voulez ajouter un autre capteur ou supprimer un capteur? </label>
       <br><br>
       <input type="radio" name="ajouter" value="ajouter" id="ajouter"><label for="ajouter" >Ajouter un autre capteur</label>
       <input type="radio" name="supprimer" value="supprimer" id="supprimer"><label for="supprimer">Supprimer un capteur</label>
       <br><br><br>
       <input type="submit" value="Valider" id="Valider">
     </center>
     </form>
     <div id="retour"><a href="editerMaison.php"> Retour </a></div>
     <br>
   </section>
</div>

</div>
</body>
<?php include("footer.php") ?>
</html>
