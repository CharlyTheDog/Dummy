<?php
// Include css and js files

if( !function_exists ( 'dummy_add_scripts' ) ):
function dummy_add_scripts()
{    
    // Adding our own styles and scripts    
    wp_register_style( 'styles', get_stylesheet_directory_uri().'/assets/css/styles.css', false, '1.0' );
	wp_enqueue_style( 'styles' );
    
    // Adding main.js to footer
    // Since we need jquery, we add it as a dependency
    wp_register_script( 'main', get_stylesheet_directory_uri().'/assets/js/main.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'main' );
        
    wp_enqueue_script( 'jquery' );
    
}
endif;
add_action( 'wp_enqueue_scripts', 'dummy_add_scripts' );
