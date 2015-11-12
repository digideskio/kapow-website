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

	$home_fields = array(
		array(
			'id'   => 'section-title',
			'name' => __( 'Title', 'kapow-website' ),
			'type' => 'text',
			'cols' => 6,
		),
		array(
			'id'   => 'section-anchor',
			'name' => __( 'Anchor', 'kapow-website' ),
			'type' => 'text',
			'cols' => 6,
		),
		array(
			'id'   => 'section-content',
			'name' => __( 'Content', 'kapow-website' ),
			'type' => 'wysiwyg',
			'options' => array(
				'textarea_rows' => 10,
			),
		),
		array(
			'id'   => 'section-image',
			'name' => __( 'Image', 'kapow-website' ),
			'type' => 'image',
			'size' => 'height=280&width=280&crop=1',
		),
		array(
			'id'   => 'section-button-one-label',
			'name' => __( 'Button #1 Label', 'kapow-website' ),
			'type' => 'text',
			'cols' => 6,
		),
		array(
			'id'   => 'section-button-one-link',
			'name' => __( 'Button #1 Link', 'kapow-website' ),
			'type' => 'text',
			'cols' => 6,
		),
	);

	$home_sections = array(
		array(
			'id'   => 'home-section',
			'name' => __( 'Sections', 'kapow-website' ),
			'type' => 'group',
			'fields' => $home_fields,
			'repeatable' => true,
			'repeatable_max' => 10,
		),
	);

	$meta_boxes[] = array(
		'title'    => __( 'Homepage Content', 'kapow-website' ),
		'pages'    => array( 'page' ),
		'show_on'  => array( 'id' => array( '2' ) ),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => $home_sections,
	);

	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'kapow_website_create_meta_boxes' );
