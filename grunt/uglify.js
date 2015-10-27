// Uglify Task - https://github.com/gruntjs/grunt-contrib-uglify
// ----------------------------------------------------------------------------
module.exports = {
	// Uglify all of our JS assets
	options: {
		banner: '/*! <%= package.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n',
		// Turning off mangling keeps the original code intact, reducing errors
		mangle: false,
		// Generate a sourcemap for each JS file
		sourceMap: true
	},
	// Header JS
	header: {
		files: {
			'<%= wpInfo.wp_content %>/themes/<%= wpInfo.theme_name %>/<%= wpInfo.assets_dir %>/<%= wpInfo.js_dir %>/header.min.js': [ '<%= concat.header.dest %>' ]
		}
	},
	// Header JS for IE
	header_ie: {
		files: {
			'<%= wpInfo.wp_content %>/themes/<%= wpInfo.theme_name %>/<%= wpInfo.assets_dir %>/<%= wpInfo.js_dir %>/header_ie.min.js': [ '<%= concat.header_ie.dest %>' ]
		}
	},
	// Footer JS
	footer: {
		files: {
			'<%= wpInfo.wp_content %>/themes/<%= wpInfo.theme_name %>/<%= wpInfo.assets_dir %>/<%= wpInfo.js_dir %>/footer.min.js': [ '<%= concat.footer.dest %>' ]
		}
	}
};
