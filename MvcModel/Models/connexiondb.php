<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test2', 'root', '');
    $bdd->exec("SET CHARACTER SET utf8");
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>
