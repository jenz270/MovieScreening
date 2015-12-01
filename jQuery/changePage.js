$('form').live('submit', function(){
      $.post($(this).attr('action'), $(this).serialize(), function(response){
            // do something here on success
      },'json');
      return false;
   });