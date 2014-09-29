<?php
// Add icons to <head>

if( !function_exists ( 'dummy_add_head_icons' ) ):
function dummy_add_head_icons() { ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/apple-touch-icon-57-precomposed.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/apple-touch-icon-144-precomposed.png" />
<?php }
endif;
add_action('wp_head', 'dummy_add_head_icons');

