<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="../Css/admin2.css"/>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
    </head>

    <?php include("header.php") ?>

    <body>
    <div class="page">
      <h1 class="titre">Espace de SAV</h1>

      <article>
        <h3>Ajout d'un client :</h3>
          <div id="cas">

            <div class="info">
              <p>
                Pour ajouter un client dans la table précommande afin qu'il puisse s'inscrire, vous devez rentrez l'email que ce dernier utilisera à chaque connexion.
              </p>
            </div>
            <div class="form">
              <form method="post" action="" id="client">
                <label>email : </label><br />
                <input type="email" name="mailclient" placeholder="client@gmail.com" required/>
                <input type="submit" value="Ajouter" name="ajoutclient" />
                <center>
                  <?php if (isset($info2)){
                      echo $info2;
                  } ?>
                </center>
              </form>
            </div>

          </div>

          <h3>Suppression d'un client :</h3>
            <div id="cas">

              <div class="info">
                <p>
                  Pour supprimer un client dans la table utilisateur, vous devez rentrez l'email de ce dernier.
                </p>
              </div>
              <div class="form">
                                <form method="post" action="" id="supprimer">
                <label for="supprimerclient"> Email:</label> 
                
                <input type="text" name="clientmail" id="supprimerclient" list="clientlist"> 
                <datalist id="clientlist"> 
                <?php
                      while ($donnees = $suppression->fetch())
                      {
                ?>
                                <option value="<?php echo $donnees['mail']; ?>"><?php echo $donnees['mail']; ?></option>
                      <?php
                      }
                  ?>
                </datalist>
                
                <input type="submit" value="Supprimer" name="suppclient1" />
                                  <center>
                    <?php if (isset($info4)){
                        echo $info4;
                    } ?>
                  </center>
                </form>

                <form method="post" action="" id="supprimer">
                  <label>email : </label><br />
                  <input type="email" name="suppmailclient2" placeholder="client@gmail.com" required/>
                  <input type="submit" value="Supprimer" name="suppclient2" />

                </form>

              </div>
            </div>


      </article>



    <?php include("footer.php") ?>
    </body>


</html>
