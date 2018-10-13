<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 9/29/18
 * Time: 1:23 AM
 */

namespace Modules\Admin\Repositories\Product;


use App\Models\Product;
use App\Repositories\Abstracts\FilterBuilder;

class ProductRepository implements ProductRepositoryInterface
{
    use FilterBuilder;
    protected $model;

    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function list($filters, $order = ['id', 'DESC'], $limit = 20)
    {
        $mProduct = $this->model->whereRaw('1=1');
        $product = $mProduct->paginate($limit);

        return $product;
    }

    public function findOrFail($id)
    {
        $mProduct = $this->model->whereRaw('1=1');

    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}