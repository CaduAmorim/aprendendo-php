<?php
/**
 * SUPERGLOBAIS
 * $GLOBALS
 * $_SERVER
 * $_POST
 * $_GET
 * $_FILES
 * $_ENV
 * $_REQUEST
 * $_COOKIE
 * $_SESSION
 */

// $GLOBALS
$x = 10;
$y = 15;

function somar(){
    echo $GLOBALS['x'] + $GLOBALS['y'];
}
somar();

// $_SERVER
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";


