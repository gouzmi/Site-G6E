<?php
  include('connexiondb.php');

  $variete1 = $bdd->query('SELECT * FROM type_piece');


  if (isset($_POST['Enregistrer']))
  {
    $filter_def = [
        'nom' => FILTER_SANITIZE_SPECIAL_CHARS,
        'superficie' => FILTER_SANITIZE_NUMBER_INT,];

    $resultat = filter_input_array(INPUT_POST, $filter_def);


    print_r($resultat);// ca marche jusqu'a ici!!!!!
    //Données nettoyées
    $nom = $resultat['nom'];
    $superficie = $resultat['superficie'];

    if ((preg_match('#^[A-Za-zÀ-ÖØ-öø-ÿ-]+$#', $nom)) == false)
    {
        $erreur= 'Le nom ne doit contenir que des lettres' ;// ca marche jusqu'a ici!!!!!
    }
    else
    {
      $ajoutPie = $bdd->prepare("INSERT INTO piece (id_type_piece, id_logement, nom_piece, superficie_piece) VALUES (1, 2, ?,?)");
      $ajoutPie->execute(array($nom,$superficie));
      $info = "Votre pièce a été bien ajouté !";
    }
  }
?>
