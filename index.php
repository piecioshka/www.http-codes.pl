<?php

// Enable CORS. More: http://enable-cors.org/server_php.html
header("Access-Control-Allow-Origin: *");

// english: http://en.wikipedia.org/wiki/List_of_HTTP_status_codes
// polish: http://pl.wikipedia.org/wiki/Kod_odpowiedzi_HTTP
// see: http://tools.ietf.org/html/rfc2324

// default response headers
$code = 200;
$prefix = "HTTP/1.1 ";
$header = "OK";
$section = 1;

if (isset($_REQUEST['code'])) {
    $code = intval(substr($_REQUEST['code'], 0, 3));
}

$codes = array(
    // 1xx
    100 => "Continue",
    101 => "Switching Protocols",
    102 => "Processing",
    111 => "Connection refused",

    // 2xx
    200 => "OK",
    201 => "Created",
    202 => "Accepted",
    203 => "Non-Authoritative Information",
    204 => "No Content",
    205 => "Reset Content",
    206 => "Partial Content",
    207 => "Multi-Status",
    208 => "Already Reported",
    226 => "IM Used",

    // 3xx
    300 => "Multiple Choices",
    301 => "Moved Permanently",
    302 => "Found",
    303 => "See Other",
    304 => "Not Modified",
    305 => "Use Proxy",
    306 => "Switch Proxy",
    307 => "Temporary Redirect",
    308 => "Permanent Redirect",

    // 4xx
    400 => "Bad Request",
    401 => "Unauthorized",
    402 => "Payment Required",
    403 => "Forbidden",
    404 => "Not Found",
    405 => "Method Not Allowed",
    406 => "Not Acceptable",
    407 => "Proxy Authentication Required",
    408 => "Request Timeout",
    409 => "Conflict",
    410 => "Gone",
    411 => "Length Required",
    412 => "Precondition Failed",
    413 => "Request Entity Too Large",
    414 => "Request-URI Too Long",
    415 => "Unsupported Media Type",
    416 => "Requested Range Not Satisfiable",
    417 => "Expectation Failed",
    418 => "I'm a teapot",
    420 => "Enhance Your Calm",
    422 => "Unprocessable Entity",
    423 => "Locked",
    424 => "Failed Dependency",
    425 => "Unordered Collection",
    426 => "Upgrade Required",
    428 => "Precondition Required",
    429 => "Too Many Requests",
    431 => "Request Header Fields Too Large",
    440 => "Login Timeout",
    444 => "No Response",
    449 => "Retry With",
    450 => "Blocked by Windows Parental Controls",
    451 => "Unavailable For Legal Reasons",
    494 => "Request Header Too Large",
    495 => "Cert Error",
    496 => "No Cert",
    497 => "HTTP to HTTPS",
    499 => "Client Closed Request",

    // 5xx
    500 => "Internal Server Error",
    501 => "Not Implemented",
    502 => "Bad Gateway",
    503 => "Service Unavailable",
    504 => "Gateway Timeout",
    505 => "HTTP Version Not Supported",
    506 => "Variant Also Negotiates",
    507 => "Insufficient Storage",
    508 => "Loop Detected",
    509 => "Bandwidth Limit Exceeded",
    510 => "Not Extended",
    511 => "Network Authentication Required",
    520 => "Origin Error",
    521 => "Web server is down",
    522 => "Connection timed out",
    523 => "Proxy Declined Request",
    524 => "A timeout occurred",
    525 => "Origin SSL Handshake Error",
    526 => "Invalid SSL Certificate",
    598 => "Network read timeout error",
    599 => "Network connect timeout error"
);

if (isset($codes[$code])) {
    $header = $codes[$code];
} else {
    $code = 200;
    $header = "OK";
}

header($prefix . $code . " " . $header);
echo("<h1>" . $prefix . $code . " " . $header . "</h1>");

echo "\n<ul>\n<li>\n";
foreach ($codes as $k => $v) {
    if ($section < (int)($k / 100)) {
        echo "</li>\n<li>\n";
        $section = (int)($k / 100);
    }

    echo '<a href="/' . $k . '">' . $k . '</a>' . "\n";
}
echo "</li>\n</ul>";

die;
