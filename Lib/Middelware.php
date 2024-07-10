<?php
namespace Lib;

use Models\User;
use Lib\AuthJWT;
use Firebase\JWT\Key;
use Firebase\JWT\JWT;

class Middelware
{
    private AuthJWT $jwt;

    public function __construct()
    {
        $this->jwt = new AuthJWT();
    }

    public function handle($request, $next)
    {
        if ($this->jwt->accessState()) {
            return $next($request);
        } else {
            header('Location: /Yoguini_Nana_Shop/');
        }
    }
    
}