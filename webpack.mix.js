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
    // .sass('resources/css/app.scss', 'public/css')
    // .sass('resources/css/card.scss', 'public/css')
    // .postCss('resources/css/app.css', 'public/css', [
    //     require('tailwindcss'),
    // ])
    .sass('resources/css/signup-banner.scss', 'public/css/app.css')
    .browserSync('http://localhost:8000/');
