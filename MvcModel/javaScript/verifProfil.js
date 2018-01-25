var formValid = document.getElementById('modifier');
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
var mdp2 = document.getElementById('pass');
var missMdp2 = document.getElementById('missMdp2');


formValid.addEventListener('click', validation);

function validation(event){
    //Si le champ est vide
    missNom.textContent = '';
    missPrenom.textContent = '';
    missAdresse.textContent = '';
    missCp.textContent = '';
    missVille.textContent = '';
    missTel.textContent = '';
    missMail.textContent = '';
    missMdp.textContent = '';
    missMdp2.textContent = '';
    if (nom.validity.valueMissing){
     //   document.getElementById('Formulaire')innerHTML = 'test';
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
