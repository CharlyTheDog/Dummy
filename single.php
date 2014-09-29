<?php defined('ABSPATH') or die("Silence is golden.");

// Single template, used for all single posts
?>

<?php get_template_part('templates/page', 'header'); ?>
<div class="container"> 
    <div class="row">
        <main class="main with-sidebar" role="main">  
            <?php get_template_part('templates/content', 'single'); ?>
        </main><!-- /.main -->
        <aside class="sidebar">
            <?php get_sidebar( dummy_template_base() ); ?>
        </aside>
    </div><!-- /.content -->
</div><!-- /.container -->
