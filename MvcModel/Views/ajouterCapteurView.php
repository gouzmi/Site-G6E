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
        <label for="Nom">Nom du capteur :</label>
        <input type="text" name=""  id="" class="text" placeholder="" required>
        <br><br>
        <label for="Type">Type du capteur :</label>
        <select name="Type">
						<option value="Alarme">Alarme</option>
						<option value="Mouvement">Mouvement</option>
						<option value="Caméra">Caméra</option>
            <option value="Eclairage">Eclairage</option>
            <option value="Consommation">Consommation</option>
				</select>
        <br><br>
        <label for="">La pièce associée :</label>
        <input type="text" name=""  id="" class="text" placeholder="" required>
        <br><br>
        <label for="">Le Cemac associé :</label>
        <input type="text" name=""  id="" class="text" placeholder="" required>
        <br><br><br><br>

        <input type="submit" value="Enregistrer" id="Enregistrer">
      </center>
    </form>
    <br>
</div>
  </div>
</body>
<?php include("footer.php")?>
</html>
