<?php
if (isset($_POST['ajouter']))
{
  header("Location: ajouterPiece.php");
}else if (isset($_POST['supprimer']))
{
  header("Location: supprimerPiece.php");
}else
{
  echo "Veuillez faire votre choix.";
}

?>
