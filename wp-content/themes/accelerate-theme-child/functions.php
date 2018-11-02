<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

//Custom post types
function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );


//Add Font Awesome Icons
function enqueue_load_fa() {
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css.all.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );



// Reverse Case Studies Archive order
//function reverse_archive_order( $query ){
//
//    if( !is_admin() && $query->is_post_type_archive('case_studies')  && $query->is_main_query() ) {
//        $query->set('order', 'ASC');
//    }
//}
//
//add_action( 'pre_get_posts', 'reverse_archive_order' );