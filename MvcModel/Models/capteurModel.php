<?php
require('connexiondb.php');

require('userdb.php');

$sqlpiece ='SELECT piece.id_piece, piece.nom_piece, piece.id_logement
               FROM piece INNER JOIN logement
               ON piece.id_logement = logement.id_logement
               WHERE logement.id_utilisateur = '.$user['id_utilisateur'].'' ;

               $reqpiece = $bdd ->query($sqlpiece);
               $pieces = $reqpiece->fetchall();


function valeur_capteur($id_type_capteur, $donnee){
                 $msg = "";
                 if($id_type_capteur == 1){
                   $msg= "Présence dans la pièce :".$donnee.".";
                 }
                 if ($id_type_capteur == 2) {
                   $msg= "Lumière dans la pièce :".$donnee.".";
                 }
                 if ($id_type_capteur == 3) {
                   $msg= "Température dans la pièce :".$donnee."°C";
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
                 if ($id_type_capteur == 9 ) {
                    $msg= "Etat de l'actionneur :".$donnee.".";
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
                 else if ($id_type_capteur == 9 ) {
                   $logo= '<i class="fa fa-window" aria-hidden="true"></i>';
                 }
                 return $logo;
               }

function bouton_capteur($id_type_capteur, $donnee)
               {
                 switch ($id_type_capteur) {
                   case 2:
                   case 7:
                   case 5:
                   case 9:
                      $bouton =  "<label class='switch'>
                                   <input type='checkbox' checked>
                                   <span class='slider round'></span>
                                   </label>" ;
                     break;
                   case 3:
                      $bouton =  "<input type='number' name='nombre' value='$donnee'>" ;
                     break;

                   default:
                      $bouton = "";
                     break;
                 }
                 return $bouton;
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
                   9 => "Actionneur"
                 );

                 $msg = "Type de capteur inconnu : ".$id_type_capteur;
                 if(isset($CAPTEURS[$id_type_capteur])) {
                   $msg = $CAPTEURS[$id_type_capteur];
                 }
                 return $msg;
               }

function getCapteurs($type, $pieceId, $bdd) {
                 $sqlcapteur='SELECT capteur.id_capteur, capteur.id_type_capteur,
                                     historique_capteur.valeur_capteur,
                                     historique_capteur.date_donnee,
                                     historique_capteur.heure_donnee
                              FROM historique_capteur INNER JOIN capteur
                              ON  historique_capteur.id_capteur = capteur.id_capteur
                              WHERE capteur.id_type_capteur = '.$type.' AND capteur.id_piece = '.$pieceId.'
                              ORDER BY capteur.id_capteur ';
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
                   $action = bouton_capteur($capteur['id_type_capteur'],  $capteur['valeur_capteur']);
                 ?>
                   <div class="boite">
                     <h3><?php echo $titre; ?> </h3>
                     <div class="logo"> <?php echo $logo."<br>Référence:".$reference.""; ?></div>
                     <div class="bouton"><?php echo $action; ?></div>
                     <div class="info"> <?php echo $info; ?></div>
                     <div class="historique"> <a href="" class="link">Historique </a></div>
                   </div>
               <?php }
               }

?>
