<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop, $col_class;

$page_layout = composer_get_option_value( 'shop_sidebar', 'full-width' );
$selected_sidebar_replacement = composer_get_option_value( 'shop_select_sidebar', 0 );

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 3 );
}

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if( $page_layout == 'right-sidebar' || $page_layout == 'left-sidebar' ){
	$classes = array('col-md-4');
}else{
	$classes = array('col-md-3');
}

$classes[] = 'load-element ';

?>

<div <?php post_class( $classes ); ?>>
	<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	//do_action( 'woocommerce_before_shop_loop_item_title' );
	?>

	<?php

	echo '<div class="woo-product-item">'; //Product Container

	echo '<div class="product-img amz-product-thumbnail">';
					woocommerce_show_product_loop_sale_flash();

					$temp_title = get_the_title($post->ID); //title
					$temp_link = get_permalink($post->ID); //permalink
					global $smof_data;

					$shop_width = 398; $shop_height = 494;

					$img = $image_thumb_url[0] = "";

					if ( has_post_thumbnail() ) {

						$amz_image_thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id (), 'thumbnail');
						$amz_image_url = $amz_image_thumb_url[0];

						if( ! empty( $amz_image_url ) ) {

							//$image_url = aq_resize( $amz_image_url, $shop_width, $shop_height, true, true );

							// if( $image_url ) {
							// 	echo '<img alt="" src="' . $image_url . '" width="' . $shop_width . '" height="' . $shop_height . '">';
							// } else {
								echo '<img alt="" src="' . $amz_image_thumb_url[0] . '" width="' . $amz_image_thumb_url[1] . '" height="' . $amz_image_thumb_url[2] . '">';
							// }

						}


						// $amz_gallery_ids = $product->get_gallery_attachment_ids();
						//
						// if ( $amz_gallery_ids ) {
						// 	$amz_image_thumb_url = wp_get_attachment_image_src( $amz_gallery_ids[0], 'full');
						// 	$amz_image_url = $amz_image_thumb_url[0];
						//
						// 	if( ! empty( $amz_image_url ) ) {
						// 		$amz_image_url = aq_resize( $amz_image_url, $shop_width, $shop_height, true, true );
						// 	}
						//
						// 	if( $amz_image_url ) {
						// 		echo '<img alt="" class="amz-image-swap" src="' . $amz_image_url . '" width="' . $shop_width . '" height="' . $shop_height . '">';
						// 	} else {
						// 		echo '<img alt="" class="amz-image-swap" src="' . $amz_image_thumb_url[0] . '" width="' . $amz_image_thumb_url[1] . '" height="' . $amz_image_thumb_url[2] . '">';
						// 	}
						//
						// }

					} else {
						echo '<img src="'. esc_url( '//placehold.it/'.$shop_width.'x'.$shop_height ).'" alt="">';
					}

					echo '<div class="product-hover product-icons">
							';
						//echo woocommerce_template_loop_add_to_cart();

					echo '</div>
						';
			echo '</div>';




		//Product Name and content
		$output = '<div class="product-content clearfix">'; //Product Content
			//Product name

			$output .= '<h3 class="title"> <a href='. esc_url( $temp_link ) .'> '.esc_html( $temp_title ).'</a></h3>'; //title

		echo $output; // html fragment properly escaped above

?>

<?php

	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	//do_action( 'woocommerce_shop_loop_item_title' );


	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */

	woocommerce_template_loop_price();
	echo '<div class="">';
	echo woocommerce_template_loop_add_to_cart();
	echo '</div>';
	do_action( 'woocommerce_after_shop_loop_item_title' );


			//woocommerce_template_loop_add_to_cart();

				$output = '</div>'; //End of Product Content

			$output .= '</div>'; //End of Product Container

		echo $output; // just few closing divs

	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</div>
