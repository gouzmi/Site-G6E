<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Suppression d'actionneurs</title>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/editerMaison.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>


    <body class="no" id="menu">
      <?php include("header.php") ?>
      <div id="corps">
        <?php include("../Views/slideView.php") ; ?>

        <?php supActionneur($bdd); ?>
      </div>
      <?php include("footer.php") ?>
    </body>
</html>
