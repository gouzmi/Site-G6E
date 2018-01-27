<!DOCTYPE html>
<html>
<head>
  <title>Editer sa maison</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../Css/headerfooterr.css">
  <link rel="stylesheet" type="text/css" href="../Css/editerMaison.css">
</head>

<body class="no" id="menu">
  <?php include ("header.php")?>

  <div id="corps">
  <?php include("../Views/slideView.php") ;?>



     <form action="" method="post" class="form-style-6">
       <h1>Editer votre maison ici !</h1>
       <center>
       <p>
         <?php if (isset($statut)) { echo $statut; }  ?>
       </p>
       <label>Que souhaitez-vous modifier ? </label>
       <br><br><br><br>
       <input type="radio" name="categorie" id="piece" value="piece">Pièce
       <input type="radio" name="categorie" id="cemac" value="cemac">Cemac
       <input type="radio" name="categorie" id="capteur" value="capteur">Capteur
       <input type="radio" name="categorie" id="actionneur" value="actionneur">Actionneur
       <br><br><br><br><br>
       <input type="submit" value="Valider" id="Valider">
     </center>
     </form>



</div>
<?php include("footer.php") ?>
</body>
</html>
