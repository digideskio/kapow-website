<?php
/**
 * Load must use plugins.
 *
 * @link https://codex.wordpress.org/Must_Use_Plugins
 *
 * @package Kapow Website
 */
 
// This is an example of how to load a must use plugin. Add a require_once statement for
// each must use plugin you have added to the mu-plugins folder.
// require_once( plugin_dir_path( __FILE__ ) . 'plugin-folder-name/main-plugin-file.php' );

require_once plugin_dir_path( __FILE__ ) . 'humanmade/custom-meta-boxes/custom-meta-boxes.php';
