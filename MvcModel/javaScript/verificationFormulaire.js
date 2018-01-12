        <form method = "post" action="formulaireModel.php" name= "Formulaire" onsubmit="return validerForm()">
        <label for="login">Login :</label> <input type="text" name="login"><br>
        <label for="mdp">Password:</label> <input type="text" name="mdp"><br>
        <label for="mdp2">Password(repeat) :</label> <input type="text" name="mdp2"><br>
        <input type="submit" name="casecondition" value="Envoyer" id="inscrire">

function validerForm() {
          var nom = document.forms["Formulaire"]["nom"].value;
          var prenom = document.forms["Formulaire"]["prenom"].value;
          var adresse = document.forms["Formulaire"]["adresse"].value;
          var cp = document.forms["Formulaire"]["cp"].value;
          var ville = document.forms["Formulaire"]["ville"].value;
          var tel = document.forms["Formulaire"]["tel"].value;
          var mail = document.forms["Formulaire"]["mail"].value;
          var mdp = document.forms["Formulaire"]["mdp"].value;
          var mdp2 = document.forms["Formulaire"]["adresse"].mdp2;

          if (nom == "")||(prenom == "")||(adresse == "")||(cp == "")(ville == "")||(tel == "")||(mail == "")||(mdp == "")||(mdp2 == "") {
              alert("Il faut remplir tous les champs");
              return false;
          }
          else {
            if (!nom.match(/^[A-Za-zÀ-ÖØ-öø-ÿ]$/)) {
              alert("Le nom ne doit contenir que des lettres");
              return false;
            }
            else if (!prenom.match(/^[A-Za-zÀ-ÖØ-öø-ÿ]$/)) {
              alert("Le prénom ne doit contenir que des lettres");
              return false;
            }
            else if (!adresse.match(/^[\p{L}-\p{N}À-ÖØ-öø-ÿ\s]+$/)) {
              alert("Veillez entrer une adresse valide");
              return false;
            }
            else if (!cp.match(/^[0-9]{5}$)/|(/^2(A|B)[0-9]{3}$/)) {
              alert("Veillez entrer un code postal valide");
              return false;
            }
            else if (!ville.match(/^[p{L}-p{N}À-ÖØ-öø-ÿ\s]+$/)) {
              alert("La ville ne doit contenir que des lettres");
              return false;
            }
            else if (!tel.match(/^0[1-9][0-9]{8}$/)) {
              alert("Veillez entrer un numéro de téléphone conforme");
              return false;
            }
            else if (mail.match(/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/)) {
              alert("Veillez entrer une adresse mail conforme");
              return false;
            }
            else if (mdp.length < 6 || !mdp.match(/^?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$/)) {
              alert("Le mot de passe doit contenir au minimum 6 caractère dont une majuscule, une minuscule, un chiffre et un caractère spécial");
              return false;
            }
            else if (mdp != mdp2) {
              alert("Les deux mots de passe sont différents");
              return false;
            }
            else {
              alert("Le compte à bien été créé");
              return true;
            }
            }
          }
        }
