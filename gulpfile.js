var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.sass('app/assets/sass/main.scss')
        .styles([
            'app/assets/bower_components/fontawesome/css/font-awesome.min.css',
            'app/assets/bower_components/ionicons/css/ionicons.min.css',
            'app/assets/bower_components/jquery-minicolors/jquery.minicolors.css',
            'public/css/main.css',
        ], './')
        .scripts([
            'bower_components/jquery/dist/jquery.min.js',
            'bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
            // 'bower_components/chartjs/Chart.min.js',
            'bower_components/jquery-minicolors/jquery.minicolors.js',
            'js/app.js',
            'js/**/*.js',
        ], './app/assets/')
        .version(['public/css/all.css', 'public/js/all.js'])
        .copy('app/assets/bower_components/jquery/dist/jquery.min.map', 'public/build/js/jquery.min.map')
        .copy('app/assets/bower_components/fontawesome/fonts/', 'public/build/fonts')
        .copy('app/assets/bower_components/ionicons/fonts/', 'public/build/fonts');
});
