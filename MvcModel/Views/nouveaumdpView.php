<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../Css/Loginn.css" />
  <title> Réinitialisation Mot de Passe </title>
  <link rel="stylesheet" href="../Css/headerfooterr.css"/>
  <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
</head>


<?php include("header.php") ?>
<body>
  <div class="page">
    <form method="post" action="../Models/mdpoublieModel.php"  id="Login" class="form-style-6">
      <h1>Créez un nouveau mot de passe</h1>
      <input type="email" name="mail" placeholder="Adresse email" required title="Veuillez entrez votre adresse email" >
      <input type="password" name="mdp"  pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}" placeholder="Nouveau Mot de passe" required title="6 caractères minimun en majuscule et minuscule et un caractère spécial" >
      <input type="password" name="mdp2" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}" placeholder="Confirmation Mot de passe"required >
      <center>
        <input type="submit" value="Modifié" name="formnouveaumdp" >
      </center>

      <?php
        if (isset($erreur)) {
          echo $erreur;
        }
      ?>
      </br>
      <div id="inscription"><a href="formulaire.php">> Inscription</a></br>
      <div id="retour"><a href="../Controlers/login.php"> Connectez-vous !</a></div>
    </form>
  </div>
</body>
<?php include("footer.php") ?>
</html>
