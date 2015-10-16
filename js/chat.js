(function ($) {
    $(document).ready(function(){
        var $chatToggle = $('.chat-toggle');
        if($chatToggle.length){
          var status = $chatToggle.data("chat-status");
          if(status && status == 'available'){
            $chatToggle.removeClass("chat-offline")
            $chatToggle.text("Chat Online");
          }
          else{
            $chatToggle.addClass("chat-offline")
            $chatToggle.text("Chat Offline")
            $chatToggle.on('click', function(){return false;});
          }
        }

    });
})(jQuery);
