<?php defined('ABSPATH') or die("Silence is golden."); 

// 404 template
?>

<main role="main">
    <?php get_template_part('templates/page', 'header'); ?> 
    <div class="container">
        <div class="alert alert-warning">
            <?php _e('Sorry, but the page you were trying to view does not exist.', 'dummy'); ?>
        </div>

        <p><?php _e('It looks like this was the result of either:', 'dummy'); ?></p>
        <ul>
            <li><?php _e('a mistyped address', 'dummy'); ?></li>
            <li><?php _e('an out-of-date link', 'dummy'); ?></li>
        </ul>

        <?php get_search_form(); ?>
    </div>
</main>
