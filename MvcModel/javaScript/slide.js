function myFunction(x) {
    x.classList.toggle("change");
    if (document.getElementById('menu').getAttribute('class') == "no" )
    {
      document.getElementById('menu').className = "yes";
      document.getElementById('menu').style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    else
    {
      document.getElementById('menu').className = "no";
      document.getElementById('menu').style.backgroundColor = "";
    }
}
