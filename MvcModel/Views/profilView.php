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
          <span id='missNom'></span>
          <input type="text" name="nom" placeholder="Nom" id="nom"  value="<?php echo $user['nom']?>"/>
          <span id='missPrenom'></span>
          <input type="text" name="prenom" placeholder="Prénom" id="prenom" value="<?php echo $user['prenom']?>" />
          <input type="text" name="adresse" placeholder="Adresse" value="<?php echo $user['adresse_contact']?>"/>
          <input type="text" name="cp" pattern="(^[0-9]{5}$)|(^2(A|B)[0-9]{3}$)"  placeholder="Code Postal" value="<?php echo $user['cp_contact']?>">
          <input type="text" name="ville" placeholder="Ville" value="<?php echo $user['ville_contact']?>">
          <input type="text" name="tel" placeholder="Téléphone" value="<?php echo $user['telephone']?>">
          <input type="email" name="mail" placeholder="Email Address" value="<?php echo $user['mail']?>">
          <input type="password" name="mdp" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}" required title="6 caractères minimun en majuscule et minuscule et un caractère spécial"  id="passe" placeholder="Mot de passe" value="">
          <input type="password" name="mdp2" required id="pass" placeholder="Confirmation de mot de passe">
          <input type="submit" name="caseconditions" id="inscrire" value="Modifier son profil" />
          </form>
    </div>

    <script src="../javaScript/verificationFormulaire.js" type="text/javascript"></script>


</div>
<?php include("footer.php") ?>

</body>



</html>
