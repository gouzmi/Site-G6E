<link rel="stylesheet" type="text/css" href="../Css/editerMaison.css">
<?php
  include('connexiondb.php');

  $variete1 = $bdd->query('SELECT * FROM type_capteur');
  $variete2 = $bdd->query('SELECT * FROM piece WHERE id_logement ='.$_SESSION['id_logement'].' ');
  $variete3 = $bdd->query('SELECT cemac.id_cemac FROM cemac
                           INNER JOIN piece ON cemac.id_piece = piece.id_piece
                           WHERE piece.id_logement = '.$_SESSION['id_logement'].'');
  //bouton Retour
  if(isset($_POST['retour'] )){
    if(isset($_SESSION['modifcapteur'])){
      unset($_SESSION['modifcapteur']);
    }
  }
  //formulaire supp rempli
  if(isset($_POST['supCapteur'])){
    foreach($_POST['id_rep'] as $valeur){
       $suppcapteur = $bdd->prepare("DELETE FROM `capteur` WHERE id_capteur=? ");
       $suppcapteur->execute(array($valeur));
       $suppdonnees = $bdd->prepare("DELETE FROM `historique_capteur` WHERE id_capteur=? ");
       $suppdonnees->execute(array($valeur));
     }
    $statut = "Le capteur a été supprimé !";
  }


  function premiere_valeur($id_type_capteur){
    switch ($id_type_capteur) {
      case 1:
      case 2:
      case 4:
      case 5:
        $valeur = "non";
        break;
      case 3:
        $valeur = 20 ;
        break;
      case 6:
        $valeur = 0;
        break;
      default:
        $valeur = "Nul";
      }
    return $valeur ;
  }

  //formulaire ajout rempli
  if(isset($_POST['ajCapteur'])){
    if (!empty(isset($_POST['varieteCap'])) AND !empty(isset($_POST['varietePie'])) AND !empty(isset($_POST['idCemac']))) {

      $ajcapteur = $bdd->prepare("INSERT INTO capteur(id_type_capteur,id_piece,id_cemac) VALUES(?,?,?)");
      $ajcapteur->execute(array($_POST['varieteCap'],$_POST['varietePie'],$_POST['idCemac']));

      $reqid_nvcapteur = $bdd->prepare("SELECT capteur.id_capteur FROM capteur
                                    INNER JOIN piece ON capteur.id_piece = piece.id_piece
                                    INNER JOIN logement ON piece.id_logement = logement.id_logement
                                    WHERE logement.id_logement = ? AND id_type_capteur = ? ORDER BY capteur.id_capteur DESC LIMIT 1");
      $reqid_nvcapteur->execute(array($_SESSION['id_logement'],$_POST['varieteCap']));
      $id_nvcapteur = $reqid_nvcapteur->fetch();
      $valeur = premiere_valeur($_POST['varieteCap']);
      
      $ajvaleur = $bdd->prepare("INSERT INTO historique_capteur(id_capteur,valeur_capteur) VALUES(?,?)");
      $ajvaleur->execute(array($id_nvcapteur[0],$valeur));
      $statut = "Le capteur a été ajouté !";

    }
    else{ $statut ="Veuillez remplir tous les champs du formulaire";}

  }
  //fomulaire modification rempli
  if(isset($_POST['modif'])){
    if(isset($_POST['ajsupp'])){
      if( $_POST['ajsupp'] == "ajouter"){
        $_SESSION['modifcapteur'] = "ajout";
        header("Location: editerMaison.php");
      }
      else if( $_POST['ajsupp'] == "supprimer"){
       $_SESSION['modifcapteur'] = "supp";
       header("Location: editerMaison.php");}
    }
  }
  function supCapteur($bdd){
    $reqcapteur= $bdd->prepare('SELECT capteur.id_capteur, type_capteur.variete_capteur, piece.nom_piece  FROM capteur
                              JOIN type_capteur
                                ON capteur.id_type_capteur= type_capteur.id_type_capteur
                              JOIN piece
                                ON capteur.id_piece = piece.id_piece
                             WHERE piece.id_logement =?');
    $reqcapteur->execute(array($_SESSION['id_logement']));

    echo '<form method="post" action="" class="form-style-5">
    <p>
      <?php if (isset($statut)) { echo $statut; }  ?>
    </p>
    <table align="center" class="table">
    <h1>Veuillez choisir les capteurs que vous voulez supprimer </h1>
    <tr>
    <br>
    <td align="center" class="p">Référence du Capteur</td><td align="center" class="p">Pièce</td><td align="center" class="p">Type du Capteur</td><td align="center" class="p">Supprimer</td>
    </tr>';
    $capteurs = $reqcapteur->fetchall(PDO::FETCH_ASSOC) ;
    $i=1;
    foreach($capteurs as $key => $capteur) {
      echo '<tr>
      <td align="center">',$capteur['id_capteur'],'</td>
      <td>',$capteur['nom_piece'],'</td>
      <td align="center">',$capteur['variete_capteur'],'</td>
      <td align="center"><input type="checkbox" name="id_rep['.$i.']" value="'.$capteur['id_capteur'].'" /></td>
      </tr>';
      $i++;
    }
    echo "</table>";
    echo '<br>
    <input type="submit" name="supCapteur" value="Supprimer"  /></td></tr>
    <input type ="submit" name="retour" value="Retour">
    </form>';
  }

?>
