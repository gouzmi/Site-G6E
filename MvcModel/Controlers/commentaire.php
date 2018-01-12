<?php session_start();

if (isset($_SESSION['id'])) {
    require('../Models/commentaireModels.php');

    require('../Views/commentaireView.php');
}

else {
  header("Location: login.php");
}
