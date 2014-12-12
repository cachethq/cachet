var elixir = require('laravel-elixir');

elixir(function(mix) {
  mix.sass('app/assets/sass/main.scss')
     .styles([
        'app/assets/Bower_components/fontawesome/css/font-awesome.min.css',
        'public/css/main.css',
     ], './')
     .scripts([
       'bower_components/jquery/dist/jquery.min.js',
       'bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
       'bower_components/chartjs/Chart.min.js',
       'bower_components/rivets/dist/rivets.min.js',
       'js/app.js',
       'js/**/*.js',
     ], './app/assets/')
     .version(['public/css/all.css', 'public/js/all.js'])
     .copy('app/assets/bower_components/fontawesome/fonts/', 'public/build/fonts');
});
