<?php
namespace Services;

use Repositories\ShippingAddressRepository;
use Utils\DataCleaner;
use Utils\ImageUploader;
use Lib\AuthJWT;
use Models\ShippingAddress;
use Exception;

class ShippingAddressService
{
    private ShippingAddressRepository $repo;

    public function __construct() {
        $this->repo = new ShippingAddressRepository();
    }

    public function getMainAddressByUserId(int $id): ?ShippingAddress
    {
        return $this->repo->getMainAddressByUserId($id);
    }

    public function updateShippingAddress()
    {
        
    }
}