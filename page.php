<?php

/**
 * The template for displaying all pages.
 *
 * @package Truthlab
 */

setcookie('hide_form', true, time()+60*60*24*30, '/');

get_header();

?>

<div id="primary" class="container">
	<main id="main" class="site-main" role="main">
		<?php
			while ( have_posts() ) : the_post();
			//the_ID();
			//the_title();
			the_content();
			endwhile; // End of the loop.
		?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php

//get_sidebar();

get_footer();
