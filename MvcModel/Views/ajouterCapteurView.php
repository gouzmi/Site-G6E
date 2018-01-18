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
    <p id="erreur"><?php if (isset($info)) {echo $info;} ?></p>
    <form action="" method="post" class="form-style-6">
      <h1>Insérez-vous</h1>

      <center>

        <label>Type du capteur :</label>
        <select name="varieteCap" type="select">


            <?php
          
                while ($donnees1 = $variete1->fetch())
                {

                  ?>
                        <option><?php echo $donnees1['variete_capteur']; ?></option>
            <?php
                }
            ?>

				</select>

        <br><br>
        <!--pour test-->
        <label>nom:</label>
        <input type="text" name="name" />
      <br><br>
        <label>La pièce associée :</label>
        <select name="varietePie" id ="varietePie"type="select">

          <?php
              while ($donnees2 = $variete2->fetch())
              {
              ?>
                        <option value="<?php $_POST['varietePie'] ?>"><?php echo $donnees2['nom_piece']; ?></option>
              <?php
              }
          ?>

				</select>

        <br><br>
        <label>Le Cemac associé :</label>
        <select name="idCemac"  id="idCemac" type="select">
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
      </center>
      <div id="retour"><a href="../Controlers/modifierCapteur.php"> Retour </a></div>
    </form>

    <br>
</div>
  </div>
  <?php include("footer.php")?>
</body>
</html>
