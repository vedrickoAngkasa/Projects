"use strict";

const router = require("./js/router.js");
const handlers = require("./js/requestHandlers.js");
const server = require ("./js/server.js");

const rTable = {
	"/":handlers.reqStart
	, "/css/index.css":handlers.reqCss
	, "/js/validation.js":handlers.reqValidationForm
	, "/js/SPA.js":handlers.reqSPA
	, "/js/displayData.js":handlers.processData
	, "/data/students.csv":handlers.csvData
	, "/upload": handlers.reqUpload
	, "/search": handlers.reqSearch
	, "$file": handlers.reqPhoto
	, "$error":handlers.reqError
	

}

server.startServer(40232, router.route, rTable);