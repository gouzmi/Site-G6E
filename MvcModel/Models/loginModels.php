<?php
  include('connexiondb.php');

  if(isset($_POST['formconnexion']))
		{
			$mailconnect = ($_POST['mailconnect']);
			$mdpconnect = ($_POST['mdpconnect']);
			if (!empty($mailconnect) AND !empty($mdpconnect))
			{
				$requser = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ?");
				$requser->execute(array($mailconnect));
				$userexist = $requser->rowCount();
				if($userexist == 1)
				{
          $userinfo = $requser->fetch();
          if(password_verify($mdpconnect, $userinfo['mdp']) == true )
            {
    					$_SESSION['id'] = $userinfo['id_utilisateur'];
    					$_SESSION['nom'] = $userinfo['nom'];
    					$_SESSION['prenom'] = $userinfo['prenom'];
    					$_SESSION['mail'] = $userinfo['mail'];
              $_SESSION['admin'] = $userinfo['admin'];

              if($userinfo['admin'] == 1)
                {
            			header("Location: admin.php");
                }
              elseif ($userinfo['admin'] == 2)
              {
                  header("Location: admin2.php");
              }
              else
                {
                  $sqlpiece ='SELECT piece.id_piece
                                 FROM piece INNER JOIN logement
                                 ON piece.id_logement = logement.id_logement
                                 WHERE logement.id_utilisateur = '.$_SESSION['id'].'' ;

                  $reqpiece = $bdd ->query($sqlpiece);
                  $nbpiece = $reqpiece->rowCount();
                  if ($nbpiece > 0){
                    header("Location: piece.php");
                  }
                  else {
                    header("Location: editerMaison.php");
                  }
                }
            }
          else{
            $erreur = "Mauvais mot de passe";
          }
				}
				else {
					$erreur = "Aucun mail ne correspond";
				}
			}
			else {
				$erreur = "Tous les champs doivent être complétés";
			}

		}

 ?>
