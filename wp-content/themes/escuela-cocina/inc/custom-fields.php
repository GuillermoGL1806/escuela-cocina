<?php

add_action( 'cmb2_admin_init', 'edc_home_fields' );

function edc_home_fields() {
    $customPrefix = 'homepage_';
    $id_home = get_option('page_on_front');
    /**
     * Metabox to be displayed on a single page ID
     */
    $edc_home_fields = new_cmb2_box( array(
        
        'id'           => $customPrefix . 'metabox',
        'title'        => esc_html__( 'Home page fields', 'cmb2' ),
        'object_types' => array( 'page' ), // Post type
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
        'show_on'      => array(
            'id' => array( $id_home ),
        ), // Specific post IDs to display this metabox
    ) );

    /* First text field */
    $edc_home_fields->add_field( array(
        'name'    => esc_html__( 'Top text 1', 'cmb2' ),
        'desc'    => esc_html__( 'Texto para la parte superior del sitio web', 'cmb2' ),
        'id'      => $customPrefix . 'top_text_1',
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 5,
        ),
    ) );
    /* First Image */
    $edc_home_fields->add_field( array(
        'name' => esc_html__( 'Imagen hero 1', 'cmb2' ),
        'desc' => esc_html__( 'Top image hero 1', 'cmb2' ),
        'id'   => $customPrefix . 'image_1',
        'type' => 'file',
    ) );

    /* Second text field */
    $edc_home_fields->add_field( array(
        'name'    => esc_html__( 'Top text 2', 'cmb2' ),
        'desc'    => esc_html__( 'Texto 2 para la parte superior del sitio web', 'cmb2' ),
        'id'      => $customPrefix . 'top_text_2',
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 5,
        ),
    ) );
    /* Second Image */
    $edc_home_fields->add_field( array(
        'name' => esc_html__( 'Imagen hero 2', 'cmb2' ),
        'desc' => esc_html__( 'Top image hero 2', 'cmb2' ),
        'id'   => $customPrefix . 'image_2',
        'type' => 'file',
    ) );
    
    /* School text field */
    $edc_home_fields->add_field( array(
        'name'    => esc_html__( 'Bottom text', 'cmb2' ),
        'desc'    => esc_html__( 'Texto para la parte inferior del sitio web', 'cmb2' ),
        'id'      => $customPrefix . 'bottom_text',
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 5,
        ),
    ) );
    /* School Image */
    $edc_home_fields->add_field( array(
        'name' => esc_html__( 'Bottom image', 'cmb2' ),
        'desc' => esc_html__( 'Bottom image with text over it', 'cmb2' ),
        'id'   => $customPrefix . 'bottom_image',
        'type' => 'file',
    ) );
}


/* Group fields */
add_action( 'cmb2_admin_init', 'edc_icon_section' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function edc_icon_section() {
    $groupPrefix = 'edc_group_';

	/**
	 * Repeatable Field Groups
	 */
	$edc_icons = new_cmb2_box( array(
		'id'           => $groupPrefix . 'metabox',
		'title'        => esc_html__( 'Icons with description', 'cmb2' ),
        'object_types' => array( 'page' ), // Post type
        'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
            'key'      => 'page-template',
			'value'    => 'page-icons.php'
		),  // Specific post IDs to display this metabox
	) );
    
    $edc_icons->add_field( array(
        'name'    => esc_html__( 'Title Section Icons', 'cmb2' ),
        'desc'    => esc_html__( 'Add a title for the section', 'cmb2' ),
        'id'      => $groupPrefix . 'icon_title',
        'type'    => 'text',
    ) );

	// $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
	$group_field_id = $edc_icons->add_field( array(
		'id'          => $groupPrefix . 'icons',
		'type'        => 'group',
		'description' => esc_html__( 'Add options if is necessary', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Icon charactewith description {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Add Another Icon', 'cmb2' ),
			'remove_button'  => esc_html__( 'Remove Icon', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$edc_icons->add_group_field( $group_field_id, array(
        'name'       => esc_html__( 'Icon Title', 'cmb2' ),
        'description' => esc_html__( 'Add a title for this icon', 'cmb2' ),
		'id'         => 'title_icon',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$edc_icons->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Icon Description', 'cmb2' ),
		'description' => esc_html__( 'Add an description for this icon', 'cmb2' ),
		'id'          => 'description_icon',
		'type'        => 'textarea_small',
	) );

	$edc_icons->add_group_field( $group_field_id, array(
        'name' => esc_html__( 'Icon Image', 'cmb2' ),
        'description' => esc_html__( 'Add an image for this icon', 'cmb2' ),
		'id'   => 'image_icon',
		'type' => 'file',
	) );

	/* $edc_icons->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Image Caption', 'cmb2' ),
		'id'   => 'image_caption',
		'type' => 'text',
	) ); */

}

/* Blog */

add_action( 'cmb2_admin_init', 'edc_blog_fields' );

function edc_blog_fields() {
    $customPrefix = 'edc_blog_';
    $id_blog = get_option('page_for_posts');
    /**
     * Metabox to be displayed on a single page ID
     */
    $edc_home_fields = new_cmb2_box( array(
        
        'id'           => $customPrefix . 'metabox',
        'title'        => esc_html__( 'Blog fields', 'cmb2' ),
        'object_types' => array( 'page' ), // Post type
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
        'show_on'      => array(
            'id' => array( $id_blog ),
        ), // Specific post IDs to display this metabox
    ) );
    /* Title field */
    $edc_home_fields->add_field( array(
        'name'    => esc_html__( 'Slogan tittle', 'cmb2' ),
        'desc'    => esc_html__( 'Slogan para la parte superior de la página', 'cmb2' ),
        'id'      => $customPrefix . 'top_slogan',
        'type'    => 'text',
    ) );
}