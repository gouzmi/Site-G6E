<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <title>faq</title>
    <link rel="stylesheet" href="../Css/faq.css"/>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
    </head>

<body class="no" id="menu">
  <?php include("header.php"); ?>

    <div id="corps">


        <h1 class="titre">Foire aux questions</h1>
        <div id="section">
          <?php

          include("../Models/connexiondb.php");

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
                      echo "<strong>".$question_faq['question_faq']."</strong>" . '<br />';
                  		$req_reponse_faq = $bdd->prepare('SELECT reponse_faq FROM faq where question_faq=?');
                  		$req_reponse_faq->execute(array($question_faq['question_faq']));
                  		while($reponse_faq = $req_reponse_faq->fetch())

                      		{
                      			echo  "<p>". $reponse_faq['reponse_faq']. "</p>".   '<br  />';
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
        </div>
      </div>
</body>


<?php include("footer.php"); ?>
</body>


</html>
