<!DOCTYPE html>
<?php
    $bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', '');

    if(isset($_POST['caseconditions']))  // il faudra hacher le mdp et htmlspecialchars les autres//
    {

      if ($_POST['mdp'] == $_POST['mdp2'])
      {
        $insert = $bdd->prepare("INSERT INTO utilisateur(nom, prenom, mail, mdp) VALUES(?, ?, ?, ?)");
        $insert->execute(array($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['mdp'])) ;
        $erreur= "Votre compte a bien été crée";
      }
      else {
        $erreur= "Les mots de passes sont différents";
      }
    }

?>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="cssformulaire.css"/>
    <link rel="stylesheet" href="headerfooter.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>

    <?php include("header.php") ?>

    <body>
    <div class="page">
    <div class="section">
        <p id = "titre"> Formulaire d'inscription à DomHome</p> <br><br>
            <form method = "post" action=""   id = "Formulaire">
                <label>
                    nom
                </label>

                <input type="text" name="nom" placeholder="Ex : DomeHome" required>
                <br> <br>

                <label>
                    prenom
                </label>
                <input type="text" name="prenom" placeholder="Ex : Domisep" required>
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
                <input type="email" name="mail" placeholder="Ex : domehome@gmail.com" required>
                <br> <br>

                <!-- <label>
                    Identifiant
                </label>
                <input type="text" name="pseudo" placeholder="EX : DomeHome2017 " required>
                <br> <br> -->

                <label>
                    Mot de passe
                </label>
                <input type="password" name="mdp" required>
                <br> <br>


                <label>
                    Confirmation Mot de passe
                </label>
                <input type="password" name="mdp2" required>
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
                <input type="submit" name="caseconditions" value="S'inscrire" >
                    </center>
            </form>
            <?php
                if (isset($erreur)) {
                  echo $erreur;
                }

             ?>
    </div>
    </div>
    </body>
    <?php include("footer.php") ?>
</html>
