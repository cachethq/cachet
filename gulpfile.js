var elixir = require('laravel-elixir');
var gulp = require('gulp');
var changed = require('gulp-changed');

/**
 * Custom Elixir job for copying images, but only if they're newer.
 */
elixir.extend('images', function() {
    gulp.task('copy-images', function() {
        console.log('Copying jQuery Map.');
        gulp.src('app/assets/bower_components/jquery/dist/jquery.min.map')
            .pipe(changed('public/build/js/jquery.min.map', {
                hasChanged: changed.compareSha1Digest
            }))
            .pipe(gulp.dest('public/build/js'));

        console.log('Copying Ionicons.');
        gulp.src('app/assets/bower_components/ionicons/fonts/**')
            .pipe(changed('public/build/fonts/ionicons', {
                hasChanged: changed.compareSha1Digest
            }))
            .pipe(gulp.dest('public/build/fonts'));
    });

    return this.queueTask('copy-images');
});

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
            'bower_components/lodash/dist/lodash.js',
            'bower_components/messenger/build/js/messenger.js',
            // 'bower_components/chartjs/Chart.min.js',
            'bower_components/Sortable/Sortable.js',
            'bower_components/jquery-minicolors/jquery.minicolors.js',
            'bower_components/jquery-serialize-object/jquery.serialize-object.js',
            'js/app.js',
            'js/**/*.js',
        ], './app/assets/')
        .images()
        .version(['public/css/all.css', 'public/js/all.js']);
});
