// Modernizr Task - https://github.com/Modernizr/grunt-modernizr
// ----------------------------------------------------------------------------
module.exports = {
	// Generate a custom Modernizr build based on checks found in our Sass & JS
	custom: {
		"uglify": false,
		"extra": {
			"shiv": false,
			"printshiv": false,
			"load": true,
			"mq": true,
			"cssclasses": true
		},
		"devFile": "bower_components/modernizr/src/Modernizr.js",
		"outputFile": "<%= siteInfo.assets_path %>/<%= siteInfo.js_dir %>/lib/modernizr-custom.js",
		"files": {
			"src": [
				'<%= siteInfo.assets_path %>/<%= siteInfo.sass_dir %>/**/*.scss',
				'<%= siteInfo.assets_path %>/<%= siteInfo.js_dir %>/**/*.js',
				'!<%= siteInfo.assets_path %>/<%= siteInfo.js_dir %>/lib/modernizr-custom.js'
			]
		}
	}
};
