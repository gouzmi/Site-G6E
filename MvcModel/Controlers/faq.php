<?php session_start();
if (isset($_SESSION['id'])) {
  require('../Views/faqView.php');
}

else {
  header("Location: login.php");
}
