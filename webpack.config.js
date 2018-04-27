const path = require('path');

// plugins
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const extractSass = new ExtractTextPlugin({
  filename: '../../../assets/styles/dist/main.min.css'
});
const StyleLintPlugin = require('stylelint-webpack-plugin');
const magicImporter = require('node-sass-magic-importer');

module.exports = {
  entry: {
    index: './assets/scripts/src/index.js',
  },
  plugins: [
    new UglifyJSPlugin({
      sourceMap: true
    }),
    extractSass,
    new StyleLintPlugin({
      configFile: '.stylelintrc',
      context: 'assets/styles/src',
      failOnError: false,
      quiet: false
    }),
  ],
  devtool: 'source-map',
  output: {
    filename: '[name].min.js',
    path: path.resolve(__dirname, 'assets/scripts/dist')
  },
  module: {
      loaders: [
        {
          test: /\.js$/, // JavaScript settings
          exclude: /(node_modules)/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: ['babel-preset-env']
            },
            loader: 'eslint-loader'
          }
        },
        {
          test: /\.scss$/, // SCSS settings
          use: extractSass.extract({
            use: [
              {
                loader: 'css-loader',
                options: {
                  minimize: true,
                  sourceMap: true
                }
              }, {
                loader: 'postcss-loader'
              }, {
                loader: 'sass-loader',
                options: {
                  importer: magicImporter()
                }
              }
            ],
            fallback: 'style-loader'
          }),
        },
        {
          test: /\.(ttf|eot|woff|woff2)$/, // Font settings
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: '../../../assets/fonts/dist',
          }
        },
        {
          test: /\.(gif)$/, // GIF settings
          use: [{
              loader: 'file-loader',
              options: {
                  name: '[name].[ext]',
                  outputPath: '../../../assets/images/dist/gif',
              }
          }]
        },
        {
          test: /\.(png)$/, // PNG settings
          use: [{
              loader: 'file-loader',
              options: {
                  name: '[name].[ext]',
                  outputPath: '../../../assets/images/dist/png',
              }
          }]
        },
        {
          test: /\.(jp(e*)g)$/, // JPEG settings
          use: [{
              loader: 'file-loader',
              options: {
                  name: '[name].[ext]',
                  outputPath: '../../../assets/images/dist/jpg',
              }
          }]
        },
        {
          test: /\.(svg)$/, // SVG settings
          use: [{
              loader: 'file-loader',
              options: {
                  name: '[name].[ext]',
                  outputPath: '../../../assets/images/dist/svg',
              }
          }]
        },
      ]
    }
};
