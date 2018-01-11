<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Views/supprimerPieceView.php');
    require('../Models/supprimerPieceModel.php');
  }

  else {
    header("Location: login.php");
  }
