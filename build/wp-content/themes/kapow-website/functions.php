<?php
/**
 * Kapow! Website theme dependencies.
 *
 * @package Kapow! Website
 */

/**
 * Theme setup.
 */
require get_template_directory() . '/inc/theme-setup.php';

/**
 * Enqueue script and style assets.
 */
require get_template_directory() . '/inc/enqueue-assets.php';

/**
 * Register widget areas.
 */
require get_template_directory() . '/inc/widget-areas.php';

/**
 * Register custom post types.
 */
require get_template_directory() . '/inc/post-types.php';

/**
 * Register custom taxonomies.
 */
require get_template_directory() . '/inc/taxonomies.php';

/**
 * Define custom meta boxes.
 */
require get_template_directory() . '/inc/meta-boxes.php';

/**
 * Custom, commonly used functions.
 */
require get_template_directory() . '/inc/extras-common.php';

/**
 * Custom, theme specific functions.
 */
require get_template_directory() . '/inc/extras-custom.php';

/**
 * Custom shortcodes.
 */
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Custom template tags.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Accessibility (WCAG) improvements.
 */
require get_template_directory() . '/inc/accessibility.php';

/**
 * Compatibility with specific plugins.
 */
require get_template_directory() . '/inc/compatibility.php';

/**
 * Custom theme features (header image, background image etc).
 */
// require get_template_directory() . '/inc/theme-features.php';
