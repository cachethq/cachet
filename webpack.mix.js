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

mix
    .copy(
        'node_modules/jquery-minicolors/jquery.minicolors.css',
        'resources/assets/sass/plugins/_jquery.minicolors.scss'
    )
    .copy(
        'node_modules/github-markdown-css/github-markdown.css',
        'resources/assets/sass/plugins/_github-markdown.scss'
    )
    .copyDirectory('node_modules/ionicons/fonts', 'public/fonts')
    .sass('resources/assets/sass/dashboard.scss', 'public/dist/css/dashboard')
    .sass('resources/assets/sass/app.scss', 'public/dist/css')
    .options({
        processCssUrls: false
    })
    .scripts([
        'node_modules/es5-shim/es5-shim.js',
        'node_modules/es5-shim/es5-sham.js',
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        'node_modules/moment/min/moment-with-locales.min.js',
        'node_modules/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
        'node_modules/lodash/lodash.min.js',
        'node_modules/autosize/dist/autosize.min.js',
        'node_modules/messenger/build/js/messenger.min.js',
        'node_modules/sortablejs/Sortable.min.js',
        'node_modules/jquery-minicolors/jquery.minicolors.min.js',
        'node_modules/chart.js/dist/Chart.min.js',
        'node_modules/jquery-sparkline/jquery.sparkline.min.js',
        'node_modules/sweetalert2/dist/sweetalert2.min.js',
        'node_modules/livestamp/livestamp.js',
        'node_modules/jquery-serializeobject/jquery.serializeObject.js',
        'resources/assets/js/password-strength.js',
        'resources/assets/js/app.js',
    ], 'public/dist/js/all.js')

if (mix.config.inProduction) {
    mix.version();
}
