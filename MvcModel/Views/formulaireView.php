<html>
    <head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="../Css/cssformulairee.css"/>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>

    <?php include("header.php") ?>

    <body>
    <div class="page">
    <div class="section">
        <p id = "titre"> Formulaire d'inscription à DomHome</p> <br><br>
            <form method = "post" action=""   id = "Formulaire">
                <label>
                    Nom
                </label>

                <input type="text" name="nom" placeholder="Ex : DomeHome" required i="nom">
                <br> <br>

                <label>
                    Prénom
                </label>
                <input type="text" name="prenom" placeholder="Ex : Domisep" required id="prenom">
                <br> <br>

                <!-- <label>
                    Sexe
                </label>
                Femme <input type="radio" name="Sexe" required>
                Homme <input type="radio" name="Sexe" required>
                <br> <br> -->

                <label>
                    Adresse mail
                </label>
                <input type="email" name="mail" placeholder="Ex : domehome@gmail.com" required id="email">
                <br> <br>

                <!-- <label>
                    Identifiant
                </label>
                <input type="text" name="pseudo" placeholder="EX : DomeHome2017 " required>
                <br> <br> -->

                <label>
                    Mot de passe
                </label>
                <input type="password" name="mdp" required id="passe">
                <br> <br>


                <label>
                    Confirmation Mot de passe
                </label>
                <input type="password" name="mdp2" required id="pass">
                <br> <br>

                <!-- <label for="question"> Question personnelle en cas d'oubli de mot de passe
                </label> <br>
                <select name="question" id="question">
                    <option value="Q1" selected>Quel est le nom de votre animal de compagnie ?</option>
                    <option value="Q2">Quel est le nom de jeune fille de votre mère ?</option>
                    <option value="Q3">Dans quelle ville avez-vous passé votre BAC ?</option>
                    <option value="Q4">Quel est votre film préféré ?</option>
                    <option value="Q5">Quelle est votre destination de rêve ?</option>
                </select>
                <br> <br>


                <label>
                    Réponse
                </label>

                <input type="text" name="Réponse" placeholder="Ex : Chocolat" required>
                <br> <br> <br>
                    <center>
                <input type="checkbox" name="Conditions" required>
                J'ai lu et accepté les conditions d'utilisations -->
                    <center>
                <br> <br>
                <input type="submit" name="caseconditions" value="S'inscrire" id="inscrire"> <br><br>

                      <?php
                          if (isset($erreur)) {
                            echo $erreur;
                          }

                       ?>
                  </center><br>
             </form>
    </div>
    </div>
    </body>
    <?php include("footer.php") ?>
</html>