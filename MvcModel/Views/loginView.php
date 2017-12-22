<!DOCTYPE html>
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

    	    	</form>
						<?php
                if (isset($erreur)) {
                  echo $erreur;
                }

             ?>
    		<br><br><br>
            <div id="inscription"><a href="formulaire.php"> Inscription</a></div>
            <div id="oubli"><a href="mdp_oublie.php"> Mot de passe oublié ?</a></div>
            <!--Lien vers la page de récupération mdp + envois adresse mail à la page suivante-->
    	   </section>
			</div>
    </body>
    <?php include("footer.php") ?>
</html>
