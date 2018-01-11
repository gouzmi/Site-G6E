<?php

try
{
		$bdd = new PDO('mysql:host=localhost;dbname=test2', 'root', '');
		$bdd->exec("SET CHARACTER SET utf8");
}
catch (Exception $e)
{
		die('Erreur : ' . $e->getMessage());
}

	function securite_bdd($string)
	{
		// On regarde si le type de string est un nombre entier
		if(ctype_digit($string))
		{
			$string = intval($string);
		}
		// Pour tous les autres types
		else
		{
			$string = $bdd->quote($string);
			$string = addcslashes($string, '%_');
		}

		return $string;
	}
 ?>
