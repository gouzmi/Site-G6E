<?php

  include('connexiondb.php');




    if(isset($_POST['caseconditions']))  // il faudra hacher le mdp et htmlspecialchars les autres//
    {

      if ($_POST['mdp'] == $_POST['mdp2'])
      {
        $insert = $bdd->prepare("INSERT INTO utilisateur(nom, prenom, mail, mdp) VALUES(?, ?, ?, ?)");
        $insert->execute(array($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['mdp'])) ;
        $erreur= "Votre compte a bien été crée <a href=\"login.php\"> Se connecter</a> ";
      }
      else {
        $erreur= "Les mots de passes sont différents";
      }
    }



?>
