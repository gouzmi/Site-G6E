<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>Ajouter votre Actionneur</title>
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
          <h1>Nouvel actionneur</h1>
          <center>
            <p>
              <?php if (isset($statut)) { echo $statut; }  ?>
            </p>
            <label>Type d'actionneur :</label>
            <select name="varieteAct" type="select">
              <?php
              while ($donnees1 = $variete1->fetch()){
                echo ' <option value='.$donnees1['id_type_actionneur'].'> '.$donnees1['variete_actionneur'].'</option>';
              }?>
            </select>

            <br><br>
            <label>La pièce associée :</label>
            <select name="varietePie" id ="varietePie"type="select">
              <?php
              while ($donnees2 = $variete2->fetch()){
                echo ' <option value='.$donnees2['id_piece'].'> '.$donnees2['nom_piece'].'</option>';
              }?>
            </select>
            <br><br>
            <label>Le Cemac associé :</label>
            <select name="idCemac"  id="idCemac" type="select">
              <?php
              while ($donnees3 = $variete3->fetch()){ ?>
                <option><?php echo $donnees3['id_cemac']; ?></option>
              <?php } ?>
            </select>
            <br><br>
            <label for="nom">Nom de l'actionneur :</label>
            <input type="text" name="nom" id="nom" />

            <br><br><br><br>
            <input type="submit" value="Ajouter" name="ajActionneur">

            <input type ="submit" name="retour" value="Retour">

          </center>

        </form>

        <br>
    </div>

    <?php include("footer.php"); ?>
  </body>
</html>
