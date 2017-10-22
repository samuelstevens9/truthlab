<?php
$termsArray  = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
$termsString = ""; //initialize the string that will contain the terms
foreach ( $termsArray as $term ) { // for each term
	$termsString .= $term->slug . ' '; //create a string that has all the slugs
}
$authid              = 'auth' . get_the_author_meta( 'ID' );
$category            = get_the_category();
$featured_img_url    = get_the_post_thumbnail_url( $post->ID, 'blog-small' );
$custom_featured_img = get_field( 'listing_image' );
if ( $custom_featured_img ) {
	$featured_img_url = $custom_featured_img[ 'url' ];
}
?>
<article
        class="<?php echo $termsString; ?><?php echo $authid; ?> course <?= ( $listing_id % 7 == 0 ) ? 'col--seventh' : 'col-md-4 col-sm-6'; ?> col-xs-12">
    <div class="thumbnail">
        <a href="<?php echo get_permalink(); ?>">
            <figure>
                <div class="img-container" style="background-image: url(<?= $featured_img_url ?>)"></div>
                <div class="caption">
                    <figcaption class="info">
                        <p class="cat"><?php echo $category[ 0 ]->cat_name; ?></p>
                        <div class="title">
                            <h2 id="post_title_<?php echo $post->ID; ?>"
                                class="checkOverflow"><?php the_title(); ?></h2>
                            <script>
                                var pt<?= $post->ID; ?> = document.getElementById("post_title_<?= $post->ID; ?>");
                                if (isOverflown(pt<?= $post->ID; ?>)) {
                                    pt<?= $post->ID; ?>.className += " isOverflown";
                                    var text<?= $post->ID; ?> = pt<?= $post->ID; ?>.innerText.split(" ");
                                    for (var w = 0; w < text<?= $post->ID; ?>.length; w++) {
                                        if (w === 0) {
                                            pt<?= $post->ID; ?>.innerText = text<?= $post->ID; ?>[w]
                                        } else {
                                            if (isOverflown(pt<?= $post->ID; ?>)) {
                                                //need to remove this one
                                                var ln<?= $post->ID; ?> = pt<?= $post->ID; ?>.innerText.split(" ");
                                                ln<?= $post->ID; ?>.pop();
                                                //console.log("ln<?= $post->ID; ?>",ln<?= $post->ID; ?>);
                                                pt<?= $post->ID; ?>.innerText = ln<?= $post->ID; ?>.join(" ") + "...";
                                                break;
                                            } else {
                                                pt<?= $post->ID; ?>.innerText += " " + text<?= $post->ID; ?>[w];
                                            }
                                        }
                                    }
                                }
                            </script>
                            <div class="line"></div>
                        </div>
                        <p class="time">
                            <i class="fa fa-clock-o"
                               aria-hidden="true"></i> <?= do_shortcode( '[rt_reading_time]' ); ?>
                            minute read |
                            By: <?= get_the_author_meta( 'display_name' ); ?>
                        </p>
                        <p class="description"><?= get_excerpt( 90 ); ?></p>
                    </figcaption>
                </div>
            </figure>
        </a>
    </div>
</article>