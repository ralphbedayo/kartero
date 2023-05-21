const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

let config = require('./webpack.config');

let dependencyVendors = [
    // Dependencies
    "@headlessui/vue",
    "@heroicons/vue",
    "@inertiajs/inertia",
    "@inertiajs/inertia-vue3",
    "@inertiajs/progress",
    "quill",
    "quill-delta-to-html",
    "uuid",
    "vue",

    // Dev Dependencies
    "axios",
    "laravel-mix",
    "lodash",
    "postcss",
    "tailwindcss",
    "vue-loader",
];

mix.webpackConfig(config)
    .js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ])
    .extract(dependencyVendors)
    .version();
