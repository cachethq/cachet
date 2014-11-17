var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass("application.scss").version('css/application.css');
});
