$(document).ready(function() { 
 
 $('.submit-ajax-form').click(function(){
    
   var _this = $(this);
   var activeForm = _this.parents('form');
   
   var options = {
     beforeSend: function() {
       _this.prop('disabled', true).text('Submitting ...');
     },
     success: function(data) {
       _this.prop('disabled', false).text('Submit');
       location.reload();
     },
     error: function( response )
     {
          _this.prop('disabled', false).text('Submit');
         if (response.responseJSON === undefined || response.responseJSON === null) {
           alert(response.responseText);
         }else{
           $.each(response.responseJSON.errors, function(key, index){
               if ( activeForm.find('input[name="'+key+'"]') )
               {
                 $('.error-'+key).remove();
                 activeForm.find('input[name="'+key+'"]').addClass('input-error').parent().append('<p class="error error-'+key+'">'+index[0]+'</p>');
                 activeForm.find('textarea[name="'+key+'"]').addClass('input-error').parent().append('<p class="error error-'+key+'">'+index[0]+'</p>');
               }
           });
         }
     }
   };
    
  activeForm.ajaxForm(options).submit();
 });
}); 