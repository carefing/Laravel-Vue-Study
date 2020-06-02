let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/views/vuebasic/js/overview.js', 'public/js/vuebasic')
   .js('resources/views/vuebasic/js/component.js', 'public/js/vuebasic')
   .js('resources/views/vuebasic/js/vuerouter.js', 'public/js/vuebasic')
   .js('resources/views/vuebasic/js/vuetify.js', 'public/js/vuebasic')
   .js('resources/views/vuebasic/js/lifetime.js', 'public/js/vuebasic')
   .sass('resources/assets/sass/app.scss', 'public/css');
