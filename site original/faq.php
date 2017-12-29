
<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
    <meta charset="UTF-8">
    <title>faq</title>
    <link rel="stylesheet" href="faq.css"/>
    <link rel="stylesheet" href="headerfooterr.css"/>
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
	<?php
	$req_question_faq = $bdd ->prepare('SELECT question_faq FROM faq where id_faq=?');
	$req_question_faq->execute(array($id_faq['id_faq']));
	while($question_faq = $req_question_faq ->fetch())


  {
    echo  "<strong>".$question_faq['question_faq']."</strong>". '<br />';
		$req_reponse_faq = $bdd->prepare('SELECT reponse_faq FROM faq where question_faq=?');
		$req_reponse_faq->execute(array($question_faq['question_faq']));
		while($reponse_faq = $req_reponse_faq->fetch())

		{
			echo "<p>".$reponse_faq['reponse_faq']."</p>".   '<br  />';
		}
	?>

		<br />
	<?php
	}

	?>

<?php

}


$req_id_faq->closeCursor();

?>
</section>
</div>
</body>


</body>
<?php include("footer.php"); ?>


</html>
