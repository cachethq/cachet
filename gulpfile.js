var elixir = require('laravel-elixir');
var gulp   = require('gulp');
var jshint = require('laravel-elixir-jshint');
var rimraf = require('gulp-rimraf');

elixir.extend('rm', function(source) {
    gulp.task('rm', function() {
        gulp.src(source, { read: false })
            .pipe(rimraf());
    });

    return this.queueTask('rm');
});

gulp.task('default', function() {
    elixir(function (mix) {
        mix.sass('app/assets/sass/main.scss')
            .rm('public/build/fonts')
            .jshint('app/assets/js/*.js')
            .styles([
                'app/assets/bower_components/ionicons/css/ionicons.min.css',
                'app/assets/bower_components/jquery-minicolors/jquery.minicolors.css',
                'public/css/main.css',
            ], './')
            .scripts([
                'bower_components/jquery/dist/jquery.js',
                'bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
                'bower_components/lodash/dist/lodash.js',
                'bower_components/messenger/build/js/messenger.js',
                'bower_components/Sortable/Sortable.js',
                'bower_components/jquery-minicolors/jquery.minicolors.js',
                'bower_components/jquery-serialize-object/jquery.serialize-object.js',
                'js/app.js',
                'js/**/*.js',
            ], './app/assets/')
            .version(['public/css/all.css', 'public/js/all.js'])
            .copy('app/assets/bower_components/ionicons/fonts', 'public/build/fonts');
    });
});
