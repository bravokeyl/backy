(function( $ ) {
  var topmenuparent = $('.top-menu .menu-item-has-children');
  topmenuparent.on('click',function(e){
    //e.preventDefault();
    //e.stopPropagation();
    $(document).click(function closeMenu (e){
        if(!$(event.target).closest('.top-menu .menu-item-has-children').length){
            topmenuparent.removeClass('on');
        } else {
            $(document).one('click', closeMenu);
        }
    });
    $(this).toggleClass('on');
  });
})( jQuery );
