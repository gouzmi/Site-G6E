<?php

  include('connexiondb.php');


  if(isset($_POST['caseconditions']))  //Vérif formulaire rempli
    {
      //Nettoyage des données reçues

      //Def des filtres pour chaque valeur
      $filter_def = [
          'nom' => FILTER_SANITIZE_SPECIAL_CHARS,
          'prenom' => FILTER_SANITIZE_SPECIAL_CHARS,
          'adresse' => FILTER_SANITIZE_SPECIAL_CHARS,
          'cp' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
          'ville' => FILTER_SANITIZE_SPECIAL_CHARS,
          'tel' => FILTER_SANITIZE_NUMBER_INT,
          'mail' => FILTER_SANITIZE_EMAIL, ];

      $resultat = filter_input_array(INPUT_POST, $filter_def); // 'nom'= $_POST['nom'] ect + Application des filtres

      //Données nettoyées
      $nom = $resultat['nom'];
      $prenom = $resultat['prenom'];
      $adresse = $resultat['adresse'];
      $cp = $resultat['cp'];
      $ville = $resultat['ville'];
      $tel = $resultat['tel'];
      $mail = $resultat['mail'];
      $mdp = $_POST['mdp'];


      //Vérif du format de chaque donnée nettoyée

      if ((preg_match('#^[A-Za-zÀ-ÖØ-öø-ÿ-]+$#', $nom)) == false){ //verif nom contient que des lettres
          $erreur= 'Le nom est non conforme' ;
        }
      else{
        if ((preg_match('#^[A-Za-zÀ-ÖØ-öø-ÿ-]+$#', $prenom)) == false)  {
            $erreur= 'Le prenom est non conforme' ;
          }
        else{//verif adresse contient que des lettres et des chiffres

          if ((preg_match('#^[\p{L}-\p{N}À-ÖØ-öø-ÿ\s]+$#', $adresse)) == false){
              $erreur= "L'adresse est non conforme" ;
            }
         else{ //verif cp contient soit 5 chiffres ou 2AXXX ou 2BXXX
              if ((preg_match('#(^[0-9]{5}$)|(^2(A|B)[0-9]{3}$)#', $cp)) == false){
                  $erreur= "Le code postal est non conforme" ;
                }
              else{//verif ville contient que des lettres
                if ((preg_match('#^[\p{L}-]+$#', $ville)) == false){
                    $erreur= "La ville est non conforme" ;
                  }
                else {//vérifie le format du numéro de telephone OXXXXXXXXX
                  if ((preg_match('#^0[1-9][0-9]{8}$#', $tel)) == false){
                      $erreur= "Le numéro de téléphone est non conforme" ;
                    }
                  else{
                      if (filter_var($mail,FILTER_VALIDATE_EMAIL) == false){
                          $erreur= "L'adresse email est non conforme" ;
                        }
                      else{ //vérifie si le mdp contient min maj chiffre et caractère spé
                          if ((preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#', $mdp)) == false){
                              $erreur= 'Mot de passe non conforme' ;
                            }
                          else{// cryptage mdp + envois bdd si mdp identiques
                            if ($mdp == $_POST['mdp2']){
                                $mdp = password_hash($mdp,PASSWORD_BCRYPT);
                                $insert = $bdd->prepare("INSERT INTO utilisateur(nom, prenom, adresse_contact, cp_contact, ville_contact, telephone, mail, mdp)
                                                          VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
                                $insert->execute(array($nom, $prenom, $adresse, $cp, $ville, $tel, $mail, $mdp)) ;
                                $erreur= "Votre compte a bien été crée <a href=\"login.php\"> Se connecter</a> ";
                              }
                           else{
                              $erreur= "Les mots de passes sont différents";}
                          }
                      }
                  }
                }
              }
          }

        }
      }
    }
?>
