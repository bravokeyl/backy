<?php
get_header(); ?>
<?php dynamic_sidebar('home-middle'); ?>
<main id="main" class="site-main container" role="main">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/page/content', 'page' );

	endwhile; // End of the loop.
	?>
</main><!-- #main -->

<?php get_footer();
