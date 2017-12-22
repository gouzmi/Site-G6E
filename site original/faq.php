
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


    <?php include("header.php") ?>
    <body>


<?php 

try
{
		$bdd = new PDD('mysql:host=localhost; dbname= bdd_test;charset=utf8',  'root', '')
}
catch(Exeption $e)
{
		die('Erreur: '.$e->getMessage());
}

$req_id = $bdd->query('SELECT id FROM faq');
while ($id = $req_id ->fetch())

{

?>

	<?php
	$req_question = $bdd ->prepare('SELECT question FROM faq where id=?');
	$req_question->execute(array($id['id']));
	while($question = $req_question ->fetch())

	{
		echo $question['question'] . '<br />';
		$req_reponse = $bdd->prepare('SELECT reponse FROM faq where question=?');
		$req_reponse->execute(array($question['question']));
		while($reponse = $req_reponse->fetch())

		{
			echo $reponse['reponse'].   '<br  />';
		}
	?>

		<br />
	<?php
	}

	?>

<?php

}


$req_id->closeCursor();
$req_reponse->coseCursor();
$req_question->close_Cursor();
?>


</body>
<?php include("footer.php") ?>


</html>

