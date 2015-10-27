// svg2png Task - https://github.com/dbushell/grunt-svg2png
// ----------------------------------------------------------------------------
module.exports = {
	// Generate SVG versions of PNG assets
	svg2png: {
		files: [ {
			// Trailing slash required here, unlike in other tasks!
			cwd: '<%= siteInfo.assets_path %>/<%= siteInfo.img_dir %>/',
			src: [ '**/*.svg' ],
			dest: '<%= siteInfo.assets_path %>/<%= siteInfo.img_dir %>/'
		} ]
	}
};
