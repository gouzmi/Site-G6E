<?php
  include('connexiondb.php');

  $variete1 = $bdd->query('SELECT * FROM type_capteur');
  $variete2 = $bdd->query('SELECT * FROM type_piece');


  if (isset($_POST['Enregistrer']))
    {
      $ajoutCpt = $bdd->prepare("INSERT INTO type_capteur(variete_capteur) VALUES (?)");
      $ajoutCpt->execute(array($_POST['varieteC']));
      $ajoutCpt = $bdd->prepare("INSERT INTO capteur(nom) VALUES (?)");
      $ajoutCpt->execute(array($_POST['nom']));
      $ajoutCpt = $bdd->prepare("INSERT INTO type_piece(variete_piece) VALUES (?)");
      $ajoutCpt->execute(array($_POST['varieteP']));
      $info = "Succès";
    }

?>
