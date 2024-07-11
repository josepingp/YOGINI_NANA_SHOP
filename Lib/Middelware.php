<?php
namespace Lib;

use Lib\AuthJWT;

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