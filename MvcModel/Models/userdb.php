<?php


  if ($_SESSION['admin'] > 0)
  {
    $requser = $bdd->prepare("SELECT * from utilisateur where id_utilisateur  =? ");
    $requser->execute(array($_SESSION['client']));
    $user = $requser->fetch();
  }

  else
  {
    $requser = $bdd->prepare("SELECT * from utilisateur where id_utilisateur  =? ");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();
  }

?>
