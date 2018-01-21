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

<body>
  <?php include("header.php"); ?>

    <div id="page1">


        <h1 class="titre">Foire aux questions</h1>
        <section>
          <?php


            while ($id_faq = $req_id_faq ->fetch())
              {
              ?>
              <div class="question">
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

                  </div>
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


<?php include("footer.php"); ?>
</body>


</html>
