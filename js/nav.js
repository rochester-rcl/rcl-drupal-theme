
(function ($) {
$(window).scroll(function() {
    if ($(this).scrollTop() > 30){
        $('.navbar').addClass("fixed");
    }
    else{
        $('.navbar').removeClass("fixed");
    }
});
})(jQuery);
