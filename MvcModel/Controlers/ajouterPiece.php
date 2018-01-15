<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Models/ajouterPieceModel.php');
    require('../Views/ajouterPieceView.php');

  }

  else {
    header("Location: login.php");
  }
