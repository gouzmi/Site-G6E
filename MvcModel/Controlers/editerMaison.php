<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Views/editerMaison.php');
  }

  else {
    header("Location: login.php");
  }
