<?php
  include('connexiondb.php');

  $variete1 = $bdd->query('SELECT * FROM type_piece');
  //formulaire supp rempli
  if(isset($_POST['supPiece'])){
     foreach($_POST['id_rep'] as $valeur){
       echo $valeur;
     }
     foreach($_POST['id_rep'] as $valeur){

        $supppiece = $bdd->prepare("DELETE FROM `piece` WHERE id_piece=? ");
        $supppiece->execute(array($valeur));

      }
      unset($_SESSION['modifpiece']);
      header("Location: editerMaison.php");
   }
  //formulaire ajout rempli
  if (isset($_POST['ajPiece'])){
    $filter_def = [
        'nom' => FILTER_SANITIZE_SPECIAL_CHARS,
        'superficie' => FILTER_SANITIZE_NUMBER_INT,];
    $resultat = filter_input_array(INPUT_POST, $filter_def);
    $nom = $resultat['nom'];
    $superficie = $resultat['superficie'];
    if ((preg_match('#^[\p{L}-À-ÖØ-öø-ÿ\s]+$#', $nom)) == false){
        $erreur= 'Le nom ne doit contenir que des lettres' ;
    }
    else if ((preg_match('#^[\p{N}]+$#', $superficie)) == false){
        $erreur= 'Veuillez renseigner la superficie (m²) en chiffres' ;
    }
    else{
      $ajoutPie = $bdd->prepare("INSERT INTO piece(id_type_piece,id_logement,nom_piece,superficie_piece) VALUES(?,?,?,?)");
      $ajoutPie->execute(array($_POST['varietePie'],$_SESSION['id_logement'],$nom,$superficie));
      $info = "Votre pièce a été bien ajoutée !";
      unset($_SESSION['modifpiece']);
      header("Location: editerMaison.php");
    }
  }
  //formulaire modificication rempli
  if(isset($_POST['modif'])){
    if(isset($_POST['ajouter'])){
      $_SESSION['modifpiece'] = "ajout" ;
      header("Location: editerMaison.php");
    }
    if(isset($_POST['supprimer'])){
      $_SESSION['modifpiece'] = "supp" ;
      header("Location: editerMaison.php");
    }
  }

  function supPiece($bdd){
    $reqpiece= $bdd->prepare('SELECT * FROM piece WHERE id_logement=?');
    $reqpiece->execute(array($_SESSION['id_logement']));

    echo '<form method="post" action="">
    <table align=center>
    <tr>
    <td>Nom de la Pièce</td><td>Superficie</td><td>Référence de la pièce</td><td>Supprimer</td>
    </tr>';
    $pieces = $reqpiece->fetchall(PDO::FETCH_ASSOC) ;
    $i=1;
    foreach($pieces as $key => $piece) {
      echo '<tr>
      <td>',$piece['nom_piece'],'</td>
      <td>',$piece['superficie_piece'],'</td>
      <td>',$piece['id_piece'],'</td>
      <td><input type="checkbox" name="id_rep['.$i.']" value="'.$piece['id_piece'].'" /></td>
      </tr>';
      $i++;
    }

    echo '<tr><td colspan="4"><input type="submit" name="supPiece"  /></td></tr>
    </table>
    </form>';
  }

?>
