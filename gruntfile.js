module.exports = function( grunt ) {
	require( 'load-grunt-config' )( grunt, {
		init: true,
		jitGrunt: {
			jitGrunt: true,
			// These mappings help Grunt play nicely with certain plugins
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
			// Site specific settings
			// -------------------------------------
			siteInfo: {
				fancy_name: 'Kapow! Website', // The 'fancy' name for your project e.g. 'My First Website'
				docs_path: 'docs', // Documentation path relative to the project root - NO trailing slash
				reports_path: 'reports', // Reports path relative to the project root - NO trailing slash
				assets_path: 'assets', // Assets path relative to the project root - NO trailing slash
				img_dir: 'img', // Image assets directory
				js_dir: 'js', // Javascript assets directory
				sass_dir: 'sass', // Sass assets directory
				css_dir: 'css', // CSS assets directory
				fonts_dir: 'fonts', // Font assets directory
				sass_file: 'style' // Name of your main Sass file and consequent CSS file
			},

			// -------------------------------------
			// WordPress specific settings
			// -------------------------------------
			wpInfo: {
				wp_content: 'build/wp-content', // Path to wp-content relative to the project root
				theme_name: 'kapow-website', // WordPress theme directory name
				assets_dir: 'assets', // Theme assets directory
				img_dir: 'img', // Theme images directory
				js_dir: 'js', // Theme Javascript directory
				css_dir: 'css', // Theme CSS directory
				fonts_dir: 'fonts', // Theme fonts directory
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
				// 'fontawesome/fonts',
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
