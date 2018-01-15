<!DOCTYPE html>
<html>
<head>
  <title>Modifier vos capteurs</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../Css/headerfooterr.css">
  <link rel="stylesheet" type="text/css" href="../Css/editerMaison.css">
</head>




<body class="no" id="menu">
  <?php include ("header.php")?>


  <div id="corps">
  <?php include("../Views/slideView.php") ;?>
  <div class="page">


     <form action="" method="post" class="form-style-6">
       <h1>Modifier votre capteur ici !</h1>
       <center>
       <label>Vous voulez ajouter un autre capteur ou supprimer un capteur? </label>
       <br><br><br><br>
       <input type="radio" name="ajouter" value="ajouter" id="ajouter"><label class="ca" for="ajouter" >Ajouter un autre capteur</label>
       <input type="radio" name="supprimer" value="supprimer" id="supprimer"><label class="ca" for="supprimer">Supprimer un capteur</label>
       <br><br><br><br>
       <input type="submit" value="Valider" id="Valider">
     </center>

     <div id="retour"><a href="../Controlers/editerMaison.php"> Retour </a></div>
    </form>
     <br>
</div>

</div>
<?php include("footer.php") ?>
</body>
</html>
