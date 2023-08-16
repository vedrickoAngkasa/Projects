"use strict";

const url = require("url");

const startServer = function(port, route, rTable) {

        require("http").createServer (function (request, response) {

		route(request, response, rTable); 
        
	}).listen(port);

        console.log("Server running on port " + port + " with pid " + process.pid);

};

exports.startServer = startServer;
