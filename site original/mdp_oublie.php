<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="mdp_oubliee.css"/>
		<title> Mot de passe perdu</title>
    	<link rel="stylesheet" href="headerfooterr.css"/>
    	<script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
        </head>


    <?php include("header.php") ?>
		<body>
		  <div class="page">
        <section>
	       <p id = "titre"> Récupération de votre mot de passe </p> <br><br>
            <form method="post" action="traitementmdp_oublie.php"  id ="mdp_oublie">

								<label for="email">Quel est votre animal préféré ?</label>
								<br>
								<center>
								<input type="animal" name="animal"  id="animal" placeholder="Ex : requin, serpent..." required>
							  </center>
								<br>
								<center>
									<input type="submit" value="Envoyer">
								</center>
    	    	</form>
    		<br><br>
            <div id="retour"><a href="login.php"> Retour</a></div>
    	   </section>
			</div>
    </body>
    <?php include("footer.php") ?>
</html>
