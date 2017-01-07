(function( $ ) {
  var topmenuparent = $('.top-menu .menu-item-has-children');
  topmenuparent.on('mouseenter',function(){
    $(this).addClass('open');
    // $(this).find('.sub-menu').show();
  });
  topmenuparent.on('mouseleave',function(){
    // $(this).find('.sub-menu').hide();
    $(this).removeClass('open');
  });
})( jQuery );
