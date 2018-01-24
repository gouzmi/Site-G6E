<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="../Css/cssformulairee.css"/>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
    </head>


    <body>
      <?php include("header.php") ?>
    <div class="section">
      <div class= "entete"> <p id="titre"> Inscrivez-vous !</p>

        <p id="erreur">  <?php  $attention="Avant toute inscription il est nécessaire d'avoir passé commande sur notre site<br> <a href=''>DomHomeCommande.fr</a> ";
            if (isset($erreur)) {echo $erreur;}
            else {echo $attention;}
         ?>
       </p></div>

        <form method = "post" action=""   id= "Formulaire" name="Formulaire" >
        <span id='missNom'></span>
        <input type="text" name="nom"  placeholder="Nom" required id="nom">
        <span id='missPrenom'></span>
        <input type="text" name="prenom" placeholder="Prenom" required id="prenom">
        <span id='missAdresse'></span>
        <input type="text" name="adresse" placeholder="Adresse"  required id="adresse">
        <span id='missCp'></span>
        <input type="text" name="cp"  placeholder="Code Postal" required title="" id="cp">
        <span id='missVille'></span>
        <input type="text" name="ville" placeholder="Ville"required id="ville">
        <span id='missTel'></span>
        <input type="text" name="tel"required title="Veuillez entrer un numéro  Ex: 0123456789" placeholder="Numéro de téléphone" id="tel">
        <span id='missMail'></span>
        <input type="email" name="mail" placeholder="Adresse email" required title="Veuillez entrez l'adresse email utilisée lors de la commande" id="email">
        <span id='missMdp'></span>
        <input type="password" name="mdp"  placeholder="Mot de passe" required title="6 caractères minimun en majuscule et minuscule et un caractère spécial"  id="passe">
        <span id='missMdp2'></span>
        <input type="password" name="mdp2" placeholder="Confirmation Mot de passe"required id="pass">
        <input type="submit" name="caseconditions" value="S'inscrire" id="inscrire">

        </form>
      </div>

      <script src="../javaScript/verificationFormulaire.js" type="text/javascript"></script>



    </body>
    <?php include("footer.php") ?>

</html>
