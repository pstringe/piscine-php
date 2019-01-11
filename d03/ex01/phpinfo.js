const nodeinfo = require('nodejs-info');
const http = require('http');

const app = http.createServer((request, response) => {
	response.writeHead(200, {"Content-Type": "text/html"});
	response.end(nodeinfo(request));
});

app.listen(8080);
