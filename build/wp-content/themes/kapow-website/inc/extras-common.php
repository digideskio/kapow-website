<?php
/**
 * Custom, commonly used functions that act independently of the theme templates.
 *
 * @package Kapow Website
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function kapow_website_body_classes( $classes ) {
	global $post;

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_singular() ) {
		$classes[] = 'slug-' . $post->post_name;
	}

	return $classes;
}
add_filter( 'body_class', 'kapow_website_body_classes' );

/**
 * Remove <p> tags around images.
 *
 * @param string $content Page/post content.
 * @return string
 */
function kapow_website_remove_image_ptags( $content ) {
	return preg_replace( '/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content );
}
add_filter( 'the_content' , 'kapow_website_remove_image_ptags' );

