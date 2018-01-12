<?php session_start();
  if (isset($_SESSION['id']) and ($_SESSION['id'] == $_GET['id'] or $_SESSION['admin'] == 1 )) {
    require('../Models/accueilConnectePieceModel.php');
    require('../Views/accueilConnectePieceView.php');
  }

  else {
    header("Location: login.php");
  }
