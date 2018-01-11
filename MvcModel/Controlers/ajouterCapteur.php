<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Views/ajouterCapteurView.php');
    require('../Models/ajouterCapteurModel.php');
  }

  else {
    header("Location: login.php");
  }
