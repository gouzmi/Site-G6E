<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="../Css/contact.css"/>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
    </head>


    <body>
    <?php include("header.php") ?>
      <div id="page1">
        <h1 class="titre">Contact</h1>
          <article>
              <div>
                <?php horaireouverture($bdd); ?>
              </div>
              <div>
                <?php infocontact($bdd); ?>
              </div>
          </article>
      </div>
    <?php include("footer.php") ?>
    </body>





</html>
