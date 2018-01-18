<?php

  require('connexiondb.php');

  // Récupération du billet
      $req = $bdd->prepare('SELECT id_billet, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');
      $req->execute(array($_GET['billet']));
      $donnees = $req->fetch();

      // Récupération des commentaires
      $req2 = $bdd->prepare('SELECT * FROM commentaires WHERE id_billet = ? ORDER BY date_creation');
      $req2->execute(array($_GET['billet']));

      if(!empty($_GET['billet']) AND !empty($_POST['auteur']) AND !empty($_POST['commentaire']))
      {
       // Insertion du message à l'aide d'une requête préparée
          $req = $bdd->prepare("INSERT INTO `commentaires`( `id_billet`, `auteur`, `commentaire`) VALUES (?,?,?)");
          $req->execute(array($_GET['billet'], $_POST['auteur'], $_POST['commentaire']));
          header('Location:commentaire.php?billet=' . $_GET['billet']);
      }




 ?>
