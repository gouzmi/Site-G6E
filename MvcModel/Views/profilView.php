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
          <h1>Profil de <?php echo ucfirst(strtolower($_SESSION['nom']))." ".ucfirst(strtolower($_SESSION['prenom'])); ?> </h1>
          <form>
          <input type="text" name="nom" placeholder="Your Name" />
          <input type="text" name="prenom" placeholder="Your Name" />
          <input type="text" name="adresse" placeholder="Adresse" />
          <input type="text" name="cp" pattern="(^[0-9]{5}$)|(^2(A|B)[0-9]{3}$)"  placeholder="Code Postal">
          <input type="text" name="ville" placeholder="ville">
          <input type="text" name="tel" placeholder="0613544337">
          <input type="email" name="mail" placeholder="Email Address" />
          <input type="password" name="mdp" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}" required title="6 caractères minimun en majuscule et minuscule et un caractère spécial"  id="passe">
          <input type="password" name="mdp2" required id="pass" placeholder="Confirmation de mot de passe">
          <input type="submit" value="Modifier son profil" />
          </form>
    </div>

</div>

</body>

<?php include("footer.php") ?>

</html>
