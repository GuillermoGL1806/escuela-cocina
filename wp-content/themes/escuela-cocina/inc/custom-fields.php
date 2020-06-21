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
    /* Slogan field */
    $edc_home_fields->add_field( array(
        'name'    => esc_html__( 'Slogan title', 'cmb2' ),
        'desc'    => esc_html__( 'Slogan para la parte superior de la página', 'cmb2' ),
        'id'      => $customPrefix . 'top_slogan',
        'type'    => 'text',
    ) );
    /* Title field */
    $edc_home_fields->add_field( array(
        'name'    => esc_html__( 'Page title', 'cmb2' ),
        'desc'    => esc_html__( 'Nombre a mostrar en el Blog', 'cmb2' ),
        'id'      => $customPrefix . 'top_title',
        'type'    => 'text',
    ) );
    /* No posts text field */
    $edc_home_fields->add_field( array(
        'name'    => esc_html__( 'No posts description', 'cmb2' ),
        'desc'    => esc_html__( 'Texto a mostrar si no hay contenido de blog posts', 'cmb2' ),
        'id'      => $customPrefix . 'no_posts',
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 5,
        ),
    ) );
}

/* Add fields to class post type */
add_action( 'cmb2_admin_init', 'edc_fields_classes' );
/**
 * Hook in and add a metabox to demonstrate fields
 */
function edc_fields_classes() {
    $classPrefix = 'edc_classes_';

	/**
	 * Fields
	 */
	$edc_classes = new_cmb2_box( array(
		'id'           => $classPrefix . 'metabox',
		'title'        => esc_html__( 'Classes description and information', 'cmb2' ),
        'object_types' => array( 'clases_cocina' ), // Post type
        'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
    ) );
    
    $edc_classes->add_field( array(
        'name'    => esc_html__( 'Class subtitle', 'cmb2' ),
        'desc'    => esc_html__( 'Add a subtitle for the class', 'cmb2' ),
        'id'      => $classPrefix . 'class_subtittle',
        'type'    => 'text',
    ) );
   
    /* Class general information */
    $edc_classes->add_field( array(
		'name' => esc_html__( 'Class general information', 'cmb2' ),
		'desc' => esc_html__( 'General information about how long does the classes takes in weeks and hours', 'cmb2' ),
		'id'   => $classPrefix . 'class_tittle',
		'type' => 'title',
	) );

    $edc_classes->add_field( array(
        'name'    => esc_html__( 'Class period of time', 'cmb2' ),
        'desc'    => esc_html__( 'Add a period time for the class. Example: every sunday 2 hours', 'cmb2' ),
        'id'      => $classPrefix . 'class_period_time',
        'type'    => 'text',
    ) );
    
    $edc_classes->add_field( array(
		'name' => esc_html__( 'Start date of the class', 'cmb2' ),
		'desc' => esc_html__( 'Pick the start of the class', 'cmb2' ),
		'id'   => $classPrefix . 'class_start_date',
		'type' => 'text_date',
        'date_format' => 'd-m-Y',
        'column' => true,
    ) );
    
    $edc_classes->add_field( array(
		'name' => esc_html__( 'End date of the class', 'cmb2' ),
		'desc' => esc_html__( 'Pick the finish of the class', 'cmb2' ),
		'id'   => $classPrefix . 'class_finish_date',
		'type' => 'text_date',
        'date_format' => 'd-m-Y',
        'column' => true,
    ) );
    
    $edc_classes->add_field( array(
		'name' => esc_html__( 'Start Time', 'cmb2' ),
		'desc' => esc_html__( 'Select the start time of the class', 'cmb2' ),
		'id'   => $classPrefix . 'class_start_time',
		'type' => 'text_time',
        // 'time_format' => 'H:i', // Set to 24hr format
        'column' => true,
    ) );
    
    $edc_classes->add_field( array(
		'name' => esc_html__( 'End Time', 'cmb2' ),
		'desc' => esc_html__( 'Select the end time of the class', 'cmb2' ),
		'id'   => $classPrefix . 'class_end_time',
		'type' => 'text_time',
        // 'time_format' => 'H:i', // Set to 24hr format
        'column' => true,
    ) );
    
    /* Class conditions */
    $edc_classes->add_field( array(
		'name' => esc_html__( 'Class aditional information', 'cmb2' ),
		'desc' => esc_html__( 'Aditional informaiton about instructors, capacity and pricing in this section', 'cmb2' ),
		'id'   => $classPrefix . 'class_additional_info',
		'type' => 'title',
    ) );
    
    $edc_classes->add_field( array(
		'name' => esc_html__( 'Class pricing', 'cmb2' ),
		'desc' => esc_html__( 'Add the pricing here', 'cmb2' ),
		'id'   => $classPrefix . 'class_pricing',
		'type' => 'text_money',
		// 'before_field' => '£', // override '$' symbol if needed
        // 'repeatable' => true,
        'column' => true,
    ) );
    
    $edc_classes->add_field( array(
        'name'    => esc_html__( 'Class quota', 'cmb2' ),
        'desc'    => esc_html__( 'Add a quota of people to be in the class', 'cmb2' ),
        'id'      => $classPrefix . 'class_quota',
        'type'    => 'text',
    ) );

    $edc_classes->add_field( array(
        'name'    => esc_html__( 'Class content', 'cmb2' ),
        'desc'    => esc_html__( 'Add the content of the class (1 by row)', 'cmb2' ),
        'id'      => $classPrefix . 'class_content',
        'type'    => 'text',
        'repeatable' => true,
    ) );

    $edc_classes->add_field( array(
		'name'      	=> __( 'Instructors', 'cmb2' ),
		'id'        	=> $classPrefix . 'class_instructors',
		'type'      	=> 'post_search_ajax',
		'desc'			=> __( 'Start typing instructors names to search them', 'cmb2' ),
		// Optional :
		'limit'      	=> 10, 		// Limit selection to X items only (default 1)
		'sortable' 	 	=> true, 	// Allow selected items to be sortable (default false)
		'query_args'	=> array(
			'post_type'			=> array( 'chefs' ),
			'post_status'		=> array( 'publish' ),
			'posts_per_page'	=> -1
        ),
	) );
}

