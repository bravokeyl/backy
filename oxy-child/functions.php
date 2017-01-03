<?php
function woocommerce_result_count() {
	return;
}

add_action('oxy_product_sale_icon','gema75_show_product_loop_new_badge',10);

remove_action( 'woocommerce_single_product_summary', 'gema75_show_product_loop_new_badge' , 30 );
//remove_action('woocommerce_before_shop_loop','hook_oxy_grid_list_trigger',11);
//remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);