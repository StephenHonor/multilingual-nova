let mix = require('laravel-mix')

require('./nova.mix')

// mix
  // .setPublicPath('dist')
  // .js('resources/js/tool.js', 'js')
  // .vue({ version: 3 })
  // .css('resources/css/tool.css', 'css')
  // .nova('max26292/multilingual')
mix.setPublicPath('dist')
    .vue({ version: 3 })
    .js('resources/js/field.js', 'js')
    .sass('resources/sass/field.scss', 'css')
    .webpackConfig({
        resolve: {
            symlinks: false
        }
    })
    .nova('max26292/multilingual')