<?php
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
    <header class="header" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle btn navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" id="logoimg" alt="<?php bloginfo( 'name' ); ?>" width="150px">
                </a>
            </div>

            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="navbar-collapse collapse">

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
                        <i class="fa fa-search search-btn"></i>

                        <div class="search-box">
                            <?php get_search_form(); ?>
                        </div> 
                    </li>
                </ul>                         
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </header><!-- #masthead -->

    <div id="main" class="site-main">
