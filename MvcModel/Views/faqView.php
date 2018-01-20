
<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <title>faq</title>
    <link rel="stylesheet" href="../Css/faq.css"/>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    </head>


    <?php include("header.php"); ?>
    <body>
      <h1 class="titre">Foire aux questions</h1>
      <div class="page">
        <section>


<?php

try
{
		$bdd = new PDO('mysql:host=localhost; dbname=test2;charset=utf8',  'root', '');
}
catch(Exeption $e)
{
		die('Erreur: '.$e->getMessage());
}

$req_id_faq = $bdd->query('SELECT id_faq FROM faq');
while ($id_faq = $req_id_faq ->fetch())

{

?>
<question>
	

		<br />
	<?php
	}

}


$req_id_faq->closeCursor();

?>
</section>
</div>
</body>


</body>
<?php include("footer.php"); ?>


</html>
