<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Models/accueilConnectePieceModel.php');
    require('../Views/accueilConnectePieceView.php');
  }

  else {
    header("Location: login.php");
  }
