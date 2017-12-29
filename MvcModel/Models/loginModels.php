<?php
  include('connexiondb.php');

  if(isset($_POST['formconnexion']))
		{
			$mailconnect = $_POST['mailconnect'];
			$mdpconnect = $_POST['mdpconnect'];
      $mdpconnect = password_hash($mdpconnect,PASSWORD_BCRYPT,$this->options)
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
    					$_SESSION['id'] = $userinfo['id'];
    					$_SESSION['nom'] = $userinfo['nom'];
    					$_SESSION['prenom'] = $userinfo['prenom'];
    					$_SESSION['mail'] = $userinfo['mail'];
    					header("Location: accueilConnectePiece.php?id=".$_SESSION['id']);
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
