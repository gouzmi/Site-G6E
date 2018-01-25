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


<body>
	<?php include("header.php") ?>
	<div id="page1">

		<form method="post" action=""  id="Login" class="form-style-6">
			<h1>Connectez-vous !</h1>

			<label for="email">Adresse email :</label>
			<span id="missMail"></span>
			<input type="email" name="mailconnect"  id="mail" placeholder="Ex : super.client@gmail.com" required>
			<br> <br>
			<label for="password">Mot de passe :</label>
			<span id="missMdp"></span>
			<input type="password" name="mdpconnect" id="password" required >
			<br><br><br>
			<center>
				<input type="submit" value="Accéder" id="acceder" name="formconnexion" >
			</center>

			<?php
			if (isset($erreur)) {
			echo $erreur;
			}?>
			</br>
			<div id="inscription"><a href="formulaire.php">> Inscription</a></br>
			<a href="../Controlers/mdpoublie.php">> Mot de passe oublié ?</a></div>

		</form>
	</div>
	<?php include("footer.php") ?>
</body>
      <script src="../javaScript/verificationLogin.js" type="text/javascript"></script>
</html>
