<header>
    <div class="header">
        <div class="image"><a href="page1.php"><img src="../Images/logodomhomepetit.png" ></a></div>
    <div>
        <?php if (isset($_SESSION['id']) AND $_SESSION['id'] > 1) { ?>
          <a href="../Controlers/faq.php" class="link" id="autres"><i class="fa fa-question" aria-hidden="true"></i> Faq</a>
          <a href="contact.php" class="link" id="autres"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a>

                <?php if ($_SESSION['admin'] == 1)  { ?>
                  <a href="admin.php" class="link"><i class="fa fa-unlock-alt" aria-hidden="true"></i>  Espace admin</a>
                <?php }
                  elseif ($_SESSION['admin'] == 2) { ?>
                    <a href="admin2.php" class="link"><i class="fa fa-unlock-alt" aria-hidden="true"></i>  Espace SAV</a>
                <?php  }
                      else { ?>
                        <a href="<?php echo "../Controlers/profil.php?id=".$_SESSION['id']; ?>" class="link"><i class="fa fa-home" aria-hidden="true"></i>  Gérer Sa Maison</a>
                      <?php } ?>

          <a href="../Controlers/deconnexion.php" class="link" id="autres"><i class="fa fa-sign-out" aria-hidden="true"></i>Se déconnecter</a>
          <?php }

        else { ?>
          <a  href="faq.php" class="link"><i class="fa fa-question" aria-hidden="true"></i> Faq</a>
          <a href="contact.php" class="link"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a>
          <a href="login.php" class="link" ><i class="fa fa-sign-in" aria-hidden="true"></i>  Se connecter</a>
        <?php }
        ?>

    </div>
    </div>
</header>
