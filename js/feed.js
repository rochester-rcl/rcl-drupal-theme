

(function ($) {
  $('.views-row-1  div').each(function() {
      if ($(this).find('img').length) {
          $('.views-row-1').addClass("yo");
      }
      //else {
      //    $('.views-row-1').removeClass("yo");
    //  }
}
});
})(jQuery);
