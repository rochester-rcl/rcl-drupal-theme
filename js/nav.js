
(function ($) {
$(window).scroll(function() {
    if ($(this).scrollTop() > 100){
        $('.navbar-fixed-top').addClass("up");
    }
    else{
        $('.navbar-fixed-top').removeClass("up");
    }
});
})(jQuery);
