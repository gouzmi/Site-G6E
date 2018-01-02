<?php session_start();
if (isset($_SESSION['id']) AND $_SESSION['admin'] == 1) {

  require('../Models/adminModels.php');

  require('../Views/adminView.php');
}

else {
  header("Location: login.php");
}
