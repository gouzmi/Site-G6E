<head>
  <link rel="stylesheet" href="../Css/font-awesome-4.7.0/css/font-awesome.min.css"/>
</head>


<?php

    if (isset($_SESSION['id']) AND $_SESSION['id'] > 1)
     {
      $espace = "Gérer Sa Maison";
    }
    else {
      $espace = "Se connecter";
    }
?>

<header>
    <div class="header">
        <div class="image"><a href="page1.php"><img src="../Images/logodomhomepetit.png" ></a></div>
    <div>
        <?php if (isset($_SESSION['id']) AND $_SESSION['id'] > 1) { ?>
          <a href="" class="link" id="autres"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Produits</a>
          <a href="contact.php" class="link" id="autres"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a>
          <a href="accueilConnectePiece.php" class="link"><i class="fa fa-home" aria-hidden="true"></i>  <?php echo $espace; ?></a>
          <a href="../Controlers/deconnexion.php" class="link" id="autres"><i class="fa fa-sign-out" aria-hidden="true"></i>Se déconnecter</a>
        <?php }
        else { ?>
          <a href="" class="link"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Produits</a>
          <a href="contact.php" class="link"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a>
          <a href="login.php" class="link"><i class="fa fa-sign-in" aria-hidden="true"></i>  <?php echo $espace; ?></a>
        <?php }
        ?>

    </div>
    </div>
</header>
