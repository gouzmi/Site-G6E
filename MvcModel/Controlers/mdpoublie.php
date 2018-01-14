<?php
  session_start();
  require('../Models/mdpoublieModel.php');

  if(isset($_SESSION['mailrecup']) AND !empty($_SESSION['mailrecup'])){

  }
  else if($_SESSION['code']){
      require('../views/nouveaumdpView.php');
  }
  else{require('../views/mdpoublieView.php');}
