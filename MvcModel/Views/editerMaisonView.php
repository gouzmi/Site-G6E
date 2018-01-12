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


     <form action="" method="post" class="form-style-6">
       <h1>Editer votre maison ici !</h1>
       <center>
       <label>Que souhaitez-vous modifier ? </label>
       <br><br><br><br>
       <input type="radio" name="capteur" id="capteur"><label class="ca" for="capteur" >Capteur</label>
       <input type="radio" name="piece" id="piece"><label class="ca" for="piece">Pièce</label>
       <br><br><br><br><br>
       <input type="submit" value="Valider" id="Valider">
     </center>
     </form>


</div>
</div>
</body>
<?php include("footer.php") ?>
</html>
