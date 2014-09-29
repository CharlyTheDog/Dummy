<footer class="content-info" role="contentinfo">
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar('sidebar-footer1'); ?>
            <?php dynamic_sidebar('sidebar-footer2'); ?>
            <?php dynamic_sidebar('sidebar-footer3'); ?>
        </div>
    </div>
</footer>
<div class="bottomline">
    <div class="container">
        <div class="row bottomline">
            <section class="copyright">
                &copy <?php echo date(Y) ?>  <?php echo get_bloginfo('name'); ?>
            </section>
            <section class="sociallinks">
                <a href="#" alt="<?php echo get_bloginfo('name'); ?> auf facebook">
                    <i class="icon-facebook"></i>
                </a>
                <a href="#" alt="<?php echo get_bloginfo('name'); ?> auf twitter">
                    <i class="icon-twitter"></i>
                </a>
                <a href="#" alt="<?php echo get_bloginfo('name'); ?> auf google+">
                    <i class="icon-google-plus"></i>
                </a>
            </section>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
