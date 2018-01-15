<?php session_start();
  if (isset($_SESSION['id'])) {
    require('../Views/capteurView.php');
  }

  else {
    header("Location: login.php");
  }
