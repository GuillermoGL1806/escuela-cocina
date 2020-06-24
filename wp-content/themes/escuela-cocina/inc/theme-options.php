<?php
add_action( 'cmb2_admin_init', 'edc_theme_featured_options' );
/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function edc_theme_featured_options() {
    $prefix = 'edc_theme_';
	/**
	 * Registers options page menu item and form.
	 */
	$cmb_options = new_cmb2_box( array(
		'id'           => $prefix . 'options_page',
		'title'        => esc_html__( 'Theme Options Settings', 'cmb2' ),
		'object_types' => array( 'options-page' ),

		/*
		 * The following parameters are specific to the options-page box
		 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
		 */

		'option_key'      => $prefix . 'options', // The option key and admin menu page slug.
		'icon_url'        => 'dashicons-edit', // Menu icon. Only applicable if 'parent_slug' is left empty.
		// 'menu_title'      => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
		// 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
		// 'capability'      => 'manage_options', // Cap required to view options-page.
		// 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
		// 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
		// 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
		// 'save_button'     => esc_html__( 'Save Theme Options', 'cmb2' ), // The text for the options-page save button. Defaults to 'Save'.
		// 'disable_settings_errors' => true, // On settings pages (not options-general.php sub-pages), allows disabling.
		// 'message_cb'      => 'yourprefix_options_page_message_callback',
		// 'tab_group'       => '', // Tab-group identifier, enables options page tab navigation.
		// 'tab_title'       => null, // Falls back to 'title' (above).
		// 'autoload'        => false, // Defaults to true, the options-page option will be autloaded.
	) );
	/**
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'Brand Logo', 'cmb2' ),
		'desc'    => esc_html__( 'Change the brand logo with this tool', 'cmb2' ),
		'id'      => 'brand_logo',
		'type'    => 'file',
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'Divider image', 'cmb2' ),
		'desc'    => esc_html__( 'Change the divider image with this tool', 'cmb2' ),
		'id'      => 'divider_image',
		'type'    => 'file',
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'Divider image in negative', 'cmb2' ),
		'desc'    => esc_html__( 'Change the negative divider image with this tool', 'cmb2' ),
		'id'      => 'negative_divider_image',
		'type'    => 'file',
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'Number of classes in Main page', 'cmb2' ),
		'desc'    => esc_html__( 'Type number of classes to display in the front page, example 2 will display to classes in the front page', 'cmb2' ),
		'id'      => 'number_clases',
		'type'    => 'text',
    ) );
    $cmb_options->add_field( array(
		'name'    => esc_html__( 'Primary Color', 'cmb2' ),
		'desc'    => esc_html__( 'Change the primary color with this tool', 'cmb2' ),
		'id'      => 'primary_color',
		'type'    => 'colorpicker',
		'default' => '#f46669',
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'Primary Color Hover', 'cmb2' ),
		'desc'    => esc_html__( 'Change the primary color hover effect with this tool', 'cmb2' ),
		'id'      => 'primary_color_hover',
		'type'    => 'colorpicker',
		'default' => '#f54749',
    ) );
    $cmb_options->add_field( array(
		'name'    => esc_html__( 'Secondary Color', 'cmb2' ),
		'desc'    => esc_html__( 'Change the secondary color with this tool', 'cmb2' ),
		'id'      => 'secondary_color',
		'type'    => 'colorpicker',
		'default' => '#a1a045',
	) );    
}

/* Dinamic Colors and dividers images */
add_action('wp_footer', 'edc_theme_options_styles');
function edc_theme_options_styles(){
	$options = get_option('edc_theme_options');

	$primaryColor = $options['primary_color'];
	$primaryColorHover = $options['primary_color_hover'];
	$secondaryColor = $options['secondary_color'];
	$dividerImage = $options['divider_image'];
	$negativeDividerImage = $options['negative_divider_image'];

	/* If the user haven't changed the divider image, the template will use the default divider image */
	if(!isset($dividerImage)){
		$dividerImage = get_template_directory_uri() . '/img/separador.png';
	}
	if(!isset($negativeDividerImage)){
		$negativeDividerImage = get_template_directory_uri() . '/img/separador-inverso.png';
	}
	if(!isset($primaryColor)){
		$primaryColor = "#f46669";
	}
	if(!isset($primaryColorHover)){
		$primaryColorHover = "#f54749";
	}
	if(!isset($secondaryColor)){
		$secondaryColor = "#a1a045";
	}

	/* Registering the new inline styles */
	wp_register_style('custom-theme-options', false);
	wp_enqueue_style('custom-theme-options');

	$customCss = "
		/* BG Primary color */
		.btn-primary,
		.bg-primary,
		.list-group-item-primary,
		.comment-respond .submit,
		.page-link:hover {
			background-color: {$primaryColor}!important;
		}
		/* BG Secondary color */
		.bg-secondary,
		.badge-secondary,
		.list-group-item-secondary,
		aside .card-footer {
			background-color: {$secondaryColor}!important;
		}
		/* Primary Color */
		.header .nav-link:hover,
		.header .current_page_item .nav-link,
		aside .card-subtitle,
		.post-preview a,
		.post-content .post-meta span,
		.comment-respond a,
		.comment-list .comment-body .reply a,
		.card-subtitle,
		.instructor,
		.page-link,
		.page-item a,
		.footer .nav-link:hover,
		.footer .nav-link.active {
			color: {$primaryColor}!important;
		}
		/* Border bottom colors */
		.header .current_page_item .nav-link {
			border-bottom: 2px solid {$primaryColor}!important;
		}
		.footer {
			border-bottom: 10px solid {$primaryColor}!important;
		}
		/* Border top colors */
		.footer .container {
			border-top: 1px solid {$primaryColor}!important;
		}
		/* Border left colors */
		blockquote.subtitle {
			border-left: 2px solid {$primaryColor}!important;
		}
		/* Border color */
		.btn-primary {
			border-color: {$primaryColor}!important;
		}
		/* Primary Hover */
		.post-content .btn-primary:hover {
			background-color: {$primaryColorHover}!important;
			barder-color: {$primaryColorHover}!important;
		}
		/* Divider Images */
		.divider::after{
			background-image: url({$dividerImage})!important;
		}
		.inverse::after{
			background-image: url({$negativeDividerImage})!important;
		}
	";
	wp_add_inline_style('custom-theme-options',  $customCss);
}