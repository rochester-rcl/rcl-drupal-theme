
(function ($) {
$(window).scroll(function() {
    if ($(this).scrollTop() > 40){
        $('.navbar').addClass("fixed");
    }
    else{
        $('.navbar').removeClass("fixed");
    }
});
})(jQuery);
