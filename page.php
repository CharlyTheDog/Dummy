<?php defined('ABSPATH') or die("Silence is golden."); 

// Page template, used for all pages
?>

<?php get_template_part('templates/page', 'header'); ?>
<div class="container">
    <div class="row">
        <main class="main" role="main">
            <?php while (have_posts()) : the_post(); ?>            
                <?php get_template_part('templates/content', 'page'); ?>
            <?php endwhile; ?>
        </main><!-- /.main -->
    </div><!-- /.content -->
</div><!-- /.container -->
