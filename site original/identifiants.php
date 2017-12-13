//Connexion à la BD, doit être include avant les requêtes
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
