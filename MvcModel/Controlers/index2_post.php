<?php session_start();

if (isset($_SESSION['id'])) {
    require('../Models/index2_postModels.php');

    require('../Views/index2_postView.php');
}

else {
  header("Location: login.php");
}
