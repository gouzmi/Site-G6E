<?php
$ajax = isset($_GET['ajax']);
$currentPiece = isset($_GET['piece']) ? $_GET['piece'] : 1; // 1 == id premiere pièce dans la bdd

if($ajax) {
  echo getCapteurs($currentPiece, $bdd);
} else { ?>
  <!DOCTYPE html>

  <html>
  <head>
      <meta charset="UTF-8">
      <title>Acceuil Connecté par pièce</title>
      <link rel="stylesheet" href="../Css/headerfooterr.css"/>
      <link rel="stylesheet" href="../Css/piece.css"/>

      <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
      <script src="../javaScript/piece.js"></script>
      <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
  </head>

  <body class="no" id="menu">
    <?php include("header.php") ?>
    <div id="corps">
      <?php include("../Views/slideView.php") ;
      $sqlpiece ='SELECT piece.id_piece, piece.nom_piece
                     FROM piece INNER JOIN logement
                     ON piece.id_logement = logement.id_logement
                     WHERE logement.id_utilisateur = '.$user['id_utilisateur'].'' ;



      $reqpiece = $bdd ->query($sqlpiece);
      $nbpiece = $reqpiece->rowCount();
      $pieces = $reqpiece->fetchall();

      if ($nbpiece != 0)
      {
  ?>
        <div class="tab">
          <?php foreach ($pieces as $key => $piece) {
            $isActive = $currentPiece==$piece['id_piece'];
            ?>
            <a href="<?php echo getPieceUrl($piece['id_piece'])?>" class="tablinks <?php echo $isActive ? "active" : ""?>" onclick="openPiece(event, 'piece_<?php echo $piece['id_piece']?>')"><?php echo $piece['nom_piece'] ;?></a>
          <?php }?>
        </div>

      <div class="coeur" id="right">

        <?php foreach ($pieces as $key => $piece) {
            $isActive = $currentPiece==$piece['id_piece'];
          ?>
            <div id="piece_<?php echo $piece['id_piece']?>" class="tabcontent <?php echo $isActive ? "active" : ""?>">
              <?php
              if($isActive) {
                  getCapteurs($piece['id_piece'], $bdd);
               }?>
           </div>

         <?php }?>
       </div>

    <?php } ?>
  </div>
  <?php include("footer.php"); ?>
  </body>
  </html>

<?php } ?>
