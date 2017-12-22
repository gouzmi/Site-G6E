<?php
  include('connexiondb.php');

  if(isset($_POST['formconnexion']))
		{
			$mailconnect = $_POST['mailconnect'];
			$mdpconnect = $_POST['mdpconnect'];
			if (!empty($mailconnect) AND !empty($mdpconnect))
			{
				$requser = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? AND mdp = ?");
				$requser->execute(array($mailconnect, $mdpconnect));
				$userexist = $requser->rowCount();
				if($userexist == 1)
				{
					$userinfo = $requser->fetch();
					$_SESSION['id'] = $userinfo['id'];
					$_SESSION['nom'] = $userinfo['nom'];
					$_SESSION['prenom'] = $userinfo['prenom'];
					$_SESSION['mail'] = $userinfo['mail'];
					header("Location: accueilConnectePiece.php?id=".$_SESSION['id']);
				}
				else {
					$erreur = "Mauvais mail ou mauvais mot de passe";
				}
			}
			else {
				$erreur = "Tous les champs doivent être complétés";
			}

		}

 ?>
