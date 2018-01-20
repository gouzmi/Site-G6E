<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Votre Profil</title>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/profil.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
</head>



<body class="no" id="menu">
  <?php include("header.php") ?>

<div id="corps">


<?php include("../Views/slideView.php") ;?>


    <div class="form-style-6">
          <h1>Profil de <?php echo ucfirst(mb_strtolower($user['nom']))." ".ucfirst(mb_strtolower($user['prenom'])); ?> </h1>
          <center>
            <?php  if (isset($erreur)) {
              echo $erreur;} ?>
          </center>
          <form method="post" action="" id="Formulaire" name="Formulaire">
          <span id="missNom"></span>
          <input type="text" name="nom" placeholder="Nom" id="nom" value="<?php echo $user['nom']?>"/>
          <span id="missPrenom"></span>
          <input type="text" name="prenom" placeholder="Prénom" id="prenom" value="<?php echo $user['prenom']?>" />
          <span id="missAdresse"></span>
          <input type="text" name="adresse" placeholder="Adresse" id="adresse" value="<?php echo $user['adresse_contact']?>"/>
          <span id="missCp"></span>
          <input type="text" name="cp" id="cp"   placeholder="Code Postal" value="<?php echo $user['cp_contact']?>"/>
          <span id="missVille"></span>
          <input type="text" name="ville" id="ville" placeholder="Ville" value="<?php echo $user['ville_contact']?>"/>
          <span id="missTel"></span>
          <input type="text" name="tel" id ="tel" placeholder="Téléphone" value="<?php echo $user['telephone']?>"/>
          <span id="missMail"></span>
          <input type="email" name="mail" id="email" placeholder="Email Address" value="<?php echo $user['mail']?>"/>
          <span id="missMdp"></span>
          <input type="password" name="mdp" id="mdp" required title="6 caractères minimun en majuscule et minuscule et un caractère spécial"  id="passe" placeholder="Mot de passe" value=""/>
          <span id="missMdp2"></span>
          <input type="password" name="mdp2" id="mdp2" required id="pass" placeholder="Confirmation de mot de passe"/>
          <input type="submit" name="caseconditions" id="modifier" value="Modifier son profil" />
          </form>
    </div>

    <script src="../javaScript/verificationFormulaire.js" type="text/javascript"></script>


</div>

<script src="../javaScript/verifProfil.js" type="text/javascript"></script>

<?php include("footer.php") ?>

</body>



</html>
