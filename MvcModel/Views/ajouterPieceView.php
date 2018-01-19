<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ajouter votre pièce</title>
  <link rel="stylesheet" href="../Css/headerfooterr.css"/>
  <link rel="stylesheet" href="../Css/editerMaison.css"/>
  <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
</head>

<?php include("header.php") ?>


<body class="no" id="menu">


  <div id="corps">
  <?php include("../Views/slideView.php") ;?>
  <div class="page">
    <p id="erreur"><?php if (isset($info)) {echo $info;} ?></p>
    <form action="" method="post" class="form-style-6">
      <h1>Insérez-vous</h1>

      <center>
        <label for="nom">Nom du pièce :</label>
        <input type="text" name="nom" id="nom" required/>
        <br>
        <p style=""><?php if (isset($erreur)) { echo $erreur;} ?></p>
        <br><br>

        <label for="">Superficie du pièce :</label>
        <input type="text" name="superficie" required/>
        <br><br>

        <label>Type du pièce :</label>
        <select name="varietePie">

          <?php
              while ($donnees1 = $variete1->fetch())
              {
                echo'<option value='.$donnees1['id_type_piece'].'>'.$donnees1['variete_piece'].'</option>';
              }
          ?>

				</select>

        <br><br><br><br>

        <input type="submit" value="Enregistrer" name="Enregistrer">
      </center>
      <div id="retour"><a href="../Controlers/modifierPiece.php"> Retour </a></div>
    </form>

    <br>
</div>
  </div>
</body>
<?php include("footer.php")?>
</html>
