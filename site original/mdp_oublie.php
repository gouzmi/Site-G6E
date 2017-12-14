<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Mot de passe perdu</title>
    <link rel="stylesheet" href="mdp_oubliee.css"/>
    <link rel="stylesheet" href="headerfooterr.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
	</head>

<body>
	<div class="page">

		    <?php include("header.php") ?>


    <section>
	   <center><h1> Récupération de votre mot de passe </h1><br></center>
       <form method="post" action="Mdp_oubli.php" id="Mdp_oubli">
        <label for="question">Quel est votre animal préfére?
        <input type="text" name="answer_secret_question" required>
        </label>
       </form>
       <br><br><br>
       <center><input type="submit" value="Envoyer">
    </section>
	</div>
	</body>

	    <?php include("footer.php") ?>

</html>
