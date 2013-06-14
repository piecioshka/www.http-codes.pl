<?php

$code = 200;
$prefix = "HTTP/1.1 ";
$header = "200 OK";

if (isset($_REQUEST['code'])) {
    $code = $_REQUEST['code'];
}

switch ($code) {
    case 404: $header = "404 Not Found"; break;
    case 500: $header = "500 Internal Server Error"; break;
}

header($prefix . $header);
echo("");
die;

?>