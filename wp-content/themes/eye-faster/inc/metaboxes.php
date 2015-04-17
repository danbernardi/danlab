<?php

// page options
function zd_page_options( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['page_options'] = array(
        'id'            => 'page_options',
        'title'         => __( 'Page Options', 'zd' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name'       => __( 'Remove Page Title', 'zd' ),
                'desc'       => __( 'Check this box to remove the page title from the top of the page', 'zd' ),
                'id'         => $prefix . 'disable_page_title',
                'type'       => 'checkbox',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
            array(
                'name'       => __( 'Page has Top Navigation', 'zd' ),
                'desc'       => __( 'Check this box to add top navigation to this page', 'zd' ),
                'id'         => $prefix . 'add_topnav',
                'type'       => 'checkbox',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_page_options' );


// contact cta options
function zd_contact_cta_options( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['contact_cta_options'] = array(
        'id'            => 'contact_cta_options',
        'title'         => __( 'Contact Link Options', 'zd' ),
        'object_types'  => array( 'page', 'post', 'services', 'solutions', 'jobs' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name'       => __( 'Disable Contact Link', 'zd' ),
                'desc'       => __( 'Check this box to remove the contact page call to action', 'zd' ),
                'id'         => $prefix . 'disable_footer_cta',
                'type'       => 'checkbox',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
            array(
                'name'       => __( 'Contact Link Text', 'zd' ),
                'desc'       => __( 'Enter the text that will appear in the contact page call to action', 'zd' ),
                'id'         => $prefix . 'footer_cta_text',
                'type'       => 'textarea_small',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_contact_cta_options' );


// success story options
function zd_success_story_options( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
     
    $meta_boxes['success_info'] = array(
        'id'            => 'success_info',
        'title'         => __( 'Info', 'zd' ),
        'object_types'  => array( 'success_stories', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name'    => 'Name',
                'id'      => $prefix . 'fullname',
                'type'    => 'text_medium'
            ),
            array(
                'name'    => 'Job Title',
                'id'      => $prefix . 'jobtitle',
                'type'    => 'text_medium'
            ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_success_story_options' );


// Team Member Options
function zd_member_options( array $meta_boxes ) {
    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['member_options'] = array(
        'id'            => 'member_options',
        'title'         => __( 'Team Member Options', 'zd' ),
        'object_types'  => array( 'team_members', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name' => 'Job Title',
                'desc' => 'Enter the team members job title',
                'id' => $prefix . 'job_title',
                'type' => 'text',
			     ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_member_options' );


// Services & Solutions Options
function zd_services_options( array $meta_boxes ) {
    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['services_options'] = array(
        'id'            => 'services_options',
        'title'         => __( 'Services Options', 'zd' ),
        'object_types'  => array( 'services', 'solutions', 'jobs' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name' => 'Icon',
                'desc' => 'Enter the class of the desired icon.',
                'id' => $prefix . 'icon',
                'type' => 'text',
			     ),
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_services_options' );


// Video Options
function zd_videos_options( array $meta_boxes ) {
    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['videos_options'] = array(
        'id'            => 'videos_options',
        'title'         => __( 'Video Options', 'zd' ),
        'object_types'  => array( 'videos' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name' => 'Youtube URL',
                'desc' => 'Enter the embed url from the youtube video. Must match this format: https://youtu.be/q_DuNL886x8',
                'id' => $prefix . 'embed_url',
                'type' => 'text_url',
			     ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_videos_options' );


// Client Options
function zd_client_options( array $meta_boxes ) {
    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['client_options'] = array(
        'id'            => 'client_options',
        'title'         => __( 'Client Options', 'zd' ),
        'object_types'  => array( 'clients' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name' => 'Client Logo',
                'desc' => 'Upload the client logo as a png file.',
                'id' => $prefix . 'client_img',
                'type' => 'file',
			     ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_client_options' );


// Event Options
function zd_event_options( array $meta_boxes ) {
    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['event_options'] = array(
        'id'            => 'event_options',
        'title'         => __( 'Event Options', 'zd' ),
        'object_types'  => array( 'events' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name' => 'Date &amp; Time',
                'desc' => 'Enter the events date &amp; time.',
                'id' => $prefix . 'date_time',
                'type' => 'text',
            ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_event_options' );


// Project Options
/*
function zd_project_options( array $meta_boxes ) {
    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    $meta_boxes['project_options'] = array(
        'id'            => 'project_options',
        'title'         => __( 'Projects Options', 'zd' ),
        'object_types'  => array( 'projects' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name' => 'Background',
                'desc' => 'Add the background text for this project',
                'id' => $prefix . 'background',
                'type' => 'wysiwyg',
			     ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_project_options' );
*/

?>