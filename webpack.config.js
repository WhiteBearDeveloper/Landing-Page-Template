// webpack.config.js

const core = require('./core.webpack.config.js');
const extra = require('./extra.webpack.config.js');

var configuration = [core, extra];
configuration.watch = true;

module.exports = configuration;