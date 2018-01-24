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
          <input type="text" name="nom" placeholder="Nom" value="<?php echo $user['nom'];?>" required id="nom">
          <span id="missPrenom"></span>
          <input type="text" name="prenom" placeholder="Prénom" id="prenom" value="<?php echo $user['prenom']?>" required>
          <span id="missAdresse"></span>
          <input type="text" name="adresse" placeholder="Adresse" id="adresse" value="<?php echo $user['adresse_contact']?>" required>
          <span id="missCp"></span>
          <input type="text" name="cp" id="cp"   placeholder="Code Postal" value="<?php echo $user['cp_contact']?>" required>
          <span id="missVille"></span>
          <input type="text" name="ville" id="ville" placeholder="Ville" value="<?php echo $user['ville_contact']?>" required>
          <span id="missTel"></span>
          <input type="text" name="tel" id ="tel" placeholder="Téléphone" value="<?php echo $user['telephone']?>" required>
          <span id="missMail"></span>
          <input type="email" name="mail" id="email" placeholder="Email Address" value="<?php echo $user['mail']?>" required>
          <span id="missMdp"></span>
          <input type="password" name="mdp" id="passe" required title="6 caractères minimun en majuscule et minuscule et un caractère spécial"   placeholder="Mot de passe" value=""/>
          <span id="missMdp2"></span>
          <input type="password" name="mdp2"  required id="pass" placeholder="Confirmation de mot de passe"/>
          <input type="submit" name="caseconditions" id="inscrire" value="Modifier son profil" />
          </form>
    </div>


</div>

<script src="../javaScript/verificationFormulaire.js" type="text/javascript"></script>

<?php include("footer.php") ?>

</body>



</html>
