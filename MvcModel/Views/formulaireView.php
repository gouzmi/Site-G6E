<html>
    <head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="../Css/cssformulairee.css"/>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
    </head>

    <?php include("header.php") ?>
    <script src="verificationFormulaire.js" type="text/javascript"></script>

    <body>
        <script src="verificationFormulaire.js" type="text/javascript"></script>
    <div class="section">
      <div class= "entete"> <p id="titre"> Inscrivez-vous !</p>

        <p id="erreur">  <?php  $attention="Avant toute inscription il est nécessaire d'avoir passé commande sur notre site<br> <a href=''>DomHomeCommande.fr</a> ";
            if (isset($erreur)) {echo $erreur;}
            else {echo $attention;}
         ?>
       </p></div>

        <form method = "post" action=""   id= "Formulaire" name="Formulaire" onsubmit="return validerForm()">

        <input type="text" name="nom"  placeholder="Nom" <required id="nom">
        <input type="text" name="prenom" placeholder="Prenom" required id="prenom">
        <input type="text" name="adresse" placeholder="Adresse"  required id="adresse">
        <input type="text" name="cp"  placeholder="Code Postal" required title="" id="cp">
        <input type="text" name="ville" placeholder="Ville"required id="ville">
        <input type="text" name="tel"required title="Veuillez entrer un numéro  Ex: 0123456789" placeholder="Numéro de téléphone" id="tel">
        <input type="text" name="mail" placeholder="Adresse email" required title="Veuillez entrez l'adresse email utilisée lors de la commande" id="email">
        <input type="text" name="mdp"  placeholder="Mot de passe" required title="6 caractères minimun en majuscule et minuscule et un caractère spécial"  id="passe">
        <input type="text" name="mdp2" placeholder="Confirmation Mot de passe"required id="pass">
        <input type="submit" name="caseconditions" value="S'inscrire" id="inscrire">

        </form>
      </div>
      </div>

    <?php include("footer.php") ?>
    </body>

</html>
