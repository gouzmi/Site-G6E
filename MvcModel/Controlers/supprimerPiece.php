<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Models/supprimerPieceModel.php');
    require('../Views/supprimerPieceView.php');
    
  }

  else {
    header("Location: login.php");
  }
