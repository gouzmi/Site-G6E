<?php
  include("connexiondb.php");

  $selectclient = $bdd->query('SELECT * FROM utilisateur where admin = 0');
  $suppression = $bdd->query('SELECT * FROM utilisateur where admin = 0');
  $suppressionfaq = $bdd->query('SELECT * FROM faq');
  $forum = $bdd->query('SELECT * FROM billets');

  if (isset($_POST['ajoutadmin']))
    {
      $ajoutad = $bdd->prepare("INSERT INTO `precommande`(`email_commande`, `admin`) VALUES (?, 1)");
      $ajoutad->execute(array($_POST['mailadmin']));
      $info1 = "Succès";
    }

    if (isset($_POST['ajoutsav']))
      {
        $ajoutad = $bdd->prepare("INSERT INTO `precommande`(`email_commande`, `admin`) VALUES (?, 2)");
        $ajoutad->execute(array($_POST['mailsav']));
        $info = "Succès";
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

  if (isset($_POST['suppfaq']))
      {
        $suppfaq = $bdd->prepare("DELETE FROM `faq` WHERE question_faq=? ");
        $suppfaq->execute(array($_POST['suppfaq2']));
        $info7 = "Succès";
      }

if (isset($_POST['forum']))
          {
            $suppfaq = $bdd->prepare("DELETE FROM `billets` WHERE titre=? ");
            $suppfaq->execute(array($_POST['forum']));
            $info8 = "Succès";
          }





  if (isset($_POST['suppclient1']))
  {
    $suppcl = $bdd->prepare("DELETE FROM `utilisateur` WHERE mail= ? ");
    $suppcl->execute(array($_POST['suppmailclient1']));
    $info4 = "Succès";
  }

  if (isset($_POST['accesclient']))
  {
    $requser = $bdd->prepare("SELECT * from utilisateur where mail = ? ");
    $requser->execute(array($_POST['clientView']));
    $client = $requser->fetch();
    $_SESSION['client'] = $client['id_utilisateur'];

    header("Location: profil.php");
  }

  if (isset($_POST['modifsite']))
        {
        if(isset($_POST['numdomhome']) AND !empty($_POST['numdomhome'])){
            $updatenum = $bdd->prepare("UPDATE maintenance SET desc_maintenance = :nvnum WHERE type_maintenance = 'numéro domhome'" );
            $updatenum->execute(array(
              'nvnum' => $_POST['numdomhome'] ));
          }
        if(isset($_POST['adressedomhome']) AND !empty($_POST['adressedomhome'])){
            $updatenum = $bdd->prepare("UPDATE maintenance SET desc_maintenance = :nvadresse WHERE type_maintenance ='adresse domhome'" );
            $updatenum->execute(array(
              'nvadresse' => $_POST['adressedomhome'] ));
          }
        if(isset($_POST['emaildomhome']) AND !empty($_POST['emaildomhome'])){
            $updatenum = $bdd->prepare("UPDATE maintenance SET desc_maintenance = :nvemail WHERE type_maintenance = 'adresse mail'" );
            $updatenum->execute(array(
              'nvemail' => $_POST['emaildomhome'] ));
          }
          $info6 = "Succès";
        }



 ?>
