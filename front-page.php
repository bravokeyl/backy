<?php
get_header(); ?>
<section class="home-top-section section grey">
	<div class="container">
		<div class="row">
			<?php dynamic_sidebar('home-top'); ?>
		</div>
	</div>
</section>
<?php dynamic_sidebar('home-middle'); ?>
<?php get_footer();
