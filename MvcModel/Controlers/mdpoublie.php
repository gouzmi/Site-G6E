<?php
  session_start();
  require('../Models/mdpoublieModel.php');

  if(isset($_SESSION['mailrecup']) AND !empty($_SESSION['mailrecup'])){
    require('../Views/nouveaumdpView.php');
  }

  else{require('../Views/mdpoublieView.php');}
