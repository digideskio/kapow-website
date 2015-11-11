module.exports = function( grunt ) {
	require( 'load-grunt-config' )( grunt, {
		init: true,
		jitGrunt: {
			jitGrunt: true,
			// These staticMappings help Grunt play nicely with certain plugins
			staticMappings: {
				scsslint: 'grunt-scss-lint',
				sprite: 'grunt-spritesmith',
				maxfilesize: 'grunt-max-filesize'
			}
		},
		// -----------------------------------------------------------------------------
		// Anything you define within the main 'data' object can be accessed
		// both in the Gruntfile and in the individual task configurations e.g.
		// <%= wpInfo.theme_name %>, <%= siteInfo.assets_path %> etc.
		// -----------------------------------------------------------------------------
		data: {
			// -------------------------------------
			// Project specific settings
			// -------------------------------------
			siteInfo: {
				// The 'fancy' name for your project e.g. 'My First Website'
				fancy_name: 'Kapow Website',
				// Documentation path relative to the project root - NO trailing slash
				docs_path: 'docs',
				// Reports path relative to the project root - NO trailing slash
				reports_path: 'reports',
				// Assets path relative to the project root - NO trailing slash
				assets_path: 'assets',
				// Image assets directory
				img_dir: 'img',
				// Javascript assets directory
				js_dir: 'js',
				// Sass assets directory
				sass_dir: 'sass',
				// CSS assets directory
				css_dir: 'css',
				// Font assets directory
				fonts_dir: 'fonts',
				// Name of your main Sass file and consequent CSS file
				sass_file: 'style'
			},

			// -------------------------------------
			// WordPress specific settings
			// -------------------------------------
			wpInfo: {
				// Path to wp-content relative to the project root
				wp_content: 'build/wp-content',
				// WordPress theme directory name
				theme_name: 'kapow-website',
				// Theme assets directory
				assets_dir: 'assets',
				// Theme images directory
				img_dir: 'img',
				// Theme Javascript directory
				js_dir: 'js',
				// Theme CSS directory
				css_dir: 'css',
				// Theme fonts directory
				fonts_dir: 'fonts',
			},

			// -------------------------------------
			// Array of paths to WordPress plugin
			// folders/files that require linting
			// -------------------------------------
			wpPlugins: [
				// '<%= wpInfo.wp_content %>/plugins/my-plugin/**/*.php',
			],

			// -------------------------------------
			// Array of paths to Javascript files
			// for inclusion in the HEADER
			// -------------------------------------
			concatHead: [
				'<%= siteInfo.assets_path %>/<%= siteInfo.js_dir %>/lib/modernizr-custom.js',
				'<%= siteInfo.assets_path %>/<%= siteInfo.js_dir %>/header.js'
			],

			// -------------------------------------
			// Array of paths to Javascript files
			// for inclusion in the HEADER for IE
			// -------------------------------------
			concatHeadIE: [
				'bower_components/html5shiv/dist/html5shiv.js',
				'bower_components/selectivizr/selectivizr.js',
				'bower_components/respondJS/src/respond.js',
				'<%= siteInfo.assets_path %>/<%= siteInfo.js_dir %>/header_ie.js'
			],

			// -------------------------------------
			// Array of paths to Javascript files
			// for inclusion in the FOOTER
			// -------------------------------------
			concatFoot: [
				'bower_components/underscore/underscore.js',
				// 'bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
				// 'bower_components/foundation/js/foundation.js',
				'<%= siteInfo.assets_path %>/<%= siteInfo.js_dir %>/lib/_navigation.js',
				'<%= siteInfo.assets_path %>/<%= siteInfo.js_dir %>/footer.js'
			],

			// -------------------------------------
			// Array of paths to Bower folders that
			// need to be synced to the theme.
			// NB: No need for 'bower_components/'!
			// -------------------------------------
			bowerSync: [
				// 'package-name/path/to/file',
			]
		}
	} );
	// -----------------------------------------------------------------------------
	// Provides a summary of the time tasks have taken
	// -----------------------------------------------------------------------------
	require( 'time-grunt' )( grunt );

	// -----------------------------------------------------------------------------
	// Silences grunt-newer
	// https://github.com/tschaub/grunt-newer/issues/52#issuecomment-59397284
	// -----------------------------------------------------------------------------
	var origLogHeader = grunt.log.header;
	grunt.log.header = function( msg ) {
		if ( !/newer(-postrun)?:/.test( msg ) ) {
			origLogHeader.apply( this, arguments );
		}
	};
};
