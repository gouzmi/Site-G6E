<?php session_start();
  if (isset($_SESSION['id']) ) {

    require('../Models/billetModels.php');

    require('../Views/billetView.php');
  }

  else {
    header("Location: login.php");
  }
