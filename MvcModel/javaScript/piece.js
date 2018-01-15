function openPiece(evt, id) {
    event.preventDefault();

    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.querySelectorAll('#right .tabcontent');
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].className = tabcontent[i].className.replace(/\bactive\b/g,'');
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(/\bactive\b/g, "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(id).className+=" active";
    evt.currentTarget.className += " active";

    // Ajax call only if never call
    var btn = evt.currentTarget;
    if(!btn.ajaxDone) {
      var content = document.getElementById(id);
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          btn.ajaxDone = true;
          content.innerHTML = this.responseText;
        }
      };
      xhttp.open("GET",  btn.href+'&ajax', true);
      xhttp.send();
    }
}
