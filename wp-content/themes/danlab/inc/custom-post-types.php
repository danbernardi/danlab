<?php
// services, projects, testimonials, events, posts


function register_portfolio() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Portfolio', 'Post Type General Name', 'danlab' ),
		'singular_name'       => _x( 'Portfolio Item', 'Post Type Singular Name', 'danlab' ),
		'menu_name'           => __( 'Portfolio', 'danlab' ),
		'parent_item_colon'   => __( 'Parent Portfolio Item', 'danlab' ),
		'all_items'           => __( 'All Portfolio Items', 'danlab' ),
		'view_item'           => __( 'View Portfolio Item', 'danlab' ),
		'add_new_item'        => __( 'Add New Portfolio Item', 'danlab' ),
		'add_new'             => __( 'Add New', 'danlab' ),
		'edit_item'           => __( 'Edit Portfolio Item', 'danlab' ),
		'update_item'         => __( 'Update Portfolio Item', 'danlab' ),
		'search_items'        => __( 'Search Portfolio Items', 'danlab' ),
		'not_found'           => __( 'Not Found', 'danlab' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'danlab' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'portfolio', 'danlab' ),
		'description'         => __( 'Featured Portfolio Items', 'danlab' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'revisions', 'thumbnail' ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			      => 'dashicons-screenoptions',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'register_portfolio', 0 );

?>