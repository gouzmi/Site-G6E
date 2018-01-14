<?php
include('connexiondb.php');

if(isset($_POST['formmdpoublie'])){
	$mailrecup = $_POST['mail'];
	if(!empty($mailrecup)){
		$requser = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ?");
		$requser->execute(array($mailrecup));
		$userexist = $requser->rowCount();
		if($userexist == 1){

			$_SESSION['mailrecup'] = $requser->fetch();
			$code = rand(100000, 999999);
			$_SESSION['code'] = $code ;
			$requser = $bdd->prepare("INSERT INTO mailrecup, code FROM recuperation VALUES (?,?,)");
			$requser->execute(array($mailrecup, $code));

			//paramètres d'encodageINSERT INTO
			$header="MIME-Version: 1.0\r\n";
			$header.='From:"DomHome.fr"<sav@DomHome.fr>'."\n";
			$header.='Content-Type:text/html; charset="uft-8"'."\n";
			$header.='Content-Transfer-Encoding: 8bit';

			$message='
			<html>
				<body>
					<div align=left>
						<br><br/> <br><br/>
						Bonjour, <br><br>
						Vous avez perdu votre mot de passe  ?<br>
						Pas d\'inquiétude, vous pouvez dès maintenant le réinitialiser.
						Pour cela veuillez renseigner le code suivant: <strong> <?php echo $code;?> </strong> après avoir cliqué sur le lien suivant:
						<br><br/>
						<center> http://localhost/git/site-G6E/MvcModel/Views/nouveaumdpView.php</center>
						<br/>
						Si vous rencontrez toujours un problème de connexion avec votre compte,
						n\'hésitez pas à répondre à cet email ou à nous contacter sur
						<a href="DomHome.fr"> DomHome.fr <a> !

						<br/><br/>
						À bientôt, <br>
						L\'équipe DomHome
						<br><br/><br><br/>
						<img src="http://www.primfx.com/mailing/separation.png"/>
					</div>
				</body>
			</html>
			';

			mail($_SESSION['mailrecup'], "Réinintialisation mot de passe - DomHome", $message, $header);
			$erreur = "L'email a été envoyé avec succès.";
			header("Location: ../Controlers/mdpoublie.php");

		}
		else{
			$erreur="Adresse email non reconnue";
		}

	else{
		$erreur="Veuillez renseigner votre adresse email";
	}
}

if(isset($POST['formnouveaumdp'])){
	$_SESSION['code'] = $code ;
	$reqcode = $bdd->prepare("SELECT code FROM recuperation WHERE mail_recuperation = ?");
	$reqcode->execute(array($mailrecup));
	$codeexist = $reqcode->rowCount();
	$coderecup = $reqcode->fetch();


	if ($codeexist == 1 AND $coderecup == $_POST['code'] ){
			if ((preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#', $_POST['mdp'])) == false){
					$erreur= '6 caractères minimun dont une majuscule, une minuscule, un chiffre et un caractère spécial' ;
				}
			else if ($mdp != $_POST['mdp2']){
					$erreur= "Les mots de passes sont différents";}
		  else{
				$mdp = password_hash($mdp,PASSWORD_BCRYPT);
				$updatemdp = $bdd->execute(array('UPDATE `utilisateur` SET `mdp` = :nvmdp WHERE`mail` = :mailrecup' ));
				$updatemdp->execute(array(
					'nvmdp' => $_POST['mdp'] ,
					'mailrecup' => $_SESSION['mailrecup']));

				//Supprimer la ligne de recup
				$reqcode = $bdd->prepare("DELETE * FROM recuperation WHERE mail_recuperation = ?");
				$reqcode->execute(array($mailrecup));
				$erreur= "Votre Mot de passe a bien été mis à jour ! ";
			}
	else{
		$erreur = "Code de récuperation non valide ";
	}

}
