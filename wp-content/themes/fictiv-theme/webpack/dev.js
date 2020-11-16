 // File that runs for 'npm run dev'
////
const path = require("path");
const entry = require("./entries");
const output = require("./output");
const webpack = require("webpack");
const browserSync = require("browser-sync-webpack-plugin");

module.exports = {
    entry,

    output,

    mode: "development",

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
                        loader: "style-loader",
                        options: {
                            singleton: true,
                            sourceMap: true
                        }
                    },
                    {
                        loader: "css-loader",
                        options: {
                            importLoaders: 1
                        }
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
                                    preset: [
                                        "default",
                                        {
                                            discardComments: {
                                                removeAll: true
                                            }
                                        }
                                    ]
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
        ]
    },

    watch: true,

    plugins: [
        new browserSync({
            proxy: "fictiv:8888",
            port: 3000,
            files: ["**/*.php"],
            ghostMode: {
                clicks: false,
                location: false,
                forms: false,
                scroll: false
            },
            injectChanges: true,
            logFileChanges: true,
            notify: true,
            reloadDelay: 0
        })
    ]
};
