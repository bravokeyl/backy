(function( $ ) {
  var topmenuparent = $('.top-menu .menu-item-has-children');
  topmenuparent.on('click',function(){
    $(this).toggleClass('open');
  });
})( jQuery );
