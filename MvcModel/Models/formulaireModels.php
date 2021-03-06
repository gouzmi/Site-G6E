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
          $erreur= 'Le nom ne doit contenir que des lettres' ;
        }
      else if ((preg_match('#^[A-Za-zÀ-ÖØ-öø-ÿ-]+$#', $prenom)) == false)  {
            $erreur= 'Le prénom ne doit contenir que des lettres' ;
          }
        //verif adresse contient que des lettres et des chiffres
        else if ((preg_match('#^[\p{L}-\p{N}À-ÖØ-öø-ÿ\s]+$#', $adresse)) == false){
              $erreur= "Veuillez entrez une adresse valide  <u>ex:</u> 10 rue de Vanves" ;
            }
          //verif cp contient soit 5 chiffres ou 2AXXX ou 2BXXX
            else if ((preg_match('#(^[0-9]{5}$)|(^2(A|B)[0-9]{3}$)#', $cp)) == false){
                  $erreur= "Veuillez entrer un code postal valide" ;
                }
            //verif ville contient que des lettres
              else if ((preg_match('#^[\p{L}-\p{N}À-ÖØ-öø-ÿ\s]+$#', $ville)) == false){
                    $erreur= "La ville ne doit contenir que des lettres" ;
                  }
               //vérifie le format du numéro de telephone OXXXXXXXXX
                else  if ((preg_match('#^0[1-9][0-9]{8}$#', $tel)) == false){
                      $erreur= "Veuillez entrer un numéro conforme Ex: 0123456789" ;
                    }
                   else if (filter_var($mail,FILTER_VALIDATE_EMAIL) == false){
                          $erreur= "L'adresse email est non conforme" ;
                        }
                     //vérifie si le mdp contient min maj chiffre et caractère spé
                      else if ((preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#', $mdp)) == false){
                              $erreur= '6 caractères minimun dont une majuscule, une minuscule, un chiffre et un caractère spécial' ;
                            }
                        else if ($mdp != $_POST['mdp2']){
                              $erreur= "Les mots de passes sont différents";}

                         else{// cryptage mdp + verif mail dans la table precommande
                              $mdp = password_hash($mdp,PASSWORD_BCRYPT);
                              $verifemail = $bdd->prepare("SELECT * FROM precommande WHERE email_commande = ?");
                              $verifemail ->execute(array($mail));
                              $mailexist = $verifemail->rowCount();
                              if($mailexist == 0){
                                $erreur= "Veuillez passer commande sur notre site <a href=''>DomHomeCommande.fr</a> " ;
                              }
                              else{
                                $adminverify = $verifemail->fetch();
                                if ($adminverify['admin'] == 1)
                                {
                                  $insert = $bdd->prepare("INSERT INTO utilisateur(nom, prenom, adresse_contact, cp_contact, ville_contact, telephone, mail, mdp, admin)
                                                            VALUES(?, ?, ?, ?, ?, ?, ?, ?, 1)");
                                  $insert->execute(array($nom, $prenom, $adresse, $cp, $ville, $tel, $mail, $mdp)) ;

                                  $erreur= "Votre compte a bien été créé ! <a href=\"login.php\"> Se connecter</a> ";
                                }
                                else {
                                  $insert = $bdd->prepare("INSERT INTO utilisateur(nom, prenom, adresse_contact, cp_contact, ville_contact, telephone, mail, mdp)
                                                            VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
                                  $insert->execute(array($nom, $prenom, $adresse, $cp, $ville, $tel, $mail, $mdp)) ;

                                  $erreur= "Votre compte a bien été créé ! <a href=\"login.php\"> Se connecter</a> ";

                                }
                              }

                          }
                      }

?>
