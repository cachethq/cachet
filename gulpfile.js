var elixir = require('laravel-elixir');

elixir.config.production = true;
elixir.config.sourcemaps = false;

elixir(function (mix) {
    mix
        .sass('app.scss', 'public/dist/css/app.css')
        .styles([
            'node_modules/jquery-minicolors/jquery.minicolors.css',
            'node_modules/sweetalert/dist/sweetalert.css',
            'node_modules/github-markdown-css/github-markdown.css',
            'public/dist/css/app.css'
        ], 'public/dist/css/all.css', './')
        .scripts([
            'node_modules/jquery/dist/jquery.js',
            'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
            'node_modules/moment/min/moment-with-locales.js',
            'node_modules/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js',
            'node_modules/lodash/lodash.js',
            'node_modules/autosize/dist/autosize.js',
            'node_modules/messenger/build/js/messenger.js',
            'node_modules/sortablejs/Sortable.js',
            'node_modules/livestamp/livestamp.js',
            'node_modules/jquery-minicolors/jquery.minicolors.js',
            'node_modules/jquery-serializeobject/jquery.serializeObject.js',
            'node_modules/Chart.js/dist/Chart.js',
            'node_modules/jquery-sparkline/jquery.sparkline.js',
            'node_modules/sweetalert/dist/sweetalert.min.js',
            'resources/assets/js/password-strength.js',
            'resources/assets/js/app.js',
            'resources/assets/js/**/*.js'
        ], 'public/dist/js/all.js', './')
        .version(['public/dist/css/all.css', 'public/dist/js/all.js'])
        .copy('node_modules/ionicons/fonts/', 'public/fonts/');
});
