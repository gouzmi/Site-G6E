<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Forum</title>
        <link rel="stylesheet" href="blog.css"  />
        <link rel="stylesheet" href="headerfooterr.css"/>
        <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>

    <?php include("header.php"); ?>

    <body>


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

if(isset($_POST['action']))
{
 // Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare("INSERT INTO `billets`(`titre`, `contenu`) VALUES (?,?)");
    $req->execute(array($_POST['titre'], $_POST['contenu']));
    header('Location:index2.php?billet=' . $_GET['billet']);
}
    ?>
    </body>
    <?php include("footer.php"); ?>
</html>
