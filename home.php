<?php
/**
 * The template for displaying all pages.
 *
 * @package Truthlab
 */

//$image = get_field('custom_blog_listing_image');
global $wp;
$current_url = home_url(add_query_arg(array(),$wp->request));

$the_author = null;
if(isset($_GET['author']) && $_GET['author']){
	$the_author = get_user_by('login',$_GET['author']);
	//var_dump($the_author);
	//TODO: if roles[] has author|author=true, and if user_status == 0 active
}

get_header(); ?>

	<div id="primary" class="container">
		<main id="main" class="site-main" role="main">
			<?php if($the_author): ?>
				<div class="author-header-container">
					<div class="section author-header row">
						<div class="col-sm-6 col-sm-push-6 text-right">
							<img class="blog-author-hero-avatar" src="<?php echo scrapeImage(get_wp_user_avatar($the_author->ID)); ?>" alt="<?php echo $the_author->display_name; ?>" />
						</div>
						
						<div class="author-header-copy col-sm-6 col-sm-pull-6">
							<p class="spotlight">Author Spotlight</p>
							<h2><?php echo $the_author->display_name; ?></h2>
							<p class="author-header-desc">
								<?php echo get_the_author_meta('description',$the_author->ID); ?>
							</p>
						</div>
						
					</div>
				</div>
			<?php else: ?>
			<div class="section slider-header">
				<?php echo do_shortcode( '[rev_slider alias="blog-landing"]' ); ?>
			</div>
			<?php endif; ?>
			
			
<div id="blog-filters">
	<h4>Filter Articles</h4>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li class="<?php if(!$the_author && !isset($_GET['category'])){ echo ' active ';}?>"><a href="<?php echo $current_url; ?>">All <span class="sr-only">(current)</span></a></li>
				<li class="dropdown <?php if($the_author){ echo ' active ';}?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Authors <span class="caret"></span></a>
          <ul class="dropdown-menu">
						<?php
							$authorarray = array();
							$authors = get_users('role=author&orderby=post_count&order=DESC');
							foreach($authors as $author) {
								$authorarray[]=$author->ID;
								$authid = 'auth'.$author->ID;
								echo '<li class="'.($the_author && $the_author->ID == $author->ID?'active':'').'"><a class="" href="?author='.$author->user_login.'" data-filter=".'. $authid .'">'.$author->display_name.'</a></li>';
							}
						?>
					</ul>
				</li>
				<?php
					$terms = get_terms("category"); // get all categories, but you can use any taxonomy
					$count = count($terms); //How many are they?
					if ( $count > 0 ){  //If there are more than 0 terms
						foreach ( $terms as $term ) {  //for each term:
							$is_active = (isset($_GET['category']) && $_GET['category'] == $term->slug);
							
							echo '<li class="'.($is_active?'active':'').'"><a href="?category='.$term->slug.($the_author?'&author='.$the_author->user_login:'').'" data-filter=".'.$term->slug.'">' . $term->name .'</a></li>';
							//create a list item with the current term slug for sorting, and name for label
						}
					}
				?>
			</ul>
		</div>
	</nav>
</div>


			<?php
		        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$qry_args = array(
								'posts_per_page' => 12,
								'paged'=>$paged
						);
						if(isset($_GET['category']) && $_GET['category']){
							$qry_args['category_name']=$_GET['category'];
						}
						if($the_author){
							$qry_args['author']=$the_author->ID;
						}
		        $the_query = new WP_Query($qry_args);
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
		                            <h2 id="post_title_<?php echo $post->ID; ?>" class="checkOverflow"><?php the_title(); ?></h2>
<?php /*
Add <h2 id="post_$post->ID"> so we can select it in JS
JS function to check if content is overflowing. 
Codepen for css class to add an ellipse https://codepen.io/natonischuk/pen/KpNKQZ
Need to set .course h2 { overflow: hidden; position: relative; text-align: justify; margin-right: -1em;padding-right: 1em;}
.course h2.overflow:before{content: '...';position: absolute;right: 0;bottom: 0;}
																function isOverflown(element) {
    return element.scrollHeight > element.clientHeight || element.scrollWidth > element.clientWidth;
}*/
?><script>
var pt<?php echo $post->ID; ?> = document.getElementById("post_title_<?php echo $post->ID; ?>");
if(isOverflown(pt<?php echo $post->ID; ?>)){
	pt<?php echo $post->ID; ?>.className += " isOverflown";
	var text<?php echo $post->ID; ?> = pt<?php echo $post->ID; ?>.innerText.split(" ");
	for(var w=0;w<text<?php echo $post->ID; ?>.length;w++){ 
		if(w==0){
			pt<?php echo $post->ID; ?>.innerText = text<?php echo $post->ID; ?>[w]
		}else{
			if(isOverflown(pt<?php echo $post->ID; ?>)){
				//need to remove this one
				var ln<?php echo $post->ID; ?> = pt<?php echo $post->ID; ?>.innerText.split(" ");
				ln<?php echo $post->ID; ?>.pop();
				console.log("ln<?php echo $post->ID; ?>",ln<?php echo $post->ID; ?>);
				pt<?php echo $post->ID; ?>.innerText = ln<?php echo $post->ID; ?>.join(" ")+"..."; 
				break;
			}else{
				pt<?php echo $post->ID; ?>.innerText += " "+text<?php echo $post->ID; ?>[w]; 
			}
		} 
	}
}
</script>
		                            <div class="line"></div>
	                        	</div>
	                            <p class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo do_shortcode( '[rt_reading_time]' ); ?> minute read | By: <?php echo get_the_author_meta('display_name'); ?></p>
	                            <p class="description"><?php echo get_excerpt(90); ?></p>
	                        </figcaption>
												</div>
	                    </figure>
	                </a>
								</div>
	            </article>
	            <?php endwhile;  ?>
	        </section>
			</div>

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


	<section id="cta">
	  <div class="container">
	    <div class="row cta__red">
	      <div class="col-md-7">
	        <h2>Create Better Customer Experiences</h2>
	        <div class="white"></div>
	        <p>Learn how Truthlab can help you track, measure and improve every aspect of your customers’ journey.</p>
	      </div>
				<div class="col-md-1"></div>
	      <div class="col-md-4 text-right">
	        <a href="#" class="button button--white request-toggle">Request a Demo</a>
	      </div>
	    </div>
	  </div>
	</section>
	
<?php

get_footer();
