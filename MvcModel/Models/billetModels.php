<?php
  require('connexiondb.php');

  $req = $bdd->query('SELECT id_billet, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

  if(isset($_POST['action']))
  {
   // Insertion du message à l'aide d'une requête préparée
      $req2 = $bdd->prepare("INSERT INTO `billets`(`titre`, `contenu`) VALUES (?,?)");
      $req2->execute(array($_POST['titre'], $_POST['contenu']));
      header('Location:billet.php');
  }

?>
