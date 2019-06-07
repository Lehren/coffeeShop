const webpack = require('webpack');
const path = require('path');

module.exports = {
    resolve: {
        extensions: ['.js', '.vue'],
        alias: {
            '@': __dirname + '/resources'
        }
    }
};
