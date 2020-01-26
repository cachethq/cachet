let mix = require('laravel-mix');

require('laravel-mix-purgecss')

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

const sassOptions = {
    includePaths: ['node_modules'],
};

mix
    .copyDirectory('node_modules/ionicons/fonts', 'public/fonts')
    .sass('resources/assets/sass/dashboard.scss', 'public/dist/css/dashboard', sassOptions)
    .sass('resources/assets/sass/app.scss', 'public/dist/css', sassOptions)
    .purgeCss()
    .options({
        processCssUrls: false
    })
    .js('resources/assets/js/app.js', 'public/dist/js').extract(['vue', 'chart.js'])
    .scripts([
        'public/dist/js/app.js',
        'node_modules/es5-shim/es5-shim.js',
        'node_modules/es5-shim/es5-sham.js',
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        'node_modules/moment/min/moment-with-locales.min.js',
        'node_modules/lodash/lodash.min.js',
        'node_modules/autosize/dist/autosize.min.js',
        'node_modules/messenger/build/js/messenger.min.js',
        'node_modules/sortablejs/Sortable.min.js',
        'node_modules/jquery-minicolors/jquery.minicolors.min.js',
        'node_modules/jquery-sparkline/jquery.sparkline.min.js',
        'node_modules/sweetalert2/dist/sweetalert2.min.js',
        'node_modules/livestamp/livestamp.js',
        'node_modules/jquery-serializeobject/jquery.serializeObject.js',
        'resources/assets/js/cachet.js',
    ], 'public/dist/js/all.js')

if (mix.inProduction()) {
    mix.version();
}
