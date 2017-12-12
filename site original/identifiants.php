<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
