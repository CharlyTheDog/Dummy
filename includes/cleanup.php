<?php
// Remove unnecessary wordpress tags
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// Remove wordpress version number
if( !function_exists ( 'dummy_remove_wp_version' ) ):
function dummy_remove_wp_version() { return ''; }
endif;
add_filter('the_generator', 'dummy_remove_wp_version');


// Remove wordpress version number from any enqueued scripts
if( !function_exists ( 'dummy_remove_wp_ver_css_js' ) ):
function dummy_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
endif;
add_filter( 'style_loader_src', 'dummy_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'dummy_remove_wp_ver_css_js', 9999 );

