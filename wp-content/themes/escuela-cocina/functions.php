<?php
/* Add CMB2 */
require_once dirname(__FILE__) . '/cmb2-functions.php';

/* Load cutomized fields */
require_once dirname(__FILE__) . '/inc/custom-fields.php';

/* Functions that loads when the theme is activated */
function edc_setup(){
    /* Nav Menus */
    register_nav_menus( array(
        'main_menu' => esc_html__('Menu Principal', 'escuelacocina') /* escuelacocina is located in styles.css Text Domain */
    ) );
}
add_action( 'after_setup_theme', 'edc_setup' );

/* Add bootstrap's nav-link class to the main menu*/
function edc_link_class($atts, $item, $args){
    if($args->theme_location == 'main_menu'){
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'edc_link_class', 10, 3 );

/* 
*   Load theme's CSS and Scritps
*/
function edc_scripts(){
    /* Styles */
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, '4.5.0');

    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css') );

    /* Scripts */
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '2.4.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('popper'), '4.5.0', true);

}
add_action( 'wp_enqueue_scripts', 'edc_scripts' );