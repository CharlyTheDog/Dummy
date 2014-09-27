<?php
// Include css and js files

if( !function_exists ( 'dummy_add_scripts' ) ){
function dummy_add_scripts()
{
    wp_register_style('styles', get_stylesheet_directory_uri().'/assets/css/styles.css');
	wp_enqueue_style('styles');
}
add_action( 'wp_enqueue_scripts', 'dummy_add_scripts' );
}
