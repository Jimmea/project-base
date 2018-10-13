<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 10/13/18
 * Time: 9:05 PM
 */

namespace App\Repositories\Frontend\Product;


interface ProductRepositoryInterface
{
    public function getListProduct();
    public function getDetailProduct($product_id);
}