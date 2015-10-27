// Sync Task - https://github.com/tomusdrw/grunt-sync
// ----------------------------------------------------------------------------
module.exports = {
	// Copy bower assets into the theme
	bower_sync: {
		files: [ {
			cwd: 'bower_components',
			src: [ '<%= bowerAssets %>' ],
			dest: '<%= wpInfo.wp_content %>/themes/<%= wpInfo.theme_name %>/<%= wpInfo.assets_dir %>/lib'
		} ],
	},
}
