// Copy Task - https://github.com/gruntjs/grunt-contrib-copy
// ----------------------------------------------------------------------------
module.exports = {
	main_sourcemap: {
		expand: true,
		cwd: '<%= siteInfo.assets_path %>/<%= siteInfo.css_dir %>/',
		src: [ 'style.css.map' ],
		dest: '<%= wpInfo.wp_content %>/themes/<%= wpInfo.theme_name %>/'
	},
	other_sourcemaps: {
		expand: true,
		cwd: '<%= siteInfo.assets_path %>/<%= siteInfo.css_dir %>/',
		src: [ '*.map', '!style.css.map' ],
		dest: '<%= wpInfo.wp_content %>/themes/<%= wpInfo.theme_name %>/<%= wpInfo.assets_dir %>/css'
	}
};
