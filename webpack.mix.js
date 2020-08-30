const mix = require('laravel-mix');
const VuetifLoaderPlugin = require('vuetify-loader/lib/plugin')
var webpackConfig = {
    plugins:[
        new VuetifLoaderPlugin()
    ]
}

mix.webpackConfig(webpackConfig)
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

mix.js('resources/js/app.js', 'public/')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/spacing.scss', 'public/css')
    .js('resources/js/reservation/app.js', 'public/reservation')
