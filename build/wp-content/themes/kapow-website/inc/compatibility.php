<?php
/**
 * Compatibility with specific plugins.
 *
 * @package Kapow! Website
 */

/**
 * Add theme support for Jetpack Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function kapow_website_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'kapow_website_infinite_scroll_render',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'kapow_website_jetpack_setup' );

/**
 * Custom render function for Jetpack Infinite Scroll.
 */
function kapow_website_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
}
