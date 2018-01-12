<?php session_start();
  if (isset($_SESSION['id']) and ($_SESSION['id'] == $_GET['id'] or $_SESSION['admin'] == 1 )) {
    require('../Views/editerMaisonView.php');
    require('../Models/editerMaisonModel.php');
  }

  else {
    header("Location: login.php");
  }
