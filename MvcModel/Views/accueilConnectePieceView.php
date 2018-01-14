<!DOCTYPE html>

<html class="no-js">
<head>
    <meta charset="UTF-8">
    <title>Acceuil Connecté par pièce</title>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/accueilConnecté.css"/>
    <script>document.documentElement.className=document.documentElement.className.replace(/no-js/,'js');</script>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <script src="../javaScript/accueilConnectePiece.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
</head>



<body class="no" id="menu">
  <?php include("header.php") ?>
  <div id="corps">
    <?php include("../Views/slideView.php") ;
    $sqlpiece ='SELECT piece.id_piece, piece.nom_piece
                   FROM piece INNER JOIN logement
                   ON piece.id_logement = logement.id_logement
                   WHERE logement.id_utilisateur = '.$_SESSION['id'].'' ;



    $reqpiece = $bdd ->query($sqlpiece);
    $nbpiece = $reqpiece->rowCount();
    $pieces = $reqpiece->fetchall();
    $idpiece = $pieces[1]['id_piece'];

    if ($nbpiece != 0)
    {
?>
      <div class="tab">
        <?php foreach ($pieces as $key => $piece) { ?>
          <button class="tablinks <?php echo $key == 0 ? "active" : ""?>" onclick="openPiece(event, 'piece_<?php echo $piece['id_piece']?>')"><?php echo $piece['nom_piece'] ;?></button>
        <?php }?>
      </div>

    <div class="coeur" id="right">
      <?php foreach ($pieces as $key => $piece) { ?>
          <div id="piece_<?php echo $piece['id_piece']?>" class="tabcontent <?php echo $key == 0 ? "active" : ""?>">
            <?php
            $sqlcapteur='SELECT capteur.id_capteur, capteur.id_type_capteur,
                                historique_capteur.valeur_capteur,
                                historique_capteur.date_donnee,
                                historique_capteur.heure_donnee
                         FROM historique_capteur INNER JOIN capteur
                         ON  historique_capteur.id_capteur = capteur.id_capteur
                         WHERE capteur.id_piece = '.$piece['id_piece'].'
                         ORDER BY capteur.id_type_capteur ';
            $reqcapteur = $bdd ->query($sqlcapteur);
            $capteurs = $reqcapteur->fetchall();
            //$capteurs = $pieces['capteurs'];
            foreach ($capteurs as $capteur) {
              $idtypecapteur = $capteur['id_type_capteur'];
              $valeur=$capteur['valeur_capteur'];
              $reference= $capteur['id_capteur'];
              $logo = logo_capteur($capteur['id_type_capteur']);
              $titre = titre_capteur($capteur['id_type_capteur']);
              $info = valeur_capteur($capteur['id_type_capteur'], $capteur['valeur_capteur']);
            ?>
              <section class="boite">
                <h3><?php echo $titre; ?> </h3>
                <div class="logo"> <?php echo $logo."<br>Référence:".$reference.""; ?></div>
                <div class="bouton"> BOUTON</div>
                <div class="info"> <?php echo $info; ?></div>
                <div class="historique"> <a href="" class="link">Historique </a></div>
              </section>
          <?php }?>
         </div>

       <?php }?>
     </div>

  <?php } ?>
</div>
<?php include("footer.php"); ?>
</body>
</html>
