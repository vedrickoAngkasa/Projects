"use strict";

const url = require("url");

exports.route = function(request, response, rTable) {
	
	const urlObj = url.parse(request.url);
	const pathname = urlObj.pathname;
	
	

	console.log("Routing a request for " + pathname + ".");
	let handler = rTable[pathname];

	if(typeof handler === "function") { 
		handler(request, response);
	} else {
		rTable["$file"](pathname, response);
	}

}
