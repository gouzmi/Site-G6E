<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Views/accueilConnectePieceView.php');
  }

  else {
    header("Location: login.php");
  }
