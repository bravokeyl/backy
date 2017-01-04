<?php
if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' )
	 || is_active_sidebar( 'footer-4' ) ) :
?>
	<aside class="row widget-area" role="complementary">
		<?php
		if ( is_active_sidebar( 'footer-2' ) ) { ?>
			<div class="col-sm-3 col-xs-6 widget-column footer-widget-1">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'footer-2' ) ) { ?>
			<div class="col-sm-3 col-xs-6 widget-column footer-widget-2">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'footer-3' ) ) { ?>
			<div class="col-sm-3 col-xs-6 widget-column footer-widget-3">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'footer-4' ) ) { ?>
			<div class="col-sm-3 col-xs-6 widget-column footer-widget-4">
				<?php dynamic_sidebar( 'footer-4' ); ?>
			</div>
		<?php } ?>
	</aside><!-- .widget-area -->

<?php endif; ?>
