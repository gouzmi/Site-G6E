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

            <div>
              <p>
                Pour ajouter un administrateur,</br> vous devez rentrez l'email que ce dernier utilisera à chaque connexion.
              </p>
            </div>
            <div class="form">
              <form method="post" action="" id="admin">
                <label>email : </label><br />
                <input type="email" name="mail" placeholder="admin@gmail.com" required/>
                <input type="submit" value="Ajouter" name="ajoutadmin" />
              </form>
            </div>

          </div>

        <h3>Ajout d'un client :</h3>
          <div id="cas">

            <div>
              <p>
                Pour ajouter un client dans la table précommande afin qu'il puisse s'inscrire,</br> vous devez rentrez l'email que ce dernier utilisera à chaque connexion.
              </p>
            </div>
            <div class="form">
              <form method="post" action="" id="client">
                <label>email : </label><br />
                <input type="email" name="mail" placeholder="client@gmail.com" required/>
                <input type="submit" value="Ajouter" name="ajoutclient" />
              </form>
            </div>

          </div>
      </article>


    </div>
    <?php include("footer.php") ?>
    </body>


</html>
