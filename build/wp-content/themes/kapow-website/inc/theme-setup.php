<?php
/**
 * Theme setup.
 *
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme
 *
 * @package Kapow! Website
 */

if ( ! function_exists( 'kapow_website_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kapow_website_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Kapow! Website, use a find and replace
		 * to change 'kapow-website' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'kapow-website', get_template_directory() . '/languages' );

		/*
		 * Register navigation menus.
		 */
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'kapow-website' ),
		) );

		/*
		 * Add default posts and comments RSS feed links to head.
		 */
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );
	}
	add_action( 'after_setup_theme', 'kapow_website_theme_setup' );
endif;