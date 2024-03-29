<?php

/* Autocracy Dependencies */
require_once ( get_template_directory() . '/autocracy/autocracy.php' );
require_once ( get_template_directory() . '/autocracy/homepage-manager.php' );
require_once ( get_template_directory() . '/autocracy/sidebar-manager.php' );
require_once ( get_template_directory() . '/autocracy/theme-manager.php' );
require_once ( get_template_directory() . '/autocracy/grid-manager.php' );
require_once ( get_template_directory() . '/autocracy/process-manager.php' );
// Re-define meta box path and URL
define('RWMB_URL', trailingslashit(get_stylesheet_directory_uri() . '/autocracy/API/'));
define('RWMB_DIR', trailingslashit(get_template_directory() . '/autocracy/API/'));
// Include the meta box script
require_once RWMB_DIR . '/meta-box.php';
include get_template_directory() . '/autocracy/demo.php';

/* Add Theme Supports */
add_theme_support('menus');
add_theme_support('post-thumbnails');

/* Script Enquque */
wp_enqueue_script('jquery');

/* Register Menu Areas */
register_nav_menu('Header Nav', 'Navigation Menu');
register_nav_menu('Footer Nav', 'Footer Navigation Menu');

function autoc_get_img($id) {

	global $wpdb;
	$images = get_post_meta( get_the_ID(), $id, false );
	$images = implode( ',' , $images );

// Re-arrange images with 'menu_order'
	$images = $wpdb->get_col( "
		SELECT ID FROM {$wpdb->posts}
		WHERE post_type = 'attachment'
		AND ID in ({$images})
		ORDER BY menu_order ASC
		" );

	foreach ( $images as $att )
	{
    // Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
		$src = wp_get_attachment_image_src( $att, 'full' );
		$src = $src[0];
    // Show image
		echo "<img src='{$src}' />";
	}

}

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/* Register Custom Post Types */
function create_post_type() {
	register_post_type('products', array(
		'labels' => array(
			'name' => __('products'),
			'singular_name' => __('product')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'products'),
		)
	);
}
add_action('init', 'create_post_type');

/* Add a widget area */

function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Footer Events',
		'id' => 'footer_events',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );
register_sidebar( array(
		'name' => 'Social Sidebar Events',
		'id' => 'social_events',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );
        register_sidebar( array(
		'name' => 'Slider Events',
		'id' => 'slider_events',
'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>