// CSSMin Task - https://github.com/gruntjs/grunt-contrib-cssmin
// ----------------------------------------------------------------------------
module.exports = {
	// Front End Styles
	frontend: {
		options: {
			compatibility: 'ie8'
		},
		src: '<%= siteInfo.assets_path %>/<%= siteInfo.css_dir %>/<%= siteInfo.sass_file %>.css',
		dest: '<%= wpInfo.wp_content %>/themes/<%= wpInfo.theme_name %>/style.css'
	},
	// WP Editor & Admin Styles
	backend: {
		files: [ {
			expand: true,
			cwd: '<%= siteInfo.assets_path %>/<%= siteInfo.css_dir %>',
			src: [
				'*.css',
				'!<%= siteInfo.sass_file %>.css'
			],
			dest: '<%= wpInfo.wp_content %>/themes/<%= wpInfo.theme_name %>/<%= wpInfo.assets_dir %>/<%= wpInfo.css_dir %>',
			ext: '.css'
		} ]
	}
};
