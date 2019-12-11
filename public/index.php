<?php
ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);

define("BASENAME", realpath(dirname(__DIR__)).'\app');

// Autoload composer
require_once '../vendor/autoload.php';

// Uso de librerías 

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

// Archivo de rutas
require_once '../app/Routes/web.php';