function initCapteurSwitchs() {
  $(document).on('change', '.switch input', function(e) {
    // Requete ajax de type JSON, il faut bien utiliser : type:'post', 'dataType:'json' et data:JSON.stringify(XXX)
    $.ajax({
      type:'post',
      dataType: 'json',
      url: '../api/updateCapteur',
      data:  JSON.stringify({
        capteurId: $(this).attr('data-id-capteur'),
        fonctionnement: !!this.checked
      }),
      success: function() {

      },
    });
  })
}


initCapteurSwitchs();
