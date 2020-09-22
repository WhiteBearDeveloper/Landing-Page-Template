// core.webpack.config.js

const path = require('path');
const webpack = require('webpack');

module.exports = env => {
    return {
        entry: [
            './src/core-css.js',
            './src/core-js.js',
        ],
        module: {
            rules: [{
                test: /\.js?$/,
                exclude: [/node_modules|core-css.js/],
                use: [

                    {
                        loader: "babel-loader",
                        options: {
                            presets: ['@babel/preset-env']
                        }
                    },
                ]
            },
                {
                    test: /\.(scss)$/,
                    exclude: [/node_modules|core-js.js/],
                    use: [{
                        loader: 'file-loader',
                        options: {
                            name: '[name].css',
                            outputPath: '../css',
                            publicPath: './../css/'
                        }
                    },
                        {
                            loader: 'extract-loader'
                        },
                        {
                            loader: 'css-loader',
                            options: {
                                //sourceMap: env.development
                            }
                        },
                        {
                            loader: 'postcss-loader',
                            options: {
                                plugins: () => {
                                    if (env.development) {
                                        return [
                                            require('autoprefixer'),
                                        ];
                                    } else {
                                        return [
                                            require('autoprefixer'),
                                            require('cssnano')
                                        ];
                                    }
                                },
                            }
                        },
                        {
                            loader: 'sass-loader',
                            options: {
                                //sourceMap: env.development
                            }
                        }
                    ]
                },
                {
                    test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
                    use: [{
                        loader: 'file-loader',
                        options: {
                            name: '[name].[ext]',
                            outputPath: '../fonts/',
                            publicPath: './../fonts/'
                        }
                    }]
                }]
        },
        output: {
            filename: '[name].js',
            path: path.resolve(__dirname, 'dist/js/')
        },
        watch: env.development,
        watchOptions : {
            aggregateTimeout: 100,
        },
    }
};