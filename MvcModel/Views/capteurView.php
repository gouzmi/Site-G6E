<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Acceuil Connecté par pièce</title>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/capteur.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</head>

<?php include("header.php") ?>


<body class="no" id="menu">
<!-- Menu pièce-->
<div id="corps">


<?php include("../Views/slideView.php") ;?>

    <div class="coeur" id="left">

      <nav class='animated bounceInDown' id="security">
        <ul>

          <li class='sub-menu'>
            <a href='#settings' id="titre">
              <div class='fa fa-shield' id="point"></div>
              Sécurité
              <div class='fa fa-caret-down right'></div>
            </a>
            <ul>
              <li>
                <a href='#settings'>
                  Alarme
                </a>
              </li>
              <li>
                <a href='#settings'>
                  Portes &amp; Fenêtres
                </a>
              </li>
              <li>
                <a href='#settings'>
                  Fumée
                </a>
              </li>
              <li>
                <a href='#settings'>
                  Mouvement
                </a>
              </li>
              <li>
                <a href='#settings'>
                  Caméra
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>

      <nav class='animated bounceInDown' id="comfort">
        <ul>

          <li class='sub-menu'>
            <a href='#settings' id="titre">
              <div class='fa fa-smile-o' id="point"></div>
              Confort
              <div class='fa fa-caret-down right'></div>
            </a>
            <ul>
              <li>
                <a href='#settings'>
                  Eclairage
                </a>
              </li>
              <li>
                <a href='#settings'>
                  Radiateur
                </a>
              </li>
              <li>
                <a href='#settings'>
                  Consommation
                </a>
              </li>
              <li>
                <a href='#settings'>
                  Autres actionneurs
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>

      <script>
        $('.sub-menu ul').hide();
        $(".sub-menu a").click(function () {
        $(this).parent(".sub-menu").children("ul").slideToggle("100");
        $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");

        });
      </script>

    </div>

    <div class="coeur" id="right">
        <h1 class="h1" align="center">Voici les statuts des capteurs</h1>
        <p id="pageStatut"></p>
    </div>

</div>

</body>

<?php include("footer.php") ?>

</html>
