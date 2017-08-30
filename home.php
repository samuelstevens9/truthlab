<?php
/**
 * The template for displaying all pages.
 *
 * @package Truthlab
 */

//$image = get_field('custom_blog_listing_image');

get_header(); ?>

	<div id="primary" class="container">
		<main id="main" class="site-main" role="main">

			<div class="section slider-header">
				<?php echo do_shortcode( '[rev_slider alias="blog-landing"]' ); ?>
			</div>

			<div class="author-header-container">
				<div class="section author-header">
				</div>
			</div>

			<nav id="filter" class="filters text-center">
				<p class="filter-title">Filter by Author</p>
				<p class="filter-title">Filter Articles</p>
				<div class="filter-container-left">
					<ul class="filter-list author-filters list-inline" data-filter-group="author">
			            <li><a class="button-reset checked" href="javascript:void(0)" data-filter="">All</a></li>
			            <?php
							$authorarray = array();
							$authors = get_users('role=author&orderby=post_count&order=DESC');
							foreach($authors as $author) {
								$authorarray[]=$author->ID;
								$authid = 'auth'.$author->ID;
								echo '<li class="author-button"><a class="author-button" href="javascript:void(0)" data-filter=".'. $authid .'">'.$author->display_name.'</a></li>';
							}
						?>
			        </ul>
				</div>
				

			    <p class="filter-title text-center" style="margin-top:25px;">Filter by Category</p>
			    <div class="filter-container-left">
			        <ul class="filter-list cats-filters list-inline" data-filter-group="category">
			            <li><a href="javascript:void(0)" data-filter="">All</a></li>
			            <?php
							$terms = get_terms("category"); // get all categories, but you can use any taxonomy
							$count = count($terms); //How many are they?
							if ( $count > 0 ){  //If there are more than 0 terms
								foreach ( $terms as $term ) {  //for each term:
									echo '<li><a href="javascript:void(0)" data-filter=".'.$term->slug.'">' . $term->name .'</a></li>';
									//create a list item with the current term slug for sorting, and name for label
								}
							}
						?>
			        </ul>
			    </div>
			    
			</nav><!-- .filters -->

			<?php
		        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		        $the_query = new WP_Query(
		            array(
		                'posts_per_page' => 12,
		                'paged'=>$paged
		            )
		        );
			?>
			<div id="blog-posts" class="">
			<?php if ( $the_query->have_posts() ) : ?>
			<section class="courses row">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post();
					$termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
					$termsString = ""; //initialize the string that will contain the terms
						foreach ( $termsArray as $term ) { // for each term
							$termsString .= $term->slug.' '; //create a string that has all the slugs
						}
					$authid = 'auth'.get_the_author_meta('ID');
					$category = get_the_category();
					$featured_img_url = get_the_post_thumbnail_url($post->ID, 'blog-small');
				?>
	            <article class="<?php echo $termsString; ?><?php echo $authid; ?> course col-md-4 col-sm-6 col-xs-12">
								<div class="thumbnail">
	                <a href="<?php echo get_permalink(); ?>">
	                    <figure>
	                    	<div class="img-container">
		                    	<?php
			                    	if(@get_field('custom_blog_listing_image'))
										{?>
											<img src="<?php the_field('custom_blog_listing_image'); ?>" alt="">
										<?} else {?>
											<img src="<?php echo $featured_img_url; ?>" alt="">

										<?}?>
										<!--
	                        	<img src="<?php the_field('custom_blog_listing_image'); ?>" alt="">
	                        	-->
	                    	</div>
												<div class="caption">
	                        <figcaption class="info">
	                        	<p class="cat"><?php echo $category[0]->cat_name; ?></p>
	                        	<div class="title">
		                            <h2><?php the_title(); ?></h2>
		                            <div class="line"></div>
	                        	</div>
	                            <p class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo do_shortcode( '[rt_reading_time]' ); ?> minute read | By: <?php echo get_the_author_meta('display_name'); ?></p>
	                            <p class="description"><?php echo the_excerpt(80); ?></p>
	                        </figcaption>
												</div>
	                    </figure>
	                </a>
								</div>
	            </article>
	            <?php endwhile;  ?>
	        </section>
			</div>
			<!--
	        <?php load_more_button() ?>
	        -->

	        <div class="navigation" style="margin-top:25px;">
					<div class="next-posts"><?php next_posts_link(); ?></div>
					<div class="prev-posts"><?php previous_posts_link(); ?></div>
				</div>

			<? else : ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h1>Not Found</h1>
			</div>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
