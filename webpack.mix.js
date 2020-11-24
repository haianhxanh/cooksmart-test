const mix = require("laravel-mix");
// require('dotenv').config();
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

mix.options({
    processCssUrls: false
});

if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: "source-map"
    }).sourceMaps();
}

/**
 * specify what MIX should compile here:
 */
mix.sass("resources/scss/app.scss", "public/css")
    .react("resources/js/app/index.jsx", "public/js/search.js")
<<<<<<< HEAD
    // .react("resources/js/app/About/About.jsx", "public/js/about.js")
=======
>>>>>>> 698f81771d73eb971b4e43508f5b5e1f05269376

    .browserSync({
        host: "localhost",
        port: 3000,
        proxy: {
            target: process.env.APP_URL
        }
    });

// add versioning (creates mix.manifest.json)
mix.version();
