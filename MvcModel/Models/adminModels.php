<?php
  include("connexiondb.php");
  include("userdb.php");

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
            $suppforum = $bdd->prepare("DELETE FROM `billets` WHERE titre =? ");
            $suppforum->execute(array($_POST['suppbillet']));
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

  $num = $bdd->query("SELECT * FROM `maintenance` WHERE type_maintenance = 'numéro domhome'");
  $num->execute();
  $num = $num->fetch();
  $adresse = $bdd->query("SELECT * FROM `maintenance` WHERE type_maintenance ='adresse domhome'");
  $adresse->execute();
  $adresse = $adresse->fetch();
  $mail = $bdd->query("SELECT * FROM `maintenance` WHERE type_maintenance = 'adresse mail'");
  $mail->execute();
  $mail = $mail->fetch();
  
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

$cgu = $bdd->query('SELECT * FROM `maintenance` WHERE id_maintenance = 11');
$cgu->execute();
$cgu = $cgu->fetch();
$mentions = $bdd->query("SELECT * FROM `maintenance` WHERE id_maintenance = 12");
$mentions->execute();
$mentions = $mentions->fetch();


    if (isset($_POST['modif']))
              {
              if(isset($_POST['mentions']) AND !empty($_POST['mentions'])){
                  $updatenum = $bdd->prepare("UPDATE maintenance SET desc_maintenance = :nvnum WHERE type_maintenance = 'mentions légales'" );
                  $updatenum->execute(array(
                    'nvnum' => $_POST['mentions'] ));
                }
              if(isset($_POST['cgu']) AND !empty($_POST['cgu'])){
                  $updatenum = $bdd->prepare("UPDATE maintenance SET desc_maintenance = :nvadresse WHERE type_maintenance ='cgu'" );
                  $updatenum->execute(array(
                    'nvadresse' => $_POST['cgu'] ));
                }
                $info10 = "Succès";
              }



 ?>
