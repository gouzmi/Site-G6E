<head>
  <link rel="stylesheet" href="../Css/slide.css"/>
  <script src="../javaScript/slide.js"></script>
</head>

<div class="sidebar">

  <?php
  include('../Models/slideModels.php');

  ?>

      <div id="top">
        <div id="image">
          <img class="avatar" src="../Images/profil3.png" />
          <div id="utilisateur">
            <?php echo "<i class='nom'>".mb_strtoupper($user['nom'])." ".ucfirst(mb_strtolower($user['prenom']))."</i>"; ?>
          </div>
        </div>
        <div class="container" onclick="myFunction(this)">
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
        </div>
      </div>

      <div class="rubrique">
      <a href="<?php echo "../Controlers/profil.php?id=".$user['id_utilisateur']; ?>" class="lien"><i class="" aria-hidden="true"></i> Profil</a>
      </div>
      <div class="rubrique">
      <a href="<?php echo "../Controlers/accueilConnectePiece.php?id=".$user['id_utilisateur']; ?>" class="lien"><i class="" aria-hidden="true"></i> Pièces</a>
      </div>
      <div class="rubrique">
      <a href="<?php echo "../Controlers/capteur.php?id=".$user['id_utilisateur']; ?>" class="lien"><i class="" aria-hidden="true"></i> Tous les capteurs</a>
      </div>
      <div class="rubrique">
      <a href="<?php echo "../Controlers/editerMaison.php?id=".$user['id_utilisateur']; ?>" class="lien"><i class="" aria-hidden="true"></i> Editer sa Maison</a>
      </div>
      <div class="rubrique">
      <a href="" class="lien"><i class="" aria-hidden="true"></i> Forum</a>
      </div>

</div>
