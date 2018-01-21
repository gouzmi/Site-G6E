<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <script src="../javaScript/jquery-1.8.3.min.js"></script>
    <script src="../javaScript/jquery.fullPage.js"></script>
    <link rel="stylesheet" href="../Css/cssp11.css"/>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    </head>

    <body>
      <?php include("header.php") ?>

    <div class="page">

    <!--page1-->
        <section class="section s1" id="page1">
            <div><h1 class="Entreprise1">Notre entreprise</h1>
                <h2 class="Entreprise2">-----Domhome</h2>
            </div>
            <div class="p"><p>DomHome est un nouveau processus domotique innovant.</p>
                <p>Il vous permettra de gérer votre maison à distance et de garantir votre sécurité.</p><br>

            </div>

        </section>

    <!--page2-->
    <section class="section s2">
        <div class="top">
            <h1>La maison connectée</h1>

            <div class="picandp"><div class="imgg"><img src="../Images/bg-3.png">
            <p>La « maison connectée » est une expression pour désigner un habitat où plusieurs éléments sont contrôlés à distance, éventuellement de manière automatisée : le chauffage, la lumière, les alarmes, etc.</p>
            <p>La domotique alliée à la maison connectée permet de faire diminuer jusqu'à 40 % vos factures d'énergie : réglage du chauffage dans chaque pièce à l'heure voulue, capteur de présence pour gérer la température adéquate, capteur de fenêtre ouverte, programmation des volets (pour faire entrer la chaleur du soleil en hiver ou l'éviter en été...).</p>
                </div>
        </div></div>
        <div class="left">
            <ul>
                <li>
                    <img src="../Images/page2-1.png">
                    <p>Capteur de température<br/>35.00 €</p>
                </li>
                <li>
                    <img src="../Images/page2-2.jpg">
                    <p>Capteur d'alerte<br/>20.50 €</p>
                </li>
                <li>
                    <img src="../Images/page2-3.png">
                    <p>Smoke détecteur<br/>20.00 €</p>
                </li>
                <li>
                    <img src="../Images/page2-4.jpg">
                    <p>British Gas Hive<br/>30.00 €</p>
                </li>
                <li>
                    <img src="../Images/page2-5.jpg">
                    <p>Nest thermostat<br/>20.00 €</p>
                </li>
            </ul>
        </div>
    </section>

    <!--page3-->
    <section class="section s4">
        </br> </br>
        <div class="container">
            <h1>Notre équipe : Informatique 6 membres</h1></br>
            <div id="ca-container" class="ca-container">
              <!--ce sont les deux flèches-->
              <div class="ca-nav">
                <span class="ca-nav-prev">Previous</span>
                <span class="ca-nav-next">Next</span>
              </div>
                <!--notre photos, j'importe le source dans cssp11.css
                xxxxxxxxx sont des introductions de chacuns
                &ldq-->
                <div class="ca-wrapper">
                    <div class="ca-item ca-item-1" style="position:absolute; left: 0px;">
                        <div class="ca-item-main">
                            <div class="ca-icon"></div>
                            <h3>Bruno De Rosamel</h3>
                            <h4>
                                <span class="ca-quote">&ldquo;</span>
                                <span>xxxxx xxxxxxx  xxxxxxx xxx x xxxx xxxx x</span>
                            </h4>
                        </div>
                    </div>
                    <div class="ca-item ca-item-2" style="position:absolute; left: 330px;">
                        <div class="ca-item-main">
                            <div class="ca-icon"></div>
                            <h3>Yuqing Zhu</h3>
                            <h4>
                                <span class="ca-quote">&ldquo;</span>
                                <span>xxxxx xxxxxxx  xxxxxxx xxx x xxxx xxxx x</span>
                            </h4>
                        </div>
                    </div>

                    <div class="ca-item ca-item-3" style="position:absolute; left: 660px;">
                        <div class="ca-item-main">
                            <div class="ca-icon"></div>
                            <h3>Guillaume Dupont</h3>
                            <h4>
                                <span class="ca-quote">&ldquo;</span>
                                <span>xxxxx xxxxxxx  xxxxxxx xxx x xxxx xxxx x</span>
                            </h4>
                        </div>
                    </div>

                    <div class="ca-item ca-item-4" style="position:absolute; left: 990px;">
                        <div class="ca-item-main">
                            <div class="ca-icon"></div>
                            <h3>Morgane Eckert</h3>
                            <h4>
                                <span class="ca-quote">&ldquo;</span>
                                <span>xxxxx xxxxxxx  xxxxxxx xxx x xxxx xxxx xx</span>
                            </h4>
                        </div>
                    </div>

                    <div class="ca-item ca-item-5" style="position:absolute; left: 1320px;">
                        <div class="ca-item-main">
                            <div class="ca-icon"></div>
                            <h3>Darlène Eustache</h3>
                            <h4>
                                <span class="ca-quote">&ldquo;</span>
                                <span>xxxxx xxxxxxx  xxxxxxx xxx x xxxx xxxx x</span>
                            </h4>
                        </div>
                    </div>

                    <div class="ca-item ca-item-6" style="position:absolute; left: 1650px;">
                        <div class="ca-item-main">
                            <div class="ca-icon"></div>
                            <h3>Zixuan zhu</h3>
                            <h4>
                                <span class="ca-quote">&ldquo;</span>
                                <span>xxxxx xxxxxxx  xxxxxxx xxx x xxxx xxxx x</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--pour choisir la page par rapport au menu, sinon ça s'affichera dans une page-->
        <script>
            $(function () {
                $(".page").fullpage({
                    anchors:['page1','page2','page3'],
                    menu:"#menu",
                    verticalCentered:false
                })
            })
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
    <?php include("footer.php") ?>
</body>
</html>
