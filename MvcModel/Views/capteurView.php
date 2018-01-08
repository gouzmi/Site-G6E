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
                <a href='#settings' class="tablinks" onclick="openCate(event, 'Alarme')" id="defaultOpen">
                  Alarme
                </a>
              </li>
              <li>
                <a href='#settings' class="tablinks" onclick="openCate(event, 'Portes &amp; Fenêtres')">
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
                <a href='#settings' class="tablinks" onclick="openCate(event, 'Eclairage')">
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

        <div id="Alarme" class="tabcontent">
          <div class="boite">
            <div>Nom_Capteur</div>
            <div>Données</div>
            <div>Pièce</div>
            <button> Action</button>
          </div>

          <div class="boite">
            <div>Nom_Capteur</div>
            <div>Données</div>
            <div>Pièce</div>
            <button> Action</button>
          </div>

          <div class="boite">
            <div>Nom_Capteur</div>
            <div>Données</div>
            <div>Pièce</div>
            <button> Action</button>
          </div>

        </div>

        <div id="Portes &amp; Fenêtres" class="tabcontent">
          <div class="boite">
            <div>Nom_Capteur</div>
            <div>Données</div>
            <div>Pièce</div>
            <button> Action</button>
          </div>
        </div>

        <div id="Eclairage" class="tabcontent">
          <div class="boite">
            <div>Nom_Capteur</div>
            <div>Données</div>
            <div>Pièce</div>
            <button> Action</button>
          </div>
          <div class="boite">
            <div>Nom_Capteur</div>
            <div>Données</div>
            <div>Pièce</div>
            <button> Action</button>
          </div>
        </div>
    </div>

</div>

<script>
function openCate(evt, cateName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cateName).style.display = "flex";
  evt.currentTarget.className += " active";}

document.getElementById("defaultOpen").click();
</script>

</body>

<?php include("footer.php") ?>

</html>
