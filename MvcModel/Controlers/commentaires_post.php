<?php session_start();

if (isset($_SESSION['id'])) {
    require('../Models/commentaires_postModels.php');

    require('../Views/commentaires_postView.php');
}

else {
  header("Location: login.php");
}
