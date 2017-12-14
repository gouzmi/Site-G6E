<?php


    if (isset($_SESSION['id']) AND $_SESSION['id'] > 1)
     {
      $espace = " Gérer Sa Maison ";
    }
    else {
      $espace = "Espace Personnel";
    }
?>

<header>
    <div class="header">
        <div class="image"><a href="page1.php"><img src="logodomhomepetit.png" ></a></div>
    <div>
        <a href="" class="link"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Produits</a>
        <a href="contact.php" class="link"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a>
        <?php if (isset($_SESSION['id']) AND $_SESSION['id'] > 1) { ?>
          <a href="accueilConnectePiece.php" class="link"><i class="fa fa-user" aria-hidden="true"></i>  <?php echo $espace; ?></a>
        <?php }
        else { ?>
          <a href="login.php" class="link"><i class="fa fa-user" aria-hidden="true"></i>  <?php echo $espace; ?></a>
        <?php }
        ?>

    </div>
    </div>
</header>
