const PATH = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const StylelintPlugin = require('stylelint-webpack-plugin');

module.exports = {
  mode: "production",
  entry: "./src/index.js",
  output: {
    path: PATH.resolve(__dirname, "dist"),
    filename: "bundle.js"
  },
  devServer: {
    static: "dist",
    open: true,
    
  },
  module: {
    rules: [
      {
        test: /.(jpg|png|gif|svg)$/,
        use: {
          loader: "file-loader",
          options: {
            name: "../img/[name].[ext]",
          }
        }
      },
      {
        test: /\.scss$/i,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: "css-loader",
          },
          {
            loader: "postcss-loader",
            options: {
              postcssOptions: {
                plugins: [
                  ["autoprefixer", {grid: true}],
                  ["css-declaration-sorter", {order: "alphabetical"}],
                  ["postcss-sort-media-queries", {sort: "mobile-first"}],
                ],
              },
            }
          },
          {
            loader: "sass-loader",
            options: {
              sassOptions: {
                outputStyle: "expanded",
              },
            },
          },
          {
            loader: "import-glob-loader",
          },
        ]
      },
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/style.css',
      ignoreOrder: true,
    }),
  ]
};