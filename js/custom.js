(function( $ ) {

	'use strict';
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    stagePadding: 0,
    navText: [],
    autoplay: true,
    responsiveClass: true,
    items: 1,
    responsive: {
      0: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });

})(jQuery);
