<?php
$ajax = isset($_GET['ajax']);
$currentPiece = isset($_GET['piece']) ? $_GET['piece'] : 1; // 1 == id premiere pièce dans la bdd

if($ajax) {
  echo getCapteurs('0', '0', $currentPiece, $bdd);
  echo getActionneurs('0','0', $currentPiece, $bdd);
} else { ?>
  <!DOCTYPE html>

  <html>
  <head>
      <meta charset="UTF-8">
      <title>Toutes vos Pièces</title>
      <link rel="stylesheet" href="../Css/headerfooterr.css"/>
      <link rel="stylesheet" href="../Css/piece.css"/>

      <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
      <script src="../javaScript/jquery-1.8.3.min.js"></script>
      <script src="../javaScript/piece.js"></script>
      <script src="../javaScript/capteur.js"></script>

      <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
  </head>

  <body class="no" id="menu">
    <?php include("header.php") ?>
    <div id="corps">
      <?php include("../Views/slideView.php") ;


      if ($nbpiece != 0)
      {
  ?>
        <div class="tab" id="left">

          <ul>
            <li>
              <h1 class="gauche"><i class="fa fa-home" aria-hidden="true"></i> Vos Pièces</h1>
            </li>

          <?php foreach ($pieces as $key => $piece) {
            $isActive = $currentPiece==$piece['id_piece'];
            ?><li>
              <a href="<?php echo getPieceUrl($piece['id_piece'])?>" class="tablinks <?php echo $isActive ? "active" : ""?>" onclick="openPiece(event, 'piece_<?php echo $piece['id_piece']?>')"><?php echo $piece['nom_piece'] ;?></a>
            <?php }?>
            </li>

        </ul>

        </div>

      <div class="coeur" id="right">

        <h1  align="center" class="droit">Voici les statuts des capteurs</h1>

        <?php foreach ($pieces as $key => $piece) {
            $isActive = $currentPiece==$piece['id_piece'];
          ?>
            <div id="piece_<?php echo $piece['id_piece']?>" class="tabcontent <?php echo $isActive ? "active" : ""?>">
              <?php
              if($isActive) {
                  getCapteurs('0','0', $piece['id_piece'], $bdd);
                  getActionneurs('0','0', $piece['id_piece'], $bdd);

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
