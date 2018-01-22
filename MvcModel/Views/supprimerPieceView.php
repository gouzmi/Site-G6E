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


        $reqpiece= $bdd->prepare('SELECT * FROM piece WHERE id_logement=?');
        $reqpiece->execute(array($_SESSION['id_logement']));

  
        echo '<form method="post" action="">
        <table align=center>
        <tr>
        <td>Nom de la Pièce</td><td>Superficie</td><td>Référence de la pièce</td><td>Supprimer</td>
        </tr>';
        $pieces = $reqpiece->fetchall(PDO::FETCH_ASSOC) ;
        $i=1;
        foreach($pieces as $key => $piece) {
          echo '<tr>
          <td>',$piece['nom_piece'],'</td>
          <td>',$piece['superficie_piece'],'</td>
          <td>',$piece['id_piece'],'</td>
          <td><input type="checkbox" name="id_rep['.$i.']" value="'.$piece['id_piece'].'" /></td>
          </tr>';
          $i++;
        }

        echo '<tr><td colspan="4"><input type="submit" name="supPiece"  /></td></tr>
        </table>
        </form>';
        ?>


      </div>
      <?php include("footer.php") ?>
    </body>
</html>
