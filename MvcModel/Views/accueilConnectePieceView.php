<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Acceuil Connecté par pièce</title>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/accueilConnecté.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <script src="../javaScript/accueilConnectePiece.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
</head>

<?php include("header.php") ?>


<body class="no" id="menu">
  <div id="corps">
    <?php include("../Views/slideView.php") ;
    $sqlpiece ='SELECT piece.id_piece, piece.nom_piece
                   FROM piece INNER JOIN logement
                   ON piece.id_logement = logement.id_logement
                   WHERE logement.id_utilisateur = '.$_SESSION['id'].'' ;

    $reqpiece = $bdd ->query($sqlpiece);
    $nbpiece = $reqpiece->rowCount();
    $piece = $reqpiece->fetchall();
    $idpiece = $piece[1]['id_piece'];

    $sqlcapteur='SELECT capteur.id_capteur, capteur.id_type_capteur,
                        historique_capteur.valeur_capteur,
                        historique_capteur.date_donnee,
                        historique_capteur.heure_donnee
                 FROM historique_capteur INNER JOIN capteur
                 ON  historique_capteur.id_capteur = capteur.id_capteur
                 WHERE capteur.id_piece = '.$idpiece.'
                 ORDER BY capteur.id_type_capteur ';
    $reqcapteur = $bdd ->query($sqlcapteur);
    $nbcapteur = $reqcapteur->rowCount();

    if (($nbpiece != 0 && $nbcapteur != 0))
    {?>
      <div class="tab">
        <button class="tablinks" onclick="openPiece(event, 'London')"><?php echo $piece[0]['nom_piece'] ;?></button>
        <button class="tablinks" onclick="openPiece(event, 'Paris')"><?php echo $piece[1]['nom_piece'] ;?></button>
        <button class="tablinks" onclick="openPiece(event, 'Tokyo')"><?php echo $piece[2]['nom_piece'] ;?></button>
      </div>

      <div id="Tokyo" class="tabcontent">

         <?php
          $capteur= $reqcapteur-> fetchall();
          //affichage box capteur

          $i=0;
          while($i < $nbcapteur) {
              $idtypecapteur = $capteur[$i]['id_type_capteur'];
              $valeur=$capteur[$i]['valeur_capteur'];
              $reference= $capteur[$i]['id_capteur'];
              $logo = logo_capteur($capteur[$i]['id_type_capteur']);
              $titre = titre_capteur($capteur[$i]['id_type_capteur']);
              $info = valeur_capteur($capteur[$i]['id_type_capteur'],$capteur[$i]['id_type_capteur']);
              ?>
              <section id="boite">
                <br>
                <h3><?php echo $titre; ?> </h3>
                <div id="logo"> <?php echo $logo."<br>Référence:".$reference.""; ?></div>
                <div id="bouton"> BOUTON</div>
                <div id="info"> <?php echo $info; ?></div>
                <div id="historique"> <a href="" class="link">Historique </a></div>
              </section id="boite">
              <br>
              <?php
               $i++;
            } ?>
        </div>
      <div id="London" class="tabcontent">blablabla</div>
  <?php } ?>
 </div>
</body>
<?php include("footer.php"); ?>
</html>
