<?php
// services, projects, testimonials, events, posts


function register_services() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Services', 'zd' ),
		'parent_item_colon'   => __( 'Parent Service', 'zd' ),
		'all_items'           => __( 'All Services', 'zd' ),
		'view_item'           => __( 'View Service', 'zd' ),
		'add_new_item'        => __( 'Add New Service', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Service', 'zd' ),
		'update_item'         => __( 'Update Service', 'zd' ),
		'search_items'        => __( 'Search Services', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'services', 'zd' ),
		'description'         => __( 'Featured Services', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'revisions', ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			      => 'dashicons-exerpt-view',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'services', $args );
}
add_action( 'init', 'register_services', 0 );


function register_solutions() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Solutions', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Solution', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Solutions', 'zd' ),
		'parent_item_colon'   => __( 'Parent Solution', 'zd' ),
		'all_items'           => __( 'All Solutions', 'zd' ),
		'view_item'           => __( 'View Solution', 'zd' ),
		'add_new_item'        => __( 'Add New Solution', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Solution', 'zd' ),
		'update_item'         => __( 'Update Solution', 'zd' ),
		'search_items'        => __( 'Search Solutions', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'solutions', 'zd' ),
		'description'         => __( 'Featured Solutions', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'revisions', ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			      => 'dashicons-welcome-view-site',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'solutions', $args );
}
add_action( 'init', 'register_solutions', 0 );


function register_projects() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Projects', 'zd' ),
		'parent_item_colon'   => __( 'Parent Project', 'zd' ),
		'all_items'           => __( 'All Projects', 'zd' ),
		'view_item'           => __( 'View Project', 'zd' ),
		'add_new_item'        => __( 'Add New Project', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Project', 'zd' ),
		'update_item'         => __( 'Update Project', 'zd' ),
		'search_items'        => __( 'Search Projects', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'projects', 'zd' ),
		'description'         => __( 'Featured Projects', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'revisions', 'tags' ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			      => 'dashicons-index-card',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'projects', $args );
}
add_action( 'init', 'register_projects', 0 );


function register_videos() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Videos', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Video', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Videos', 'zd' ),
		'parent_item_colon'   => __( 'Parent Video', 'zd' ),
		'all_items'           => __( 'All Videos', 'zd' ),
		'view_item'           => __( 'View Video', 'zd' ),
		'add_new_item'        => __( 'Add New Video', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Video', 'zd' ),
		'update_item'         => __( 'Update Video', 'zd' ),
		'search_items'        => __( 'Search Videos', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'videos', 'zd' ),
		'description'         => __( 'Featured Videos', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions' ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			      => 'dashicons-video-alt2',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'videos', $args );
}
add_action( 'init', 'register_videos', 0 );


function register_testimonials() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Testimonial', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Testimonials', 'zd' ),
		'parent_item_colon'   => __( 'Parent Testimonial', 'zd' ),
		'all_items'           => __( 'All Testimonials', 'zd' ),
		'view_item'           => __( 'View Testimonial', 'zd' ),
		'add_new_item'        => __( 'Add New Testimonial', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Testimonial', 'zd' ),
		'update_item'         => __( 'Update Testimonial', 'zd' ),
		'search_items'        => __( 'Search Testimonials', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'testimonials', 'zd' ),
		'description'         => __( 'Featured Testimonials', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions', ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			      => 'dashicons-testimonial',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'testimonials', $args );
}
add_action( 'init', 'register_testimonials', 0 );


function register_events() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Event', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Events', 'zd' ),
		'parent_item_colon'   => __( 'Parent Event', 'zd' ),
		'all_items'           => __( 'All Events', 'zd' ),
		'view_item'           => __( 'View Event', 'zd' ),
		'add_new_item'        => __( 'Add New Event', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Event', 'zd' ),
		'update_item'         => __( 'Update Event', 'zd' ),
		'search_items'        => __( 'Search Events', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'events', 'zd' ),
		'description'         => __( 'Featured Events', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			      => 'dashicons-calendar-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'events', $args );
}
add_action( 'init', 'register_events', 0 );


function register_team_members() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Team Members', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Team Member', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Team Members', 'zd' ),
		'parent_item_colon'   => __( 'Parent Team Member', 'zd' ),
		'all_items'           => __( 'All Team Members', 'zd' ),
		'view_item'           => __( 'View Team Member', 'zd' ),
		'add_new_item'        => __( 'Add New Team Member', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Team Member', 'zd' ),
		'update_item'         => __( 'Update Team Member', 'zd' ),
		'search_items'        => __( 'Search Team Members', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'team_members', 'zd' ),
		'description'         => __( 'Featured Team Members', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			      => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'team_members', $args );
}
add_action( 'init', 'register_team_members', 0 );


// register clients post type
function register_clients() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Clients', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Clients', 'zd' ),
		'parent_item_colon'   => __( 'Parent Client', 'zd' ),
		'all_items'           => __( 'All Clients', 'zd' ),
		'view_item'           => __( 'View Client', 'zd' ),
		'add_new_item'        => __( 'Add New Client', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Client', 'zd' ),
		'update_item'         => __( 'Update Client', 'zd' ),
		'search_items'        => __( 'Search Clients', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'clients', 'zd' ),
		'description'         => __( 'Featured Clients', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			      => 'dashicons-universal-access',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'clients', $args );
}
add_action( 'init', 'register_clients', 0 );


// register job post type
function register_jobs() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Jobs', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Job', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Jobs', 'zd' ),
		'parent_item_colon'   => __( 'Parent Job', 'zd' ),
		'all_items'           => __( 'All Jobs', 'zd' ),
		'view_item'           => __( 'View Job', 'zd' ),
		'add_new_item'        => __( 'Add New Job', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Job', 'zd' ),
		'update_item'         => __( 'Update Job', 'zd' ),
		'search_items'        => __( 'Search Jobs', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'jobs', 'zd' ),
		'description'         => __( 'Featured Jobs', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions' ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			      => 'dashicons-hammer',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'jobs', $args );
}
add_action( 'init', 'register_jobs', 0 );

?>