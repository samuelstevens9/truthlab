<?php
/**
 * The template for displaying all pages.
 *
 * @package Truthlab
 */

get_header(); ?>

    <div id="primary" class="container">
        <main id="main" class="site-main" role="main">

            <header class="page-header">
				<?php if ( have_posts() ) : ?>
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ),
							'<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php else : ?>
                    <h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
				<?php endif; ?>
            </header><!-- .page-header -->

            <div id="blog-posts">
                <section class="courses">
                    <div class="row">
						<?php if ( have_posts() ) : ?>
						<?php
						$listing_id  = 0;
						$seventh_num = 0;
						while ( have_posts() ) {
							the_post();
							$listing_id ++;

							include( __DIR__ . '/partials/blog-post-listing.php' );

							if ( ( $listing_id - $seventh_num ) % 3 == 0 ) {
								echo '</div><div class="row">';
							}
							if ( $listing_id % 7 == 0 ) {
								$seventh_num ++;
							}
						} ?>
                    </div>
                    <div class="row">
                        <div class="navigation col-xs-12 text-center" style="margin-top:25px;">
                            <div class="next-posts"><?php next_posts_link(); ?></div>
                            <div class="prev-posts"><?php previous_posts_link(); ?></div>
                        </div>
                    </div>
					<?php else : ?>
                        <div class="row">
                            <div class="col-xs-12" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.',
										'twentyseventeen' ); ?>
                                </p>
                            </div>
                        </div>
					<?php endif; ?>
                </section>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

    <section id="cta">
        <div class="container">
            <div class="row cta__red">
                <div class="col-md-7">
                    <h2>Create Better Customer Experiences</h2>
                    <div class="white"></div>
                    <p>Learn how Truthlab can help you track, measure and improve every aspect of your customers’
                        journey.</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 text-right">
                    <a href="#" class="button button--white request-toggle">Request a Demo</a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();