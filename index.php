<?php

// source: http://en.wikipedia.org/wiki/List_of_HTTP_status_codes
// see: http://tools.ietf.org/html/rfc2324

// default response headers
$code = 200;
$prefix = "HTTP/1.1 ";
$header = "OK";

if (isset($_REQUEST['code'])) {
    if (is_numeric($_REQUEST['code'])) {
        $code = $_REQUEST['code'];
    }
}


switch ($code) {
    // 1xx
    case 100: $header = "Continue"; break;
    case 101: $header = "Switching Protocols"; break;
    case 102: $header = "Processing"; break;
    
    // 2xx
    case 200: $header = "OK"; break;
    case 201: $header = "Created"; break;
    case 202: $header = "Accepted"; break;
    case 203: $header = "Non-Authoritative Information"; break;
    case 204: $header = "No Content"; break;
    case 205: $header = "Reset Content"; break;
    case 206: $header = "Partial Content"; break;
    case 207: $header = "Multi-Status"; break;
    case 208: $header = "Already Reported"; break;
    case 226: $header = "IM Used"; break;
    
    // 3xx
    case 300: $header = "Multiple Choices"; break;
    case 301: $header = "Moved Permamently"; break;
    case 302: $header = "Found"; break;
    case 303: $header = "See Other"; break;
    case 304: $header = "Not Modified"; break;
    case 305: $header = "Use Proxy"; break;
    case 306: $header = "Switch Proxy"; break;
    case 307: $header = "Temporary Redirect"; break;
    case 308: $header = "Permanent Redirect"; break;
    
    // 4xx
    case 400: $header = "Bad Request"; break;
    case 401: $header = "Unauthorized"; break;
    case 402: $header = "Payment Required"; break;
    case 403: $header = "Forbidden"; break;
    case 404: $header = "Not Found"; break;
    case 405: $header = "Method Not Allowed"; break;
    case 406: $header = "Not Acceptable"; break;
    case 407: $header = "Proxy Authentication Required"; break;
    case 408: $header = "Request Timeout"; break;
    case 409: $header = "Conflict"; break;
    case 410: $header = "Gone"; break;
    case 411: $header = "Length Required"; break;
    case 412: $header = "Precondition Failed"; break;
    case 413: $header = "Request Entity Too Large"; break;
    case 414: $header = "Request-URI Too Long"; break;
    case 415: $header = "Unsupported Media Type"; break;
    case 416: $header = "Requested Range Not Satisfiable"; break;
    case 417: $header = "Expectation Failed"; break;
    case 418: $header = "I'm a teapot"; break;
    case 420: $header = "Enhance Your Calm"; break;
    case 422: $header = "Unprocessable Entity"; break;
    case 423: $header = "Locked"; break;
    case 424: $header = "Failed Dependency"; break;
    case 425: $header = "Unordered Collection"; break;
    case 426: $header = "Upgrade Required"; break;
    case 428: $header = "Precondition Required"; break;
    case 429: $header = "Too Many Requests"; break;
    case 431: $header = "Request Header Fields Too Large"; break;
    case 444: $header = "No Response"; break;
    case 449: $header = "Retry With"; break;
    case 450: $header = "Blocked by Windows Parental Controls"; break;
    case 451: $header = "Unavailable For Legal Reasons"; break;
    case 494: $header = "Request Header Too Large"; break;
    case 495: $header = "Cert Error"; break;
    case 496: $header = "No Cert"; break;
    case 497: $header = "HTTP to HTTPS"; break;
    case 499: $header = "Client Closed Request"; break;
    
    // 5xx
    case 500: $header = "Internal Server Error"; break;
    case 501: $header = "Not Implemented"; break;
    case 502: $header = "Bad Gateway"; break;
    case 503: $header = "Service Unavailable"; break;
    case 504: $header = "Gateway Timeout"; break;
    case 505: $header = "HTTP Version Not Supported"; break;
    case 506: $header = "Variant Also Negotiates"; break;
    case 507: $header = "Insufficient Storage"; break;
    case 508: $header = "Loop Detected"; break;
    case 509: $header = "Bandwidth Limit Exceeded"; break;
    case 510: $header = "Not Extended"; break;
    case 511: $header = "Network Authentication Required"; break;
    case 598: $header = "Network read timeout error"; break;
    case 599: $header = "Network connect timeout error"; break;
    default:
        $code = 200;
        $header = "OK";
}

header($prefix . $code . " " . $header);
echo ($prefix . $code . " " . $header);
echo ("<br /><small>Use param <em>code</em> in request to change response <em>HTTP Status</em>.</small>");
die;

?>