function statut(id){
    if(id == "SalleDeBain"){
        document.getElementById("pageStatut").innerHTML = "10";
    }else if (id == "SalleDeSejour"){
        document.getElementById("pageStatut").innerHTML = "20";
    }else if (id == "Salon"){
        document.getElementById("pageStatut").innerHTML = "30";
    }else if (id == "SalleManger"){
        document.getElementById("pageStatut").innerHTML = "40";
    }else if (id == "Chambre"){
        document.getElementById("pageStatut").innerHTML = "50";
    }else if (id == "Terrasse"){
        document.getElementById("pageStatut").innerHTML = "60";
    }else if (id == "Cuisine"){
        document.getElementById("pageStatut").innerHTML = "70";
    }else if (id == "Bureau"){
        document.getElementById("pageStatut").innerHTML = "80";
    }else if (id == "Garage"){
        document.getElementById("pageStatut").innerHTML = "90";
    }

}
function myFunction(x) {
    x.classList.toggle("change");
    if (document.getElementById('menu').getAttribute('class') == "no" )
    {
      document.getElementById('menu').className = "yes";
      document.getElementById('corps').style.backgroundColor = "rgba(0,0,0,0.4)";
      document.getElementById("corps").style.marginLeft = "300px";
    }
    else
    {
      document.getElementById('menu').className = "no";
      document.getElementById('corps').style.backgroundColor = "";
      document.getElementById("corps").style.marginLeft = "";
    }
}
