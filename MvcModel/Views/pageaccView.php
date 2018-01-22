<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="../Css/pageacc.css"/>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>

    <script src="../javaScript/jquery-1.8.3.min.js"></script>
    </head>

    <body>
      <?php include("header.php") ?>


    <div class="page">
      <!--partie1-->
          <section class="section s1">
              <h1 class="titre">Notre entreprise : DomHome</h1>

              <div class="p"><p>DomHome est un nouveau processus domotique innovant.
                  Il vous permettra de gérer votre maison à distance et de garantir votre sécurité par l'intermédiaire de capteurs et actinneurs.<br>
                  Par l'intermédiaire de DomHome, vous pourrez rendre votre maison, à la fois, connectée, sécurisée et personnalisée.</p>
                  <br>

              </div>
          </section>
      <!--partie2-->
          <section class="section s2">
            <h1 class="titre">La maison connectée</h1>

            <div class="picandp"><div class="imgg" ><img src="../Images/bg-3.png"></div>
            <div class="p">
              <p>La « maison connectée » est une expression pour désigner un habitat où plusieurs éléments sont contrôlés à distance, éventuellement de manière automatisée : le chauffage, la lumière, les alarmes, etc.
              La domotique alliée à la maison connectée permet de faire diminuer jusqu'à 40 % vos factures d'énergie : réglage du chauffage dans chaque pièce à l'heure voulue, capteur de présence pour gérer la température adéquate, capteur de fenêtre ouverte, programmation des volets (pour faire entrer la chaleur du soleil en hiver ou l'éviter en été...).</p>

            </div>

          </section>

      <!--partie3-->
          <section class="section s3">
            <h1 class="titre">Catalogue des capteurs</h1>

          </section>

      <!--partie4-->
      <section class="section s4">
        <h1 class="titre">Notre équipe</h1>
        <div id="ca-container" class="ca-container">
          <!--ce sont les deux flèches
          <div class="ca-nav">
            <span class="ca-nav-prev">Previous</span>
            <span class="ca-nav-next">Next</span>
          </div>-->

            <!--notre photos, j'importe le source dans cssp11.css
            xxxxxxxxx sont des introductions de chacuns
            &ldq-->
            <div class="ca-wrapper">
                <div class="ca-item ca-item-1" style="position:absolute; left: 0px;">
                    <div class="ca-item-main">
                        <div class="ca-icon"></div>
                        <h3>Bruno De Rosamel</h3>
                    </div>
                </div>

                <div class="ca-item ca-item-2" style="position:absolute; left: 330px;">
                    <div class="ca-item-main">
                        <div class="ca-icon"></div>
                        <h3>Yuqing Zhu</h3>
                    </div>
                </div>

                <div class="ca-item ca-item-3" style="position:absolute; left: 660px;">
                    <div class="ca-item-main">
                        <div class="ca-icon"></div>
                        <h3>Guillaume Dupont</h3>
                    </div>
                </div>

                <div class="ca-item ca-item-4" style="position:absolute; left: 990px;">
                    <div class="ca-item-main">
                        <div class="ca-icon"></div>
                        <h3>Morgane Eckert</h3>
                    </div>
                </div>

                <div class="ca-item ca-item-5" style="position:absolute; left: 1320px;">
                    <div class="ca-item-main">
                        <div class="ca-icon"></div>
                        <h3>Darlène Eustache</h3>
                    </div>
                </div>

                <div class="ca-item ca-item-6" style="position:absolute; left: 1650px;">
                    <div class="ca-item-main">
                        <div class="ca-icon"></div>
                        <h3>Zixuan zhu</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <a id="scrollToTop"  class="scrollToTop" href=""><i class="fa fa-arrow-circle-up"></i></a>
        <script>
          $(document).ready(function(){
            var btt = $('.scrollToTop');

            btt.on('click',function(e){
              $('html,body').animate({
                scrollTop:0
              },500);
              e.preventDefault();
            });

            $(window).on('scroll',function(){
              var self = $(this),
                height = self.height(),
                top = self.scrollTop();

              if (top > height) {
                if (!btt.is(':visible')) {
                  btt.show();
                }
              }else {
                btt.hide();
              }
            });
          });


        </script>

    <script type="text/javascript" src="../javaScript/jquery.easing.1.3.js"></script>
    <!-- the jScrollPane script, pour la page de l'équipe-->
    <script type="text/javascript" src="../javaScript/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="../javaScript/jquery.contentcarousel.js"></script>
    <script type="text/javascript">
        $('#ca-container').contentcarousel();
    </script>

      </section>
    </div>
    </body>
    <?php include("footer.php") ?>
    </html>
