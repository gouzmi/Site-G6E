<?php session_start();
  if (isset($_SESSION['id'])) {

    require('../Models/profilModels.php');

    require('../Views/profilView.php');
  }

  else {
    header("Location: login.php");
  }
