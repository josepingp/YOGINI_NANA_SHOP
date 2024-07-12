<?php
require_once "inc/autoloader.php";
require_once "./vendor/autoload.php";
require_once "config.php";

use Controllers\HomeController;
use Controllers\LoginController;
use Controllers\RegisterController;
use Controllers\AccountController;
use Lib\Middleware;
use Lib\AuthRolMiddleware;
use Lib\Router;

session_start();
ob_start();

$userMiddleware = new Middleware();
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

Router::add('GET', '/products/:categoria', function($categoria) {
    echo "El enrutador funciona nos lleva a categoria".$categoria;
});


//Rutas protegias por Autenticacion

Router::add('GET', '/user/myaccount', function () {
    return (new AccountController())->load();
}, [$userMiddleware]);

Router::add('POST', '/user/myaccount', function () {
    return (new AccountController())->update();
}, [$userMiddleware]);

//Rutas protegidas por rol

Router::add('GET', '/admin', function () {
    echo 'El enrutador funciona';
},[$authRolMiddleware]);


try {
Router::dispatch();
} catch (Exception $e) {
    // Manejar la excepción y mostrar un mensaje de error amigable
    echo "Se ha producido un error: " . $e->getMessage();
    // Opcionalmente, puedes registrar el error en un archivo de registro
}



// Router::dispatch();



