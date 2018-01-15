<?php
include('connexiondb.php');
if(isset($_POST['formmdpoublie'])){
	$mailrecup = $_POST['mail'];
	if(!empty($mailrecup)){
		$requser =  $bdd->query("SELECT nom FROM utilisateur WHERE mail = '$mailrecup'");
		$userexist = $requser->fetch();

		if($requser->rowCount() == 1){echo "lol" ;
			$code = rand(100000, 999999);
			$_SESSION['code'] = $code ;
			$insert = $bdd->prepare("INSERT INTO recuperation(mail_recuperation, code) VALUES(?, ?)");
			$insert->execute(array($mailrecup, $code)) ;

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
						Pour cela veuillez renseigner le code suivant: <strong>'.$code.'</strong> après avoir cliqué sur ce lien suivant:
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

			mail($mailrecup, "Réinintialisation mot de passe - DomHome", $message, $header);
			$erreur = "L'email a été envoyé avec succès.";
			$_SESSION['mailrecup'] = $mailrecup ;
			$_SESSION['code'] = $code ;
			header("Location: ../Controlers/mdpoublie.php");
		}
		else{
			$erreur="Adresse email non reconnue";
		}
	}
	else{
		$erreur="Veuillez renseigner votre adresse email";
	 }
}



if(isset($_POST['formnouveaumdp'])){
	$reqcode = $bdd->prepare("SELECT code FROM recuperation WHERE mail_recuperation = ?");
	$reqcode->execute(array($_SESSION['mailrecup']));
	$coderecup = $reqcode->fetch();

	if (!empty($coderecup) AND $coderecup['code'] == $_POST['code'] ){
			if ((preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#', $_POST['mdp'])) == false){
					$erreur= '6 caractères minimun dont une majuscule, une minuscule, un chiffre et un caractère spécial' ;
				}
			else if ($_POST['mdp'] != $_POST['mdp2']){
					$erreur= "Les mots de passes sont différents";}
		  else{
				$mdp = password_hash($_POST['mdp'],PASSWORD_BCRYPT);
				$updatemdp = $bdd->prepare('UPDATE utilisateur SET mdp = :nvmdp WHERE mail = :mailrecup' );
				$updatemdp->execute(array(
					'nvmdp' => $mdp ,
					'mailrecup' => $_SESSION['mailrecup']));
	      //Suppression de la table recuperation
				$reqcode = $bdd->prepare("DELETE FROM recuperation WHERE mail_recuperation = ?");
				$reqcode->execute(array($_SESSION['mailrecup']));
				$erreur= "Votre mot de passe a bien été mis à jour ! ";
			}
		}
	else{
		$erreur = "Code de récuperation non valide. Veuillez entrez le dernier code de confirmation reçu ";
	}
}
