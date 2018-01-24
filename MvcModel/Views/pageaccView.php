<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <title>Page d'accueil</title>
      <link rel="stylesheet" href="../Css/pageacc.css"/>
      <link rel="stylesheet" href="../Css/headerfooterr.css"/>

      <script src="../javaScript/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="../javaScript/jquery.easing.1.3.js"></script>
      <!-- the jScrollPane script, pour la page de l'équipe-->
      <script type="text/javascript" src="../javaScript/jquery.mousewheel.js"></script>
      <script type="text/javascript" src="../javaScript/jquery.contentcarousel.js"></script>
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
            <div id="ca-container1" class=" ca-container ca-container1">
                <div class="ca-wrapper ca-wrapper1">
                    <div class="ca-item ca-item1 ca-item1-11" style="position:absolute; left: 0px;">
                        <div class="ca-item-main ca-item1-main1">
                            <div class="ca-icon1"></div>
                            <h3>Capteur de température</h3>
                            <p>Capteur permettant de connaître en temps réel les températures dans votre maison</p>
                            <br><br>
                        </div>
                    </div>

                    <div class="ca-item ca-item1 ca-item1-21" style="position:absolute; left: 350px;">
                        <div class="ca-item1-main1">
                            <div class="ca-icon1"></div>
                            <h3>Détecteur de présence</h3>
                            <p>Capteur permettant d'assurer la sécurité dans votre maison.</p>
                            <br><br><br>
                        </div>
                    </div>

                    <div class="ca-item ca-item1 ca-item1-31" style="position:absolute; left: 700px;">
                        <div class="ca-item1-main1">
                            <div class="ca-icon1"></div>
                            <h3>Thermostat</h3>
                            <p> Cet actionneur vous permettra de déterminer la température dans votre maison à tout moment. </p>
                            <br><br>
                        </div>
                    </div>

                    <div class="ca-item ca-item1 ca-item1-41" style="position:absolute; left: 1050px;">
                        <div class="ca-item1-main1">
                            <div class="ca-icon1"></div>
                            <h3>Détecteur de fumée</h3>
                            <p> Ce capteur permettra d'assurer la sécurité dans votre maison en cas d'incendie.</p>
                            <br><br><br>
                        </div>
                    </div>

                    <div class="ca-item ca-item1 ca-item1-51" style="position:absolute; left: 1400px;">
                        <div class="ca-item1-main1">
                            <div class="ca-icon1"></div>
                            <h3>Caméra</h3>
                            <p> Cette caméra vous permettra de visualiser en temps réelle votre maison.</p>
                            <br><br><br>
                        </div>
                    </div>

                    <div class="ca-item ca-item1 ca-item1-61" style="position:absolute; left: 1750px;">
                        <div class="ca-item1-main1">
                            <div class="ca-icon1"></div>
                            <h3>Capteur de contact</h3>
                            <p> Ce capteur vous permettra de savoir en temps réel l'état d'ouverture de vos fenêtre et portes.</p>
                            <br><br>

                        </div>
                      </div>
                    <div class="ca-item ca-item1 ca-item1-71" style="position:absolute; left: 2100px;">
                        <div class="ca-item1-main1">
                            <div class="ca-icon1"></div>
                            <h3>Capteur de luminosité</h3>
                            <p> Ce capteur vous permet de connaître le pourcentage de luminosité dans votre maison et ainsi améliorer la gestion des lumières de votre foyer.</p>
                            <br>
                        </div>
                        </div>
                        <div class="ca-item ca-item1 ca-item1-81" style="position:absolute; left: 2450px;">
                            <div class="ca-item1-main1">
                                <div class="ca-icon1"></div>
                                <h3>Capteur de volet</h3>
                                <p> Ce capteur vous permettra de connaître l'état d'ouverture de vos volets vous permettant ensuite de gérer la luminosité de votre maison.</p>
                                <br>
                            </div>
                        </div>
                        <div class="ca-item ca-item1 ca-item1-91" style="position:absolute; left: 2800px;">
                            <div class="ca-item1-main1">
                                <div class="ca-icon1"></div>
                                <h3>Capteur de consommation</h3>
                                <p>Ce capteur vous permettra de connaître l'état de votre consommation en énergie. Cela vous permettra de réduire votre consommation et donc les dépenses en énergie.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script type="text/javascript">
                $('#ca-container1').contentcarousel();
            </script>


          </section>

      <!--partie4-->
      <section class="section s4">
        <h1 class="titre">Notre équipe</h1>
        <div id="ca-container" class="ca-container">
          <!--ce sont les deux flèches
          <div class="ca-nav">
          <span class="ca-nav-prev">Previous</span>
            <span class="ca-nav-next">Next</span>
          </div>
        qui est deja definir dans le jquery.contentcarousel.js et le pageacc.css-->

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

    <!-- the jScrollPane script, pour la page de l'équipe-->
    <script type="text/javascript">
        $('#ca-container').contentcarousel();
    </script>

      </section>
    </div>
    </body>
    <?php include("footer.php") ?>
    </html>
