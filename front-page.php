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
<section class="home-section-two section grey">
	<div class="container">
		<div class="row">
			<?php dynamic_sidebar('home-two'); ?>
		</div>
	</div>
</section>
<?php get_footer();
