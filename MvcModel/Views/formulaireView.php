<html>
    <head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="../Css/cssformulairee.css"/>
    <link rel="stylesheet" href="../Css/headerfooterr.css"/>
    <script src="https://use.fontawesome.com/3aa3fe383f.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/miniature.png" />
  <!--  <script src="verificationFormulaire.js" type="text/javascript"></script> -->
    </head>


    <body>
<<<<<<< HEAD

=======
      <?php include("header.php") ?>
>>>>>>> 2dfe1780d9e361653bfaa435394801a543d73bb8
    <div class="section">
      <div class= "entete"> <p id="titre"> Inscrivez-vous !</p>

        <p id="erreur">  <?php  $attention="Avant toute inscription il est nécessaire d'avoir passé commande sur notre site<br> <a href=''>DomHomeCommande.fr</a> ";
            if (isset($erreur)) {echo $erreur;}
            else {echo $attention;}
         ?>
       </p></div>

        <form method = "post" action=""   id= "Formulaire" name="Formulaire" >
        <span id='missNom'></span>
        <input type="text" name="nom"  placeholder="Nom" required id="nom">
        <span id='missPrenom'></span>
        <input type="text" name="prenom" placeholder="Prenom" required id="prenom">
        <span id='missAdresse'></span>
        <input type="text" name="adresse" placeholder="Adresse"  required id="adresse">
        <span id='missCp'></span>
        <input type="text" name="cp"  placeholder="Code Postal" required title="" id="cp">
        <span id='missVille'></span>
        <input type="text" name="ville" placeholder="Ville"required id="ville">
        <span id='missTel'></span>
        <input type="text" name="tel"required title="Veuillez entrer un numéro  Ex: 0123456789" placeholder="Numéro de téléphone" id="tel">
        <span id='missMail'></span>
        <input type="text" name="mail" placeholder="Adresse email" required title="Veuillez entrez l'adresse email utilisée lors de la commande" id="email">
        <span id='missMdp'></span>
        <input type="text" name="mdp"  placeholder="Mot de passe" required title="6 caractères minimun en majuscule et minuscule et un caractère spécial"  id="passe">
        <span id='missMdp2'></span>
        <input type="text" name="mdp2" placeholder="Confirmation Mot de passe"required id="pass">
        <input type="submit" name="caseconditions" value="S'inscrire" id="inscrire">

        </form>
      </div>

      <script>
              var formValid = document.getElementById('inscrire');
              var nom = document.getElementById('nom');
              var missNom = document.getElementById('missNom');
              var nomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
              var prenom = document.getElementById('prenom');
              var missPrenom = document.getElementById('missPrenom');
              var prenomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
              var adresse = document.getElementById('adresse');
              var missAdresse = document.getElementById('missAdresse');
              var adresseValid = /^[0-9]{0,3}[a-zA-ZÀ-ÖØ-öø-ÿ\s]+$/;
              var cp = document.getElementById('cp');
              var missCp = document.getElementById('missCp');
              var cpValid = /^[0-9]{5}$/||/^2(A||B)[0-9]{3}$/;
              var ville = document.getElementById('ville');
              var missVille = document.getElementById('missVille');
              var villeValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
              var tel = document.getElementById('tel');
              var missTel = document.getElementById('missTel');
              var telValid = /^0[1-9][0-9]{8}$/;
              var mail = document.getElementById('email');
              var missMail = document.getElementById('missMail');
              var mailValid = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
              var mdp = document.getElementById('passe');
              var missMdp = document.getElementById('missMdp');
              var mdpValid = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}/;
              //[A-ZÉÈÎÏ]{1,}||[a-zéèêàçîï]{1,}||[0-9]{1,}||.{0,}/;
              var mdp2 = document.getElementById('pass');
              var missMdp2 = document.getElementById('missMdp2');


              formValid.addEventListener('click', validation);

              function validation(event){
                  //Si le champ est vide
                  if (nom.validity.valueMissing){
                      event.preventDefault();
                      missNom.textContent = 'Nom manquant';
                      missNom.style.color = 'red';}
                  else if (nomValid.test(nom.value) == false){
                      event.preventDefault();
                      missNom.textContent = 'Format incorrect';
                      missNom.style.color = 'orange';
                      }
                  if (prenom.validity.valueMissing) {
                    event.preventDefault();
                    missPrenom.textContent = 'Prénom manquant';
                    missPrenom.style.color = 'red';
                  }
                  else if (prenomValid.test(prenom.value) == false){
                      event.preventDefault();
                      missPrenom.textContent = 'Format incorrect';
                      missPrenom.style.color = 'orange';
                      }
                  if (adresse.validity.valueMissing) {
                    event.preventDefault();
                    missAdresse.textContent = 'Adresse manquante';
                    missAdresse.style.color = 'red';
                  }
                  else if (adresseValid.test(adresse.value) == false){
                      event.preventDefault();
                      missAdresse.textContent = 'Format incorrect';
                      missAdresse.style.color = 'orange';
                      }
                  if (cp.validity.valueMissing) {
                    event.preventDefault();
                    missCp.textContent = 'Code postal manquant';
                    missCp.style.color = 'red';
                  }
                  else if (cpValid.test(cp.value) == false){
                      event.preventDefault();
                      missCp.textContent = 'Format incorrect';
                      missCp.style.color = 'orange';
                      }
                  if (ville.validity.valueMissing) {
                    event.preventDefault();
                    missVille.textContent = 'Ville manquante';
                    missVille.style.color = 'red';
                  }
                  else if (villeValid.test(ville.value) == false){
                      event.preventDefault();
                      missVille.textContent = 'Format incorrect';
                      missVille.style.color = 'orange';
                      }
                  if (tel.validity.valueMissing) {
                    event.preventDefault();
                    missTel.textContent = 'Numéro de téléphone manquant';
                    missTel.style.color = 'red';
                  }
                  else if (telValid.test(tel.value) == false){
                      event.preventDefault();
                      missTel.textContent = 'Format incorrect';
                      missTel.style.color = 'orange';
                      }
                  if (mail.validity.valueMissing) {
                    event.preventDefault();
                    missMail.textContent = 'Adresse mail manquante';
                    missMail.style.color = 'red';
                  }
                  else if (mailValid.test(mail.value) == false){
                      event.preventDefault();
                      missMail.textContent = 'Format incorrect';
                      missMail.style.color = 'orange';
                      }
                  if (mdp.validity.valueMissing){
                    event.preventDefault();
                    missMdp.textContent = 'Mot de passe manquant';
                    missMdp.style.color = 'red';
                  }
                  else if (mdpValid.test(mdp.value) == false){
                //    document.getElementById('Formulaire')innerHTML = 'test';
                      event.preventDefault();
                      missMdp.textContent = 'Format incorrect';
                      missMdp.style.color = 'orange';
                      }
                  if (mdp2.validity.valueMissing){
                    event.preventDefault();
                    missMdp2.textContent = 'Confirmation du mot de passe manquant';
                    missMdp2.style.color = 'red';
                  }
                  else if (mdp.value != mdp2.value) {
                    event.preventDefault();
                    missMdp2.textContent = 'Confirmation du mot de passe incorrecte';
                    missMdp2.style.color = 'orange';

                  }
                }


</script>



    </body>
    <?php include("footer.php") ?>

</html>
