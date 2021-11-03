<?php
function load_css()
{
    wp_register_style(
        'main',
        get_template_directory_uri() . '/css/main.css',
        [],
        1,
        'all'
    );
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

register_nav_menus(
    array(
        'main-menu' => 'primary',
        'footer-menu' => 'Footer menu location'
    )
);
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_sidebar( array(
    'name' => 'Footer Sidebar 1',
    'id' => 'footer-sidebar-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

add_theme_support( 'custom-logo' );
add_theme_support('title-tag');

function create_posttype() {
    register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => __( 'projects' ),
                'singular_name' => __( 'project' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'projects'),
        )
    );
}
add_action( 'init', 'create_posttype' );
