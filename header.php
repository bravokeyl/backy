<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site wrap">
	<header id="masthead" class="site-header" role="banner">
		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<?php get_template_part( 'template-parts/header/nav' ); ?>
		<?php endif; ?>
	</header>

	<?php
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! identityexperts_is_frontpage() ) ) ) :
		echo '<div class="single-featured-image-header">';
		the_post_thumbnail( 'identityexperts-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>
	<div class="hero our-team">
    <div class="container">
    	<div class="row">
    		<div class="col-sm-8">
    			<div class="sub-title"></div>
    			<h1><?php the_title();?></h1>
    			<p><?php the_excerpt();?></p>
    		</div>
    	</div>
    </div>
  </div>
	<div class="site-content-contain">
		<div id="content" class="site-content">
