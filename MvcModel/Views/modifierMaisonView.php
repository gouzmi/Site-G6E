<!DOCTYPE html>
<html>
<head>
  <title>Modifier votre Maison</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../Css/headerfooterr.css">
  <link rel="stylesheet" type="text/css" href="../Css/editerMaison.css">
</head>




<body class="no" id="menu">
  <?php include("header.php")?>


  <div id="corps">
  <?php include("../Views/slideView.php") ;?>


     <form action="" method="post" class="form-style-6">
       <h1>Modifier <?php echo $modif; ?> ici !</h1>
       <center>
       <label>Voulez vous ajouter ou supprimer <?php echo $modif; ?>? </label>
       <br><br><br><br>
       <input type="radio" name="ajsupp" value="ajouter" id="ajouter"><label class="ca" for="ajouter" >Ajouter </label>
       <input type="radio" name="ajsupp" value="supprimer" id="supprimer"><label class="ca" for="supprimer">Supprimer </label>
       <br><br><br><br>
       <input type="submit" name="modif" value="Valider">
     </center>

     <!--<div id="retour"><a href="../Controlers/editerMaison.php"> Retour </a></div>-->
    </form>
     <br>
</div>
<?php include("footer.php") ?>
</body>
</html>
