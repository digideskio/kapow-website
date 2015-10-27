// PostCSS Task - https://github.com/nDmitry/grunt-postcss
// ----------------------------------------------------------------------------
module.exports = {
	// Run our CSS through pixrem and autoprefixer
	options: {
		processors: [
			require( 'autoprefixer' )( {
				browsers: [ '> 5%', 'last 2 versions' ]
			} ),
			require( 'pixrem' )()
		]
	},
	css: {
		src: '<%= siteInfo.assets_path %>/<%= siteInfo.css_dir %>/<%= siteInfo.sass_file %>.css'
	}
}
