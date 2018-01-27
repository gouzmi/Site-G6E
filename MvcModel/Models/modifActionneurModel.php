<link rel="stylesheet" type="text/css" href="../Css/editerMaison.css">
<?php
  include('connexiondb.php');

  $variete1 = $bdd->query('SELECT * FROM type_actionneur');
  $variete2 = $bdd->query('SELECT * FROM piece WHERE id_logement ='.$_SESSION['id_logement'].' ');
  $variete3 = $bdd->query('SELECT cemac.id_cemac FROM cemac
                           INNER JOIN piece ON cemac.id_piece = piece.id_piece
                           WHERE piece.id_logement = '.$_SESSION['id_logement'].'');
  //bouton Retour
  if(isset($_POST['retour'] )){
    if(isset($_SESSION['modifactionneur'])){
      unset($_SESSION['modifactionneur']);
    }
  }
  //formulaire supp rempli
  if(isset($_POST['supActionneur'])){
    foreach($_POST['id_rep'] as $valeur){
       $suppactionneur = $bdd->prepare("DELETE FROM `actionneur` WHERE id_actionneur=? ");
       $suppactionneur->execute(array($valeur));
     }
    $statut = "L'actionneur a été supprimé !";
  }
  //formulaire ajout rempli
  if(isset($_POST['ajActionneur'])){
    if (!empty(isset($_POST['varieteAct'])) AND !empty(isset($_POST['varietePie'])) AND !empty(isset($_POST['idCemac'])) AND !empty(isset($_POST['nom'])) ) {
      $filter_def = [
          'nom' => FILTER_SANITIZE_SPECIAL_CHARS,] ;

      $resultat = filter_input_array(INPUT_POST, $filter_def);
      $nom = $resultat['nom'];
      if ((preg_match('#^[\p{L}-À-ÖØ-öø-ÿ\s]+$#', $nom)) == false){
          $statut= 'Le nom ne doit contenir que des lettres' ;
      }
      else{
        $ajactionneur = $bdd->prepare("INSERT INTO actionneur(id_type_actionneur,id_piece,id_cemac,nom) VALUES(?,?,?,?)");
        $ajactionneur->execute(array($_POST['varieteAct'],$_POST['varietePie'],$_POST['idCemac'],$nom));
        $statut= "Votre actionneur a bien été ajouté !";
      }
    }
    else{ $statut ="Veuillez remplir tous les champs du formulaire";}

  }
  //fomulaire modification rempli
  if(isset($_POST['modif'])){
    if(isset($_POST['ajsupp'])){
      if( $_POST['ajsupp'] == "ajouter"){
        $_SESSION['modifactionneur'] = "ajout";
        header("Location: editerMaison.php");
      }
      else if( $_POST['ajsupp'] == "supprimer"){
       $_SESSION['modifactionneur'] = "supp";
       header("Location: editerMaison.php");}
    }
  }
  function supActionneur($bdd){
    $reqactionneur= $bdd->prepare('SELECT actionneur.id_actionneur, type_actionneur.variete_actionneur, piece.nom_piece  FROM actionneur
                              JOIN type_actionneur
                                ON actionneur.id_type_actionneur= type_actionneur.id_type_actionneur
                              JOIN piece
                                ON actionneur.id_piece = piece.id_piece
                             WHERE piece.id_logement =?');
    $reqactionneur->execute(array($_SESSION['id_logement']));

    echo '<form method="post" action="" class="form-style-5">
    <p>
      <?php if (isset($statut)) { echo $statut; }  ?>
    </p>
    <table align="center" class="table">
    <h1>Veuillez choisir les actionneurs que vous voulez supprimer </h1>
    <tr>
    <br>
    <td align="center" class="p">Référence de l\'actionneur </td><td align="center" class="p">Pièce</td><td align="center" class="p">Type de l\'actionneur</td><td align="center" class="p">Supprimer</td>
    </tr>';
    $actionneurs = $reqactionneur->fetchall(PDO::FETCH_ASSOC) ;
    $i=1;
    foreach($actionneurs as $key => $actionneur) {
      echo '<tr>
      <td align="center">',$actionneur['id_actionneur'],'</td>
      <td>',$actionneur['nom_piece'],'</td>
      <td align="center">',$actionneur['variete_actionneur'],'</td>
      <td align="center"><input type="checkbox" name="id_rep['.$i.']" value="'.$actionneur['id_actionneur'].'" /></td>
      </tr>';
      $i++;
    }
    echo "</table>";
    echo '<br>
    <input type="submit" name="supactionneur" value="Supprimer"  /></td></tr>
    <input type ="submit" name="retour" value="Retour">
    </form>';
  }

?>
