
(function ($) {
$(window).scroll(function() {
    if ($(this).scrollTop() > 34){
        $('.navbar').addClass("fixed");
        $('.nav-spacer').addClass("show");
    }
    else{
        $('.navbar').removeClass("fixed");
        $('.nav-spacer').removeClass("show");
    }
});
})(jQuery);
