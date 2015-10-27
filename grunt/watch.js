// Watch Task - https://github.com/gruntjs/grunt-contrib-watch
// ----------------------------------------------------------------------------
module.exports = {
	options: {
		// Livereload support - requires a browser plugin
		livereload: true,
		spawn: false
	},

	// // Process plugin code
	// code_plugins: {
	//   files: [ '<%= wpPlugins %>' ],
	//   tasks: [
	//     'phplint:plugins',
	//     'phpdoc:plugins',
	//     'notify:code_plugins'
	//   ]
	// },

	// // Process theme code
	// code_theme: {
	//   files: [ '<%= wpInfo.wp_content %>/themes/<%= wpInfo.theme_name %>/**/*.php' ],
	//   tasks: [
	//     'phplint:theme',
	//     // 'phpdoc:theme',
	//     'notify:code_theme'
	//   ]
	// },

	// Process JPG images
	images_jpg: {
		files: [ '<%= siteInfo.assets_path %>/<%= siteInfo.img_dir %>/**/*.jpg' ],
		tasks: [
			'newer:imagemin',
			'notify:images'
		]
	},

	// // Process PNG/SVF/GIF images
	// images_other: {
	//   files: [ '<%= siteInfo.assets_path %>/<%= siteInfo.img_dir %>/**/*.{png,svg,gif}' ],
	//   tasks: [
	//     'svg2png',
	//     'newer:imagemin',
	//     'notify:images'
	//   ]
	// },

	// Process scripts
	scripts: {
		files: [
			'<%= siteInfo.assets_path %>/<%= siteInfo.js_dir %>/**/*.js',
			'!<%= siteInfo.assets_path %>/<%= siteInfo.js_dir %>/lib/modernizr-custom.js'
		],
		tasks: [
			// 'jshint',
			'modernizr',
			'concat',
			'uglify',
			'clean',
			// 'jsdoc',
			'notify:scripts'
		]
	},

	// Process styles
	styles: {
		files: [ '<%= siteInfo.assets_path %>/<%= siteInfo.sass_dir %>/**/*.scss' ],
		tasks: [
			// 'scsslint',
			'spritesmith',
			'sass',
			'postcss',
			'cssmin',
			'maxfilesize:css',
			'copy:main_sourcemap',
			'copy:other_sourcemaps',
			// 'sassdoc',
			'notify:styles'
		]
	}
};
