<?php
require_once "inc/autoloader.php";
require_once "./vendor/autoload.php";
require_once "config.php";

use Controllers\HomeController;
use Controllers\LoginController;
use Controllers\RegisterController;
use Controllers\AccountController;
use Lib\Middelware;
use Lib\AuthRolMiddleware;
use Lib\Router;

session_start();
ob_start();

$authMiddleware = new Middelware();
$authRolMiddleware = new authRolMiddleware();



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

Router::add('GET', '/user/close_sesion', function () {
    return (new LoginController())->closeSesion();
});

Router::add('GET', 'product/:categoria', function($categoria) {
    echo "El enrutador funciona nos lleva a categoria".$categoria;
});

//Rutas protegias por Autenticacion

Router::add('GET', '/user/myaccount', function () {
    return (new AccountController())->load();
}, [$authMiddleware, 'handle']);

Router::add('POST', '/user/myaccount', function () {
    return (new AccountController())->update();
}, [$authMiddleware, 'handle']);

//Rutas protegidas por rol








Router::dispatch();



