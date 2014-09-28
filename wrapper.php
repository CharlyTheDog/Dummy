<?php
// The wrapper template
// Load header, footer and sidebar

get_header( dummy_template_base() ); ?>

<section id="primary">
	<div id="content" role="main">
		<?php include dummy_template_path(); ?>
	</div>
</section>

<?php get_sidebar( dummy_template_base() ); ?>

<?php get_footer( dummy_template_base() ); ?>