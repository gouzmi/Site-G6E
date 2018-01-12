<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Views/modifierCapteurView.php');
    require('../Models/modifierCapteurModel.php');
  }

  else {
    header("Location: login.php");
  }
