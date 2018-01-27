<?php session_start();
  if (isset($_SESSION['id'])) {

    require('../Models/billetModels.php');
    require('../Views/historiqueView.php');
  }

  else {
    header("Location: login.php");
  }
