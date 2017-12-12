<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="Login.css" />
		<title> Connectez-vous !</title>
    	<link rel="stylesheet" href="headerfooter.css"/>
    	<script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
        </head>


    <?php include("header.php") ?>
		<body>
		  <div class="page">
        <section>
	       <p id = "titre"> Connexion </p> <br><br>
            <form method="post" action="Login.php"  id ="Login"><!-- début du formulaire-->

			<label for="email">Adresse email :
			<input type="email" name="email"  id="mail" placeholder="Ex : super.client@gmail.com" required></label>
			<br> <br>
			<label for="password">Mot de passe :
    		<input type="password" name="pass" id="password" required ></label>
    	    </form>
    		<br><br><br>

    		<center><input type="submit" value="Accéder"><a href= "Acceuil connecté(Par pièce).php">
            <input type="submit" value="Domisep"></center>

    		<br><br><br>
            <div id="inscription"><a href="formulaire.php"> Inscription</a></div>
            <div id="oubli"><a href="mdp_oublie.php"> Mot de passe oublié ?</a></p></div>
            <!--Lien vers la page de récupération mdp + envois adresse mail à la page suivante-->
    	   </section>
			</div>
    </body>
    <?php include("footer.php") ?>
</html>
