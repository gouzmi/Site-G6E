<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Models/supprimerCapteurModel.php');
    require('../Views/supprimerCapteurView.php');

  }

  else {
    header("Location: login.php");
  }
