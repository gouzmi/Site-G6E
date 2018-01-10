<?php session_start();
if (isset($_SESSION['id'])) {
    require('../Models/commentaire_postModels.php');

    require('../Views/commentaire_postView.php');
}

else {
  header("Location: login.php");
}
