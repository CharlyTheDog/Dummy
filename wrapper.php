<?php defined('ABSPATH') or die("Silence is golden.");

// The wrapper template
// Load header, footer and sidebar

get_header( dummy_template_base() ); ?>

<?php include dummy_template_path(); ?>

<?php get_footer( dummy_template_base() ); ?>