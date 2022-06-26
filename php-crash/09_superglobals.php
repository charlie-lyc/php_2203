<?php
// Built-in variables that are always available in all scopes

/**
 * $GLOBALS
 * : holds information about any variables in global scope
 */
// var_dump($GLOBALS);
// echo '<br>';

/**
 * $_GET
 * : contains information about variables passed through a URL or a form
 */
// var_dump($_GET);
// echo '<br>';

/**
 * $_POST
 * : contains information about variables passed through a form
 */
// var_dump($_POST);
// echo '<br>';

/**
 * $_COOKIE
 * : contains information about variables passed through a cookie
 */
// var_dump($_COOKIE);
// echo '<br>';

/**
 * $_SESSION
 * : contains information about variables passed through a session
 */
// var_dump($_SESSION); // Warning: Undefined global variable ... NULL
// echo '<br>';

/**
 * $_SERVER
 * : contains information about the server environment
 */
// var_dump($_SERVER);
// echo '<br>';

/**
 * $_ENV
 * : contains information about the environment variables
 */
// var_dump($_ENV);
// echo '<br>';

/**
 * $_FILES
 * : contains information about files uploaded to the script
 */
// var_dump($_FILES);
// echo '<br>';

/**
 * $_REQUEST
 * : contains information about variables passed through the form or URL
 */
// var_dump($_REQUEST);
// echo '<br>';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
        <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
        <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
        <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
        <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
        <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
        <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
        <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
        <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
    </ul>
</body>

</html>

<!-- 
var_dump($_SERVER);

array(40) { 
    ["UNIQUE_ID"]=> string(27) "YrYupqCZnE0cMAbEUX-pQQAAAAI" 
    ["HTTP_HOST"]=> string(14) "localhost:8080" 
    ["HTTP_CONNECTION"]=> string(10) "keep-alive" 
    ["HTTP_CACHE_CONTROL"]=> string(9) "max-age=0" 
    ["HTTP_SEC_CH_UA"]=> string(66) "" Not A;Brand";v="99", "Chromium";v="102", "Google Chrome";v="102"" 
    ["HTTP_SEC_CH_UA_MOBILE"]=> string(2) "?0" 
    ["HTTP_SEC_CH_UA_PLATFORM"]=> string(7) ""macOS"" 
    ["HTTP_UPGRADE_INSECURE_REQUESTS"]=> string(1) "1" 
    ["HTTP_USER_AGENT"]=> string(117) "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36" 
    ["HTTP_ACCEPT"]=> string(135) "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9" 
    ["HTTP_SEC_FETCH_SITE"]=> string(11) "same-origin" 
    ["HTTP_SEC_FETCH_MODE"]=> string(8) "navigate" 
    ["HTTP_SEC_FETCH_DEST"]=> string(8) "document" 
    ["HTTP_REFERER"]=> string(51) "http://localhost:8080/php-crash/09_superglobals.php" 
    ["HTTP_ACCEPT_ENCODING"]=> string(17) "gzip, deflate, br" 
    ["HTTP_ACCEPT_LANGUAGE"]=> string(35) "en-US,en;q=0.9,ko-KR;q=0.8,ko;q=0.7" 
    ["PATH"]=> string(75) "/opt/lampp/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin" 
    ["LD_LIBRARY_PATH"]=> string(29) "/opt/lampp/lib:/opt/lampp/lib" 
    ["SERVER_SIGNATURE"]=> string(0) "" 
    ["SERVER_SOFTWARE"]=> string(74) "Apache/2.4.53 (Unix) OpenSSL/1.1.1o PHP/8.1.6 mod_perl/2.0.12 Perl/v5.34.1" 
    ["SERVER_NAME"]=> string(9) "localhost" 
    ["SERVER_ADDR"]=> string(9) "127.0.0.1" 
    ["SERVER_PORT"]=> string(4) "8080" 
    ["REMOTE_ADDR"]=> string(9) "127.0.0.1" 
    ["DOCUMENT_ROOT"]=> string(17) "/opt/lampp/htdocs" 
    ["REQUEST_SCHEME"]=> string(4) "http" 
    ["CONTEXT_PREFIX"]=> string(0) "" 
    ["CONTEXT_DOCUMENT_ROOT"]=> string(17) "/opt/lampp/htdocs" 
    ["SERVER_ADMIN"]=> string(15) "you@example.com" 
    ["SCRIPT_FILENAME"]=> string(47) "/opt/lampp/htdocs/php-crash/09_superglobals.php" 
    ["REMOTE_PORT"]=> string(5) "42536" 
    ["GATEWAY_INTERFACE"]=> string(7) "CGI/1.1" 
    ["SERVER_PROTOCOL"]=> string(8) "HTTP/1.1" 
    ["REQUEST_METHOD"]=> string(3) "GET" 
    ["QUERY_STRING"]=> string(0) "" 
    ["REQUEST_URI"]=> string(30) "/php-crash/09_superglobals.php" 
    ["SCRIPT_NAME"]=> string(30) "/php-crash/09_superglobals.php" 
    ["PHP_SELF"]=> string(30) "/php-crash/09_superglobals.php" 
    ["REQUEST_TIME_FLOAT"]=> float(1656106662.40106296539306640625) 
    ["REQUEST_TIME"]=> int(1656106662) 
}
-->