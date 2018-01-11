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

  if (isset($_POST['ajoutfaq']))
    {
      $ajoutfaq = $bdd->prepare("INSERT INTO `faq`(`question_faq`, `reponse_faq`, `theme_faq` ) VALUES (?,?,?)");
      $ajoutfaq->execute(array($_POST['question'], $_POST['reponse'], $_POST['theme']));
      $info3 = "Succès";
    }

  $suppression = $bdd->query('SELECT * FROM utilisateur');

  if (isset($_POST['suppclient2']))
    {
      $suppcl = $bdd->prepare("DELETE FROM `utilisateur` WHERE mail=? ");
      $suppcl->execute(array($_POST['suppmailclient2']));
      $info4 = "Succès";
    }



 ?>
