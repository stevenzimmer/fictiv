const path = require("path");

output = {
    filename: "[name]/js/scripts.min.js",
    path: path.resolve( __dirname, "./../dist" )
};

module.exports = output;
