const http = require("http");
const fs = require("fs");
const port = Math.floor(Math.random()*3500)+5000;
var fileType = "html";

const sendResponse = (filename, statusCode, response) =>{
    
    fs.readFile(`./${filename}`, (error, data) => {
        if(error){
            response.statusCode = 500;
            response.setHeader("Content-Type", "text/plain");
            response.end("Error");
        }else{
            response.statusCode = 200;
            response.setHeader("Content-Type", `text/${fileType}`);
            console.log(fileType);
            response.end(data);
        }
    });
};

http.createServer((request, response) => {
    console.log("start");
    console.log(request.url, request.method);
    var method = request.method;
    var url = request.url;


    if(method === "GET"){
        const requestUrl = new URL(url, `http://localhost:${port}`);
        console.log(requestUrl);

        var path = requestUrl.pathname;
        if(path === "/" || path === "/home.html" ){
            fileType = "html";
            sendResponse("home.html", 200, response);
            console.log("Finish");
        }
        else if(path === "/japanln.html"){
            fileType = "html";
            sendResponse("japanln.html", 200, response);
            console.log("Finish");
        }
        else if(path === "/koreanln.html"){
            fileType = "html";
            sendResponse("koreanln.html", 200, response);
        }
        else if(path === "/json/languageDb.json"){
            sendResponse("/json/languageDb.json", 200, response);
        }
        else if(path === "/css/style.css"){
            fileType = "css";
            sendResponse("/css/style.css", 200, response);
        }
        else if(path === "/js/script.js"){
            sendResponse("js/script.js", 200, response);
        }
        else{
            fileType = "html";
            sendResponse("notPage.html", 400, response);
        }
    } else{

    }

}).listen(port, ()=> {console.log("Working... " +port);});

