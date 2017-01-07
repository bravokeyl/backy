(function( $ ) {
  var topmenuparent = $('.top-menu .menu-item-has-children');
  topmenuparent.on('click',function(){
    $(this).toggleClass('open');
    // $(this).find('.sub-menu').show();
  });
  topmenuparent.on('mouseleave',function(){
    // $(this).find('.sub-menu').hide();
    //$(this).removeClass('open');
  });
})( jQuery );
