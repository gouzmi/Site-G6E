<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
	<link rel="stylesheet" href="../Css/blog.css"  />
  <link rel="stylesheet" href="../Css/headerfooterr.css"/>
  <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>

    <body>
      <?php include("header.php"); ?>
        <h1>Forum de DOMHOME</h1>
        <h4>Derniers posts du forum :</h4>

<?php
// On récupère les 5 derniers billets
while ($donnees = $req->fetch())
{
?>
<div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['titre']); ?>
        <em>le <?php echo $donnees['date_creation_fr']; ?></em>
    </h3>

    <p>
    <?php
    // On affiche le contenu du billet
    echo nl2br(htmlspecialchars($donnees['contenu']));
    ?>
    <br />
    <em><a href="commentaire.php?billet=<?php echo $donnees['id_billet']; ?>"><br>Commentaires</a></em>
    </p>
</div>

<?php
} // Fin de la boucle des commentaires
$req->closeCursor();
?>
  <form method = "post" action = "index2_post.php?billet=<?php echo $_GET['billet'];?>">
                <p>
                    <label for = "titre"><strong>Votre pseudo :</strong></label>
                    <input type = "contenu" name = "titre" id = "titre"/><br/>
                    <label for = "contnur"><strong>Sujet :</strong></label><br/>
                    <textarea type ="text" name = "commentaire" id = "commentaire" rows ="8" cols="45">Votre billet...</textarea><br/>
                    <input type = "submit" value = "Poster votre billet"/>
                </p>
            </form>


<?php
// Fin de la boucle des billets
$req->closeCursor();
?>
<?php include("footer.php"); ?>
</body>
</html>
