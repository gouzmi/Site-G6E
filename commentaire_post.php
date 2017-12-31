<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Forum</title>
        <link rel="stylesheet" href="blog.css"  />
        <link rel="stylesheet" href="headerfooterr.css"/>
        <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>



    <body>


<?php
// Connexion à la base de données
try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', $pdo_options);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
if(!empty($_GET['billet']) AND !empty($_POST['auteur']) AND !empty($_POST['commentaire']))
{
 // Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire, date_commentaire) VALUES(:id_billet, :auteur, :commentaire, NOW())') or die(print_r($bdd -> getMessage()));
    $req->execute(array(
                         ':id_billet' => htmlspecialchars($_GET['billet']),
                         ':auteur' => htmlspecialchars($_POST['auteur']),
                         ':commentaire' => htmlspecialchars($_POST['commentaire'])
                         ));
              // Redirection du visiteur vers la page des commentaires
              header('Location:commentaires.php?billet=' . $_GET['billet']);
}
    ?>
    </body>

</html>