<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 10/14/18
 * Time: 4:44 PM
 */

namespace Modules\Admin\Repositories\Order;


use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    protected $model;

    public function __construct(Order $order)
    {
        $this->model = $order;
    }

    public function list($filters, $order=[], $limit = 20)
    {
        $mOrder = $this->model->whereRaw('1=1');
        $orders = $mOrder->paginate($limit);

        return $orders;
    }
}