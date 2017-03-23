<article id="post-<?php the_ID(); ?>" <?php post_class('section'); ?>>
  <div class="container">
    <?php if ( '' !== get_the_post_thumbnail() ) {?>
      <div class="post-thumbnail col-md-4">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'identityexperts-archive-image' ); ?>
        </a>
      </div><!-- .post-thumbnail -->
    <?php } else{ ?>
      <div class="default-post-thumbnail col-md-4">
        <a href="<?php the_permalink(); ?>">
          <img src="http://placehold.it/333x195">
        </a>
      </div>
    <?php } ?>
  	<div class="entry-content col-md-8">
      <header class="entry-header">
        <?php
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">',
        '</a></h2>' );
        ?>
      </header><!-- .entry-header -->
  		<?php
  			the_excerpt();
  			wp_link_pages( array(
  				'before'      => '<div class="page-links">' . __( 'Pages:', 'identityexperts' ),
  				'after'       => '</div>',
  				'link_before' => '<span class="page-number">',
  				'link_after'  => '</span>',
  			) );
  		?>
  	</div><!-- .entry-content -->
  </div>
</article><!-- #post-## -->
