<?php

/*if ( function_exists( 'acf_add_options_page' ) ) {

	$page = acf_add_options_page( array(
		'page_title' => 'Truthlab Settings',
		'menu_title' => 'Truthlab Settings',
		'menu_slug'  => 'truthlab-settings',
		'capability' => 'edit_posts',
		'redirect'   => FALSE
	) );

}*/

if ( function_exists( 'acf_add_options_page' ) ) {

	$page = acf_add_options_page( array(
		'page_title' => 'Truthlab Options',
		'menu_title' => 'Truthlab Options',
		'menu_slug'  => 'truthlab-settings',
		'capability' => 'edit_posts',
		'redirect'   => FALSE
	) );

}

if ( ! defined( 'IS_WP_DEV' ) || FALSE == IS_WP_DEV ) {
	require "acf-options.php";
}