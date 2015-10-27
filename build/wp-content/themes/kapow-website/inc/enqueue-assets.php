<?php
/**
 * Enqueue script and style assets.
 *
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
 *
 * @package Kapow! Website
 */

/**
 * Enqueue assets for the front-end.
 */
function kapow_website_assets() {
	// Header JS.
	wp_enqueue_script( 'header', get_template_directory_uri() . 'assets/js/header.min.js', array(), '0.1', false );

	// Footer JS.
	wp_enqueue_script( 'footer', get_template_directory_uri() . 'assets/js/footer.min.js', array( 'jquery' ), '0.1', true );

	// Comments JS.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Stylesheet.
	wp_enqueue_style( 'kapow-website-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'kapow_website_assets' );

/**
 * Enqueue assets for the admin area.
 */
function kapow_website_admin_assets() {
	// Admin stylesheet.
	wp_enqueue_style( 'kapow-website-style', get_template_directory_uri() . 'assets/css/admin.min.css' );

	// Editor stylesheet.
	wp_enqueue_style( 'kapow-website-style', get_template_directory_uri() . 'assets/css/editor.min.css' );
}
add_action( 'admin_enqueue_scripts', 'kapow_website_admin_assets' );


