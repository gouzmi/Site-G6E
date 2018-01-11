<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Views/ajouterPieceView.php');
    require('../Models/ajouterPieceModel.php');
  }

  else {
    header("Location: login.php");
  }
