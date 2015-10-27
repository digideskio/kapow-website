// Sass Lint Task - https://github.com/ahmednuaman/grunt-scss-lint
// ----------------------------------------------------------------------------
module.exports = {
	// Lint our SCSS files
	options: {
		// Change to true once using bundler for gem installs
		bundleExec: false,
		// Silences errors in the console
		emitError: true,
		// Continue with the build regardless of errors
		force: true,
		// Output the errors to file
		config: 'grunt/config/scsslint.yml',
		reporterOutput: '<%= siteInfo.reports_path %>/scsslint.xml',
		colorizeOutput: true,
		compact: true,
	},
	scss: [
		'<%= siteInfo.assets_path %>/<%= siteInfo.sass_dir %>/**/*.scss',
	]
};
