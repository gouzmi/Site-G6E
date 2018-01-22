<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Suppression de pièces</title>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/editerMaison.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>


    <body class="no" id="menu">
      <?php include("header.php") ?>
      <div id="corps">
        <?php include("../Views/slideView.php") ; ?>

        <?php

        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=test2', 'root', '');
            $bdd->exec("SET CHARACTER SET utf8");
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }


        $reqcapteur= $bdd->prepare('SELECT capteur.id_capteur, type_capteur.variete_capteur, piece.nom_piece  FROM capteur
                                  JOIN type_capteur
                                    ON capteur.id_type_capteur= type_capteur.id_type_capteur
                                  JOIN piece
                                    ON capteur.id_piece = piece.id_piece
                                 WHERE piece.id_logement =?');
        $reqcapteur->execute(array($_SESSION['id_logement']));

        echo '<form method="post" action="">
        <table align=center>
        <tr>
        <td>Référence du Capteur</td><td>Pièce</td><td>Type du Capteur</td><td>Supprimer</td>
        </tr>';
        $capteurs = $reqcapteur->fetchall(PDO::FETCH_ASSOC) ;
        $i=1;
        foreach($capteurs as $key => $capteur) {
          echo '<tr>
          <td>',$capteur['id_capteur'],'</td>
          <td>',$capteur['nom_piece'],'</td>
          <td>',$capteur['variete_capteur'],'</td>
          <td><input type="checkbox" name="id_rep['.$i.']" value="'.$capteur['id_capteur'].'" /></td>
          </tr>';
          $i++;
        }

        echo '<tr><td colspan="4"><input type="submit" name="supCapteur" value="Supprimer"  /></td></tr>
        </table>
        </form>';
        ?>


      </div>
      <?php include("footer.php") ?>
    </body>
</html>
