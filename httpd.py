import SimpleHTTPServer
import SocketServer

Handler = SimpleHTTPServer.SimpleHTTPRequestHandler

httpd = SocketServer.TCPServer(('', 8080), Handler)

print("$$ HTTP Server for test in Web App Firewall v1.0 $$")
httpd.serve_forever()
