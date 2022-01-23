const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.copyDirectory('resources/images', 'public/assets/images')
mix.copyDirectory('resources/fonts', 'public/assets/fonts')
mix.copyDirectory('resources/css', 'public/assets/css')
mix.copyDirectory('resources/js', 'public/assets/js')
mix.copyDirectory('resources/icons', 'public/assets/icons')
