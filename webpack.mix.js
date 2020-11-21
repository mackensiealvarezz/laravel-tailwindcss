const mix = require('laravel-mix');
const tailwindcss = require('mix-tailwindcss');


mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    .tailwind();

mix.browserSync('my-domain.dev');
