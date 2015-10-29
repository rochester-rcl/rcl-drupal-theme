
(function ($) {
$(window).scroll(function() {
<<<<<<< HEAD
    if ($(this).scrollTop() > 34){
=======
    if ($(this).scrollTop() > 40){
>>>>>>> parent of 81956bd... Changed JS for the header to make it default position
        $('.navbar').addClass("fixed");
        $('.nav-spacer').addClass("show");
    }
    else{
        $('.navbar').removeClass("fixed");
        $('.nav-spacer').removeClass("show");
    }
});
})(jQuery);
