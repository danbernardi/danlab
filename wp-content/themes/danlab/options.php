<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'danlab'),
		'two' => __('Two', 'danlab'),
		'three' => __('Three', 'danlab'),
		'four' => __('Four', 'danlab'),
		'five' => __('Five', 'danlab')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'danlab'),
		'two' => __('Pancake', 'danlab'),
		'three' => __('Omelette', 'danlab'),
		'four' => __('Crepe', 'danlab'),
		'five' => __('Waffle', 'danlab')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();
        
    // General Settings
    $options[] = array(
        'name' => __('General Settings', 'danlab'),
        'type' => 'heading');
        
    $options[] = array(
        'name' => __('Logo', 'danlab'),
        'desc' => __('Upload your logo', 'danlab'),
        'id' => 'danlab_logo',
        'type' => 'upload');
		
    $options[] = array(
        'name' => __('Contact Email', 'danlab'),
        'desc' => sprintf( __( 'Enter your companies main contact email.' ) ),
        'id' => 'danlab_contact_email',
        'type' => 'text');
        
    $options[] = array(
        'name' => __('Contact Phone Number', 'danlab'),
        'desc' => __('Enter your companies main contact phone number.', 'danlab'),
        'id' => 'danlab_contact_phone',
        'std' => '',
        'type' => 'text');
        
    $options[] = array(
        'name' => __('Copyright Info', 'danlab'),
        'desc' => __('Enter your copyright information.', 'danlab'),
        'id' => 'danlab_copyright',
        'std' => '',
        'type' => 'text');
    
    $options[] = array(
        'name' => __('Facebook Url', 'danlab'),
        'desc' => __('Enter the url for your facebook profile', 'danlab'),
        'id' => 'danlab_facebook',
        'type' => 'text');
    
    $options[] = array(
        'name' => __('Linkedin Url', 'danlab'),
        'desc' => __('Enter the url for your linked in profile', 'danlab'),
        'id' => 'danlab_linkedin',
        'type' => 'text');
        
    $options[] = array(
        'name' => __('Google Plus Url', 'danlab'),
        'desc' => __('Enter the url for your google plus profile', 'danlab'),
        'id' => 'danlab_googleplus',
        'type' => 'text');
        
    $options[] = array(
        'name' => __('Twitter Url', 'danlab'),
        'desc' => __('Enter the url for your twitter profile', 'danlab'),
        'id' => 'danlab_twitter',
        'type' => 'text');
        
    $options[] = array(
        'name' => __('Github Url', 'danlab'),
        'desc' => __('Enter the url for your github account', 'danlab'),
        'id' => 'danlab_github',
        'type' => 'text');
        
    // General Settings
    $options[] = array(
        'name' => __('Header Settings', 'danlab'),
        'type' => 'heading');
        
    $options[] = array(
        'name' => __('About Me Image', 'danlab'),
        'desc' => __('Upload an image for the about me section', 'danlab'),
        'id' => 'danlab_about_img',
        'type' => 'upload');
        
    $options[] = array(
        'name' => __('About Me Text', 'danlab'),
        'desc' => __('Enter the text that appears in the about me section', 'danlab'),
        'id' => 'danlab_about_text',
        'type' => 'text');
	

	return $options;
}