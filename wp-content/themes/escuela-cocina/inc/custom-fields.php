<?php

add_action( 'cmb2_admin_init', 'edc_home_fields' );

function edc_home_fields() {
    $id_home = get_option('page_on_front');
/**
 * Metabox to be displayed on a single page ID
 */
$edc_home_fields = new_cmb2_box( array(
    
    'id'           => 'homepage_metabox',
    'title'        => esc_html__( 'Campos Home page', 'cmb2' ),
    'object_types' => array( 'page' ), // Post type
    'context'      => 'normal',
    'priority'     => 'high',
    'show_names'   => true, // Show field names on the left
    'show_on'      => array(
        'id' => array( $id_home ),
    ), // Specific post IDs to display this metabox
) );

$edc_home_fields->add_field( array(
    'name' => esc_html__( 'Un texto', 'cmb2' ),
    'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
    'id'   => 'homepage_text',
    'type' => 'text',
) );

}