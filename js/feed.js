


(function ($) {
  $('.views-row').each(function() {
      if (!$(this).find('img').length) {
          $(this).addClass("no-img");
      }
});
})(jQuery);
