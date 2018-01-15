<?php session_start();
  if (isset($_SESSION['id']) ) {
    require('../Models/pieceModel.php');
    require('../Views/pieceView.php');
  }

  else {
    header("Location: login.php");
  }
