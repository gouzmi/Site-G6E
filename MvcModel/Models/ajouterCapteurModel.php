<?php
  include('connexiondb.php');

  $variete1 = $bdd->query('SELECT * FROM type_capteur');
  $variete2 = $bdd->query('SELECT * FROM piece');
  $variete3 = $bdd->query('SELECT * FROM cemac');
  //print_r($variete2->fetchall());

  if (isset($_POST['Enregistrer']))
    {
      if (!empty(isset($_POST['varieteCap'])) AND !empty(isset($_POST['varietePie'])) AND !empty(isset($_POST['idCemac']))) {

        //print_r(array($varieteCap,$varietePie,$idCemac));
        
        $ajoutCap = $bdd->prepare("INSERT INTO capteur(id_type_capteur,id_piece,id_cemac) VALUES(?,?,?)");
        $ajoutCap->execute(array($_POST['varieteCap'],$_POST['varietePie'],$_POST['idCemac']));

        $info= "Succès! Votre capteur a bien été ajouté ! <a href=\"capteurView.php\"></a> ";
      }

    }
?>
