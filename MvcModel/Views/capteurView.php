<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Tous vos capteurs</title>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/capteur.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
    <script src="../javaScript/jquery-1.8.3.min.js"></script>
    <script src="../javaScript/capteur.js"></script>

</head>



<body class="no" id="menu">
  <?php include("header.php") ?>
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
                <a href='#settings' class="tablinks" onclick="openCate(event, 'Fumée')">
                  Fumée
                </a>
              </li>
              <li>
                <a href='#settings' class="tablinks" onclick="openCate(event, 'Mouvement')">
                  Mouvement
                </a>
              </li>
              <li>
                <a href='#settings' class="tablinks" onclick="openCate(event, 'Caméra')">
                  Caméra
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>

      <nav class='animated bounceInDown' id="confort">
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
                <a href='#settings' class="tablinks" onclick="openCate(event, 'Température')">
                  Température
                </a>
              </li>
              <li>
                <a href='#settings' class="tablinks" onclick="openCate(event, 'Consommation')">
                  Consommation
                </a>
              </li>
              <li>
                <a href='#settings' class="tablinks" onclick="openCate(event, 'Autres actionneurs')">
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

        </div>

        <div id="Portes &amp; Fenêtres" class="tabcontent">
          <?php
            foreach ($pieces as $key => $piece){
              getCapteurs('5',$piece['nom_piece'], $piece['id_piece'], $bdd);
            }
            ?>
        </div>

        <div id="Fumée" class="tabcontent">
          <?php
            foreach ($pieces as $key => $piece){
              getCapteurs('4',$piece['nom_piece'], $piece['id_piece'], $bdd);
            }
            ?>
        </div>

        <div id="Mouvement" class="tabcontent">
          <?php
            foreach ($pieces as $key => $piece){
              getCapteurs('1',$piece['nom_piece'], $piece['id_piece'], $bdd);

            }
            ?>
        </div>

        <div id="Caméra" class="tabcontent">
          <?php
            foreach ($pieces as $key => $piece){
              getCapteurs('7',$piece['nom_piece'], $piece['id_piece'], $bdd);
            }
            ?>
        </div>

        <div id="Eclairage" class="tabcontent">
                    <?php
                      foreach ($pieces as $key => $piece){
                        getCapteurs('2', $piece['nom_piece'], $piece['id_piece'], $bdd);
                      }
                      ?>
        </div>

        <div id="Température" class="tabcontent">
          <?php
            foreach ($pieces as $key => $piece){
              getCapteurs('3',$piece['nom_piece'], $piece['id_piece'], $bdd);
            }
            ?>
        </div>

        <div id="Consommation" class="tabcontent">
          <?php
            foreach ($pieces as $key => $piece){
              getCapteurs('6',$piece['nom_piece'], $piece['id_piece'], $bdd);
            }
            ?>
        </div>

        <div id="Autres actionneurs" class="tabcontent">
          <?php
            foreach ($pieces as $key => $piece){
              getCapteurs('9',$piece['nom_piece'], $piece['id_piece'], $bdd);
            }
            ?>
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

<?php include("footer.php") ?>
</body>


</html>
