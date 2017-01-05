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
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && !is_front_page() ) ) ) {
		$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		$featured_img = $featured_image[0];
	  $fea_style =  'background: linear-gradient(rgba(0,0,0,.15),rgba(0,0,0,.15)),url('.$featured_img.') center center';
	} else {
		$fea_style = "";
	}
	?>
	<?php if(is_front_page()) {
		get_template_part( 'template-parts/slider' );
	} else { ?>
	<div class="hero" style="<?php echo $fea_style;?>" >
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
	<?php } ?>
	<div class="site-content-contain">
		<div id="content" class="site-content">
