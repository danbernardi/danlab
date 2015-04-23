<?php

// page options
function danlab_portfolio_options( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_danlab_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['portfolio_options'] = array(
        'id'            => 'portfolio_options',
        'title'         => __( 'Portfolio Options', 'danlab' ),
        'object_types'  => array( 'portfolio', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name'       => __( 'Logo', 'danlab' ),
                'desc'       => __( 'Upload the portfolio items logo', 'danlab' ),
                'id'         => $prefix . 'port_logo',
                'type'       => 'file',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
            array(
                'name'       => __( 'Live site URL', 'danlab' ),
                'desc'       => __( 'Add the url to the live version of the portfolio item', 'danlab' ),
                'id'         => $prefix . 'livesite',
                'type'       => 'text_url',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
            array(
                'name'       => __( 'Top Image', 'danlab' ),
                'desc'       => __( 'Upload the image the apears at the top of the portfolio page', 'danlab' ),
                'id'         => $prefix . 'port_mockup',
                'type'       => 'file',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
        ),
    );
    
    $meta_boxes['specs'] = array(
		'id'           => 'specs',
		'title'        => __( 'Specs', 'danlab' ),
		'object_types' => array( 'portfolio', ),
		'fields'       => array(
			array(
				'id'          => $prefix . 'spec_repeat_group',
				'type'        => 'group',
				'description' => __( 'Generates spec entries', 'danlab' ),
				'options'     => array(
					'group_title'   => __( 'Spec {#}', 'danlab' ), // {#} gets replaced by row number
					'add_button'    => __( 'Add Another Spec', 'danlab' ),
					'remove_button' => __( 'Remove Spec', 'danlab' ),
					'sortable'      => false, // beta
				),
				'fields'       => array(
					array(
						'name' => 'Icon',
						'desc' => 'Add the classname for the associated icon',
						'id'   => 'spec_icon',
						'type' => 'text_small',
						// Optionally allow only attachments and not any URL (this hides the text input for the url):
						"options" => array(
							"url" => false
						)
					),
					array(
						'name' => 'Caption',
						'description' => 'Write the description for this spec',
						'id'   => 'spec_text',
						'type' => 'text',
					),
					array(
						'name' => 'Spec URL',
						'description' => 'If this spec is a link, add the url here, otherwise leave blank',
						'id'   => 'spec_url',
						'type' => 'text_url',
					),
				),
			),
		),
	);

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'danlab_portfolio_options' );

?>