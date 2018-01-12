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
          <em>le <?php echo $donnees['date_creation']; ?></em>
        </h3>
      </div>

        <h2><strong>Commentaires</strong></h2>

        <?php
        $req->closeCursor(); // Important : on libère le curseur pour la prochaine requête
        while ($donnees = $req->fetch())
{
?>


                <p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> le <?php echo $donnees['date_commentaire_fr']; ?>
                    <br><br>
                    <?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?>
                </p>
      </div>

<?php
} // Fin de la boucle des commentaires
$req->closeCursor();
?>
<form method = "post" action = "commentaires_post.php?billet=<?php echo $_GET['billet'];?>">
                <p>
                    <label for = "auteur"><strong>Votre pseudo :</strong></label>
                    <input type = "text" name = "auteur" id = "auteur"/><br/>
                    <label for = "commentaire"><strong>Commentaire :</strong></label><br/>
                    <textarea type ="text" name = "commentaire" id = "commentaire" rows ="8" cols="45">Votre commentaire...</textarea><br/>
                    <input type = "submit" value = "Poster Votre Commentaire"/>
                </p>
            </form>
</body>
<?php include("footer.php"); ?>
</html>
