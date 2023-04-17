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
        if(url === "/"){
            sendResponse("japanln.html", 200, response);
        }
        else if(url === "/kr"){
            sendResponse("./koreanln.html", 200, response);
        }
        else{
            sendResponse("./notPage.html", 400, response);
        }
    } else{

    }

});


server.listen(8000, () =>{
    console.log("Working...");
});