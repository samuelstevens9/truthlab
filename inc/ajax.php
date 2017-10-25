<?php

class TruthlabAjax {
	public function __construct() {
		add_action( 'wp_ajax_blog_filtered_posts', array( $this, 'get_blog_filtered_posts' ) );
		add_action( 'wp_ajax_nopriv_blog_filtered_posts', array( $this, 'get_blog_filtered_posts' ) );
	}

	public function get_blog_filtered_posts() {

		$paged = ! empty( $_POST[ 'paged' ] ) ? $_POST[ 'paged' ] : 1;

		$args = array(
			'posts_per_page' => 14,
			'paged'          => $paged,
			'post_status'    => 'publish'
		);

		if ( ! empty( $_POST[ 'category' ] ) ) {
			$args[ 'category_name' ] = $_POST[ 'category' ];
		}

		if ( ! empty( $_POST[ 'author_id' ] ) ) {
			$args[ 'author' ] = $_POST[ 'author_id' ];
		}

		$the_query = new WP_Query( $args );

		ob_start();
		if ( $the_query->have_posts() ) {
			$listing_id = 6;
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$listing_id ++;
				include( __DIR__ . '/../partials/blog-post-listing.php' );
			}
		}
		$output = ob_get_clean();

		$has_more_pages = $the_query->max_num_pages > $paged;

		wp_reset_postdata();

		wp_die( wp_json_encode( array( 'html' => $output, 'has_more' => $has_more_pages ) ) );
	}
}

$GLOBALS[ 'truthlab_ajax_class' ] = new TruthlabAjax();