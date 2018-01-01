<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../Css/Loginn.css" />
		<title> Connectez-vous !</title>
    	<link rel="stylesheet" href="../Css/headerfooterr.css"/>
    	<script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
			<link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
        </head>


    <?php include("header.php") ?>
		<body>
		  <div class="page">


            <form method="post" action=""  id="Login" class="form-style-6"><!-- début du formulaire-->
							<h1>Formumaire d'inscription</h1>


								<label for="email">Adresse email :</label>
								<input type="email" name="mailconnect"  id="mail" placeholder="Ex : super.client@gmail.com" required>
								<br> <br>
								<label for="password">Mot de passe :</label>
					    	<input type="password" name="mdpconnect" id="password"  >
								<br><br><br>
								<center>
									<input type="submit" value="Accéder" id="acceder" name="formconnexion" >
										<!--<input type="submit" value="Domisep">-->
								</center>


						<?php
                if (isset($erreur)) {
                  echo $erreur;
                }

             ?>
					 </br>
            <div id="inscription"><a href="formulaire.php">> Inscription</a></br>
            <a href="mdp_oublie.php">> Mot de passe oublié ?</a></div>
            <!--Lien vers la page de récupération mdp + envois adresse mail à la page suivante-->
    	   	</form>
			</div>
    </body>
    <?php include("footer.php") ?>
</html>
