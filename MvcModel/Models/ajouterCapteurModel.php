<?php
  include('connexiondb.php');

  $variete1 = $bdd->query('SELECT * FROM type_capteur');
  $variete2 = $bdd->query('SELECT * FROM piece');
  $variete3 = $bdd->query('SELECT * FROM cemac');

  if (isset($_POST['Enregistrer']))
    {

      if (!empty(isset($_POST['varieteCap'])) AND !empty(isset($_POST['varietePie'])) AND !empty(isset($_POST['idCemac'])))
      { // on n'a pas besoin de nettoyer des donnees.
          $idTypeCap = $bdd->query('SELECT * FROM type_capteur WHERE variete_capteur = '.$_POST['varieteCap'].'');
          $idPiece = $bdd->query('SELECT * FROM piece WHERE nom_piece = '.$_POST['varietePie'].' ');

          $ajoutCap = $bdd->prepare("INSERT INTO capteur(id_type_capteur, id_cemac, id_piece) VALUES (?,?,?)");
          $ajoutCap->execute(array($idTypeCap,$_POST['idCemac'],$idPiece));
          $info = "Succès";
      }
    }
?>
