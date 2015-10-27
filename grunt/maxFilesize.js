// Max Filesize Task - https://github.com/alexcorre/grunt-max-filesize
// ----------------------------------------------------------------------------
module.exports = {
	css: {
		options: {
			maxBytes: 288000
		},
		src: [ '<%= wpInfo.wp_content %>/themes/<%= wpInfo.theme_name %>/style.css' ]
	}
}
