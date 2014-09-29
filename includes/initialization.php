<?php
// Theme initialization

// Remove unwanted plugins
if ( is_admin() && isset($_GET['activated']) && 'themes.php' == $GLOBALS['pagenow'] ) {
    require_once( ABSPATH.'wp-admin/includes/plugin.php' );
    require_once( ABSPATH.'wp-admin/includes/file.php' );
    if ( file_exists( WP_PLUGIN_DIR.'/hello.php' ) ) {    
        delete_plugins( array( 'hello.php' ) );
    }
    if ( file_exists( WP_PLUGIN_DIR.'/akismet/akismet.php' ) ) {
        delete_plugins( array( '/akismet/akismet.php' ) );
    }
}