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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/js/assets/scss/now-ui-kit.scss', 'public/scss');

// mix.webpackConfig({
//     module: {
//         rules: [
//             {
//                 test: /\.css$/,
//                 loader: ExtractTextPlugin.extract({
//                 fallback: 'style-loader',
//                 use: 'css-loader'
//                 })
//             }
//         ]
//     }
// });


// const MiniCssExtractPlugin = require('mini-css-extract-plugin');

// mix.webpackConfig({
// module.exports = {
//   plugins: [new MiniCssExtractPlugin()],
//   module: {
//     rules: [
//       {
//         test: /\.css$/i,
//         use: [MiniCssExtractPlugin.loader, 'css-loader'],
//       },
//     ],
//   },
// });
