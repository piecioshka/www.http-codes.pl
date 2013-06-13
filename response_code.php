<?php

// see: http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html

// default response headers
$code = 200;
$prefix = "HTTP/1.1 ";
$header = "200 OK";

if (isset($_REQUEST['code'])) {
    $code = $_REQUEST['code'];
}

switch ($code) {
    case 100: $header = "100 Continue"; break;
    case 101: $header = "101 Switching Protocols"; break;
    case 200: $header = "200 OK"; break;
    case 201: $header = "201 Created"; break;
    case 202: $header = "202 Accepted"; break;
    case 203: $header = "203 Non-Authoritative Information"; break;
    case 204: $header = "204 No Content"; break;
    case 205: $header = "205 Reset Content"; break;
    case 206: $header = "206 Partial Content"; break;
    case 300: $header = "300 Multiple Choices"; break;
    case 301: $header = "301 Moved Permamently"; break;
    case 302: $header = "302 Found"; break;
    case 303: $header = "303 See Other"; break;
    case 304: $header = "304 Not Modified"; break;
    case 305: $header = "305 Use Proxy"; break;
    case 306: $header = "306 (Unused)"; break;
    case 307: $header = "307 Temporary Redirect"; break;
    case 400: $header = "400 Bad Request"; break;
    case 401: $header = "401 Unauthorized"; break;
    case 402: $header = "402 Payment Required"; break;
    case 403: $header = "403 Forbidden"; break;
    case 404: $header = "404 Not Found"; break;
    case 405: $header = "405 Method Not Allowed"; break;
    case 406: $header = "406 Not Acceptable"; break;
    case 407: $header = "407 Proxy Authentication Required"; break;
    case 408: $header = "408 Request Timeout"; break;
    case 409: $header = "409 Conflict"; break;
    case 410: $header = "410 Gone"; break;
    case 411: $header = "411 Length Required"; break;
    case 412: $header = "412 Precondition Failed"; break;
    case 413: $header = "413 Request Entity Too Large"; break;
    case 414: $header = "414 Request-URI Too Long"; break;
    case 415: $header = "415 Unsupported Media Type"; break;
    case 416: $header = "416 Requested Range Not Satisfiable"; break;
    case 417: $header = "417 Expectation Failed"; break;
    case 500: $header = "500 Internal Server Error"; break;
    case 501: $header = "501 Not Implemented"; break;
    case 502: $header = "502 Bad Gateway"; break;
    case 503: $header = "503 Service Unavailable"; break;
    case 504: $header = "504 Gateway Timeout"; break;
    case 505: $header = "505 HTTP Version Not Supported"; break;
}

header($prefix . $header);
echo ("Use param <em>code</em> in request to change response <em>HTTP Status</em>.");
die;

?>