// Concat Task - https://github.com/gruntjs/grunt-contrib-concat
// ----------------------------------------------------------------------------
module.exports = {
	options: {
		separator: '\r\n\r\n',
	},
	// Header JS
	header: {
		src: [ '<%= concatHead %>' ],
		dest: '<%= siteInfo.assets_path %>/<%= siteInfo.js_dir %>/header.tmp.js',
		nonull: true
	},
	// Header JS for IE
	header_ie: {
		src: [ '<%= concatHeadIE %>' ],
		dest: '<%= siteInfo.assets_path %>/<%= siteInfo.js_dir %>/header_ie.tmp.js',
		nonull: true
	},
	// Footer JS
	footer: {
		src: [ '<%= concatFoot %>' ],
		dest: '<%= siteInfo.assets_path %>/<%= siteInfo.js_dir %>/footer.tmp.js',
		nonull: true
	}
};
