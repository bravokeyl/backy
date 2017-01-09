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
	} elseif(is_page_template('template-team.php')) { ?>
	<div class="hero team-profile">
    <div class="container">
    	<div class="row">
    		<div class="col-sm-3 team-img">
    			<img src="<?php echo $featured_img;?>" class="img-responsive team-profile-img">
    		</div>
    		<div class="col-sm-8 col-sm-offset-1">
    			<div class="sub-title"><?php echo get_post_meta( get_the_ID(), '_ide_job_title', true );?></div>
    			<h1><?php the_title();?></h1>
					<?php
					$qualifications = get_post_meta( get_the_ID(), '_ide_qualifications', true );
					if($qualifications){
					?>
    			<p class="qualifications"><strong><?php _e('Qualifications:');?> </strong><?php echo $qualifications;?></p>
					<?php } ?>
    		</div>
    	</div>
    </div>
  </div>
	<?php } else {?>

	<?php } ?>
	<div class="site-content-contain">
		<div id="content" class="site-content">
