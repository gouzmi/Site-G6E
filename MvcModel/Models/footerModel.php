<?php
require("connexiondb.php");

function adressedomhome($bdd){
  $sqladressedomhome='SELECT desc_maintenance
                   FROM maintenance
                   WHERE type_maintenance = "adresse domhome"';
  $reqadresse = $bdd -> query($sqladressedomhome);
  $adresse = $reqadresse->fetch();
  ?>
    <li>Localisation : <?php echo $adresse[0]; ?></li>
<?php  }?>
