"use strict";
var http = require("http");
const exec = require("child_process").exec;
const fs = require("fs");
const formi = require("../node_modules/formidable");
const mv = require("../node_modules/mv");
const defaultHeader = { "content-type": "text/html" };

exports.reqStart = function (request, response) {
  response.writeHead(200, { "Content-Type": "text/html" });
  let home = fs.createReadStream("index.html");
  home.pipe(response);
};

exports.reqCss = function (request, response) {
  response.writeHead(200, { "Content-Type": "text/css" });
  let css = fs.createReadStream("./css/index.css");
  css.pipe(response);
};
exports.reqValidationForm = function (request, response) {
  response.writeHead(200, { "Content-Type": "text/javascript" });
  let validation = fs.createReadStream("./js/validation.js");
  validation.pipe(response);
};

exports.reqSPA = function (request, response) {
  response.writeHead(200, { "Content-Type": "text/js" });
  let SPA = fs.createReadStream("./js/SPA.js");
  SPA.pipe(response);
};
exports.processData = function (request, response) {
  response.writeHead(200, { "Content-Type": "text/javascript" });
  let processData = fs.createReadStream("./js/displayData.js");
  processData.pipe(response);
};

exports.csvData = function (request, response) {
  response.writeHead(200, { "Content-Type": "text/csv" });
  let csv = fs.createReadStream("./data/students.csv");
  csv.pipe(response);
};

exports.reqUpload = function (request, response) {
  if (request.url === "/upload" && request.method == "POST") {
    let form = new formi.IncomingForm();
    form.parse(request, function (error, field, file) {
      response.writeHead(200, defaultHeader);

      const data =
        "\n" +
        field["studentID"] +
        "," +
        field["firstName"] +
        "," +
        field["lastName"] +
        "," +
        field["age"] +
        "," +
        field["genderOption"] +
        "," +
        field["degree"] +
        "," +
        field["hiddenValue"];

      fs.appendFileSync("./data/students.csv", data);

      let filepath = "/photos/" + field["hiddenValue"];

      mv(file.formFileImage.filepath, "./data" + filepath, function (err) {
        if (err) {
           console.log(err);
        } else {
          response.write("<header>");
          response.write("<link rel='stylesheet' href='css/index.css' />");
          response.write(
            "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>"
          );
          response.write("<script src='js/displayData.js'></script>");
          response.write(
            "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'/>"
          );
          response.write("</header>");

          response.write(
            "<h1 class='text-success ms-5 my-3'>Successfully Inputted to Csv</h1>"
          );
          response.write(
            "<div class='col-3 ms-5'><button type='submit' id='goBack' class='btn btn-dark'>Go Back</button></div>"
          );
          response.end();
        }
      });
    });
  }
};

exports.reqSearch = function (request, response) {
  if (request.url === "/search" && request.method == "POST") {
    let form = new formi.IncomingForm();
    form.parse(request, function (error, field, file) {
      if (error) {
         console.log(error);
      } else {
        response.writeHead(200, defaultHeader);

        let search = field["search"];

        fs.readFile("./data/students.csv", "utf-8", (err, data) => {
          if (err) {
            exports.reqError(filepath, response);
          } else {
            let csvData = data.split("\n");
            let rows = csvData.length;
            let searchData = [];
            let csvSearchData = [];
         	
            response.write("<header>");
            response.write("<link rel='stylesheet' href='css/index.css' />");
            response.write(
              "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>"
            );
            response.write("<script src='js/displayData.js'></script>");
            response.write(
              "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'/>"
            );
            response.write("</header>");
            response.write(
              "<h1 class='outputHeader'> Search Word: <span class='outputSearch'>" +
                search +
                "</span> </h1>"
            );
		
 	             response.write("<table id='tableCsv'>");

  	   if (search == " " || search == "" || search == null) {
		
		response.write("<script type='text/javascript'>$('#tableCsv').css('display','none');</script>");
            }

            response.write("<tr>");
            response.write("<th>Student ID</th>");
            response.write("<th>First Name</th>");
            response.write("<th>Last Name</th>");
            response.write("<th>Age</th>");
            response.write("<th>Gender</th>");
            response.write("<th>Degree</th>");
            response.write("<th>Photo</th>");
            response.write("</tr>");
            response.write("<tr>");

            for (let i = 0; i < rows; i++) {
              if (csvData[i].includes(search)) {
                searchData.push(csvData[i]);
               
                csvSearchData = searchData.toString().split(",");
              }

 		
            }

        

   	
		let index = 6;

            for (let j = 0; j <= csvSearchData.length; j++) {
		
              response.write("<td>" + csvSearchData[j] + "</td>");
	      if (j == index) {
		
		  index += 7;
		  response.write("<td><a id='#showPic' href='./data/photos/"+ csvSearchData[j]+"' >Show Picture</a></td>");
	
		
                response.write("</tr>");
	      
              }


                         
	  }

      
            response.write("</table>");
            response.write(
              "<div class='col-3 ms-5 my-5'><button type='submit' id='goBack' class='btn btn-dark'>Go Back</button></div>"
            );
            response.end();
          }
        });
      }
    });
  } else {
    //exports.reqError(filepath, response);
  }
};

exports.reqPhoto = function (path, response) {
  let filepath = "./data" + path;
  if (fs.existsSync(filepath)) {
    let header = filepath.toLowerCase().endsWith(".png")
      ? { "content-type": "image/png" }
      : defaultHeader;
    let format = header == defaultHeader ? "utf8" : null;
    fs.readFile(filepath, format, function (err, data) {
      response.writeHead(200, header);
      response.write(data);
      response.end();
    });
  } else {
    exports.reqError(path, response);
  }
};

exports.reqError = function (path, response) {
  response.writeHead(404, defaultHeader);
  response.write("<h1>404 Error</h1>");
  response.write("<p>Path not found: " + path + "</p>");
  response.end();
};
