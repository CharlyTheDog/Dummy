<?php
// Template wrapper by scribu.net

if( !function_exists ( 'dummy_template_path' ) ){
function dummy_template_path() {
    return Dummy_Wrapping::$main_template;
}
}

if( !function_exists ( 'dummy_template_base' ) ){
function dummy_template_base() {
	return Dummy_Wrapping::$base;
}
}

if( !function_exists ( 'Dummy_Wrapping' ) ):
class Dummy_Wrapping {

	/**
	 * Stores the full path to the main template file
	 */
	static $main_template;

	/**
	 * Stores the base name of the template file; e.g. 'page' for 'page.php' etc.
	 */
	static $base;

	static function wrap( $template ) {
		self::$main_template = $template;

		self::$base = substr( basename( self::$main_template ), 0, -4 );

		if ( 'index' == self::$base )
			self::$base = false;

		$templates = array( 'wrapper.php' );

		if ( self::$base )
			array_unshift( $templates, sprintf( 'wrapper-%s.php', self::$base ) );

		return locate_template( $templates );
	}
}
endif;
add_filter( 'template_include', array( 'Dummy_Wrapping', 'wrap' ), 99 );
