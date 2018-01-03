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

    <body>
    <div class="section">
      <div class= "entete"> <p id="titre"> Inscrivez-vous !</p>

        <p id="erreur">  <?php  $attention="Avant toute inscription il est nécessaire d'avoir passé commande sur notre site<br> <a href=''>DomHomeCommande.fr</a> ";
            if (isset($erreur)) {echo $erreur;}
            else {echo $attention;}
         ?>
       </p></div>
      <div class="formulaire">
        <form method = "post" action=""   id= "Formulaire">

        <input type="text" name="nom"  placeholder="Nom" required id="nom">
        <input type="text" name="prenom" placeholder="Prenom" required id="prenom">
        <input type="text" name="adresse" placeholder="Adresse"  required id="adresse">
        <input type="text" name="cp" pattern="(^[0-9]{5}$)|(^2(A|B)[0-9]{3}$)" placeholder="Code Postal" required title="" id="cp">
        <input type="text" name="ville" placeholder="Ville"required id="ville">
        <input type="tel" name="tel"required title="Veuillez entrer un numéro  Ex: 0123456789" placeholder="Numéro de téléphone" id="tel">
        <input type="email" name="mail" placeholder="Adresse email" required title="Veuillez entrez l'adresse email utilisée lors de la commande" id="email">                <br> <br>
        <input type="password" name="mdp"  pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}" placeholder="Mot de passe" required title="6 caractères minimun en majuscule et minuscule et un caractère spécial"  id="passe">
        <input type="password" name="mdp2" placeholder="Confirmation Mot de passe"required id="pass">
        </div>
        <input type="submit" name="caseconditions" value="S'inscrire" id="inscrire"> <br><br>

      </form>
      </div>
      </div>

    <?php include("footer.php") ?>
    </body>

</html>
