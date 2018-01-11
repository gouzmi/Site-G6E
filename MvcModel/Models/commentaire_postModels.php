<?php

    include('connexiondb.php');

if(!empty($_GET['billet']) AND !empty($_POST['auteur']) AND !empty($_POST['commentaire']))
{
 // Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire, date_commentaire) VALUES(:id_billet, :auteur, :commentaire, NOW())') or die(print_r($bdd -> getMessage()));
    $req->execute(array(
                         ':id_billet' => htmlspecialchars($_GET['billet']),
                         ':auteur' => htmlspecialchars($_POST['auteur']),
                         ':commentaire' => htmlspecialchars($_POST['commentaire'])));
              // Redirection du visiteur vers la page des commentaires
              header('Location:commentaire.php?billet=' . $_GET['billet']);
}
?>
