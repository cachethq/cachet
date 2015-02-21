var elixir = require('laravel-elixir');

require('laravel-elixir-jshint');

elixir(function (mix) {
    mix.sass('app/assets/sass/main.scss')
        .jshint('app/assets/js/*.js')
        .styles([
            'app/assets/bower_components/ionicons/css/ionicons.css',
            'app/assets/bower_components/jquery-minicolors/jquery.minicolors.css',
            'public/dist/css/main.css'
        ], 'public/dist/css/all.css', './')
        .scripts([
            'bower_components/jquery/dist/jquery.js',
            'bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
            'bower_components/lodash/dist/lodash.js',
            'bower_components/messenger/build/js/messenger.js',
            'bower_components/Sortable/Sortable.js',
            'bower_components/moment/min/moment-with-locales.js',
            'bower_components/livestampjs/livestamp.js',
            'bower_components/jquery-minicolors/jquery.minicolors.js',
            'bower_components/jquery-serialize-object/jquery.serialize-object.js',
            'js/app.js',
            'js/**/*.js'
        ], 'public/dist/js/all.js', './app/assets/')
        .version(['public/dist/css/all.css', 'public/dist/js/all.js'])
        .copy('app/assets/bower_components/ionicons/fonts', 'public/fonts');
});
