// Clean Task - https://github.com/gruntjs/grunt-contrib-clean
// ----------------------------------------------------------------------------
module.exports = {
	// Remove the temporary JS files created by the grunt-contrib-concat task
	scripts: {
		src: [
			'<%= siteInfo.assets_path %>/<%= siteInfo.js_dir %>/*.tmp.js'
		]
	}
};
