const http = require("http");
const fs = require("fs");

const sendResponse = (filename, statusCode, response) =>{
    fs.readFile("../" + filename, (error, data) => {
        if(error){
            response.statusCode = 500;
            response.setHeader("Content-Type", "text/plain");
            response.end("Error");
        }else{
            response.statusCode = 200;
            response.setHeader("Content-Type", "text/html");
            response.end(data);
        }
    });
};

const server = http.createServer((request, response) => {
    console.log(request.url, request.method);
    const method = request.method;
    const url = request.url;

    if(method === "GET"){
        const requestUrl = new URL(url, 'http://localhost:8000');
        console.log(requestUrl);
        if(url === "/" || url === "/home.html" ){
            sendResponse("home.html", 200, response);
        }
        else if(url === "/japanln.html"){
            sendResponse("japanln.html", 200, response);
        }
        else if(url === "/koreanln.html"){
            sendResponse("koreanln.html", 200, response);
        }
        else{
            sendResponse("notPage.html", 400, response);
        }
    } else{

    }

}).listen(8000, ()=> {console.log("Working...");});
