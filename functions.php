<?php
/**
 * This File function Theme
 * 
 * @package Wordpress
 * @subpackage Killua Simple
 */
?>
<?php

// Add Sidebar
function killuasimple_widget_areas(){
    register_sidebar (
        array(
            'name' => 'Footer 1',
            'id' => 'footer-1',
            'description' => 'Widget Footer 1',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
    register_sidebar (
        array(
            'name'          => 'Footer 2',
            'id'            => 'footer-2',
            'description'   => 'Widget Footer 2',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => ''
        )
    );
    register_sidebar (
        array(
            'name'          => 'Footer 3',
            'id'            => 'footer-3',
            'description'   => 'Widget Footer 3',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => ''
        )
    );
}

add_action('widgets_init', 'killuasimple_widget_areas');

// To remove "[...]" at the end of excerpt 
add_filter( 'excerpt_more', '__return_empty_string' );

// Set Length Exceprt
function killuasimple_custom_excerpt_length($length){
    return 100;
}
add_filter('excerpt_length', 'killuasimple_custom_excerpt_length', 999);

// Excerpt
function killuasimple_the_excerpt($trim_character_count = 0){
    if ( !has_excerpt() || 0 === $trim_character_count ){
        the_excerpt();
        return;
    }
    $excerpt = wp_string_all_tags( get_the_excerpt() );
    $excerpt = substr( $excerpt, 0, $trim_character_count );
    $excerpt = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
    echo $excerpt;
}

// Set Theme Support
function killuasimple_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'               => 50,
        'width'                => 150,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    ));

}
add_action('after_setup_theme', 'killuasimple_theme_support');

// Set Menus
function killuasimple_menus(){
    $locations = array(
        'primary' => 'Primary menu items',
        'footer' => 'Footer menu items',
    );
    register_nav_menus($locations);
}
add_action('init', 'killuasimple_menus');

// Register Style CSS
function killuasimple_register_style(){
    
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('killuasimple-boxiconcss', 'https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css', array(), '2.1.2', "all");
    wp_enqueue_style('killuasimple-variablecss', get_template_directory_uri()."/assets/css/variable.css", array(), $version, "all");
    wp_enqueue_style('killuasimple-resetcss', get_template_directory_uri()."/assets/css/reset.css", array(), $version, "all");
    wp_enqueue_style('killuasimple-responsivecss', get_template_directory_uri()."/assets/css/responsive.css", array(), $version, "all");
    wp_enqueue_style('killuasimple-stylecss', get_template_directory_uri()."/style.css", array(), $version, "all");
    wp_enqueue_style('killuasimple-fontstyle', "https://fonts.googleapis.com/css2?family=Catamaran:wght@700;900&family=Roboto:wght@100;300;400;500;700;900&display=swap", array(), "1.0", "all");
    wp_enqueue_style('killuasimple-animatestyle', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css", array(), "4.1.1", "all");
    
}
add_action('wp_enqueue_scripts', 'killuasimple_register_style');

// Register Script Javascript
function killuasimple_register_script(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('killuasimple-scriptjs', get_template_directory_uri()."/assets/js/all.js", array(), $version, true);

}
add_action('wp_enqueue_scripts', 'killuasimple_register_script');
?>