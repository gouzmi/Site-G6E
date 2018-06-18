<link rel="stylesheet" href="../Css/slide.css"/>
<script src="../javaScript/slide.js"></script>

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
      <a href="../Controlers/profil.php" class="lien"><i class="" aria-hidden="true"></i> Profil</a>
      </div>
      <div class="rubrique">
      <a href="../Controlers/piece.php" class="lien"><i class="" aria-hidden="true"></i> Tri par pièces</a>
      </div>
      <div class="rubrique">
      <a href="../Controlers/capteur.php" class="lien"><i class="" aria-hidden="true"></i> Tri par type</a>
      </div>
      <div class="rubrique">
      <a href="../Controlers/editerMaison.php" class="lien"><i class="" aria-hidden="true"></i> Editer sa Maison</a>
      </div>
      <div class="rubrique">
      <a href="../Controlers/historique.php" class="lien"><i class="" aria-hidden="true"></i> Historique</a>
      </div>
      <div class="rubrique">
      <a href="../Controlers/billet.php" class="lien"><i class="" aria-hidden="true"></i> Forum</a>
      </div>

</div>
