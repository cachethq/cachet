var elixir = require('laravel-elixir');

elixir.config.production = true;
elixir.config.sourcemaps = false;

elixir(function (mix) {
    mix
        .sass('app.scss', 'public/dist/css/app.css')
        .styles([
            'vendor/bower_components/jquery-minicolors/jquery.minicolors.css',
            'vendor/bower_components/sweetalert/dist/sweetalert.css',
            'vendor/bower_components/github-markdown-css/github-markdown.css',
            'public/dist/css/app.css'
        ], 'public/dist/css/all.css', './')
        .scripts([
            'vendor/bower_components/jquery/dist/jquery.js',
            'vendor/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
            'vendor/bower_components/moment/min/moment-with-locales.js',
            'vendor/bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js',
            'vendor/bower_components/lodash/lodash.js',
            'vendor/bower_components/autosize/dist/autosize.js',
            'vendor/bower_components/messenger/build/js/messenger.js',
            'vendor/bower_components/Sortable/Sortable.js',
            'vendor/bower_components/livestampjs/livestamp.js',
            'vendor/bower_components/jquery-minicolors/jquery.minicolors.js',
            'vendor/bower_components/jquery-serialize-object/jquery.serialize-object.js',
            'vendor/bower_components/chartjs/Chart.js',
            'vendor/bower_components/jquery-sparkline/dist/jquery.sparkline.js',
            'vendor/bower_components/sweetalert/dist/sweetalert.min.js',
            'resources/assets/js/password-strength.js',
            'resources/assets/js/app.js',
            'resources/assets/js/**/*.js'
        ], 'public/dist/js/all.js', './')
        .version(['public/dist/css/all.css', 'public/dist/js/all.js'])
        .copy('vendor/bower_components/ionicons/fonts/', 'public/fonts/');
});
