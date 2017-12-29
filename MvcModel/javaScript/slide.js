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
