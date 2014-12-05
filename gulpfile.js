var elixir = require('laravel-elixir');

elixir(function(mix) {
  mix.sass('main.scss')
     .styles([
        'app/assets/bower_components/bootstrap/dist/css/bootstrap.min.css',
        'app/assets/bower_components/fontawesome/css/font-awesome.min.css',
        'public/css/main.css',
     ], './')
     .scripts([
       'bower_components/jquery/dist/jquery.min.js',
       'bower_components/bootstrap/dist/js/bootstrap.min.js',
       'bower_components/chartjs/Chart.min.js',
       'bower_components/rivets/dist/riverts.bundle.js',
       'js/app.js',
       'js/**/*.js',
     ], './app/assets/')
     .version(['public/css/all.css', 'public/js/all.js'], 'public')
     .copy('app/assets/bower_components/bootstrap/dist/fonts/', 'public/build/fonts')
     .copy('app/assets/bower_components/fontawesome/fonts/', 'public/build/fonts');

  mix.sass('application.scss');
});
