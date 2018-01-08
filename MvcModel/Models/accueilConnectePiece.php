<?php
if (isset($_GET['id_piece'])) {
  include ('connexiondb.php');
  //choisir le base de donnee
  mysql_select_db('test2',$bdd);
  // le condition
  $id_piece=$_POST['id_piece'];
  // selecter les champs ce qu'on a besoin
  $requete = $bdd->prepare('SELECT * FROM capteur,piece WHERE id_pièce = ?');
  $requete->execute(array($_GET['id_pièce']));
  while ($row = mysqli_fetch_assoc($result))
  {
    echo"<tr><td>".$row["id_capteur"]."</td><td>".$row["nom"]."</td><td>".$row["fonctionnement"]."</td><tr>";
  }
}

 mysqli_close($bdd);
 ?>
