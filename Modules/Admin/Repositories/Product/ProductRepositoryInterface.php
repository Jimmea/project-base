<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 9/29/18
 * Time: 1:23 AM
 */

namespace Modules\Admin\Repositories\Product;


interface ProductRepositoryInterface
{
    public function list($filters, $order, $limit);
    public function findOrFail($id);
    public function create();
    public function update();
    public function destroy();
}