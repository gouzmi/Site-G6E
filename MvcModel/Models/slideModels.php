<?php

include('connexiondb.php');

$requser = $bdd->prepare("SELECT * from utilisateur where id_utilisateur  =? ");
$requser->execute(array($_GET['id']));
$user = $requser->fetch();

?>
