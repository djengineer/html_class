
import http.server
from http.server import BaseHTTPRequestHandler, HTTPServer
from http.server import HTTPServer, SimpleHTTPRequestHandler
httpd = HTTPServer(('localhost', 8080), SimpleHTTPRequestHandler)


if __name__ == "__main__":
	httpd.serve_forever()
