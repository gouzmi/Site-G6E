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

<?php include("header.php") ?>


<body class="no" id="menu">


  <div id="corps">
  <?php include("../Views/slideView.php") ;?>
  <div class="page">

    <form action="" method="post" class="form-style-6">
      <h1>Insérez-vous</h1>

      <center>
        <label for="nom" class="labell">Nom du capteur :</label>
        <input type="text" name="nom" class="text" required>
        <br/><br/>

        <label class="labell">Type du capteur :</label>
        <select name="varieteC">
          <?php
            include('../Models/connexiondb.php');

            $variete1 = $bdd->query('SELECT * FROM type_capteur');
            $variete2 = $bdd->query('SELECT * FROM type_piece');


            if (isset($_POST['Enregistrer']))
              {
                $ajoutCpt = $bdd->prepare("INSERT INTO type_capteur(variete_capteur) VALUES (?)");
                $ajoutCpt->execute(array($_POST['varieteC']));
                $ajoutCpt = $bdd->prepare("INSERT INTO capteur(nom) VALUES (?)");
                $ajoutCpt->execute(array($_POST['nom']));
                $ajoutCpt = $bdd->prepare("INSERT INTO type_piece(variete_piece) VALUES (?)");
                $ajoutCpt->execute(array($_POST['varieteP']));
                $info = "Succès";
              }

          ?>
            <?php
                while ($donnees1 = $variete1->fetch())
                {
                  ?>
                        <option value="<?php $donnees1['variete_capteur']; ?>"><?php echo $donnees1['variete_capteur']; ?></option>
            <?php
                }?>

				</select>
        <br><br>
        <label class="labell">La pièce associée :</label>
        <select name="varieteP">
          <?php
              while ($donnees2 = $variete2->fetch())
              {
              ?>
                        <option value="<?php $donnees2['variete_piece']; ?>"><?php echo $donnees2['variete_piece']; ?></option>
              <?php
              }
          ?>
				</select>
        <br><br>
        <label for="cemacAssc" class="labell">Le Cemac associé :</label>
        <input type="text" name="cemacAssc"  id="" class="text" required>
        <br><br><br><br>

        <input type="submit" value="Enregistrer" name="Enregistrer">

        <?php if (isset($info)){
            echo $info;
        } ?>
      </center>
    </form>

    <br>
</div>
  </div>
</body>
<?php include("footer.php")?>
</html>
