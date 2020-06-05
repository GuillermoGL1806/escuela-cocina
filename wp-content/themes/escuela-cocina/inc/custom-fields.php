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
add_action( 'cmb2_admin_init', 'yourprefix_register_taxonomy_metabox' );
/**
 * Hook in and add a metabox to add fields to taxonomy terms
 */
function yourprefix_register_taxonomy_metabox() {

	/**
	 * Metabox to add fields to categories and tags
	 */
	$cmb_term = new_cmb2_box( array(
		'id'               => 'yourprefix_term_edit',
		'title'            => esc_html__( 'Category Metabox', 'cmb2' ), // Doesn't output for term boxes
		'object_types'     => array( 'term' ), // Tells CMB2 to use term_meta vs post_meta
		'taxonomies'       => array( 'category', 'post_tag' ), // Tells CMB2 which taxonomies should have these fields
		// 'new_term_section' => true, // Will display in the "Add New Category" section
	) );

	$cmb_term->add_field( array(
		'name'     => esc_html__( 'Extra Info', 'cmb2' ),
		'desc'     => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'       => 'yourprefix_term_extra_info',
		'type'     => 'title',
		'on_front' => false,
	) );

	$cmb_term->add_field( array(
		'name' => esc_html__( 'Term Image', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => 'yourprefix_term_avatar',
		'type' => 'file',
	) );

	$cmb_term->add_field( array(
		'name' => esc_html__( 'Arbitrary Term Field', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => 'yourprefix_term_term_text_field',
		'type' => 'text',
	) );

}