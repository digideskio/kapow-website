<?php
/**
 * Register widget areas.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 *
 * @package Kapow! Website
 */

/**
 * Register sidebars for widgets.
 */
function kapow_website_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kapow-website' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'kapow_website_widgets_init' );
