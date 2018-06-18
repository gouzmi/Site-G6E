<?php session_start();
  include('../Models/connexiondb.php');
  if (isset($_SESSION['id']) ) {
    /* Recuperation des trames
      Décodage et stockage dans la BDD */

// 1. Récupérer les données brutes
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=006E");
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$data = curl_exec($ch);
	curl_close($ch);



// 2. Les mettres sous forme de tableau (1 ligne = 1 trame d'un capteur)
	$data_tab = str_split($data,33);
  $size=count($data_tab)-1;
	for($i=$size-50; $i<$size;$i++){
      $trame = $data_tab[$i];
      $timestamp = substr($trame,19,14);

      list($type_trame,$nom_groupe,$r,$type_capteur,$numero_capteur,$valeur,$a,$x,$year,$month,$day,$hour,$min,$sec) =
      sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
      $valeur=hexdec($valeur);

      //ajouter à la bdd
      $numero_capteur=50; // à enlever plus tard

      $insert = $bdd->prepare("INSERT INTO historique_capteur(id_capteur, valeur_capteur, date_donnee)
                                VALUES(?, ?, ?)");
      $insert->execute(array($numero_capteur,$valeur,$timestamp)) ;
	}

    require('../Models/pieceModel.php');
    require('../Views/pieceView.php');
  }

  else {
    header("Location: login.php");
  }
