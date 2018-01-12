<?php


  try
  {
     $bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', '');
   }
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }


    $req = $bdd->prepare('SELECT id_billet, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');
    $req->execute(array($_GET['billet']));
    $donnees = $req->fetch();



// Récupération des commentaires
$req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');
$req->execute(array($_GET['billet']));
?>
