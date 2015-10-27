// Spritesmith Task - https://github.com/Ensighten/grunt-spritesmith
// ----------------------------------------------------------------------------
module.exports = {
	// Generate an image sprite from PNG assets along with useful Sass variables
	all: {
		src: [
			'<%= siteInfo.assets_path %>/<%= siteInfo.img_dir %>/*.png',
			'!<%= siteInfo.assets_path %>/<%= siteInfo.img_dir %>/sprite.png'
		],
		dest: '<%= wpInfo.wp_content %>/themes/<%= wpInfo.theme_name %>/<%= wpInfo.img_dir %>/sprite.png',
		destCss: '<%= siteInfo.assets_path %>/<%= siteInfo.sass_dir %>/base/_sprites.scss',
		// Add a cache busting timestamp to the file name
		imgPath: '<%= wpInfo.assets_path %>/<%= wpInfo.img_dir %>/sprite.png?' + ( new Date().getTime() ),
	}
};
