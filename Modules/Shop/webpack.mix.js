const { mix } = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/app.js', 'js/shop.js')
    .sass( __dirname + '/Resources/assets/sass/mix/main_shop.scss', 'css/shop.css')
    .sass( __dirname + '/Resources/assets/sass/mix/main_category.scss', 'css/main_category.css');

if (mix.inProduction()) {
    mix.version();
}