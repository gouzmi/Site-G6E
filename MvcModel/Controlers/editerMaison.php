<?php session_start();
  if (isset($_SESSION['id'])) {

    require('../Models/editerMaisonModel.php');
    require('../Views/editerMaisonView.php');

  }

  else {
    header("Location: login.php");
  }
