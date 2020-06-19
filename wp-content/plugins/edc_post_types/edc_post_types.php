<?php
/*
    Plugin Name: EDC - Post Types
    Plugin URI:
    Description: Añade Post Types al sitio EDC
    Version: 1.0.0
    Author: Marco Antonio Aspeitia Peña
    Author URI: https://www.devitm.com/
    Text Domain: escuelacocina
*/

if(!defined('ABSPATH')) die();

function edc_posttype_clases() {
    $labels = array(
        'name'                  => _x( 'Clases Cocina', 'edc' ),
        'singular_name'         => _x( 'Clase Cocina',  'edc' ),
        'menu_name'             => _x( 'Clases Cocina', 'Admin Menu text', 'edc' ),
        'name_admin_bar'        => _x( 'Clase Cocina', 'Add New on Toolbar', 'edc' ),
        'add_new'               => __( 'Agregar Nueva', 'edc' ),
        'add_new_item'          => __( 'Agregar Nueva Clase', 'edc' ),
        'new_item'              => __( 'Nueva Clase', 'edc' ),
        'edit_item'             => __( 'Editar Clase', 'edc' ),
        'view_item'             => __( 'Ver Clase', 'edc' ),
        'all_items'             => __( 'Todas las Clases de Cocina', 'edc' ),
        'search_items'          => __( 'Buscar Clases Cocina', 'edc' ),
        'parent_item_colon'     => __( 'Padre Clases Cocina:', 'edc' ),
        'not_found'             => __( 'No se encontraron Clases.', 'edc' ),
        'not_found_in_trash'    => __( 'No se encontrar clases en la Papelera', 'edc' ),
        'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'edc' ),
        'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'edc' ),
        'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'edc' ),
        'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'edc' ),
        'archives'              => _x( 'Archivo de Clases', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'edc' ),
        'insert_into_item'      => _x( 'Insertar en Clases', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'edc' ),
        'uploaded_to_this_item' => _x( 'Cargadas En Clase', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'edc' ),
        'filter_items_list'     => _x( 'Filtrar Lista de Clases', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'edc' ),
        'items_list_navigation' => _x( 'Clases Cocina navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'edc' ),
        'items_list'            => _x( 'Clases Cocina lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'edc' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'clases-cocina' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor',  'thumbnail' ),
        'show_in_rest'       => true,
        'rest_base'          => 'clases-cocina'
    );
 
    register_post_type( 'clases_cocina', $args );
}
 
add_action( 'init', 'edc_posttype_clases' );