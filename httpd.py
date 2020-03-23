import SimpleHTTPServer
import SocketServer

Handler = SimpleHTTPServer.SimpleHTTPRequestHandler

httpd = SocketServer.TCPServer(('192.168.17.150', 80), Handler)

print("$$ HTTP Server for test in Web App Firewall v1.0 $$")
httpd.serve_forever()
