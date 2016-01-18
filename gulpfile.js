var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    // SASS
    mix.sass('app.sass');
    mix.sass('dashboard.scss');

    // Scripts
    mix.scripts(['blog.js', 'master.js'], 'public/js/blog.js')
       .scripts(['dashboard.js', 'master.js'], 'public/js/dashboard.js');

    mix.version([
    	// CSS
    	'css/app.css',
    	'css/dashboard.css',
    	// JS
    	'js/blog.js',
        'js/dashboard.js',
    ]);

    mix.browserSync({
    	proxy: 'tecnocomputadoras.app'
    });
});
