<?php defined('ABSPATH') or die("Silence is golden."); 

// Custom template for contact page
// Template Name: Kontakt
?>

<main role="main">
    <?php get_template_part('templates/page', 'header'); ?> 
    <div class="container">
        <?php echo do_shortcode( '[contact-form-7 id="68" title="Kontakformular"]' ) ?>
    </div><!-- /.container -->
</main><!-- /.main -->