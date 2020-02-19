const mix = require('laravel-mix');

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

mix.js([
    'resources/js/app.js',
    'resources/js/jquery-3.3.1.min.js',
    'resources/js/mdb.js',
    'resources/js/popper.min.js',
    'resources/js/addons/datatables-select.js',
    'resources/js/addons/datatables.js',
    'resources/js/addons-pro/stepper.js',
    'resources/js/addons-pro/steppers.js',
    'resources/js/addons-pro/timeline.js',
    'resources/js/modules/buttons.js',
    'resources/js/modules/cards.js',
    'resources/js/modules/character-counter.js',
    'resources/js/modules/chips.js',
    'resources/js/modules/collapsible.js',
    'resources/js/modules/default-file-input.js',
    'resources/js/modules/dropdown.js',
    'resources/js/modules/file-input.js',
    'resources/js/modules/forms-free.js',
    'resources/js/modules/material-select.js',
    'resources/js/modules/mdb-autocomplete.js',
    'resources/js/modules/preloading.js',
    'resources/js/modules/range-input.js',
    'resources/js/modules/scrolling-navbar.js',
    'resources/js/modules/sidenav.js',
    'resources/js/modules/smooth-scroll.js',
    'resources/js/modules/sticky.js'
    ], 'public/js/all.js')
    .sass('resources/sass/app.scss', 'public/css');
