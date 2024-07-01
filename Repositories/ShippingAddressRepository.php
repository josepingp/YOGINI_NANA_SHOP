<?php
namespace Repositories;

use Lib\Db;
use Models\ShippingAddress;


class ShippingAddressRepository
{
    private Db $conexion;

    public function __construct()
    {
        $this->conexion = new Db();
    }

    public function getMainAddressByUserId(int $id): ?ShippingAddress
    {
        $this->conexion->query("SELECT * FROM shipping_addresses WHERE is_main = 1 AND user_id = $id");
        return $this->conexion->get();
    }
}
