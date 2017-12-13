<?php

  include("identifiants.php") //connecte à la BD

// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM utilisateur WHERE mail = :email AND mot_de_passe = :pass');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;
    echo 'Vous êtes connecté !';
}
?>
