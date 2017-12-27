<?php

  include('connexiondb.php');




    if(isset($_POST['caseconditions']))  //si le formulaire est rempli
      {    //vérifiation nom, prenom, mail avec des filtres
        $options = array( 'nom' => FILTER_SANITIZE_STRING, //Enlève les balises et les espaces
                          'prenom' => FILTER_SANITIZE_STRING,
                          'mail' => FILTER_VALIDATE_EMAIL, /*Valide l'adresse de messagerie.*/);
        $resultat = filter_input_array(INPUT_POST, $options); // 'nom'==$_POST['nom'] ect

        foreach($options as $cle => $valeur)
          {
            if($resultat[$cle] === false)
            { // affiche une erreur si le mail est invalide
              $erreur=" L'adresse de messagerie n'est pas valide. ";
            }
            else{ break;}
          }

        //verif mdp avec une fonction
        $mdp = $_POST['mdp'];
        if ((preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#', $mdp)) == false)
          { //vérifie si le mdp contient min maj chiffre et caractère spé
            $erreur= 'Mot de passe non conforme' ;
          }
        else{
              if ($mdp == $_POST['mdp2'])
                {    // envois bdd
                  $mdp = password_hash($mdp,PASSWORD_BCRYPT);
                  $insert = $bdd->prepare("INSERT INTO utilisateur(nom, prenom, mail, mdp) VALUES(?, ?, ?, ?)");
                  $insert->execute(array($_POST['nom'], $_POST['prenom'], $_POST['mail'], $mdp)) ;
                  $erreur= "Votre compte a bien été crée <a href=\"login.php\"> Se connecter</a> ";
                }
                else {  $erreur= "Les mots de passes sont différents";  }

            }
      }




?>
