var elixir = require('laravel-elixir');
var bowerDir = 'vendor/bower_components/';

elixir(function(mix) {
    mix.copy(bowerDir + 'bootstrap/fonts', 'public/fonts')

        .copy(bowerDir + 'jquery/dist/jquery.min.js', 'public/js/jquery.min.js')
        .copy(bowerDir + 'bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js')

        .less('app.less');
});