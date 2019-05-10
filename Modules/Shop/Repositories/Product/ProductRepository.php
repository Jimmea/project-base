<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 10/13/18
 * Time: 9:06 PM
 */

namespace Modules\Shop\Repositories\Product;


use Modules\Shop\Entities\Product;

class ProductRepository implements ProductRepositoryInterface
{
    protected $model;
    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function getDetailProduct($product_id)
    {
        $product = $this->model->findOrFail($product_id);
        return $product;
    }

    public function getListProduct()
    {
        // TODO: Implement getListProduct() method.
    }


}