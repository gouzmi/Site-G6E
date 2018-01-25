var formValid = document.getElementById('acceder');
var mail = document.getElementById('mail');
var missMail = document.getElementById('missMail');
var mailValid = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
var mdp = document.getElementById('password');
var missMdp = document.getElementById('missMdp');
var mdpValid = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}/;



formValid.addEventListener('click', validation);

function validation(event){
    //Si le champ est vide
    missMail.textContent = '';
    missMdp.textContent = '';

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
      }
