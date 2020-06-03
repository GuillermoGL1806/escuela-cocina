<?php
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