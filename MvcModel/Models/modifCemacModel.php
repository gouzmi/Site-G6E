<?php
  include('connexiondb.php');

  $variete1 = $bdd->query('SELECT * FROM type_capteur');
  $variete2 = $bdd->query('SELECT * FROM piece WHERE id_logement ='.$_SESSION['id_logement'].' ');
  $variete3 = $bdd->query('SELECT cemac.id_cemac FROM cemac
                           INNER JOIN piece ON cemac.id_piece = piece.id_piece
                           WHERE piece.id_logement = '.$_SESSION['id_logement'].'');
  //formulaire supp rempli
  if(isset($_POST['supCemac'])){
     foreach($_POST['id_rep'] as $valeur){
       echo $valeur;
     }
     foreach($_POST['id_rep'] as $valeur){
        $suppcemac = $bdd->prepare("DELETE FROM `cemac` WHERE id_cemac=? ");
        $suppcemac->execute(array($valeur));

      }
      unset($_SESSION['modifcemac']);
      header("Location: editerMaison.php");
   }
  //formulaire ajout rempli
  if(isset($_POST['ajCemac'])){
    if (!empty(isset($_POST['piece_cemac']))) {
      $ajcemac = $bdd->prepare("INSERT INTO `cemac`(`id_piece`) VALUES (?)");
      $ajcemac->execute(array($_POST['piece_cemac']));
      $info= "Succès! Votre cemac a bien été ajouté !  ";
      unset($_SESSION['modifcemac']);
      header("Location: editerMaison.php");
    }
    else{ $info ="Veuillez remplir tous les champs du formulaire";}

   }
  //formulaire modificication rempli
  if(isset($_POST['modif'])){
    if(isset($_POST['ajouter'])){
      $_SESSION['modifcemac'] = "ajout";
      header("Location: editerMaison.php");
    }
    if(isset($_POST['supprimer'])){
      $_SESSION['modifcemac'] = "supp";
      header("Location: editerMaison.php");
    }
  } ?>
