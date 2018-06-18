function initActionneurswitchs() {
  $(document).on('change', '.switch input', function(e) {
    // Requete ajax de type JSON, il faut bien utiliser : type:'post', 'dataType:'json' et data:JSON.stringify(XXX)
    $.ajax({
      type:'post',
      dataType: 'json',
      url: '../api/updateActionneur',
      data:  JSON.stringify({
        actionneurId: $(this).attr('data-id-actionneur'),
        fonctionnement: !!this.checked
      }),
      success: function() {

      },
    });
  })
}


initActionneurswitchs();
