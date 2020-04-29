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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')




mix.styles([
    'public/css/app.css',
    'public/home/css/animate.css',
    'public/home/css/jquery.dataTables.min.css',
    'public/home/css/style.css',


], 'public/css/all.css');


mix.scripts([
    'public/js/app.js',
    'public/home/js/wow.min.js',
    'public/home/js/jquery.dataTables.min.js',
    'public/home/js/main.js',

], 'public/js/all.js');
