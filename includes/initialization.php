<?php
// Theme initialization

// Remove unwanted plugins
if ( is_admin() && isset($_GET['activated']) && 'themes.php' == $GLOBALS['pagenow'] ):
    require_once( ABSPATH.'wp-admin/includes/plugin.php' );
    require_once( ABSPATH.'wp-admin/includes/file.php' );
    if ( file_exists( WP_PLUGIN_DIR.'/hello.php' ) ) {    
        delete_plugins( array( 'hello.php' ) );
    }
    if ( file_exists( WP_PLUGIN_DIR.'/akismet/akismet.php' ) ) {
        delete_plugins( array( '/akismet/akismet.php' ) );
    }
endif;

// Register Custom Navigation Walker
require_once('vendor/wp_bootstrap_navwalker.php');


// Add theme functions
if ( !function_exists( 'dummy_wp_theme_setup' ) ):
function dummy_wp_theme_setup() {
    
    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 672, 372, true );

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
    
    // Register footer sidebars
    register_sidebar( array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => __( 'Appears in the footer area' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => __( 'Appears in the footer area' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-sidebar-3',
        'description' => __( 'Appears in the footer area' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );     
}
endif;
dummy_wp_theme_setup();
