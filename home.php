<?php
get_header('builder'); ?>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/section');

			endwhile;

			// the_posts_pagination( array(
			// 	'prev_text' => '<span>Previous</span><span class="screen-reader-text">' . __( 'Previous page', 'identityexperts' ) . '</span>',
			// 	'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'identityexperts' ) . '</span><span>Previous</span>'),
			// 	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'identityexperts' ) . ' </span>',
			// ) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
