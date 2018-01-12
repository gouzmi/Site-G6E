<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Acceuil Connecté par pièce</title>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/profil.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
</head>

<?php include("header.php") ?>


<body class="no" id="menu">

<div id="corps">


<?php include("../Views/slideView.php") ;?>


    <div class="form-style-6">
          <h1>Profil de <?php echo ucfirst(mb_strtolower($user['nom']))." ".ucfirst(mb_strtolower($user['prenom'])); ?> </h1>
          <center>
            <?php  if (isset($erreur)) {
              echo $erreur;} ?>
          </center>
          <form method="post" action="">
          <input type="text" name="nom" placeholder="Nom" value="<?php echo $user['nom']?>"/>
          <input type="text" name="prenom" placeholder="Prénom" value="<?php echo $user['prenom']?>" />
          <input type="text" name="adresse" placeholder="Adresse" value="<?php echo $user['adresse_contact']?>"/>
          <input type="text" name="cp" pattern="(^[0-9]{5}$)|(^2(A|B)[0-9]{3}$)"  placeholder="Code Postal" value="<?php echo $user['cp_contact']?>">
          <input type="text" name="ville" placeholder="Ville" value="<?php echo $user['ville_contact']?>">
          <input type="text" name="tel" placeholder="Téléphone" value="<?php echo $user['telephone']?>">
          <input type="email" name="mail" placeholder="Email Address" value="<?php echo $user['mail']?>">
          <input type="password" name="mdp" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}" required title="6 caractères minimun en majuscule et minuscule et un caractère spécial"  id="passe" placeholder="Mot de passe" value="">
          <input type="password" name="mdp2" required id="pass" placeholder="Confirmation de mot de passe">
          <input type="submit" name="caseconditions" value="Modifier son profil" />
          </form>
    </div>



</div>
<?php include("footer.php") ?>

</body>



</html>
