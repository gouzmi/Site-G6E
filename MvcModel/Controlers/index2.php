<?php session_start();
if (isset($_SESSION['id'])) {
    require('../Models/index2Models.php');

    require('../Views/index2View.php');
}

else {
  header("Location: login.php");
}
