<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Forum</title>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <link rel="stylesheet" href="../Css/blog.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
</head>



<body class="no" id="menu">
  <?php include("header.php") ?>

<div id="corps">


<?php include("../Views/slideView.php") ;?>




<h1>Forum de DOMHOME</h1>
<h4>Derniers posts du forum :</h4>

<?php

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
}
?>
<form method = "post" action = "">
        <p>

            <label for = "contenu"><strong>Sujet :</strong></label><br/>
            <input type = "contenu" name = "titre" id = "titre" required/><br/>
            <textarea type ="text" name = "contenu" id = "commentaire" rows ="8" cols="45" placeholder="Votre billet..." required></textarea><br/>
            <input type = "submit" name="action" value = "Poster votre billet"/>
        </p>
    </form>






</div>
<?php include("footer.php") ?>

</body>



</html>
