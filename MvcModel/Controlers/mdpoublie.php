<?php
  session_start();

  require('../Models/mdpoublieModel.php');

  if(isset($_POST['formmdpoublie'])){

    require('../Views/nouveaumdpView.php');
  }
  else{

    require('../views/mdpoublieView.php');
  }
