const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
	// Default
	// .js('resources/js/app.js', 'public/js')
	// .sass('resources/sass/app.scss', 'public/css')

	// Bootstrap&Font-awesome
	.sass('resources/sass/stisla-admin/sass/bootstrap.scss', 'public/css')
	.sass('resources/sass/stisla-admin/sass/fontawesome.scss', 'public/css')
	// Stisla Admin CSS
	.sass('resources/sass/stisla-admin/sass/style.scss', 'public/css/stisla-admin')
	.sass('resources/sass/stisla-admin/sass/components.scss', 'public/css/stisla-admin')
	// Stisla Admin JS
	.copyDirectory('resources/js/stisla-admin', 'public/js')
	// Stisla Admin Images
	.copyDirectory('resources/sass/stisla-admin/img', 'public/img');
