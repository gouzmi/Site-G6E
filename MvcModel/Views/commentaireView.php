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

<h1>Commentaires des post</h1>
<h2><a href="billet.php">Retour à la liste des post</a></h2>

<div class="news">
<h3>
  <?php echo htmlspecialchars($donnees['titre']); ?>
  <em>le <?php echo $donnees['date_creation']; ?></em>
</h3>
</div>

<h2><strong>Commentaires</strong></h2>

<div class="commentaire">

    <?php
      $req->closeCursor(); // Important : on libère le curseur pour la prochaine requête



      while ($info = $req2->fetch())
      {
        $id = $info['id_utilisateur'];
        $reqauteur = $bdd->prepare("SELECT * from utilisateur where id_utilisateur  =? ");
        $reqauteur->execute(array($id));
        $auteur = $reqauteur->fetch();
      ?>


      <p><strong><?php echo "<i class='nom'>".mb_strtoupper($auteur['nom'])." ".ucfirst(mb_strtolower($auteur['prenom']))."</i>"; ?></strong> le <?php echo $info['date_creation']; ?>
      <br><br>
      <?php echo nl2br(htmlspecialchars($info['commentaire'])); ?></p>




      <?php
      } // Fin de la boucle des commentaires
      $req->closeCursor();
      ?>
</div>

    <form method = "post" action = "">
        <p>
            <label for = "commentaire"><strong>Commentaire :</strong></label><br/>
            <textarea type ="text" name = "commentaire" id = "commentaire" rows ="8" cols="45" placeholder="Votre commentaire..." required></textarea><br/>
            <input type = "submit" name="com" value = "Poster votre commentaire"/>
        </p>
    </form>










</div>
<?php include("footer.php") ?>

</body>

</html>
