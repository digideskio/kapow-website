<?php
/**
 * Custom meta boxes for this theme.
 *
 * Ensure that you have installed Custom Meta Boxes as a mu-plugin either
 * manually or via Composer, and that the add_filter statement is uncommented.
 *
 * @link https://github.com/humanmade/Custom-Meta-Boxes
 *
 * @package Kapow Website
 */

/**
 * Create meta boxes.
 *
 * This is an example of how to create a meta box.
 *
 * Edit this function accordingly and then uncomment the hook to use it.
 *
 * @param  array $meta_boxes Existing meta boxes.
 * @return array Existing plus custom meta boxes.
 */
function kapow_website_create_meta_boxes( array $meta_boxes ) {

	// Example field.
	$example_fields = array(
		array(
		    'id'   => 'example-field-text',
		    'name' => 'A simple text input',
		    'type' => 'text',
		),
	);

	// Example meta box.
	$meta_boxes[] = array(
		'title'    => __( 'Example Meta Box', 'kapow-website' ),
		'pages'    => array( 'page', 'post' ),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => $example_fields,
	);

	return $meta_boxes;
}
//add_filter( 'cmb_meta_boxes', 'kapow_website_create_meta_boxes' );
