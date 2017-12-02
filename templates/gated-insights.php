<?php
/**
 * Template Name: Gated Insights
 */

get_header(); ?>

    <section class="main-wrapper container">
        <div class="main-content-wrapper">
            <div class="featured-image-wrapper">
				<?php the_post_thumbnail(); ?>
            </div>

            <div class="main-content">
				<?php the_content(); ?>
            </div>
        </div>
        <aside>
			<?php
			if ( have_rows( 'sidebar_blocks' ) ) {

				while ( have_rows( 'sidebar_blocks' ) ) : the_row();

					if ( get_row_layout() == 'wysiwyg_block' ):

						the_sub_field( 'content' );

                    elseif ( get_row_layout() == 'html_block' ):

						the_sub_field( 'content' );

					endif;

				endwhile;

			}
			?>
        </aside>
    </section>

<?php
get_footer();