const path = require("path");
const glob = require("glob-all");
const webpack = require("webpack");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const PurgecssPlugin = require("purgecss-webpack-plugin");
const FontminPlugin = require('fontmin-webpack');

const entry = require("./entries");
const output = require("./output");

const CLEAN_CSS_PATHS = [
    path.join(__dirname, "./../**/*.php"),
    path.join(__dirname, "./../assets/js/**/*.js"),
    path.join(__dirname, "./../../../mu-plugins/**/*.php")
];

module.exports = {
    entry,

    output,

    mode: "production",

    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ["@babel/preset-env"]
                    }
                }
            },
            {
                test: /\.css$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader
                    },
                    {
                        loader: "css-loader"
                    },
                    {
                        loader: "postcss-loader",
                        options: {
                            plugins: [
                                require("postcss-import"),
                                require("postcss-nested-ancestors"),
                                require("postcss-nested"),
                                require("tailwindcss")(
                                    "./webpack/tailwind/config.js"
                                ),
                                require("postcss-nested-ancestors"),
                                require("postcss-nested"),
                                require("autoprefixer"),
                                require("cssnano")({
                                    preset: ["default"]
                                })
                            ]
                        }
                    }
                ]
            },

            {
                test: /\.(png|jpg|svg)$/,
                loader: "url-loader"
            },

             {
                test: /\.(woff(2)?|ttf|otf|)(\?v=\d+\.\d+\.\d+)?$/,
                loader: "url-loader"
            }
            
            // {
            //     test: /\.(woff(2)?|ttf|otf|)(\?v=\d+\.\d+\.\d+)?$/,
            //     loader: "file-loader",
            //     options: {
            //         name: '[name].[ext]',
            //         outputPath: 'fonts/',
            //         publicPath: url => './../../fonts/' + url
            //     }
            // }
        ]
    },

    plugins: [
        new MiniCssExtractPlugin({
            filename: "[name]/css/style.min.css"
        }),

        new FontminPlugin({
            autodetect: true, // automatically pull unicode characters from CSS
            glyphs: [
                /* extra glyphs to include */
            ],
        }),

        new PurgecssPlugin({
            paths: glob.sync( CLEAN_CSS_PATHS ),
            extractors: [
                {
                    extractor: class {
                        static extract(content) {
                            console.log(content);
                            console.log(content.match(/[\w-/:]+(?<!:)/g) || []);

                            return content.match(/[\w-/:]+(?<!:)/g) || [];
                        }
                    },
                    extensions: ["js", "php"]
                }
            ],
        })
    ]
};
