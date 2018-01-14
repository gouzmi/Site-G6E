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
  <div class="page">

    <form action="" method="post" class="form-style-6">
      <h1>Insérez-vous</h1>

      <center>

        <label>Type du capteur :</label>
        <select name="varieteCap">


            <?php
                while ($donnees1 = $variete1->fetch())
                {
                  ?>
                        <option value="<?php $donnees1['variete_capteur']; ?>"><?php echo $donnees1['variete_capteur']; ?></option>
            <?php
                }
            ?>

				</select>

        <br><br>
        <!--<button type="button" onclick="">Ajouter un type de capteur</button>
        <input type="text" name="ajoutTypeC">

        <br><br>-->
        <label>La pièce associée :</label>
        <select name="varietePie">

          <?php
              while ($donnees2 = $variete2->fetch())
              {
              ?>
                        <option value="<?php $donnees2['nom_piece']; ?>"><?php echo $donnees2['nom_piece']; ?></option>
              <?php
              }
          ?>

				</select>

        <br><br>
        <label>Le Cemac associé :</label>
        <select name="idCemac">
          <?php
              while ($donnees3 = $variete3->fetch())
              {
              ?>
                        <option value="<?php $donnees3['id_cemac']; ?>"><?php echo $donnees3['id_cemac']; ?></option>
              <?php
              }
          ?>

        </select>
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
  <?php include("footer.php")?>
</body>
</html>