/* Class page fields */
add_action( 'cmb2_admin_init', 'edc_class_subtitle' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function edc_class_subtitle() {
    $classPrefix = 'edc_class_';

	/**
	 * Class Metabox Fields
	 */
	$edc_class_page = new_cmb2_box( array(
		'id'           => $classPrefix . 'metabox',
		'title'        => esc_html__( 'Class page info', 'cmb2' ),
        'object_types' => array( 'page' ), // Post type
        'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
            'key'      => 'page-template',
			'value'    => 'page-classes.php'
		),  // Specific post IDs to display this metabox
    ) );

    $edc_class_page->add_field( array(
        'name'    => esc_html__( 'Subtitle text', 'cmb2' ),
        'desc'    => esc_html__( 'Add a subtitle for the section', 'cmb2' ),
        'id'      => $classPrefix . 'class_subtitle',
        'type'    => 'text',
    ) );
}

/* Gallery template fields */
add_action( 'cmb2_admin_init', 'edc_gallery_template' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function edc_gallery_template() {
    $galleryPrefix = 'edc_gallery_';

	/**
	 * Gallery Metabox Fields
	 */
	$edc_gallery_page = new_cmb2_box( array(
		'id'           => $galleryPrefix . 'metabox',
		'title'        => esc_html__( 'Gallery fields', 'cmb2' ),
        'object_types' => array( 'page' ), // Post type
        'context'      => 'normal',
		'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
        'show_on'      => array(
            'key'      => 'page-template',
			'value'    => 'page-gallery.php'
		),  // Specific post IDs to display this metabox
    ) );
    
    $edc_gallery_page->add_field( array(
        'name'    => esc_html__( 'Title Section Icons', 'cmb2' ),
        'desc'    => esc_html__( 'Add a title for the section', 'cmb2' ),
        'id'      => $galleryPrefix . 'icon_title',
        'type'    => 'text',
    ) );

    $edc_gallery_page->add_field( array(
        'name'    => esc_html__( 'Subtitle text', 'cmb2' ),
        'desc'    => esc_html__( 'Add a subtitle for the section', 'cmb2' ),
        'id'      => $galleryPrefix . 'class_subtitle',
        'type'    => 'text',
    ) );
}