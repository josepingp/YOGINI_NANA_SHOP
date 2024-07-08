<?php
namespace Controllers;

use Lib\AuthJWT;
use Services\ProductsService;
use Services\UsersService;
use Lib\Pages;


class HomeController
{
    private UsersService $userService;
    private Pages $pages;
    private AuthJWT $authJWT;
    private ProductsService $productsService;

    public function __construct()
    {
        $this->userService = new UsersService();
        $this->productsService = new ProductsService();
        $this->pages = new Pages();
        $this->authJWT = new AuthJWT();
    }


    public function load()
    {
        $products = $this->productsService->findFeaturedProducts();

        if ($this->authJWT->accessState()) {
            $user = $this->userService->findUserByEmail($_SESSION['email']);
            $this->pages->render('home', ['user' => $user, 'products' => $products]);
        } else {
            $this->pages->render('home', ['products' => $products]);
        }
    }
    

}
