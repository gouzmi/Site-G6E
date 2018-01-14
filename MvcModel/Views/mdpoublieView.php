<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../Css/Loginn.css"/>
	<title> Mot de passe perdu</title>
	<link rel="stylesheet" href="../Css/headerfooterr.css"/>
	<script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
</head>


<?php include("header.php") ?>
<body>
	<div class="page">
	<form method="post" action="" class="form-style-6">
		<h1>Récupération Mot de passe</h1>


		<label>Quel est votre adresse email ? </label>
		<input type="email" name="mail" placeholder="Adresse email" required title="Veuillez entrez l'adresse email utilisée lors de la commande" id="email">
		<br><br><br>
		<input type="submit" value="Envoyer" name="formmdpoublie" >
		<br><br/>
		<?php
			if (isset($erreur)) {
				echo $erreur;
			}
		?>
		<br/>
		<div id="retour"><a href="../Controlers/login.php"> Connectez-vous !</a></div>

	</form>
	<br>
</div>
</body>
<?php include("footer.php") ?>
</html>
