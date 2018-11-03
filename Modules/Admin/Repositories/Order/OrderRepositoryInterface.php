<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 10/14/18
 * Time: 4:43 PM
 */

namespace Modules\Admin\Repositories\Order;


interface OrderRepositoryInterface
{
    public function list($filters, $order, $limit = 20);
}