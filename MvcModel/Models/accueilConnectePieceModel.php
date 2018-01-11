<?php
include('connexiondb.php');

function valeur_capteur($id_type_capteur, $donnee){
  if($id_type_capteur == 1){
    $msg= "Présence dans la pièce :".$donnee.".";
  }
  else if ($id_type_capteur == 2) {
    if($donnee == "")
    $msg= "Lumière dans la pièce :".$donnee.".";
  }
  else if ($id_type_capteur == 3) {
    $msg= "Température dans la pièce :".$donnee.".";
  }
  else if ($id_type_capteur == 4) {
    $msg= "Fumée :".$donnee.".";
  }
  else if ($id_type_capteur == 5 ) {
    $msg= "La porte/fenêtre est ouverte:".$donnee.".";
  }
  else if ($id_type_capteur == 6 ) {
    $msg= "La consomation électrique de la pièce est de :".$donnee."kW.";
  }
  else if ($id_type_capteur == 7 ) {
    $msg= $donnee ;
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


function titre_capteur($id_type_capteur){
  if($id_type_capteur == 1){
    $msg= "Capteur de Présence";
  }
  else if ($id_type_capteur == 2) {
    if($donnee == "")
    $msg= "Capteur de Lumière";
  }
  else if ($id_type_capteur == 3) {
    $msg= "Capteur de Température";
  }
  else if ($id_type_capteur == 4) {
    $msg= "Détecteur de Fumée";
  }
  else if ($id_type_capteur == 5 ) {
    $msg= "Capteur de contact";
  }
  else if ($id_type_capteur == 6 ) {
    $msg= "Capteur de consommation";
  }
  else if ($id_type_capteur == 7 ) {
    $msg= "Caméra de surveillance" ;
  }
  return $msg;
}
// au cliq recherche dans la table capteur les capteurs id_utilisateur et dans la able pièce le type de pice
