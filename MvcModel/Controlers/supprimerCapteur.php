<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Views/supprimerCapteurView.php');
    require('../Models/supprimerCapteurModel.php');
  }

  else {
    header("Location: login.php");
  }
