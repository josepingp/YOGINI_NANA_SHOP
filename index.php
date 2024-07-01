<?php
require_once "inc/autoloader.php";
require_once "./vendor/autoload.php";
require_once "config.php";

use Controllers\HomeController;
use Controllers\LoginController;
use Controllers\RegisterController;
use Controllers\AccountController;
use Lib\Router;

session_start();
ob_start();



Router::add('GET', '/', function () {
    return (new HomeController())->load();
});

Router::add('GET', '/user/register', function () {
    return (new RegisterController())->loadRegister();
});

Router::add('POST', '/user/register', function () {
    return (new RegisterController())->createUser();
});

Router::add('GET', '/user/login', function () {
    return (new LoginController())->loadLogin();
});

Router::add('POST', '/user/login', function () {
    return (new LoginController())->login();
});

Router::add('GET', '/user/myaccount', function () {
    return (new AccountController())->load();
});

Router::add('POST', '/user/myaccount', function () {
    return (new AccountController())->update();
});






Router::dispatch();



