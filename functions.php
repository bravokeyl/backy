<?php

function identityexperts_setup() {
	load_theme_textdomain( 'identityexperts' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'identityexperts-thumbnail-avatar', 100, 100, true );
	add_image_size( 'identityexperts-archive-image', 333, 195, true );

	register_nav_menus( array(
		'top'    => __( 'Primary Menu', 'identityexperts' )
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-logo', array(
		'width'       => 230,
		'height'      => 40,
		'flex-width'  => true,
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );

}
add_action( 'after_setup_theme', 'identityexperts_setup' );

function identityexperts_content_width() {

	$content_width = 700;

	if ( identityexperts_is_frontpage() ) {
		$content_width = 1120;
	}

	$GLOBALS['content_width'] = apply_filters( 'identityexperts_content_width', $content_width );
}
add_action( 'after_setup_theme', 'identityexperts_content_width', 0 );

function identityexperts_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'identityexperts-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'identityexperts_resource_hints', 10, 2 );


function identityexperts_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Home Slider', 'identityexperts' ),
		'id'            => 'home-slider',
		'description'   => __( 'Add widgets here to appear in your slider.', 'identityexperts' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	) );

	register_sidebar( array(
		'name'          => __( 'Home Page Top - Unsed', 'identityexperts' ),
		'id'            => 'home-top',
		'description'   => __( 'Add widgets here to appear in your top.', 'identityexperts' ),
		'before_widget' => '<div id="%1$s" class="widget col-sm-4 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	// register_sidebar( array(
	// 	'name'          => __( 'Home Page - Second Section', 'identityexperts' ),
	// 	'id'            => 'home-two',
	// 	'description'   => __( 'Add widgets here to appear below top section.', 'identityexperts' ),
	// 	'before_widget' => '<div id="%1$s" class="widget section  %2$s">',
	// 	'after_widget'  => '</div>',
	// 	'before_title'  => '<h3 class="widget-title">',
	// 	'after_title'   => '</h3>',
	// ) );

	// register_sidebar( array(
	// 	'name'          => __( 'Home Page Middle', 'identityexperts' ),
	// 	'id'            => 'home-middle',
	// 	'description'   => __( 'Add widgets here to appear in your middle section.', 'identityexperts' ),
	// 	'before_widget' => '<section id="%1$s" class="widget section %2$s"><div class="container"><div class="row">',
	// 	'after_widget'  => '</div></div></section>',
	// 	'before_title'  => '<div class="col-sm-4"><h2 class="widget-title">',
	// 	'after_title'   => '</h2></div>',
	// 	'before_widget_body' => '<div class="col-sm-8">',
	// 	'after_widget_body'  => '</div>'
	// ) );

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'identityexperts' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'identityexperts' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'identityexperts' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'identityexperts' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'identityexperts' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'identityexperts' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'identityexperts' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'identityexperts' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'identityexperts' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'identityexperts' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'identityexperts_widgets_init' );

function identityexperts_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'identityexperts_pingback_header' );

function identityexperts_scripts() {
	wp_enqueue_style( 'identityexperts-style', get_theme_file_uri('css/bk.css') );
	wp_enqueue_script('bootstrap-js',get_theme_file_uri('lib/bootstrap/dist/js/bootstrap.min.js'),array('jquery'),'',true);
	wp_enqueue_script( 'bk', get_theme_file_uri( '/assets/js/bk.js' ), array( 'jquery' ), '2.1.2', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'identityexperts_scripts' );

add_action( 'init', 'identityexperts_page_excerpt' );
function identityexperts_page_excerpt() {
	add_post_type_support( 'page', 'excerpt' );
}

add_action('wp_footer','identityexperts_map');
function identityexperts_map() {
	if(is_page('contact')){ ?>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCtcrsf1cuDE46TxT99obY-MhXzQg5m7bc"></script>
		<script type="text/javascript">
			var map;
			var map2;
			var myLatlng = new google.maps.LatLng(53.647036, -1.780880);
			var mymarker = new google.maps.LatLng(53.649274, -1.780880);
			var myLatlng2 = new google.maps.LatLng(50.7245405, -3.4706262);
			var mymarker2 = new google.maps.LatLng(50.7269643, -3.4706262);

			var MY_MAPTYPE_ID = 'quantiam';
			var MY_MAPTYPE_ID2 = 'quantiam';

			function initialize() {
				var featureOpts = [
					{
						stylers: [
							{ hue: '#ee7420' },
							{ visibility: 'simplified' },
							{ gamma: 0.6 },
							{ weight: 0.5 },
							{ saturation: 10 },
							{ lightness: 0 }
						]
					}
				];

				var mapOptions = {
					zoom: 15,
					center: myLatlng,
					disableDefaultUI: true,
					mapTypeId: MY_MAPTYPE_ID
				};

				var mapOptions2 = {
			    		zoom: 15,
			    		center: myLatlng2,
			    		disableDefaultUI: true,
			    		mapTypeId: MY_MAPTYPE_ID2
				};

				map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
				map2 = new google.maps.Map(document.getElementById('map-canvas2'), mapOptions2);

				var styledMapOptions = {
					name: 'Identity Experts'
				};
				var styledMapOptions2 = {
				  		name: 'Quantiam2'
				  	};

				var marker = new google.maps.Marker({
					position: mymarker,
					map: map,
					title: 'Identity Experts'
				});

				var marker2 = new google.maps.Marker({
							position: mymarker2,
				  		map: map2,
				  		title: 'Quantiam2'
				  	});

				var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
				var customMapType2 = new google.maps.StyledMapType(featureOpts, styledMapOptions2);
				map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
				map2.mapTypes.set(MY_MAPTYPE_ID2, customMapType2);
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	<?php }
}

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/team-meta.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

add_filter('bk_widget_text', 'do_shortcode');

function bk_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }

    return $title;
}

add_filter( 'get_the_archive_title', 'bk_archive_title' );
