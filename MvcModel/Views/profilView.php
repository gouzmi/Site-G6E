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

    <h1 class="titre">Profil de <?php echo strtoupper($_SESSION['nom'])." ".ucfirst(strtolower($_SESSION['prenom'])); ?> </h1>

    <div class="section">

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
                <input type="password" name="mdp" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}" required title="6 caractères minimun en majuscule et minuscule et un caractère spécial"  id="passe">
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
                <input type="submit" name="caseconditions" value="Modifier son profil" id="inscrire"> <br><br>


                  </center><br>
             </form>
    </div>
</div>

</body>

<?php include("footer.php") ?>

</html>
