<?php
include('connexiondb.php');

function valeur_capteur($id_type_capteur, $donnee){
  $msg = "";
  if($id_type_capteur == 1){
    $msg= "Présence dans la pièce :".$donnee.".";
  }
   if ($id_type_capteur == 2) {
    $msg= "Lumière dans la pièce :".$donnee.".";
  }
 if ($id_type_capteur == 3) {
    $msg= "Température dans la pièce :".$donnee.".";
  }
 if ($id_type_capteur == 4) {
    $msg= "Fumée :".$donnee.".";
  }
 if ($id_type_capteur == 5 ) {
    $msg= "La porte/fenêtre est ouverte:".$donnee.".";
  }
 if ($id_type_capteur == 6 ) {
    $msg= "La consomation électrique de la pièce est de :".$donnee."kW.";
  }
 if ($id_type_capteur == 7 ) {
    $msg= $donnee;
  }
  return $msg;

}

function logo_capteur($id_type_capteur)
{
  if($id_type_capteur == 1){
    $logo= '<i class="fa fa-eye" aria-hidden="true"></i>';
  }
  else if ($id_type_capteur == 2) {
    $logo= '<i class="fa fa-lightbulb-o" aria-hidden="true"></i>';
  }
  else if ($id_type_capteur == 3) {
    $logo= '<i class="fa fa-thermometer-half" aria-hidden="true"></i>';
  }
  else if ($id_type_capteur == 4) {
    $logo= '<i class="fa fa-lightbulb-o" aria-hidden="true"></i>';
  }
  else if ($id_type_capteur == 5 ) {
    $logo= '<i class="fa fa-window-maximize" aria-hidden="true"></i>';
  }
  else if ($id_type_capteur == 6 ) {
    $logo= '<i class="fa fa-bolt" aria-hidden="true"></i>';
  }
  else if ($id_type_capteur == 7 ) {
    $logo= '<i class="fa fa-video-camera" aria-hidden="true"></i>';
  }
  return $logo;
}

$CAPTEURS = array(
  1 => "Capteur de Présence",
  2 => "Capteur de Lumière",
  3 => "Capteur de Température",
  4 => "Détecteur de Fumée",
  5 => "Capteur de contact",
  6 => "Capteur de consommation",
  7 => "Caméra de surveillance"
);

function titre_capteur($id_type_capteur){
  $msg = "Type de capteur inconnu";
  if(isset($CAPTEURS[$id_type_capteur])) {
    $msg = $CAPTEURS[$id_type_capteur];
  }
  return $msg;
}
// au cliq recherche dans la table capteur les capteurs id_utilisateur et dans la able pièce le type de pice
