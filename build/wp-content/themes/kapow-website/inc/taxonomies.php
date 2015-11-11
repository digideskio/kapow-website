<?php
/**
 * Register custom taxonomies.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
 *
 * @package Kapow Website
 */

/**
 * Register taxonomies.
 *
 * This example includes all of the available `register_taxonomy` parameters.
 *
 * Edit this function accordingly and then uncomment the hook to use it.
 */
function kapow_website_register_taxonomies() {

	// Example taxonomy.
	$labels = array(
		'name'					=> _x( 'Plural Name', 'Taxonomy plural name', 'kapow-website' ),
		'singular_name'			=> _x( 'Singular Name', 'Taxonomy singular name', 'kapow-website' ),
		'search_items'			=> __( 'Search Plural Name', 'kapow-website' ),
		'popular_items'			=> __( 'Popular Plural Name', 'kapow-website' ),
		'all_items'				=> __( 'All Plural Name', 'kapow-website' ),
		'parent_item'			=> __( 'Parent Singular Name', 'kapow-website' ),
		'parent_item_colon'		=> __( 'Parent Singular Name', 'kapow-website' ),
		'edit_item'				=> __( 'Edit Singular Name', 'kapow-website' ),
		'update_item'			=> __( 'Update Singular Name', 'kapow-website' ),
		'add_new_item'			=> __( 'Add New Singular Name', 'kapow-website' ),
		'new_item_name'			=> __( 'New Singular Name Name', 'kapow-website' ),
		'add_or_remove_items'	=> __( 'Add or remove Plural Name', 'kapow-website' ),
		'choose_from_most_used'	=> __( 'Choose from most used kapow-website', 'kapow-website' ),
		'menu_name'				=> __( 'Singular Name', 'kapow-website' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => false,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'example', array( 'post' ), $args );
}
//add_action( 'init', 'kapow_website_register_taxonomies' );
