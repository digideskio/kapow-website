<?php
/**
 * Register custom post types.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 *
 * @package Kapow Website
 */

/**
 * Register post types.
 *
 * This example includes all of the available `register_post_type` parameters.
 *
 * Edit this function accordingly and then uncomment the hook to use it.
 */
function kapow_website_register_post_types() {

	// Example post type.
	$labels = array(
		'name'                => __( 'Plural Name', 'kapow-website' ),
		'singular_name'       => __( 'Singular Name', 'kapow-website' ),
		'add_new'             => _x( 'Add New Singular Name', 'kapow-website', 'kapow-website' ),
		'add_new_item'        => __( 'Add New Singular Name', 'kapow-website' ),
		'edit_item'           => __( 'Edit Singular Name', 'kapow-website' ),
		'new_item'            => __( 'New Singular Name', 'kapow-website' ),
		'view_item'           => __( 'View Singular Name', 'kapow-website' ),
		'search_items'        => __( 'Search Plural Name', 'kapow-website' ),
		'not_found'           => __( 'No Plural Name found', 'kapow-website' ),
		'not_found_in_trash'  => __( 'No Plural Name found in Trash', 'kapow-website' ),
		'parent_item_colon'   => __( 'Parent Singular Name:', 'kapow-website' ),
		'menu_name'           => __( 'Plural Name', 'kapow-website' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'trackbacks',
			'comments',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type( 'example', $args );
}
//add_action( 'init', 'kapow_website_register_post_types' );
