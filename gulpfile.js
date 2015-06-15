var elixir = require('laravel-elixir');

require('laravel-elixir-jshint');

elixir.config.sourcemaps = false;

elixir(function (mix) {
    mix
        .sass('app.scss')
        .jshint('resources/assets/js/*.js')
        .styles([
            'bower_components/ionicons/css/ionicons.css',
            'bower_components/jquery-minicolors/jquery.minicolors.css',
            'public/dist/css/app.css'
        ], 'public/dist/css/all.css', './')
        .scripts([
            'bower_components/jquery/dist/jquery.js',
            'bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
            'bower_components/moment/min/moment-with-locales.js',
            'bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js',
            'bower_components/lodash/dist/lodash.js',
            'bower_components/autosize/dest/autosize.js',
            'bower_components/messenger/build/js/messenger.js',
            'bower_components/Sortable/Sortable.js',
            'bower_components/livestampjs/livestamp.js',
            'bower_components/jquery-minicolors/jquery.minicolors.js',
            'bower_components/jquery-serialize-object/jquery.serialize-object.js',
            'bower_components/chartjs/Chart.js',
            'resources/assets/js/app.js',
            'resources/assets/js/**/*.js'
        ], 'public/dist/js/all.js', './')
        .version(['public/dist/css/all.css', 'public/dist/js/all.js'])
        .copy('bower_components/ionicons/fonts/', 'public/fonts/');
});
