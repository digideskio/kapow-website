// Imagemin Task - https://github.com/gruntjs/grunt-contrib-imagemin
// ----------------------------------------------------------------------------
module.exports = {
	// Place minified versions of the image assets in the theme
	images: {
		options: {
			progressive: true
		},
		files: [ {
			expand: true,
			cwd: '<%= siteInfo.assets_path %>/<%= siteInfo.img_dir %>',
			src: [ '**/*.{png,jpg,svg,gif}' ],
			dest: '<%= wpInfo.wp_content %>/themes/<%= wpInfo.theme_name %>/<%= wpInfo.assets_dir %>/<%= wpInfo.img_dir %>'
		} ]
	}
};
