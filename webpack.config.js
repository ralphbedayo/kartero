var path = require('path');

module.exports = {
    context: __dirname,
    resolve: {
        extensions: ['.js', '.vue', '.json'],
        alias: {
            '@': path.resolve(__dirname,'resources/js')
        },
    }
};
