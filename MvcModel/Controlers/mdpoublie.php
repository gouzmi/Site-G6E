<?php
  session_start();
  echo " oui";

  require('../Models/mdpoublieModel.php');
  echo " non";

  if(isset($_POST['formmdpoublie'])){
    echo " yes";

    require('../Views/nouveaumdpView.php');
  }
  else{
  echo " no";

    require('../views/mdpoublieView.php');
  }
