<?php
  include("connexiondb.php");

  if (isset($_POST['ajoutadmin']))
    {
      $ajoutad = $bdd->prepare("INSERT INTO `precommande`(`email_commande`, `admin`) VALUES (?, 1)");
      $ajoutad->execute(array($_POST['mailadmin']));
      $info1 = "Succès";
    }

  if (isset($_POST['ajoutclient']))
    {
      $ajoutcl = $bdd->prepare("INSERT INTO `precommande`(`email_commande`) VALUES (?)");
      $ajoutcl->execute(array($_POST['mailclient']));
      $info2 = "Succès";
    }

 ?>
