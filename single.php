<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Truthlab
 */

get_header( 'single' ); ?>
<!-- single.php -->
    <div id="primary" class="container single-post">
        <main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php 
                    if(function_exists('has_post_video') && has_post_video()){
                      echo '<div class="videoWrapper">';
                        the_post_video( array(1110,624) );
                        echo '</div><br />';
                    }else{
                    ?>
                    <div class="section slider-header">
						<?= do_shortcode( '[rev_slider alias="single-blog-post"]' ); ?>
                    </div>
                    <?php 
                  } //end else not has_post_video
                    ?>
                    <div class="twitter twitter-desktop">
                        <h2>Top Takeaways</h2>
                        <img class="twitter-dropdown"
                             src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/dropdown.svg"/>
                        <div class="takeaways">
							<?php if ( have_rows( 'takeaway' ) ): ?>
								<?php while ( have_rows( 'takeaway' ) ): the_row(); ?>

									<?php
									$tweet      = get_sub_field( 'tweet' );
									$tweet      = str_replace( '\'', '', $tweet );
									$append     = get_field( 'takeaway_appended_text', 'option' );
									$finalTweet = 'https://twitter.com/home?status=' . urlencode( $tweet . ( $append ? ' ' . $append : '' ) );
									?>
                                    <a href="<?php echo $finalTweet ?>" target="popup"
                                       onclick="window.open('<?php echo $finalTweet ?>','popup','width=600,height=600');">
                                        <div class="twitter-card">
											<?php the_sub_field( 'tweet' ); ?>
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                    </a>

								<?php endwhile; ?>
							<?php endif; ?>
                        </div>
                    </div>

                    <div class="twitter twitter-mobile">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <h2>Top Takeaways <span class="glyphicon glyphicon-triangle-bottom"></span></h2></a>
                            <div class="takeaways dropdown-menu">
								<?php if ( have_rows( 'takeaway' ) ): ?>
									<?php while ( have_rows( 'takeaway' ) ): the_row(); ?>

										<?php
										$tweet      = get_sub_field( 'tweet' );
										$tweet      = str_replace( '\'', '', $tweet );
										$append     = get_field( 'takeaway_appended_text', 'option' );
										$finalTweet = 'https://twitter.com/home?status=' . urlencode( $tweet . ( $append ? ' ' . $append : '' ) );
										?>
                                        <a href="<?php echo $finalTweet ?>" target="popup"
                                           onclick="window.open('<?php echo $finalTweet ?>','popup','width=600,height=600');">
                                            <div class="twitter-card">
												<?php the_sub_field( 'tweet' ); ?>
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                        </a>

									<?php endwhile; ?>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="blog-post">
						<?php if ( is_single() ) { ?>

                            <div class="entry-content">

								<?php
								the_content( sprintf(
								/* translators: %s: Name of current post. */
									wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>',
										'truthlab' ), array( 'span' => array( 'class' => array() ) ) ),
									the_title( '<span class="screen-reader-text">"', '"</span>', FALSE )
								) );

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'truthlab' ),
									'after'  => '</div>',
								) );

								$authorid = get_the_author_meta( 'ID' );
								?>

                                <a href="<?= get_author_posts_url( $authorid ); ?>">
                                    <div class="more-author">
                                        <p class="more">More from this author</p>
                                        <div class="name">
                                            <h3><?php echo get_the_author_meta( 'display_name' ); ?></h3>
                                            <p class="author__position-title">
												<?php the_field( 'professional_title',
													'user_' . get_the_author_meta( 'id' ) ); ?>
                                            </p>
                                        </div>
										<?php echo do_shortcode( '[avatar]' ); ?>
                                    </div>
                                </a>

                                <div class="more-author-mobile">
									<?php echo do_shortcode( '[avatar]' ); ?>
                                    <h3><?php echo get_the_author_meta( 'display_name' ); ?></h3>
                                    <p class="author__position-title">
										<?php the_field( 'professional_title',
											'user_' . get_the_author_meta( 'id' ) ); ?>
                                    </p>
                                    <a href="<?= get_author_posts_url( $authorid ); ?>" class="more">
                                        More from this author
                                    </a>
                                </div>

                            </div>

						<?php } ?>
                    </div>
                    <div style="clear:both;">

                </article>

			<?php endwhile; ?>

        </main>

    </div>


    <section id="cta">
        <div class="container">
            <div class="row cta__blue">
                <div class="col-md-7">
                    <h2>Watch Highlight Reels</h2>
                    <div class="white"></div>
                    <p>Find out how Truthlab can shed light on the customer experience with the truth quotient.</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 text-right">
                    <a href="#" class="button button--white request-toggle">Request a Demo</a>
                </div>
            </div>
        </div>
    </section>

    <div style="clear:both;">

<?php
get_footer();