<!DOCTYPE html>
<?php


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
					header("Location: page1.php?id=".$_SESSION['id']);
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
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="Loginn.css" />
		<title> Connectez-vous !</title>
    	<link rel="stylesheet" href="headerfooterr.css"/>
    	<script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
        </head>


    <?php include("header.php") ?>
		<body>
		  <div class="page">
        <section>
	       <p id = "titre"> Connexion </p> <br><br>
            <form method="post" action=""  id ="Login"><!-- début du formulaire-->

								<label for="email">Adresse email :
								<input type="email" name="mailconnect"  id="mail" placeholder="Ex : super.client@gmail.com" required></label>
								<br> <br>
								<label for="password">Mot de passe :
					    	<input type="password" name="mdpconnect" id="password"  ></label>
								<br><br><br>
								<center>
									<input type="submit" value="Accéder" name="formconnexion">
										<!--<input type="submit" value="Domisep">-->
								</center>

    	    	</form>
						<?php
                if (isset($erreur)) {
                  echo $erreur;
                }

             ?>
    		<br><br><br>
            <div id="inscription"><a href="formulaire.php"> Inscription</a></div>
            <div id="oubli"><a href="mdp_oublie.php"> Mot de passe oublié ?</a></div>
						<div><a href="accueilConnectePiece.php">TEST </a></div>
            <!--Lien vers la page de récupération mdp + envois adresse mail à la page suivante-->
    	   </section>
			</div>
    </body>
    <?php include("footer.php") ?>
</html>
