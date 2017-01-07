(function( $ ) {
  var topmenuparent = $('.top-menu .menu-item-has-children');
  topmenuparent.on('mouseenter',function(){
    console.log($(this).find('.sub-menu'));
    $(this).find('.sub-menu').show();
  });
  topmenuparent.on('mouseleave',function(){
    console.log("Mouse Leaving");
    $(this).find('.sub-menu').hide();
  });
})( jQuery );
