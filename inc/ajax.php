<?php

class TruthlabAjax {
	public function __construct() {
		add_action( 'wp_ajax_blog_filtered_posts', array( $this, 'get_blog_filtered_posts' ) );
		add_action( 'wp_ajax_nopriv_blog_filtered_posts', array( $this, 'get_blog_filtered_posts' ) );
	}

	public function get_blog_filtered_posts() {

		$paged         = ! empty( $_POST[ 'paged' ] ) ? $_POST[ 'paged' ] : 1;
		$post_per_page = ( $paged == 1 ) ? 13 : 14;
		$offset        = ( $paged > 1 ? ( 13 + ( $paged > 2 ? ( $paged - 2 ) * 14 : 0 ) ) : 0 );

		$args = array(
			'posts_per_page' => $post_per_page,
			'offset'         => $offset,
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
			echo '<!--Ajax Apended-->';
			echo '<div class="row">';
			$listing_id  = ( $paged == 1 ) ? 0 : ( ( $paged - 1 ) * $post_per_page - 1 );
			$seventh_num = $listing_id;
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$listing_id ++;
				include( __DIR__ . '/../partials/blog-post-listing.php' );

				if ( ( $listing_id - $seventh_num ) % 3 == 0 || $listing_id % 7 == 0 ) {
					echo '</div><div class="row">';
				}
				if ( $listing_id % 7 == 0 ) {
					$seventh_num ++;
				}
			}
			echo '</div>';
		}
		$output = ob_get_clean();

		$has_more_pages = $the_query->found_posts > ( $paged >= 1 ? ( 13 + ( $paged >= 2 ? ( $paged - 1 ) * 14 : 0 ) ) : 0 + ( $paged == 1 ? 13 : 14 ) );

		wp_reset_postdata();

		wp_die( wp_json_encode( array(
			'html'     => $output,
			'has_more' => $has_more_pages
		) ) );
	}
}

$GLOBALS[ 'truthlab_ajax_class' ] = new TruthlabAjax();