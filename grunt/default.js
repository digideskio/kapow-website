// Default Task - The master task used to build/re-build the project
// ----------------------------------------------------------------------------
module.exports = function( grunt ) {
	grunt.registerTask( 'default', [
		// 'sync',
		// "lint",
		"sass",
		"postcss",
		"spritesmith",
		"cssmin",
		"maxfilesize:css",
		"copy:main_sourcemap",
		"copy:other_sourcemaps",
		"modernizr",
		"concat",
		"uglify",
		// "svg2png",
		"newer:imagemin",
		"clean",
		// "docs",
		"notify:build"
	] );
};
