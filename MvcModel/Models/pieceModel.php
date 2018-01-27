<?php
include('connexiondb.php');

require('userdb.php');

$sqlpiece ='SELECT piece.id_piece, piece.nom_piece
               FROM piece INNER JOIN logement
               ON piece.id_logement = logement.id_logement
               WHERE logement.id_utilisateur = '.$user['id_utilisateur'].'' ;



              $reqpiece = $bdd ->query($sqlpiece);
              $nbpiece = $reqpiece->rowCount();
              $pieces = $reqpiece->fetchall();

function valeur_capteur($id_type_capteur, $donnee){
  $msg = "";
  if($id_type_capteur == 1){
    $msg= "Présence dans la pièce : ".$donnee." .";
  }
  if ($id_type_capteur == 2) {
    $msg= "Lumière dans la pièce : ".$donnee." .";
  }
  if ($id_type_capteur == 3) {
    $msg= "Température dans la pièce : ".$donnee." °C";
  }
  if ($id_type_capteur == 4) {
    $msg= "Fumée : ".$donnee." .";
  }
  if ($id_type_capteur == 5 ) {
    $msg= "La porte/fenêtre est ouverte: ".$donnee." .";
  }
  if ($id_type_capteur == 6 ) {
    $msg= "La consomation électrique de la pièce est de : ".$donnee." kW.";
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


function titre_capteur($id_type_capteur){
  $CAPTEURS = array(
    1 => "Capteur de Présence",
    2 => "Capteur de Lumière",
    3 => "Capteur de Température",
    4 => "Détecteur de Fumée",
    5 => "Capteur de Contact",
    6 => "Capteur de Consommation",
    7 => "Caméra de Surveillance",
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

function getCapteurs($type, $nompiece, $pieceId, $bdd) {
  if ($type == 0 AND $nompiece == 0) {
    $sqlcapteur='SELECT *
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
      <section class="boite capteur">
        <h3><?php echo $titre; ?> </h3>
        <div class="logo"> <?php echo $logo."<br>Référence:".$reference.""; ?></div>
        <div class="info"> <?php echo $info; ?></div>
        <div class="historique"> <a href="" class="link">Historique </a></div>
      </section>
  <?php }
  }
  else {
    $sqlcapteur='SELECT *
                 FROM historique_capteur INNER JOIN capteur
                 ON  historique_capteur.id_capteur = capteur.id_capteur
                 WHERE capteur.id_piece = '.$pieceId.' AND capteur.id_type_capteur = '.$type.'
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
      <section class="boite capteur">
        <h3><?php echo $titre; ?> </h3>
        <div class="logo"> <?php echo $logo."<br>Référence:".$reference.""; ?></div>
        <div class="info"> <?php echo $info; ?></div>
        <div class="info"> <?php echo $nompiece; ?></div>
        <div class="historique"> <a href="" class="link">Historique </a></div>
      </section>
  <?php }
  }
}

/* -------------------------------------- ACTIONNEURS -------------------------------------------*/

function bouton_actionneur($actionneur)
{
  $id_type_actionneur = $actionneur['id_type_actionneur'];
  $donnee = $actionneur['valeur'];
  $actionneurId = $actionneur['id_actionneur'];
  $fonctionnement = $actionneur['fonctionnement'];
  switch ($id_type_actionneur) {
    case 1:
    case 2:
    case 4:
    case 5:
       $bouton =  "<label class='switch'>
                    <input type='checkbox' ".($fonctionnement==1?"checked":"")." data-id-actionneur='$actionneurId'>
                    <span class='slider round'></span>
                    </label>" ;
      break;
    case 3:
       $bouton =  "<label class='switch'>
                    <input type='checkbox' ".($fonctionnement==1?"checked":"")." data-id-actionneur='$actionneurId'>
                    <span class='slider round'></span>
                    </label><br>
                    <input type='number' name='nombre' value='$donnee' min='10' max='35'>" ;
      break;

    default:
       $bouton = "";
      break;
  }
  return $bouton;
}

function titre_actionneur($id_type_actionneur){
  $ACTIONNEURS = array(
    1 => "Volets",
    2 => "Lumière",
    3 => "Chauffage",
    4 => "Portail",
    5 => "Autre actionneur",
  );

  $msg = "Type d'actionneur inconnu : ".$id_type_actionneur;
  if(isset($ACTIONNEURS[$id_type_actionneur])) {
    $msg = $ACTIONNEURS[$id_type_actionneur];
  }
  return $msg;
}

function logo_actionneur($id_type_actionneur){

  switch ($id_type_actionneur) {
    case 1:
       $logo= '<i class="fa fa-window-maximize" aria-hidden="true"></i>';
      break;
      case 2:
         $logo= '<i class="fa fa-lightbulb-o" aria-hidden="true"></i>';
        break;
        case 3:
           $logo= '<i class="fa fa-thermometer-half" aria-hidden="true"></i>';
          break;
          case 4:
             $logo= '<i class="fa fa-window-maximize" aria-hidden="true"></i>';
            break;
            case 5:
               $logo= '<i class="fa " aria-hidden="true"></i>';
              break;


    default:
       $logo = "";
      break;
  }
    return $logo;
}

function getActionneurs($type, $nompiece, $pieceId, $bdd) {
  if ($type == 0 AND $nompiece == 0) {
    $sqlactionneur='SELECT *
                 FROM actionneur
                 WHERE actionneur.id_piece = '.$pieceId.'
                 ORDER BY actionneur.id_type_actionneur ';
    $reqactionneur = $bdd -> query($sqlactionneur);
    $actionneurs = $reqactionneur->fetchall();
    //$capteurs = $pieces['capteurs'];
    foreach ($actionneurs as $actionneur) {
      $idtypeactionneur = $actionneur['id_type_actionneur'];
      $valeur=$actionneur['valeur'];
      $reference= $actionneur['id_actionneur'];
      $nom = $actionneur['nom'];
      $logo = logo_actionneur($actionneur['id_type_actionneur']);
      $titre = titre_actionneur($actionneur['id_type_actionneur']);
      $action = bouton_actionneur($actionneur)
    ?>
      <section class="boite actionneur">
        <h3><?php echo $titre; ?><br /> <?php echo $nom; ?> </h3>
        <div class="logo"> <?php echo $logo."<br>Référence:".$reference.""; ?></div>
        <div class="bouton"><?php echo $action; ?></div>
        <div class="historique"> <a href="" class="link">Historique </a></div>
      </section>
  <?php }
  }
  else {
    $sqlactionneur='SELECT *
                 FROM actionneur
                 WHERE actionneur.id_piece = '.$pieceId.' AND actionneur.id_type_actionneur = '.$type.'
                 ORDER BY id_type_actionneur ';
                 $reqactionneur = $bdd -> query($sqlactionneur);
                 $actionneurs = $reqactionneur->fetchall();
                 //$capteurs = $pieces['capteurs'];
                 foreach ($actionneurs as $actionneur) {
                   $idtypeactionneur = $actionneur['id_type_actionneur'];
                   $valeur=$actionneur['valeur'];
                   $nom = $actionneur['nom'];
                   $reference= $actionneur['id_actionneur'];
                   $logo = logo_actionneur($actionneur['id_type_actionneur']);
                   $titre = titre_actionneur($actionneur['id_type_actionneur']);
                   $action = bouton_actionneur($actionneur)
                 ?>
                   <section class="boite actionneur">
                     <h3><?php echo $titre; ?><br /> <?php echo $nom; ?> </h3>
                     <div class="logo"> <?php echo $logo."<br>Référence:".$reference.""; ?></div>
                     <div class="info"> <?php echo $nompiece; ?></div>
                     <div class="bouton"><?php echo $action; ?></div>
                     <div class="historique"> <a href="" class="link">Historique </a></div>
                   </section>
  <?php }
  }
}
