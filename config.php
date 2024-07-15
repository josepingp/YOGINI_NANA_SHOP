<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','yogini_nana');

define('CATEGORIES', [
            'moda' => '1',
            'zafus' => '2',
            'esterillas' => '3',
            'mantas' => '4',
            'accesorios' => '5',
            'meditacion' => '6'
]);

define('ROUTES', [
    '' => '.css',
    'user/register' => 'user/register.css',
    'user/login' => 'user/login.css',
    'user/myaccount' => 'user/myaccount.css',
    'products' => 'products.css',
    'products/:category' => 'products.css'
]);