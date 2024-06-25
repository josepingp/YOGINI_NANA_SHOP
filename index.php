<?php
require_once "inc/autoloader.php";
require_once "./vendor/autoload.php";
require_once "config.php";

use Lib\Router;


session_start();
ob_start();




Router::dispatch();



