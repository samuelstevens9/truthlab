<?php
/**
 * The template for displaying all pages.
 *
 * @package Truthlab
 */

global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );

$the_author = NULL;
if ( is_author() ) {
	$the_author = get_user_by( 'ID', get_queried_object_id() );
}

get_header(); ?>

    <div id="primary" class="container">
        <main id="main" class="site-main" role="main">
			<?php if ( $the_author ): ?>
                <div class="author-header-container">
                    <div class="section author-header row">
                        <div class="col-sm-6 col-sm-push-6 text-right author-image-wrapper">
                            <img class="blog-author-hero-avatar"
                                 src="<?= scrapeImage( get_wp_user_avatar( $the_author->ID ) ); ?>"
                                 alt="<?= $the_author->display_name; ?>"/>
                        </div>

                        <div class="author-header-copy col-sm-6 col-sm-pull-6"
                             style="background-image: url(<?= scrapeImage( get_wp_user_avatar( $the_author->ID ) ); ?>)">
                            <p class="spotlight">Author Spotlight</p>
                            <h2><?= $the_author->display_name; ?></h2>
                            <p class="author-header-desc">
								<?= get_the_author_meta( 'description', $the_author->ID ); ?>
                            </p>
                        </div>

                    </div>
                </div>
			<?php else: ?>
                <div class="section slider-header">
					<?= do_shortcode( '[rev_slider alias="blog-landing"]' ); ?>
                </div>
			<?php endif; ?>


            <header class="page-header">
				<?php if ( have_posts() ) : ?>
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ),
							'<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php else : ?>
                    <h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
				<?php endif; ?>
            </header><!-- .page-header -->

            <div id="blog-posts" data-filter="" data-paged="1"
                 data-author="<?= ! empty( $the_author ) ? $the_author->ID : ''; ?>">
                <section class="courses row">
					<?php if ( have_posts() ) : ?>
						<?php
						$listing_id = 0;
						while ( have_posts() ) {
							the_post();
							$listing_id ++;
							include( __DIR__ . '/partials/blog-post-listing.php' );
						} ?>
                        <div class="navigation col-xs-12 text-center" style="margin-top:25px;">
                            <div class="next-posts"><?php next_posts_link(); ?></div>
                            <div class="prev-posts"><?php previous_posts_link(); ?></div>
                        </div>
					<?php else : ?>

                        <div class="col-xs-12" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.',
									'twentyseventeen' ); ?>
                            </p>
                        </div>

					<?php endif; ?>
                </section>
            </div>

			<?php
			$has_more_posts = $the_query->max_num_pages > $paged;
			?>
            <div class="load-more__wrapper" style="<?= ! $has_more_posts ? 'display:none' : ''; ?>">
                <a id="js--load-more-posts" href="#">Load More</a>
            </div>
			<?php
			wp_reset_postdata();
			?>

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