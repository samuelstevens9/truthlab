<?php

function is_the_blog() {
	return is_home() || is_archive() || is_single() || is_search();
}

/**
 * @param $query
 *
 * @return mixed
 *
 * Makes the sliders show on preview mode, if the user is logged in
 */
function display_revolution_slider_on_preview( $query ) {
	if ( is_user_logged_in() ) {
		$query[ 'post_status' ] = 'any';
	}

	return $query;
}

add_filter( 'revslider_get_posts', 'display_revolution_slider_on_preview' );