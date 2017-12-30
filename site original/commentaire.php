<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Forum</title>
        <link rel="stylesheet" href="blog.css"  />
        <link rel="stylesheet" href="headerfooterr.css"/>
        <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>

    <?php include("header.php"); ?>
    <body>
        <h1>Commentaires des post</h1>
        <h2><a href="index2.php" class="link"><i aria-hidden="true"></i>Retour à la liste des post</a></h2>

<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération du billet
$req = $bdd->prepare('SELECT id_billet, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');
$req->execute(array($_GET['billet']));
$donnees = $req->fetch();
?>

<div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['titre']); ?>
        <em>le <?php echo $donnees['date_creation']; ?></em>
    </h3>

    <p>
    <?php
    echo nl2br(htmlspecialchars($donnees['contenu']));
    ?>
    </p>
</div>

<h2>Commentaires</h2>

<?php
$req->closeCursor(); // Important : on libère le curseur pour la prochaine requête

// Récupération des commentaires
$req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');
$req->execute(array($_GET['billet']));

while ($donnees = $req->fetch())
{
?>

<p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> le <?php echo $donnees['date_commentaire_fr']; ?>
<br><br>
<?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>

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
