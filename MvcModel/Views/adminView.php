<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="../Css/admin.css"/>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
    </head>

    <?php include("header.php") ?>

    <body>
    <div class="page">
      <h1 class="titre">Espace d'administration</h1>

      <article>
        <h3>Ajout d'un administrateur :</h3>
          <div id="cas">

                <div class="info">
                  <p>
                    Pour ajouter un administrateur, vous devez rentrez l'email que ce dernier utilisera à chaque connexion.
                  </p>
                </div>
                <div class="form">
                  <form method="post" action="" id="admin">
                    <label>email : </label><br />
                    <input type="email" name="mailadmin" placeholder="admin@gmail.com" required/>
                    <input type="submit" value="Ajouter" name="ajoutadmin" />
                    <center>
                      <?php if (isset($info1)){
                          echo $info1;
                      } ?>
                    </center>
                  </form>
                </div>

          </div>

          <h3>Ajout d'un SAV :</h3>
            <div id="cas">

                  <div class="info">
                    <p>
                      Pour ajouter un SAV, vous devez rentrez l'email que ce dernier utilisera à chaque connexion.
                    </p>
                  </div>
                  <div class="form">
                    <form method="post" action="" id="admin">
                      <label>email : </label><br />
                      <input type="email" name="mailsav" placeholder="sav@gmail.com" required/>
                      <input type="submit" value="Ajouter" name="ajoutsav" />
                      <center>
                        <?php if (isset($info)){
                            echo $info;
                        } ?>
                      </center>
                    </form>
                  </div>

            </div>

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
                      <label>email : </label><br />

                      <input type="text" name="suppmailclient1" id="supprimerclient" list="clientlist" placeholder="client@gmail.com" required>
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
                  </div>
            </div>

          <h3>Ajout d'information dans la FAQ</h3>
            <div id="cas">

                  <div class="info">
                    <p>
                      Pour ajouter des informations dans la table FAQ visible par les membres, vous devez rentrez la question et la réponse correspondante.
                    </p>
                  </div>
                  <div class="form">
                    <form method="post" action="" id="faq">
                      <label>question : </label><br />
                      <textarea class="quesrep" name="question" required></textarea><br />
                      <label>réponse : </label><br />
                      <textarea class="quesrep" name="reponse" required></textarea><br />
                      <label>thème : </label><br />
                      <input type="text" name="theme" placeholder="thème">
                      <input type="submit" value="Ajouter" name="ajoutfaq" />
                      <center>
                        <?php if (isset($info3)){
                            echo $info3;
                        } ?>
                      </center>
                    </form>
                  </div>

            </div>

            <h3>Accéder à la vue d'un client :</h3>
              <div id="cas">

                    <div class="info">
                      <p>
                        Pour accéder à la vue de n'importe quel client veuillez rentrer son email.
                      </p>
                    </div>
                    <div class="form">
                      <form method="post" action="" id="clientView">
                        <label>email : </label><br />

                        <input type="text" name="clientView" id="supprimerclient" list="clientlist" placeholder="client@gmail.com" required>
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

                        <input type="submit" value="Accéder" name="accesclient" />
                        <center>
                          <?php if (isset($info5)){
                              echo $info5;
                          } ?>
                        </center>
                      </form>
                    </div>

              </div>

      </article>



    <?php include("footer.php") ?>
    </body>


</html>
