<?php
if (isset($_POST['capteur']))
{
  header("Location: modifierCapteur.php?id=".$_SESSION['id']);
}else if (isset($_POST['piece']))
{
  header("Location: modifierPiece.php?id=".$_SESSION['id']);
}

?>
