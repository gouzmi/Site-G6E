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
              else
                {
<<<<<<< HEAD
                  header("Location: accueilConnectePiece.php?id=".$_SESSION['id']);
=======
                  header("Location: profil.php");
>>>>>>> 2dfe1780d9e361653bfaa435394801a543d73bb8
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
