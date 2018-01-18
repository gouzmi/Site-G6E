<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Forum</title>
        <link rel="stylesheet" href="../Css/blog.css"  />
        <link rel="stylesheet" href="../Css/headerfooterr.css"/>
        <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>

    <?php include("header.php"); ?>
    <body>
        <h1>Commentaires des post</h1>
        <h2><a href="index2.php" class="link"><i aria-hidden="true"></i>Retour à la liste des post</a></h2>



      <div class="news">
        <h3>
          <?php echo htmlspecialchars($donnees['titre']); ?>
          <em>le <?php echo $donnees['date_creation_fr']; ?></em>
        </h3>
      </div>

        <h2><strong>Commentaires</strong></h2>

        <?php
          $req->closeCursor(); // Important : on libère le curseur pour la prochaine requête



          while ($info = $req2->fetch())
          {
          ?>


          <p><strong><?php echo htmlspecialchars($info['auteur']); ?></strong> le <?php echo $info['date_creation']; ?>
          <br><br>
          <?php echo nl2br(htmlspecialchars($info['commentaire'])); ?></p>
          </div>



          <?php
          } // Fin de la boucle des commentaires
          $req->closeCursor();
          ?>


            <form method = "post" action = "">
                <p>
                    <label for = "auteur"><strong>Votre pseudo :</strong></label>
                    <input type = "text" name = "auteur" id = "auteur"/><br/>
                    <label for = "commentaire"><strong>Commentaire :</strong></label><br/>
                    <textarea type ="text" name = "commentaire" id = "commentaire" rows ="8" cols="45" placeholder="Votre commentaire..." required></textarea><br/>
                    <input type = "submit" value = "Poster votre commentaire"/>
                </p>
            </form>


</body>
<?php include("footer.php"); ?>
</html>
