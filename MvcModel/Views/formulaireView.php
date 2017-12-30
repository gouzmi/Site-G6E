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
    <div class="page">
    <div class="section">
        <p id = "titre"> Formulaire d'inscription à DomHome</p> <br><br>

        <center id='erreur'>
          <?php
            $attention="Avant toute inscription il est nécessaire d'avoir passé commande sur notre site <a href=''>DomHomeCommande.fr</a> ";
            if (isset($erreur)) {
              echo $erreur;}
            else {
              echo $attention;
            }
         ?>
       </center>
        <br><br>
            <form method = "post" action=""   id = "Formulaire">
                <label>
                    Nom
                </label>

                <input type="text" name="nom" placeholder="Ex : DomeHome" required id="nom">
                <br> <br>

                <label>
                    Prénom
                </label>
                <input type="text" name="prenom" placeholder="Ex : Domisep" required id="prenom">
                <br> <br>

                <label>
                    Adresse
                </label>
                <input type="text" name="adresse" required id="adresse">
                <br> <br>

                <label>
                    Code Postal
                </label>
                <input type="text" name="cp" pattern="(^[0-9]{5}$)|(^2(A|B)[0-9]{3}$)" required title="" id="cp">
                <br> <br>

                <label>
                    Ville
                </label>
                <input type="text" name="ville" required id="ville">
                <br> <br>

                <label>
                    Téléphone
                </label>
                <input type="tel" name="tel" required title="Veuillez entrer un numéro  Ex: 0123456789" id="tel">
                <br> <br>

                <label>
                    Adresse mail
                </label>
                <input type="email" name="mail" placeholder="Ex : domehome@gmail.com" required title="Veuillez entrez l'adresse email utilisée lors de la commande" id="email">
                <br> <br>

                <label>
                    Mot de passe
                </label>
                <input type="password" name="mdp" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}" required title="6 caractères minimun en majuscule et minuscule et un caractère spécial"  id="passe">
                <br> <br>

                <label>
                    Confirmation Mot de passe
                </label>
                <input type="password" name="mdp2" required id="pass">
                <br> <br>

                    <center>
                <br> <br>
                <input type="submit" name="caseconditions" value="S'inscrire" id="inscrire"> <br><br>
                  </center><br>
             </form>
    </div>
    </div>
    </body>
    <?php include("footer.php") ?>
</html>
