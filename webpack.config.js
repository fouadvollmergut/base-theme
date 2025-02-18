const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const GlobImporter = require('node-sass-glob-importer');
const { error } = require('console');


const config = {
  entry: ["./index.js"],
  plugins: [
    new MiniCssExtractPlugin({
      filename: '[name].css'
    })
  ],
  stats: {
    errorDetails: true
  },
  module: {
    rules: [
      {
        test: /\.(scss|css)$/,
        use: [
          MiniCssExtractPlugin.loader, 
          'css-loader', 
          {
            loader: 'sass-loader',
            options: {
              sassOptions: {
                importer: GlobImporter()
              }
            }
          }
        ],
      }
    ]
  },
  devServer: {
    static: path.join(__dirname, "/")
  }
}

module.exports = (env, argv) => {
  if (argv.mode === 'production') {
    config.output = {
      path: path.resolve(__dirname, "./dist/scripts/"),
      filename: '[name].js'
    };

    config.plugins.push(
      new CopyPlugin({
        patterns: [
          { from: "*.php", to: path.resolve(__dirname, "./dist") },
          { from: "*.css", to: path.resolve(__dirname, "./dist") },
          { from: "screenshot.png", to: path.resolve(__dirname, "./dist") },
          { from: "acf", to: path.resolve(__dirname, "./dist/acf") },
          { from: "assets", to: path.resolve(__dirname, "./dist/assets") },
          { from: "modules", to: path.resolve(__dirname, "./dist/modules") },
          { from: "public", to: path.resolve(__dirname, "./dist/public") },
        ],
      })
    );
  }

  if (argv.mode === 'development') {
    config.output = {
      path: path.resolve(__dirname, "./scripts/"),
      filename: '[name].js',
    };
  }

  return config;
}