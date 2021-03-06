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

        <div id="first">
              <div>
                <p>
                  En tant qu'administrateur vous pouvez accéder au forum pour résoudre les problèmes de vos clients.
                </p>
              </div>
              <div>
                <h3 style="margin:auto"><a href="../Controlers/billet.php" class="lien">>> Accéder au forum <<</a></h3>
              </div>
        </div>

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
                    <span id='missMailAdmin'></span>
                    <input type="email" name="mailadmin" id="mailAdmin" placeholder="admin@gmail.com" required/>
                    <input type="submit" value="Ajouter" id="ajouterAdmin" name="ajoutadmin" />
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
                      <span id='missMailSAV'></span>
                      <input type="email" name="mailsav" id="mailSAV" placeholder="sav@gmail.com" required/>
                      <input type="submit" value="Ajouter" id="ajouterSAV" name="ajoutsav" />
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
                    <span id="missMailClient"></span>
                    <input type="email" name="mailclient" id="mailClient" placeholder="client@gmail.com" required/>
                    <input type="submit" value="Ajouter" id="ajouterClient" name="ajoutclient" />
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
                      <span id="missMailClientS"></span>
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

                      <input type="submit" value="Supprimer" id="supprimerClient" name="suppclient1" />
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

            <h3>Suppression d'information dans la FAQ</h3>
                <div id="cas">

                      <div class="info">
                        <p>
                          Pour supprimer des informations dans la table FAQ visible par les membres, vous devez sélectionner la question.
                        </p>
                      </div>
                      <div class="form">
                        <form method="post" action="" id="faq">
                          <label>question : </label><br />
                          <select name="suppfaq2">
                            <?php
                                  while ($donnees = $suppressionfaq->fetch())
                                  {
                            ?>
                                            <option value="<?php echo $donnees['question_faq']; ?>"><?php echo $donnees['question_faq']; ?></option>
                                  <?php
                                  }
                              ?>
                          </select>

                          <input type="submit" value="Supprimer" name="suppfaq" />
                          <center>
                            <?php if (isset($info7)){
                                echo $info7;
                            } ?>
                          </center>
                        </form>
                      </div>

                </div>

              <h3>Suppression des billets du Forum</h3>
                    <div id="cas">

                          <div class="info">
                            <p>
                              Pour supprimer des billets dans le forum, vous devez sélectionner le sujet en question.
                            </p>
                          </div>
                          <div class="form">
                            <form method="post" action="" id="forum">
                              <label>question : </label><br />
                              <select name="suppbillet">
                                <?php
                                      while ($donnees = $forum->fetch())
                                      {
                                ?>
                                                <option value="<?php echo $donnees['titre']; ?>"><?php echo $donnees['titre']; ?></option>
                                      <?php
                                      }
                                  ?>
                              </select>

                              <input type="submit" value="Supprimer" name="forum" />
                              <center>
                                <?php if (isset($info8)){
                                    echo $info8;
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
                        <span id="missMailClientV"></span>
                        <input type="text" name="clientView" id="mailClientView" list="clientlist" placeholder="client@gmail.com" required>
                        <datalist id="clientlist">
                        <?php
                              while ($donnees = $selectclient->fetch())
                              {
                        ?>
                                        <option value="<?php echo $donnees['mail']; ?>"><?php echo $donnees['mail']; ?></option>
                              <?php
                              }
                          ?>
                        </datalist>

                        <input type="submit" value="Accéder" id="accederClientView" name="accesclient" />
                        <center>
                          <?php if (isset($info5)){
                              echo $info5;
                          } ?>
                        </center>
                      </form>
                    </div>

              </div>


        <h3>Modification des informations de DomHome:</h3>
          <div id="cas">

                <div class="info">
                  <p>
                    Pour modifier une information concernant la société DomHome sur le site, veuillez remplir le formulaire.
                  </p>
                </div>
                <div class="form">
                  <form method="post" action="" id="info">
                    <label>Numéro de téléphone: </label><br />
                    <input type="text" class="quesrep" name="numdomhome"  placeholder="<?php echo $num['desc_maintenance'];?>"  /><br />
                    <label>Adresse DomHome: </label><br />
                    <input type="text" class="quesrep" name="adressedomhome"  placeholder="<?php echo $adresse['desc_maintenance'];?>"  /><br />
                    <label>Email DomHome: </label><br />
                    <input type="email"class="quesrep" name="emaildomhome"  placeholder="<?php echo $mail['desc_maintenance'];?>" /><br />
                    <input type="submit" value="Modifier"  name="modifsite" />
                    <center>
                      <?php if (isset($info6)){
                            echo $info6;}
                           ?>
                    </center>
                  </form>
                </div>

          </div>

          <h3>Modification des CGU et des mentions légales:</h3>
            <div id="cas">

                  <div class="info">
                    <p>
                      Pour modifier une information concernant la société DomHome sur le site, veuillez remplir le formulaire.
                    </p>
                  </div>
                  <div class="form">
                    <form method="post" action="" id="info">
                      <label>CGU: </label><br />
                      <textarea class="quesrep" name="cgu"><?php echo $cgu['desc_maintenance'];?></textarea><br />
                      <label>Mentions légales: </label><br />
                      <textarea class="quesrep" name="mentions"><?php echo $mentions['desc_maintenance'];?></textarea><br />
                      <input type="submit" value="Modifier"  name="modif" />
                      <center>
                        <?php if (isset($info10)){
                              echo $info10;}
                             ?>
                      </center>
                    </form>
                  </div>

            </div>

      </article>



    <?php include("footer.php") ?>
    </body>

          <script src="../javaScript/verificationadmin.js" type="text/javascript"></script>


</html>
