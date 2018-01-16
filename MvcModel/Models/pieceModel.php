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
  if ($id_type_capteur == 8 ) {
     $msg= "Les volets de la pièce sont ouvets :".$donnee.".";
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
  else if ($id_type_capteur == 8 ) {
    $logo= '<i class="fa fa-window" aria-hidden="true"></i>';
  }
  return $logo;
}


function titre_capteur($id_type_capteur){
  $CAPTEURS = array(
    1 => "Capteur de Présence",
    2 => "Capteur de Lumière",
    3 => "Capteur de Température",
    4 => "Détecteur de Fumée",
    5 => "Capteur de Contact",
    6 => "Capteur de Consommation",
    7 => "Caméra de Surveillance",
    8 => "Capteur d'ouverture des Volets ",
    9 => "Cemac",
    10 => "Actionneur"
  );

  $msg = "Type de capteur inconnu : ".$id_type_capteur;
  if(isset($CAPTEURS[$id_type_capteur])) {
    $msg = $CAPTEURS[$id_type_capteur];
  }
  return $msg;
}
// au cliq recherche dans la table capteur les capteurs id_utilisateur et dans la able pièce le type de pice

function getPieceUrl($pieceId) {
  $queryString = preg_replace('/&piece=.+/', "", $_SERVER['QUERY_STRING'])."&piece=".$pieceId;
  return "?".$queryString;
}

function getCapteurs($pieceId, $bdd) {
  $sqlcapteur='SELECT capteur.id_capteur, capteur.id_type_capteur,
                      historique_capteur.valeur_capteur,
                      historique_capteur.date_donnee,
                      historique_capteur.heure_donnee
               FROM historique_capteur INNER JOIN capteur
               ON  historique_capteur.id_capteur = capteur.id_capteur
               WHERE capteur.id_piece = '.$pieceId.'
               ORDER BY capteur.id_type_capteur ';
  $reqcapteur = $bdd -> query($sqlcapteur);
  $capteurs = $reqcapteur->fetchall();
  //$capteurs = $pieces['capteurs'];
  foreach ($capteurs as $capteur) {
    $idtypecapteur = $capteur['id_type_capteur'];
    $valeur=$capteur['valeur_capteur'];
    $reference= $capteur['id_capteur'];
    $logo = logo_capteur($capteur['id_type_capteur']);
    $titre = titre_capteur($capteur['id_type_capteur']);
    $info = valeur_capteur($capteur['id_type_capteur'], $capteur['valeur_capteur']);
  ?>
    <section class="boite">
      <h3><?php echo $titre; ?> </h3>
      <div class="logo"> <?php echo $logo."<br>Référence:".$reference.""; ?></div>
      <div class="bouton"> BOUTON</div>
      <div class="info"> <?php echo $info; ?></div>
      <div class="historique"> <a href="" class="link">Historique </a></div>
    </section>
<?php }
}
