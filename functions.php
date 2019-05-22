<?php
 /* Adding Bootstrap */
function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );
/* End Bootstrap */

/* Font Awesome */
add_action( 'wp_enqueue_scripts', 'custom_load_font_awesome' );
function custom_load_font_awesome() {

    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.8.2/css/all.css' );

}
/*

/* Support for title */
function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );
/* End Title */

/* Menus */
function bootstrapstarter_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'bootstrapstarter_register_menu' );
/* End Menu */


/* Widgets */
function bootstrapstarter_widgets_init() {

    register_sidebar( array(
        'name'          => 'Footer - Copyright Text',
        'id'            => 'footer_copyright_text',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'bootstrapstarter_widgets_init' );
/* End Widgets */

/* Sidebar */
register_sidebar( array(
    'name'          => 'Sidebar - Inset',
    'id'            => 'sidebar-1',
    'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
) );

register_sidebar( array(
    'name'          => 'Sidebar - Default',
    'id'            => 'sidebar-2',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
) );
/* End Sidebar */


/* Featured Image */
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
/* End Featured Image */
?>
