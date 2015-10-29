
(function ($) {
$(window).scroll(function() {
<<<<<<< HEAD
<<<<<<< HEAD
    if ($(this).scrollTop() > 34){
=======
    if ($(this).scrollTop() > 40){
>>>>>>> parent of 81956bd... Changed JS for the header to make it default position
=======
    if ($(this).scrollTop() > 30){
>>>>>>> parent of ba96fa7... More additions to template.
        $('.navbar').addClass("fixed");
    }
    else{
        $('.navbar').removeClass("fixed");
    }
});
})(jQuery);
