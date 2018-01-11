<?php
if (isset($_POST['capteur']))
{
  header("Location: modifierCapteur.php");
}else if (isset($_POST['piece']))
{
  header("Location: modifierPiece.php");
}

?>
