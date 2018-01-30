<?php
  require('connexiondb.php');
  require('userdb.php');

  $req = $bdd->query('SELECT id_billet, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

  if(isset($_POST['action']))
  {
   // Insertion du message à l'aide d'une requête préparée
      $req2 = $bdd->prepare("INSERT INTO `billets`(`titre`, `contenu`) VALUES (?,?)");
      $req2->execute(array($_POST['titre'], $_POST['contenu']));
      header('Location:billet.php');
  }

  $capteurs = $bdd->query('SELECT DISTINCT * FROM capteur
               JOIN piece ON piece.id_piece = capteur.id_piece
               JOIN logement ON piece.id_logement = logement.id_logement
               WHERE logement.id_utilisateur = '.$user['id_utilisateur'].' ORDER BY nom_piece ');
  $capteurs->execute();
  $capteurs = $capteurs->fetchall();




  function getHistorique($idcapteur, $bdd){

          $passe = $bdd->query('SELECT DISTINCT * FROM historique_capteur JOIN capteur
                       ON  historique_capteur.id_capteur = capteur.id_capteur
                       JOIN piece ON piece.id_piece = capteur.id_piece
                       JOIN type_capteur ON type_capteur.id_type_capteur = capteur.id_type_capteur
                       WHERE capteur.id_capteur = '.$idcapteur.' ORDER BY date_donnee DESC LIMIT 0, 3');
          $passe->execute();
          $passe = $passe->fetchAll();

          foreach ($passe as $key => $passes) {

              $variete = $passes['variete_capteur'];
              $piece = $passes['nom_piece'];
              $valeur = $passes['valeur_capteur'];
              $date = $passes['date_donnee'];
              $fonctionnement = $passes['fonctionnement'];
              $cemac = $passes['id_cemac'];

                       ?>
                       <div class="cas <?php echo $variete; ?>">
                         <div class="info"><span class="donnee"> Pièce :</span><?php echo $piece; ?></div>
                         <div class="info"><span class="donnee"> id capteur :</span><?php echo $idcapteur; ?></div>
                         <div class="info"><span class="donnee"> Type de capteur :</span><?php echo $variete; ?></div>
                         <div class="info"><span class="donnee"> Valeur :</span><?php echo $valeur; ?></div>
                         <div class="info"><span class="donnee"> Fonctionnement :</span><?php echo $fonctionnement; ?></div>
                         <div class="info"><span class="donnee"> Id du Cemac :</span><?php echo $cemac; ?></div>
                         <div class="info"><span class="donnee"> Date :</span><?php echo $date; ?></div>
                       </div class="cas">
                       <?php
                     }
  }


?>
