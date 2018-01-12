<?php

try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=test2', 'root', '', $pdo_options);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
if(!empty($_GET['billet']) AND !empty($_POST['auteur']) AND !empty($_POST['billets']))
{
 // Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO commentaires(id_billet, titre, contenu, date_creation) VALUES(:id_billet,  :titre, :contenu, NOW())') or die(print_r($bdd -> getMessage()));
    $req->execute(array(
                         ':id_billet' => htmlspecialchars($_GET['billet']),
                         ':titre' => htmlspecialchars($_POST['titre']),
                         ':contenu' => htmlspecialchars($_POST['contenu'])));
              // Redirection du visiteur vers la page des commentaires
              header('Location:index2.php?billet=' . $_GET['billet']);
}
    ?>
