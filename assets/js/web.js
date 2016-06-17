var ajax_form = function(id_form,fail_info,success_info, callback){
    $(id_form).on('submit', function(e) {
    e.preventDefault();

    var obj = $(this),
    f = $(fail_info),
    s = $(success_info);

    s.slideUp('fast');
    f.slideUp('fast');
    // s.click( function(){ $(this).slideUp('fast'); });
    f.click( function(){ $(this).slideUp('fast'); });

    $.ajax({
      dataType: "json",
      type: 'POST',
      url: obj.attr('action'),
      data: obj.serialize(),
       success: function(r) {
         if(r.status == true || r.status == true){
            //console.log('data ok');
             s.show();
         }else{
            //console.log('data error');
            if(r.errors){
              f.html(r.errors).slideDown();
            }else{
              f.html('<p>No hemos podido procesar los datos, Intente en un momento.</p>').slideDown();
            }
         }
         if($.isFunction(callback)){
          callback(r);
         }
       }
    });
  });
};



$(document).ready(function() {
  ajax_form('#contact-form','#contact-error','#contact-success', function(r){if( r.status ==true){ $('#contact-form').fadeOut();  $('#contact-form').reset(); } });  
});
