<?php
/**
 * Kapow Website Theme Customizer.
 *
 * @link https://codex.wordpress.org/Theme_Customization_API
 *
 * @package Kapow Website
 */

/**
 * Customizer housekeeping.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kapow_website_cust_reg_housekeeping( $wp_customize ) {
	// Add postMessage support for site title and description for the Theme Customizer.
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'kapow_website_cust_reg_housekeeping' );

/**
 * Upload a custom site logo. Resides in the 'Site Identity' section.
 *
 * Use <?php echo get_theme_mod( 'kapow_website_logo' ); ?> to use this in the theme.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kapow_website_cust_reg_logo( $wp_customize ) {

	// Setting.
	$wp_customize->add_setting( 'kapow_website_logo' , array(
		'transport' => 'postMessage',
	));

	// Control.
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'kapow_website_logo',
			array(
				'label'       => __( 'Site Logo', 'kapow-website' ),
				'description' => __( 'Upload a custom logo for your site which can be retrieved for use in a template by using get_theme_mod( \'kapow_website_logo\' ) to fetch the image source URL.', 'kapow-website' ),
				'section'     => 'title_tagline',
				'settings'    => 'kapow_website_logo',
				'priority'    => 10,
			)
		)
	);
}
add_action( 'customize_register', 'kapow_website_cust_reg_logo' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function kapow_website_customize_preview_js() {
	wp_enqueue_script( 'kapow_website_customizer', get_template_directory_uri() . 'assets/js/customizer.js', array( 'customize-preview' ), date( 'dmY' ), true );
}
add_action( 'customize_preview_init', 'kapow_website_customize_preview_js' );
