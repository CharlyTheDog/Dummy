<?php
// We include all .php files from our includes directory here
// If there is any functionality to add do so by adding it to includes/custom.php

function dummy_functions_bootstrap()
{
    foreach ( glob( dirname( __FILE__ ) . '/includes/*.php' ) as $file )
        include $file;
}
add_action( 'after_setup_theme', 'dummy_functions_bootstrap' );