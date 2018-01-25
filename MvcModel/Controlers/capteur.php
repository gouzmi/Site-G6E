<?php session_start();
  if (isset($_SESSION['id'])) {

    require('../Models/capteurModel.php');
    require('../Views/capteurView.php');
  }

  else {
    header("Location: login.php");
  }
