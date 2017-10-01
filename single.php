<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Truthlab
 */

get_header( 'single' ); ?>

    <div id="primary" class="container single-post">
        <main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="section slider-header">
						<?php echo do_shortcode( '[rev_slider alias="single-blog-post"]' ); ?>
                    </div>

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
									$finalTweet = 'https://twitter.com/home?status=' . urlencode( $tweet );
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
										$finalTweet = 'https://twitter.com/home?status=' . $tweet;
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
					<?php /*
					<img class="twitter-dropdown" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dropdown.svg"/>
					<div class="takeaways">
						<?php if( have_rows('takeaway') ): ?>
						    <?php while( have_rows('takeaway') ): the_row(); ?>
						    
					    		<?php
									$tweet = get_sub_field('tweet');
									$tweet = str_replace('\'', '', $tweet);
									$finalTweet = 'https://twitter.com/home?status='.$tweet;
							    ?>
								<a href="<?php echo $finalTweet ?>" target="popup" onclick="window.open('<?php echo $finalTweet ?>','popup','width=600,height=600');">
								<div class="twitter-card">
									<?php the_sub_field('tweet'); ?>
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</div>
								</a>
			
						    <?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				*/ ?>


                    <div class="share" style="display:none;">
                        <div class="social-menu">
                            <ul>
                                <li>
                                    <div data-network="twitter" class="st-custom-button"><i
                                                class="hi-icon fa fa-twitter fa-2x" aria-hidden="true"></i></div>
                                </li>
                                <li>
                                    <div data-network="facebook" class="st-custom-button"><i
                                                class="hi-icon fa fa-facebook-official fa-2x" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li>
                                    <div data-network="googleplug" class="st-custom-button"><i
                                                class="hi-icon fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li>
                                    <div data-network="linkedin" class="st-custom-button"><i
                                                class="hi-icon fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                                    </div>
                                </li>
                            </ul>
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

								$authorid         = get_the_author_meta( 'ID' );
								$url              = get_site_url();
								$siteurl          = $url . '/blog/?author=' . $authorid;
								$currentauthorurl = $siteurl . $authorid;

								?>

                                <a href="<?php echo $currentauthorurl; ?>">
                                    <div class="more-author">
                                        <p class="more">More from this author</p>
                                        <div class="name">
                                            <h3><?php echo get_the_author_meta( 'display_name' ); ?></h3>
                                            <p><?php echo the_author_meta( 'position' ); ?></p>
                                        </div>
										<?php echo do_shortcode( '[avatar]' ); ?>
                                    </div>
                                </a>

                                <div class="more-author-mobile">
									<?php echo do_shortcode( '[avatar]' ); ?>
                                    <h3><?php echo get_the_author_meta( 'display_name' ); ?></h3>
                                    <p><?php echo the_author_meta( 'position' ); ?></p>
                                    <a href="<?php echo $currentauthorurl; ?>" class="more">More from this author</a>
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