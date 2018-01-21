<?php

  require('connexiondb.php');
  require('userdb.php');

  // Récupération du billet
      $req = $bdd->prepare('SELECT * FROM billets WHERE id_billet = ?');
      $req->execute(array($_GET['billet']));
      $donnees = $req->fetch();

      // Récupération des commentaires
      $req2 = $bdd->prepare('SELECT * FROM commentaires WHERE id_billet = ? ORDER BY date_creation');
      $req2->execute(array($_GET['billet']));

      

      if (isset($_POST['com']))
      {
       // Insertion du message à l'aide d'une requête préparée
          $req = $bdd->prepare('INSERT INTO `commentaires`(`id_billet`, `commentaire`, `id_utilisateur`)
                                VALUES (?,?,?)');
          $req->execute(array($_GET['billet'],  $_POST['commentaire'], $user['id_utilisateur']));
          header('Location:commentaire.php?billet=' . $_GET['billet']);
      }




 ?>
