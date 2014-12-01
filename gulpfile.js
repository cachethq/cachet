var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.scripts([
    		'bower_components/jquery/dist/jquery.min.js',
    		'bower_components/chartjs/Chart.min.js',
    		'bower_components/rivets/dist/riverts.bundle.js',
    		'js/**/*.js',
    	], 'app/assets')
		.styles([
  			'bower_components/cachet-ui/dist/cachet.min.css',
  		], 'app/assets')
  		.version(['public/css/all.css', 'public/js/all.js'], 'public');
});
