<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Nouvelle Pièce</title>
  <link rel="stylesheet" href="../Css/headerfooterr.css"/>
  <link rel="stylesheet" href="../Css/editerMaison.css"/>
  <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
</head>

<?php include("header.php") ?>


<body class="no" id="menu">


  <div id="corps">
  <?php include("../Views/slideView.php") ;?>

    <form action="" method="post" class="form-style-6">
      <h1>Ajouter votre pièce</h1>
      <center>
        <p>
          <?php if (isset($statut)) { echo $statut; }  ?>
        </p>
        <label for="nom">Nom de la pièce :</label>
        <input type="text" name="nom" id="nom" />
        <br>
        <p style=""><?php if (isset($erreur)) { echo $erreur;} ?></p>
        <br>
        <label for="">Superficie de la pièce :</label>
        <input type="text" name="superficie" />
        <br><br>

        <label>Type de la pièce :</label>
        <select name="varietePie">

          <?php
              while ($donnees1 = $variete1->fetch())
              {
                echo'<option value='.$donnees1['id_type_piece'].'>'.$donnees1['variete_piece'].'</option>';
              }
          ?>

				</select>

        <br><br><br><br>

        <input type="submit" value="Ajouter" name="ajPiece">
        <input type ="submit" name="retour" value="Retour">
      </center>
    </form>

    <br>

  </div>
</body>
<?php include("footer.php")?>
</html>
