<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ajouter votre capteur</title>
  <link rel="stylesheet" href="../Css/headerfooterr.css"/>
  <link rel="stylesheet" href="../Css/editerMaison.css"/>
  <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
</head>

<body class="no" id="menu">

  <?php include("header.php") ?>

  <div id="corps">
  <?php include("../Views/slideView.php") ;?>
    <p id="erreur"><?php if (isset($info)) {echo $info;} ?></p>

    <form action="" method="post" class="form-style-6">
      <h1>Ajouter des Cemacs à votre Logement</h1>
      <center>
        <br><br>
        <label>La pièce où il se situe :</label>
        <select name="piece_cemac" type="select">
          <?php
            while ($donnees2 = $variete2->fetch())
            {
            echo ' <option value='.$donnees2['id_piece'].'> '.$donnees2['nom_piece'].'</option>';
            }?>
				</select>
        <br><br>
        <input type="submit" value="Ajouter" name="ajCemac">
      </center>
    </form>
  </div>
  <?php include("footer.php")?>
</body>
</html>
