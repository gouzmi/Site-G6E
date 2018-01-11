<?php
if (isset($_POST['ajouter']))
{
  header("Location: ajouterCapteur.php");
}else if (isset($_POST['supprimer']))
{
  header("Location: supprimerCapteur.php");
}else
{
  echo "Veuillez faire votre choix.";
}

?>
