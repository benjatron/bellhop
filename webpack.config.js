const path = require('path');

// plugins
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const extractSass = new ExtractTextPlugin({
  filename: '../../../assets/styles/dist/main.min.css'
});
const StyleLintPlugin = require('stylelint-webpack-plugin');

module.exports = {
  entry: {
    index: './assets/scripts/src/index.js',
  },
  plugins: [
    new UglifyJSPlugin(),
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
          test: /\.js$/,
          exclude: /(node_modules|bower_components)/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: ['babel-preset-env']
            },
            loader: 'eslint-loader'
          }
        },
        {
          test: /\.scss$/,
          use: extractSass.extract({
            use: [
              {
                loader: 'css-loader',
                options: {
                  minimize: true,
                  sourceMap: true
                }
              }, {
                loader: 'sass-loader',
                options: {
                  sourceMap: true
                }
              }, {
                loader: 'postcss-loader'
              }

            ],
            fallback: 'style-loader'
          })
        },
      ]
    }
};
