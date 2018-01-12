<?php session_start();
  if (isset($_SESSION['id'])) {
    
    require('../Models/ajouterCapteurModel.php');
    require('../Views/ajouterCapteurView.php');
  }

  else {
    header("Location: login.php");
  }
