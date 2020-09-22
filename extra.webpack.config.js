// extra.webpack.config.js
var path = require('path');
var webpack = require('webpack');
var extras = require('./src/extra-js');

module.exports = env => {
	return {
		entry: extras.module,
		output: {
			path:  path.join(__dirname, 'dist/js/'),
			filename: '[name].js',
		},
		module: {
			rules: [
				{
					test: /\.js?$/,
					exclude: [/node_modules/],
					use: [
						{
							loader: "babel-loader",
							options: {
								presets: ['@babel/preset-env']
							}
						},
					]
				}
			]
		},
	}
};