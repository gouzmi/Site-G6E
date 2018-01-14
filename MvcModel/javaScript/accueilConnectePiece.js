function openPiece(evt, id) {
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
}
