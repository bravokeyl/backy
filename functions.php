<?php
function bk_enqueue_scripts () {
	if (!is_admin()) {

		wp_register_style('portablsink-style', get_stylesheet_directory_uri() . '/bk.css', array('composer-plugins-stylesheet','composer-custom-css'), '1.0');

		wp_enqueue_style('portablsink-style');
		if(!is_front_page()) {
	    wp_enqueue_script ('bk-financing', 'https://vendor1.quickspark.com/one-liner.js?vc=254tqzq');
	  }
	}
}
add_action('wp_enqueue_scripts', 'bk_enqueue_scripts');

function bk_paypal_credit () {
	echo '<img src="'. get_stylesheet_directory_uri() .'/paypal.png" alt="bill-me-later" width="180" height="150" class="size-full paypal-billme" />';
}
add_action ( 'woocommerce_single_product_summary', 'bk_paypal_credit', 30);

add_filter( 'woocommerce_sale_price_html', 'bk_custom_sales_price', 10, 2 );

function bk_custom_sales_price( $price, $product ) {
    $yousave = round( ( $product->regular_price - $product->sale_price ) );
    return $price . sprintf( __('<div class="bk-price-save"><span class="saved">You save $%s</span></div>', 'woocommerce' ), $yousave );
}

add_filter('woocommerce_product_categories_widget_args', 'bk_show_empty_categories');

function bk_show_empty_categories($cat_args){
	$cat_args['hide_empty']=0;
	return $cat_args;
}

add_filter( 'woocommerce_product_tabs', 'bk_remove_product_tabs', 98 );
function bk_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );  	// Remove the additional information tab
    return $tabs;
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

