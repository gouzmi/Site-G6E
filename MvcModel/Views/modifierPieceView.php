<!DOCTYPE html>
<html>
<head>
  <title>Modifier vos pièces</title>
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
     <p id="titre">Modifier vos pièces </p> <br><br>
     <form action="" method="post">
       <center>
       <label id="question">Vous voulez ajouter une autre piece ou supprimer une piece? </label>
       <br><br>
       <input type="radio" name="ajouter" value="ajouter" id="ajouter"><label for="ajouter" >Ajouter une autre piece</label>
       <input type="radio" name="supprimer" value="supprimer" id="supprimer"><label for="supprimer">Supprimer une piece</label>
       <br><br><br>
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
