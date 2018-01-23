<?php

include('connexiondb.php');
include('userdb.php');
//Création du logement s'il n'existe pas
if(!isset($_SESSION['id_logement'])){
  $reqlog = $bdd->prepare('SELECT id_logement FROM logement WHERE id_utilisateur=?');
  $reqlog->execute(array($user['id_utilisateur']));
  $logexist = $reqlog->rowCount();
  if($logexist ==1){
    $log = $reqlog->fetch();
    $_SESSION['id_logement'] = $log['id_logement'];
  }
  if ($logexist == 0 ){
    $reqinfo =  $bdd->prepare("SELECT adresse_contact, cp_contact, ville_contact FROM utilisateur WHERE id_utilisateur =?");
    $reqinfo ->execute(array($user['id_utilisateur']));
    $info = $reqinfo->fetchall();
    $adresse = $info[0]['adresse_contact'];
    $cp = $info[0]['cp_contact'];
    $ville = $info[0]['ville_contact'];
    $insert = $bdd->prepare("INSERT INTO logement(adresse, code_postale_logement, ville_logement, id_utilisateur) VALUES(?, ?, ?, ?)");
    $insert->execute(array($adresse, $cp, $ville,$user['id_utilisateur'])) ;
    $reqlog->execute(array($user['id_utilisateur']));
    $log = $reqlog->fetch();
    $_SESSION['id_logement'] = $log['id_logement'];
  }
}

//enregistre la catégorie à éditer et renvoie au controller
if(isset($_POST['modifcemac'])){
  $_SESSION['modifcemac'] = "modif";
  header("Location: editerMaison.php");
}
else if (isset($_POST['modifcapteur'])){
  $_SESSION['modifcapteur'] = "modif";
  header("Location: editerMaison.php");
}
else if (isset($_POST['modifpiece'])){
  $_SESSION['modifpiece'] = "modif";
  header("Location: editerMaison.php");
}

?>
