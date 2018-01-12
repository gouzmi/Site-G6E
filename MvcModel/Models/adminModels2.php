<?php
  include("connexiondb.php");


  if (isset($_POST['ajoutclient']))
    {
      $ajoutcl = $bdd->prepare("INSERT INTO `precommande`(`email_commande`) VALUES (?)");
      $ajoutcl->execute(array($_POST['mailclient']));
      $info2 = "Succès";
    }


      $suppression = $bdd->query('SELECT * FROM utilisateur');

  if (isset($_POST['suppclient2']))
    {
      $suppcl = $bdd->prepare("DELETE FROM `utilisateur` WHERE mail=? ");
      $suppcl->execute(array($_POST['suppmailclient2']));
      $info4 = "Succès";
    }



 ?>
