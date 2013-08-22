<?php

/* Autocracy Dependencies */
require_once ( get_template_directory() . '/autocracy/autocracy.php' );
require_once ( get_template_directory() . '/autocracy/homepage-manager.php' );
require_once ( get_template_directory() . '/autocracy/sidebar-manager.php' );
require_once ( get_template_directory() . '/autocracy/theme-manager.php' );
require_once ( get_template_directory() . '/autocracy/service-manager.php' );
// Re-define meta box path and URL
define('RWMB_URL', trailingslashit(get_stylesheet_directory_uri() . '/autocracy/API/'));
define('RWMB_DIR', trailingslashit(get_template_directory() . '/autocracy/API/'));
// Include the meta box script
require_once RWMB_DIR . '/meta-box.php';
include get_template_directory() . '/autocracy/demo.php';

/* Add Theme Supports */
add_theme_support('menus');
add_theme_support('post-thumbnails');

/* Register Menu Areas */
register_nav_menu('Header Nav - Left', 'Left Navigation Menu');

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

/* Register Custom Post Types */

function create_post_type() {
	register_post_type('Process', array(
		'labels' => array(
			'name' => __('Process'),
			'singular_name' => __('Processes')
			),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'Process'),
		)
	);
}
add_action('init', 'create_post_type');


?>