<?php
// Connexion à la base de données
try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=test2', 'root', '', $pdo_options);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
if(!empty($_GET['billet']) AND !empty($_POST['auteur']) AND !empty($_POST['commentaire']))
{
 // Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire, date_creation) VALUES(:id_billet, :auteur, :commentaire, NOW())') or die(print_r($bdd -> getMessage()));
    $req->execute(array(
                         ':id_billet' => htmlspecialchars($_GET['billet']),
                         ':auteur' => htmlspecialchars($_POST['auteur']),
                         ':commentaire' => htmlspecialchars($_POST['commentaire'])));
              // Redirection du visiteur vers la page des commentaires
              header('Location:commentaire.php?billet=' . $_GET['billet']);
}
    ?>
