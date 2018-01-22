<?php
  include('connexiondb.php');

  $variete1 = $bdd->query('SELECT * FROM type_capteur');
  $variete2 = $bdd->query('SELECT * FROM piece WHERE id_logement ='.$_SESSION['id_logement'].' ');
  $variete3 = $bdd->query('SELECT cemac.id_cemac FROM cemac
                           INNER JOIN piece ON cemac.id_piece = piece.id_piece
                           WHERE piece.id_logement = '.$_SESSION['id_logement'].'');
  //formulaire supp rempli
  if(isset($_POST['supCapteur'])){
    foreach($_POST['id_rep'] as $valeur){
       $suppcapteur = $bdd->prepare("DELETE FROM `capteur` WHERE id_capteur=? ");
       $suppcapteur->execute(array($valeur));
       $suppdonnees = $bdd->prepare("DELETE FROM `historique_capteur` WHERE id_capteur=? ");
       $suppdonnees->execute(array($valeur));
     }
     unset($_SESSION['modifcapteur']);
     header("Location: editerMaison.php");
  }
  //formulaire ajout rempli
  if(isset($_POST['ajCapteur'])){
    if (!empty(isset($_POST['varieteCap'])) AND !empty(isset($_POST['varietePie'])) AND !empty(isset($_POST['idCemac']))) {
      $ajcapteur = $bdd->prepare("INSERT INTO capteur(id_type_capteur,id_piece,id_cemac) VALUES(?,?,?)");
      $ajcapteur->execute(array($_POST['varieteCap'],$_POST['varietePie'],$_POST['idCemac']));
      $info= "Succès! Votre capteur a bien été ajouté !  ";
      unset($_SESSION['modifcapteur']);
      header("Location: editerMaison.php");
    }
    else{ $info ="Veuillez remplir tous les champs du formulaire";}

  }
  //fomulaire modification rempli
  if(isset($_POST['modif'])){
    if(isset($_POST['ajouter'])){
      $_SESSION['modifcapteur'] = "ajout";
      header("Location: editerMaison.php");
    }
    if(isset($_POST['supprimer'])){
      $_SESSION['modifcapteur'] = "supp";
      header("Location: editerMaison.php");
    }
  }

?>
