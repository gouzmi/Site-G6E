<?php
require("connexiondb.php");

function horaireouverture($bdd){
  $sqlhoraire='SELECT *
               FROM maintenance
               WHERE type_maintenance LIKE "horaire%"';
  $reqhoraire = $bdd -> query($sqlhoraire);
  $horaire = $reqhoraire->fetchall();
 ?>
  <ul class="contactleft">
      <li>Lundi:    <?php echo $horaire[0]['desc_maintenance']; ?></li>
      <li>Mardi:    <?php echo $horaire[1]['desc_maintenance']; ?></li>
      <li>Mercredi: <?php echo $horaire[2]['desc_maintenance']; ?></li>
      <li>Jeudi:    <?php echo $horaire[3]['desc_maintenance']; ?></li>
      <li>Vendredi: <?php echo $horaire[4]['desc_maintenance']; ?></li>
      <li>Samedi:   <?php echo $horaire[5]['desc_maintenance']; ?></li>
      <li>Dimanche: <?php echo $horaire[6]['desc_maintenance']; ?></li>
  </ul>
<?php }


function infocontact($bdd){
  $sqlinfocontact='SELECT *
                   FROM maintenance
                   WHERE type_maintenance = "numéro domhome"
                   OR type_maintenance = "adresse domhome"
                   OR type_maintenance = "adresse mail"';
  $reqinfo = $bdd -> query($sqlinfocontact);
  $infocontact = $reqinfo->fetchall();
  ?>
  <ul class="contactright">
      <li ><i class="fa fa-phone" aria-hidden="true"></i>      <?php echo $infocontact[0]['desc_maintenance']; ?></li>
      <li><i class="fa fa-address-card" aria-hidden="true"></i><?php echo $infocontact[1]['desc_maintenance']; ?></li>
      <li><i class="fa fa-envelope" aria-hidden="true"></i>    <?php echo $infocontact[2]['desc_maintenance']; ?></li>
  </ul>
<?php  } ?>
