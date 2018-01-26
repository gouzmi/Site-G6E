var formValidClient = document.getElementById('ajouterClient');
var mailClient = document.getElementById('mailClient');
var missMailClient = document.getElementById('missMailClient');
var mailClientValid = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;


formValidClient.addEventListener('click', validationClient);

function validationClient(event){
    //Si le champ est vide
    missMailClient.textContent = '';

    if (mailClient.validity.valueMissing) {
      event.preventDefault();
      missMailClient.textContent = 'Adresse mail manquante';
      missMailClient.style.color = 'red';
    }
    else if (mailClientValid.test(mailClient.value) == false){
        event.preventDefault();
        missMailClient.textContent = 'Format incorrect';
        missMailClient.style.color = 'orange';
        }
      }

var formValidSAV = document.getElementById('ajouterSAV');
var mailSAV = document.getElementById('mailSAV');
var missMailSAV = document.getElementById('missMailSAV');
var mailSAVValid = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;


formValidSAV.addEventListener('click', validationSAV);

function validationSAV(event){
    //Si le champ est vide
    missMailSAV.textContent = '';

    if (mailSAV.validity.valueMissing) {
      event.preventDefault();
      missMailSAV.textContent = 'Adresse mail manquante';
      missMailSAV.style.color = 'red';
    }
    else if (mailSAVValid.test(mailSAV.value) == false){
      event.preventDefault();
      missMailSAV.textContent = 'Format incorrect';
      missMailSAV.style.color = 'orange';
    }
    }



var formValidClientS = document.getElementById('supprimerClient');
var mailClientS = document.getElementById('supprimerclient');
var missMailClientS = document.getElementById('missMailClientS');
var mailClientSValid = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;


formValidClientS.addEventListener('click', validationClientS);

function validationClientS(event){
    //Si le champ est vide
    missMailClientS.textContent = '';

    if (mailClientS.validity.valueMissing) {
      event.preventDefault();
      missMailClientS.textContent = 'Adresse mail manquante';
      missMailClientS.style.color = 'red';
    }
    else if (mailClientSValid.test(mailClientS.value) == false){
      event.preventDefault();
      missMailClientS.textContent = 'Format incorrect';
      missMailClientS.style.color = 'orange';
    }
    }

var formValidClientView = document.getElementById('accederClientView');
var mailClientView = document.getElementById('mailClientView');
var missMailClientV = document.getElementById('missMailClientV');
var mailClientViewValid = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;


formValidClientView.addEventListener('click', validationClientView);

function validationClientView(event){
    //Si le champ est vide
    missMailClientV.textContent = '';

    if (mailClientView.validity.valueMissing) {
      event.preventDefault();
      missMailClientV.textContent = 'Adresse mail manquante';
      missMailClientV.style.color = 'red';
    }
    else if (mailClientViewtValid.test(mailClientView.value) == false){
      event.preventDefault();
      missMailClientV.textContent = 'Format incorrect';
      missMailClientV.style.color = 'orange';
    }
    }
