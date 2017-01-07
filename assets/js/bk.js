(function( $ ) {
  var topmenuparent = $('.top-menu .menu-item-has-children');
  topmenuparent.on('click',function(e){
    e.preventDefault();
    e.stopPropagation();
    $(document).one('click', function closeMenu (e){
        if(topmenuparent.has(e.target).length === 0){
            topmenuparent.removeClass('on');
        } else {
            $(document).one('click', closeMenu);
        }
    });
    $(this).toggleClass('on');
  });
})( jQuery );
