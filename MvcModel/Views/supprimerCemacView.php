<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Suppression de Cemacs</title>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/editerMaison.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>
    <body class="no" id="menu">
      <?php include("header.php") ?>
      <div id="corps">
        <?php include("../Views/slideView.php") ;
        $reqcemac= $bdd->prepare('SELECT cemac.id_cemac FROM cemac
                                 INNER JOIN piece ON cemac.id_piece = piece.id_piece
                                 WHERE piece.id_logement =?');
        $reqcemac->execute(array($_SESSION['id_logement']));
        $cemacs = $reqcemac->fetchall(PDO::FETCH_ASSOC) ;

        echo '<form method="post" action="">
        <table>
        <tr>
        <td>Référence du Cemac</td><td>Supprimer</td>
        </tr>';

         $i=1;
        foreach($cemacs as $key => $cemac) {
          echo '<tr>
          <td>',$cemac['id_cemac'],'</td>
          <td><input type="checkbox" name="id_rep['.$i.']" value="'.$cemac['id_cemac'].'" /></td>
          </tr>';
          $i++;
        }

        echo '<tr><td colspan="4"><input type="submit" name="supCemac"  /></td></tr>
        </table>
        </form>';
        ?>


      </div>
      <?php include("footer.php") ?>
    </body>
</html>
