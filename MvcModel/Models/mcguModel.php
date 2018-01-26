<?php
require("connexiondb.php");

$cgu = $bdd->query('SELECT * FROM `maintenance` WHERE id_maintenance = 11');
$cgu->execute();
$cgu = $cgu->fetch();
$mentions = $bdd->query("SELECT * FROM `maintenance` WHERE id_maintenance = 12");
$mentions->execute();
$mentions = $mentions->fetch();

?>
