<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
	<link rel="stylesheet" href="blog.css"  />
  <link rel="stylesheet" href="headerfooterr.css"/>
  <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>

    <?php include("header.php"); ?>
    <body>
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
    <em><a href="commentaire.php?billet=<?php echo $donnees['id_billet']; ?>">Commentaires</a></em>
    </p>
</div>
<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>
</body>
<?php include("footer.php"); ?>
</html>
