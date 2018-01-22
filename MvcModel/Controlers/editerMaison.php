<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Models/editerMaisonModel.php');
    if(isset($_SESSION['id_logement'])){
      //test pièces existante
        $reqpiece = $bdd->prepare('SELECT id_piece FROM piece WHERE id_logement=?');
        $reqpiece->execute(array($_SESSION['id_logement']));
        $pieceexist = $reqpiece->rowCount();

      //s'il n'y a pas de piece redirection vers l'ajout
      if($pieceexist ==0){
        $info = "Afin d'ajouter des capteurs, veuillez renseigner au moins une pièce de votre maison";
        require('../Models/modifPieceModel.php');
        require('../Views/ajouterPieceView.php');
      }
      // sinon redirection vers la catégorie à éditer en fonction du choix
      else if (isset($_SESSION['modifpiece'])){
        if($_SESSION['modifpiece'] == "ajout"){
          require('../Models/modifPieceModel.php');
          require('../Views/ajouterPieceView.php');
        }
        if($_SESSION['modifpiece'] == "supp"){
          require('../Models/modifPieceModel.php');
          require('../Views/supprimerPieceView.php');
        }
        if($_SESSION['modifpiece'] == "modif"){
          $modif = "une piece" ;
          require('../Models/modifPieceModel.php');
          require("../Views/modifierMaisonView.php");
        }
      }
      else if (isset($_SESSION['modifcapteur'])){
        if($_SESSION['modifcapteur'] == "ajout"){
          require('../Models/modifCapteurModel.php');
          require('../Views/ajouterCapteurView.php');
        }
        if($_SESSION['modifcapteur'] == "supp"){
          require('../Models/modifCapteurModel.php');
          require('../Views/supprimerCapteurView.php');
        }
        if($_SESSION['modifcapteur'] == "modif"){
          $modif = "un capteur" ;
          require('../Models/modifCapteurModel.php');
          require("../Views/modifierMaisonView.php");
        }
      }
      else if(isset($_SESSION['modifcemac'])){
        if($_SESSION['modifcemac'] == "ajout"){
          require('../Models/modifCemacModel.php');
          require('../Views/ajouterCemacView.php');
        }
        if($_SESSION['modifcemac'] == "supp"){
          require('../Models/modifCemacModel.php');
          require('../Views/supprimerCemacView.php');
        }
        if($_SESSION['modifcemac'] == "modif"){
          $modif = "un cemac" ;
          require('../Models/modifCemacModel.php');
          require("../Views/modifierMaisonView.php");
        }
      }
      else {
        require('../Views/editerMaisonView.php');
      }
      //redirection vers la bonne vue pour l'édition de la maison en fonction du choix
    }
  }
  else {  header("Location: login.php");} ?>
