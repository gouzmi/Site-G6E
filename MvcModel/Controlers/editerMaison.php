<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Views/editerMaisonView.php');
    require('../Models/editerMaisonModel.php');
  }

  else {
    header("Location: login.php");
  }