add_action('wp_footer','bk_review_widget',25);
function bk_review_widget() {?>
	<script type='text/javascript'> var ucode='aHR0cHM6Ly9yZXZpZXd3aWRnZXQua3BpYW5hbHlzZXIuY29tLw=='; var code='ebdfb6cf47af6c4ac85b864f4acc3232'; var _rewF = document.createElement('script'); _rewF.type = 'text/javascript'; _rewF.async = true; _rewF.src = "https://reviewwidget.kpianalyser.com/js/reviews.js"; (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(_rewF); </script>
<?php }

add_action('woocommerce_archive_description','bk_wpv_wooimage',7);
function bk_wpv_wooimage(){
	echo "<h2 class='bk-cat-title'>".get_the_title()."</h2>";
  if (is_product_category( array ( 14, 15, 17, 18, 21, 22, 23, 24, 25, 26, 27, 40, 41, 42, 43, 20))){
      global $wp_query;
      $cat = $wp_query->get_queried_object();
      $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
      $image = wp_get_attachment_url( $thumbnail_id );
			if($image) {
				echo '<img src="'.$image.'" class="img-responsive" alt="mobile sink unit" width="667" height="250" />';
			}
  }
}

add_action('woocommerce_archive_description','bk_woo_category_images',8);
function bk_woo_category_images(){
	if (is_product_category("custom-design") || is_product_category("1-2-3-or-4-basin-portable-sinks")
	|| is_product_category("wood-cabinet-portable-sinks") || is_product_category("1-2-3-or-4-basin-portable-sinks") || is_product_category("one-basin-sinks")
	|| is_product_category("two-basin-sinks") || is_product_category("three-basin-sinks")
	|| is_product_category("four-basin-sinks") ) { ?>
	<div class="custom-cabinet-cat-image">
		<a target="_blank" href="http://www.lowes.com/Bathroom-Vanities-Vanity-Tops/Bathroom-Vanities/Bathroom-Vanities-with-Tops/_/N-1z0xzqkZ1z0vgdm/pl?cm_sp=-_-Bathroom|PopularCat-_-Merch|Single_Bowl_Vanity&cm_cr=Bathroom+Vanities+and+Vanity+Tops-_-Web+Activity-_-Bathroom+Vanities+and+Vanity+Tops+TF+Activity+12.21-_-SC_Bathroom+Vanities++Vanity+Tops_TopFlexible_Area-_-10272560_1_pl"><img src="http://www.portablesink.com/wp-content/uploads/Custom-Cabinets.jpg" alt="Choose Your Own Cabinet"></a>
	</div>
	<?php }?>
	<div class="pick-color">
		<a target="_blank" href="http://www.wilsonart.com/commercial/laminates/designs"><img src="http://www.portablesink.com/wp-content/uploads/Custom-Colors.png" alt=""></a>
	</div>
	<?php
	if (is_product_category( array (16))){
			global $wp_query;
			$cat = $wp_query->get_queried_object();
			$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
			$image = wp_get_attachment_url( $thumbnail_id );
			echo '<img src="'.$image.'" alt="" width="667" height="618" />';
	}
	if (is_product_category( array (19))){
			global $wp_query;
			$cat = $wp_query->get_queried_object();
			$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
			$image = wp_get_attachment_url( $thumbnail_id );
			echo '<img src="'.$image.'" width="667" class="term--19" height="975" />';
	}
	if (is_product_category( array (20))){
    global $wp_query;
    $cat = $wp_query->get_queried_object();
    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
    $image = wp_get_attachment_url( $thumbnail_id );
		echo '<br />';
		echo '<div style="margin:30px 0 0 0">Please click on the following categories to view more sinks.</div>';
		echo '<br />';
		echo '<a href="http://www.portablesink.com/product-category/1-2-3-or-4-basin-portable-sinks/one-basin-sinks/"><img style="margin: 5px 0 30px 0px" src="/wp-content/uploads/cat-one-basin.png" alt="one basin sink" width="250" height="156" /></a>';
		echo '<a href="http://www.portablesink.com/product-category/1-2-3-or-4-basin-portable-sinks/two-basin-sinks/"><img style="margin: 5px 0 30px 100px" src="/wp-content/uploads/cat-two-basin.png" alt="double basin sink" width="250" height="156" /></a>';
		echo '<br />';
		echo '<a href="http://www.portablesink.com/product-category/1-2-3-or-4-basin-portable-sinks/three-basin-sinks/"><img style="margin: 0 0 0px 0px"src="/wp-content/uploads/cat-three-basin.png" alt="three basin sink" width="250" height="156" /></a>';
		echo '<a href="http://www.portablesink.com/product-category/1-2-3-or-4-basin-portable-sinks/four-basin-sinks/"><img style="margin: 0 0 0px 100px" src="/wp-content/uploads/cat-four-basin.png" alt="four basin sink" width="250" height="156" /></a>';
  }
}

function bk_display_header_elements( $elems, $header_pos = 'default-header-lang', $page_side = '' ){

	global $smof_data;


	if( $elems == 'tel' ){
		echo '<div class="header-elem">
		    <p class="top-details rent-quote clearfix">
		      <a href="/contact-us">Do you want to rent instead? Request a quote.</a>
		    </p>
		</div>';
		echo composer_header_contact_info_tel();

	} elseif( $elems == 'email' ){

		echo composer_header_contact_info_email();

	} elseif( $elems == 'lang' ){

		if(class_exists('SitePress')){
			echo '<div class="header-elem">';
				echo '<div class="default-header-lang '. esc_attr( $header_pos ) . ' '. esc_attr( $page_side ) .'">';
				composer_languages_list();
				echo '</div>';
			echo '</div>';
		}

	} elseif( $elems == 'cart' ){
		if ( class_exists( 'Woocommerce' ) ) {
			composer_woo_cart();
		}

	} elseif( $elems == 'sicons' ){

		echo composer_social_icons();

	} elseif( $elems == 'top_menu' ){

		echo '<div class="header-elem">';
			composer_top_nav();
		echo '</div>';

	} elseif( $elems == 'footer_menu' ){

		echo '<div class="header-elem">';
			composer_footer_nav();
		echo '</div>';

	} elseif( $elems == 'search' ){

		echo '<div class="header-elem">';
			get_search_form();
		echo '</div>';

	} elseif( $elems == 'text' ){
		if( !empty( $smof_data['top_text'] ) ){
			echo '<div class="header-elem">';
				echo '<p>'. esc_html( $smof_data['top_text'] ) .'</p>';
			echo '</div>';
		}

	} elseif( $elems == 'search_icon' ){

		echo '<div class="header-elem">';
			echo composer_header_search();
		echo '</div>';
	} elseif( $elems == 'copyright_text' ){

		echo '<div class="header-elem">';

			$footer_copyright_t = composer_get_option_value( 'f_copyright_t', '&copy;'. date('Y') . ' [blog-link],' . esc_html__('All Rights Reserved.', 'composer' ) );

			echo '<p class="copyright-text">' . do_shortcode( $footer_copyright_t )  . '</p>'; // it escaped properly above

		echo '</div>';
	}
}
