<?php defined('ABSPATH') or die("Silence is golden.");

// Main template, used for all pages that have no other template
?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="container"> 
    <div class="row">
        <main class="main with-sidebar" role="main">  
            <?php if (!have_posts()) : ?>
                <div class="alert alert-warning">
                    <?php _e('Sorry, no results were found.', 'dummy'); ?>
                </div>
                <?php get_search_form(); ?>
            <?php endif; ?>

            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('templates/content', get_post_format()); ?>
            <?php endwhile; ?>

            <?php if ($wp_query->max_num_pages > 1) : ?>
                <nav class="post-nav">
                    <ul class="pager">
                        <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'dummy')); ?></li>
                        <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'dummy')); ?></li>
                    </ul>
                </nav>
            <?php endif; ?>
        </main><!-- /.main -->
        <aside class="sidebar">
            <?php get_sidebar( dummy_template_base() ); ?>
        </aside>
    </div><!-- /.content -->
</div><!-- /.container -->
