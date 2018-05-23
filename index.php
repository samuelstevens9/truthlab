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
                            <h1><?= $the_author->display_name; ?></h1>
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

            <div id="blog-filters">
                <h4>Filter Articles</h4>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li class="<?php if ( ! $the_author && ! isset( $_GET[ 'category' ] ) ) {
								echo ' active ';
							} ?>">
                                <a href="<?= is_author() ? '/blog/' : $current_url; ?>"
                                   class="<?= ! is_author() ? 'blog-filter--category' : '' ?>"
                                   data-filter="">
                                    All <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="dropdown <?php if ( $the_author ) {
								echo ' active ';
							} ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">Authors <span class="caret"></span></a>
                                <ul class="dropdown-menu">
									<?php
									$authors = get_users( 'role=author&orderby=post_count&order=DESC' );
									foreach ( $authors as $author ) {
										$authid = 'auth' . $author->ID;
										echo '<li class="' . ( $the_author && $the_author->ID == $author->ID ? 'active' : '' ) . '"><a href="' . get_author_posts_url( $author->ID ) . '" data-filter=".' . $authid . '">' . $author->display_name . '</a></li>';
									}
									?>
                                </ul>
                            </li>
							<?php
							$terms = get_terms( "category" ); // get all categories, but you can use any taxonomy
							$count = count( $terms ); //How many are they?
							if ( $count > 0 ) {  //If there are more than 0 terms
								foreach ( $terms as $term ) {  //for each term:
									echo '<li><a class="blog-filter--category" href="#" data-filter="' . $term->slug . '">' . $term->name . '</a></li>';
								}
							}
							?>
                        </ul>
                    </div>
                </nav>
            </div>


			<?php
			$paged    = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$qry_args = array(
				'posts_per_page' => 13,
				'paged'          => $paged,
				'post_status'    => 'publish'
			);
			if ( isset( $_GET[ 'category' ] ) && $_GET[ 'category' ] ) {
				$qry_args[ 'category_name' ] = $_GET[ 'category' ];
			}
			if ( $the_author ) {
				$qry_args[ 'author' ] = $the_author->ID;
			}
			$the_query = new WP_Query( $qry_args );
			?>
            <div id="blog-posts" data-filter="" data-paged="1"
                 data-author="<?= ! empty( $the_author ) ? $the_author->ID : ''; ?>">
                <section class="courses">
					<?php if ( $the_query->have_posts() ) : ?>
                        <div class="row">
							<?php
							$listing_id  = 0;
							$seventh_num = 0;
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								$listing_id ++;
								include( __DIR__ . '/partials/blog-post-listing.php' );

								if ( ( $listing_id - $seventh_num ) % 3 == 0 || $listing_id % 7 == 0 ) {
									echo '</div><div class="row">';
								}
								if ( $listing_id % 7 == 0 ) {
									$seventh_num ++;
								}
							} ?>
                        </div>
					<?php else : ?>
                        <div class="row">
                            <div class="col-xs-12" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                <h1>Not Found</h1>
                            </div>
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