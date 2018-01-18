<?php
  include('connexiondb.php');

  $variete1 = $bdd->query('SELECT * FROM type_capteur');
  $variete2 = $bdd->query('SELECT * FROM piece');
  $variete3 = $bdd->query('SELECT * FROM cemac');
  //print_r($variete2->fetchall());

  if (isset($_POST['Enregistrer']))
    {
      if (!empty(isset($_POST['varieteCap'])) AND !empty(isset($_POST['varietePie'])) AND !empty(isset($_POST['idCemac']))) {
        $varieteCap = $_POST['varieteCap'];
        $name = $_POST['name'];
        $varietePie = $_POST['varietePie'];
        $idCemac = $_POST['idCemac'];
        print_r(array($varieteCap,$varietePie,$idCemac,$name));

        //ceci marche bien, mais n'est pas par rapport au choix.
        //$ajoutCap = $bdd->query("INSERT INTO `capteur`(`id_type_capteur`, `id_cemac`, `id_piece`) VALUES (1,2,1)");
        // ceci ajouter 2 fois dans le bdd,n'est pas par rapport au choix.
        //$ajoutCap = $bdd->prepare("INSERT INTO `capteur`(`id_type_capteur`, `id_cemac`, `id_piece`) VALUES (2,2,2)");
        //$ajoutCap->execute();
        //marche pas!
        //$ajoutCap->execute(array($_POST['idCemac'],$_POST['idCemac'],$_POST['idCemac']));
        $info= "Succès! Votre capteur a bien été ajouté ! <a href=\"capteurView.php\"></a> ";
      }


      /*if (!empty(isset($_POST['varieteCap'])))
      {
         // on n'a pas besoin de nettoyer des donnees.
        $idTypeCap = $bdd->query('SELECT * FROM type_capteur WHERE variete_capteur = '.$_POST['varieteCap'].'');

        if (!empty(isset($_POST['varietePie'])))
        {
          $idPiece = $bdd->query('SELECT * FROM piece WHERE nom_piece = '.$_POST['varietePie'].'');

          if (!empty(isset($_POST['idCemac'])))
          {
            $ajoutCap = $bdd->prepare("INSERT INTO capteur(id_type_capteur, id_cemac, id_piece) VALUES (?,?,?)");
            $ajoutCap->execute(array($idTypeCap,$_POST['idCemac'],$idPiece));

            $info= "Succès! Votre capteur a bien été ajouté ! <a href=\"capteurView.php\"></a> ";
          }
        }
      }*/
    }
?>
