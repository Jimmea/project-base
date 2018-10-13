<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 10/9/18
 * Time: 11:56 PM
 */

namespace Modules\Admin\Repositories\AttributeValue;


interface AttributeValueRepositoryInterface
{
    public function list($filter, $order, $limit);
}