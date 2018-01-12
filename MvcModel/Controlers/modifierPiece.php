<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Views/modifierPieceView.php');
    require('../Models/modifierPieceModel.php');
  }

  else {
    header("Location: login.php");
  }
