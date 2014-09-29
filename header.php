<?php defined('ABSPATH') or die("Silence is golden.");

// The header of our theme

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <!--[if lt IE 8]>
        <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'dummy'); ?>
        </div>
    <![endif]-->
    
    <header class="banner" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle btn navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-reorder"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" id="logoimg" alt="<?php bloginfo( 'name' ); ?>" width="150px">
                </a>
            </div>

            <!-- BEGIN TOP NAVIGATION MENU -->
            <nav class="navbar-collapse collapse" role="navigation">

                <ul class="nav navbar-nav">

                    <?php
                     wp_nav_menu( array(
                        'theme_location'    => 'header-menu',
                        'depth'             => 2,
                        'container'         => '',
                        'items_wrap'        => '%3$s',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>

                    <li class="menu-search">
                        <span class="sep"></span>
                        <button class="search-btn"><i class="icon icon-search"></i></button>
                        <div class="search-box">
                            <?php get_search_form(); ?>
                        </div>
                    </li>
                </ul>                         
            </nav>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </header>
