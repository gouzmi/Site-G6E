<html>

 
<head>  
<script language="Javascript">  
function verif()  
{  
if(formulaire.ex5.value == '' && formulaire.ex5.value == '') // si tous les champs sont vides, affiche l'alerte!  
{  
alert('Merci de remplir les champs !');  
return false;  
}  
</script> 

<link rel="stylesheet" type="text/css" href="https://educ.isep.fr/moodle/theme/standard/styles.php" />
<link rel="stylesheet" type="text/css" href="https://educ.isep.fr/moodle/theme/ingenuous/styles.php" />

	<meta charset="utf-8">
	<title>Ajout d'un président</title>

	</head>
	<body>
		<form method="post" action=""><!-- Les valuers de method et action sont à compléter -->
			<fieldset>
				 <legend>Utilisateur</legend>
				 <form action="" method="post" >
  					Login:<input type="text" name="login">
  					<br>
  					Password:<input type="Password" name="mdp">
  					<br>
			</fieldset>
			<fieldset>
				<legend>Président</legend>
					<form action="" method="post" >
  					Nom du président:<input type="text" name="nom">
  					<br>
  					Prénom du président:<input type="text" name="prenom">
  					<br>	
  					Année début:<input type="text" name="date_debut">
  					<br>
  					Année fin:<input type="text" name="date_fin">
  					<br>
  					<label>Parti politique :</label>
        					<select name="taskOption">
						      			<option value="1">UNR</option>
						      			<option value="2">UDR</option>
						      			<option value="3">FNRI</option>
						      			<option value="4">PS</option>
						      			<option value="5">RPR</option>
						      			<option value="6">UMP</option>
						      			<option value="7">LaREM</option>
						      			<option value="8">APP</option>
							</select>
  					<br> 
				</select><br>
			</fieldset>
			<input type="submit" name="envoyer">
		</form>
	   
</head>
</body>  
</html> 
