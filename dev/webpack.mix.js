let mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/assets/js/app.js", "public/js/com")
    .sourceMaps()
    .js("resources/assets/js/admin.js", "public/js/admin")
    .sourceMaps()
    .js("resources/assets/js/admin/articles.js", "public/js/admin")
    .sourceMaps()
    .js("resources/assets/js/admin/profiles.js", "public/js/admin")
    .sourceMaps()
    .js("resources/assets/js/admin/clients.js", "public/js/admin")
    .sourceMaps()
    .js("resources/assets/js/admin/carousels.js", "public/js/admin")
    .sourceMaps();
