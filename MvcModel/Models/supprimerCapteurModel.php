<?php
  include('connexiondb.php');

  $reponse1 = $bdd->query('SELECT * FROM capteur');
  $reponse2 = $bdd->query('SELECT * FROM type_capteur,capteur WHERE type_capteur.variete_capteur = capteur.id_type_capteur');
?>
