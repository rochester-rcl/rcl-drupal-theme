
(function ($) {
$(window).scroll(function() {
    if ($(this).scrollTop() > 100){
        $('.uofrbar').addClass("up");
        $('.navbar-fixed-top').addClass("up");
    }
    else{
        $('.uofrbar').removeClass("up");
        $('.navbar-fixed-top').removeClass("up");
    }
});
})(jQuery);
