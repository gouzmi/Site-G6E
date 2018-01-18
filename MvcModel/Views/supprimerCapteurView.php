<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Supprimer votre capteur</title>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/editerMaison.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>


    <body class="no" id="menu">
      <?php include("header.php") ?>
      <div id="corps">
        <?php include("../Views/slideView.php") ;?>
        <form class="form-style-6" action="index.html" method="post">
          <h1>Cocher ce que vous voulez supprimer</h1>

          <table>
          <?php echo "<table align=center>
          <tr>
          <td>id_capteur</td><td>id_cemac</td><td>id_piece</td><td>nom</td>
          </tr>";
          while ($donnee2 = $reponse2->fetch()) {
            echo "<tr>";
            echo '<td align=center>' . $donnee1['id_capteur'] . '</td>'.
            /*while ($donnee2 = $reponse2->fetch()) {
              '<td align=center>' . $donnee2['variete_capteur'] . '</td>'.
            }*/
            '<td align=center>' . $donnee2['variete_capteur'] . '</td>'.
            '<td align=center>' . $donnee1['id_cemac'] . '</td>'.
            '<td align=center>' . $donnee1['id_piece'] . '</td>';
          }
        /*  while ($donnee2 = $reponse2->fetch()) {
            echo '<td align=center>' . $donnee2['variete_capteur'] . '</td>';
            echo '</tr>'
          }*/
          ?>
        </table>



        <div id="retour"><a href="../Controlers/modifierCapteur.php"> Retour </a></div>
        </form>



      </div>

  </body>
</html>
